<?php

require "dbconfig.php";
// 连接mysql
$link = @mysql_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
// 选择数据库
mysql_select_db(DBNAME,$link);
// 编码设置
mysql_set_charset('utf8',$link);

// 获取增加的甜点
$id = $_POST['id'];
$unit = $_POST['unit'];
$content = $_POST['content'];
$start_data = $_POST['start_data'];  
$end_data = $_POST['end_data'];
$address = $_POST['address'];
$remarks = $_POST['remarks'];
$contact = $_POST['contact'];
$type = $_POST['type'];

// 插入数据
$a=mysql_query("INSERT INTO  messages(id,unit,content,start_data,end_data,address,remarks,contact,type) 
VALUES ('$id','$unit','$content','$start_data','$end_data','$address','$remarks','$contact','$type')",$link) or die('添加数据出错：'.mysql_error()); 
if (!$a) {
	echo '<script language="JavaScript">alert("Failed to submit!"); history.go(-1);</script>;';
}else
	{echo '<script language="JavaScript">;alert("Successful submission!Jump to Administrator page");location.href="admin.php";</script>;';
}

?>