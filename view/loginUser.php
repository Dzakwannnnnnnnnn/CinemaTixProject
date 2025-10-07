<?php
if(isset($_POST['Submit'])){
  $nama_user = $_POST['nama'];
  $email_user = $_POST['email'];
  $password_user = $_POST['password'];
  include_once("koneksi.php");
  $hasil = mysqli_query($mysqli, "INSERT INTO users(nama, email, password) VALUES('$nama_user','$email_user', '$password_user')");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login User</title>
</head>
<body>
  <div class="container">
    <form action="loginUser.php" method="post">
      <table>
        <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" placeholder="Nama"></td>
        </tr>
        <tr>
                <td>Email</td>
                <td><input type="text" name="email" placeholder="Email"></td>
        </tr>
        <tr>
                <td>Password</td>
                <td><input type="password" name="password" placeholder="Password"></td>
        </tr>
        <tr>
                <td colspan="2" style="text-align:right;">
                    <input type="submit" name="Submit" placeholder="tambahkan">
                </td>
        </tr>
      </table>
    </form>
  </div>
</body>
</html>