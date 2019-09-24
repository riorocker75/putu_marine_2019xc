
 
  <!-- product index   -->
  <br>	
<section class="product-st-2">
  <div class="container-contents">

    <!-- slider start -->
        <section class="variable slider" id="slick-show" style="margin-bottom:40px;">
      
      <div class="img-slick-slider">
        <img src="<?php echo base_url()?>dah_image/tester_img/tester2.png">
      
      </div>
      <div class="img-slick-slider">
        <img src="<?php echo base_url()?>dah_image/tester_img/tester3.png">
      </div>
    </section>

    <!-- end silder  -->
      <!-- start produk   -->
      <div class="divi-sec">
        Baru kena jaring 
      </div>
      <div class="pst2-lrow">
      <?php	if(count($products) > 0){?>
          <div class="row">
             <?php 	foreach($products as $p){?>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="product-st2-body">
                        <div class="pst2-img">
                        <a href="<?php echo base_url().'produk/'.$p->prod_id.'-'.create_slug($p->prod_name) ?>">
                            <?php if($p->prod_img1!=""){
                                echo"<img alt='Product' src='".base_url().'dah_image/products/'.$p->prod_img1."'>";
                                }else{
                                  echo"<img alt='Product' src='".base_url()."dah_image/default/no_product.jpg'>";
                                }
                                ?>
                          </a>
                        </div>

                        <div class="pst2-title">
                            <a href="<?php echo base_url().'produk/'.$p->prod_id.'-'.create_slug($p->prod_name) ?>">
                            <?php 
                              echo substr(strip_tags($p->prod_name),0,70);
                              ?> 
                            </a> 
                        </div>
                        <div class="pst2-price">
                           <span>Rp <?php echo number_format($p->prod_price) ?></span>
                        </div>
                        <div class="pst2-we">
                             Berat: <a class="tx-11"><?php echo $p->prod_berat?></a>g &nbsp;||&nbsp; Stok: <a class=""><?php echo $p->prod_qty?></a>   
                        </div>

                          <div class="pst2-rating tx-12">
                                <i class="fa fa-star yellow-text text-darken-3"></i>
                                <i class="fa fa-star yellow-text text-darken-3"></i>
                                <i class="fa fa-star yellow-text text-darken-3"></i>
                                <i class="fa fa-star yellow-text text-darken-3"></i>
                                <i class="fa fa-star yellow-text text-darken-3"></i>
                                <span class="tx-11 d-none d-lg-inline-block d-sm-inline-block d-md-inline-block" style="color:rgba(0,0,0,.4)">ulasan(89)</span>
                        </div>        
                       

                        <div class="pst-hidden-det">
                          <div class="psth-logo">
                                <img src="<?php echo base_url()?>dah_image/system/toko.svg" >

                          </div>
                          <div class="psth-nama">
                                  <?php 
                              $nama_author=$this->m_dah->product_author_detail($p->prod_author)->row();
                              echo $nama_author->user_name;      
                            ?> 

                           <p><span class="tx-11" title="Lokasi nelayan"> <i class="fas fa-map-marker"></i> <?php echo $p->prod_lokasi?> </span> &nbsp;|&nbsp; <span class="tx-11" title="waktu kirim"> <i class="fas fa-truck-moving"></i> <?php echo $p->prod_kirim?> </span></p> 
                          </div>
                                
                        </div>

                    </div>
                </div>
             <?php }?>
         
          </div>
          <div class="d-flex justify-content-center">
           <a href="<?php echo base_url().'shop'?>" class="btn-bordered-md bor-primary-md">Lihat semua</a> 

          </div>
      <?php }else{?>
          opps belum ada
      <?php }?>     
      </div>
      <!-- end produk dan row -->

      <!-- disukai start -->
      <div class="divi-sec">
        Paling disukai 
      </div> 

      <!-- end disukai   -->
     
      <!-- suggest jua -->
        <div class="jsuggest">
          <p class="tx-16 tx-bold-600 green-text text-darken-1"> Ingin usaha perikanan anda dikenal masyarakat luas? </p>
         
          <p style="line-height:6px;color:rgba(0,0,0,.5);font-size:14px;">Yuk Gabung menjadi bagian dari kami, </p>
          <p style="line-height:15px;color:rgba(0,0,0,.5);font-size:14px;">Dapatkan penghasilan tambahan dari jualan ikan atau sejenisnya secara online </p>
           <a href="<?php echo base_url().'petani/daftar_petani';?>" class="btn-gabung">Daftar Disini !!</a>
    


        </div>
      <!-- end suggest -->
      
      <!-- guarantie -->
      <div class="guarantie-section">
       <p class="tx-20 tx-bold-700 orange-text text-darken-2 d-flex justify-content-center" >Mengapa Harus Kami ?</p> 
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 ">
                <div class="guarantie-body">
                    <div class="guarantie-img">
                      <img src="<?php echo base_url()?>dah_image/default/deliver.png" alt="" srcset="">
                    </div>
                    <p class="tx-18 tx-bold-700">Pengiriman Cepat</p>
                    <p class="tx-14">Jangan khawatir pembelian anda datangnya telat, pengiriman yang kami tawarkan tepat waktu</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 d-flex justify-content-center">
              <div class="guarantie-body">
                      <div class="guarantie-img">
                        <img src="<?php echo base_url()?>dah_image/default/save-payment.png" alt="" srcset="">
                      </div>
                      <p class="tx-18 tx-bold-700">Transaksi Aman</p>
                      <p class="tx-14">Transaksi pembayaran anda aman bersama kami, kami memiliki tingkat kemanan di perbaharui berkala.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 d-flex justify-content-center">
                <div class="guarantie-body">
                          <div class="guarantie-img">
                            <img src="<?php echo base_url()?>dah_image/default/trust-pay.png" alt="" srcset="">
                          </div>
                          <p class="tx-18 tx-bold-700">Penjual Tepercaya</p>
                          <p class="tx-14">Kami memiliki penjual produk dengan tingkat kepercayaan terbaik, karena kami memeriksa para penjual kami.</p>
                    </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12 d-flex justify-content-center">
              <div class="guarantie-body">
                        <div class="guarantie-img">
                          <img src="<?php echo base_url()?>dah_image/default/help-center.png" alt="" srcset="">
                        </div>
                        <p class="tx-18 tx-bold-700">24/7 Bantuan</p>
                        <p class="tx-14">Apabila anda punya pertanyaan jangan sungkan untuk menanyakan-nya, Kami menyediakan bantuan 24/7</p>
                  </div>
            </div>
        </div>
        </div>
      <!-- end guarantie -->
        
      <!-- testimoni -->

      <!-- end testimoni -->

  </div>
  <!-- end container produk -->
