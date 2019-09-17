<div class="content">

	<!-- Dashboard content -->
	<div class="row">
	<?php show_alert(); ?>
		<div class="col-md-4">	
			<div class="panel panel-flat">
				<div class="panel-heading">				
					<h6 class="panel-title">Edit Category<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>	
				</div>			
				<div class="panel-body">	
					<?php echo validation_errors(); ?>
					<?php foreach($edit as $e){ ?>
					<form action="<?php echo base_url().'admin/category_update' ?>" method="post">				
						<div class="form-group">
							<label>Category Name</label>			
							<input type="hidden" name="id" value="<?php echo $e->category_id ?>">
							<input type="text" class="form-control" placeholder="Category Name .." name="category" value="<?php echo $e->category_name ?>">  
						</div>				
						<div class="form-group">						
							<input type="submit" class="btn btn-primary btn-sm" value="Save">  
						</div>
					</form>				
					<?php } ?>	
				</div>			
			</div>
		</div>

	
		<div class="col-md-8">		
			<div class="panel panel-flat">
				<div class="panel-heading">				
					<h6 class="panel-title">All Categories<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
				</div>			
				<div class="panel-body">									
					<table class="table table-bordered table-hover">
						<thead>
							<tr>							
								<th class="col-md-1">No</th>
								<th>Name</th>
								<th>Url</th>							
								<th class="col-md-3">Option</th>							
							</tr>
						</thead>
						<tbody>
							<?php 
							$no = 1;
							foreach($category as $c){
								?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $c->category_name ?></td>
									<td><?php echo $c->category_url ?></td>		
									<td>
										<div class="btn-group">									
											<a class="btn btn-sm btn-default" href="<?php echo base_url().'admin/category_edit/'.$c->category_id ?>"><span class="glyphicon glyphicon-wrench"></span></a>
											<a class="btn btn-sm btn-default" href=""><span class="glyphicon glyphicon-trash"></span></a>
										</div>
									</td>					
								</tr>						
								<?php 
							}
							?>
						</tbody>
					</table>
				</div>	
			</div>
		</div>


	</div>

	<?php echo $this->load->view('admin/v_footer_admin'); ?>

</div>
			