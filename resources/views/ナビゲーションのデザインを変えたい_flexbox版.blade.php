@extends('layout.master')

@section('content')
<body>
    <header>
        <div class="header-container">
            <a href="#"><h1 class="header-logo">シェアードオフィス NEST 505</h1></a>
            <a href="#" id="slidemenu-btn"><div class="header-navbtn"></div></a>
        </div>
    </header>
    <nav>
        <div class="nav-container" id="js-slidemenu">
            <ul class="globalnav">
                <li><a href="#">About</a></li>
                <li><a href="#">Price</a></li>
                <li><a href="#">Facilities</a></li>
                <li><a href="#">Access</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>
    <div class="main-contents">
        <div class="main-contents-container">
            <div class="keyvisual"><img src="images/keyvisual.jpg" alt=""></div>
            <p class="maincopy">シェアードオフィスNEST 505で、上がる効率、深まる知識、広がる仕事。</p>
        </div>
    </div>
    <footer>
        <div class="footer-container">
            <p class="copyright">©NEST 505</p>
        </div>
    </footer>
</body>
@endsection

@pushonce('css')
<style>

html {
	font-size: 16px;
}
@media screen and (min-width: 768px) {
	html {
		font-size: 14px;
	}
}
html * {
	box-sizing: border-box;
}
body {
	margin: 0;
	background: url(../images/bg.png);
	font-family: sans-serif;
}
/* ヘッダー */
header {
	position: relative;
	background: #000000;
}
.header-container {
	padding: 20px;
}
.header-logo {
	margin: 0;
	width: 100px;
	height: 22px;
	background-image: url(../images/logo.png);
	background-size: 100px 22px;
	background-repeat: no-repeat;
	text-indent: -9999px;
}
@media screen and (min-width: 768px) {
	/* ヘッダー */
	.header-container {
		padding: 30px 20px 10px 20px;
	}
	.header-logo {
		width: 200px;
		height: 44px;
		background-size: 200px 44px;
	}
}
.header-navbtn {
	display: block;
	position: absolute;
	top: 0;
	right: 0;
	z-index: 30;
	width: 62px;
	height: 62px;
	background-image: url(../images/navbtn.png);
	background-size: 62px 62px;
}
.header-navbtn:hover, .header-navbtn:active {
	background-color: #8bb15a;
}
@media screen and (min-width: 768px) {
	.header-navbtn {
		display: none;
	}
}

/* ナビゲーション */
nav {
	font-size: 0.78rem;
	background: #000000;
}
@media screen and (min-width: 768px) {
	nav {
		font-size: 1rem;
	}
}
.nav-container {
	position: absolute;
	top: 62px;
	right: 0;
	z-index: 20;
	margin: 0;
	padding: 0;
	width: 200px;
	background: #638a30;
	box-shadow: 0px 5px 5px  rgba(0,0,0,0.4);
}
.globalnav {
	list-style: none;
	margin: 0;
	padding: 0;
}
.globalnav li a {
	display: block;
	padding: 15px 20px;
	border-bottom: 1px solid #8bb15a;
	text-decoration: none;
	line-height: 100%;
	color: #ffffff;
}
.globalnav li a:hover,
.globalnav li a.current {
	background: #8bb15a;
	color: #ffffff;
}
@media screen and (min-width: 768px) {
	.nav-container {
		position: relative;
		top: 0;
		left: 0;
		padding: 0 20px 0 20px;
		width: 100%;
		background: none;
		box-shadow: none;
	}
	.globalnav {
		display: flex;
	}
	.globalnav li {
		flex: 0 0 20%;
	}
	.globalnav li a {
		padding: 10px 0;
		border-bottom: 8px solid #ffffff;
		text-align: center;
	}
	.globalnav li a:hover,
	.globalnav li a.current {
		border-bottom: 8px solid #7bae34;
	}
}

/* フッター */
footer { }
.footer-container {
	padding: 20px;
	border-radius: 0 0 10px 10px;
	background: #000000;
}
.copyright {
	margin: 0;
	font-size: 0.8rem;
	color: #ffffff;
}
/* メインコンテンツレイアウト部分 */
.main-contents { }
.main-contents-container {
	padding: 0 0 40px 0;
	background: #ffffff;
}
.keyvisual {
	font-size: 0;
}
.keyvisual img {
	width: 100%;
}
.maincopy {
	margin: 0;
	padding: 40px 20px 0 20px;
	text-align: center;
	font-size: 1.5rem;
}

/* ========== Javascript用CSS ========== */
/* ナビゲーションを最初は非表示。 */
#js-slidemenu {
	display: none;
}
/* パソコン向けではナビゲーションを常に表示 */
@media screen and (min-width: 768px) {
	#js-slidemenu {
		display: block !important;
	}
}
/* ナビゲーションが開いたときに画面を暗くする処理のためのCSS */
.js-slidemenu-effect {
	width: 100%;
	height: 100%;
	background: #000;
	opacity: 0.4;
	position: fixed;
	top: 0;
	left: 0;
	z-index: 10;
}
</style>
<script>
/**
 * dropdownコントロール
 */
 (function($){
	/* humburger menu */
	function removeMenu($shade){
		$shade
		.remove();
		$('#js-slidemenu').slideUp('fast');
	}
	$('#slidemenu-btn').on('click', function(e){
		e.preventDefault();
		var $shade = $('.js-slidemenu-effect')[0];
		if($shade === undefined) {
			$('<div>')
			.addClass('js-slidemenu-effect')
			.on('click', function(){
				removeMenu(this);
			})
			.appendTo($('body'));
			$('#js-slidemenu').slideDown('fast');
		} else {
			removeMenu($shade);
		}
	});
})(jQuery);
</script>
@endpushonce
