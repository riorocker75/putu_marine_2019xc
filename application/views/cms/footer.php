<!-- togle cart -->
<div class="body-cart-togle" id="cart-togle-trigger">
	 <div class="rest-cart"></div>   
	 
	<?php if(count($this->cart->contents()) > 0){ ?>
    <div class="togle-cart" >
         <div class="ts-cart-title">
		 Belanjaan ( <?php echo count($this->cart->contents()); ?> )  <a class="float-right close-tc" id="close-tc"> <i class="fa fa-times tx-18 " ></i></a>
			 
		 </div>                
		 <br>
			<div class="ts-cart-detail ">
			<?php foreach($this->cart->contents() as $item){ ?>
			
			<div class="ts-cart-img">
                                    <!-- start gambar produk -->
                                    <?php 
                                          if($item['options']['gambar']!=""){
                                            echo"<img src='".base_url().'dah_image/products/'.$item['options']['gambar']."' alt='product'>";
                                          }else{
                                              echo "<img src='".base_url()."dah_image/default/no_product.jpg' alt='product'>";
                                          }
                                     ?>
                                     <!-- akhir  dari gambar -->

                                    <div class="ts-cart-nama">
                                      <a href="<?php echo base_url().'produk/'.$item['id'].'-'.create_slug($item['name']) ?>" class="tx-13 black-text"><?php echo substr(strip_tags($item['name']),0,35) ?></a>
                                      <p class="tx-12 blue-text text-accent-3 tx-bold-600" style="margin-top:5px">Rp. <?php echo number_format($item['price']).' ,-' ?></p>
										<p class="yellow-text text-darken-2 tx-10" style="margin-top:-15px"> 
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>

										</p>
										<p class="green-text text-darken-2 tx-12" style="margin-top:-15px;margin-bottom:-15px">Jumlah beli:&nbsp;<?php echo $item['qty'] ?></p>	  
									</div>

                                    <div class="ket-cart-close cart-close-pos">
                                       <a href="<?php echo base_url().'index/removefromnotifcart/'.$item['rowid']; ?>" class=" diki-tooltip" data-toggle="tooltip" data-placement="top" title="Hapus Belanja"> <i class="fa fa-times"></i></a>
                                   </div>        
								  </div> 
								 
					 <?php } ?>	
					</div>

		

		 <div class="ts-cart-footer">
			<div style="padding: 10px 15px 0 10px;max-width:100%;">
					<p class="tx-14 tx-bold-600">Jumlah <b class="float-right tx-bold-700"><?php echo $this->cart->total_items() ?></b></p>
				<p class="tx-16 tx-bold-600">Total<b class="float-right tx-bold-700"><?php echo "Rp.". number_format($this->cart->total()).',-' ?></b></p>
			</div>
		

	
			<div class="col-12" style="padding:0 25px 0 15px;position:relative;">
				<a href="<?php echo base_url().'index/pembayaran' ?>" class="btn-belanja bel-berisi" ><i class="fa fa-credit-card"></i> Langsung Bayar</a>

			</div>
		

		</div>
	</div>                      
	<?php }else{?>	 
	 <!-- belanja dulu -->
	 <div class="togle-cart" >
         <div class="ts-cart-title">
			
			 Opps Kosong  <a class="float-right close-tc" id="close-tc"> <i class="fa fa-times tx-18 " ></i></a>
		 </div>                
		<div class="ts-cart-detail ">
			<div  class="d-flex justify-content-center">
			<img src="<?php echo base_url()?>dah_image/system/kosong-jaring.png" style="width:150px;height:150px;margin-top:100px;">

			</div>
			<br>
			<p class="tx-14" style="text-align:center;color:#c1c2c3">Jaring ikan kamu masih kosong</p>
		</div>	
		<div class="ts-cart-footer">
			<div style="padding: 10px 15px 0 10px;max-width:100%;">
					<p class="tx-14 tx-bold-600">Jumlah <b class="float-right tx-bold-700">0</b></p>
				<p class="tx-16 tx-bold-600">Total<b class="float-right tx-bold-700">Rp. 0</b></p>
			</div>
		

		
			<div class="col-12" style="padding:0 25px 0 15px;position:relative;">
				<a href="<?php echo base_url().'shop'?>" class="btn-belanja bel-kosong" >Belanja Dulu</a>

			</div>
		

		</div>
	</div>   
		
	 <!-- end belanja dulu -->
	<?php }?>	
  </div>



