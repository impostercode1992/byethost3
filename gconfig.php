<?php

// Fill these out with the values you got from Google
$googleClientID = '53470530043-5gvhfeap2r8e2vjdjbjl82q22u75pq5k.apps.googleusercontent.com';
$googleClientSecret = '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';

// This is the URL we'll send the user to first to get their authorization
$authorizeURL = 'https://accounts.google.com/o/oauth2/v2/auth';

// This is Google's OpenID Connect token endpoint
$tokenURL = 'https://www.googleapis.com/oauth2/v4/token';

// The main application URL. Google will pass JWT token back to the main app
$baseURL = 'https://www.norsats.my/g2auth.php';

$usserInfoURL = 'https://www.googleapis.com/oauth2/v3/userinfo';

// the initial app url
$initialAppURL = 'https://www.norsats.my';