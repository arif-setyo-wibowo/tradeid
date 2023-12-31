<?php $this->load->view($header); ?>
<!-- Hero -->
<div class="">
<div class="w-100 bg-white">
    <div class="bg-white content content-full d-flex justify-content-between">
        <div class="">
            
        </div>
        <div class="">

        </div>
    </div>
</div>
</div>
<!-- END Hero -->

<div class="content">
<div class=" content content-full d-flex justify-content-between">
    <div class=""></div>
        <div class="">
            <a class="nav-main-link" href="<?= base_url() ?>admin/pembelian">
                <i class="nav-main-link-icon si si-action-undo"></i>
                <span class="nav-main-link-name">Go Back</span>
            </a>
        </div>
    </div>
          <!-- Products -->
          <div class="block block-rounded">
            <div class="block-header block-header-default">
              <h3 class="block-title">Products</h3>
            </div>
            <div class="block-content">
              <div class="table-responsive">
                <table class="table table-borderless table-striped table-vcenter fs-sm">
                  <thead>
                    <tr>
                      <th>Nama</th>
                      <th class="text-center">Email</th>
                      <th class="text-center">Perusahaan</th>
                      <th class="text-center">Premium</th>
                      <th class="text-center" >Status pembelian</th>
                      <th class="text-center" >Tanggal Pembelian</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="" ><?= $pembelian[0]->namaPembelian?></a></td>
                      <td><a href="" ><?= $pembelian[0]->emailPembelian?></a></td>
                      <td class="text-center"><?= $pembelian[0]->namaPerusahaan?></td>
                      <td class="text-center"><strong><?= $pembelian[0]->namaPremium?></strong></td>
                      <td class="text-center"><?= $pembelian[0]->statusPembelian == 1 ? "Disetujui" : "Tidak Disetujui" ?></td>
                      <td class="text-center"><?= $pembelian[0]->tglPembelian?></td>
                    </tr>                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <!-- END Products -->
          <!-- Customer -->
          <div class="row">
            <div class="col-sm-6">
              <!-- Shipping Address -->
              <div class="block block-rounded">
                <div class="block-header block-header-default">
                  <h3 class="block-title">Bukti Pembayaran</h3>
                </div>
                <div class="block-content">
                <div class="col-8 animated fadeIn mb-2">
                      <a class="img-link img-link-simple img-link-zoom-in img-lightbox" href="<?= base_url('uploads/23f2887e2b546d63c0a88605509d8b29.jpg')?>">
                        <img class="img-fluid" src="<?= base_url('uploads/'.$pembelian[0]->gambarPembelian)?>" alt="">
                      </a>
                      <div class="mt-4">
                        <div class="mb-2">Konfirmasi Pembayaran</div>
                        <a href="<?= base_url('updatePembelian/'.$pembelian[0]->idpembelian.'/'.$pembelian[0]->idcompany.'/'.$pembelian[0]->idpremium)?>"" class=" rounded-pill  btn-sm text-primary">
                              <button class="btn rounded px-3 btn-sm btn-alt-primary">Terima </button>
                        </a>
                      </div>     
                    </div>
                </div>
              </div>
              <!-- END Shipping Address -->
            </div>
            
          <!-- END Customer -->
        </div>
        <!-- END Page Content -->

<?php $this->load->view($footer) ?>