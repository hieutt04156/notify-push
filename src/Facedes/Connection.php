<?php
namespace Adayroi\NotificationPush\Facedes;

use Illuminate\Support\Facades\Facade as IlluminateFacade;

class Connection extends IlluminateFacade 
{
  protected static function getFacadeAccessor()
  {
      return 'noticationpush';
  }
}
?>
