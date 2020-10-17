<h2>Komentar</h2>

<table class="table table-bordered">
	<a href="index.php?halaman=tambahkomentar" class="btn btn-primary">Tambah Komentar</a>
	<thead>
		<tr>
			<th>id komentar</th>
			<th>tanggal posting</th>
			<th>isi komentar</th>
			<th>pengirim</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
		<?php $id=1; ?>
		<?php $result=$db->query("SELECT * FROM komentar"); ?>
		<?php while ($row = $result->fetch_assoc()){ ?> 
			<tr>
			<td><?php echo $id; ?></td>
			<td><?php echo $row['tanggal'];?></td>
			<td><?php echo $row['isi_komentar'];?></td>
			<td><?php echo $row['pengirim'];?></td>
			<td>
				<a href="index.php?halaman=detailkomentar&id=<?php echo $row['id_komentar']; ?>" class="btn btn-info">Detail</a>
				<a href="index.php?halaman=editkomentar&id=<?php echo $row['id_komentar']; ?>" class="btn btn-warning">Edit</a>
				<a href="index.php?halaman=hapuskomentar&id=<?php echo $row['id_komentar']; ?>" class="btn btn-danger">Delete</a>	
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