<?php
define('DBSERVER','127.0.0.1');
define('DBUSERNAME','root');
define('DBPASSWORD','');
define('DBNAME','logindata');

$db=mysqli_connect(DBSERVER,DBUSERNAME,DBPASSWORD,DBNAME);

if($db === false){
	die("Error:connection error.".mysqli_connect_error());
}
/*
CREATE TABLE users(
	ID int(11) unsigned NOT NULL AUTO_INCREMENT,
    NAME varchar(75) NOT NULL,
    PASSWORD varchar(255) NOT NULL,
    EMAIL varchar(100) NOT NULL,
    PRIMARY KEY(ID),
    UNIQUE KEY(EMAIL)
)ENGINE=INNODB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1;
*/
?>