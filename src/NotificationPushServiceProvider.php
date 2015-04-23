<?php 
namespace Adayroi\NotificationPush;


class NotificationPushServiceProvider 
{
  
  
  public function boot()
  {
    $this->package('adayroi/notificationpush');
  }
  
  public function register() 
  {
    $this->app->bindShare('notificationpush', function($app){
      $config = $app->config->get('notificationpush::config');
      return new Connection($config);
    });
  }
  
}
