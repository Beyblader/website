<?php 
$koneksi = mysqli_connect("localhost","root","","pr");

if(!$koneksi) {
    echo "koneksi gagal " . mysqli_connect_error();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>5 Pelabuhan Ratu</title>
</head>
<body>
<div class="main">
        <nav>
            <label class="logo">5 <span>Pelabuhan</span> <span1>Ratu</span1></label>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="portofolio.html">Portofolio</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="dark.php">Login</a></li>
            </ul>
            <br>
            <br>
        </nav>
        <br>

        <h1 class="bebek">Siswa</h1>
        <br>
        
        <div class="black">
        <table border="1" width=600px>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Umur</th>
            </tr>
        <?php
$no=1;
$query = mysqli_query($koneksi, "SELECT * FROM 5pr");
while ($tampil = mysqli_fetch_array($query)){
    echo "
    <tr>
    <td>$no</td>
       <td>$tampil[Nama]</td>
       <td>$tampil[Umur]</td>
    </tr>";

    $no++;
}     
        ?>
        </table>
        </div>
</div>
</body>
</html>