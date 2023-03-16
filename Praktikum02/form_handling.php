<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>
    <h1>Form Pendaftaran Mahasiswa</h1>
    <form action="belajar_post.php" method="POST">

        <!-- Tipe Teks -->
        <label for="">Nama Mahasiswa : </label><br>
        <input type="text" name="nama"><br><br>

        <!-- Tipe Radion -->
        <label for="">Jenis Kelamin : </label><br>
        <input type="radio" name="jenis_kelamin" value="laki-laki">
            <label for="">Laki-laki</label>
        <input type="radio" name="jenis_kelamin" value="perempuan">
            <label for="">Perempuan</label><br><br>

        <!-- Tipe checkbox -->
        <label for="">Hobi</label><br>
        <input type="Checkbox" name="hobi" value="Mendengarkan Musik">
            <label for="">Mendengarkan Musik</label><br>
        <input type="Checkbox" name="hobi" value="basket">
            <label for="">Basket</label><br>
        <input type="Checkbox" name="hobi" value="makeup">
            <label for="">makeup</label><br><br>

        <!-- Tipe Number -->
        <label for="">NIM</label><br>
        <input type="number" name="nim"><br><br>

        <!-- Tag Select -->
        <label for="">Prodi</label><br>
        <select name="prodi">
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">SIstem Informasi</option>
            <option value="BIsnis Digital">Bisnis Digital</option>
        </select><br><br>

        <!-- Button -->
        <button type="submit">Kirim</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>