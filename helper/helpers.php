<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

function getLastWordsFromString(string $string, int $length)
{
    $array = explode(' ', $string);
    array_splice($array, 0, -$length);
    return implode(' ', $array);
}

function getRelationsFromIncludeRequest($ignores = [])
{
    $request = app('Illuminate\Http\Request');
    $paramIncludes = config('repository.fractal.params.include', 'include');

    $defaultIgnores = ["permission", "permissions", "permissions_employee"];

    if ($request->has($paramIncludes)) {
        $include = $request->get($paramIncludes);
        $arrIncludes = explode(",", $include);
        foreach ($arrIncludes as $include) {
            foreach ($defaultIgnores as $ignore) {
                if (strpos($include, $ignore) > 0) {
                    $defaultIgnores[] = $include;
                }
            }
        }

        return array_diff($arrIncludes, array_merge($defaultIgnores, $ignores));
    }

    return [];

}

function trim_url($url)
{
    if (substr($url, 0, 7) === 'http://') return substr($url, 7);
    if (substr($url, 0, 8) === 'https://') return substr($url, 8);
    return $url;
}

function addhttps($url)
{
    $url = "https://" . trim_url($url);
//    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
//        $url = "https://" . trim_url($url);
//    }
    return $url;
}

function convert_email_form($email_form)
{
    $data = $email_form->template->content;

    $searchReplaceArray = array(
        '[[LOGO]]' => !empty($email_form->logo_url) ? addhttps($email_form->logo_url) : "https://d1j8r0kxyu9tj8.cloudfront.net/icons/no-logo.png",
        '[[AVT]]' => !empty($email_form->avatar_url) ? addhttps($email_form->avatar_url) : "https://d1j8r0kxyu9tj8.cloudfront.net/icons/no-logo.png",
        '[[TITLE]]' => (!empty($email_form->title) ? $email_form->title : "Tiêu đề"),
        '[[SUBTITLE]]' => (!empty($email_form->subtitle) ? $email_form->subtitle : "Phụ đề"),
        '[[CONTENT]]' => (!empty($email_form->content) ? $email_form->content : "Nội dung"),
        '[[FOOTER]]' => (!empty($email_form->footer) ? $email_form->footer : "Footer"),
        '[[BUTTONTEXT]]' => (!empty($email_form->title_button) ? $email_form->title_button : "Tiêu đề"),
        '[[BUTTONLINK]]' => (!empty($email_form->link_button) ? $email_form->link_button : "Link"),
    );


    $data = str_replace(
        array_keys($searchReplaceArray),
        array_values($searchReplaceArray),
        $data);
    return $data;
}

