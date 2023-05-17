<?php
function connectToDatabase()
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "arkatama_pertemuan13";

    // Membuat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Memeriksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    return $conn;
}
// Fungsi untuk mengambil data hasil join
function getJoinedData()
{
    $conn = connectToDatabase();

    // Membuat query join antara tabel products dan categories
    $sql = "SELECT p.id,p.name as product_name,p.price,c.name as category_name, p.description as product_description 
    from products p inner join categories c on p.category_id = c.id";

    $result = $conn->query($sql);

    $conn->close();

    return $result;
}

// Fungsi untuk melakukan insert data ke tabel categories
function insertCategory($name)
{
    $conn = connectToDatabase();

    // Membuat query insert
    $sql = "INSERT INTO categories (name,created_at, updated_at) VALUES ('$name',NOW(),NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "Data kategori berhasil ditambahkan.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

// Fungsi untuk melakukan insert data ke tabel products
function insertProduct($name, $price, $description, $status, $category_id, $createby)
{
    $conn = connectToDatabase();

    // Membuat query insert
    $sql = "INSERT INTO products (category_id, name, description, price, status, created_by, created_at, updated_at) 
    VALUES ($category_id, '$name', '$description', $price, '$status', $createby, NOW(), NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "Data produk berhasil ditambahkan.<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

// Memanggil fungsi insertCategory untuk menambahkan data kategori
insertCategory("Elektronik");
insertCategory("Pakaian");

// Memanggil fungsi insertProduct untuk menambahkan data produk
insertProduct('Product 50', 50000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'waiting', 9, 1);
insertProduct('Product 51', 10000, 'Lorem ipsum dolor sit amet consectetur adipisicing elit.', 'waiting', 7, 1);
