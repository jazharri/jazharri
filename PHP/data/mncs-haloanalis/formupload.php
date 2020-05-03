<?php
// membuat koneksi ke database
$host       = "localhost";
$user       = "root";
$password   = "";
$database   = "thinkpad";
$con        = mysqli_connect($host, $user, $password, $database);
if(isset($_POST['tombol']))
{

    $temp   = $_FILES['gambar']['tmp_name'];
    $name   = "HaloAnalis_".time()."_".$_FILES['gambar']['name'];
    $size   = $_FILES['gambar']['size'];
    $type   = $_FILES['gambar']['type'];
    $keterangan = $_POST['keterangan'];
    $folder = "uploads/";
    $url    = $folder.$name;
    if ($size < 100000 and ($type =='image/jpeg' or $type == 'image/png' or $type == 'image/gif')) {
        move_uploaded_file($temp, $folder . $name);
        mysqli_query($con, "insert into halo_analis_upload (name_file, note_file, type_file, size_file, url_file) values ('$name','$keterangan','$type','$size','$url')");
        header('location:formupload.php');
    }else{
        echo "<b>Gagal Upload File</b>";
    }
}
?>
<html>
<head>
    <title></title>
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Gambar</td>
            <td><input type="file" name="gambar"/></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td><textarea name="keterangan"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="tombol"/></td>
        </tr>
    </table>
</form>
</body>
</html>