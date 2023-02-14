<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crypter +</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="navigator">
    <?php require_once "View/navigator.php"; ?>
</div>
<div class="header">
    <?php require_once "View/header.php"; ?>
</div>
<div class="chosen">
    <?php require_once "View/chosen.php"; ?>
</div>
<div class="interesting">
    <?php require_once "View/interesting.php"; ?>
</div>
<div class="popular">
    <?php require_once "View/popular.php"; ?>
</div>

<div class="hot-bid">
    <?php require_once "View/hot-bid.php"; ?>
</div>
<div class="hot-collections">
    <?php require_once "View/hot-collections.php"; ?>
</div>
<div class="discover">
 <?php require_once "View/discover.php";?>
</div>
<div class="advertising">
 <?php require_once "View/advertising.php";?>
</div>
<div class="footer">
<?php require_once "View/footer.php";?>
</div>
</body>
</html>