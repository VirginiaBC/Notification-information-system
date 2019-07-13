<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>登陆</title>
  <link rel="stylesheet" href="denglu.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
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
              <span class="tu"><a href="denglu.php" target="_blank">登陆</a></span> 
              <span class="tu"><a href="zhuce.php" target="_blank">注册</a></span>
      </div>
      

  </div>
    <div class="login">
      <h1>用户登录</h1>
      <form method="post" action="denglu_con.php">
        <p><input type="text" name="id" value="" placeholder="ID"></p>
        <p><input type="password" name="password" value="" placeholder="密码"></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            记住密码
          </label>
        </p>
        <p class="submit"><input type="submit"  name="submit" value="登录"></p>
      </form>
    </div>
    <div class="login-help">
      <p>还未注册? <a href="zhuce.php">点击注册</a>.</p>
    </div>

  </section>

</body>
</html>
