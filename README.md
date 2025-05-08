# SecureExamAccess (local_secureaccess)

SecureAccess is a Moodle local plugin that restricts access to exams or activities based on IP address and device identification. It provides administrators and teachers with enhanced control over where and how users can access sensitive content, such as exams or assessments.

## Features

- Restrict user access based on:
  - IP address ranges
- Configure restriction rules per activity, course, or user group
- Logging and reporting of unauthorized access attempts
- Admin interface for managing allowed IPs and devices
- Optional whitelist for labs, classrooms, or trusted networks

## Use Cases

- Lockdown online exams to be accessible only from school labs
- Prevent access from mobile devices or unauthorized locations
- Limit students to one registered device per exam

## Installation

1. Copy the plugin folder `restrict` into Moodle’s `local/restrict` directory.
2. Run the Moodle upgrade process via the web interface or CLI.
3. Configure the plugin from:
   `Site administration > Plugins > Local plugins > Secure Exam Access`

## Requirements

- Moodle 4.2 or later
- PHP 7.4 or later

## Version

**1.0.0**
Initial release with basic IP and device restriction features.

## License

This plugin is licensed under the [GNU General Public License v3](http://www.gnu.org/copyleft/gpl.html).

## Author

Moayad Shloul


