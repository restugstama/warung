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
                            <table id="example1" class="table table-bordered">
                                <thead>
                                    <th>No</th>
                                    <th>Faktur</th>
                                    <th>Nama Barang</th> 
                                    <th>Qty</th>
                                    <th>Harga Beli</th>
                                    <th>Harga Jual</th>
                                    <th>Exp Date</th>
                                    <th>Barcode</th>
                                    <th>Tools</th>
                                </thead>
                                <tbody>  
                                    <?php $no=1; foreach ($stok as $barangmasuk) : ?>
                                        <tr>
                                            <td><?php echo $no++ ?></td>
                                            <td><?php echo $barangmasuk->faktur  ?></td>
                                            <td><?php echo $barangmasuk->nama_agen ?></td>
                                            <td><?php echo $barangmasuk->total_harga ?></td>
                                            <td><?php echo $barangmasuk->tanggal ?></td>
                                            <td>
                                                <?= $user['nama']; ?>
                                            </td>
                                            <td>
                                                <span onclick="javascript return confirm('Tambah data?')" >
                                                    <?= anchor('inbound/inbound/insert_data/'.$barangmasuk->id_inbound,
                                                    '<div class="btn btn-primary btn-xs" >
                                                    Tambah Data
                                                    </div>')
                                                    ?>
                                                </span>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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
                            <!-- faktur -->
                                    <div class="form-group m-2">
                        <?php foreach( $databarang as $barangmasuk) { ?>
                            <input type="text" class="form-control form-control-user col-sm-8 " id="Faktur" name="faktur" placeholder="" style="margin:auto;" hid value="<?= $barangmasuk->faktur  ?>" hidden>
                        <?php } ?>
                                    </div>
                                <!-- end Nomor Faktur -->
                                <!-- faktur -->
                                    <div class="form-group m-2">
                                        <label>Nama Barang</label>
                                      <select name="id_storage" class="form-control" >
                                        <?php
                                        foreach ($databarang as $barang) ;
                                        ?>
                                        <option value="<?= $item->id_item ?>" >
                                            <?= $item->nama_barang ?>
                                        </option>
                                      </select>
                                    </div>
                                <!-- end Nomor Faktur -->
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
 </div>
</div>