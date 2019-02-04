<br>
<!-- Main content -->
<section class='content container'>
    <div class='box'>
        <h5>Tambah Kebun</h5>
        <div class='box-body'>
        <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <td>Nama Pemilik <?php echo form_error('pemilik') ?></td>
                        <td>
                            <input type="text" class="form-control" id="pemilik" name="pemilik" placeholder="Nama Pemilik" required  value="<?php echo $pemilik; ?>" />
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
                        <td>Luas <?php echo form_error('luas')?></td>
                        <td>
                            <input type="luas" class="form-control"  id="luas" name="luas" placeholder="Luas" required  value="<?php echo $luas; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>keterangan <?php echo form_error('keterangan') ?></td>
                        <td>
                            <input type="text" class="form-control"  id="keterangan" name="keterangan" placeholder="keterangan" value="<?php echo $keterangan; ?>" />
                        </td>
                    </tr>
                    <tr>
                        <td>Gambar <?php echo form_error('gambar') ?></td>
                        <td>
                            
                            <input type="file" id="gambar" name="gambar" required value="<?php echo $gambar; ?>"/>
                        </td>
                    </tr>

                    <input type="hidden" name="id_perkebunan" value="<?php echo $id_perkebunan; ?>" />

                    <tr>
                        <td colspan='2' class='text-center'>
                            <button type="submit" class="btn btn-primary btn-sm"><i class='fa fa-check'></i> <?php echo $button ?></button>
                            <a href="<?php echo site_url('perkebunan') ?>" class="btn btn-sm btn-default"><i class='fa fa-remove'></i> Kembali</a>
                        </td>
                    </tr>
                </table>
           </form>
        </div><!-- /.box-body -->
    </div><!-- /.box -->
</section><!-- /.content -->