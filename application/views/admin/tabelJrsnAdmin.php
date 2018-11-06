<head>
	<script type="text/javascript" src="<?= base_url('assets/js/myscript.js');?>">
	</script>
</head>
<?php if (!$jurusan) {?>
	<div class='container-fluid'>
		<div class="row align-items-center">
			<div class="col-md">
				<h2>Selamat Datang Admin</h2>
				Sistem Skripsi Online Berbasis Web Disini Merupakan Data Jurusan dan Konsentrasi Silahkan Masukan Data Jurusan Melalui form Jurusan Di Atas. 
			</div>
			<div class="col-md-3">
				<img src="<?= base_url('assets/images/fix/welcome.png');?>">
			</div>
		</div>
	</div>
<?php } else { ?>
	<div id="container" class="row">
		<div class="col-md table-responsive">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">ID Fakultas</th>
						<th scope="col">Fakultas</th>
						<th><i class="fas fa-spinner fa-pulse loading" style="display: none"> </i> 
						</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($jurusan->result() as $j) {
						?>
						<tr class="tabel<?= $j->IDJurusan?>">
							<th scope="row"> <?= $j->IDJurusan;?></th>
							<td> <a id="jurusan" class="btn_view" href="<?= base_url('Admin/tabelKonsentrasiAdmin/').$j->IDJurusan;?>"> <?= $j->Jurusan?> </a> </td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<div class="col-md-8 SHjurusan" style="display: none">
			<div id="SHjurusan">

			</div>
		</div>
	</div>
	<?php } ?>