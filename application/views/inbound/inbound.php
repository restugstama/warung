<div class="row" style="    width: 1200px;
    margin: 10px 10px 10px 300px;">
    <div class="col-xl-11 col-lg-7">
        <div class="card bg-light text-black shadow">
            <h4 class="d-flex justify-content-center font-weight-bold m-2 p-2">
                DATA INBOUND
            </h4>
            <div class="row justify-content-center">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header d-flex justify-content-end">
                            <!-- Tambah kategori -->
                            <button class="btn btn-warning m-4" data-toggle="modal" data-target="#kategori">
                                Tambah kategori
                            </button>
                            <!-- End Tambah Kategori -->
                            <!-- Tambah Item -->
                            <button class="btn btn-info m-4" data-toggle="modal" data-target="#item">
                                Tambah item
                            </button>
                            <!-- End Tamah Item -->
                            <!-- Tambah Data -->
                            <button class="btn btn-primary m-4 justify-content-end" data-toggle="modal" data-target="#data">
                                Tambah data
                            </button>
                            <!-- End Tambah Data -->     
                        </div>
                        <div class="box-body">
                            <table id="example1" class="table table-bordered"> 
                                <thead>
                                    <th>No</th>
                                    <th>Faktur</th>
                                    <th>Nama Agen</th>
                                    <th>Total Harga</th>
                                    <th>Tanggal</th>
                                    <th>PIC</th>
                                    <th>Tools</th>
                                </thead>
                                <tbody>  
                                    <?php $no=1; foreach ($inbound as $barangmasuk) : ?>
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
                                                    <?= anchor('inbound/inbound/insert_data/'.$barangmasuk->faktur,
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
        </div> 
    </div>
    <!-- Modal Kategori-->
    <div class="modal fade" id="kategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                      <input 
                                      type="text" 
                                      class="form-control form-control-user col-sm-8 " 
                                      id="nama_kategori" name="nama_kategori" 
                                      placeholder="Nama kategori" style="margin:auto;" value="<?= set_value('nama_kategori');?>">
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

        <!-- Modal Item-->
    <div class="modal fade" id="item" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form method="post" action="<?= base_url('inbound/inbound/tambah_item') ?>" >
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                        <div class="col">
                            <!-- Kategori -->
                                    <div class="form-group m-2">
                                      <input 
                                      type="text" 
                                      class="form-control form-control-user col-sm-8 " 
                                      id="nama_kategori" name="nama_item" 
                                      placeholder="Nama Item" style="margin:auto;" value="<?= set_value('nama_item');?>">
                                    </div>
                                    <div class="form-group m-2">
                                      <input 
                                      type="text" 
                                      class="form-control form-control-user col-sm-8 " 
                                      id="barcode" name="barcode" 
                                      placeholder="Barcode" style="margin:auto;" value="<?= set_value('barcode');?>">
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
 

    <!-- Modal Tambah data -->
    <div class="modal fade" id="data" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form method="post" action="<?= base_url('inbound/inbound/data_inbound'); ?>" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah kategori?</h5> 
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <!-- Bagian Tengah -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col">
                            <!-- No Faktur -->
                                <div class="form-group m-2">
                                  <input 
                                  type="text" 
                                  class="form-control form-control-user col-sm-8 " 
                                  id="faktur" name="faktur" 
                                  placeholder="Nomor Faktur" style="margin:auto;" value="<?= $kode ?>" readonly >
                                </div>
                            <!-- end Nomor Faktur -->

                            <!-- Nama Agen -->
                                <div class="form-group m-2">
                                  <input 
                                  type="text" 
                                  class="form-control form-control-user col-sm-8" 
                                  id="nama_agen" name="nama_agen" 
                                  placeholder="Nama Agen" style="margin:auto;" <?= set_value('nama_agen');?> >
                                </div>
                            <!-- end Nama Agen -->

                            <!-- Total biaya --> 
                                <div class="form-group m-2">
                                  <input 
                                  type="text" 
                                  class="form-control form-control-user col-sm-8" 
                                  id="total_harga" name="total_harga" 
                                  placeholder="Total Biaya" style="margin:auto;" <?= set_value('total_harga');?>>
                                </div>
                            <!-- end Total Biaya -->
                        </div>
                        <div class="col">
                            <!-- Tanggal -->
                                <div class="form-group m-2">
                                      <input 
                                      type="date" 
                                      class="form-control form-control-user col-sm-8" 
                                      id="tanggal" name="tanggal" 
                                      placeholder="Tanggal Inbound" style="margin:auto;" <?= set_value('tanggal');?>>
                                </div>
                            <!-- end Tanggal Inbound -->           
                        </div>
                    </div>
                </div>
                <!-- End Bagian Tengah --> 
                <div class="modal-footer p-1">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success" href="">simpan</button>
                </div>
            </div>
        </form>
    </div>
    <!-- End Modal Tambah Inbound -->






</div>
         



