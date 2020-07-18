<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Rules\Recaptcha;
use App\Services\AnonServices;
use Exception;

class ReportController extends Controller
{
    /**
     * @var \App\Services\AnonServices
     */
    private $anon_service;

    public function __construct()
    {
        $this->anon_service = app(AnonServices::class);
    }

    public function index()
    {
        meta()->setMeta('Report a link');

        return view('report');
    }

    public function post()
    {
        $this->validate(request(), [
            'url' => 'required|url',
            'email' => 'required|email',
            'comment' => 'required',
            'g-recaptcha-response' => [new Recaptcha()],
        ]);

        $url = request()->get('url');
        $link = $this->getLink($url);
        if (!$link) {
            return redirect()->back()->withErrors(['url' => 'This Link doesnt exist in our website.'])->withInput();
        }

        $reported = Report::where('link_id', $link->id)->first();
        if ($reported) {
            return redirect()->back()->withErrors(['url' => 'This Link is already reported.'])->withInput();
        }

        Report::create([
            'link_id' => $link->id,
            'url' => $url,
            'email' => request()->get('email'),
            'comment' => request()->get('comment'),
            'ip_address' => get_ip(),
        ]);

        flash('Link reported successfully!', 'success');
        return redirect()->back();
    }

    private function getLink($url)
    {
        $parsed = $this->anon_service->parseUrl($url);
        if ($parsed['host'] == parse_url(env('APP_URL'), PHP_URL_HOST)) {
            preg_match('/[A-Za-z0-9]{6}/', $parsed['path'], $matches);
            if (isset($matches[0])) {
                try {
                    return $this->anon_service->getLink($matches[0]);
                } catch (Exception $e) {
                }
            }
        }

        try {
            return $this->anon_service->findLink($url);
        } catch (Exception $e) {
        }

        return null;
    }
}
