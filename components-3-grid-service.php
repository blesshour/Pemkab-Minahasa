<?php include 'header.php';?>

<?php 
$services = [
		[
			"logo" => "logo1",
			"icon" => "fas fa-handshake fa-5x",
			"title" => "Layanan Publik",
			"href_collapse" => "#collapse-layananpublik",
			"aria_controls" => "collapse-layananpublik",
			"kolom" => "kolom1"
		],

		[
			"logo" => "logo2",
			"icon" => "fas fa-comments fa-5x",
			"title" => "Suara Anda",
			"href_collapse" => "#collapse-suaraanda",
			"aria_controls" => "collapse-suaraanda",
			"kolom" => "kolom2"
		],

		[
			"logo" => "logo3",
			"icon" => "fas fa-phone-square fa-5x",
			"title" => "Nomor Telepon Penting",
			"href_collapse" => "#collapse-nomorteleponpenting",
			"aria_controls" => "collapse-nomorteleponpenting",
			"kolom" => "kolom3"
		]

];

$collapse_datas = [
		[	"nama_layanan" => "DAFTAR LAYANAN PUBLIC",
			"info" => "Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.",
			"collapse_id" => "collapse-layananpublik"
		],

		[	"nama_layanan" => "SUARA ANDA",
			"info" => "Nihil anim keffiyeh helvetica.",
			"collapse_id" => "collapse-suaraanda"
		],

		[	"nama_layanan" => "NOMOR TELEPON PENTING",
			"info" => "Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.",
			"collapse_id" => "collapse-nomorteleponpenting"
		]

];

?>

    <!-- 3 GRID -->
    <section id="service-3-grid">
	    <div class="row justify-content-center" id="service"> <!-- menambahkan id untuk div yang membungkus semua elemen komponen, untuk menjadi target data-parent-->
	        <div class="service-panel">
	          <div class="row">
	          	<?php foreach ($services as $service) : ?>
	            <div class="col text-center <?php echo $service["kolom"]; ?>">
	              <a data-toggle="collapse" href="<?php echo $service["href_collapse"]; ?>" role="button" aria-expanded="false" aria-controls="<?php echo $service["aria-controls"]; ?>">
	              <span class="<?php echo $service["logo"]; ?>">
	              <i class="<?php echo $service["icon"]; ?>"></i>
	              </span>
	              <h4><?php echo $service["title"]; ?></h4></a>
	            </div>
	         	<?php endforeach; ?>
	          </div>
	          <!-- COLLAPSE -->
			 <!-- menambahkan data-parent-->
		 		<?php foreach ($collapse_datas as $collapse_data) : ?>
	        <div class="collapse text-center out" data-parent="#service" id="<?php echo $collapse_data["collapse_id"]; ?>">
	        	
				<div>
					<h4><?php echo $collapse_data["nama_layanan"]; ?></h4>
					<p><?php echo $collapse_data["info"]; ?></p>
				</div>
			</div>
				<?php endforeach; ?>
			<!-- AKHIR COLLAPSE -->
	        </div>
	    </div>
      </section>
      <!-- AKHIR 3 GRID -->  

<?php include 'footer.php';?>
