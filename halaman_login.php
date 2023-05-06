<!doctype html>
    <title>
        halaman login
    </title>
    <link rel="stylesheet" type="text/css" href="../uts_pemrograman_web/css/halaman_login.css">
    <?php
        include("conn.php");
    ?>
    <body>
        <form>
            <table cellspacing="10">
                <tr>
                    <td colspan="3">
                        <h2>login</h2>
                    </td>
                </tr>
                <tr>
                    <td><label for="username">username</label></td>
                    <td>:</td>
                    <td><input type="text" name="username" id="username"></td>
                </tr>
                <tr>
                    <td><label for="password">passowrd</label></td>
                    <td>:</td>
                    <td><input type="password" name="password" id="password"></td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                </tr>
                <tr>
                    <td colspan="3" align="center"><button type="submit" name="submit">Login !</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>