<?php
// require_once '../common/pdo.php';

function insertProduct ($categoryID, $name, $unitPrice, $discount, $thumbnail, $createAt, $views, $special, $desc = null, $productID = null) {
  $sql = "INSERT INTO `products`(`productID`, `categoryID`, `name`, `unitPrice`, `discount`, `thumbnail`, `createAt`, `views`, `special`, `desc`)
    VALUES (?,?,?,?,?,?,?,?,?,?)";
  return pdo_execute($sql, $productID, $categoryID, $name, $unitPrice, $discount, $thumbnail, $createAt, $views, $special, $desc);
}
// insertProduct(1, 'product 1', '12000', '20', null, '2024-06-06', 200, 1);

function getAllProducts ($keyCate = 0, $keySearch = '') {
  $sql = "SELECT * FROM `products` WHERE 1";
  if ($keySearch !== '') {
    $sql.=" and name LIKE '%".$keySearch."%'";
  }
  if ($keyCate > 0) {
    $sql.=" and categoryID = '".$keyCate ."'";
  }
  $sql.= " ORDER BY productID DESC";
  return pdo_query($sql);
}

function getProductsHome () {
  $sql = "SELECT * FROM `products` WHERE 1 ORDER BY productID DESC LIMIT 0,9";
  return pdo_query($sql);
}

function getOneProduct ($id) {
  $sql = "SELECT * FROM `products` WHERE productID =?";
  return pdo_query_one($sql, $id);
}

function getNameCate ($idCate) {
  if ($idCate > 0) {
    $sql = "SELECT * FROM `category` WHERE categoryID =?";
    return pdo_query_one($sql, $idCate);
  } else {
    return "";
  }
}

function getProductTheSame ($id, $cartegoryOfProduct) {
  // $sql = "SELECT * FROM `products` WHERE productID <>?";
  $sql = "SELECT * FROM `products` WHERE categoryID =? AND productID <>? LIMIT 0,5";
  return pdo_query($sql, $cartegoryOfProduct, $id);
}

function updateProduct ($categoryID, $name, $unitPrice, $discount, $thumbnail, $createAt, $views, $special, $desc, $productID) {
  if ($thumbnail !== '') {
    $sql = "UPDATE `products` SET
    `categoryID`=?,
    `name`=?,
    `unitPrice`=?,
    `discount`=?,
    `thumbnail`=?,
    `createAt`=?,
    `views`=?,
    `special`=?,
    `desc`=?
    WHERE productID = ?";
    return pdo_execute($sql, $categoryID, $name, $unitPrice, $discount, $thumbnail, $createAt, $views, $special, $desc, $productID);
  } else {
    $sql = "UPDATE `products` SET
    `categoryID`=?,
    `name`=?,
    `unitPrice`=?,
    `discount`=?,
    `createAt`=?,
    `views`=?,
    `special`=?,
    `desc`=?
    WHERE productID = ?";
    return pdo_execute($sql, $categoryID, $name, $unitPrice, $discount, $createAt, $views, $special, $desc, $productID);
  }
}
// updateProduct(1, 'product 1 update', '12000', '20', null, '2024-06-06', 200, 1, null, 1);

function deleteProduct ($id) {
  $sql = "DELETE FROM `products` WHERE productID = ?";
  return pdo_execute($sql, $id);
}

function updateViewProduct ($productID) {
  $sql = "UPDATE `products` SET
    `views`= views + 1
    WHERE productID = ?";
  return pdo_execute($sql, $productID);
}

function getTop10Products () {
  $sql = "SELECT * FROM `products` WHERE 1 ORDER BY `views` LIMIT 0,9";
  return pdo_query($sql);
}

function getPrivateProducts () {
  $sql = "SELECT * FROM `products` WHERE `special` = 1";
  return pdo_query($sql);
}

function getProductsByCategory ($categoryID) {
  $sql = "SELECT * FROM `products` WHERE `categoryID` = $categoryID";
  return pdo_query($sql);
}

function getProductsByKeyword ($keyword) {
  $sql = "SELECT * FROM `products` WHERE `name` = $keyword";
  return pdo_query($sql);
}