</section>





<!-- ==================================================================================================== -->
<div class="chat-sess-body" id="chat-body">
    <div class="grt-close">
      <a style="cursor:pointer"> <i class="fa fa-times red-text"></i> </a>
    </div>
  
    <div class="grt-cs">
    
      <img src="<?php echo base_url()?>dah_image/system/supp.png" alt="">
      <div class="grt-cs-isi">
       <label id="pesan-hari"></label>,<br> Ada yang bisa kami bantu ?
      
      </div>
    </div>

    <div class="grt-wa" style="text-align:center;margin-top:15px">
      <a href="" class="tx-13 white-text green darken-3" style="border-radius:8px; padding:8px 20px;"> <i class="fab fa-whatsapp tx-18"></i> Chat Kami Di Whatsapp</a>
    </div>
</div>
<div class="chat-sess-flat green darken-2 white-text " id="chat-sess">
 <i class="fas fa-comment-dots tx-30"></i>
</div>

<!-- <script>
$(document).ready(function () {
		$('<audio id="notif_sound"><source src="<?php echo base_url()?>dah_image/notif.mp3" type="audio/mpeg"></audio>').appendTo('body');
		var sound_x = document.getElementById("notif_sound");
		function chat_ses1(){
			$('#chat-sess').fadeIn();
		}
		function playNotif() {
			sound_x.play();
		}
		function bc_sess(){
			$('.chat-sess-body').fadeIn();
			$('#notif_sound')[0].play();
		}
		window.setTimeout(chat_ses1, 2000);
		window.setTimeout(bc_sess, 3000);
		window.setTimeout(playNotif,3000);
	
	});

</script> -->