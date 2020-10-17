<h2>Review</h2>

<table class="table table-bordered">
	<a href="index.php?halaman=tambahreview" class="btn btn-primary">Tambah Review</a>
	<thead>
		<tr>
			<th>id_review</th>
			<th>tanggal review</th>
			<th>isi review</th>
			<th>pengirim</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
		<?php $id=1; ?>
		<?php $result=$db->query("SELECT * FROM review"); ?>
		<?php while ($row = $result->fetch_assoc()){ ?> 
			<tr>
			<td><?php echo $id; ?></td>
			<td><?php echo $row['tanggal'];?></td>
			<td><?php echo $row['isi_review'];?></td>
			<td><?php echo $row['pengirim'];?></td>
			<td>
				<a href="index.php?halaman=detailreview&id=<?php echo $row['id_review']; ?>" class="btn btn-info">Detail</a>
				<a href="index.php?halaman=editreview&id=<?php echo $row['id_review']; ?>" class="btn btn-warning">Edit</a>
				<a href="index.php?halaman=hapusreview&id=<?php echo $row['id_review']; ?>" class="btn btn-danger">Delete</a>	
			</td>
			</tr>
			<?PHP $id++; ?>
			<?php } ?> 
<?php
echo 'Total Rows = '.$result->num_rows; 
$result->free(); 
$db->close(); 
?> 
	</tbody>
</table>