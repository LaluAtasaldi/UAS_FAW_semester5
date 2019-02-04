<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Muncan 2</title>
	<link rel="stylesheet" href="<?php echo base_url('assets')?>/css/latihan.css">
	 <link rel="stylesheet" href="<?php echo base_url('assets')?>/css/bootstrap4.css">
	 <link rel="stylesheet" href="<?php echo base_url('assets')?>/font-awesome/css/font-awesome.min.css">
	 <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets');?>/css/dataTables.bootstrap4.min.css">
</head>
<body  style="background-color: white #f2f2f2 ">

<!-- Navbar -->
<div class="Wrapper">
	<!-- Navbar 1 -->
	<div class="justify-content-between">
		<nav class="navbar navbar-expand-lg navbar-dark" style=" background-color: #e62e00;">
			<div class="container">
				  <a class="navbar-brand" href="<?php echo base_url();?>">MUNCAN</a>
				  <!-- <span class="navbar-text">	
				    <small><i>Desa Muncan Kec. Kopang Kab. Lombok Tengah. Telp. 022 220000 Kode Pos 83553</i></small>
				  </span> -->
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
					<ul class="navbar-nav">
					      <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          Profil
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item dropdown nav-item" href="#">Sejarah Desa</a>
					          <a class="dropdown-item dropdown nav-item" href="#">Profil Desa</a>
					          <a class="dropdown-item" href="#">Profil Pemerintahan Desa</a>
					        </div>
					      </li>
					      <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          Kelembagaan Desa
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item dropdown nav-item" href="#">L P M D</a>
					          <a class="dropdown-item" href="#">Karang Taruna</a>
					          <a class="dropdown-item" href="#">P K K</a>
					          <a class="dropdown-item" href="#">Linmas</a>
					          <a class="dropdown-item" href="#">RT & RW</a>
					        </div>
					      </li>
					      <li class="nav-item dropdown">
					        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					          Informasi
					        </a>
					        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
					          <a class="dropdown-item dropdown nav-item" href="#">Event</a>
					          <a class="dropdown-item" href="#">Berita</a>
					          <a class="dropdown-item" href="#">Lowongan Pekerjaan</a>
					        </div>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#">Galeri</a>
					      </li>
					      <li class="nav-item">
					        <a class="nav-link" href="#">Dokumen</a>
					      </li>
					</ul>
				  </div>
			</div>
		</nav>
	</div>

	<!-- Navbar 2 -->
	<div style="background-color: white; border-bottom: 2px solid red">
		<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light ">
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-left">
	      <li class="nav-item active">
	        <a class="nav-link" href="<?php echo base_url();?>"><b>Home</b> <span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Produk
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="<?php echo base_url('Produkmebel');?>">Mebel</a>
	          <a class="dropdown-item" href="<?php echo base_url('Produkdekor');?>">Dekor</a>
	        </div>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Potensi Desa
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="<?php echo base_url('Budaya');?>">Budaya</a>
	          <a class="dropdown-item" href="<?php echo base_url('Perkebunan');?>">Perkebunan</a>
	          <a class="dropdown-item" href="<?php echo base_url('Pertanian');?>">Pertanian</a>
	          <a class="dropdown-item" href="<?php echo base_url('Perternakan');?>">Perternakan</a>
	          <a class="dropdown-item" href="<?php echo base_url('Pariwisata');?>">Pariwisata</a>
	        </div>
	      </li>
	    </ul>
	  </div>
		</nav>
	</div>
</div>


  <!-- untuk halaman statik-->
  <div class="content-wrapper">
      <?php $this->load->view($page);?>
  </div>

		
<hr class="container w-100" style="background-color: #e62e00">
<!--Footer-->
  <footer align='center'>
    <div>
      <b>Version</b> 0.1
    </div>
    <strong>Copyright &copy; 2018-<?php echo DATE('Y');?> <a href="#">Muncan_Ku</a>.</strong> Kaoott
  </footer>

      <script src="<?php echo base_url('assets')?>/js/jquery-3.3.1.slim.min.js"></script>
      <script src="<?php echo base_url('assets')?>/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url('assets');?>/js/jquery.dataTables.min.js"></script>
      <script src="<?php echo base_url('assets');?>/js/dataTables.bootstrap.min.js"></script>
      <script type="text/javascript">
		  $(function () {
		    $('#dataTablea').DataTable()
		  })

      </script>
</body>
</html>