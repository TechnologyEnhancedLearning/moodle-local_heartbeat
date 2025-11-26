<?php

function local_heartbeat_before_http_headers() {
    global $PAGE;

    $keepaliveurl = get_config('local_heartbeat', 'keepaliveurl');
    $interval     = get_config('local_heartbeat', 'interval');

    $interval = $interval * 1000;

    $PAGE->requires->js_call_amd(
        'local_heartbeat/heartbeat',
        'init',
        [$keepaliveurl, $interval]);
}