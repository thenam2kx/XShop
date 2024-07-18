<?php
  include './src/common/pdo.php';
  include './src/dao/product.php';
  include './src/components/header.php';

  $products = getProductsHome();

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
        include './src/pages/home.php';
        break;
    }
  } else {
    include './src/pages/home.php';
  }

  include './src/components/footer.php';
