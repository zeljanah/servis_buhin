<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Servis Buhin</title>
	<meta name="og:locale" content="hr_HR" />
	<meta name="og:type" content="website" />
	<meta name="og:title" content="Servis Buhin - servisiranje i popravak plinskih trošila" />
	<meta name="og:description" content="Servis Buhin bavi se servisiranjem i montažom plinskih trošila. Ovlašteni servisni partner za proizvodni program Vaillant i Junker Bosch." />
	<!-- ADD WEBSITE URL HERE: <meta name="og:url" content="" />-->
	<meta name="og:site_name" content="Servis Buhin" />
  <meta name="article:tag" content="Servis Buhin, Osijek, plin, bojler, Vaillant, Bosch, popravak bojlera" />
  <meta property="og:image" content="img/share_img.jpg" />

	<link rel="shortcut icon" type="image/png" href="img/favicon.png" />
	<link rel="stylesheet" href="css/scss/main.css">
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css" integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA==" crossorigin=""/>
</head>

<body>
	<main class="main grid grid--12">

		<?php 
			include 'navigation.php';
		?>

		<div class="gallery--wrap grid grid--12">
			<div class="owl-carousel owl-carousel--gallery gallery">
				<div class="gallery__img--wrap"><img src="img/gallery/vozilo_1.jpg" alt="gallery" class="gallery__img" /></div>
				<div class="gallery__img--wrap"><img src="img/gallery/servis_4.jpg" alt="gallery" class="gallery__img" /></div>
				<div class="gallery__img--wrap"><img src="img/gallery/dijelovi_1.jpg" alt="gallery" class="gallery__img" /></div>
				<div class="gallery__img--wrap"><img src="img/gallery/dijelovi_2.jpg" alt="gallery" class="gallery__img" /></div>
				<div class="gallery__img--wrap"><img src="img/gallery/dijelovi_3.jpg" alt="gallery" class="gallery__img" /></div>
				<div class="gallery__img--wrap"><img src="img/gallery/dijelovi_4.jpg" alt="gallery" class="gallery__img" /></div>
			</div>

			<div class="gallery--thumbs">
				<div class="gallery__img--wrap"><img src="img/gallery/vozilo_1.jpg" alt="gallery" class="gallery__img" /></div>
				<div class="gallery__img--wrap"><img src="img/gallery/servis_4.jpg" alt="gallery" class="gallery__img" /></div>
				<div class="gallery__img--wrap"><img src="img/gallery/dijelovi_1.jpg" alt="gallery" class="gallery__img" /></div>
				<div class="gallery__img--wrap"><img src="img/gallery/dijelovi_2.jpg" alt="gallery" class="gallery__img" /></div>
				<div class="gallery__img--wrap"><img src="img/gallery/dijelovi_3.jpg" alt="gallery" class="gallery__img" /></div>
				<div class="gallery__img--wrap"><img src="img/gallery/dijelovi_4.jpg" alt="gallery" class="gallery__img" /></div>
			</div>
		</div>

		<?php 
			include 'footer.php';
		?>
	</main>

	<script src="js/jquery-3.4.1.min.js"></script>
<script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js" integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA==" crossorigin="">
	</script> 
	<script src="js/map.js"></script>
	<script src="js/burger.js"></script>
	<script src="js/owl_carousel_lib.js"></script>
	<script src="js/owl_carousel_init.js"></script>
</body>
</html>