<?php

use Carbon\Carbon;

/**
 * @param null $time
 * @param null $tz
 * @return \Carbon\Carbon
 * @throws \Exception
 */
function carbon($time = null, $tz = null)
{
    return new Carbon($time, $tz);
}

/**
 * @return App\Services\MetaDataService
 */
function meta()
{
    return app(App\Services\MetaDataService::class);
}

function is_valid_url($url)
{
    if (empty($url)) {
        return false;
    }

    $url = urldecode($url);

    // Weird Bug, Laravel fails to validate Decoded URL with space in it.
    $url = str_replace(' ', '%20', $url);

    $valid = app('validator')->make(['url' => $url], [
        'url' => 'url',
    ]);

    return $valid->passes();
}

/**
 * Get IP Address, checks for cloudflare headers.
 *
 * @return string
 */
function get_ip()
{
    if (getenv('HTTP_CF_CONNECTING_IP') && is_valid_ip(getenv('HTTP_CF_CONNECTING_IP'))) {
        return getenv('HTTP_CF_CONNECTING_IP');
    }

    return request()->getClientIp();
}


/**
 * Check if IP Address is a valid IP.
 *
 * @param string $ip IP address
 * @param string $which IP protocol: 'ipv4' or 'ipv6'
 *
 * @return bool
 */
function is_valid_ip($ip, $which = 'ipv4')
{
    if ($ip == '0.0.0.0' || $ip == '127.0.0.1') {
        return false;
    }
    switch (strtolower($which)) {
        case 'ipv4':
            $which = FILTER_FLAG_IPV4;
            break;
        case 'ipv6':
            $which = FILTER_FLAG_IPV6;
            break;
        default:
            $which = null;
            break;
    }

    return (bool)filter_var($ip, FILTER_VALIDATE_IP, $which);
}

/**
 * Check if ip is a valid ipv6
 *
 * @param $ip
 * @return bool
 */
function is_valid_ipv6($ip)
{
    return is_valid_ip($ip, 'ipv6');
}

/**
 * Validate IPv4 Address (Check if it is a public IP).
 *
 * @param string $ip IP address
 *
 * @return bool
 */
function is_public_ip($ip)
{
    if (!is_valid_ip($ip)) {
        return false;
    }

    return (bool)filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE);
}
