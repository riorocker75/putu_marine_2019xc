<!-- breadrumb section -->
<section class="breadcrumbs">
    <div class="container-contents">
        <div class="breadcrumbs-line">
            <ul>
                <li><a href="<?php echo base_url()?>">Home</a> </li>
               <li><a href="">Detail Produk</a></li>
               <?php foreach($product as $ps){ ?>
               <li><a href=""><?php echo $ps->prod_name?></a></li>
               <?php } ?>

               
            </ul>
        </div>
    </div>

</section>

<!-- end breadcrumb -->
<?php
			if(count($product) > 0){
				foreach($product as $p){
	?>
<!-- product-single -->

<section class="product-single" ng-app="">
    <div class="container-contents">

        <!-- start product info -->
        <div class="product-single-info">
         <div class="row">
                <!-- body info -->
                <div class="col-xl-10 col-lg-9 col-md-12 col-sm-12 col-12">
                   <!-- ket-detail-single  -->
                    <div class="detail-ps-awal">
                        <div class="row">
                            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
                                <div class="detail-ps-img">
                               
                                     <?php
                                          if($p->prod_img1 != ""){
                                          echo "<img alt='".$p->prod_name."' src='".base_url().'dah_image/products/'.$p->prod_img1."' > ";
                                          }else{

                                          echo "<img alt='".$p->prod_name."' src='".base_url()."dah_image/default/no_product.jpg'>";
                                          }
                                      ?>
                                </div>
                            </div>
                            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
                              <div class="detail-ps-isi">
                                  <div class="detail-psi-judul">
                                      <h2>
                                          <?php echo $p->prod_name ?>
                                      </h2>
                                  </div>

                                  <div class="detail-psi-rating tx-14">
                                      <i class="fa fa-star yellow-text text-darken-2"></i>
                                      <i class="fa fa-star yellow-text text-darken-2"></i>
                                      <i class="fa fa-star yellow-text text-darken-2"></i>
                                      <i class="fa fa-star yellow-text text-darken-2"></i>
                                      <i class="fa fa-star yellow-text text-darken-2"></i>
                                     <span style="opacity:0.7" class="tx-13">| (30 Ulasan) |</span>
                                     <span style="opacity:0.7" class="tx-13">50 Terjual </span>     
                                  </div>

                                 <div class="detail-psi-price blue-text text-accent-3 tx-24 tx-bold-600">
                                    Rp <?php echo number_format($p->prod_price)?>
                                 </div> 
                                 
                                 <span>Stok: <b><?php echo $p->prod_qty ?> </b></span>
                                <p > <span>Berat : <b> <?php echo $p->prod_berat ?> </b>gram</span></p>
                                <p ng-init="harga='<?php echo $p->prod_price?>'" ></p>        

                                 <p class="tx-12" style="opacity:0.7;margin-top:-5px">Masukan jumlah yang ingin di beli</p>         
                                <div class="col-xl-4 col-lg-5 col-md-3 col-sm-3" style="margin-top:-10px;margin-left:-15px;">
                                  <input class="input-spinner" type="number" min="1" name="jumlah_produk" value="1" max="90" ng-model="stock" />
                                  <input type="hidden" name="rowid[]" value="<?php echo $item['rowid'] ?>">

                                  <input type="hidden" id="jumlah_produk" value="{{ (stock  * 1) || (1)}}">
                                    <input type="hidden" id="stock_hasil" value="{{ (harga * stock) || (harga * 1) }}">

                                    <input type="hidden" name="stock_hasil" value="{{ (harga * stock) || (harga * 1) }}">
                                </div>

                                <div class="detail-psi-ikon d-none d-sm-none d-lg-inline-block d-md-inline-block">
                                    <div class="row ">
                                    <div class="dpsi-bagan">
                                        <i class="fa fa-eye tx-20"></i>
                                        <div class="dpsi-bagan-ax">
                                           <span class="tx-12">Dilihat</span> 
                                            <p style="margin-top:-5px;">5000</p>
                                        </div>
                                    </div>

                                    <div class="dpsi-bagan">
                                    <i class="fas fa-truck-moving tx-20"></i> 
                                        <div class="dpsi-bagan-ax">
                                           <span class="tx-12">Terkirim</span> 
                                            <p style="margin-top:-5px;">50</p>
                                        </div>
                                    </div>

                                    <div class="dpsi-bagan">
                                    <i class="fas fa-money tx-20"></i> 
                                        <div class="dpsi-bagan-ax">
                                           <span class="tx-12">Terjual</span> 
                                            <p style="margin-top:-5px;"><?php if($p->prod_terjual != ""){echo $p->prod_terjual;}else{echo "0";}?></p>
                                        </div>
                                    </div>

                                    <div class="dpsi-bagan">
                                    <i class="fas fa-fish tx-20"></i> 
                                        <div class="dpsi-bagan-ax">
                                           <span class="tx-12">Status</span> 
                                           <p style="margin-top:-5px;">Segar</p>
                                           
                                        </div>
                                    </div>

                                    </div>
                                </div>
                                 <!-- akhir dari dpsi ikon -->
                              </div>            
                            </div>
                        </div>

                    </div>
                   <!-- end ket-detail -->

                   <!-- info detail -->
                     <!-- cek ongkir -->
                   
                     <!-- end cek ongkir -->
                   <div class="info-product-detail">
                      <div class="info-pd-title">
                          Detail Produk
                      </div>
                      <div class="info-pd-body">
                          <?php echo $p->prod_desc?>
                      </div>
                       
                      <div class="info-pd-title">
                         Ulasan Produk
                      </div>
                   </div>  
                   
                   <div class="info-product-detail">
                      <div class="info-pd-title" style="border-bottom:4px solid #4caf50">
                          Direkomendasikan Beli
                      </div>
                      <div class="info-pd-body">
                          
                      </div>
                       
                     
                   </div>
                   
                   <!-- end info detail -->
                </div>
                <!-- end body info -->

                <!-- side info -->
                <div class="col-xl-2 col-lg-3 d-md-none d-sm-none d-none d-xl-block d-lg-block">
                   <div class="sidebar-psi">
                   <?php 
                          $nama_author=$this->m_dah->product_author_detail($p->prod_author)->row();
                           
                    ?> 

                      <div class="sidebar-psi-title">
                          Penjual
                      </div>
                      <img src="<?php echo base_url()?>dah_image/system/toko.svg" style="width:40px;height:40px;border-radius:50%;margin-left:8px;">
                        <span style="margin-left:5px;position:relative;top:-8px" class="tx-13">
                                <?php echo $nama_author->user_name;  ?>
                        </span>      
                        <span class="tx-10 yellow-text text-darken-2" style="margin-left:-5px;position:relative;top:5px;left:-48px">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>

                        </span> 
                        <p style="margin-left:15px;margin-top:8px;opacity:0.7" class="tx-12" title="Lokasi Toko" ><i class="fas fa-map-marker" style="margin-right:5px;"></i>&nbsp;<?php echo $p->prod_lokasi?> </p>
                        <p style="margin-left:15px;margin-top:-15px;opacity:0.7" class="tx-12" title="Waktu Kirim" ><i class="fas fa-box"  style="margin-right:3px;"></i>&nbsp;<?php echo $p->prod_kirim?> </p>

                      <div style="margin-bottom:-20px;opacity:0.3">.</div>    
                                          
                   </div>

                   <div class="sidebar-psi">
             
                      <div class="sidebar-psi-title">
                        Jasa Pengirim
                      </div>
                       <p>
                           <img src="<?php echo base_url()?>dah_image/system/logo-jne.png" style="width:70px;height:24px; margin-left:8px;">
                       </p>  
                       <p>
                           <img src="<?php echo base_url()?>dah_image/system/logo-pos.png" style="width:70px;height:32px; margin-left:8px;">
                       </p> 
                       <p>
                           <img src="<?php echo base_url()?>dah_image/system/logo-tiki.png" style="width:70px;height:24px; margin-left:8px;">
                       </p>                  

                      <div style="margin-bottom:-16px;opacity:0.3">.</div>    
                                          
                   </div>
                </div>
                <!-- end side info -->
            </div>
            <!-- edn row  -->
        </div>           
        <!-- end product info -->
 
  
  <!-- product suggest -->
       
  <!-- end product suggest -->


    </div>
<!-- end container product -->



<!-- d-none d-sm-block d-md-none -->
    <div class="sticky-beli">
        <div class="container-contents">
            <div class="row">

                <div class="col-lg-8 col-md-6 col-sm-4 col-12 ">
                    <div class="harga-sticky-beli float-lg-right float-sm-left d-none  d-sm-block d-md-block">
                        <p>Total:</p>  
                    <span>Rp&nbsp;{{ (harga * stock) || (harga * 1) | number}},-</span>
                    </div>

                    <div class="harga-sticky-beli float-lg-left d-sm-none d-none d-md-block">
                    <div class="sticky-ss">
                        <img src="<?php echo base_url()?>dah_image/system/toko.svg">                    
                                            
                        <div class="sticky-ss-nt blue-text text-accent-4">
                            <?php echo $nama_author->user_name; ?>  
                            <p class="yellow-text text-darken-3 tx-10" style="margin-top:5px;"> 
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star"></i>   
                            <i class="fa fa-star"></i> 
                            <i class="fa fa-star"></i> 
                            </p>             
                        </div>                   
                    </div>
                    
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-8 col-12">
                <div class="row" style="margin:0 5px;">
                    <!-- <div class="col-2 d-sm-none d-md-none d-lg-none d-block">
                    
                    <a id="<?php echo $p->prod_id; ?>" data-toggle="tooltip" title="Masukkan ke keranjang !" data-placement="bottom" class="diki-tooltip btn-addtocart btn-bordered-sm-fullwidth bor-success"> <i class="fa fa-cart-arrow-down"></i> </a>

                    </div>     -->
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <a id="<?php echo $p->prod_id; ?>" class="btn-bordered-md-fullwidth bor-laut-md white-text btn-bayarlangsung" style="cursor:pointer">Beli Sekarang</a>

                    </div>
                                                
                </div>

            
            

                </div>
            </div>
        </div>
       </div>
</section>

<?php }?>
    <?php }else{?> Product Belum ada <?php }?>

<!-- end product-single -->