<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>Login Page</title>

        <style type="text/css">
            body
            {
                font-family:Arial, Helvetica, sans-serif;
                font-size:14px;

            }
            label
            {
                font-weight:bold;

                width:100px;
                font-size:14px;

            }
            .box
            {
                border:#666666 solid 1px;

            }
        </style>
    </head>
    <body bgcolor="#FFFFFF">
        <div align="center">
            <div style="width:300px; border: solid 1px #333333; " align="left">
                <div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>


                <div style="margin:30px">
                    <?php
                    session_start();
                    require_once 'config_2.php';

                    $uname = mysql_escape_string($_POST['uname']);
                    $pass = mysql_escape_string($_POST['pass']);
                    $result = mysql_query("SELECT id FROM login WHERE id='$uname' and pass='$pass'");
                    $row = mysql_fetch_array($result);
                    $a = $row['id'];

                    if ($a == null) {
                        echo'
<form action="action.php" method="post">
<label>UserName  :</label><input type="text" name="uname" class="box"/><br /><br />
<label>Password  :</label><input type="password" name="pass" class="box" /><br/><br />
<input type="submit" value=" Submit "/><br />
</form>
<label>Login Error </label>
<div style="font-size:11px; color:#cc0000; margin-top:10px"></div>
</div>
</div>
';
                    } else {

                        $_SESSION["user"] = $a;
                        header("Location: edit_index.php"); /* Redirect browser */
                        exit();
                    }
                    ?>
                    </body>
                    </html>