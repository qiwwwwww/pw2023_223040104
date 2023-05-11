<?php 
require("function.php");
$title = 'home';
$students= [
[
    "nama" => "muhamad rizqi saputra",
    "npm" => "223040104",
    "email" => "rizqisaputra666@gmail.com"
],
 
[
    "nama" => "m.robby.a",
    "npm" => "223040094",
    "email" => "xxxxxxxxxx@gmail.com"
],
 ];

//  dd($_SERVER["REQUEST_URI"]);
//  /pw2023_223040104/pertemuan9/index.php

require('views/index.view.php');