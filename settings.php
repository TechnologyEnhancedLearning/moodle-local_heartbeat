<?php
defined('MOODLE_INTERNAL') || die();

if ($hassiteconfig) {

    $settings = new admin_settingpage('local_heartbeat', get_string('pluginname', 'local_heartbeat'));

    $settings->add(
        new admin_setting_configtext(
            'local_heartbeat/keepaliveurl',
            get_string('keepaliveurl', 'local_heartbeat'),
            get_string('keepaliveurl_desc', 'local_heartbeat'),
            '',
            PARAM_URL
        )
    );

    $settings->add(
        new admin_setting_configtext(
            'local_heartbeat/interval',
            get_string('interval', 'local_heartbeat'),
            get_string('interval_desc', 'local_heartbeat'),
            600,
            PARAM_INT
        )
    );

    $ADMIN->add('localplugins', $settings);
}
