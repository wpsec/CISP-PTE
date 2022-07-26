<!DOCTYPE html>
<html>

<head>
  <meta charset="gb2312">
  <?php header('Content-type:text/html;charset=gbk'); ?>

  <title>CISP-PTE 认证考试</title>
  <link rel="stylesheet" href="../css/materialize.min.css">

</head>

<body>
  <div class="container">



    <!-- Navbar goes here -->

    <!-- Page Layout here -->
    <div class="row">

      <div class="col s3">
        <?php
        include("nav1.php");

        include("function.php");
        ?>
      </div>

      <div class="col s9">
        <h5>基础题目之文件包含</h5>
        <b>描述</b>
        <p>请开始答题！</p>
        <div class="card  teal lighten-1">
          <div class="card-action">

            <?php

            include($_GET['file']);

            ?>

          </div>
        </div>

      </div>

    </div>

  </div>
  <p align="center"><?php include("footer.php"); ?> </p>
</body>

</html>