<!doctype>
<html>
    <link rel="stylesheet" type="text/css" href="../uts_pemrograman_web/css/halaman_daftar.css"
    <?php
        include("conn.php");
    ?>
    <head>
        <title>
            form pendaftaran
        </title>
    </head>
    <body>
        <form method="post" action="">
            <div>
                <table cellspacing="10" >
                    <tr>
                        <td colspan="4">
                            <h2>Register</h2>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="username">username</label></td>
                        <td>:</td>
                        <td colspan="2"><input type="text" name="username" id="username"></td>
                    </tr>
                    <tr>
                        <td><label for="password">password</td>
                        <td>:</td>
                        <td colspan="2"><input type="password" name="password" id="password"></td>
                    </tr>
                    <tr>
                        <td><label for="quotes">quotes</label></td>
                        <td>:</td>
                        <td><textarea name="quotes" id="quotes" rowspan="2"></textarea></td>
                    </tr>
                    <tr>
                        <td><label for="favorite">karakter favorite</label></td>
                        <td>:</td>
                        <td colspan="2">
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
                        <td><label for="gender">jenis kelamin</label></td>
                        <td>:</td>
                        <td><input type="radio" name="gender" id="gender" value="laki-laki">laki - laki</td> <!-- values digunakan sebagai nilai yang akan dikirim ke variabel-->
                        <td><input type="radio" name="gender" id="gender" value="perempuan">perempuan</td>
                    </tr>
                    <tr>
                        <td colspan="4"></td>
                    </tr>
                    <tr>
                        <td colspan="4"></td>
                    </tr>
                    <tr>
                        <td colspan="4 " align="center"><button type="submit" name="register">Register!</button></td>
                    </tr>
                    <tr>
                        <td colspan="4" align="center" >
                            <?php
                            
                                if(isset($_POST["register"]))
                                {
                        
                                    $username = $_POST["username"];
                                    $password = $_POST["password"];
                                    $password = password_hash($password, PASSWORD_DEFAULT);
                                    $quotes = $_POST["quotes"];
                                    $favorite = $_POST["favorite"];
                                    $gender = $_POST["gender"];

                                    $hasil = mysqli_query($connect,"insert into account values('$username', '$password', '$quotes', '$favorite', '$gender') ");

                                    if($hasil)
                                    {
                                        echo "register berhasil, silakan <a href='halaman_login.php'>klik disini</a> untuk login.";
                                    }
                                    else
                                    {
                                        echo "register anda tidak berhasil.";
                                    }
                                }
                            ?>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </body>
</html>