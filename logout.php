<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "header_include.php"; ?>
    <?php
session_start();
session_unset();
header("Location: login.php");
?>
    <!-- <meta http-equiv='refresh' content='0; URL=/rinl/login.php'> -->
</head>

</html>