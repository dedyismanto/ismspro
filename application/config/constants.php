<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ', 'rb');
define('FOPEN_READ_WRITE', 'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE', 'ab');
define('FOPEN_READ_WRITE_CREATE', 'a+b');
define('FOPEN_WRITE_CREATE_STRICT', 'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
define('EXIT_SUCCESS', 0); // no errors
define('EXIT_ERROR', 1); // generic error
define('EXIT_CONFIG', 3); // configuration error
define('EXIT_UNKNOWN_FILE', 4); // file not found
define('EXIT_UNKNOWN_CLASS', 5); // unknown class
define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
define('EXIT_USER_INPUT', 7); // invalid user input
define('EXIT_DATABASE', 8); // database error
define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


define('BASEURL','http://127.0.0.1/ismspro/');
define('CSS',BASEURL.'assets/css/');
define('JS',BASEURL.'assets/js/');
define('IMAGES',BASEURL.'assets/images/');
define('FONT_AWESOME',BASEURL.'assets/font-awesome/');

define('COMPANY_NAME', 'Media Baru Digital');
define('KEY','ZmI1YmQ1YTM4NTUwNTBiZjIyYzJkN2UxMDRiZGJhZWM=tr3/wptIv012sCgkJJG5hbWVTYWx0ID0gImFjaGlsIjsKCQkkY29tcGFueU5hbWVFbmNvZGUgPSBiYXNlNjRfZW5jb2RlKENPTVBBTllfTkFNRSk7CgkJJHNhbHRFbmNvZGUgPSBoYXNoKCJTSEEyNTYiLCRuYW1lU2FsdCk7CgkJJGNvbXBhbnlTYWx0ID0gJGNvbXBhbnlOYW1lRW5jb2RlLiRzYWx0RW5jb2RlOwoJCSRDT01LRVkgPSBiYXNlNjRfZW5jb2RlKG1kNSgkY29tcGFueVNhbHQpKTs=tr3/wptIv012simlQuUXDS88E8ZH+MYlFwAFjGs5wy9mt5nD0HpRIUNDnxR9MmLW6q4Z05DEMx9cItLjthE8HxWjak4g2ACmN03ZjnOCYu7qEO25cE7m9JuJ+JpAVeblnKcQrPVMaIW721/EsR42gp12frlr/a0cRJ1HBhpZApVDDcWKsUqoW+uMtRhsnQj/y80uxCqhN4TwRlMBYfBNXQiM7weU/vrrd5HUEuHcPb4WZB+bFYHZivmjbj5D+tIm0QL8ZHnQvXAAZmfuga925BggUtriLIptvwju9Ren7dAhfct/AsiVg+NYYanIOvRVJF4ZiC8ZX3EmCIk1NwtB43M29530v4o6mrBZGRlwMIs2II3nUDPX8MdnbY5SQFT0YYZ/qxGuVKOh+tfZuME/V81Ma1HHIOPCxXYuwBDDYsw3otYZqeoPtXJ7NqoWHVF6au9tJUB/i2CvJl8h6yuGCr/aOPJxdSsZIHp1dm4gSzl8o7rHCDCvqvPGcF1xLByVmXs7Df3dD6gg6bptoXKofEX2sMnaH2QCwnJpi3eE17V848k8Hb+ANhlZj/Flp+QRPkUqCBI4SP0ex92vVpzuR4RrfkfhpiJkW7TMHrGeOln1FS67RRWwiS0T8Ovn4iZgx1dhefxsuj3Z+rhyS0jhQ2H/XlwAzvTgPaKtHiBSeHSo9utahfa09oMDuOj50sq33Yg2mcoOodTQjhs2bu6wcWRB7x0qATIdC0Iw05q3ULsBerXdFkPWsCg5Om3CE6VrOj/tFuDpDHKCf92Cf4lUfyIIgP81spqHCx2kHG+SdOhQuaN3r+u5kbKxQ==tr3/wptIv012sCgkJJGtleSA9IGhhc2goIlNIQTI1NiIsICIha1FtKmZGM3BYZTFLYm0lOSIuICIxMjM0MzIxIiwgdHJ1ZSk7CgkJJGl2ID0gYmFzZTY0X2RlY29kZShzdWJzdHIoJEtFWUdFTlsyXSwgMCwgMjIpIC4gIj09Iik7CgkJJGVuY3J5cHRlZCA9IHN1YnN0cigkS0VZR0VOWzJdLCAyMik7CgkJJGRlY3J5cHRlZCA9IHJ0cmltKG1jcnlwdF9kZWNyeXB0KE1DUllQVF9SSUpOREFFTF8xMjgsICRrZXksIGJhc2U2NF9kZWNvZGUoJGVuY3J5cHRlZCksIE1DUllQVF9NT0RFX0NCQywgJGl2KSwgIlwwXDQiKTsKCQkkaGFzaCA9IHN1YnN0cigkZGVjcnlwdGVkLCAtMzIpOwoJCSRkZWNyeXB0ZWQgPSBzdWJzdHIoJGRlY3J5cHRlZCwgMCwgLTMyKTsKCQlpZiAobWQ1KCRkZWNyeXB0ZWQpICE9ICRoYXNoKSByZXR1cm4gZmFsc2U7CgkJJEREQyA9ICBiYXNlNjRfZGVjb2RlKCRkZWNyeXB0ZWQpOwoJCWV2YWwoYmFzZTY0X2RlY29kZSgkS0VZR0VOWzFdKSk7CgkJZXZhbCgkRERDKTsKCQk=');