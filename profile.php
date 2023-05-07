<!DOCTYPE>
<html>
    <link rel="stylesheet" type="text/css" href="/uts_pemrograman_web/css/profile.css">
    <?php 
        $nama = $_GET["username"];
        include("conn.php");
        $proses_data = mysqli_query($connect,"select * from account inner join favorite on account.id_favorite = favorite.id_favorite where username = '$nama'" );
        $data = mysqli_fetch_assoc($proses_data); /*digunakan untuk mengambil baris hasil sebagai array asosiatif.*/ 
    ?>
    <head>
        <title> profile</title>
    </head>
    <body>
        <!-- tambahkan tag form dengan method pos-->
        <form method="post" action="">
         <table>
                <tr>
                    <td colspan="4" align="center">
                        <h3>selamat datang, <?php echo $data['username'] ?></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        username
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php echo $data['username'] ?>
                    </td>
                    <td>
                        <a href="perubahan_uername.php?username=<?= $nama?>">ubah</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        password
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        terproteksi
                    </td>
                    <td>
                        <a href="perubahan_password.php?username=<?= $nama?>">ubah</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        quotes
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php echo $data['quotes'] ?>
                    </td>
                    <td>
                        <a href="perubahan_quotes.php?username=<?= $nama?>">ubah</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        karakter favorite
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php echo $data['favorite'] ?>
                    </td>
                    <td>
                        <a href="perubahan_favorite.php?username=<?= $nama?>">ubah</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        jenis kelamin
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php echo $data['jenis_kelamin'] ?>
                    </td>
                    <td>
                        <a href="perubahan_jenis_kelamin.php?username=<?= $nama?>">ubah</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        hapus data 
                    </td>
                    <td>
                        :
                    </td>
                    <td colspan="2" align="center"> 
                        <button type="submit" name="delete" onclick="return confirm('yakin?')">delete</button>
                        <?php 
                            if(isset($_POST["delete"]))
                            {   
                                mysqli_query($connect, "DELETE FROM account where username = '$nama'");
                                header("location: index.php");
                                exit;
                            }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html>