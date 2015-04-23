<?php 
namespace Adayroi\NotificationPush;

use Adayroi\NotificationPush\Facedes\Connection;
class Notification {
  
  /**
   * @param Connection;
   */
  public $connection;
  
  public function __construct() 
  {
    $this->connection = Connection::getConnection();
  }
  
  public function send($data) 
  {
    return $this->connection->send($data);
  }
}
