<?php
// 处理编辑操作的页面 
require "dbconfig.php";
session_start();
// 连接mysql
$link = @mysql_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
// 选择数据库
mysql_select_db(DBNAME,$link);
// 编码设置
mysql_set_charset('utf8',$link);

// 获取修改的
//$desert_id=$_POST['desert_id'];
$unit = $_POST['unit'];
$content = $_POST['content'];
$start_data = $_POST['start_data'];  
$end_data = $_POST['end_data'];
$address = $_POST['address'];
$remarks = $_POST['remarks'];
$contact = $_POST['contact'];
$type = $_POST['type'];

// 更新数据
$c=mysql_query("UPDATE messages SET unit='$unit',content='$content',
	start_data='$start_data',end_data='$end_data',address='$address',remarks='$remarks',contact='$contact',type='$type' WHERE id='{$_SESSION['id']}'",$link) or  die('修改数据出错：'.mysql_error()); 

if (!$c) {
	echo '<script language="JavaScript">alert("Failed to update!"); history.go(-1);</script>;';
}else
	{echo '<script language="JavaScript">;alert("Successful update!Jump to Administrator page");
	location.href="admin.php";</script>;';
}

?>