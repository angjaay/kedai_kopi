<?php
session_start();
include_once '../controller/UserController.php';
$user = new User();

if (isset($_POST['submit'])) {
    $id = $user->db->escape_string($_POST['id']);
    $nama = $user->db->escape_string($_POST['nama']);
    $password = $user->db->escape_string($_POST['password']);
    $regis = $user->store($id, $nama, $password);
    if ($regis) {
        //Registration success
        $login = $user->login($id, $password);
        if ($login) {
            // Registration Success
            header("location:../index.php");
        } else {
            // Registration Failed
            echo 'ID atau Password salah';
        }
        header("location:../index.php?message=regisOk");
    } else {
        echo "Registrasi gagal";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script type="text/javascript" language="javascript">
        function submitlogin() {
            var form = document.login;
            if (form.id.value == "") {
                alert("Enter id");
                return false;
            } else if (form.password.value == "") {
                alert("Enter password.");
                return false;
            } else if (form.nama.value == "") {
                alert("Enter name.")
            }
        }
    </script>

    <span style="font-family: 'Courier 10 Pitch', Courier, monospace; font-size: 13px; font-style: normal; line-height: 1.5;">
        <div id="container">
    </span>
    <h1>Login Here</h1>
    <form action="" method="post" name="login">
        <table>
            <tbody>
                <tr>
                    <th>ID</th>
                    <td><input type="text" name="id" required="" /></td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td><input type="text" name="nama" required="" /></td>
                </tr>
                <tr>
                    <th>Password:</th>
                    <td><input type="password" name="password" required="" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input onclick="return(submitlogin());" type="submit" name="submit" value="Login" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td><a href="registration.php">Register new user</a></td>
                </tr>
            </tbody>
        </table>
    </form>
    </div>

</body>

</html>