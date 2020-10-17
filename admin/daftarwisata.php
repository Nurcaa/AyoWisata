<h2>Daftar Wisata</h2>

<table class="table table-bordered">
	<a href="index.php?halaman=tambahwisata" class="btn btn-primary">Tambah Wisata</a>
	<thead>
		<tr >
			<th style="text-align:center">id wisata</th>
			<th style="text-align:center">nama wisata</th>
			<th style="text-align:center">deskripsi</th>
			<th style="text-align:center">alamat wisata</th>
			<th style="text-align:center">jam buka dan tutup</th>
			<th style="text-align:center">harga tiket</th>
			<th style="text-align:center">alat transportasi</th>
			<th style="text-align:center">rute perjalanan</th>
			<th style="text-align:center">tanggal</th>
			<th style="text-align:center">gambar</th>
			<th style="text-align:center">aksi</th>
		</tr>
	</thead>
	<tbody>
	</tbody>
		<?php $id=1; ?>
		<?php $result=$db->query("SELECT * FROM daftar_wisata"); ?>
		<?php while ($row = $result->fetch_assoc()){ ?> 
			<tr>
			<td><?php echo $id; ?></td>
			<td><?php echo $row['nama_wisata'];?></td>
			<td><?php echo $row['deskripsi'];?></td>
			<td><?php echo $row['alamat_wisata'];?></td>
			<td><?php echo $row['jam_buka_dan_tutup'];?></td>
			<td><?php echo $row['harga_tiket'];?></td>
			<td><?php echo $row['alat_transportasi'];?></td>
			<td><?php echo $row['rute_perjalanan'];?></td>
			<td><?php echo $row['tanggal'];?></td>
			<td>
				<img src="../images/<?php echo $row['gambar'];?>" width="100">
			</td>
			<td>
				<a href="index.php?halaman=detail&id=<?php echo $row['id_wisata']; ?>" class="btn btn-info">Detail</a>
				<a href="index.php?halaman=editwisata&id=<?php echo $row['id_wisata']; ?>" class="btn btn-warning">Edit</a>
				<a href="index.php?halaman=hapuswisata&id=<?php echo $row['id_wisata']; ?>" class="btn btn-danger">Delete</a>	
			</td>
			</tr>
			<?PHP $id++; ?>
			<?php } ?> 


		<!-- $db = new mysqli("localhost", "root", "", "db_tokopakaian"); -->
		<!-- $query = "SELECT *FROM pegawai"; -->
		<!-- $result=$db->query($query); -->
		<!-- if (!$result){     -->
	<!-- die ("Could not query the database: <br />". $db->error);  -->
<!-- }  -->
		<!-- $i=1; -->
		<!-- while ($row = $result->fetch_assoc() ) { -->
			<!-- echo '<tr>'; -->
			<!-- echo '<td>'.$i.'</td>'; -->
			<!-- echo '<td>'.$row->username.'</td>'; -->
			<!-- echo '<td>'.$row->nama_lengkap.'</td>'; -->
			<!-- echo '<td>'.$row->email.'</td>'; -->
			<!-- echo '<td>'.$row->password.'</td>'; -->
			<!-- echo '<td>'.$row->level.'</td>'; -->
			<!-- echo '<td> -->
				<!-- <a href="" class="btn btn-info">Detail</a> -->
				<!-- <a href="" class="btn btn-warning">Edit</a> -->
				<!-- <a href="index.php?halaman=hapuspegawai&id=<?php  $row->$i;?>" class="btn btn-danger">Delete<a> -->
			<!-- </td>'; -->
		<!-- echo '</tr>'; -->
		<!-- $i++; -->
	<!-- } -->
<!-- echo '</table>';  -->
<!-- echo '<br />';  -->
<?php
echo 'Total Rows = '.$result->num_rows; 
$result->free(); 
$db->close(); 
?> 
	</tbody>
</table>