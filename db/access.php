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
     *  block_course_daterollover
     *
     *  This plugin adjust assignment date according to the course start date , it will set forward assignment items  by x number of days, which includes allowsubmissionfrom,
     *  due-date, cutoffdate, upcoming events, in a course through one centralized screen  
     *  rather than having to go into each individual assignment activity.
     *
     * @author      Tsedey Terefe <snort.test123@gmail.com>
     * @license     GNU General Public License version 3
     * @package     block
     * @subpackage  course_daterollover
     */
defined('MOODLE_INTERNAL') || die();

$capabilities = array(

    'block/course_daterollover:changedate' => array(

        'captype' => 'write',
        'contextlevel' => CONTEXT_COURSE,
        'archetypes' => array(
            'teacher' => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
            'coursecreator' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        )
    ),
 
    // New standard capability 'addinstance'.
    'block/course_daterollover:addinstance' => array(
        'captype'       => 'write',
        'contextlevel'  => CONTEXT_COURSE,
        'archetypes'    => array(
            'editingteacher'    => CAP_ALLOW,
            'manager'           => CAP_ALLOW
        ),
        'clonepermissionsfrom'  => 'moodle/site:manageblocks'
    ),
);
