<!DOCTYPE html>
<html>

<head>
  <?php header('Content-type:text/html;charset=gbk'); ?>

  <meta charset="gb2312">
  <title>CISP-PTE 认证考试</title>
  <link rel="stylesheet" href="../css/materialize.min.css">

</head>

<body>
  <div class="container">

    <?php error_reporting(0); ?>

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
        <h5>基础题目之文件上传突破</h5>
        <b>描述</b>
        <p>请开始答题</p>
        <div class="card  teal lighten-1">
          <div class="card-content white-text">
            <span class="card-title">文件上传</span>
            <?php

            $files = @$_FILES["files"];

            if (judge($files)) {
              $fullpath = $_REQUEST["path"] . $files["name"];
              if (move_uploaded_file($files['tmp_name'], $fullpath)) {
                echo "<a href='$fullpath'>图片上传成功</a>";
              }
            }
            echo '<form method=POST enctype="multipart/form-data" action="">
                      <input type="file" name="files">
                      <input type=submit value="上传"></form>';

            ?>
          </div>
          <div class="card-action">
            <?php if ($fullpath != '') {
              echo "文件有效，上传成功： <a href=\"$fullpath\"> 点我查看</a>";
            } ?>
          </div>
        </div>

      </div>

    </div>

  </div>
  <p align="center"><?php include("footer.php"); ?> </p>
</body>

</html>