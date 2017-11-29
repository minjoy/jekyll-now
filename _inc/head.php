<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="naver-site-verification" content="6507786cf1c5b488abe155d7a1f58e1f485e767d"/>
	<meta http-equiv="Content-Script-Type" content="text/javascript">
	<meta http-equiv="Content-Style-Type" content="text/css">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<?if($_cfg['function_list']['social_share']){?>
	<meta property="fb:app_id" content="" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?=get_text($share_data['share_title'])?>" />
	<meta property="og:url" content="http://<?=$_SERVER['SERVER_NAME']?><?=$_SERVER['REQUEST_URI']?>" />
	<meta property="og:description" content="<?=get_text($share_data['share_description'])?>" />
	<meta property="og:image" content="<?=$share_data['share_image']?>" >
	<?}?>
	<meta name="description" content="<?=$_cfg['site_desc']?>">
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">

	<title><?=$_browser_titles?><?=$_cfg['site_name']?></title>
	<link rel="stylesheet" type="text/css" href="<?=$_cfg['css_dir']?>/web/layout.css" />
	<link rel="stylesheet" type="text/css" href="<?=$_cfg['css_dir']?>/jquery-ui.css" />
	<link rel="stylesheet" type="text/css" href="<?=$_cfg['css_dir']?>/animate.css" />
	<?php if ($_cfg['editor_dir'] == "/froala_editor"){?>
	<link href="/froala_editor/css/froala_style.min.css" rel="stylesheet" type="text/css">
	<link href="/froala_editor/css/froala_content.min.css" rel="stylesheet" type="text/css">
	<?}?>

	<script type="text/javascript" src="<?=$_cfg['js_dir']?>/jquery-2.1.0.min.js"></script>
	<script type="text/javascript" src="<?=$_cfg['js_dir']?>/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?=$_cfg['js_dir']?>/common.js"></script>
	<script type="text/javascript" src="<?=$_cfg['js_dir']?>/jquery.cookie.js"></script>
	<script type="text/javascript" src="<?=$_cfg['js_dir']?>/popup.js"></script>
	<script type="text/javascript" src="<?=$_cfg['js_dir']?>/jquery-ui.js"></script>
	<script type="text/javascript" src="<?=$_cfg['js_dir']?>/jquery.blockUI.js"></script>

	<script type="text/javascript" src="<?=$_cfg['js_dir']?>/web/modernizr.custom.js"></script>
	<script type="text/javascript" src="<?=$_cfg['js_dir']?>/web/common.web.js"></script>
	<!--[if lte IE 8]>
		<script type="text/javascript" src="<?=$_cfg['js_dir']?>/web/html5.js"></script>
		<script type="text/javascript" src="<?=$_cfg['js_dir']?>/web/selectivizr-min.js"></script>
		<script type="text/javascript" src="<?=$_cfg['js_dir']?>/web/placeholders.min.js"></script>
	<![endif]-->

	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript">
	<!--
	// 링크, 이미지 클릭시 점선 없애기
	function noLine(){
	if(event.srcElement.tagName=="A"||event.srcElement.tagName=="IMG") document.body.focus();
	}
	document.onfocusin=noLine;
	-->
	</script>
	<script type="text/javascript">
	var org_user_agent = '<?=$org_user_agent?>';
	var user_agent = '<?=$user_agent?>';
	var user_br = '<?=$user_br?>';
	</script>
</head>
<body class="<?=$page_name?>">
<?if($_cfg['function_list']['social_login'] && $_cfg['function_list']['social_login_facebook']){?>
<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '<?=$_cfg['function_list']['social_login_facebook_code']?>',
      xfbml      : true,
      version    : 'v2.7'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/ko_KR/sdk.js#xfbml=1&version=v2.7";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<?}?>