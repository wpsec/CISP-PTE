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
        <h5>基础题目之文件上传突破</h5>
        <p>
          &nbsp;&nbsp;&nbsp;&nbsp;文件上传漏洞是指用户上传了一个可执行的脚本文件，并通过此脚本文件获得了执行服务器端命令的能力。这种攻击方式是最为直接和有效的，“文件上传”本身没有问题，有问题的是文件上传后，服务器怎么处理、解释文件。如果服务器的处理逻辑做的不够安全，则会导致严重的后果。
        </p>
        <p>
          &nbsp;&nbsp;&nbsp;&nbsp;通过你所学到的知识，测试其过WAF滤规则，突破上传获取webshell，答案就在根目录下key.php文件中。</p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;请开始答题！</p>
      </div>

    </div>

  </div>
  <p align="center"><?php include("footer.php"); ?> </p>
</body>

</html>