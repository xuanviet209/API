<?php
require 'api.php';

$imageName=$_POST['name'] ?? '';
$imageName=strip_tags($imageName);

$dataImages=getDataImageFromApi($imageName);
$images = $dataImages['results'] ?? [];
require 'result_view.php';
