<!DOCTYPE html>
<html lang="en">
<body>
<?php
    $nama = $_POST["nama"];
    $tempatlahir = $_POST["tempatlahir"];
    $tgllahir = $_POST["tgllahir"];
    $alamat = $_POST['Alamat'];
    $selectedGender = "";
    $asalskolah = $_POST["asalskolah"];

    if (isset($_POST["gender"])) {
        $selectedGender = $_POST["gender"];}

?>
<table>
    <tr>
        <td>Nama</td><td>: <?php echo "$nama"; ?></td>
    </tr>
    <tr>    
        <td>Tempat</td><td>: <?php echo "$tempatlahir";?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir </td><td>: <?php echo "$tgllahir" ;?></td>
    </tr>
    <tr>
        <td>Alamat</td><td>: <?php echo "$alamat"?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:
        <?php echo "$selectedGender"?>
    </td>
    <tr>
        <td>Asal Sekolah</td><td>: <?php echo "$asalskolah"?></td>
    </tr>


</table>
</body>
</html>
