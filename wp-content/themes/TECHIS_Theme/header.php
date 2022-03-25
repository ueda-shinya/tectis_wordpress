<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
	<?php wp_head(); ?>
</head>
<body>
<header>
	<!--インナー-->
	<div class="header__inner">
		<!--ロゴ画像-->
		<a href="<?php bloginfo('url'); ?>">
			<img class="header__logo" src="<?php bloginfo('template_url'); ?>/img/logo.png">
		</a>
		<!--ナビ欄-->
		<div id="nav" class="header__navgroup">
			<!--ナビ-->
			<div class="header__navitem"><a href="<?php bloginfo('url'); ?>#about">About</a></div>
			<div class="header__navitem"><a href="<?php bloginfo('url'); ?>#service">Service</a></div>
			<div class="header__navitem"><a href="<?php bloginfo('url'); ?>#news">News</a></div>
			<div class="header__navitem header__contact"><i class="fas fa-file-signature"></i>Contact<a class="a__btn" href="<?php bloginfo('url'); ?>/contact"></a></div>
		</div>
		<!--モーダル-->
		<div id="hamburger__modal" class="hamburger__modal"></div>
		<!--ハンバーガーメニューボタン-->
		<div id="hamburger__btn" class="hamburger__btn"><i class="fas fa-bars"></i></div>
	</div>
	<script>
		var lastInnerWidth = window.innerWidth; //window.innerWidthで現在の画面幅を取得
		var nav = document.getElementById('nav');
		if (lastInnerWidth <= 480) { // 画面幅480px以下の場合
			nav.classList.add('hamburger'); // クラス「hamburger」を追加
			nav.style.display = "none";
		}
		// 横幅が変わったとき実行される関数
		window.addEventListener("resize", function() {
			// 現在と前回の横幅が違う場合だけ実行
			if (lastInnerWidth != window.innerWidth) {
				// 横幅を記録しておく
				lastInnerWidth = window.innerWidth;
				if (lastInnerWidth <= 480) { // 画面幅480px以下の場合
					if (!(nav.classList.contains('hamburger'))) { //クラス「hamburger」がない場合
						nav.classList.add('hamburger'); // クラス「hamburger」を追加
						nav.style.display = "none"; //←追加
					}
				} else { // 画面幅481px以上の場合
					nav.classList.remove('hamburger'); //クラス「hamburger」を削除
					document.getElementById('hamburger__modal').style.display = "none";//←追加
					nav.style.display = "flex";//←追加
				}
			}
		});
		//ハンバーガーメニューボタンをクリックしたときに実行される関数
		document.getElementById('hamburger__btn').addEventListener('click', function() {
			//ナビ一覧とモーダルを表示
			nav.style.display = "block";
			document.getElementById('hamburger__modal').style.display = "block";
		});
		//ハンバーガーメニューが表示されてるときに、モーダルがクリックされると実行される関数
		document.getElementById('hamburger__modal').addEventListener('click', function() {
			//ナビ一覧とモーダルを非表示
			nav.style.display = "none";
			document.getElementById('hamburger__modal').style.display = "none";
		});
	</script>
</header>