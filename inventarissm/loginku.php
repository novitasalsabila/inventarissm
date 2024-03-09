<?php
include ('config.php');

session_start(); 


if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $username = validate($_POST['username']);

    $password = validate($_POST['password']);

    if (empty($username)) {

        echo '<script>alert("Username anda kosong. Silahkan isi lagi!"); location = "index.php" </script>';

    }else if(empty($password)){

        echo '<script>alert("Password anda kosong. Silahkan isi lagi!"); location = "index.php" </script>';

    }else{

        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";

        $result = mysqli_query($koneksi, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['username'] === $username && $row['password'] === $password) {

                echo "Logged in!";

                $_SESSION['username'] = $row['username'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['id'] = $row['id'];

                header("Location: dasboard.php");

                exit();

            }else{

                echo '<script>alert("Email atau password Anda salah. Silahkan coba lagi!"); location = "index.php" </script> ';

                exit();

            }

        }else{

            echo '<script>alert("Email atau password Anda salah. Silahkan coba lagi!"); location = "index.php" </script>';

            exit();

        }

    }

}
?>


