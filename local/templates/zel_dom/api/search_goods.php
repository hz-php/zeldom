<?php
  $goods = [
    [
      'id' => 0,
      'title' => 'Семена арбуза 1',
      'link'=> 'goods.html'
    ],
    [
      'id' => 0,
      'title' => 'Семена арбуза 2',
      'link'=> 'goods.html'
    ],
    [
      'id' => 0,
      'title' => 'Семена арбуза 3',
      'link'=> 'goods.html'
    ],
    [
      'id' => 0,
      'title' => 'Семена арбуза 4',
      'link'=> 'goods.html'
    ],
    [
      'id' => 0,
      'title' => 'Семена арбуза 5',
      'link'=> 'goods.html'
    ],
    [
      'id' => 0,
      'title' => 'Семена арбуза 6',
      'link'=> 'goods.html'
    ],
  ];
  
  $results = [];

  $q = trim($_GET['q']);
  $q = mb_strtolower($q);

  foreach($goods as $key => $item){
    
    $title = trim($item['title']);
    $title = mb_strtolower($title);

    // echo $title . " ($q) ";

    if( strpos($title, $q) !== false ){
      $results[] = $item;
    }
  }


  echo json_encode($results);
  die();

