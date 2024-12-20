<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'smtp.hostinger.com';
$config['smtp_port'] = 587;
$config['smtp_user'] = 'info@slickpattern.com'; // your email
$config['smtp_pass'] = 'SlickPattern@123'; // your email password
$config['smtp_crypto'] = 'tls';
$config['mailtype'] = 'html';
$config['charset'] = 'iso-8859-1';
$config['wordwrap'] = TRUE;
$config['newline'] = "\r\n"; // use double quotes for newline
