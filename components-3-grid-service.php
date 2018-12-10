<?php include 'header.php';?>

    <!-- 3 GRID -->
    <section class="components-3-grid" id="components-3-grid">
	    <div class="row justify-content-center" id="service"> <!-- menambahkan id untuk div yang membungkus semua elemen komponen, untuk menjadi target data-parent-->
	        <div class="col-10 info-panel">
	          <div class="row">
	            <div class="col-lg text-center">
	              <span style="color: Tomato;">
	              <i class="fas fa-handshake fa-5x"></i>
	              </span>
	              <a data-toggle="collapse" href="#collapse-layananpublik" role="button" aria-expanded="false" aria-controls="collapse-layananpublik"><h4>Layanan Publik</h4></a>
	            </div>
	            <div class="col-lg text-center">
	              <span style="color: Dodgerblue;">
	              <i class="fas fa-comments fa-5x"></i>
	              </span>
	              <a data-toggle="collapse" href="#collapse-suaraanda" role="button" aria-expanded="false" aria-controls="collapse-suaraanda"><h4>Suara Anda</h4></a>
	            </div>
	            <div class="col-lg text-center">
	              <span style="color: Tomato;">
	              <i class="fas fa-phone-square fa-5x"></i>
	              </span>
	              <a data-toggle="collapse" href="#collapse-nomorteleponpenting" role="button" aria-expanded="false" aria-controls="collapse-nomorteleponpenting"><h4>Nomor Telepon Penting</h4></a>	              
	            </div>
	          </div>
	        </div>
	       
	        <!-- COLLAPSE -->
		 <!-- menambahkan data-parent-->
	        <div class="collapse text-center out" data-parent="#service" id="collapse-layananpublik">
				<div>
					<h4>Insert DAFTAR LAYANAN PUBLIK</h4>
					<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
				</div>
			</div>
			<div class="collapse text-center out" data-parent="#service" id="collapse-suaraanda">
				<div>
					<h4>Insert DAFTAR SUARA ANDA</h4>
					<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
				</div>
			</div>
			<div class="collapse text-center out" data-parent="#service" id="collapse-nomorteleponpenting">
				<div>
					<h4>Insert DAFTAR NOMOR TELEPON PENTING</h4>
					<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.</p>
				</div>
			</div>
			<!-- AKHIR COLLAPSE -->

	    </div>
      </section>
      <!-- AKHIR 3 GRID -->     \

<?php include 'footer.php';?>
