<br>
    <!-- Main content -->
    <section class="content-header container" style="border: 1px solid silver">
      <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Daftar Produk</h3>
              <?php echo $this->session->flashdata('message') ? '<br/>'.$this->session->flashdata('message') : ''?>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row perataan">
                <div class="col-7" style="padding-bottom: 15px;">
                <a href='<?=site_url('produkmebel/create')?>' class='zooma btn btn-primary'><i class='fa fa-plus'></i> Tambah Data</a>
                </div>
              </div>
            <div class='table'> 
                <table width="100%" class="table table-hover" id="dataTablea">
                    <thead align="center">
                        <tr>
                            <th>No</th>
                            <th>Nama Mebel</th>
                            <th>Jenis</th>
                            <th>Harga</th>
                            <th>Nama Penjual</th>
                            <th>Keterangan</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody align="center">
                        <?php $start = 0; foreach ($produkmebel_data as $produkmebel) { ?>
                        <tr>
                            <td><?php echo ++$start ?></td>
                            <td align="left"><?php echo $produkmebel->nama_mebel ?></td>
                            <td align="left"><?php echo $produkmebel->jenis_mebel ?></td>
                            <td align="right"><?php echo $produkmebel->harga_mebel ?></td>
                            <td align="right"><?php echo $produkmebel->nama_penjual ?></td>
                            <td align="left"><?php echo $produkmebel->keterangan_mebel ?></td>
                            <td><img src="<?php echo base_url().'upload/mebel/'.$produkmebel->gambar_mebel ?>" width="50px" height="50px" ></td>
                            <td>
                                <a href='<?=site_url('produkmebel/read/'.$produkmebel->id_mebel)?>' class='zooma btn btn-xs btn-default'><i class='fa fa-eye'></i></a>
                                <a href='<?=site_url('produkmebel/update/'.$produkmebel->id_mebel)?>' class='zooma btn btn-xs btn-primary'><i class='fa fa-pencil-square-o'></i></a>
                                <a href='<?=site_url('produkmebel/delete/'.$produkmebel->id_mebel)?>' class='zooma btn btn-xs btn-danger' onclick="javasciprt: return confirm('Are You Sure ?');"><i class='fa fa-trash-o'></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                   
                    </table>
                </div><!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
<br>



    </section>  