<!-- end togle cart -->

<div class="modal-cart modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<p class="text-center">Produk berhasil di masukkan ke keranjang.</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn btn-default btn-sm" data-dismiss="modal">Lanjut belanja</a>
				<a href="<?php echo base_url().'index/keranjang' ?>" class="btn btn-primary btn-sm">Keranjang / Pembayaran</a>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- footer start -->
<footer class="footer-class blue darken-3 white-text">
  <div class="container">

      <div class="row" >
        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
          <div class="tittle-footer">
              <h2>Tentang </h2>
          </div>

          <div class="body-footer">
            <ul>
              <li>
            	 <a href=""><i class="fas fa-envelope-open-text" style="margin-right:4px;"></i> tes--support@gmail.com</a>
			  </li>
			  
			  <li>
                <a href=""><i class="fa fa-phone" style="margin-right:4px;"></i> 0852-8745-6390 </a>
			  </li>
			  <li>
				 <a href=""><i class="fa fa-address-book" style="margin-right:8px;"></i>Lhokseumawe, Bukit Indah</a> 
			  </li>

			 
			  <br>
			  <li class="d-md-block d-lg-none d-sm-block d-block">
			  <div id="lokasi" style="max-width:100%; height:150px"></div>
			  </li>
			</ul>
			
			
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="tittle-footer">
                <h2>Kategori </h2>
            </div>
  
            <div class="body-footer">
				<div class="cat-footer">
				<ul>
				<?php foreach($category_product as $k){ ?>
					<li>
					<a href="<?php echo base_url().'index/kategori_produk/'.$k->pcat_id;?>"><?php echo $k->pcat_name?></a>
					</li>
					<?php } ?> 
				</ul>
			  </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="tittle-footer">
                <h2>Metode Pembayaran</h2>
            </div>
  
            <div class="body-footer">
              <ul>
                <li>
                  <a href="">Bank Mandiri</a>
  
				</li>
				<li>
                  <a href="">Bank BRI</a>
  
				</li>
				<li>
                  <a href="">Bank BNI</a>
  
                </li>
              </ul>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 col-12">
            <div class="tittle-footer">
                <h2>Jasa Pengiriman </h2>
            </div>
  
            <div class="body-footer">
              <ul>
                <li>
                  <a href="">Pos Indonesia</a>
				</li>
				<li>
                  <a href="">JNE</a>
				</li>
				<li>
                  <a href="">TIKI</a>
				</li>
				<li>
                  <a href="">JN&T</a>
                </li>
              </ul>
            </div>
        </div>
      </div>

     
  </div>

  <div class="copyright-footer blue darken-4 tx-14" style="margin-bottom:5px!important;">
    <div class="d-flex justify-content-center">
      &copy;2019 Dibuat Oleh : <a href="" class="pink-text text-lighten-2">&nbsp;U.Core</a>&nbsp;with <i class="fa fa-heartbeat pink-text" style="margin-top:6px;margin-left:5px;"></i>

    </div>
    </div>
  
</footer>
<!-- end footer -->


