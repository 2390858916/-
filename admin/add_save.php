<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once ('conn.php');
            $u=$_POST['usernameadd'];
            $p=$_POST['usernameadd'];
            $email=$_POST['email'];
            $sql="insert into admin(username,password,tel) value('$u','$p','$email')";
            $result= mysqli_query($conn, $sql);
	if($result==1){
        echo "<script>alert('添加成功!');location.href='login.php'</script>";	
        }else{
  	 echo "<script>alert('添加不成功!');location.href='adduser.php'</script>";	
        } 
        ?>
    </body>
</html>