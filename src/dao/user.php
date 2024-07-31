<?php
// require_once '../common/pdo.php';

function insertUser ($fullname, $email, $password, $avatar = null, $status = 1, $role = 0, $userID = null) {
  $sql = "INSERT INTO `users`(`userID`, `fullname`, `email`, `password`, `avatar`, `status`, `role`)
    VALUES (?,?,?,?,?,?,?)";
  return pdo_execute($sql, $userID, $fullname, $email, $password, $avatar, $status, $role);
}

function getAllUser () {
  $sql = "SELECT * FROM `users` WHERE 1";
  return pdo_query($sql);
}
function getOneUser ($id) {
  $sql = "SELECT * FROM `users` WHERE userID=?";
  return pdo_query_one($sql, $id);
}

function checkUser ($email, $password) {
  $sql = "SELECT * FROM `users` WHERE email=? AND password=?";
  return pdo_query_one($sql, $email, $password);
}

function updateUser ($fullname, $email, $password, $avatar, $status, $role, $userID) {
  if ($avatar !== '') {
    $sql = "UPDATE `users` SET
    `fullname`=?,
    `email`=?,
    `password`=?,
    `avatar`=?,
    `status`=?,
    `role`=?
    WHERE userID=?";
    return pdo_execute($sql, $fullname, $email, $password, $avatar, $status, $role, $userID);
  } else {
    $sql = "UPDATE `users` SET
    `fullname`=?,
    `email`=?,
    `password`=?,
    `status`=?,
    `role`=?
    WHERE userID=?";
    return pdo_execute($sql, $fullname, $email, $password, $status, $role, $userID);
  }
}

function updateUserClient ($fullname, $email, $password, $avatar, $userID) {
  if ($avatar !== '') {
    $sql = "UPDATE `users` SET
    `fullname`=?,
    `email`=?,
    `password`=?,
    `avatar`=?,
    WHERE userID=?";
    return pdo_execute($sql, $fullname, $email, $password, $avatar, $userID);
  } else {
    $sql = "UPDATE `users` SET
    `fullname`=?,
    `email`=?,
    `password`=?,
    WHERE userID=?";
    return pdo_execute($sql, $fullname, $email, $password, $userID);
  }
}

function updatePasswordUser ($password, $userID) {
  $sql = "UPDATE `users` SET
    `password`=?,
    WHERE userID=?";
  return pdo_execute($sql, $password, $userID);
}

function deleteUser ($id) {
  $sql = "DELETE FROM `users` WHERE userID = ?";
  return pdo_execute($sql, $id);
}