<!-- modal login dan daftar -->
<!-- Modal -->
<div class="modal fade modal-login" id="login-pembeli" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<div class="login-v2-title">
			<h2>Masuk</h2>
			<i class="fa fa-times tx-20 close" data-dismiss="modal" aria-label="Close"></i>
		</div>
      <form action="<?php echo base_url().'index/user_login' ?>" method="post">
        <div class="login-v2-body">  
      
				<div class="input-group-dfv2">
					
					<input class="input-dfv2" type="email" name="email"  aria-describedby="emailHelp" placeholder="Alamat Email">
					<i class="fa fa-envelope" aria-hidden="true"></i>
					<small class="form-text text-muted"><span class="text-danger"><?php echo form_error('email'); ?></span></small>

				</div>

				<div class="input-group-dfv2">
					
					<input class="input-dfv2" type="password" name="password" placeholder="Password">
					<i class="fa fa-lock" aria-hidden="true"></i>

				</div>

				<button class="btn-bordered-sm-fullwidth bor-primary-md" type="submit">Masuk&nbsp;&nbsp;<i class="fas fa-sign-in-alt"></i></button>
				
				<div class="login-v2-divi">
					<div class="login-v2-line"></div>
					<p>Masuk ke toko</p>
				</div>

				<a data-toggle="modal" data-target="#login-penjual" id="log-jual" class="btn-bordered-sm-fullwidth bor-danger-md"> Masuk Ke Toko&nbsp;&nbsp;<i class="fas fa-store    "></i> </a>
				<p class="tx-13" style="margin-top:20px;text-align:center;margin-bottom:-15px">Belum punya akun? <a href="<?php echo base_url().'index/user_daftar';?>">yuk daftar</a> </p>
			</div>
      </form>
     
    </div>
  </div>
</div>

<!-- end modal login dan daftar -->



<!-- modal login dan daftar penjual-->
<!-- Modal -->
<div class="modal fade modal-login" id="login-penjual" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	<div class="login-v2-title">
			<h2>Masuk</h2>
			<i class="fa fa-times tx-20 close" data-dismiss="modal" aria-label="Close"></i>
		</div>
      <form action="<?php echo base_url().'petani/login_act' ?>" method="post">
	  <div class="login-v2-body">  
      
	  <div class="input-group-dfv2">
		  
		  <input class="input-dfv2" type="text" name="uname" placeholder="Username">
		  <i class="fa fa-user" aria-hidden="true"></i>
		  <small class="form-text text-muted"><span class="text-danger"><?php echo form_error('uname'); ?></span></small>

	  </div>

	  <div class="input-group-dfv2">
		  
		  <input class="input-dfv2" type="password" name="pass" placeholder="Password">
		  <i class="fa fa-lock" aria-hidden="true"></i>

	  </div>

	  <button class="btn-bordered-sm-fullwidth bor-primary-md" type="submit">Masuk Toko&nbsp;&nbsp;<i class="fas fa-sign-in-alt"></i></button>
	  
	
	  <p class="tx-13" style="margin-top:20px;text-align:center;margin-bottom:-15px">Belum punya toko? <a href="<?php echo base_url().'petani/daftar_petani';?>">yuk daftar</a> </p>
  </div>
      </form>
     
    </div>
  </div>
</div>

<!-- end modal login dan daftar -->

<!-- modal promo -->


<div class="modal fade bd-example-modal-lg " id="promo-mod" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
  
    <div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLongTitle"> <i class="fa fa-bullhorn red-text text-accsent-3" style="margin-right:5px;"></i> Promo User Baru</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
			tes	

		<div class="modal-footer">
        <a id="close-promo" data-dismiss="modal" class="tx-14 " style="padding:8px 20px;border:2px solid #00695c;cursor:pointer;">Jangan Tampilin Promo</a>
      </div>
    </div>
  </div>
