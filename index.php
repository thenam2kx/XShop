<?php
  session_start();
  include './src/common/pdo.php';
  include './src/dao/product.php';
  include './src/dao/category.php';
  include './src/dao/user.php';
  include './src/dao/comment.php';
  include './src/components/header.php';
  include './src/common/upload.php';

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

      case 'product-detail':
        if (isset($_GET['id']) && $_GET['id'] > 0) {
          $categories = getAllCate();
          $productItem = getOneProduct($_GET['id']);
          $cartegoryOfProduct = $productItem['categoryID'];
          $productsTheSame = getProductTheSame($_GET['id'], $cartegoryOfProduct);
          $getAllUser = getAllUser();
          $productID = $_GET['id'];
          $commentByProduct = getCommentByProduct($_GET['id']);
          if (isset($_POST['postComment']) && $_POST['postComment']) {
            $commentProduct = $_POST['commentProduct'];
            $userID = $_POST['userID'];
            $commentAt = date("Y-m-d",time());
            insertComment($userID, $productID, $commentProduct, $commentAt);
          }
        }
        include './src/pages/product-detail.php';
        break;

      case 'post-comment':
        if (isset($_GET['id']) && $_GET['id'] > 0) {
          $categories = getAllCate();
          $productItem = getOneProduct($_GET['id']);
          $cartegoryOfProduct = $productItem['categoryID'];
          $productsTheSame = getProductTheSame($_GET['id'], $cartegoryOfProduct);
          $getAllUser = getAllUser();
          $commentByProduct = getCommentByProduct($_GET['id']);
        }
        if (isset($_POST['postComment']) && $_POST['postComment']) {
          $commentProduct = $_POST['commentProduct'];
          $userID = $_POST['userID'];
          $productID = $_GET['id'];
          $commentAt = date("Y-m-d",time());
          insertComment($userID, $productID, $commentProduct, $commentAt);
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
        if (isset($_POST['signin']) && $_POST['signin']) {
          $email = $_POST['email'];
          $password = $_POST['password'];
          $checkUser = checkUser ($email, $password);
          if (is_array($checkUser)) {
            $_SESSION['user'] = $checkUser;
            $mess = true;
          } else {
            $mess = false;
          }
        }
        include './src/pages/login.php';
        break;

      case 'logout':
        session_unset();
        include './src/pages/home.php';
        break;

      case 'register':
        if (isset($_POST['register']) && $_POST['register']) {
          $username = $_POST['username'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          insertUser($username, $email, $password);
          $mess = 'Đăng ký thành công, vui lòng đăng nhập để thực hiện các chức năng';
        }
        include './src/pages/register.php';
        break;

      case 'account':
        if ($_SESSION['user']) {
          $inforUser = getOneUser($_SESSION['user']['userID']);
        }
        include './src/pages/account.php';
        break;

      case 'update-account':
        if (isset($_POST['updateAccount']) && $_POST['updateAccount']) {
          $id = $_POST['id'];
          $fullname = $_POST['fullname'];
          $password = $_POST['password'];
          $avatar = uploadImage("file-upload", 'public/images/users/');
          updateUserClient($fullname, $email, $password, $avatar, $id);
        }
        break;

      case 'forgot-password':
        if (isset($_POST['submit']) && $_POST['submit']) {
          $email = $_POST['email'];
          $checkEmail = checkEmail($email);
          if (is_array($checkEmail)) {
            $mess = 'Mật khẩu của bạn là: '.$checkEmail['password'];
          } else {
            $mess = 'Email không tồn tại';
          }
        }
        include './src/pages/forgot-password.php';
        break;

      case 'comments':
        include './src/pages/comments.php';
        break;

      default:
        include './src/pages/home.php';
        break;
    }
  } else {
    include './src/pages/home.php';
  }

  include './src/components/footer.php';
