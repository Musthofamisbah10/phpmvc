<!DOCTYPE html>
<html>
<head>
	<title>Halaman <?php echo $data['judul']; ?></title>

	<!-- boostrap -->
	<link rel="stylesheet" href="<?php echo BASEURL; ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo BASEURL; ?>/css/bootstrap-grid.css">

	<!-- css custem -->
	<link rel="stylesheet" href="<?php echo BASEURL; ?>/css/style.css">

	<!-- fontawesome -->
</head>
<body>

	<!-- navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container">
		  <a class="navbar-brand" href="<?= BASEURL ?>">PHP Mvc</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" ar																										ia-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav">
		      <a class="nav-item nav-link active" href="<?= BASEURL ?>">Home <span class="sr-only">(current)</span></a>
		      <a class="nav-item nav-link" href="<?= BASEURL ?>/mahasiswa">Mahasiswa</a>
		      <a class="nav-item nav-link" href="<?= BASEURL ?>/about">About</a>
		    </div>
		  </div>
	  </div>
	</nav>