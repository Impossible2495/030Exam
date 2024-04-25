<?php
session_start();
$url = explode("/", $_SERVER["REQUEST_URI"]);
require_once("php/db.php");


if ($url[1] == "030FinalWeb") {
  $content = file_get_contents("/index.html");
} else {
  $content = file_get_contents("php/index.php");
  
}