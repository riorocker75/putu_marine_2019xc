<div class="col-xl-2 col-lg-3 col-md-5 col-sm-12 col-12">
                <div class="product-sidebar-form">
                    <div class="product-sf-title">
                       <h2>Kategori</h2> 
                    </div>

                  <div class="product-sf-body">
                     <?php foreach($category_product as $k){ ?>
                      <div class="product-sf-link">
                          <a href="<?php echo base_url().'index/kategori_produk/'.$k->pcat_id;?>"><?php echo $k->pcat_name?></a>
                      </div>
                      <?php } ?>   
                  </div>
                </div>

                <div class="product-sidebar-form ">
                    <div class="product-sf-title">
                       <h2>Jasa pengiriman</h2> 
                    </div>

                  <div class="product-sf-body">
                   
                      <div class="product-sf-checklist">
                        <label> <input type="checkbox"> Pos Indonesia </label>                         
                        <label> <input type="checkbox"> JNE </label>
                        <label> <input type="checkbox"> J&T </label>
                        <label> <input type="checkbox"> Tiki </label>     
                      </div>
                     
                  </div>
                </div>
                
                <div class="product-sidebar-form d-none d-sm-none d-md-block">
                    <div class="product-sf-title">
                       <h2>Rating</h2> 
                    </div>

                  <div class="product-sf-body">
                   
                      <div class="product-sf-checklist">
                        <label> 
                           <input type="radio">
                           Bintang Satu (100)
                        </label>                         
                        <label> 
                        <input type="radio">
                           Bintang Dua (200)
                        </label>  
                        <label> 
                          <input type="radio">
                            Bintang Tiga (100)
                        </label>  
                        <label> 
                        <input type="radio">
                           Bintang Empat (100)
                        </label>  
                        <label> 
                        <input type="radio">
                           Bintang Lima (100)
                        </label>  
                      </div>
                     
                  </div>
                </div>

</div>