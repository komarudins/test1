<?php
// Fungsi untuk menghasilkan hash SHA-256
function create_sha256_hash($text) {
    return hash("sha256", $text);
}

// Inisialisasi variabel input_text
$input_text = "";

// Cek apakah pengguna telah mengirimkan formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_text = $_POST["input_text"];

    // Menghasilkan hash SHA-256
    $hashed_text = create_sha256_hash($input_text);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Hashing PHP</title>
</head>
<body>
    <h1>Aplikasi Hashing PHP</h1>
    <form method="POST">
        <label for="input_text">Masukkan teks yang akan di-hash:</label>
        <input type="text" name="input_text" id="input_text" value="<?php echo $input_text; ?>">
        <button type="submit">Hash</button>
    </form>

    <?php
    if (isset($hashed_text)) {
        echo "<h2>Hasil Hash SHA-256:</h2>";
        echo "<p>Teks Asli: $input_text</p>";
        echo "<p>Hash SHA-256: $hashed_text</p>";
    }
    ?>
</body>
</html>
