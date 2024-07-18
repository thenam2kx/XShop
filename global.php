<?php

$ROOT_URL = "/XShop";
$PUBLIC_URL = "$ROOT_URL/public";
$ADMIN = "$ROOT_URL/admin";
$PAGES = "$ROOT_URL/pages";

function exit_param($fieldname)
{
  return array_key_exists($fieldname, $_REQUEST);
}
