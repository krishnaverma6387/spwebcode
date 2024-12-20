<?php

defined('BASEPATH') or exit('No direct script access allowed');

$config['google']['client_id'] = '711233461022-kcfbr28nc5hl0c6racrsv01b7edqet12.apps.googleusercontent.com';

$config['google']['client_secret'] = '17zCzb2sKQtcGE8MPgRgzoVJ';

$config['google']['redirect_uri'] = base_url('Home/AccessUsingGoogle');

$config['google']['application_name'] = 'Login to DigiCademy';

$config['google']['api_key'] = 'AIzaSyB5KfatRRKMhRy_0ydPPwlU6VjGInA3RXc';

$config['google']['scopes'] = array('profile', 'email');
