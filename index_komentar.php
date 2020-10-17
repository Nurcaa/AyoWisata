
<body>
	<div class="container mb-3">
		<h2 align="center" style="margin: 60px 10px 10px 10px;">Contoh Komentar PHP Ajax</h2><hr>
		<form method="POST" id="form_komen">
			<div class="form-group">
				<input type="text" name="pengirim" id="pengirim" class="form-control" placeholder="Masukkan Nama" />
			</div>
			<div class="form-group">
				<textarea name="isi_komentar" id="isi_komentar" class="form-control" placeholder="Tulis Komentar" rows="5"></textarea>
			</div>
			<div class="form-group">
				<input type="hidden" name="id_komentar" id="id_komentar" value="0" />
				<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
			</div>
		</form>
		<hr>
		<h4 class="mb-3">Komentar :</h4>
		<span id="message"></span>
	   
	   	<div id="display_comment"></div>
	</div>

	<div class="navbar bg-dark">
		<div style="color: #fff;">© <?php echo date('Y'); ?> Copyright:
		    <a href="https://dewankomputer.com/"> Dewan Komputer</a>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#form_komen').on('submit', function(event){
				event.preventDefault();
				var form_data = $(this).serialize();
				$.ajax({
					url:"tambah_komentar.php",
					method:"POST",
					data:form_data,
					success:function(data)
					{
						$('#form_komen')[0].reset();
						$('#komentar_id').val('0');
						load_comment();
					}
				})
			});

			load_comment();

			function load_comment()
			{
				$.ajax({
					url:"ambil_komentar.php",
					method:"POST",
					success:function(data)
					{
						$('#display_comment').html(data);
					}
				})
			}

			$(document).on('click', '.reply', function(){
				var id_komentar = $(this).attr("id");
				$('#komentar_id').val(komentar_id);
				$('#pengirim').focus();
			});
		});
	</script>
</body>
</html>