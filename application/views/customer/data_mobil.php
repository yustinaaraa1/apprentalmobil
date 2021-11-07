<div class="row"></div>
    








<?php echo $this->session->flashdata('pesan') ?>

<section class="blog-posts grid-system">
      <div class="container">
        <div class="all-blog-posts">
          <div class="row" style="margin-top: 98px;">
            
            <?php foreach ($mobil as $mb): ?>
            <div class="col-md-4 col-sm-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img style="width: 195px;" src="<?php echo base_url().'assets/upload/'.$mb->gambar;?>">
                </div>
                <div class="down-content">
                  <strong><?php echo $mb->merk; ?></strong>
                  <a href="offers.html"><h4>Rp.<?php echo number_format($mb->harga,0,',','.') ?>/hari</h4></a>

                        <ul class="pagination">
                              <li class="page-item page-link mr-1 row">
                                <?php   if ($mb->ac=="1") {
                                  echo "<i class='fa fa-check-square'></i>";
                                }else{
                                  echo "<i class='fa fa-times-circle text-danger'></i>";
                                }?>AC  
                              </li>
                              <li class="page-item page-link row">
                                <?php   if ($mb->supir=="1") {
                                  echo "<i class='fa fa-check-square'></i>";
                                }else{
                                  echo "<i class='fa fa-times-circle text-danger'></i>";
                                }?>Supir  
                              </li>
                              <li class="page-item page-link row">
                                <?php   if ($mb->mp3_player=="1") {
                                  echo "<i class='fa fa-check-square'></i>";
                                }else{
                                  echo "<i class='fa fa-times-circle text-danger'></i>";
                                }?>MP3  
                              </li>
                              <li class="page-item page-link row">
                                <?php   if ($mb->central_lock=="1") {
                                  echo "<i class='fa fa-check-square'></i>";
                                }else{
                                  echo "<i class='fa fa-times-circle text-danger'></i>";
                                }?>Lock  
                              </li>
                              
                                
                              
                        </ul>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-bullseye"></i></li>
                          <div class="row">
                            <div class="row">
                          <li>
                            <?php if ($mb->status=="1") {
                              if ($this->session->userdata('nama')==true) {
                                echo anchor('customer/rental/tambah_rental/'.$mb->id_mobil,
                              '<h5><span class="badge badge-secondary">Rental</span></h5>');
                              }else{?>
                                <a  href="<?php echo base_url('auth/login'); ?>"><h5><span class="badge badge-secondary">Rental</span></h5></a>
                             <?php }?>
                           <?php }else{
                              echo '<h5><span class="rent-btn btn-secondary ml-3">tidak Tersedia</span></h5>';
                            }

                             ?>
                          </li>
                          <li><a href="<?php echo base_url('customer/data_mobil/detail_mobil/').$mb->id_mobil; ?>"><h5><span class="badge badge-secondary ml-3">Detail</span></h5></a></li>
                          </div>
                          </div>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          <?php endforeach; ?>
          
          </div>
        </div>
      </div>
    </section>

    