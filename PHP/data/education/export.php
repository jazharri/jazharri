<?php
if(isset($_POST["Export"])){
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=DataKlinikEducation.csv');
    $output = fopen("php://output", "w");
	fputcsv($output, array('course_name','date_edukasi','venue_edukasi','time_edukasi','name','email','hp','entry_date'));

	$conn   = mysqli_connect('localhost','securities','0k3z0n3.c0m', 'securities');
	$query = "SELECT course_name, date_edukasi, venue_edukasi, time_edukasi, name, email, CONCAT('--', hp), entry_date FROM edukasi ORDER BY id_edukasi DESC;";
	
    $result = mysqli_query($conn, $query);  
    while($row = mysqli_fetch_assoc($result))  
    {  
        fputcsv($output, $row);  
    }  
    fclose($output);  
} else {
?>

<form class="form-horizontal" action="" method="post" name="upload_excel" enctype="multipart/form-data">
	<div class="form-group">
		<div class="col-md-4 col-md-offset-4">
			<input type="submit" name="Export" value="Export to CSV"/>
		</div>
	</div>                    
</form>           

<?php 
} 
?>