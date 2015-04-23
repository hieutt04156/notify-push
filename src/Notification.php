<?php 
namespace Adayroi\NotificationPush;

use Adayroi\NotificationPush\Facedes\Connection;
class Notification {
  
  public $connection;
  
  public function __construct() 
  {
    $this->connection = Connection::getConnection();
  }
  
  public function send($data) {
    return $this->connection->send($data);
  }
}
