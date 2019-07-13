<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>注册</title>
  <link rel="stylesheet" href="denglu.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <?php # Script 9.3 - register.php
    // Check for form submission:
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


      $errors = array(); // Initialize an error array.
      

      if (empty($_POST['user_name'])) {
        $errors[] = 'You forgot to enter your name.';
      } else {
        $fn = trim($_POST['user_name']);
      }
      

      if (empty($_POST['password'])) {
        $errors[] = 'You forgot to enter your password.';
      } else {
        $ln = trim($_POST['password']);
      }



      if (empty($_POST['id'])) {
        $errors[] = 'You forgot to enter your id.';
      } else {
        $e = trim($_POST['id']);
      }


      if (empty($_POST['phone'])) {
        $errors[] = 'You forgot to enter your phone.';
      } else {
        $n = trim($_POST['phone']);
      }
      
      if (empty($errors)) { // If everything's OK.
      
        // Register the user in the database...
        
        require "dbconfig.php";
        // 连接mysql
        $link = @mysql_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
        // 选择数据库
        mysql_select_db(DBNAME,$link);
        // 编码设置
        mysql_set_charset('utf8',$link);
        $id = $_POST['id'];
        $user_name = $_POST['user_name'];
        $phone = $_POST['phone'];
        $password = $_POST['password'];
        // Make the query:
        $q = mysql_query("INSERT INTO user (id, user_name, phone, password) VALUES ('$id', '$user_name', '$phone','$password')",$link) or die('添加数据出错：'.mysql_error());   

        if ($q) { // If it ran OK.

         
         echo '<script language="JavaScript">;alert("注册成功！跳转到登陆页面");location.href="denglu.php";</script>;';

        } else { 
      
        
          echo "<script>alert('提交未成功！'); history.go(-1);</script>";
            
        } 
        
        mysql_close($link); 
        
        
      
        exit();
        
      } else { 
      
        echo '<h1>Error!</h1>
        <p class="error">The following error(s) occurred:<br />';
        foreach ($errors as $msg) { // Print each error.
          echo " - $msg<br />\n";
        }
       echo "<script>alert('提交未成功！'); history.go(-1);</script>";
        
      } 

    } 
    ?>
</head>
<body>

  <section class="container">
    <div id="head">
      <div id="tubiao">
        <span class="tu"><strong><?php session_start();             
                            if(!isset($_SESSION['valid_member'])){
                                echo "您还未登录";
                                
                            }else {
                              echo '当前登录用户：' . $_SESSION['valid_member'];
                              echo "&nbsp&nbsp"; 
                              echo "<a name='tuichu' href='logout.php'>退出登录</a>";} ?>
                </strong>
        </span>             
        <img src="./image/tubiao3.png" width="15px" height="25px"> 
        <span class="tu"><a href="index.php" target="_blank">主页</a></span>
              <span class="tu"><a href="denglu.php" target="_blank">登录</a></span> 
              <span class="tu"><a href="zhuce.php" target="_blank">注册</a></span>
      </div>
    <div class="login">
      <h1>用户注册</h1>
      <form method="post" action="zhuce.php">
        <p><label>ID</label><input type="text" name="id" placeholder="ID"></p>
        <p><label>用户名</label><input type="text" name="user_name"  placeholder="用户名"></p>
        <p><label>密码</label><input type="password" name="password"  placeholder="密码"></p>
        <p><label>电话</label><input type="text" name="phone"  placeholder="手机号"></p>

        <p class="submit"><input type="submit" name="commit" value="注册"></p>
      </form>
    </div>
    
  </section>

</body>
</html>
