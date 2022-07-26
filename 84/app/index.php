<!DOCTYPE html>
<html>

<head>
  <?php header('Content-type:text/html;charset=gbk'); ?>

  <meta charset="gb2312">
  <title>CISP-PTE 认证考试</title>
  <link rel="stylesheet" href="css/materialize.min.css">

</head>

<body>
  <div class="container">



    <!-- Navbar goes here -->

    <!-- Page Layout here -->
    <div class="row">

      <div class="col s3">
        <?php include("nav.php"); ?>
      </div>

      <div class="col s9">
        <h5>基础题目之命令执行</h5>
        <p>
          &nbsp;&nbsp;&nbsp;&nbsp;命令执行是指攻击者通过浏览器或者其他客户端软件提交一些cmd命令（或者bash命令）至服务器程序，服务器程序通过system、eval、exec等函数直接或者间接地调用cmd.exe执行攻击者提交的命令。


        </p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;通过你所学到的知识，通过执行Linux命令获取webshell，答案就在根目录下key.php文件中。</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;请开始答题！</p>
      </div>

    </div>


  </div>
  <p align="center"><?php include("footer.php"); ?> </p>
</body>

</html>