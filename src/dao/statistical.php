<?php
require_once './src/common/pdo.php';

function statisticalProduct () {
  $sql = "INSERT INTO `category`(`categoryID`, `name`, `desc`) VALUES (?,?,?)";
  return pdo_execute($sql);
}

function statisticalComment () {
  $sql = "INSERT INTO `category`(`categoryID`, `name`, `desc`) VALUES (?,?,?)";
  return pdo_execute($sql);
}
