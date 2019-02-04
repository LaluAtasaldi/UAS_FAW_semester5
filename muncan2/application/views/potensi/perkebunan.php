<section>
	<div class="container">
	<h1>PERKEBUNAN</h1>
	<!--konten gambar-->
	      <br>
		<div>
            <h4>PETA KEBUN WILAYAH MUNCAN</h4>
            <img width="100%" src="<?php echo base_url('assets');?>/img/muncan.jpg">
        </div><br>
		<div class="row perataan">
            <div class="col-7" style="padding-bottom: 15px;">
                <a href='<?=site_url('perkebunan/create')?>' class='zooma btn btn-primary'><i class='fa fa-plus'></i> Tambah Data</a>
            </div>
        </div>


		<div class="perataan">
			<div class="col-9" > 
                <table class="table table-hover" id="dataTablea">
                    <thead align="center">
                        <tr>
                            <th>No</th>
                            <th>Pemilik</th>
                            <th>Luas</th>
                            <th>Daerah</th>
                            <th>Gambar</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody align="center">
                        <?php $start = 0; foreach ($perkebunan_data as $perkebunan) { ?>
                        <tr>
                            <td><?php echo ++$start ?></td>
                            <td align="left"><?php echo $perkebunan->pemilik ?></td>
                            <td align="right"><?php echo $perkebunan->luas ?></td>
                            <td align="right"><?php echo $perkebunan->daerah ?></td>
                            <td><img src="<?php echo base_url().'upload/perkebunan/'.$perkebunan->gambar ?>" width="50px" ></td>
                            <td align="left" class="row"><?php echo $perkebunan->keterangan ?></td>
                            <td>
                                <a href='<?=site_url('perkebunan/read/'.$perkebunan->id_perkebunan)?>' class='zooma btn btn-xs btn-default'><i class='fa fa-eye'></i></a>
                                <a href='<?=site_url('perkebunan/update/'.$perkebunan->id_perkebunan)?>' class='zooma btn btn-xs btn-primary'><i class='fa fa-pencil-square-o'></i></a>
                                <a href='<?=site_url('perkebunan/delete/'.$perkebunan->id_perkebunan)?>' class='zooma btn btn-xs btn-danger' onclick="javasciprt: return confirm('Are You Sure ?');"><i class='fa fa-trash-o'></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                   
                    </table>
            </div>
            <div class="col-3">
            	<h4>Grafik</h4>
            	<p>Jika dilihat dari segi daerah penempatan, dapat dihasilkan grafik seperti berikut :</p>
                <img src="<?php echo base_url('assets');?>/img/garifk.PNG" class="zoom" width="100%">
            </div>
        </div>
	</div>

</section>