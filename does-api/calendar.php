<?php
$json = json_encode(file_get_contents('https://www.google.com/calendar/ical/e54bcu29fgo30fv7s20ar4plfo%40group.calendar.google.com/public/basic.ics'));
if (!empty($_REQUEST['callback'])) {
    $json = $_REQUEST['callback']."($json)";
}
echo $json;
