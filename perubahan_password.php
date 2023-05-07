<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="../uts_pemrograman_web/css/halaman_perubahan.css">
    <?php 
        $username = $_GET["username"];
        include("conn.php");
    ?>
    <head>
        <title>
            perubahan data
        </title>
    </head>
    <body>
        <form action="" method="post">
            <table cellspacing="10">
                <tr>
                    <td colspan="3"><h2>selamat datang, <?php echo $username?></h2></td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td><label for="password">masukkan password baru</label></td>
                    <td>:</td>
                    <td><input type="password" name="password_baru" id="password" ></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><button type="submit" name="submit">ubah</button></td>
                    <?php
                        if(isset($_POST["submit"]))
                        {
                            $password = $_POST["password_baru"];
                            $password = password_hash($password, PASSWORD_DEFAULT);
                            mysqli_query($connect," update account set password = '$password' where username = '$username'");
                            header("location: profile.php?username=$username");
                            exit;
                        }
                    ?>
                </tr>
            </table>
        </form>

    </body>
</html>