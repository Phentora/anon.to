<?php

use App\Services\MetaDataService;
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
 * @return MetaDataService
 */
function meta()
{
    return app(MetaDataService::class);
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
function is_valid_ip($ip, $which = null)
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

function flash($message, $type = 'info')
{
    if ($type == 'error') {
        $type = 'danger';
    }

    if (!in_array($type, ['success', 'info', 'warning', 'danger'])) {
        $type = 'info';
    }

    app('session')->flash('flash_message', [
        'type' => $type,
        'message' => $message,
    ]);
}


function sort_order($name, $order_column, $order_by, $default = 'desc')
{
    if ($name == $order_column) {
        return ($order_by == 'desc') ? 'asc' : 'desc';
    }

    return $default;
}

function sort_icon($name, $order_column, $order_by)
{
    if ($name == $order_column && $order_by == 'desc') {
        return '<i class="fa fa-fw fa-sort-down" title="Descending Order (big to small)"></i>';
    } elseif ($name == $order_column) {
        return '<i class="fa fa-fw fa-sort-up" title="Ascending Order (small to big)"></i>';
    }

    return '<i class="fa fa-fw fa-sort"></i>';
}

function sort_row($action_url, $param, $column, $title = null, $display = null, $default_order = 'desc')
{
    $url = url($action_url) . '?' .
        http_build_query($param['order_appends'] + [
                'order' => $column,
                'sort' => sort_order($column, $param['order'], $param['sort'], $default_order),
            ]);

    return '<a href="' . $url . '" class="sort" data-toggle="tooltip" title="Order by ' . ($title ? $title : Str::title($column)) . '">' .
        ($display ? $display : ($title ? $title : Str::title($column))) . sort_icon($column, $param['order'],
            $param['sort']) . "</a>";

}

function search_append($appends = [], $key, $value, $multiple = false)
{
    if ($multiple) {
        if (isset($appends[$key]) && is_array($appends[$key])) {
            array_push($appends[$key], $value);
            $appends[$key] = array_unique($appends[$key]);
        } else {
            $appends = array_merge($appends, [$key => [$value]]);
        }
    } else {
        $appends = array_merge($appends, [$key => $value]);
    }

    $appends = Arr::sort($appends);

    return '?' . http_build_query($appends);
}
