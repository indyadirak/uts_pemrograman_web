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
        <div>
            <table cellspacing="10" >
                <tr>
                    <td><label for="username">username</label></td>
                    <td>:</td>
                    <td colspan="2"><input type="text" id="username"></td>
                </tr>
                <tr>
                    <td><label for="password">password</td>
                    <td>:</td>
                    <td colspan="2"><input type="password" id="password"></td>
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
                                $query_favorite = mysqli_query($connect, "select favorite from favorite"); //mengambil data dari database
                                while($array_favorite = mysqli_fetch_array($query_favorite)) //mengubah ke erray
                                {
                            ?>;
                            <option>
                                <?php echo $array_favorite['favorite']; ?>
                            </option>
                            <?php
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="jenis_kelamin">jenis kelamin</label></td>
                    <td>:</td>
                    <td><input type="radio" name="jenis_kelamin" id="jenis_kelamin">laki - laki</td>
                    <td><input type="radio" name="jenis_kelamin" id="jenis_kelamin">perempuan</td>
                </tr>
            </table>
        </div>
    </body>
</html>