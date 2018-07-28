<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="<?php echo URL::asset('css/style-login.css'); ?>" type="text/css" />
</head>
<body bgcolor="#020314">
    <table id="tb-login">
        <tr>
            <td height="15%">
            </td>
        </tr>
        <tr>
            <td align="center">
                <table id="tb-formlgn">
                <form action="" method="">
                    <tr>
                        <td>
                            <input type="text" name="username" id="txt-username" class="txt-login" placeholder="Username" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="password" name="password" id="txt-password" class="txt-login" placeholder="Password" />
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <br>
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