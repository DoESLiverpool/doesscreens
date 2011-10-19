<?php
header('Content-type: application/javascript');

if( $_REQUEST['cal'] == 'hotdeskers' ) {
    $json = json_encode(file_get_contents('http://www.google.com/calendar/ical/doesliverpool.com_l6b01q0dgpb8qdr2ljukjkbgs8%40group.calendar.google.com/private-63a7063e68ab0272af13f770bbf87b8e/basic.ics'));
} else if ($_REQUEST['cal'] == 'events') {
    $json = json_encode(file_get_contents('http://www.google.com/calendar/ical/doesliverpool.com_4f906tbj39irupt6crbjhi998k%40group.calendar.google.com/private-e1d1b34d2361a0e3360d9b33ae182012/basic.ics'));
}
if (!empty($_REQUEST['callback'])) {
    $json = $_REQUEST['callback']."($json)";
}
echo $json;
