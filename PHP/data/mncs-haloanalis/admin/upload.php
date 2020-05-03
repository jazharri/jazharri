<?php
include "../conni.php";
$query = mysqli_query($con,"select * from halo_analis_upload");
?>
<html>
<head>
    <title></title>
</head>
<body>
<a href="../formupload.php">Upload File</a>
<table border="1">
    <tr>
        <th>No</th>
        <th>Nama File</th>
        <th>Note</th>
        <th>Type File</th>
        <th>Size File</th>
        <th>Action</th>
    </tr>
    <?php
    $no = 1;
    while($row = mysqli_fetch_array($query))
    {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><a href="../uploads/<?php echo $row['name_file']; ?>"><img src="../uploads/<?php echo $row['name_file']; ?>" width="100"/></a></td>
            <td><?php echo $row['note_file']; ?></td>
            <td><?php echo $row['type_file']; ?></td>
            <td><?php echo $row['size_file']; ?></td>
            <td><a href="delete_image.php?id_upload=<?php echo $row['id_upload']; ?>">Delete</a></td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>