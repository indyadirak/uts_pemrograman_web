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
                    <td><label for="username">masukkan username baru</label></td>
                    <td>:</td>
                    <td><input type="text" name="username_baru" id="username" ></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><button type="submit" name="submit">ubah</button></td>
                    <?php
                        if(isset($_POST["submit"]))
                        {
                            $username_baru = $_POST["username_baru"];
                            mysqli_query($connect," update account set username = '$username_baru' where username = '$username'");
                            header("location: profile.php?username=$username_baru");
                            exit;
                        }
                    ?>
                </tr>
            </table>
        </form>

    </body>
</html>