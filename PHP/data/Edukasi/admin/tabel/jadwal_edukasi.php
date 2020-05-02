<section class="content-header">
	<div class="row">
        <div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">Jadwal Edukasi</h3>
				</div>
				<div class="content-header">
					<a href="edukasi_input.php?page=tambah_jadwal" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
				</div>				
				<table id="example1" class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Topic</th>
							<th>Venue</th>
							<th>Tema</th>
							<th>Quota</th>
							<th>Time</th>
							<th>PIC</th>
							<th>Create By</th>
							<th>Update By</th>
						</tr>
					</thead>
					<tbody>
						<?php
							include '../config.php';
							$employee = mysqli_query($koneksi,"select * from edukasi_quota");
							while($row = mysqli_fetch_array($employee))
							{
								echo "<tr>
								<td>".$row['id_quota']."</td>
								<td>".$row['topic_edukasi']."</td>
								<td>".$row['venue_edukasi']."</td>
								<td>".$row['tema_edukasi']."</td>
								<td>".$row['quota_edukasi']."</td>
								<td>".$row['time_edukasi']."</td>
								<td>".$row['pic_edukasi']."</td>
								<td>".$row['create_date']. '; ' .$row['create_by']."</td>
								<td>".$row['update_date']. '; ' .$row['update_by']."</td>
								

							</tr>";
							}
						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>	
</section>