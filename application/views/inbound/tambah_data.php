<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/') ?>css/table.css">
 <div class="row" style="    width: 1200px;
    margin: 10px 10px 10px 300px;">
    <div class="col-xl-11 col-lg-7">
    	<div class="card bg-light text-black shadow">
    		<h4 class="d-flex justify-content-center font-weight-bold m-2 p-2">
                DATA INBOUND -  
                <p>
                    <?php foreach( $inbound as $barangmasuk) { ?>
                        <?= $barangmasuk->faktur  ?>
                    <?php } ?>
                </p>
         </h4>
         <div class="row justify-content-center">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header d-flex justify-content-end">
                            <!-- Input Data -->
                            <button class="btn btn-primary m-4 justify-content-end" data-toggle="modal" data-target="#input_data">
                                Input data
                            </button>
                            <!-- End Tambah Data -->     
                        </div>
                        <div class="box-body">
                            <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                                <thead>
                                    <th>No</th>
                                    <th>Nama Barang</th> 
                                    <th>Qty</th>
                                    <th>Harga Beli</th> 
                                    <th>Harga Jual</th>
                                    <th>Exp Date</th>
                                    <th>Barcode</th>
                                    <th>Tools</th>
                                </thead>
                                <tbody>  

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


 </div>
</div>

<!-- Modal input data-->
    <div class="modal fade" id="input_data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form method="post" action="<?= base_url('inbound/inbound/tambah_kategori') ?>" >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <!-- Kategori -->
                            <div class="form-group m-2">
                                <label>kategori barang</label>
                                <select name="kategori" class="form-control">
                                    <option>Pilih kategori</option>
                                    <?php 
                                        foreach ($datakategori as $kategori) :?>
                                        <option value="<?= $kategori->id_kategori ?>"><?= $kategori->nama_kategori ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        <!-- end kategori --> 
                        <!-- nama barang -->
                            <div class="form-group m-2">
                                <label>nama barang</label>
                                <select name="nama_barang" class="form-control">
                                    <option>Pilih barang</option>
                                    <?php 
                                        foreach ($dataitem as $item ) :?>
                                        <option value="<?= $item->id_item ?>"><?= $item->nama_barang ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        <!-- end nama barang -->

                        <!-- Qty -->
                            <div class="form-group m-2">
                                <label>Jumlah Qty Barang</label>
                                <input type="text" name="qty" class="form-control" value="<?= set_value('qty') ?>" >
                            </div> 
                        <!-- end QTY -->

                        <!-- Harga beli -->
                            <div class="form-group m-2">
                                <label>Harga beli</label>
                                <input type="text" name="harga_beli" class="form-control" value="<?= set_value('harga_beli') ?>" >
                            </div>
                        <!-- end Harga beli -->

                        <!-- Harga jual -->
                            <div class="form-group m-2">
                                <label>Harga jual</label>
                                <input type="text" name="harga_jual" class="form-control" value="<?= set_value('harga_jual') ?>" >
                            </div>
                        <!-- end Harga jual -->

                        <!-- Exp Date -->
                            <div class="form-group m-2">
                                <label>Exp date</label>
                                <input type="date" name="exp_date" class="form-control" value="<?= set_value('harga_jual') ?>" >
                            </div>
                        <!-- end Exp date -->

                        <!-- Barcode -->
                            <div class="form-group m-2">
                                <label>barcode</label>
                                <select name="barcode" class="form-control">
                                    <option>Pilih barcode</option>
                                    <?php 
                                        foreach ($dataitem as $item ) :?>
                                        <option value="<?= $item->id_item?>"><?= $item->barcode ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        <!-- end barcode -->
                    </div>

                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">simpan</button>
              </div>
            </div>
          </div>
        </form>
    </div>
<!-- end input data -->



<script>
    $(document).ready(function () {
  $('#dtHorizontalExample').DataTable({
    "scrollX": true
  });
  $('.dataTables_length').addClass('bs-select');
});
</script>
