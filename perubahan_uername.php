<!DOCTYPE html>
<html>
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
                    <td colspan="3">selamat datang, <?php echo $username?></td>
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
                    <td colspan="3"><button type="submit" name="submit">ubah</button></td>
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