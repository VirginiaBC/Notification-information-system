<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>修改信息内容</title>
</head>
<style type="text/css">
    body{
        font-family: Cambria, Palatino, "Palatino Linotype", "Palatino LT STD", Georgia, serif;
        background: #fff url(./image/bg.jpg) repeat top left;
        font-weight: 400;
        font-size: 15px;
        color: #333;
    }
    #tubiao{
          position: absolute;
          right: 2%;
          top: 2%;
        }
    .tu{
      
      margin: 10px;
      
    }
    #tubiao a {
      text-decoration:none;
      width: 15px;
      height: 20px;
      color:black;
    }
    .biaodan{
        width: 80%;
        max-width: 600px;
        min-width: 200px;
        margin: 0 auto;
        background-color: #FBFBFF;
        position: relative;
        padding: 0px 0px 20px 0px;
        box-shadow: 1px 2px 4px rgba(0,0,0,0.2);

    }
   .biaodan h3 {
       background-color: #104E8B;
        color: white;
        padding: 20px;
    }


    form{
        margin: 0px 30px 30px 30px;


        padding:0px 0px 10px 150px;
    }
    .la{
        border:20px;
        padding-top: 50px;
        border: 1px gray;
    }

</style>

<body>
<?php
    require "dbconfig.php";
    session_start();
    $link = @mysql_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");
    mysql_select_db(DBNAME,$link);
    mysql_set_charset('utf8',$link);
    
    //$desert_id=$_GET['desert_id'];
    $_SESSION['id']=$_GET['id'];
    $sql = mysql_query("SELECT * FROM messages WHERE id='{$_SESSION['id']}'",$link);
    $sql_arr = mysql_fetch_assoc($sql); 

?>
    <div id="contianer">
        <div id="head">
            <div id="tubiao">           
                <img src="./image/tubiao3.png" width="15px" height="25px"> 
                <span class="tu"><a href="index.php" target="_blank">主页</a></span>
                <span class="tu"><a href="denglu.php" target="_blank">登录</a></span> 
                <span class="tu"><a href="zhuce.php" target="_blank">注册</a></span>
            </div>
    
            <div class="biaodan"> 
                <h3>修改信息内容</h3>     
                <form action="action_edit.php" method="post">

                    <div class="la"><label>通知单位: </label><input type="text" name="unit" value="<?php echo $sql_arr['unit']?>"></div>
                    <div class="la"><label>通知内容：</label><input type="text" name="content" value="<?php echo $sql_arr['content']?>"></div>
                    <div class="la"><label>开始日期：</label><input type="date" name="start_data" value="<?php echo $sql_arr['start_data']?>"></div>
                    <div class="la"><label>截止日期：</label><input type="date" name="end_data" value="<?php echo $sql_arr['end_data']?>"></div>
                    <div class="la"><label>地点：</label><input type="text" name="address" value="<?php echo $sql_arr['address']?>"></div>
                    <div class="la"><label>备注：</label><input type="text" name="remarks" value="<?php echo $sql_arr['remarks']?>"></div>
                    <div class="la"><label>联系方式：</label><input type="text" name="contact" value="<?php echo $sql_arr['contact']?>"></div>
                    <div class="la"><label>通知类别：</label><input type="text" name="type" value="<?php echo $sql_arr['type']?>"></div>
                    <div class="la"><input type="submit" value="提交">
                </form>
            </div>  
    </div>
</body>  



</body>
</html>