<?php 

if( !session_id()) session_start();
//bootstraping ,panggil semua file yang dibutuhkan
require_once '../app/init.php';

$app = new App;
