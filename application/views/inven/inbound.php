<div class="row" style="    width: 1200px;
    margin: 10px 10px 10px 300px;">
    <div class="col-xl-9 col-lg-7">
        <div class="card bg-light text-black shadow">
            <h4 class="d-flex justify-content-center font-weight-bold m-2 p-2">
                INBOUND -Tambah data
            </h4>
            <div class="">
                <form class="user" method="get" action="<?= base_url('inbound/tambah_data'); ?>" >
                    <div class="row">
                        <div class="col">
                            <!-- No Faktur -->
                            <div class="form-group">
                                  <input 
                                  type="text" 
                                  class="form-control form-control-user col-sm-8 " 
                                  id="faktur" name="faktur" 
                                  placeholder="Nomor Faktur" style="margin:auto;">
                              </div>
                              <!-- end Nomor Faktur -->
                              <!-- Nama Agen -->
                              <div class="form-group">
                                  <input 
                                  type="text" 
                                  class="form-control form-control-user col-sm-8" 
                                  id="agen" name="agen" 
                                  placeholder="Nama Agen" style="margin:auto;" >
                              </div>
                              <!-- end Nama Agen -->
                              <!-- Total biaya -->
                              <div class="form-group">
                                  <input 
                                  type="text" 
                                  class="form-control form-control-user col-sm-8" 
                                  id="biaya" name="biaya" 
                                  placeholder="Total Biaya" style="margin:auto;">
                              </div>
                              <!-- end Total Biaya -->
                        </div>
                        <div class="col">
                            <div class="form-group">
                                  <input 
                                  type="date" 
                                  class="form-control form-control-user col-sm-8" 
                                  id="date_inbound" name="date_inbound" 
                                  placeholder="Tanggal Inbound" style="margin:auto;">
                              </div>
                              <!-- end Tanggal Inbound -->           
                        </div>
                    </div>
                    
                    <div class="text-right m-2" >
                        <hr class="m-1" >
                        <a href="" class="btn btn-primary btn-icon-split" data-target="#tambahimbound" data-toggle="modal">
                            <span class="text">Input Data</span>
                        </a>
                        <hr class="m-1" >
                         
                    </div>
                
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-5"> 
        <div class="card bg-light text-black shadow">
            
        </div>
    </div>




    <!-- Modal Tambah Inbound -->
    <div class="modal fade" id="tambahimbound" tabindex="-1" role="dialog" aria-labelledb<y="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content"> 
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Data?</h5> 
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <!-- bagian tengah -->
            <div class="modal-body">

                <!-- Nama Barang -->
                <div class="form-group">
                    <input type="text" class="form-control form-control-user col-sm-8"id="nama_barang" name="nama_barang" 
                    placeholder="Nama Barang" style="margin:auto;" >
                </div>
                <!-- End Nama Barang -->

                <!-- Nama Qty -->
                <div class="form-group">
                    <input type="text" class="form-control form-control-user col-sm-8"id="qty" name="qty" 
                    placeholder="Qty" style="margin:auto;" >
                </div>
                <!-- End Qty -->

                <!-- Nama Harga Barang -->
                <div class="form-group">
                    <input type="text" class="form-control form-control-user col-sm-8"id="harga_barang" name="harga_barang" 
                    placeholder="Harga Barang" style="margin:auto;" >
                </div>
                <!-- End Harga Barang -->

                <!-- Nama Harga Jual -->
                <div class="form-group">
                    <input type="text" class="form-control form-control-user col-sm-8"id="harga_jual" name="harga_jual" 
                    placeholder="harga_jual" style="margin:auto;" >
                </div>
                <!-- End Harga Jual -->

                <!-- Nama Exp Date -->
                <div class="form-group">
                    <input type="date" class="form-control form-control-user col-sm-8"id="exp_date" name="exp_date" 
                    placeholder="exp date" style="margin:auto;" >
                </div>
                <!-- End Exp Date -->

                <!-- Barcode -->
                <div class="form-group">
                    <input type="text" class="form-control form-control-user col-sm-8"id="Barcode" name="barcode" 
                    placeholder="Barcode" style="margin:auto;" >
                </div>
                <!-- End Barcode -->

            </div>
            <!-- End bagian tengah -->
            <div class="modal-footer p-1">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <BUTTON type="submit" class="btn btn-success" href="<?= base_url('inbound/tambah_data'); ?>">simpan</button>
            </div>
          </div>
        </div>
    </div>
</form>


</div> 