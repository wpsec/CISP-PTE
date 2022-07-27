<!DOCTYPE html>
<html>

<head>
  <?php header('Content-type:text/html;charset=gbk'); ?>

  <meta charset="gb2312">
  <title>CISP-PTE 认证考试</title>
  <link rel="stylesheet" href="../css/materialize.min.css">


  </script>
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
        // include('conn.php');
        include("function.php");

        $id = filter_keyword($_REQUEST['id']);
        if ($id == '') {
          $id = '1';
        }

        $sql = "select * from article where id= ('$id')";
        if ($conn = mysqli_connect("127.0.0.1", "root", "")) {
          // echo $sql;
          mysqli_select_db($conn, '2web');
          mysqli_set_charset($conn, 'GBK');
          $rs = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($rs);
        } else {
          echo "数据库连接错误";
          die;
        }
        ?>
      </div>

      <div class="col s9">
        <h5>基础题目之SQL注入</h5>
        <b>当前执行的SQL:</b>
        <p>
          <font color="red"><?php echo $sql; ?></font>
        </p>
        <div class="card  teal lighten-1">
          <div class="card-content white-text">
            <span class="card-title">标题：<?php echo $row["title"]; ?></span>
            <br />
            <span class="card-title">作者：<?php echo $row["author"]; ?></span>
          </div>
          <div class="card-action">

            内容：<?php echo $row["content"]; ?>

          </div>
        </div>

      </div>

    </div>

  </div>
  <p align="center"><?php include("footer.php"); ?> </p>
</body>

</html>