<?php
  include '../../global.php';
  include '../common/pdo.php';
  include '../dao/category.php';
  include '../dao/product.php';
  include '../dao/user.php';
  include '../dao/comment.php';
  include '../common/upload.php';
  include './components/header.php';

  if (isset($_GET['act'])) {
    $act = $_GET['act'];

    switch ($act) {
      // products
      case 'products-list':
        if (isset($_POST['fill']) && ($_POST['fill'])) {
          $keyCate = $_POST['keyCate'];
          $keySearch = $_POST['keySearch'];
        } else {
          $keyCate = 0;
          $keySearch = '';
        }
        $categories = getAllCate();
        $products = getAllProducts($keyCate, $keySearch);
        include 'products/list.php';
        break;
      case 'products-add':
        if (isset($_POST['save']) && ($_POST['save'])) {
          $name = $_POST['name'];
          $price = $_POST['price'];
          $discount = $_POST['discount'];
          $category = $_POST['category'];
          $private = $_POST['private'];
          $inputDate = $_POST['inputDate'];
          $views = $_POST['views'];
          $desc = $_POST['desc'];
          $fileName = uploadImage("file-upload", '../../public/images/products/');
          insertProduct($category, $name, $price, $discount, $fileName, $inputDate, $views, $private, $desc, $productID = null);
          $mess = 'them nguoi dung thanh cong';
        }
        $categories = getAllCate();
        include 'products/add.php';
        break;
      case 'products-update':
        if (isset($_GET['id']) && $_GET['id'] > 0) {
          $categories = getAllCate();
          $productItem = getOneProduct($_GET['id']);
        }

        include 'products/update.php';
        break;
      case 'products-update-data':
        if (isset($_POST['update']) && ($_POST['update'])) {
          $name = $_POST['name'];
          $price = $_POST['price'];
          $discount = $_POST['discount'];
          $category = $_POST['category'];
          $private = $_POST['private'];
          $inputDate = $_POST['inputDate'];
          $views = $_POST['views'];
          $desc = $_POST['desc'];
          $productID = $_POST['productID'];
          $fileName = uploadImage("file-upload", '../../public/images/products/');
          updateProduct($category, $name, $price, $discount, $fileName, $inputDate, $views, $private, $desc, $productID);
        }
        $products = getAllProducts();
        include 'products/list.php';
        break;
      case 'products-delete':
        if (isset($_GET['id']) && $_GET['id'] > 0) {
          $id = $_GET['id'];
          deleteProduct($id);
        }
        $products = getAllProducts();
        include 'products/list.php';
        break;

      // category
      case 'categories-list':
        $categories = getAllCate();
        include 'categories/list.php';
        break;
      case 'categories-add':
        if (isset($_POST['save']) && ($_POST['save'])) {
          $categoryName = $_POST['categoryName'];
          $categoryDesc = $_POST['categoryDesc'];
          insertCate($categoryName, $categoryDesc);
        }
        include 'categories/add.php';
        break;
      case 'categories-update':
        if (isset($_GET['id']) && $_GET['id'] > 0) {
          $categoryItem = getOneCate($_GET['id']);
        }
        include 'categories/update.php';
        break;
      case 'categories-update-cate':
        if (isset($_POST['update']) && ($_POST['update'])) {
          $categoryName = $_POST['categoryName'];
          $categoryDesc = $_POST['categoryDesc'];
          $categoryID = $_POST['categoryID'];
          updateCate($categoryID, $categoryName, $categoryDesc);
        }
        $categories = getAllCate();
        include 'categories/list.php';
        break;
      case 'categories-delete':
        if (isset($_GET['id']) && $_GET['id'] > 0) {
          $id = $_GET['id'];
          deleteCate($id);
        }
        $categories = getAllCate();
        include 'categories/list.php';
        break;

        // users
      case 'users-list':
        $users = getAllUser();
        include 'users/list.php';
        break;
      case 'users-add':
        if (isset($_POST['save']) && ($_POST['save'])) {
          $fullname = $_POST['fullname'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $rePassword = $_POST['re-password'];
          $role = $_POST['role'];
          $active = $_POST['active'];
          $fileName = uploadImage("file-upload", '../../public/images/users/');
          insertUser($fullname, $email, $password, $fileName, $active, $role);
          $mess = 'them nguoi dung thanh cong';
        }
        include 'users/add.php';
        break;
      case 'user-update':
        if (isset($_GET['id']) && $_GET['id'] > 0) {
          $user = getOneUser($_GET['id']);
        }
        include 'users/update.php';
        break;
      case 'user-update-data':
        if (isset($_POST['update']) && ($_POST['update'])) {
          $userID= $_POST['userID'];
          $fullname = $_POST['fullname'];
          $email = $_POST['email'];
          $password = $_POST['password'];
          $role = $_POST['role'];
          $active = $_POST['active'];
          $fileName = uploadImage("file-upload", '../../public/images/users/');
          updateUser($fullname, $email, $password, $fileName, $active, $role, $userID);
          $mess = 'them nguoi dung thanh cong';
        }
        $users = getAllUser();
        include 'users/list.php';
        break;
      case 'user-delete':
        if (isset($_GET['id']) && $_GET['id'] > 0) {
          $id = $_GET['id'];
          deleteUser($id);
        }
        $users = getAllUser();
        include 'users/list.php';
        break;

        // commmnets
      case 'comments-list':
        $comments = getAllComments();
        include 'comments/list.php';
        break;
      case 'comments-detail':
        include 'comments/detail.php';
        break;

        // default
      default:
        include 'dashboard/dashboard.php';
        break;
    }
  } else {
    include 'dashboard/dashboard.php';
  }

  include './components/footer.php';

