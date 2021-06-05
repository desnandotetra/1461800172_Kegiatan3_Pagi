<!DOCTYPE html>
<html lang="en">
<head>
	<title>Praktikum</title>

	<link rel="stylesheet" type="text/css" href="{{ asset('css.css') }}">

	<script type="text/javascript" src="jquery.js"></script>
</head>
<body>

<div class="content">
	<header>
		<h1 class="judul">Praktikum Pertemuan 3</h1>
		<h3 class="deskripsi">Desnando Tetra (1461800172)</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="/">guru</a></li>
			<li><a href="/kelas">kelas</a></li>
			<li><a href="/siswa">siswa</a></li>
			<li><a href="/user">User</a></li>
		</ul>
	</div>
 
	<div class="IPA">
 
 
	@yield('IPA')
 
	</div>
</div>
</body>
</html>