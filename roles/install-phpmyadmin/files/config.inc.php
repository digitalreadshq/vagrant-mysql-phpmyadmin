<IfModule !mod_authz_core.c>
# Apache 2.2
Order Deny,Allow
Deny from All
Allow from 127.0.0.1
Allow from ::1
Allow from
Require ip ::1
</IfModule>
</Directory>

$cfg['Servers'][$i]['host'] = 'localhost'; // MySQL hostname or IP address
$cfg['Servers'][$i]['port'] = ''; // MySQL port - leave blank for default port
$cfg['Servers'][$i]['socket'] = ''; // Path to the socket - leave blank for default socket
$cfg['Servers'][$i]['connect_type'] = 'tcp'; // How to connect to MySQL server ('tcp' or 'socket')
$cfg['Servers'][$i]['extension'] = 'mysqli'; // The php MySQL extension to use ('mysql' or 'mysqli')
$cfg['Servers'][$i]['compress'] = FALSE; // Use compressed protocol for the MySQL connection
// (requires PHP >= 4.3.0)
$cfg['Servers'][$i]['controluser'] = ''; // MySQL control user settings
// (this user must have read-only
$cfg['Servers'][$i]['controlpass'] = ''; // access to the "mysql/user"
// and "mysql/db" tables).
