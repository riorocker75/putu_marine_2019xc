<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php echo $this->m_dah->get_option('blog_name'); ?> | <?php echo strip_tags($this->m_dah->get_option('blog_description')); ?></title>
	<link rel="icon" type="image/png" href="<?php echo base_url().'dah_image/system/logoutu1.png' ?>">
	<!-- Global stylesheets -->
  <!-- core CSS -->

  	<link rel="stylesheet" href="<?php echo base_url() ?>assets_front/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_front/dist/css/core_utu.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_front/dist/css/custom_utu.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_front/dist/css/custom_utu_m.css">

    <link rel="stylesheet" href="<?php echo base_url() ?>assets_front/dist/css/slick.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_front/dist/css/slick-theme.css">

    <!-- font -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_front/font-aw/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets_front/material-icon/material-icon.css">


	<!-- Core JS files -->
  <script src="<?php echo base_url()?>assets_front/js/jquery.min.js" ></script>

	<!-- Theme JS files -->


	 <!-- Histats.com  START  (aync)-->

<!-- Histats.com  END  -->
</head>

  <body>

<!-- nsearchnav -->
<div class="nav-atas-marine d-lg-block d-md-block d-sm-none d-none">
    <div class="container-header">
      <div class="row">
      <div class="col-4">
          <div class="float-left">
              <ul style="position:absolute;display:inline-block!important;left:0;">
              <li >
                  <a href="">Ikuti Kami </a>
                    <ul style="position:relative;left:20px;top:-20px;margin:0!important;opacity:0.7">
                    <li >
                    <a href=""><i class="fab fa-facebook blue-text text-darken-3"></i></a>  
                    </li>
                    <li style="margin-left:-8px;">
                    <a href=""><i class="fab fa-line green-text text-accent-4"></i></a>  
                    </li>
                    <li style="margin-left:-8px;">
                    <a href=""><i class="fab fa-whatsapp green-text text-darken-2"></i></a>  
                    </li>
                    <li style="margin-left:-8px;">
                    <a href=""><i class="fab fa-telegram blue-text text-accent-4"></i></a>  
                    </li>

                  </ul>
              </li>
               
              </ul>

              </div>
          </div>
        <div class="col-8">
          
          <div class="float-right">
              <ul>
              <li>
                <a href="<?php echo base_url().'petani/daftar_petani'?>">Mulai Berjualan</a>
                </li>
                <li>
                <a href="">Tentang</a>
                </li>
                
                <li>
                <a href="">Kontak </a>
                </li>
                <li>
                <a href="">Pembayaran</a>
                </li>
                <li>
                <a href="">Cek Resi</a>
                </li>
              </ul>

              </div>
          </div>

         

          </div>
    </div>
