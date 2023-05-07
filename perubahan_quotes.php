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
                    <td><label for="quotes">masukkan quotes baru</label></td>
                    <td>:</td>
                    <td><textarea name="quotes" id="quotes" rowspan="2"></textarea></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><button type="submit" name="submit">ubah</button></td>
                    <?php
                        if(isset($_POST["submit"]))
                        {
                            $quotes = $_POST["quotes"];

                            mysqli_query($connect," update account set quotes = '$quotes' where username = '$username'");
                            header("location: profile.php?username=$username");
                            exit;
                        }
                    ?>
                </tr>
            </table>
        </form>

    </body>
</html>