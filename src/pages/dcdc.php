<?php
  include './src/components/Header.php' ;

  if (isset($_GET['act']) && $_GET['act'] !== '') {
    $act = $_GET['act'];
    switch ($act) {
      case 'introduce':
        include './src/pages/introduce.php';
        break;

      case 'contact':
        include './src/pages/contact.php';
        break;

      case 'feedback':
        include './src/pages/feedback.php';
        break;

      case 'question':
        include './src/pages/question.php';
        break;

      default:
        include './src/pages/list-products.php';
        break;
    }
  } else {
    include './src/pages/list-products.php';
  }

  include './src/components/Footer.php';