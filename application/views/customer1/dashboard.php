
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop in style</h1>
                    <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php foreach ($mobil as $mb):?>


                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img style="width: 
                            141px; height: 99px;" class="card-img-top" src="<?php echo base_url().'assets/upload/'.$mb->gambar ?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h4 class="fw-bolder"><?php echo $mb->merk ?></h4>
                                    <!-- Product price-->
                                    <h5><?php echo $mb->no_plat; ?></h5>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-3 pt-0 border-top-0 bg-transparent">
                                <?php 
                                if ($mb->status=="0") {
                                    echo "<span class='btn btn-danger' disable>Telah disewa</span>";
                                }else{
                                    echo anchor('customer/rental/tambah_rental'.$mb->id_mobil,'<button type="submit" class="btn btn-success">Rental</button>');
                                } 


                                ?>
                                <a class="btn btn-warning" href="<?php echo base_url('customer/dashboard/detail_mobil/'.$mb->id_mobil); ?>">Detail</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    
                    
                </div>
            </div>
        </section>
        