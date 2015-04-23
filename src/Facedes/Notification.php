<?php
namespace Adayroi\NotificationPush\Facedes;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

class Notification extends IlluminateFacade 
{
  protected static function getFacadeAccessor()
  {
      return 'noticationpush';
  }
}
?>
