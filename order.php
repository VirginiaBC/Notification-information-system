<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The order of deserts</title>


<link rel="stylesheet" type="text/css" href="./order.css" />
<!--<link rel="stylesheet" type="text/css" href="./index.css" />-->


</head>
<body>
	<div id="head">
			<div id="tubiao">
								
				<img src="./image/tubiao3.png" width="15px" height="25px"> 
				<span class="tu"><a href="index.php" target="_blank">主页</a></span>
          		<span class="tu"><a href="denglu.php" target="_blank">登录</a></span> 
          		<span class="tu"><a href="zhuce.php" target="_blank">注册</a></span>
			</div>
			<div id="denglu"><!--<strong><?php session_start();             
										        if(!isset($_SESSION['valid_member'])){
										            echo "您还未登录";
										            header("location:denglu.php");
										        }else {
										        	echo '当前登录用户：' . $_SESSION['valid_member'];
										        	echo "&nbsp&nbsp"; 
										        	echo "<a name='tuichu' href='logout.php'>退出登录</a>";} ?>
							 	</strong>-->
				</div>			
	</div>
	<div class="sidebar">
		<div id="logo">
			<img src="./image/log.png" width=140px height=60px>
			
		</div>
		 <ul>
		 	<li><a href='#tableContainer'>招聘信息</a></li>
    		<li><a href='#cakes'>实训信息</a></li>
			<li><a href='#tableContainer'>项目信息</a></li>
			<li><a href='#tableContainer'>开会信息</a></li>
			<li><a href='#tableContainer'>比赛信息</a></li>
		</ul>
	</div>

	<div class="af-wrapper">
		<h3>通知</h3>
		
		<input id="af-showreq" class="af-show-input" type="checkbox" name="showreq" />
		<label for="af-showreq" class="af-show">显示必填项</label>
		
		<form class="af-form" id="af-form" action="order_connect.php" method="post">

			
			<div class="af-outer af-required">
				<div class="af-inner">
					<label for="input-title">通知名称</label>
					<input type="text" name="order_name"  required>
				</div>
			</div>
			<div class="af-outer af-required">
				<div class="af-inner">
					<label for="input-title">通知人姓名</label>
					<input type="text" name="order_people"  required>
				</div>
			</div>
		
			<div class="af-outer af-required">
				<div class="af-inner">
					<label for="input-name">通知内容</label>
					<input type="text" name="order_quantity" required>
				</div>
			</div>
			
			<div class="af-outer af-required">
				<div class="af-inner">
					<label for="input-bdate">开始日期</label>
					<input type="date" name="order_date"  placeholder="MM/DD/YYYY">
				</div>
			</div>

			<div class="af-outer af-required">
				<div class="af-inner">
					<label for="input-bdate">截止日期</label>
					<input type="date" name="order_date"  placeholder="MM/DD/YYYY">
				</div>
			</div>
			
			
			<div class="af-outer">
				<div class="af-inner">
				  <label for="input-catname">备注</label>
				  <input type="text" name="order_beizhu" >
				</div>
			</div>
			
			<div class="af-outer af-required">
				<div class="af-inner">
				  <label for="input-phone">联系方式</label>
				  <input type="text" name="order_phone"  required>
				</div>
			</div>
			
			<input type="submit" value="发布!" /> 
			
		</form>
	</div>

</body>
</html>