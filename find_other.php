<html lang="th">
<head>
  <title>BIB for ตุ๊ดตู่</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>
<?php
$gender = trim($_GET["gender"]);
$target = "https://poohkan.herokuapp.com/get_list.php?gender=".$gender;
//echo $target;
$file = file_get_contents($target);
echo print_r(json_decode($file));
?>
</body>