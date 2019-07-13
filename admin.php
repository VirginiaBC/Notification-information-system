<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员页面</title>


<link rel="stylesheet" type="text/css" href="admin.css" />

</head>
<body>
	<div id="head">
			<div id="tubiao">			
				<img src="./image/tubiao3.png" width="15px" height="25px"> 
				<span class="tu"><a href="index.php" target="_blank">主页</a></span>
          		<span class="tu"><a href="denglu.php" target="_blank">登录</a></span> 
          		<span class="tu"><a href="zhuce.php" target="_blank">注册</a></span>
			</div>
		<div class="biaodan">
			<h3>管理</h3>
			<table class="hovertable">

			<tr>

				<th>通知编号</th><th>通知类别</th><th>通知单位</th><th>通知内容</th><th>开始日期</th><th>截止日期</th><th>地点</th><th>备注</th><th>联系方式</th><th>操作</th>

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
             		echo "<td>
                            <a href='javascript:del({$row['id']})'>删除</a>
                            <a href='javascript:edit({$row['id']})'>修改</a>
                          </td>";
                    echo "</tr>";
                }

               //需要修改
                mysql_free_result($result);
                mysql_close($link);
                ?>
			</table>
			
		</div>
		<script type="text/javascript">
	        function del (id) {
	            if (confirm("确定删除这个通知？")){
	                window.location = "action_del.php?id="+id;
	            }
	        }
	        function edit(id){
	        	if (confirm("确定修改这个通知？")){
	                window.location = "edit.php?id="+id;
	            }
	        }
	    </script>

		<div class="addmore">
			    <a href="add.php"><button type="button">发布新通知</button></a>
		</div>


	</div>		

</body>
</html>