<?php /*
|--------------------------------------------------------------------------
| Detect The Application Environment
|--------------------------------------------------------------------------
|
| Laravel takes a dead simple approach to your application environments
| so you can just specify a machine name for the host that matches a
| given environment, then we will automatically detect it for you.
|
| Based on 
  - http://developers.ph/laravel-framework/laravel-5/how-to-setup-multiple-environment-for-laravel-5-developers-way/
  - https://mattstauffer.co/blog/laravel-5.0-environment-detection-and-environment-variables
  - 

TODO: Add Automatic Environmental detection.
*/


$env = $app->detectEnvironment(function(){
  //Load default configurations
  if (file_exists(base_path().'\.env'))
    Dotenv::load(base_path());
      
  //Load specific configurations based on APP_ENV
  if (getenv('APP_ENV') && file_exists(__DIR__.'/../.env.' . getenv('APP_ENV')))
     Dotenv::load(__DIR__ . '/../', ".env." . getenv('APP_ENV'));
});