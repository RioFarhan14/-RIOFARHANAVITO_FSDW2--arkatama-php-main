<?php
// Memulai Session
session_start();
// Koneksi ke database
include 'koneksi.php';

if ($koneksi->connect_error) {
    die("Connection failed: " . $koneksi->connect_error);
}

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        echo "<script>alert('Please enter both email and password!');</script>";
    } else {
        // Cek kecocokan email dan password dalam database
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = $koneksi->query($query);

        if ($result->num_rows == 1) {
            // Email dan password cocok, arahkan ke halaman index.php
            $_SESSION['email'] = $email;
            header("Location: index.php");
            exit();
        } else {
            echo "<script>alert('email atau password salah !');</script>";
        }
    }
}

$koneksi->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                <p class="text-white-50 mb-5">Please enter your login and password!</p>

                                <form method="POST" action="login.php">
                                    <div class="form-outline form-white mb-4">
                                        <input type="email" name="email" id="typeEmailX" placeholder="Email" class="form-control form-control-lg" />
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <input type="password" name="password" id="typePasswordX" placeholder="Password" class="form-control form-control-lg" />
                                    </div>

                                    <button class="btn btn-outline-light btn-lg px-5" type="submit" name="login">Login</button>
                                </form>
                            </div>
                            <div>
                                <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>