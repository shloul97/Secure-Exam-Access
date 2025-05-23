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
 *
 * @package local_restrict
 * @author Moayad Shloul
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir.'/formslib.php');



class add_user extends moodleform {

    protected function definition() {
       
        global $OUTPUT, $PAGE, $CFG;

        $mform = $this->_form;

        $mform->addElement('text','name','Lab name');
        $mform->settype('text', PARAM_NOTAGS);
        
        $mform->addElement('text','ipstart','IP Start');
        $mform->settype('text', PARAM_NOTAGS);

        $mform->addElement('text','ipend','IP End');
        $mform->settype('text', PARAM_NOTAGS);

        $buttonarray[] = $mform->createElement('submit', 'submitbutton', "Add");

        $mform->addGroup($buttonarray, 'buttonar', '', ' ', false);
        /*$maxbytes = 500;
        $mform->addElement(
            'filepicker',
            'userfile',
            get_string('file'),
            null,
            [
                'maxbytes' => $maxbytes,
                'accepted_types' => '*',
            ]
        );*/

       
        

    }
    

    function validation($data, $files)
    {
        return array();
    }

}
