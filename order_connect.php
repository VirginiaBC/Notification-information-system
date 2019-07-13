<?php

require "dbconfig.php";
// 连接mysql
$link = @mysql_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
// 选择数据库
mysql_select_db(DBNAME,$link);
// 编码设置
mysql_set_charset('utf8',$link);

// 获取增加的订单
$order_quantity = $_POST['order_quantity'];
$order_date = $_POST['order_date'];
$order_city = $_POST['order_city'];  
$order_beizhu = $_POST['order_beizhu'];
$order_phone = $_POST['order_phone'];
$order_name = $_POST['order_name'];
$order_people = $_POST['order_people'];
$order_mail = $_POST['order_mail'];
// 插入数据
$a=mysql_query("INSERT INTO orders(order_name,order_people,order_quantity,order_mail,order_date,order_city,order_beizhu,order_phone) 
VALUES ('$order_name','$order_people','$order_quantity','$order_mail','$order_date','$order_city','$order_beizhu','$order_phone')",$link) or die('添加数据出错：'.mysql_error()); 
if (!$a) {
	echo '<script language="JavaScript">alert("Failed to submit!"); history.go(-1);</script>;';
}else
	{echo '<script language="JavaScript">;alert("Successful submission!Jump to main page");location.href="index.php";</script>;';
}

?>