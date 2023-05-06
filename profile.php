<!DOCTYPE html>
    <?php 
        $nama = $_GET["username"];
        include("conn.php");
        $data = mysqli_query($connect,"select * from account where username = '$nama'");
        $array_data = mysqli_fetch_assoc($data); //digunakan untuk mengambil baris hasil sebagai array asosiatif.
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
            <table>
                <tr>
                    <td rowspan="4" align="center">
                        <h3>selamat datang, <?php echo $array_data['username'] ?></h3>
                    </td>
                </tr>
                <>
                    <td>
                        username
                    </td>
                    <td>
                        :
                    </td>
                    <td>

                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>