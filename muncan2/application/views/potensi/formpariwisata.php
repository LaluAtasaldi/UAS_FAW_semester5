<br>
<!-- Main content -->
<section class='content container'>
    <div class='box'>
        <h5>Tambah Wisata</h5>
        <div class='box-body'>
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <td>Nama Wisata <?php echo form_error('nama_wisata') ?></td>
                        <td>
                            <input type="text" class="form-control" id="nama_wisata" name="nama_wisata" placeholder="nama wisata" required  value="<?php echo $nama_wisata; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Daerah <?php echo form_error('daerah')?></td>
                        <td>
                            
                          <select class="form-control custom-select mb-2 mr-sm-2 mb-sm-0" id="daerah" name="daerah"  required  value="<?php echo $daerah; ?>">
                            <option>Muncan I</option>
                            <option>Muncan II</option>
                            <option>Muncan III</option>
                            <option>Muncan IV</option>
                            <option>Montong Batu I</option>
                            <option>Montong Batu II</option>
                            <option>Montong Tanggak</option>
                            <option>Talun</option>
                            <option>Lingkung</option>
                            <option>Prantap</option>
                            <option>Pengambok</option>
                            <option>Sumbek</option>
                          </select>
                        
                        </td>
                    </tr>
                    <tr>
                        <td>Gambar <?php echo form_error('gambar') ?></td>
                        <td>
                            
                            <input type="file" id="gambar" name="gambar" required value="<?php echo $gambar; ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td>keterangan <?php echo form_error('keterangan') ?></td>
                        <td>
                            <input type="text" class="form-control"  id="keterangan" name="keterangan" placeholder="keterangan" value="<?php echo $keterangan; ?>" />
                        </td>
                    </tr>
                    <input type="hidden" name="id_pariwisata" value="<?php echo $id_pariwisata; ?>" />

                    <tr>
                        <td colspan='2' class='text-center'>
                            <button type="submit" class="btn btn-primary btn-sm"><i class='fa fa-check'></i> <?php echo $button ?></button>
                            <a href="<?php echo site_url('pariwisata') ?>" class="btn btn-sm btn-default"><i class='fa fa-remove'></i> Kembali</a>
                        </td>
                    </tr>
                </table>
           </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section><!-- /.content -->