</div>
<!-- end modal promo -->

    <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>   
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="<?php echo base_url()?>assets_front/js/core_utu.js"></script>
	<script src="<?php echo base_url()?>assets_front/js/input-spinner.js" ></script>
	<script src="<?php echo base_url()?>assets_front/js/slick.js" ></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.min.js"></script>

    <script>
      $( function() {
        $( "#draggable" ).draggable();
	  } );
	  

	  $(".variable").slick({
      
        infinite: true,
		variableWidth: true,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		centerMode: true,
		autoplay: true,
  		autoplaySpeed: 5000,
	  });
	  
	  $(document).ready(function(){
		$("#log-jual").click(function(){
			$("#login-pembeli").fadeOut();
			$(".modal-backdrop").fadeOut();

		});	

	  });
	  $( document ).ready(function() {
			// load the overlay
	
		
		// if (document.cookie.indexOf('visited=true') == -1){
			
		// 	// var year = 1000*60*60*24;
		// 	// var fminute = 1000*15*60;

		// 	var expires = new Date((new Date()).valueOf() + fminute);
		// 	document.cookie = "visited=true;expires=" + expires.toUTCString();

		// }
	}); 

	// chat
	
	$(document).ready(function () {
		$('.grt-close').click(function () { 
				$('#chat-body').slideUp();
			});
			$('#chat-sess').click(function () { 
				$('.chat-sess-body').fadeIn();	
			});
	});

	$(document).ready(function () {
		var cek_jam= new Date().getHours();
		var pesan;
		var pagi=('Selamat Pagi');
		var siang=('Selamat Siang');
		var sore=('Selamat Sore');
		var malam=('Selamat Malam');

		if(cek_jam >= 0 && cek_jam < 10 ){
			pesan = pagi;
		}else if(cek_jam >= 10 && cek_jam < 15){
			pesan = siang;
		}else if(cek_jam >=15 && cek_jam < 18){
			pesan = sore;
		}else if(cek_jam >=18 && cek_jam < 24){
			pesan = malam;
		}
		$('#pesan-hari').append(pesan);	

	});

	// end chat

	$( document ).ready(function() {
		var day = 1000*60*60*24;
		var expires = new Date((new Date()).valueOf() + day);
		if ($.cookie("sehari_close") == null) {

			// Show the modal, with delay func.
			$('#promo-mod').appendTo("body");
			function show_modal(){
			$('#promo-mod').modal();
			}

		// Set delay func. time in milliseconds
		window.setTimeout(show_modal, 1000);
		}
		$('#close-promo').click(function () { 
			document.cookie = "sehari_close=true;expires=" + expires.toUTCString();
		});


	}); 	
      </script>

