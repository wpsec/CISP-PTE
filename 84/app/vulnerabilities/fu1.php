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
        <h5>基础题目之命令执行</h5>
        <b>描述</b>
        <p>请开始答题</p>
        <div class="card  teal lighten-1">
          <div class="card-content white-text">
            <span class="card-title">验证主机是否存活</span>

            <form method=POST enctype="multipart/form-data" action="">
              <input type="text" name="cmd">
              <input type=submit value="提交">
            </form>

          </div>
          <div class="card-action">
            <?php

            $cmd = $_POST["cmd"];
            if (filter($cmd)) {
              if (isset($cmd)) {
                echo system("ping -c 1 $cmd");
              }
            } else {
              echo "你输入的命令包含敏感字符！请检查命令是否填写正确！";
            }

            ?>

          </div>
        </div>

      </div>

    </div>

  </div>
  <p align="center"><?php include("footer.php"); ?> </p>
</body>

</html>