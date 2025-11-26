<?php
namespace local_heartbeat\privacy;

defined('MOODLE_INTERNAL') || die();

class provider implements \core_privacy\local\metadata\null_provider {

    public static function get_reason() : string {
        return 'This plugin stores no personal data.';
    }
}
