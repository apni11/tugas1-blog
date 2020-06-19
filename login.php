<?php
session_start();
require_once "app/user.php";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $object  = new Users();
    $object->Login($username, $password);
}

?>

<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="aset/css/stylelogin">
</head>
<form action="" method="POST">
    <div class="kotak">
        <div class="kepala">
            <h2><center>login</center></h2>
        </div>
    <div class="form">
        <table>
            <tr>
                <th>User ID</th>
                <td>
                    <img class="id" src="layout/assets/images/id.png" width="16px">
                    <input type="text" name="username" placeholder="UserID">
                </td>
            </tr>

            <tr><th>Password</th>
                <td>
                    <img class="id" src="layout/assets/images/id.png" width="16px">
                    <input type="password" name="password" placeholder="Password"></td>
                </tr>

                <tr>
                    <th></th>
                   <td>
                       <input type="submit" name="login" value="login">
                       <input type="submit" name="regist" value="registrasi" >
                   </td> 
                </tr>
        

}
