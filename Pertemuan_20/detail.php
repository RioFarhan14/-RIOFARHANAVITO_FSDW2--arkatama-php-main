<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Detail Pengguna</title>
</head>

<body>
    <?php
    include 'koneksi.php';

    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        // Memeriksa koneksi
        if ($koneksi->connect_error) {
            die("Koneksi ke database gagal: " . $koneksi->connect_error);
        }

        // Mengambil data pengguna dari tabel users berdasarkan ID
        $sql = "SELECT * FROM users WHERE id = '$id'";
        $result = $koneksi->query($sql);

        if ($result->num_rows > 0) {
            // Menampilkan data pengguna
            $row = $result->fetch_assoc();
    ?>
            <h2>Detail Pengguna</h2>
            <table>
                <tr>
                    <td>ID:</td>
                    <td><?php echo $row['id']; ?></td>
                </tr>
                <tr>
                    <td>Nama:</td>
                    <td><?php echo $row['name']; ?></td>
                </tr>
                <tr>
                    <td>Email:</td>
                    <td><?php echo $row['email']; ?></td>
                </tr>
                <tr>
                    <td>Role:</td>
                    <td><?php echo $row['role']; ?></td>
                </tr>
                <tr>
                    <td>Avatar:</td>
                    <td><ion-icon name='person-circle-outline' size='large'></ion-icon></td>
                </tr>
                <tr>
                    <td>No.telpon:</td>
                    <td><?php echo $row['phone']; ?></td>
                </tr>
                <tr>
                    <td>Alamat:</td>
                    <td><?php echo $row['address']; ?></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><?php echo $row['password']; ?></td>
                </tr>
                <tr>
                    <td>Gambar:</td>
                    <td><?php echo "<img src='uploads/" . $row['foto'] . "' width='200px'>" ?></td>
                </tr>
            </table>
    <?php
        } else {
            echo "Data pengguna tidak ditemukan";
        }
        $koneksi->close();
    }
    ?>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>