<div class="container-contents">
	<div class="daftar-v2">
			<div class="row">
				<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12 ">
				<form action="<?php echo base_url().'index/user_daftar'; ?>" method="post">
						<div class="body-dfv2">
								<div class="title-dfv2">
									<h2>Buat Akun </h2>	
								</div>
							
								<div class="input-group-dfv2">
								
									<input class="input-dfv2" type="email" name="email"  aria-describedby="emailHelp" placeholder="Alamat Email">
									<i class="fa fa-envelope" aria-hidden="true"></i>
									<small class="form-text text-muted"><span class="text-danger"><?php echo form_error('email'); ?></span></small>
								
								</div>

								<div class="input-group-dfv2">
								
									<input class="input-dfv2" type="text" name="nama" placeholder="Nama Lengkap">
									<i class="fa fa-id-card" aria-hidden="true"></i>
								
								</div>

								<div class="input-group-dfv2">
								
								<input class="input-dfv2" type="password" name="password" placeholder="Password">
								<i class="fa fa-lock" aria-hidden="true"></i>
							
								</div>

								<button class="btn-bordered-md-fullwidth bor-primary-md">DAFTAR&nbsp;&nbsp;<i class="fa fa-paper-plane"></i></button>
						</div>
					</form>
				</div>
			</div>
		<!-- end row -->
	</div>
	<!-- end daftarv2 -->
</div>