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
                    <td colspan="4"><h2>selamat datang, <?php echo $username?></h2></td>
                </tr>
                <tr>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td><label for="gender">pilih jenis kelamin baru</label></td>
                    <td>:</td>
                    <td><input type="radio" name="gender" id="gender" value="laki-laki">laki - laki</td> <!-- values digunakan sebagai nilai yang akan dikirim ke variabel-->
                    <td><input type="radio" name="gender" id="gender" value="perempuan">perempuan</td>
                </tr>
                <tr>
                    <td colspan="4" align="center"><button type="submit" name="submit">ubah</button></td>
                    <?php
                        if(isset($_POST["submit"]))
                        {
                            $gender = $_POST["gender"];

                            mysqli_query($connect," update account set jenis_kelamin = '$gender' where username = '$username'");
                            header("location: profile.php?username=$username");
                            exit;
                        }
                    ?>
                </tr>
            </table>
        </form>

    </body>
</html>