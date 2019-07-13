  <?php
      session_start();
     
      @ $id = $_POST['id'];
      @ $password = $_POST['password'];

      if(empty($id)||empty($password))
        {
          echo "<script>alert('Please enter your username and password'); history.go(-1);</script>";  
        }

      $id = trim($id);
      $password = trim($password);
      $id = addslashes($id);
      $password = addslashes($password);
      
      require "dbconfig.php";

      $link = @mysql_connect(HOST,USER,PASS) or die("提示：数据库连接失败！");

      mysql_select_db(DBNAME,$link);

      mysql_set_charset('utf8',$link);
         
            $sql = "select * from user where id='$id' and password='$password'"; 
            $resultSet = mysql_query($sql); 

          if(mysql_num_rows($resultSet)>0)
            { 
              $_SESSION['valid_member'] = $id;
              echo '<script language="JavaScript">;alert("Login successful!Jump to main page");location.href="index.php";</script>;';
            } 

            else if($id=='chinadb' && $password=='admin')
            {
              // visitor's name and password combination are correct
              $_SESSION['valid_admin'] = $id;
             echo '<script language="JavaScript">;alert("Administrator login successful!Jump to the administrator page");location.href="admin.php";</script>;';
            }       
            else
            {
              // visitor's name and password combination are not correct
               echo '<script language="JavaScript">;alert("Login failed!Please re-enter your username and password");history.go(-1);</script>;';  
            }


 
?>
