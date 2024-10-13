<?php
  $id = (int)$_POST['id'];

  $results = [];

  $paymentsCards = [
    [
      'id' => 1,
      'name' => '«Kaspi Bank»',
      'text' => '<p>Тел: + 7 707 549 08 06</p><p>YULIYA NAZARENKO</p><p>Номер карты: 5169 ХХХХ ХХХХ 7340</p>'
    ],
    [
      'id' => 2,
      'name' => '«ForteBank»',
      'text' => '<p>Тел: + 7 707 549 08 06</p><p>YULIYA NAZARENKO</p><p>Номер карты: 5243 ХХХХ ХХХХ 4249</p>'
    ],
    [
      'id' => 3,
      'name' => '«Сбербанк»',
      'text' => '<p>Тел: + 7 707 549 08 06</p><p>YULIYA NAZARENKO</p><p>Номер карты: 5391 ХХХХ ХХХХ 5811</p>'
    ],
    [
      'id' => 11,
      'name' => '«Kaspi Bank»',
      'text' => '<p>Тел: + 7 771 569 22 59</p><p>OLGA ALESHKOVA</p><p>Номер карты: 5169 ХХХХ ХХХХ 9436</p>'
    ],
    [
      'id' => 12,
      'name' => '«ForteBank»',
      'text' => '<p>Тел: + 7 771 569 22 59</p><p>OLGA ALESHKOVA</p><p>Номер карты: 4272 ХХХХ ХХХХ 6065</p>'
    ],
  ];

  foreach($paymentsCards as $item){
    if($item['id'] === $id){
      $results = $item;
      break;
    }
  }

  echo json_encode($results);
  die;

