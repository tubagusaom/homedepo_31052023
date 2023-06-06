<style media="screen">
  .btn-lainnya {
    background-color: #fff;
    width: 100%;
    padding: 10px;
    border: 1px solid red ;
    text-align: center;
    font-weight: 600;
  }

  .btn-lainnya:hover {
    background-color: #db0c13;
    color: #fff;
  }

  .banners-container {
    padding: 0px!important;
    background-color: transparent!important;
  }

  .owl-theme .owl-dots .owl-dot span {
      height: 5px;
      width: 20px;
      margin: -2px;
  }
</style>

<?php
// $this->load->view('templates/bootstraps/popup');
?>

<div role="main" class="main">

    <div class="container container-pilihan">
        <div class="row">
          <div class="col-md-12 normal">

            <div class="tabs home-products-tab">

              <!-- <ul class="nav nav-links">
                <li class="active">
                  <a href="#KategoriPilihan" data-toggle="tab">kategori Pilihan</a>
                </li>
              </ul> -->

              <div class="owl-carousel owl-theme manual clients-carousel owl-no-narrow " style="padding-top:10px;">
                <a id="login-btn" data-toggle="modal" data-target="#myModal" href="#" title="Bazar" class="client" style="width:70px!important;margin-left:50px;">
                  <img class="img-responsive" src="<?= base_url() ?>assets/img/icons/kategori/bazar_icon_homedepo.png" alt="kategori homedepo">
                  <!-- <font style="padding-left:10px;">Bazar</font> -->
                </a>
                <a href="<?= base_url() ?>pembiayaan/tac" title="Pembiayaan" class="client" style="width:70px!important;margin-left:50px;">
                  <img class="img-responsive" src="<?= base_url() ?>assets/img/icons/kategori/pembiayaan_icon_homedepo.png" alt="kategori homedepo">
                  <!-- <font style="">Keuangan</font> -->
                </a>
                <a href="<?= base_url() ?>proyek/tac" title="Kebutuhan Proyek" class="client" style="width:70px!important;margin-left:50px;">
                  <img class="img-responsive" src="<?= base_url() ?>assets/img/icons/kategori/kebutuhan_icon_homedepo.png" alt="kategori homedepo">
                  <!-- <font style="">Keuangan</font> -->
                </a>
                <a href="https://www.homedepo.co.id/blog/" title="Tips" class="client" style="width:70px!important;margin-left:50px;" target="_blank">
                  <img class="img-responsive" src="<?= base_url() ?>assets/img/icons/kategori/tips_icon_homedepo.png" alt="kategori homedepo">
                  <!-- <font style="">Keuangan</font> -->
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>





  <div id="viewhp" class="banners-container">
    <div class="container">
      <div class="row">

        <div class="slider-area">
          <div class="owl-carousel owl-theme" data-plugin-options="{'items':1, 'loop': true}">

            <?php foreach ($slideshow as $key => $slides) { ?>

              <!-- <a href="#" class="banner"> -->
              <img src="<?= base_url() ?>assets/img/slides/<?= $slides->foto_slide ?>" alt="<?= $slides->nama_slide1 ?>" style="border-radius: 8px;">
              <!-- <img style="height:405px;" src="<?= base_url() ?>assets/img/slides/<?= $slides->foto_slide ?>" alt="<?= $slides->nama_slide1 ?>"> -->
              <!-- </a> -->

            <?php } ?>

            <!-- <a href="#" class="banner">
            <img src="<?= base_url() ?>assets/img/demos/slides/shop8/slide1.jpg" alt="Banner">
          </a> -->

          </div>
        </div>

        <div class="side-area">
          <div class="row">
            <div class="col-md-12 col-sm-4 col-xs-12">

              <?php foreach ($showiklan as $key => $iklan) { ?>

                <a href="#" class="banner">
                  <img src="<?= base_url() ?>assets/img/iklan/<?= $iklan->foto_iklan ?>" alt="<?= $iklan->nama_iklan ?>" style="border-radius: 8px;">
                  <!-- <img style="height:129px;" src="<?= base_url() ?>assets/img/iklan/<?= $iklan->foto_iklan ?>" alt="<?= $iklan->nama_iklan ?>"> -->
                </a>

              <?php } ?>
            </div>

            <!-- <div class="col-md-12 col-sm-4 col-xs-12">
            <a href="#" class="banner">
              <img src="<?= base_url() ?>assets/img/demos/banners/shop8/banner2.jpg" alt="Banner">
            </a>
          </div>

          <div class="col-md-12 col-sm-4 col-xs-12">
            <a href="#" class="banner">
              <img src="<?= base_url() ?>assets/img/demos/banners/shop8/banner3.jpg" alt="Banner">
              <img src="<?= base_url() ?>img/slide/banner-free-ongkir.jpeg" alt="Free Ongkir">
            </a>
          </div> -->
          </div>
        </div>

      </div>
    </div>
  </div>

  <div id="viewpc" class="banners-container">
    <div class="container container-product">
      <div class="row">

        <div class="slider-area">
          <img class="img-responsive" src="<?= base_url() ?>assets/img/slides/1798804720SuperSale_Yellow.jpg" alt="homedepo" style="border-radius: 8px;">
        </div>

      </div>
    </div>
  </div>


  <!-- <div class="container">
        <div class="row">
          <div class="col-md-12 normal">

            <div class="tabs home-products-tab">

              <ul class="nav nav-links">
                <li class="active">
                  <a href="#KategoriPilihan" data-toggle="tab">kategori Pilihan</a>
                </li>
              </ul>

              <div class="owl-carousel owl-theme manual clients-carousel owl-no-narrow " style="padding-top:10px;padding-left:20px;">
                <a id="login-btn" data-toggle="modal" data-target="#myModal" href="#" title="Bazar" class="client" style="width:100px!important;">
                  <img class="img-responsive" src="<?= base_url() ?>assets/img/icons/kategori/icon_bazar_hd.jpeg" alt="kategori homedepo">

                </a>
                <a href="<?= base_url() ?>pembiayaan/tac" title="Pembiayaan" class="client" style="width:100px!important;">
                  <img class="img-responsive" src="<?= base_url() ?>assets/img/icons/kategori/icon_pembiayaan_hd.jpeg" alt="kategori homedepo">

                </a>
                <a href="<?= base_url() ?>proyek/tac" title="Kebutuhan Proyek" class="client" style="width:100px!important;">
                  <img class="img-responsive" src="<?= base_url() ?>assets/img/icons/kategori/icon_kebutuhan_proyek_hd.jpeg" alt="kategori homedepo">

                </a>
                <a href="https://www.homedepo.co.id/blog/" title="Tips" class="client" style="width:100px!important;" target="_blank">
                  <img class="img-responsive" src="a<?= base_url() ?>assets/img/icons/kategori/icon_tips_hd.jpeg" alt="kategori homedepo">

                </a>
              </div>
            </div>

          </div>
        </div>
      </div> -->


  <div class="container" style="padding-top: 30px;">
    <div class="row">
      <div class="col-md-12 normal">

        <div class="mb-xlg tabs home-products-tab">

          <!-- <ul class="nav nav-links">
            <li class="active">
              <a href="#ListPartner" data-toggle="tab">PARTNER</a>
            </li>
          </ul> -->

          <!-- <h2 class="slider-title">
            <span class="inline-title">LIST PARTNER</span>
            <span class="line"></span>
          </h2> -->

          <div class="owl-carousel owl-theme manual clients-carousel owl-no-narrow ">
            <a href="<?=base_url().'seller/detail/haston'?>" title="Haston" class="client">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/partner/haston.png" alt="partner homedepo" style="width:110px!important;margin-top:10px!important;margin-left:30px!important;">
            </a>
            <a href="<?=base_url().'seller/detail/mitra10'?>" title="Mitra 10" class="client">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/partner/mitra10.png" alt="partner homedepo" style="width:100px!important;margin-left:50px!important;">
            </a>
            <a href="<?=base_url().'seller/detail/csa'?>" title="CSA" class="client">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/partner/csa.png" alt="partner homedepo" style="width:70px!important;margin-left:50px!important;">
            </a>
            <a href="<?=base_url().'seller/detail/kulitbatu'?>" title="Kulit Batu" class="client">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/partner/kulitbatu.png" alt="partner homedepo" style="width:80px!important;margin-left:50px!important;">
            </a>
            <a href="<?=base_url().'seller/detail/tukangbagus'?>" title="Tukang Bagus" class="client">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/partner/tukangbagus.png" alt="partner homedepo" style="width:50px!important;margin-left:50px!important;">
            </a>
            <a href="<?=base_url().'seller/detail/gradana'?>" title="Gradana" class="client">
              <img class="img-responsive" src="<?= base_url() ?>assets/img/partner/gradana.png" alt="partner homedepo" style="width:70px!important;margin-left:20px!important;">
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- <div class="container" style="padding-top:20px;">
    <div class="row">
      <div class="col-md-12 normal">
        <div class="tabs home-products-tab">
          <ul class="nav nav-links">
            <li class="active">
              <a href="#ProdukTerbaru" data-toggle="tab">Produk LINK</a>
            </li>
          </ul>

          <div class="tab-content">

            <div id="ProdukTerbaru" class="tab-pane active">
              <ul class="products-grid columns5">

                <?php
                foreach ($show_product_link as $key => $productlink) {
                ?>

                  <li>
                    <div class="product">
                      <figure class="product-image-area responsivetb-product">


                        <a href="<?= base_url() ?>product/detail/<?= $productlink->is_product ?>/<?= $productlink->id ?>/<?= $productlink->kode_product ?>.jpg" title="<?= $productlink->nama_product ?>" class="product-image">
                          <img class="imgtb-responsive" src="<?= base_url() ?>assets/img/product/m10/<?= $productlink->kode_product ?>.jpg" alt="<?= $productlink->tag_product ?>">
                        </a>

                        <a href="<?= base_url() ?>product/detail/<?= $productlink->is_product ?>/<?= $productlink->id ?>/<?= $productlink->nama_product ?>" class="product-quickview">
                          <i class="fa fa-share-square-o"></i>
                          <span>Lihat Produk</span>
                        </a>

                        <div class="product-actions">
                          <a id="login-btn" data-toggle="modal" data-target="#myModal" href="#" class="in-favorit" title="Favoritkan">
                            <i class="fa fa-heart" style="padding-top:8px;"></i>
                          </a>

                          <a id="login-btn" data-toggle="modal" data-target="#myModal" href="#" class="addtocart" title="Masukan Keranjang">
                            <i class="fa fa-shopping-cart" style="padding-top:8px;"></i>
                          </a>
                        </div>


                      </figure>
                      <div class="product-details-area">

                        <h2 class="product-name" style="text-align:left;font-size:10px;font-weight:700;">
                          <a href="#" title="homedepo" style="color:#1c2a5f!important">
                            <i class="fa fa-building" style="color:#db0c13;"></i>
                            <?= $productlink->member ?>
                          </a>
                        </h2>

                        <h2 class="product-name">
                          <a href="<?= base_url() ?>product/detail/<?= $productlink->is_product ?>/<?= $productlink->id ?>/<?= $productlink->nama_product ?>" title="<?= $productlink->nama_product ?>">
                            <?= $productlink->nama_product ?>
                          </a>
                        </h2>

                        <div class="product-price-box">
                          <span class="product-price">
                            Rp. <?= number_format($productlink->harga_product, 0, ',', '.') ?>
                          </span>
                        </div>
                      </div>
                    </div>
                  </li>

                <?php } ?>

              </ul>
            </div>

          </div>
        </div>

      </div>

    </div>
  </div> -->

  <div class="container" style="padding-top:20px;">
    <div class="row">
      <div class="col-md-12 normal">
        <div class="tabs home-products-tab">
          <ul class="nav nav-links">
            <li class="active" style="float: left;">
              <a href="#ProdukTerbaru" data-toggle="tab">Rekomendasi</a>
            </li>
            <li style="float: right;font-size:10px;color:#1c2a5f !important;">
              <a href="<?=base_url('welcome/tampil_lainnya')?>">Lihat Lainnya &nbsp; <i class="fa fa-angle-right" style="font-size:12px;font-weight:bold;"></i></a>
            </li>
          </ul>

          <div class="tab-content">

            <div id="ProdukTerbaru" class="row tab-pane active">
              <ul class="products-grid columns5">

                <?php
                  foreach ($show_product_terbaru as $key => $productterbaru) {
                    if ($productterbaru->is_product == 1){
                      $f_product = $productterbaru->nama_file.".jpg";
                      $l_img = base_url()."assets/img/product/m10/".$productterbaru->nama_file.".jpg";
                      $get_img = "assets/img/product/m10/".$productterbaru->nama_file.".jpg";
                    }else {
                      $f_product = $productterbaru->nama_file;
                      $l_img = base_url()."assets/img/product/".$productterbaru->nama_file;
                      $get_img = "assets/img/product/".$productterbaru->nama_file;
                    }

                    if (file_exists($get_img)) {
                ?>

                    <!-- <div class=""> -->
                    <div class="col-md-3 col-xs-6" style="padding: 10px 15px 20px 20px;">

                      <div class="box-product product">
                        <figure class="product-image-area responsivetb-product">

                          <a href="<?= base_url() ?>product/detail/<?= $productterbaru->is_product ?>/<?= $productterbaru->id ?>/<?= $f_product ?>" title="<?= $productterbaru->nama_product ?>" class="product-image">
                            <img class="imgtb-responsive" src="<?= $l_img ?>" alt="<?= $productterbaru->tag_product ?>">
                            <!-- <img src="<?= base_url() ?>assets/img/product/<?= $productterbaru->nama_file ?>" alt="<?= $productterbaru->tag_product ?>" class="product-hover-image"> -->
                          </a>

                          <a href="<?= base_url() ?>product/detail/<?= $productterbaru->is_product ?>/<?= $productterbaru->id ?>/<?= $f_product ?>" class="product-quickview">
                            <i class="fa fa-share-square-o"></i>
                            <span>Lihat Produk</span>
                          </a>

                          <div class="product-actions">
                            <a id="login-btn" data-toggle="modal" data-target="#myModal" href="#" class="in-favorit" title="Favoritkan">
                              <i class="fa fa-heart" style="padding-top:8px;"></i>
                            </a>

                            <a id="login-btn" data-toggle="modal" data-target="#myModal" href="#" class="addtocart" title="Masukan Keranjang">
                              <i class="fa fa-shopping-cart" style="padding-top:8px;"></i>
                            </a>

                            <!-- <a href="#" class="comparelink" title="Bagikan">
                            <i class="fa fa-link" style="padding-top:8px;"></i>
                          </a> -->
                          </div>


                        </figure>
                        <div class="product-details-area">

                          <h2 class="product-name name-i">
                            <a href="<?=base_url('seller/detail/'.$seller_array[$productterbaru->id_member])?>" title="homedepo" style="color:#1c2a5f!important">
                              <i class="fa fa-building-o" style="color:#db0c13;"></i>
                              <?= $productterbaru->inisial_member ?>
                            </a>
                          </h2>

                          <h2 class="product-name name-p">
                          <a href="<?= base_url() ?>product/detail/<?= $productterbaru->is_product ?>/<?= $productterbaru->id ?>/<?= $f_product ?>" title="<?= $productterbaru->nama_product ?>">
                              <?= $productterbaru->nama_product ?>
                            </a>
                          </h2>
                          <!-- <div class="product-ratings">
                        <div class="ratings-box">
                          <div class="rating" style="width:60%"></div>
                        </div>
                      </div> -->

                          <div class="product-price-box" style="text-align:left;">
                            <span class="product-price text-price">
                              Rp. <?= number_format($productterbaru->harga_product, 0, ',', '.') ?>
                            </span>
                          </div>
                        </div>
                      </div>

                    </div>
                <!-- </div> -->

                  <!-- <li class="col-xs-6">
                    <div class="box-product product">
                      <figure class="product-image-area responsivetb-product">

                        <a href="<?= base_url() ?>product/detail/<?= $productterbaru->is_product ?>/<?= $productterbaru->id ?>/<?= $f_product ?>" title="<?= $productterbaru->nama_product ?>" class="product-image">
                          <img class="imgtb-responsive" src="<?= $l_img ?>" alt="<?= $productterbaru->tag_product ?>">
                        </a>

                        <a href="<?= base_url() ?>product/detail/<?= $productterbaru->is_product ?>/<?= $productterbaru->id ?>/<?= $f_product ?>" class="product-quickview">
                          <i class="fa fa-share-square-o"></i>
                          <span>Lihat Produk</span>
                        </a>

                        <div class="product-actions">
                          <a id="login-btn" data-toggle="modal" data-target="#myModal" href="#" class="in-favorit" title="Favoritkan">
                            <i class="fa fa-heart" style="padding-top:8px;"></i>
                          </a>

                          <a id="login-btn" data-toggle="modal" data-target="#myModal" href="#" class="addtocart" title="Masukan Keranjang">
                            <i class="fa fa-shopping-cart" style="padding-top:8px;"></i>
                          </a>
                        </div>


                      </figure>
                      <div class="product-details-area">

                        <h2 class="product-name name-i">
                          <a href="<?=base_url('seller/detail/'.$seller_array[$productterbaru->id_member])?>" title="homedepo" style="color:#1c2a5f!important">
                            <i class="fa fa-building-o" style="color:#db0c13;"></i>
                            <?= $productterbaru->inisial_member ?>
                          </a>
                        </h2>

                        <h2 class="product-name name-p">
                        <a href="<?= base_url() ?>product/detail/<?= $productterbaru->is_product ?>/<?= $productterbaru->id ?>/<?= $f_product ?>" title="<?= $productterbaru->nama_product ?>">
                            <?= $productterbaru->nama_product ?>
                          </a>
                        </h2>

                        <div class="product-price-box" style="text-align:left;">
                          <span class="product-price text-price">
                            Rp. <?= number_format($productterbaru->harga_product, 0, ',', '.') ?>
                          </span>
                        </div>
                      </div>
                    </div>
                  </li> -->

                <?php }} ?>

              </ul>
            </div>
            
            <a href="<?=base_url('welcome/tampil_lainnya')?>" class="">
              <div class="btn btn-lainnya">
                  LIHAT PRODUK LAINNYA
              </div>
            </a>

          </div>
        </div>

      </div>

      <!-- <aside class="col-md-3 sidebar shop-sidebar">
      <?= $this->load->view('templates/bootstraps/menu_samping'); ?>
    </aside> -->

    </div>
  </div>




  <!-- posisi pop up iklan -->

</div>
