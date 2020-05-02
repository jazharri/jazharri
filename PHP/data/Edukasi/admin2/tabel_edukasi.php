
<head>

</head>
<body>

	<table id="tabel-data">
		<thead>
			<tr>
				<th>ID</th>
				<th>Course Name</th>
				<th>Education Date</th>
				<th>Venue</th>
				<th>Tema</th>
				<th>Time</th>
				<th>Name</th>
				<th>Email</th>
				<th>Handphone</th>
				<th>PIC</th>
				<th>Input</th>
			</tr>
		</thead>
		<tbody>
			<?php
				include '../config.php';
				$employee = mysqli_query($koneksi,"select * from edukasi_register");
				while($row = mysqli_fetch_array($employee))
				{
					echo "<tr>
					<td>".$row['id_edukasi']."</td>
					<td>".$row['course_name']."</td>
					<td>".$row['date_edukasi']."</td>
					<td>".$row['venue_edukasi']."</td>
					<td>".$row['tema_edukasi']."</td>
					<td>".$row['time_edukasi']."</td>
					<td>".$row['name']."</td>
					<td>".$row['email']."</td>
					<td>".$row['hp']."</td>
					<td>".$row['pic_edukasi']."</td>
					<td>".$row['entry_date']."</td>
				</tr>";
				}
			?>
		</tbody>

		<script>
			$(document).ready(function(){
				$('#tabel-data').DataTable();
			});
		</script>

	</table>
</body>
