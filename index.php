<?php
  include './src/common/pdo.php';
  include './src/dao/product.php';
  include './src/dao/category.php';
  include './src/components/header.php';

  $products = getProductsHome();
  $categories = getAllCate();
  $productsTop10 = getTop10Products();

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
          $categories = getAllCate();
          $productItem = getOneProduct($_GET['id']);
          $cartegoryOfProduct = $productItem['categoryID'];
          $productsTheSame = getProductTheSame($_GET['id'], $cartegoryOfProduct);
        }
        include './src/pages/product-detail.php';
        break;

      case 'products-show':
        if (isset($_POST['keyw']) && $_POST['keyw'] != '') {
          $keyw = $_POST['keyw'];
        } else {
          $keyw = '';
        }
        if (isset($_GET['idCate']) && $_GET['idCate'] > 0) {
          $idCate = $_GET['idCate'];
        } else {
          $idCate = 0;
        }
        if (getNameCate($idCate) != '') {
          extract(getNameCate($idCate));
          $cateName = $name;
        } else {
          $cateName = '';
        }
        $listProducts = getAllProducts($idCate, $keyw);
        include './src/pages/products-show.php';
        break;
      case 'login':
        include './src/pages/login.php';
        break;
      case 'register':
        include './src/pages/register.php';
        break;

      case 'demo':
        include './src/pages/demo.php';
        break;

      default:
        include './src/pages/home.php';
        break;
    }
  } else {
    include './src/pages/home.php';
  }

  include './src/components/footer.php';
