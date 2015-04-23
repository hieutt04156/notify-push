<?php
namespace Adayroi\NotificationPush;


class Connection
{
  
  /**
   * @var Socket
   */
  public $connection;
  
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
    if(!$this->connection) {
      $socket = socket_create(AF_INET,SOCK_DGRAM,SOL_UDP);
      socket_connect($socket, $this->_host, $this->_port);
      $this->connection = $socket;
    }
    return $this;
  }
  
  /**
   * @param mixed $data
   */
  public function send($data)
  {
    $data = json_encode($data);
    socket_send($this->connection, $data, strlen($data), 0);
    return $this->read();
  }
  
  /**
   * @return string 
   */
  public function read() 
  {
    return trim(socket_read($this->connection, MAXLINE));  
  }
  
}
