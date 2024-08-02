<?php
// require_once '../common/pdo.php';

function insertCate ($name, $desc = null, $id = null) {
  $sql = "INSERT INTO `category`(`categoryID`, `name`, `desc`) VALUES (?,?,?)";
  return pdo_execute($sql, $id, $name, $desc);
}

function getAllCate () {
  $sql = "SELECT * FROM `category` ORDER BY categoryID DESC";
  return pdo_query($sql);
}
function getOneCate ($id) {
  $sql = "SELECT * FROM `category` WHERE categoryID=?";
  return pdo_query_one($sql, $id);
}

function updateCate ($id, $name, $desc = null) {
  $sql = "UPDATE `category` SET `name`=?,`desc`=? WHERE categoryID = ?";
  return pdo_execute($sql, $name, $desc, $id);
}

function deleteCate ($id) {
  $sql = "DELETE FROM `category` WHERE categoryID = ?";
  return pdo_execute($sql, $id);
}

function totalProductByCategory ($id) {
  $sql = "SELECT ?, COUNT(*) AS productCount FROM products GROUP BY ?";
  return pdo_query_one($sql, $id, $id);
}

function totalCategories () {
  $sql = "SELECT COUNT(*) AS countCategories FROM `category` WHERE 1;";
  return pdo_query_one($sql);
}