<?php
  include './src/common/pdo.php';
  include './src/dao/product.php';
  include './src/dao/category.php';
  include './src/components/header.php';

  $products = getProductsHome();
  $categories = getAllCate();

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

      case 'account':
        include './src/pages/account.php';
        break;

      case 'product-detail':
        if (isset($_GET['id']) && $_GET['id'] > 0) {
          // $categories = getAllCate();
          $productItem = getOneProduct($_GET['id']);
        }
        include './src/pages/product-detail.php';
        break;

      default:
        include './src/pages/home.php';
        break;
    }
  } else {
    include './src/pages/home.php';
  }

  include './src/components/footer.php';
