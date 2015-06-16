<?php /*
|--------------------------------------------------------------------------
| Detect The Application Environment
|--------------------------------------------------------------------------
*/

$env = $app->detectEnvironment(function(){
  //Load default configurations
  if (file_exists(base_path().'\.env'))
    Dotenv::load(base_path());
      
  //Load specific configurations based on APP_ENV
  if (getenv('APP_ENV') && file_exists(__DIR__.'/../.env.' . getenv('APP_ENV')))
     Dotenv::load(__DIR__ . '/../', ".env." . getenv('APP_ENV'));
});