<?php

namespace App\Services;

use App\Models\Link;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class UrlServices
{

    /**
     * @param $hash
     * @return Link
     */
    public function getLink($hash)
    {
        return Link::where('hash', $hash)->first();
    }

    public function getLinkByUrl($url)
    {
        $url = $this->parseUrl($url);

        $link = Link::where('url_scheme', $url['scheme'])->where('url_host', $url['host']);

        if (!empty($url['port'])) {
            $link = $link->where('url_port', $url['port']);
        } else {
            $link = $link->whereNull('url_port');
        }

        if (!empty($url['path'])) {
            $link = $link->where('url_path', $url['path']);
        } else {
            $link = $link->whereNull('url_path');
        }

        if (!empty($url['query'])) {
            $link = $link->where('url_query', $url['query']);
        } else {
            $link = $link->whereNull('url_query');
        }

        if (!empty($url['fragment'])) {
            $link = $link->where('url_fragment', $url['fragment']);
        } else {
            $link = $link->whereNull('url_fragment');
        }

        return $link->first();
    }

    /**
     * @param $url
     * @return array
     */
    public function parseUrl($url)
    {
        $defaults = [
            "scheme" => null,
            "host" => null,
            "port" => null,
            "user" => null,
            "pass" => null,
            "path" => null,
            "query" => null,
            "fragment" => null,
        ];
        $parsed = parse_url($url) + $defaults;
        if (!empty($parsed['path']) && $parsed['path'] == '/') {
            $parsed['path'] = null;
        }

        return $parsed;
    }

    /**
     * @param array $parsed
     * @return string
     */
    public function unParseUrl(array $parsed)
    {
        if (empty($parsed['path'])) {
            $parsed['path'] = '/';
        }

        $unparsed = $parsed['scheme'] . '://' . $parsed['host'];
        $unparsed .= !empty($parsed['port']) ? ':' . $parsed['port'] : '';
        $unparsed .= $parsed['path'];
        $unparsed .= !empty($parsed['query']) ? '?' . $parsed['query'] : '';
        $unparsed .= !empty($parsed['fragment']) ? '#' . $parsed['fragment'] : '';

        return $unparsed;
    }

    public function unParseUrlFromDb(Link $link)
    {
        $segments = [
            "scheme" => $link->url_scheme,
            "host" => $link->url_host,
            "port" => $link->url_port,
            "path" => $link->url_path,
            "query" => $link->url_query,
            "fragment" => $link->url_fragment,
        ];

        return $this->unParseUrl($segments);
    }

    public function saveLink($url)
    {
        if (!is_array($url)) {
            $url = $this->parseUrl($url);
        }

        $hash = $this->generateHash();

        $link = Link::where('hash', $hash)->first();
        while ($link) {
            $hash = $this->generateHash();
            $link = Link::where('hash', $hash)->first();
        }

        $link = Link::create([
            'hash' => $hash,
            'url_scheme' => $url['scheme'],
            'url_host' => $url['host'],
            'url_port' => $url['port'],
            'url_path' => $url['path'],
            'url_query' => $url['query'],
            'url_fragment' => $url['fragment'],
            'created_by' => auth()->check() ? auth()->id() : 1,
        ]);

        $this->cacheLink($link);

        return $hash;
    }

    /**
     * @param $link
     * @return Link
     */
    public function cacheLink(Link $link)
    {
        Cache::put($link->hash, $this->unParseUrlFromDb($link), 86400);

        return $link;
    }

    /**
     * @return string
     */
    public function generateHash()
    {
        $hash = Str::random(6);
        while (in_array(strtolower($hash), $this->excludedWords()->toArray())) {
            $hash = Str::random(6);
        }

        return $hash;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function excludedWords()
    {
        return collect(json_decode(File::get(storage_path('json/words-six.json')), true));
    }
}