<script type="text/javascript">
			$(document).ready(function(){
				$('.diki-tooltip').tooltip();

					$('body').on("click",".btn-addtocart",function(){
						var id = $(this).attr('id');
						var data = "id="+id;
						$.ajax({
							type: 'POST',
							url: "<?php echo base_url(); ?>" + "index/addtocart",
							data: data,
							success: function(){
								location.reload();
							},
							
							error: function() {
								alert("Gagal menambahkan produk ke keranjang !");
							}
						});
					});

					$('body').on("click",".btn-bayarlangsung",function(){
						var id = $(this).attr('id');
						var jumlah_produk =document.getElementById('jumlah_produk').value;
						var stock_hasil = document.getElementById('stock_hasil').value;
					
						$.ajax({
							type: 'POST',
							url: "<?php echo base_url(); ?>" + "index/addtocart2",
							data: "id="+id +'&jumlah_produk='+jumlah_produk +'&stock_hasil='+stock_hasil,
							success: function(){
								window.location.replace("<?php echo base_url().'index/pembayaran'?>");
							},
							error: function() {
								alert("Gagal menuju laman pembayaran mohon diulangi lagi !");
							}
						});
					});		



	$('body').on("change",".form-provinsi",function(){
				var provinsi = $(this).val();
				var data = "provinsi="+provinsi;
				$.ajax({
					type: 'POST',
					url: "<?php echo base_url(); ?>" + "index/get_kota/",
					data: data,
					success: function(html){
						$('.form-kota').html(html);
					},
					beforeSend: function(){
						$('.form-kota').after("<center><span class='ajax-ongir heading-text text-center'><i class='icon-spinner2 spinner position-left'></i></span></center>");
						$('.form-kota').hide();
					},
					complete: function(){
						$('.ajax-ongir').hide();
						$('.form-kota').show();
					},
					error: function() {
						alert("Gagal mendapatkan data ongkir!");
					}
				});
			});

			$('body').on("change",".form-kota",function(){
				var kota = $(this).val();
				var id_prod = $('.id_prod').val();
				var kurir = $('.form-kurir').val();
				var data = "kota="+kota+"&id_prod="+id_prod;
				$.ajax({
					type: 'POST',
					url: "<?php echo base_url(); ?>" + "index/get_cost/",
					data: data,
					success: function(html){
						$('.tempat-cost').html(html);
					},
					beforeSend: function(){
						$('.tempat-cost').before("<center><span class='ajax-cost heading-text text-center'><i class='icon-spinner2 spinner position-left'></i></span></center>");
					},
					complete: function(){
						$('.ajax-cost').hide();
					},
					error: function() {
						alert("Gagal mendapatkan data ongkir!");
					}
				});
			});



			// payment ship
			$('body').on("change",".form-provinsi2",function(){
				var provinsi = $(this).val();
				var data = "provinsi="+provinsi;
				$.ajax({
					type: 'POST',
					url: "<?php echo base_url(); ?>" + "index/get_kota2/",
					data: data,
					success: function(html){
						$('.form-kota2').html(html);
					},
					beforeSend: function(){
						$('.form-kota2').after("<center><span class='ajax-ongir heading-text text-center'><i class='icon-spinner2 spinner position-left'></i></span></center>");
						$('.form-kota2').hide();
					},
					complete: function(){
						$('.ajax-ongir').hide();
						$('.form-kota2').show();
					},
					error: function() {
						alert("Gagal mendapatkan data ongkir!");
					}
				});
			});

			$('body').on("change",".form-kota2",function(){
				var kota = $(this).val();
				var data = "kota="+kota;
				$.ajax({
					type: 'POST',
					url: "<?php echo base_url(); ?>" + "index/get_cost2/",
					data: data,
					success: function(html){
						$('.tempat-cost').html(html);
					},
					beforeSend: function(){
						$('.tempat-cost').before("<center><span class='ajax-cost heading-text text-center'><i class='icon-spinner2 spinner position-left'></i></span></center>");
					},
					complete: function(){
						$('.ajax-cost').hide();
					},
					error: function() {
						alert("Gagal mendapatkan data ongkir!");
					}
				});
			});

			$('body').on("change",".pilih-kurir",function(){
						var cost = $(this).attr('id');
						var total = $('.pembayaran-total').attr('id');
						var x = parseInt(total)+parseInt(cost);
						$('.text-ongkos-kirim').html("Rp. "+cost+" ,-");
						$('.text-pembayaran').html("Rp. "+ x +" ,-");
						$('.pembayaran').val(x);
						$('.ongkir').val(cost);
					});
			// akhir pembayaran
			$('body').on("click",".btn-hide-alert",function(){
						$(this).parent().hide();
					});

					$(".modal-cart").modal("hide").on("hidden.bs.modal", function () {
						location.reload();
					});

			$('input[type="submit"]').on("click",function(){
					$(this).addClass('disabled');
				});



				function readCookie(name) {
							var nameEQ = name + "=";
							var ca = document.cookie.split(';');
							for (var i = 0; i < ca.length; i++) {
								var c = ca[i];
								while (c.charAt(0) == ' ') c = c.substring(1, c.length);
								if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
							}
							return null;
						}
	// akhir public
		});
				</script>
	<script>
            $(".input-spinner").inputSpinner()
    </script>  
	
	<!-- <script>
      function initMap() {
	  var map;
	  var lok={lat: 5.2030553, lng: 97.0612123};
        map = new google.maps.Map(document.getElementById('lokasi'), {
          center: lok,
          zoom: 14
        });

		var marker = new google.maps.Marker({
          position: lok,
          map: map,
          title: 'Lokasi Kami'
        });
	
      }
    </script>	 -->

 	<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVbyFOcEs46t1t4srUIKVZIfZpSXsbiN8&callback=initMap" async defer></script> -->

	



  </body>
</html>