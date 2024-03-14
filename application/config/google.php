<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Google API Configuration
| -------------------------------------------------------------------
| 
| To get API details you have to create a Google Project
| at Google API Console (https://console.developers.google.com)
| 
|  client_id         string   Your Google API Client ID.
|  client_secret     string   Your Google API Client secret.
|  redirect_uri      string   URL to redirect back to after login.
|  application_name  string   Your Google application name.
|  api_key           string   Developer key.
|  scopes            string   Specify scopes
*/
$config['google']['client_id']        = '352856099146-f3c8v787p7aa7q3tufunbuijv7oa8mqk.apps.googleusercontent.com';
$config['google']['client_secret']    = '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';
$config['google']['redirect_uri']     = 'http://localhost/ci-login-fb/user_authentication/';
$config['google']['application_name'] = 'Login to Google';
$config['google']['api_key']          = '';
$config['google']['scopes']           = array();