<head>
	<script type="text/javascript">
		$(function(){

			$("#navIdeSkripsi").click(function() {
				$('#ideskripsi').load('<?php echo base_url('kaprodi/ideSkripsi');?>');
			});;
			
			$("#navKegiatan").click(function() {
				$('#formKegiatan').load('<?php echo base_url('kaprodi/formKegiatan');?>');
			});

			$("#navSkripsi").click(function() {
				$('#tabelSkripsi').load('<?php echo base_url('Dosen/tabelSkripsi');?>');
			});
			
			$('#profil').load('<?php echo base_url('ControllerGlobal/myProfil');?>');
			
			$("#dosen_button").on('click', function() {
				$("#data_dosen").toggle('fast');
				$("#form_dosen").toggle('slow');
			});
			
			$('#pemberitahuan').load('<?php echo base_url('controllerGlobal/notifikasi') ;?>')
			
			$("#myprofil").on('click', function() {
				$("#profil").toggle('slow');
			});
		});


	</script>
</head>
<body>
	<div class="container-fluid mb-2">
		<div class="row">
			<div class="col-md">
				<div class="row">
					<div class="col-md">
						<div class="nav nav-pills mb-2 flex-column flex-sm-row" id="list-tab" role="tablist">
							<a class="nav-link" href="#" id="myprofil"><i class="fas fa-bars"></i></a>
							
							<a class="nav-item nav-link active" id="navPemberitahuan" data-toggle="list" href="#Notifikasi" role="tab" aria-controls="settings"> <i class="fas fa-envelope"></i> Pemberitahuan</a>

							<?php if ($_SESSION['Kaprodi']) { ?>
								<a class="nav-item nav-link" id="navIdeSkripsi" data-toggle="list" href="#list-home" role="tab" aria-controls="home"> <i class="fas fa-lightbulb"></i> Ide Skripsi </a>
							<?php } ?>
							
							<a class="nav-item nav-link" id="navSkripsi" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"> <i class="fas fa-book"></i>  Skripsi </a>
							
							<?php if ($_SESSION['Kaprodi']) { ?>
								<a class="nav-link nav-item" id="navKegiatan" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings"> <i class="fas fa-calendar-alt"></i> Kegiatan </a>
							<?php } ?>
						</div>
					</div>
					<div class="col-md-auto">
						<span class="text-right"> 
							<?php $status = $_SESSION['Kaprodi'] === 1 ? 'Kaprodi' : $_SESSION['Status'];
							echo $status.' '.$users->row()->Jurusan.' '.$_SESSION['Konsentrasi'] ?>
							<h5>
								<?= $_SESSION['Nama'] ?> 
							</h5>
						</span>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-md-2 mb-3" id="profil" style="display: none">
					</div>
					<div class="col-md">
						<div class="tab-content" id="v-pills-tabContent">
							<div class="tab-content" id="nav-tabContent">
								<div class="tab-pane fade show active" id="Notifikasi" role="tabpanel" aria-labelledby="list-settings-list">
									<div class="scroll">
										<div id="pemberitahuan"></div> 
									</div>
								</div>

								<div class="tab-pane fade show" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
									<div id='ideskripsi'>
									</div>
								</div>

								<div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
									<div id="container">
										<div id="tabelSkripsi"></div>
									</div>
								</div>
								
								<div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-messages-list"> 			
									<div id="formKegiatan">
										
									</div>
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
</body>