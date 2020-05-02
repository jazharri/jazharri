
    
    
	
<!--	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
-->	
	
<section class="content-header">
	<div class="row">
        <div class="col-12">
			<div class="card">
				<div class="card-header">
					<h3 class="card-title">JADWAL EDUKASI</h3>
				</div>
				<div class="card-header">
					<a href="edukasi_input.php?page=tambah_jadwal" class="btn btn-primary" role="button" title="Tambah Data"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
				</div>
				<div class="card-body table-responsive">
					<table id="example1" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>ID</th>
								<th>TOPIC</th>
								<th>VENUE</th>
								<th>TEMA</th>
								<th>QUOTA</th>
								<th>TIME</th>
								<th>PIC</th>
								<th>CREATE</th>
								<th>UPDATE</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<?php
								include '../config.php';
								$no=0;
								$jadwal = mysqli_query($koneksi,"SELECT * FROM edukasi_quota ORDER BY id_quota DESC");
								while($row = mysqli_fetch_array($jadwal))
								{
							?>
							<tr>
								<td><?php echo $no=$no+1;?></td>
								<td><?php echo $row['id_quota'];?></td>
								<td><?php echo $row['topic_edukasi'];?></td>
								<td><?php echo $row['venue_edukasi'];?></td>
								<td><?php echo $row['tema_edukasi'];?></td>
								<td><?php echo $row['quota_edukasi'];?></td>
								<td><?php echo $row['time_edukasi'];?></td>
								<td><?php echo $row['pic_edukasi'];?></td>
								<td><?php echo $row['create_date'];?></td>
								<td><?php echo $row['update_date'],'; ', $row['update_by'];?></td>
								<td>
									<a href="edukasi_edit.php?id=<?=$row['id_quota'];?>" class="btn btn-success" role="button" title="Ubah Data"><i class="glyphicon glyphicon-edit"></i></a>
									<a href="tabel/delete_edukasi.php?id=<?=$row['id_quota'];?>" class="btn btn-danger" role="button" title="Hapus Data"><i class="glyphicon glyphicon-trash"></i></a>
								</td>								
							</tr>
							<?php } ?>						
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</section>

