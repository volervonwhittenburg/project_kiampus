<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="<?php echo URL::asset('css/style-login.css'); ?>" type="text/css" />
</head>
<body bgcolor="#020314">
    <img src="<?php echo URL::asset('img/jpg/bg-1.jpg'); ?>" id="bg-login">
    <table id="tb-login">
        <tr>
            <td height="15%">
            </td>
        </tr>
        <tr>
            <td align="center">
            <img src="<?php echo URL::asset('img/png/logo-mi.png'); ?>" id="logo-mi">
                <table id="tb-formlgn">
                <form action="" method="">
                    <tr>
                        <td height="60px">
                            <input type="text" name="username" id="txt-username" class="txt-login" placeholder="Username" />
                        </td>
                    </tr>
                    <tr>
                        <td height="60px">
                            <input type="password" name="password" id="txt-password" class="txt-login" placeholder="Password" />
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <input type="button" value="Login" id="btn-login" />
                        </td>
                    </tr>
                    <tr>
                </form>
                </table>
            </td>
        </tr>
        <tr>
            <td height="15%">
            </td>
        </tr>
    </table>
</body>
</html>