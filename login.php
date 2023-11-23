<?php
session_start();
include "koneksi.php";
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordenc = md5("Aplikasi".md5($password));

    $sql = "select * from user where username='$username' and password='$passwordenc'";
    $query = mysqli_query($conn, $sql);
    $hasil = mysqli_fetch_array($query);
    if($hasil['username']==$username && $hasil['password']==$passwordenc){
        //berhasil login
        $_SESSION['nama'] = $hasil['nama'];
        $_SESSION['status'] = $hasil['status'];
        if($hasil['status']=="Admin"){
            //user admin
            ?>
            <script>alert ('Selamat Datang Admin');
            document.location='admin.php';
            </script>
            <?php
        }else{
            //user pengunjung
            ?>
            <script>alert ('Selamat Datang Pengunjung');
            document.location='pengunjung.php';
            </script>
            <?php
        }
    }else{
        //gagal login
        ?>
        <script>alert ('Username / Password yang dimasukan salah');
        document.location='login.php';
        </script>
        <?php
    }
}
?>
<form method='post' name='formlogin' action='<?php $_SERVER['PHP SELF']; ?>' >
<table border='0' align='center'>
    <tr>
        <td>Username</td>
        <td><input type='text' name='username'></td>
    </tr>
    <tr>
        <td>Password</td>
        <td><input type='password' name='password'></td>
    </tr>
    <td></td>
    <td><input type='submit' name='login' value='Log In'></td>
    </tr>
</table>
</form>