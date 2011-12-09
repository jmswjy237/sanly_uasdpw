<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Homepage</title>
		<link rel="stylesheet" href="/dpw/css/reset.css" type="text/css" media="all">
		<link rel="stylesheet" href="/dpw/css/layout.css" type="text/css" media="all">
		<link rel="stylesheet" href="/dpw/css/style.css" type="text/css" media="all">
		<script type="text/javascript" src="/dpw/js/jquery-1.6.js" ></script>
		<script type="text/javascript" src="/dpw/js/cufon-yui.js"></script>
		<script type="text/javascript" src="/dpw/js/cufon-replace.js"></script>  
		<script type="text/javascript" src="/dpw/js/Vegur_300.font.js"></script>
		<script type="text/javascript" src="/dpw/js/PT_Sans_700.font.js"></script>
		<script type="text/javascript" src="/dpw/js/PT_Sans_400.font.js"></script>
		<script type="text/javascript" src="/dpw/js/tms-0.3.js"></script>
		<script type="text/javascript" src="/dpw/js/tms_presets.js"></script>
		<script type="text/javascript" src="/dpw/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" src="/dpw/js/atooltip.jquery.js"></script>
	</head>
	<body id="page1">
		<div class="main">
			<header>
				<div class="wrapper">
					<h1><a id="logo">Desain Interior</a></h1>
				</div>
				<nav>
					<ul id="menu">
						<li class="active"><?php echo anchor ('home/index','Homepage'); ?></li>
						<li> <?php echo anchor ('home/perabotRumah','Perabot Rumah'); ?> </li>					
						<li> <?php echo anchor ('home/desainInterior','Desain Interior'); ?> </li>
						<li><?php echo anchor ('home/tips','Tips'); ?></li>
						<li class="last"><?php echo anchor ('home/arsitektur','Arsitektur'); ?></li>
					</ul>
				</nav>
				
				<div id="slider">
					<ul class="items">
						<li>
							<img src="<?php echo base_url() ?>images/img1.jpg" />
							<div class="banner">
								<span class="title"><span class="color2">Life is all about</span><span class="color1">manners. Nothing</span><span>else matters.</span></span>
								<p>Albert Hadley, <br/>House Beautiful </p>
							</div>
						</li>
						<li>
							<img src="<?php echo base_url() ?>images/img2.jpg" />
							<div class="banner">
								<span class="title"><span class="color2">To create an interior,</span><span class="color1">the designer must</span><span>develop an overall<span class="color2">concept and stick to it.</span></span></span>
								<p>Albert Hadley, <br/>The Story of America's Preeminent Interior Designer </p>
							</div>
						</li>
						<li>
							<img src="<?php echo base_url() ?>images/img3.jpg" />
							<div class="banner">
								<span class="title"><span class="color2">A good decorator not only</span><span class="color1">plans and schemes, but</span><span>he also knows how <span class="color2">the job is done.</span></span></span>
								<p>Albert Hadley, <br/>The Story of America's Preeminent Interior Designer</p>
							</div>
						</li>
					</ul>
				</div>
			</header>
			<article id="content"><div class="ic"></div>
				<div class="wrapper">
					<div class="col1 marg_right1">
						<h2>Desain Interior</h2>
						<p>Untuk rumah ukuran besar biasannya memerlukan ketelitian dalam mendesain interior tata ruangnya</p>
					</div>
					<div class="col1 marg_right1">
						<h2>Sketsa Rumah</h2>
						<p>Beberapa coretan dasar untuk membuat suatu desain yang nantinya akan dijadikan layout rumah secara lebih detail dengan ukuran dan perbandingan yang jelas. </p>
					</div>
					<div class="col1 marg_right1">
						<h2>Bangun Rumah</h2>
						<p>Membangun rumah idaman yang akan ditinggali oleh keluarga anda ataupun membangun rumah idaman untuk investasi / bisnis property</p>
					</div>
					<div class="col1">
						<h2>Arsitek Rumah</h2>
						<p>Untuk membangun sebuah rumah idaman keluarga anda , diperlukan seorang arsitek berpengalaman yang benar – benar bisa mengerti apa yang ada di pikiran / benak anda.</p>
					</div>
				</div>
			</article>
		</div>
		<div class="bg1">
			<div class="main">
				<article id="content2">
					<div class="wrapper">
						<div class="col2 marg_right1">
							<h3>Rumah</h3>
							<div class="wrapper">
								<figure class="left marg_right1"><img src="<?php echo base_url() ?>images/rumah.jpg" /></figure>
								<p>Dalam arti umum, rumah adalah bangunan yang dijadikan tempat tinggal selama jangka waktu tertentu. Rumah bisa menjadi tempat tinggal manusia maupun hewan, namun tempat tinggal yang khusus bagi hewan biasa disebut sangkar, sarang, atau kandang. Dalam arti khusus, rumah mengacu pada konsep-konsep sosial-kemasyarakatan yang terjalin di dalam bangunan tempat tinggal, seperti keluarga, tempat bertumbuh, makan, tidur, beraktivitas, dll. </p>
								<p>Rumahku, istanaku. Ungkapan itu membuat setiap orang ingin menciptakan sebuah rumah sebagai hunian yang nyaman. Fungsi sebenarnya sebuah rumah adalah tempat berteduh serta melindungi diri dari dunia luar. Rumah adalah tempat paling nyaman untuk mengistirahatkan raga setelah seharian melakukan aktivitas. Oleh karena itu, keadaan rumah harus diciptakan senyaman mungkin.</p>
							</div>
							</p>
						</div>
						<div class="col1">
							<h3>Tipe Rumah</h3>
							<ul class="list2">
								<li><span class="color1">Rumah Kota</span><br>Rumah gandengan dengan penambahan tempat parkir di dalam bangunannya.</li>
								<li><span class="color1">Rumah Susun</span><br>Rumah yang fleksibel, yaitu mampu  menyesuaikan berbagai konfigurasi.</li>
								<li><span class="color1">Maisonet (Maisonette)</span><br>Tipe standar dari bangunan berkapasitas tinggi dan bertingkat rendah.</li>
							</ul>
						</div>
					</div>
				</article>
			</div>
		</div>
		<div class="main">
		</div>
		<script>
			$(window).load(function(){
				$('#slider')._TMS({
					banners:true,
					waitBannerAnimation:false,
					preset:'diagonalFade',
					easing:'easeOutQuad',
					pagination:true,
					duration:400,
					slideshow:8000,
					bannerShow:function(banner){
						banner.css({marginRight:-500}).stop().animate({marginRight:0}, 600)
					},
					bannerHide:function(banner){
						banner.stop().animate({marginRight:-500}, 600)
					}
					})
			})
		</script>
	</body>
</html>