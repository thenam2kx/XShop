<?php

function insertComment ($userID, $productID, $content, $commentAt, $commentID = null) {
  $sql = "INSERT INTO `comments`(`commentID`, `userID`, `productID`, `content`, `commentAt`)
    VALUES (?,?,?,?,?)";
  return pdo_execute($sql, $commentID, $userID, $productID, $content, $commentAt);
}

function getAllComments () {
  $sql = "SELECT * FROM `comments` WHERE 1";
  return pdo_query($sql);
}

function getOneComment ($id) {
  $sql = "SELECT * FROM `comments` WHERE commentID=?";
  return pdo_query($sql, $id);
}

function getCommentByProduct ($productID ) {
  $sql = "SELECT * FROM `comments` WHERE productID =?";
  return pdo_query($sql, $productID);
}

function updateComment ($userID, $productID, $content, $commentAt, $commentID) {
  $sql = "UPDATE `comments` SET
    `userID`=?,
    `productID`=?,
    `content`=?,
    `commentAt`=?
    WHERE commentID = ?";
  return pdo_execute($sql, $userID, $productID, $content, $commentAt, $commentID);
}

function deleteComment ($id) {
  $sql = "DELETE FROM `comments` WHERE commentID = ?";
  return pdo_execute($sql, $id);
}
