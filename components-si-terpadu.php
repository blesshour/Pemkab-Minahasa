<?php
   //array sementara sebelum menggunakan database
   //sistem informasi terpadu dengan data nama dan icon

   $si = [
      
      [ 'nama' => 'PANGAN',
        'icon' => 'warehouse' ],
      
      [ 'nama' => 'KEAMANAN',
        'icon' => 'exclamation-circle' ],

      [ 'nama' => 'KESEHATAN',
        'icon' => 'medkit' ],

      [ 'nama' => 'AMBULANCE',
        'icon' => 'ambulance' ],

   ]
?>

<?php include 'header.php'; ?>
   
   <section id="siterpadu">
      <div class="container-fluid padding"> <!--start container-->
         <div class="row"> <!--row awal-->
            
            <!--memanggil setiap data di array sistem informasi ($si)-->
            <?php foreach($si as $s): ?>

               <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                  <div class="box fadeInRight">
                     <div class="row in-box">
                        <div class="icon col-3 text-center">
                           <i class="fas fa-<?php echo $s['icon'];?>"></i>
                        </div>
                        <div class="caption col-9">
                           <h4>Sistem Informasi</h5>
                           <h2><?php echo $s['nama'];?></h4>
                        </div>
                     </div>
                  </div>
               </div>
   
            <?php endforeach; ?>

         </div> <!--end row awal-->
      </div> <!--end container-->
   </section>

<?php include 'footer.php'; ?>