function rebuild_date($format, $time = 0)
{
    if (!$time) $time = time();
    $lang = array();
    $lang['sun'] = 'CN';
    $lang['mon'] = 'T2';
    $lang['tue'] = 'T3';
    $lang['wed'] = 'T4';
    $lang['thu'] = 'T5';
    $lang['fri'] = 'T6';
    $lang['sat'] = 'T7';
    $lang['sunday'] = 'Chủ nhật';
    $lang['monday'] = 'Thứ hai';
    $lang['tuesday'] = 'Thứ ba';
    $lang['wednesday'] = 'Thứ tư';
    $lang['thursday'] = 'Thứ năm';
    $lang['friday'] = 'Thứ sáu';
    $lang['saturday'] = 'Thứ bảy';
    $lang['january'] = 'Tháng Một';
    $lang['february'] = 'Tháng Hai';
    $lang['march'] = 'Tháng Ba';
    $lang['april'] = 'Tháng Tư';
    $lang['may'] = 'Tháng Năm';
    $lang['june'] = 'Tháng Sáu';
    $lang['july'] = 'Tháng Bảy';
    $lang['august'] = 'Tháng Tám';
    $lang['september'] = 'Tháng Chín';
    $lang['october'] = 'Tháng Mười';
    $lang['november'] = 'Tháng M. một';
    $lang['december'] = 'Tháng M. hai';
    $lang['jan'] = 'T01';
    $lang['feb'] = 'T02';
    $lang['mar'] = 'T03';
    $lang['apr'] = 'T04';
    $lang['may2'] = 'T05';
    $lang['jun'] = 'T06';
    $lang['jul'] = 'T07';
    $lang['aug'] = 'T08';
    $lang['sep'] = 'T09';
    $lang['oct'] = 'T10';
    $lang['nov'] = 'T11';
    $lang['dec'] = 'T12';
    $format = str_replace("r", "D, d M Y H:i:s O", $format);
    $format = str_replace(array("D", "M"), array("[D]", "[M]"), $format);
    $return = date($format, $time);
    $replaces = array(
        '/\[Sun\](\W|$)/' => $lang['sun'] . "$1",
        '/\[Mon\](\W|$)/' => $lang['mon'] . "$1",
        '/\[Tue\](\W|$)/' => $lang['tue'] . "$1",
        '/\[Wed\](\W|$)/' => $lang['wed'] . "$1",
        '/\[Thu\](\W|$)/' => $lang['thu'] . "$1",
        '/\[Fri\](\W|$)/' => $lang['fri'] . "$1",
        '/\[Sat\](\W|$)/' => $lang['sat'] . "$1",
        '/\[Jan\](\W|$)/' => $lang['jan'] . "$1",
        '/\[Feb\](\W|$)/' => $lang['feb'] . "$1",
        '/\[Mar\](\W|$)/' => $lang['mar'] . "$1",
        '/\[Apr\](\W|$)/' => $lang['apr'] . "$1",
        '/\[May\](\W|$)/' => $lang['may2'] . "$1",
        '/\[Jun\](\W|$)/' => $lang['jun'] . "$1",
        '/\[Jul\](\W|$)/' => $lang['jul'] . "$1",
        '/\[Aug\](\W|$)/' => $lang['aug'] . "$1",
        '/\[Sep\](\W|$)/' => $lang['sep'] . "$1",
        '/\[Oct\](\W|$)/' => $lang['oct'] . "$1",
        '/\[Nov\](\W|$)/' => $lang['nov'] . "$1",
        '/\[Dec\](\W|$)/' => $lang['dec'] . "$1",
        '/Sunday(\W|$)/' => $lang['sunday'] . "$1",
        '/Monday(\W|$)/' => $lang['monday'] . "$1",
        '/Tuesday(\W|$)/' => $lang['tuesday'] . "$1",
        '/Wednesday(\W|$)/' => $lang['wednesday'] . "$1",
        '/Thursday(\W|$)/' => $lang['thursday'] . "$1",
        '/Friday(\W|$)/' => $lang['friday'] . "$1",
        '/Saturday(\W|$)/' => $lang['saturday'] . "$1",
        '/January(\W|$)/' => $lang['january'] . "$1",
        '/February(\W|$)/' => $lang['february'] . "$1",
        '/March(\W|$)/' => $lang['march'] . "$1",
        '/April(\W|$)/' => $lang['april'] . "$1",
        '/May(\W|$)/' => $lang['may'] . "$1",
        '/June(\W|$)/' => $lang['june'] . "$1",
        '/July(\W|$)/' => $lang['july'] . "$1",
        '/August(\W|$)/' => $lang['august'] . "$1",
        '/September(\W|$)/' => $lang['september'] . "$1",
        '/October(\W|$)/' => $lang['october'] . "$1",
        '/November(\W|$)/' => $lang['november'] . "$1",
        '/December(\W|$)/' => $lang['december'] . "$1");
    return preg_replace(array_keys($replaces), array_values($replaces), $return);
}

function format_date($time)
{
    return rebuild_date('d F, Y', strtotime($time));
}

function format_timestamp_to_date($timestamp)
{
    return rebuild_date('d F, Y', $timestamp);
}

function format_vn_short_datetime($time)
{
    return rebuild_date('H:i d-m-Y', $time);
}

function format_datetime_to_mysql($time)
{
    return rebuild_date('Y-m-d H:i:s', $time);
}

function format_vn_datetime($time)
{
    return rebuild_date('H:i:s d-m-Y', $time);
}

function format_time($time, $format = 'Y-m-d H:i:s')
{
    return rebuild_date($format, $time);
}


function currency_vnd_format($number)
{
    return number_format($number) . "đ";
}


function gender($val)
{
    if ($val == 1) {
        return 'Nam';
    } elseif ($val == 2) {
        return 'Nữ';
    } else {
        return 'Khác';
    }
}

function getColor($color)
{
    if (empty($color)) return 'gray';
    if ($color[0] == '#') return $color;
    return '#' . $color;
}


function timeCal($time)
{
    if (empty($time)) return $time;
    $diff = abs(strtotime($time) - strtotime(\Illuminate\Support\Carbon::now()->toDateTimeString()));
    $diff /= 60;
    if ($diff < 60) {
        return floor($diff) . ' phút trước';
    }
    $diff /= 60;
    if ($diff < 24) {
        return floor($diff) . ' giờ trước';
    }
    $diff /= 24;
    if ($diff <= 30) {
        return floor($diff) . ' ngày trước';
    }
    return date('d-m-Y', strtotime($time));
}


function _empty($data, $field)
{
    $fields = explode('.', $field);
    foreach ($fields as $f) {
        if (empty($data[$f])) return true;
        $data = $data[$f];
    }

    return false;
}

function _g($data, $field)
{
    $fields = explode('.', $field);
    foreach ($fields as $f) {
        if (empty($data[$f])) return null;
        $data = $data[$f];
    }

    return $data;
}


function shouldPushCriteria($data, $field)
{

    if (_empty($data, $field)) return false;
    $data = $data[$field];
    $check = false;

    if (is_array($data)) {
        foreach (array_keys($data) as $f) {
            $check = $check || (!_empty($data, $f) && shouldPushCriteria($data, $f));
        }
    } else {
        $check = !empty($data);
    }
    return $check;
}

