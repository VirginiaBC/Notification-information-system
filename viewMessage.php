<html>
<head>
	<meta charset="utf-8">
	<title>信息发布</title>
	<link rel="stylesheet" type="text/css" href="viewMessage.css">
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

		<div class="biaodan">
			<h3>计算机科学与技术学院信息发布</h3>
			<table class="hovertable">

			<tr>

				<th>编号</th><th>通知类别</th><th>通知单位</th><th>通知内容</th><th>开始日期</th><th>截止日期</th><th>地点</th><th>备注</th><th>联系方式</th>

			</tr>

			<?php
                require "dbconfig.php";
                
                $link = @mysql_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
               
                mysql_select_db(DBNAME,$link);
               
                mysql_set_charset('utf8',$link);

                
                $sql = 'select * from messages order by id asc';
                
                $result = mysql_query($sql,$link);
                // var_dump($result);die;

               
                $newsNum=mysql_num_rows($result);  

               for($i=0; $i<$newsNum; $i++){
                    $row = mysql_fetch_assoc($result);
                    echo "<tr>";
                    echo "<td>{$row['id']}</td>";
                    echo "<td>{$row['type']}</td>";
                    echo "<td>{$row['unit']}</td>";
                    echo "<td>{$row['content']}</td>";
                    echo "<td>{$row['start_data']}</td>";
                    echo "<td>{$row['end_data']}</td>";
                    echo "<td>{$row['address']}</td>";
                    echo "<td>{$row['remarks']}</td>";
                    echo "<td>{$row['contact']}</td>";
                    echo "</tr>";
                }

               //这里数据库信息要改
                mysql_free_result($result);
                mysql_close($link);
                ?>
			</table>
			
		</div>
		<div class="sidebar">
			<div id="logo">
				<img src="./image/logo.png" width=100px height=100px>
				
			</div>
			 <ul>
			 	<li><a href='#tableContainer'>招聘信息</a></li>
        		<li><a href='#tableContainer'>实训信息</a></li>
				<li><a href='#tableContainer'>项目信息</a></li>
				<li><a href='#tableContainer'>开会信息</a></li>
				<li><a href='#tableContainer'>比赛信息</a></li>
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
