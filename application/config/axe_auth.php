<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * @author: andregarxia@gmail.com
 * Date: 30-11-2014
 * 
 */

/**
 * -------------------------------------------------------------------------
 * DATABASE TABLES CONFIGURATIONS
 * -------------------------------------------------------------------------
 * Change to suit yours needs.
 */

$config['tables']['users'] = 'users';
$config['tables']['login_attempts'] = 'login_attempts';


/**
 * -------------------------------------------------------------------------
 * PAGE SETTINGS
 * -------------------------------------------------------------------------
 * Redirect pages
 */

$config['page']['login_sucess'] = 'login_sucess.php';
$config['page']['login_failed'] = 'login.php';

/**
 * -------------------------------------------------------------------------
 * THROTTLE SETTINGS
 * -------------------------------------------------------------------------
 * Here is where it´s managed the login flow constriction.
 * Change it for harder or softer constrictions.
 */

/**
| -------------------------------------------------------------------------
| AUTHENTICATION OPTIONS
| -------------------------------------------------------------------------
| maximum_login_attempts: This maximum is not enforced by the library, but is
| used by $this->ion_auth->is_max_login_attempts_exceeded().
| The controller should check this function and act
| appropriately. If this variable set to 0, there is no maximum.
*/

$config['admin_email'] = "admin@example.com"; // Admin Email, admin@example.com
$config['email_templates'] = 'auth/email/';
$config['min_password_length'] = 8; // Minimum Required Length of Password
$config['max_password_length'] = 20; // Maximum Allowed Length of Password
$config['user_expire'] = 86500; // How long to remember the user (seconds). Set to zero for no expiration
$config['track_login_attempts'] = FALSE; // Track the number of failed login attempts for each user or ip.
$config['track_login_ip_address'] = TRUE; // Track login attempts by IP Address, if FALSE will track based on identity. (Default: TRUE)
$config['maximum_login_attempts'] = 3; // The maximum number of failed login attempts.
$config['lockout_time'] = 600; // The number of seconds to lockout an account due to exceeded attempts
$config['forgot_password_expiration'] = 0; // The number of milliseconds after which a forgot password request will expire. If set to 0, forgot password requests will not expire.


