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
        <h5>基础题目之文件包含</h5>
        <p>

          &nbsp;&nbsp;&nbsp;&nbsp;PHP文件包含漏洞的产生原因是在通过PHP的函数引入文件时，由于传入的文件名没有经过合理的校验，从而操作了预想之外的文件，就可能导致意外的文件泄露甚至恶意的代码注入。

        </p>
        <p>&nbsp;&nbsp;&nbsp;&nbsp;通过你所学到的知识，测试该网站可能存在的包含漏洞，尝试获取webshell，答案就在根目录下key.php文件中。</p>

        <p>&nbsp;&nbsp;&nbsp;&nbsp;请开始答题！</p>
      </div>

    </div>

  </div>
  <p align="center"><?php include("footer.php"); ?> </p>
</body>

</html>