</div>
<div class="nav-marine sticky-top">
    <div class="container-header">
          <div class="row">
            <div class="col-lg-2 col-md-2 d-sm-none d-none d-lg-block d-md-block">
              <div class="cari-marine-img">
                <a href="<?php echo base_url()?>">
                  <img src="<?php echo base_url()?>dah_image/system/logoutu1.png">
                  </a>
              </div>
            </div>

            <div class="col-lg-6 col-md-6 d-lg-inline-block d-md-inline-block d-sm-none d-none">
            <form action="<?php echo base_url().'search'?>" method="post" class="search-area " enctype="multipart/form-data">
              <div class="cari-marine">
                 <i class="fa fa-search"></i>
                <input class="input-cari-m" type="text" placeholder="cari hasil nelayan" name="item">
                <input type="submit" name="submit" class="cari-btn" value="Cari"/>
                </form>
              </div>
            </div>
              <div class="col-sm-2 col-4 d-md-none d-lg-none">
                 <div class="float-left">   
                     <a id="togle-barku" class="tx-20 togle-barku" style="margin-top:12px;"><i class="fa fa-bars"></i></a> 
                  </div>
              </div>

              <div class="col-sm-6 d-sm-inline-block d-none d-md-none d-lg-none">
                 <div class="d-flex justify-content-center">   
                            <a href="<?php echo base_url()?>" class="tx-18">
                                Logo disni
                              </a>
                  </div>
              </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-8">
               <div class="nav-marine-log float-right">
                    <ul>
                      <li class="rt-shop-cart d-sm-inline-block d-inline-block d-md-none d-lg-none">
                       <a id="tampil-search"><i class="fa fa-search" aria-hidden="true"></i></a> 
                         
                      </li>
                      <!-- start shop -->
                        <li class="rt-shop-cart hc-cart">
                        <?php if(count($this->cart->contents()) > 0){ ?>
                          <!-- kalau cart udah banyak -->
                          <div class="cart-view-2">
                             <a class="shop-carted" id="cv-lihat"><i class="fa fa-cart-arrow-down" style="color:rgba(0,0,0,.6);"></i> </a>
                             <span class="jlh-cart"><?php echo count($this->cart->contents()); ?></span>

                             

                          </div>
                          <!-- end udah banyak -->
                        <?php }else{?>
                          <li class="rt-shop-cart hc-cart">
                          <!-- kalau cart udah banyak -->
                          <div class="cart-view-2">
                             <a class="shop-carted" id="cv-lihat"><i class="fa fa-cart-arrow-down" style="color:rgba(0,0,0,.6);"></i> </a>
                            
                          </li>   
                        <?php } ?> 
                        </li>

                        <!-- end shop cart  -->

                        <?php if($this->session->userdata('user_status') != "login"){?>
                          <!-- tidak login -->
                        <li class="d-lg-inline-block d-md-none d-sm-none d-none">
                          <a class="btn-bordered-sm tx-14" style="border:none" href="<?php echo base_url().'index/user_daftar'?>">Daftar </a>
                          <a class="btn-bordered-sm tx-14" data-toggle="modal" data-target="#login-pembeli">Masuk </a>

                        </li>

                        <li class="rt-shop-cart d-lg-none">
                          <a data-toggle="modal" data-target="#login-pembeli" class="shop-carted"> <i class="fas fa-sign-in-alt"></i> </a>
                        </li>
                        <!-- end tidak login -->
                        <?php }else{?>
                          <!-- start login -->
                          <li class="rt-shop-cart">
                          <a class="shop-carted" style="position:relative;top:-2px;"><i class="fa fa-user" style="color:rgba(0,0,0,.6);"></i> </a>
                        </li>
                          <!-- end login -->
                        <?php }?> 
                    </ul>

               </div>
            </div>
           
      


      <!-- end row  -->
      </div>

       
    <!-- end container header -->
    </div>
</div>
<!-- end searchnav -->
  <!-- toogle search -->
                
  <div class="body-search sticky-top">
  <div class="container-header">     
            <form action="<?php echo base_url().'search'?>" method="post" class="search-area " enctype="multipart/form-data">
                <div class="cari-marine">
                  <i class="fa fa-search"></i>
                  <input class="input-cari-m" type="text" placeholder="cari hasil nelayan" name="item">
                  <input type="submit" name="submit" class="cari-btn" value="Cari"/>
                  </form>
                </div>
            </div> 
                    </div>        
  <!-- edn toggle search -->

  <!-- toggle sidenav -->
  <div class="body-sidenav" id="sideku-trigger">
    <div class="togle-sidenav" >
       <div class="ts-header blue-text text-accent-2" id="ts-back">
        <i class="fa fa-arrow-left tx-14" style="margin-right:10px"></i> Kembali
       </div>                   

        <ul>
             <li>
               
               <a href="">Link 1</a>
             </li>    
             
             <li>
               <a href="">Link 2</a>
             </li>  

             <li>
               <a href="">Link 3</a>
             </li>  

        </ul>

      </div>                      
     <div class="rest-sidenav"></div>   
      
  </div>
  <!-- end toogle sidenav -->

    <!-- navbar -->
   
    <!-- end navbar -->
