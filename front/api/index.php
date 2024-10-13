<?php
  header('Access-Control-Allow-Origin: *');
  header('Access-Control-Allow-Methods: POST');
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Content-Length");
  header('Content-Type: application/json; charset=utf-8');

  if(!empty($_POST['action'])){
    
    if($_POST['action'] === 'get_payments_card' && isset($_POST['id'])){
      include 'get_payments_card.php';
    }

  }

  
  if(!empty($_GET['action'])){
    
    if($_GET['action'] === 'get_parts' && isset($_GET['id'])){
      include 'get_parts.php';
    }
    if($_GET['action'] === 'search' && isset($_GET['q'])){
      include 'search_goods.php';
    }
    if($_GET['action'] === 'get_delivery' && isset($_GET['id'])){
      include 'get_delivery.php';
    }

  }


  echo json_encode([]);
  die;
