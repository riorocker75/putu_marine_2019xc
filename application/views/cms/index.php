
  <!-- product index   -->
  <br>	
<section class="product-st-2">
  <div class="container-contents">
      <!-- start produk   -->
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
                        <div class="pst2-rating tx-12">
                                <i class="fa fa-star yellow-text text-darken-3"></i>
                                <i class="fa fa-star yellow-text text-darken-3"></i>
                                <i class="fa fa-star yellow-text text-darken-3"></i>
                                <i class="fa fa-star yellow-text text-darken-3"></i>
                                <i class="fa fa-star yellow-text text-darken-3"></i>
                                <span class="tx-11 d-none d-lg-inline-block d-sm-inline-block d-md-inline-block">ulasan(89)</span>
                        </div>

                        <div class="pst2-price">
                           <span>Rp <?php echo number_format($p->prod_price) ?></span>
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
      <?php }else{?>
          opps belum ada
      <?php }?>     
      </div>
      <!-- end produk dan row -->

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