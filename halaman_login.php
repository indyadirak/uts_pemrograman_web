<!doctype>
<html>
    <link rel="stylesheet" type="text/css" href="../uts_pemrograman_web/css/halaman_login.css">
    <?php
        include("conn.php");
    ?>
    <head>
        <title>
            halaman login
        </title>
    </head>
    <body>
        <form method="post" action="">
            <table cellspacing="10">
                <tr>
                    <td colspan="3">
                        <h2>login</h2>
                    </td>
                </tr>
                <tr>
                    <td><label for="username">username</label></td>
                    <td>:</td>
                    <td><input type="text" name="username" id="username"></td>
                </tr>
                <tr>
                    <td><label for="password">passowrd</label></td>
                    <td>:</td>
                    <td><input type="password" name="password" id="password"></td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><button type="submit" name="login">login</button></td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
        
                        <?php
                            if(isset($_POST["login"]))
                            {
                                $username = $_POST["username"];
                                $password = $_POST["password"];
                                $hasil = mysqli_query($connect,"select * from account where username = '$username'");
                                if(mysqli_num_rows($hasil))
                                {
                                    $row = mysqli_fetch_assoc($hasil); //digunakan untuk mengambil baris hasil sebagai array asosiatif.
                                    
                                    if(password_verify($password, $row["password"])) //sebagai Decrypt dan pembanding;
                                    {
                                        header("location: profile.php?username=$username");
	                                    exit;
                                    }
                                    else
                                    {
                                        echo "password anda salah";
                                    }
                                }
                                else
                                {
                                    echo "username anda salah";
                                }
                            }
                        ?>
                    </td>
                </tr>
            </table>

        </form>

    </body>
</html>