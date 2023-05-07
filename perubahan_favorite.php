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
                    <td><label for="quotes">masukkan karakter favorite baru</label></td>
                    <td>:</td>
                    <td>
                        <select name="favorite" id="favorite">
                                <option value="0">Pilih karakter favorite</option>
                                <?php
                                    $query_favorite = mysqli_query($connect, "select * from favorite"); //mengambil data dari database
                                    while($array_favorite = mysqli_fetch_array($query_favorite)) //mengubah hasil query ke erray
                                    {
                                ?>;
                                <option value="<?php echo $array_favorite['id_favorite']; ?>">
                                <?php echo $array_favorite['favorite']; ?>
                                </option>
                                        <?php
                                    }
                                ?>
                            </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><button type="submit" name="submit">ubah</button></td>
                    <?php
                        if(isset($_POST["submit"]))
                        {
                            $favorite = $_POST["favorite"];

                            mysqli_query($connect," update account set id_favorite = '$favorite' where username = '$username'");
                            header("location: profile.php?username=$username");
                            exit;
                        }
                    ?>
                </tr>
            </table>
        </form>

    </body>
</html>