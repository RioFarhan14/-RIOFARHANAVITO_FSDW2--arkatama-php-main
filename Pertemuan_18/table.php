<?php
include 'function.php'
?>

<!DOCTYPE html>
<html>

<head>
    <title>Produk dan Kategori</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }

        table {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <h1>Produk dan Kategori</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Nama Kategori</th>
                <th>Deskripsi Kategori</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $result = getJoinedData();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['id'] . '</td>';
                    echo '<td>' . $row['product_name'] . '</td>';
                    echo '<td>' . $row['price'] . '</td>';
                    echo '<td>' . $row['category_name'] . '</td>';
                    echo '<td>' . $row['product_description'] . '</td>';
                    echo '</tr>';
                }
            } else {
                echo '<tr><td colspan="5">Tidak ada data</td></tr>';
            }
            ?>
        </tbody>
    </table>
</body>

</html>