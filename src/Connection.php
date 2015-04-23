<?php
namespace Adayroi\NotificationPush;


class Connection
{
  
  /**
   * @param string
   */
  private $_servicename;
  
  /**
   * @var Socket
   */
  private $_connection;
  
  /**
   * @var String
   */
  private $_host;
  
  /**
   * @param integer
   */
  private $_port;
  
  /**
   * @param string  
   */
  private $_password;
  
  /**
   * @param array $config
   */
  public function __construct($port, $host, $password = "")
  {
    $this->_port = $port;
    $this->_host = $host;
    $this->_password = $password;
  }
  
  /**
   * @return socket
   */
  public function getConnection() 
  {
    if(!$this->_connection) {
      $this->_connection = socket_connect($this->_host, $this->_port);
    }
    return $this->_connection;  
  }
  
  
}
