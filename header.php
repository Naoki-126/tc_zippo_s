<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tc_zippo_s
 */

?>
<!DOCTYPE html>
<html lang="ja" prefix="og: http://ogp.me/ns#">
<!-- OGP宣言 -->

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="format-detection" content="telephone=no"><!-- 電話のリンクをしない設定 -->
		<meta property="og:title" content="Zippoマニア"><!-- OGPタイトル -->
		<meta property="og:type" content="website">
		<meta property="og:url" content=""><!-- OGPサイトURL -->
		<meta property="og:image" content=""><!-- OGPサムネイル -->
		<meta property="og:site_name" content="Zippoマニア"><!-- OGPサイトネーム -->
		<meta property="og:description" content=""><!-- OGPサイトの概要欄 -->
		<meta name="twitter:card" content="summary_large_image"><!-- OGP Twitterカード -->
		<meta name="twitter:site" content="" /><!-- OGP Twitter site -->
		<!-- GoogleFonts  Noto Sans Japanese -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
		<!-- wow.js -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>new WOW().init();</script>
		<?php wp_head(); ?>
	</head>

	<body>
		<header class="l-header">
			<div class="l-header__nav p-header">
				<div class="l-header__left">
					<h1>
						<a href="#" class="p-header__logo">
							<img src="<?php echo get_template_directory_uri(); ?>/img/header_logo 1.png" alt="header_logo">
						</a>
					</h1>
				</div>
				<div class="l-header__right">
					<a href="#contact">
						<div class="p-header__contact">
							<div class="p-header__text">今すぐWEBで申し込む</div>
						</div>
					</a>
				</div>
			</div>
		</header>
