# notify-push

# Usage

```

NotificationPush::send([
  
  // Driver 1
  'driver' => [
    'name' => 'user',
    'users' => [1, 2, 3]
  ],
  
  // Driver 2
  'driver' => [
    'name' => 'mysql',
    'database' => [
      'host'  => 'localhost',
      'user' => 'root',
      'password' => '123456',
      'database' => '123456'
    ]
  ]
  
  // Meta
  'meta' => [
    'verb' =>'10',
    'object' => [
      'type' => 'product',
      'id' => 10
    ]
  ]
]);

```