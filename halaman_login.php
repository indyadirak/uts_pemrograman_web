<!doctype html>
    <title>
        halaman login
    </title>
    <link rel="stylesheet" type="text/css" href="../uts_pemrograman_web/css/halaman_login.css">
    <?php
        include("conn.php");
    ?>
    <body>
        <form action="">
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
                                echo "test";
                                echo $hasil;
                                if(mysqli_num_rows($hasil) === 1)
                                {
                                    $row = mysqli_fetch_assoc($hasil);
                                    
                                    if(password_verify($password, $row["password"]))
                                    {
                                        header("location: login.php?username=$username");
	                                    exit;
                                    }
                                }
                                else
                                {
                                    echo "username salah";
                                }
                            }
                        ?>
                    </td>
                </tr>
            </table>

        </form>

    </body>
</html>