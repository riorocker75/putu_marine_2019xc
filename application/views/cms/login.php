<div class="container-contents">
	<div class="daftar-v2">
			<div class="row">
				<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12 ">
			<form action="<?php echo base_url().'index/user_login'; ?>" method="post">
						<div class="body-dfv2">
								<div class="title-dfv2">
									<h2>Selamat Datang </h2>
									<p class="tx-14 d-lg-block d-md-block d-sm-block d-none" style="color:rgba(0,0,0,.62)">Masuk agar dapat membeli produk hasil laut dari para penjual lokal terbaik</p>	
								</div>
							
								<div class="input-group-dfv2">
								
									<input class="input-dfv2" type="email" name="email"  aria-describedby="emailHelp" placeholder="Alamat Email">
									<i class="fa fa-envelope" aria-hidden="true"></i>
									<small class="form-text text-muted"><span class="text-danger"><?php echo form_error('email'); ?></span></small>
								
								</div>

							

								<div class="input-group-dfv2">
								
								<input class="input-dfv2" type="password" name="password" placeholder="Password">
								<i class="fa fa-lock" aria-hidden="true"></i>
							
								</div>

								<button class="btn-bordered-md-fullwidth bor-primary-md">Masuk&nbsp;&nbsp;<i class="fas fa-sign-in-alt    "></i></button>
							<p class="tx-14 d-flex justify-content-center" style="margin:10px 0;">Belum punya akun? &nbsp;<a href="<?php echo base_url().'index/user_daftar';?>">yuk daftar</a> </p>
						</div>
					</form>
				</div>
			</div>
		<!-- end row -->
	</div>
	<!-- end daftarv2 -->
</div>