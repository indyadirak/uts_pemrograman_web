<!DOCTYPE html>
    <?php 
        $nama = $_GET["username"];
        include("conn.php");
        $proses_data = mysqli_query($connect,"select * from account inner join favorite on account.id_favorite = favorite.id_favorite where username = '$nama'" );
        $data = mysqli_fetch_assoc($proses_data);//digunakan untuk mengambil baris hasil sebagai array asosiatif.
    ?>
    <head>
        <title>
            profile
        </title>
    </head>
    <body style="background-color: aqua;">
        <div>

        </div>
        <div>
            <table border="1">
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
                        <a href="">ubah</a>
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
                        <a href="">ubah</a>
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
                        <a href="">ubah</a>
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
                        <a href="">ubah</a>
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
                        <a href="">ubah</a>
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
                        <button type="button" name="delete">delete</button>
                        <?php
                        
                        ?>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>