function timestampToDateSql($timestamp, $format = "Y-m-d H:i:s")
{
    if (empty($timestamp)) return null;
    $date = new \DateTime();
    return $date->setTimestamp($timestamp)->format($format);

}


function time_remain_string($ptime)
{
    $etime = $ptime - time();
    if ($etime < 1) {
        return "Hết giờ";
    } else {
        $a = array(365 * 24 * 60 * 60 => 'năm',
            30 * 24 * 60 * 60 => 'tháng',
            24 * 60 * 60 => 'ngày',
            60 * 60 => 'giờ',
            60 => 'phút',
            1 => 'giây'
        );


        foreach ($a as $secs => $str) {
            $d = $etime / $secs;
            if ($d >= 1) {
                $r = floor($d);
                return 'Còn ' . $r . ' ' . $str;
            }
        }
        return $str;
    }

}

function getDataByKeys($data, $keys)
{
    return array_filter(
        $data,
        function ($key) use ($keys) {
            return in_array($key, $keys);
        },
        ARRAY_FILTER_USE_KEY
    );
}

function getSettingByKey($settings, $key)
{
    foreach ($settings as $setting) {
        if ($setting->key == $key) {
            return $setting->value;
        }
    }
    return null;
}

function format_full_time_date($time)
{
    return rebuild_date("H:i, j F, Y", strtotime($time));
}

function getTypePayment($type)
{
    switch ($type) {
        case 'cash':
            return "Tiền mặt";
        case 'internet_banking':
            return "Chuyển khoản";
        case "swipe":
            return "Quẹt thẻ";
        default:
            return "";
    }
}


function next_register_code()
{
    $prefix_code = \App\Models\Setting::getSetting("prefix_code_register")->value;
    $prefix_code_wait = \App\Models\Setting::getSetting("prefix_code_wait_register")->value;
    $code = \App\Models\Register::where('code', 'like', $prefix_code . '%')
        ->where('code', 'not like', $prefix_code_wait . '%')->orderByRaw("SUBSTRING(code," . (strlen($prefix_code) + 1) . ",10)*1 DESC")->first();

    if ($code) {
        $code = $code->code;
        $nextNumber = explode($prefix_code, $code)[1];
        $nextNumber = $nextNumber != '' ? $nextNumber + 1 : $prefix_code . '1';
        return $prefix_code . $nextNumber;
    } else {
        return $prefix_code . '1';
    }
}


function convert_vi_to_en_not_url($str)
{
    // In thường
    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
    $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
    $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
    $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
    $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
    $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
    $str = preg_replace("/(đ)/", 'd', $str);
    // In đậm
    $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
    $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
    $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
    $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
    $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
    $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
    $str = preg_replace("/(Đ)/", 'D', $str);
//    $str = str_replace(" ", "-", str_replace("&*#39;", "", $str));
    return $str;
}

function convert_vi_to_en($str)
{
    // In thường
    $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
    $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
    $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
    $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
    $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
    $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
    $str = preg_replace("/(đ)/", 'd', $str);
    // In đậm
    $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
    $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
    $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
    $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
    $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
    $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
    $str = preg_replace("/(Đ)/", 'D', $str);
    $str = str_replace(" ", "-", str_replace("&*#39;", "", $str));
    return refine_url($str);
}

function createAvatarFromText($text, $background = '#2979FF', $color = '#FFFFFF', $length = 2)
{
    if ($background[0] == '#') {
        $background = preg_replace("/(#)/", '', $background);
    }
    if ($color[0] == '#') {
        $color = preg_replace("/(#)/", '', $color);
    }
    return "https://ui-avatars.com/api/?length=$length&name=$text&background=$background&color=$color";
}

function timeSqlModify($value, $modify)
{
    return timestampToDateSql(strtotime($value) + $modify);
}

function DBTransaction(\Closure $callback, \Closure $error = null, $messageError = "error")
{
    DB::beginTransaction();
    try {
        if (isset($callback) && is_callable($callback)) {
            $callback();
        }
        DB::commit();
    } catch (\Exception $e) {
        DB::rollBack();
        Log::error($messageError . $e);
        if (isset($error) && is_callable($error)) {
            $error($e);
        }
        throw $e;
    }
}

function sqlToTimestamp($value)
{
    if ($value) {
        return strtotime($value);
    }
    return null;
}

function haversineGreatCircleDistance(
    $latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371008)
{
    // convert from degrees to radians
    $latFrom = deg2rad($latitudeFrom);
    $lonFrom = deg2rad($longitudeFrom);
    $latTo = deg2rad($latitudeTo);
    $lonTo = deg2rad($longitudeTo);

    $latDelta = $latTo - $latFrom;
    $lonDelta = $lonTo - $lonFrom;

    $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
            cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
    return $angle * $earthRadius;
}
