<style>
  @media (max-width: 992px) {
    .c_tb_ap {
      padding-top:180px;
    }
  }

  @media (min-width: 993px) {
    .c_tb_ap {
      padding-top:33px;
    }
  }
</style>

<div class="container c_tb_ap">
    <div class="row">
      <div class="col-md-12 normal">
        <div class="tabs home-products-tab">
          <ul class="nav nav-links">
            <li class="active">
              <a href="#ProdukTerbaru" data-toggle="tab"><?=$total_spa?> Produk <?=$show_seller->member?></a>
            </li>
            <!-- <li>
            <a href="#Diskon" data-toggle="tab">Kejar Diskon</a>
          </li> -->
          </ul>

          <div class="tab-content">

            <div id="ProdukTerbaru" class="tab-pane active">
              <ul class="products-grid columns5">

                <?php
                foreach ($show_product_all as $key => $productall) {

                    if ($productall->is_product == 0) {
                        $show_file_utama = $this->seller_model->show_file_utama($productall->id);
		                // $show_file = $this->seller_model->show_file($productall->id);

                        $filename = $show_file_utama->nama_file;
                        $baselinkproduct = base_url().'assets/img/product/'.$filename;
                        $linkget = 'assets/img/product/'.$filename;
                    }else {
                        $show_file_utama = $productall->kode_product.".jpg";
		                // $show_file = $productall->kode_product.".jpg";

                        $filename = $productall->kode_product.".jpg";
                        $baselinkproduct = base_url().'assets/img/product/m10/'.$filename;
                        $linkget = 'assets/img/product/m10/'.$filename;
                    }

                    if (file_exists($linkget)) {
                ?>

                  <li>
                    <div class="product">
                      <figure class="product-image-area responsivetb-product">


                        <a href="<?= base_url() ?>product/detail/<?= $productall->is_product ?>/<?= $productall->id ?>/<?= $filename ?>" title="<?= $productall->nama_product ?>" class="product-image">
                          <img class="imgtb-responsive" src="<?=$baselinkproduct?>" alt="<?= $productall->tag_product ?>">
                        </a>

                        <a href="<?= base_url() ?>product/detail/<?= $productall->is_product ?>/<?= $productall->id ?>/<?= $filename ?>" class="product-quickview">
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

                        <h2 class="product-name" style="text-align:left;font-size:10px;font-weight:700;">
                          <a href="<?=base_url('seller/detail/'.$inisial_seller)?>" title="homedepo" style="color:#1c2a5f!important">
                            <i class="fa fa-building" style="color:#db0c13;"></i>
                            <?= $productall->member ?>
                          </a>
                        </h2>

                        <h2 class="product-name">
                          <a href="<?= base_url() ?>product/detail/<?= $productall->is_product ?>/<?= $productall->id ?>/<?= $filename ?>" title="<?= $productall->nama_product ?>">
                            <?= $productall->nama_product ?>
                          </a>
                        </h2>
                        <!-- <div class="product-ratings">
                      <div class="ratings-box">
                        <div class="rating" style="width:60%"></div>
                      </div>
                    </div> -->

                        <div class="product-price-box">
                          <span class="product-price">
                            Rp. <?= number_format($productall->harga_product, 0, ',', '.') ?>
                          </span>
                        </div>
                      </div>
                    </div>
                  </li>

                <?php
                        }
                    }
                ?>

              </ul>
            </div>

          </div>
        </div>

      </div>

    </div>
  </div>
