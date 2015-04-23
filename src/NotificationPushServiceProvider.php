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
    // Connection
    $this->app->bindShare('notificationpushconnection', function($app){
      $config = $app->config->get('notificationpush::config');
      return new Connection($config);
    });
    
    // Notification push
    $this->app->bindShare('notificationpush', function($app){
      return new Notification();
    });
  }
  
}
