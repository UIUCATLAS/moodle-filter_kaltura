<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Kaltura filter settings script.
 *
 * @package    filter_kaltura
 * @author     Remote-Learner.net Inc
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @copyright  (C) 2014 Remote-Learner.net Inc (http://www.remote-learner.net)
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    $settings->add(new admin_setting_configcheckbox('filter_kaltura_enable', get_string('enable', 'filter_kaltura'), get_string('enable_help', 'filter_kaltura'), 1));

    // The other two settings were put in the config table, which is poor design
    // this configuration setting is stored in the config_plugins table instead
    $settings->add(new admin_setting_configtext('filter_kaltura/preferred_playerid',
        get_string('preferred_playerid', 'filter_kaltura'),
        get_string('preferred_playerid_help', 'filter_kaltura'),
        ''
    ));

    $settings->add(new admin_setting_configtextarea('filter_kaltura_uris',
        get_string('uris', 'filter_kaltura'),
        get_string('uris_help', 'filter_kaltura'), ''));
}