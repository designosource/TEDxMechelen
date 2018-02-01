<?php
/*
 * Secret key and Site key get on https://www.google.com/recaptcha
 * */
return [
    'secret' => env('CAPTCHA_SECRET', '6LcH2EMUAAAAAOg3FYGo9MsgnbSjAnV5q92mzGVI'),
    'sitekey' => env('CAPTCHA_SITEKEY', '6LcH2EMUAAAAAPoZuc99Fz-PxGiRA7jvLO9m3xpK')
];