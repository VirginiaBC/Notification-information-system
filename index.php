<html>
<head>
	<meta charset="utf-8">
	<title>The main page~</title>
	<link rel="stylesheet" type="text/css" href="index.css">
<body>
	<div id="container">

		<div id="head">

			<div id="tubiao">

				<span class="tu"><strong><?php session_start();
										        if(!isset($_SESSION['valid_member'])){
										            echo "未登录";

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

		<div id="tableContainer">
			<h1 id="su">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp计算机科学与技术学院信息发布</h1>
			<div id="tableRow">
			<a href="xiangxi.php" target="_blank">
				<div class="box">
					<img src="./image/shouye.jpg"  alt="首页图片" />
					<!-- TODO: 图片要改 -->
				</div>
			</a>
			</div>
		</div>

		<div class="sidebar">
			<div id="logo">
				<img src="./image/logo.png" width=100px height=100px>
				<!--TODO：图片要改-->
			</div>
			 <ul>
			 	<li><a href="viewMessage.php">招聘信息</a></li>
        		<li><a href="viewMessage.php">实训信息</a></li>
				<li><a href="viewMessage.php">项目信息</a></li>
				<li><a href="viewMessage.php"'>开会信息</a></li>
				<li><a href="viewMessage.php">比赛信息</a></li>
    		</ul>
		</div>

		<div id="footer">
			&copy; 计算机科学与技术学院
			<br>
			联系我们
		</div>

	</div>
</body>
</html>
