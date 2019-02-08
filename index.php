<!DOCTYPE html>
<html lang="fr-FR">
<?php
global $json,$json2,$a;
$test = file_get_contents("info.json");
 $json2=json_decode($test,true);
$test = file_get_contents("infor.json");
 $json=json_decode($test,true);
  if( isset($_POST['username']) &&  isset($_POST['id'])){ 
	$ch=$_POST['username'];
	$id=$_POST['id'];
    $json[0][$id]=strip_tags($ch);
$json2=array_values($json2);
			$new= json_encode($json);
			file_put_contents('infor.json',$new);
	}
if(isset($_POST['ch2']) && isset($_POST['key']) ) { 

	$ch=$_POST['ch2'];
     $ch=strip_tags($ch);
$champ1="name1";
	 $key=$_POST["key"];
	$json2[$key][$champ1]=$ch; 
echo $ch."value and, keeyy -->  ".$key; 
$json2=array_values($json2);
	$new= json_encode($json2);
	file_put_contents('info.json',$new);
 }  
if(isset($_POST['ch3']) && isset($_POST['key3']) && isset($_POST['id0'])  &&  isset($_POST['color'])) { 

	     $ch=$_POST['ch3']; 
	 $key=$_POST['key3'];
		$id0=$_POST['id0'];
		$co=$_POST['color'];
$ch=strip_tags($ch);
 $json2[$id0]['skills'][$key]['n']=$ch;
 $json2[$id0]['skills'][$key]['c']=$co;

echo $ch." value and key petit tab  ".$key." id grand tab  ".$id0;
$json2=array_values($json2);
	$new= json_encode($json2);
	file_put_contents('info.json',$new);
 }
if(isset($_POST['k1']) ) { 
$test = file_get_contents("info.json");
 $json2=json_decode($test,true);
$a=count($json2);
	$b=$_POST['k1'];
	$c="click her ";
	$d="50%";  $e="black";
$json2[$a]['name1']=$c;
$json2[$a]['skills'][0]['n']= "click her" ;
$json2[$a]['skills'][0]['p']= "50%";
$json2[$a]['skills'][0]['c']="black";
$json2=array_values($json2);
	$new= json_encode($json2);
	file_put_contents('info.json',$new);
 }
if(isset($_POST['d1']) ) { 
$test = file_get_contents("info.json");
 $json2=json_decode($test,true);
$y=$_POST['d1'];
 unset($json2[$y]);
$json2 = array_values($json2);  
$json2=array_values($json2);
	$new= json_encode($json2);  
	file_put_contents('info.json',$new);  
 }  
if(isset($_POST['a1']) ) { 
$test = file_get_contents("info.json");
 $json2=json_decode($test,true);
$a=$_POST['a1'];  
$b=$_POST['b1'];  
$c=count($json2[$a]['skills']);
$json2[$a]['skills'][$c]['n']="click her";
$json2[$a]['skills'][$c]['p']="50%";
$json2[$a]['skills'][$c]['c']="blue";
$json2=array_values($json2);
$new= json_encode($json2);  
file_put_contents('info.json',$new);  
}
if(isset($_POST['p1']) && isset($_POST['p1'])) { 
$test = file_get_contents("info.json");
 $json2=json_decode($test,true);
$a=$_POST['p1']; 
$b=$_POST['p2']; 
unset($json2[$a]['skills'][$b]);
echo $json2[$a]['skills'][$b];
$json2=array_values($json2);
$new=json_encode($json2);
file_put_contents('info.json',$new);
}
if(isset($_POST['co1']) && isset($_POST['co2']) && isset($_POST['color'])  ) { 
$a=$_POST['co1'];
$b=$_POST['co2'];
$c=$_POST['color'];
$test = file_get_contents("language.json");
 $json3=json_decode($test,true);
$json3[$b]['a1']= $a ;
$json3[$b]['c1']= $c ;
$json3=array_values($json3);
$new=json_encode($json3);
file_put_contents('language.json',$new);
}
if(isset($_POST['w1']) ) { 
$test = file_get_contents("language.json");
 $json3=json_decode($test,true);
$b=count($json3);
$a=$_POST['w1'];
echo $a."*************";
$json3[$b]['a1']= $a ;
$json3[$b]['c1']="blue";
$json3[$b]['p1']="80%";
$json3=array_values($json3);
$new=json_encode($json3);
file_put_contents('language.json',$new);
}
if(isset($_POST['w2']) ) { 
$test = file_get_contents("language.json");
 $json3=json_decode($test,true);
$d=$_POST['w2'];
unset($json3[$d]);
$json3=array_values($json3);
$new=json_encode($json3);
file_put_contents('language.json',$new);
}
			//iiiiiimmmmmmmmaaaaaaaaggggggggggggggggggggeeeeeessssss
			if(isset($_FILES['image']['name']))
{
//if no errors...
if(!$_FILES['image']['error'])
{
	$v=1;
//now is the time to modify the future file name and validate the file
$new_file_name =$_FILES['image']['name']; //rename file
if($_FILES['image']['size'] > (1024000 * 3 )) //can't be larger than (1 MB *3)
{
$v= 0;
$message = 'Oops! Your file\'s size is to large.';
}
//if the file has passed the test
if($v)
{
//move it to where we want it to be
move_uploaded_file($_FILES['image']['tmp_name'] , "images/".$new_file_name);
$message = 'Congratulations! Your file was accepted.';
}
}
//if there is an error...
else
{
//set that to be the returned message 
$message = 'Ooops! Your upload triggered the following error: '.$_FILES['image']['error'];
}
$json[0]['img']="http://127.0.0.1//cv_maker//images//".$_FILES['image']['name'];
// sjo
$new= json_encode($json);
	file_put_contents('infor.json',$new);
}
//*******************************************************************************************************************************************************************************************************************
 if( isset($_POST['nom']) ) {
	 
	$test = file_get_contents("inforjson.json");
$json = json_decode($test,true);
	$ch=$_POST['nom'];
	$key=$_POST['key'];
	$champ=$_POST['name'];
	 
 $json[$key]{$champ}=$ch;
	$new= json_encode($json);
	file_put_contents('inforjson.json',$new);
 }
 if( isset($_POST['nom1']) ) {
	$test = file_get_contents("inforjson.json");
$json = json_decode($test,true);
	$ch=$_POST['nom1'];
	$key=$_POST['key'];
	$key1=$_POST['key1'];
	$name=$_POST['name'];
	$champ="valeure";
	echo $key1;
	echo $champ;
	echo $key;
	echo $name;
	echo $ch;
	$json[$key1][$champ][$key][$name]=$ch;
	$new= json_encode($json);
	file_put_contents('inforjson.json',$new);
 }
 if( isset($_POST['nom2']) ) {
	$test = file_get_contents("inforjson.json");
$json = json_decode($test,true);      
	$ch=$_POST['nom2'];
	$key=$_POST['key'];
	$key1=$_POST['key1'];
	$key2=$_POST['key2'];
	$name=$_POST['name'];
	$champ="valeure";
	echo $key1;
	echo $champ;
	echo $key2;
	echo $name;
	echo $key;
	$json[$key1][$champ][$key2][$name][$key]=$ch;
	$new= json_encode($json);
	file_put_contents('inforjson.json',$new);
 }
 if( isset($_POST['moin']) ) { 
	$test = file_get_contents("inforjson.json");
$json = json_decode($test,true);
	$key=$_POST['key'];
	$key1=$_POST['key1'];
	$key2=$_POST['key2'];
	$champ="valeure";
	$name="article";
	echo $key1;
	echo $key2;
	echo $key;
	unset($json[$key1][$champ][$key2][$name][$key]);
	$new= json_encode($json);
	file_put_contents('inforjson.json',$new);
 }
  if( isset($_POST['moin1']) ) {
	$test = file_get_contents("inforjson.json");
$json = json_decode($test,true);
	//$ch=$_POST['nom1'];
	$key=$_POST['key'];
	$key1=$_POST['key1'];
	//$name=$_POST['name'];
	$champ="valeure";
	echo $key1;
	echo $champ;
	echo $key;
	//echo $name;
	//echo $ch;
	unset($json[$key1][$champ][$key]);
	$new= json_encode($json);
	file_put_contents('inforjson.json',$new);
 } 
 if( isset($_POST['moin3']) ) {
	$test = file_get_contents("inforjson.json");
$json = json_decode($test,true);
	$key=$_POST['key'];
	echo $key ;
	unset($json[$key]);
	$json= array_values($json);
	$new= json_encode($json);
	file_put_contents('inforjson.json',$new);
 }
		 ?>
<head>
		<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php  echo $json[0]["T1"];  ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="http://127.0.0.1/cv_maker\css\c1.css">
	<link rel="pingback" href="http://saklyayoub.tn/xmlrpc.php" />
	<link href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic&subset=latin,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
    	<!--[if lt IE 9]>
		<script src="http://saklyayoub.tn/wp-content/themes/cv/js/html5.js" type="text/javascript"></script>
	<![endif]-->	
		<meta name='robots' content='noindex,follow' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Mariem Soudeni &raquo; Flux" href="http://saklyayoub.tn/feed/" />
<link rel="alternate" type="application/rss+xml" title="Mariem Soudeni &raquo; Flux des commentaires" href="http://saklyayoub.tn/comments/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/saklyayoub.tn\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.9"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='prettyphoto-style-css'  href='http://saklyayoub.tn/wp-content/themes/cv/js/prettyphoto/css/prettyPhoto.css?ver=4.9.9' type='text/css' media='all' />
<link rel='stylesheet' id='mediaplayer-style-css'  href='http://saklyayoub.tn/wp-content/themes/cv/js/mediaplayer/mediaelementplayer.css?ver=4.9.9' type='text/css' media='all' />
<link rel='stylesheet' id='jquery_reject-style-css'  href='http://saklyayoub.tn/wp-content/themes/cv/js/jreject/css/jquery.reject.css?ver=4.9.9' type='text/css' media='all' />
<link rel='stylesheet' id='shift_cv-style-css'  href='http://saklyayoub.tn/wp-content/themes/cv/style.css?ver=4.9.9' type='text/css' media='all' />
<link rel='stylesheet' id='theme_dark-css'  href='http://saklyayoub.tn/wp-content/themes/cv/css/dark-theme.css?ver=4.9.9' type='text/css' media='all' />
<link rel='stylesheet' id='shortcodes-css'  href='http://saklyayoub.tn/wp-content/themes/cv/css/shortcodes.css?ver=4.9.9' type='text/css' media='all' />
<link rel='stylesheet' id='responsive-css'  href='http://saklyayoub.tn/wp-content/themes/cv/css/responsive.css?ver=4.9.9' type='text/css' media='all' />
<link rel='stylesheet' id='font_awesome-css'  href='http://saklyayoub.tn/wp-content/themes/cv/includes/font-awesome/css/font-awesome.min.css?ver=1.0' type='text/css' media='screen' />
<link rel='stylesheet' id='custom-style-css'  href='http://saklyayoub.tn/wp-content/themes/cv/css/custom.css?ver=4.9.9' type='text/css' media='all' />
<style id='custom-style-inline-css' type='text/css'>

	#blog_page_link,
	#blog_page_link .icon,
	#blog_page_link span.label,
	.colored td.cl1 { 
		background-color: #267ac8;
	}
	#profile_page_link,
	#profile_page_link .icon,
	#profile_page_link span.label,
	.colored td.cl2 {
		background-color: #019875;
	}
	.section_header.profile_section_header .section_title .section_name,
	.section_header.profile_section_header .section_title a span.icon {
		background-color: #019875;
	}
	#resume_link_download,
	#resume_link_download  span.label,
	#resume_link_download  span.icon {
		background: #019875;
	}
	.section_header .section_title.portfolio_section_title a span.icon,
	.colored td.cl4 {
		background-color: #980101;
	}    
	
	#mainpage_accordion_area .section_header.contact_section_header a span.icon,
	.colored td.cl5,
	.sc_contact_form .title:after {
		background-color: #815b97;
	}
	.section_header .section_title.resume_section_title a span.icon,
	.colored td.cl3,
	#resume_link,
	#resume_link span.label,
	#resume_link span.icon {
		background-color: #cb8d44;
	}
	.section_header .section_title.testi_section_title a span.icon {
		background-color: #C4D747;
	}
	.section_header .section_title a span.icon, 
	.section_header .section_title strong span.icon {
		background-color: #267ac8;
	}
	.blog_section .section_header .section_title .section_name {
		background-color: #267ac8;
	}
	.section_header.gallery .section_title strong span.section_name, 
	.section_header.gallery .section_title strong span.icon {
		background-color: #019875;
	}
	.section_header.status .section_title strong span.section_name, 
	.section_header.status .section_title strong span.icon {
		background-color: #ebb72c;
	}
	.section_header.audio .section_title strong span.section_name,
	.section_header.audio .section_title strong span.icon {
		background-color: #cb8d44;
	}
	.section_header.video .section_title strong span.section_name,
	.section_header.video .section_title strong span.icon {
		background-color: #980101;
	}
	.section_header.link .section_title strong span.section_name,
	.section_header.link .section_title strong span.icon {
		background-color: #815b97;
	}
	.section_header.quote .section_title strong span.section_name,
	.section_header.quote .section_title strong span.icon {
		background-color: #33cccc;
	}
	.section_header.quote .section_title strong span.section_name,
	.section_header.quote .section_title strong span.icon {
		background-color: #33cccc;
	}
	#scrollTo,
	#scrollTo .icon {
		background-color: #815b97;
	}

  body, button, input, select, textarea,
  .tp-caption {
   font-family: 'Lato', sans-serif;
  }
  
</style>
<script type='text/javascript' src='http://saklyayoub.tn/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://saklyayoub.tn/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<link rel='https://api.w.org/' href='http://saklyayoub.tn/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://saklyayoub.tn/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://saklyayoub.tn/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.9.9" />
   <script type="text/javascript">
   var _gaq = _gaq || [];
   _gaq.push(['_setAccount', 'UA-54626775-9']);
   _gaq.push(['_trackPageview']);
   (function() {
   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
   })();
   </script>
		<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
			</head>

<body class="home blog dark">
	<!--[if lt IE 8]>
	
		<div class="sc_infobox sc_infobox_style_error">
			It looks like you're using an old version of Internet Explorer. For the best WordPress experience, please <a href="http://microsoft.com">update your browser</a> or learn how to <a href="http://browsehappy.com">browse happy</a>!
		</div>
			<![endif]-->
			<form method="POST" action="index.php" enctype="multipart/form-data">
	<table class="colored">
		<tr>
			<td class="cl1"></td>
			<td class="cl2"></td>
			<td class="cl3"></td>
			<td class="cl4"></td>
			<td class="cl5"></td>
		</tr>
	</table>
	    <div id="page" class="hfeed site">
                <header id="header" class="site_header" role="banner">
							<div class="social_links">
					<ul>
												<li class="fb"><a target="_blank" href="https://www.facebook.com/ziedtuihri">Facebook</a></li><li class="lnkd"><a target="_blank" href="https://www.linkedin.com/in/sakly-ayoub-ba269391">Linkedin</a></li>																		<li class="skp"><a target="_blank" href="skype:saklyayoub@live.com" class="skp">Skype</a></li>																											
					</ul>
				</div>
			        </header>
	    <div id="main" >
	<div id="primary" class="content_area">
		<div id="content" class="site_content" role="main">
			<section id="profile" class="section profile_section first odd">
				<div class="section_header profile_section_header opened">
										<h2 class="section_title profile_section_title vis"><a href="#"><span class="icon icon-user"></span><span class="section_name ">Profil</span></a><span class="section_icon"></span></h2>
					<div id="profile_header">
					<script src="http://127.0.0.1/cv_maker/\js\post.js"> </script>					
                        <div id="profile_user">
               <div id="profile_photo">			   
			   <span id="img11" class="img" data-type="image"> 
			   
			   <input type="file" name="image" size="25" id="but2"  style="display: none;"/><button id="but1" style="display: none;" >envoyé</button>
			   
			   <img id="im" src=" <?php echo $json[0]['img'];  ?>"  /></span></div>
              <div id="profile_name_area">
                                <div id="profile_name">
                                                <h1 id="profile_title"><span class="firstname"><?php 
                                                                             echo $json[0]['T1'] ;?>
                                                                            </span> <span class="lastname"></span></span></h1><h4 id="profile_position">
																			<span id="T10" class="td" data-type="text" ><?php echo $json[0]['T10']; ?> </span></h4>
                                            </div>  
                            </div>
                        </div>                 
						<div id="profile_data">                                        
							<div class="profile_row" >													                       
							                <div class="profile_row" >
                                            <span class="th">Nom:</span><span class="td" id="T1" data-type="text"><?php 								
                                            echo $json[0]["T1"];
                                            ?></span>                                           
 						</div>						  
                                 <div class="profile_row" >
								<span class="th">  Date de naissance: </span><span class="td" id="T2" data-type="date"><?php 								
                                            echo $json[0]['T2'];
                                            ?></span>								
							     </div>
								 <div class="profile_row" >
								<span class="th"> Adresse: </span><span class="td" id="T7" data-type="text"><?php 								
                                             echo $json[0]['T7'];
                                            ?></span>								
							     </div>						
                                                        							<div class="profile_row">
								<span class="th">Téléphone:</span><span class="td" id="T3" data-type="tel"><?php 
										echo $json[0]["T3"];
                                            ?></span>
							</div>
                                                        							<div class="profile_row">
								<span class="th">Email:</span><span class="td" id="T4" data-type="email"><?php 
												echo $json[0]["T4"];
                                            ?></span>
							</div>
                                                        							<div class="profile_row">
								<span class="th">Site Internet:</span><span class="td" id="T5" data-type="url"><a href="http://mind.engineering"><?php 
												echo $json[0]["T5"];
                                            ?></a></span>
							</div>
                            						</div>
						
					</div>	
				</div>
				<div class="section_body profile_section_body">
					<div class="proile_body">
						<p class="td" id="T6" data-type="text"> <?php  echo $json[0]["T6"];  ?> </p>
					</div>			
				</div>
			</section>	
</form>
<form name="f">
<div id="mainpage_accordion_area">
            <section id="resume" class="section resume_section even">
                                                <div id="resume_buttons">
                <a href="http://saklyayoub.tn?prn=1" id="resume_link" target="_blank"><span class="label">Print</span><span class="icon-print icon"></span></a>
                                    </div>
                                <div class="section_header resume_section_header">
                    <h2 class="section_title resume_section_title"><a href="#"><span class="icon icon-align-left"></span><span class="section_name">CV</span></a><span class="section_icon"></span></h2>
                </div>
                <div class="section_body resume_section_body">
                    <div class="sidebar resume_sidebar">
					<script>
function fnct11() { 
jQuery(document).ready(function(){ 
    jQuery(".tr").click(function() {
	   c=jQuery(this).text();
        id1=jQuery(this).attr("data1");console.log(id1,"id   gran block ");
	jQuery(this).replaceWith('<input type="text"  id="12"  value="'+c+'" class="tst" />');   
    }); 
	jQuery("#12").blur(function() { 
		k=jQuery(this).val(); 
	jQuery(this).replaceWith('<span class="tr" data1="'+id1+'">' + k + '</span>');	
		jQuery.post(
            "index.php", 
            { 
                ch2 :k,
				key:id1,
            }, 
           function(data){
                jQuery(".tst").html(data);
           }); window.location.reload();
	}); });
	}
function fnct22(y) { 
jQuery(document).ready(function(){ 
    jQuery(".tr1").click(function() {
	   c=jQuery(this).text();  
        id1=jQuery(this).attr("data2");console.log(id1,"id and indice y tableau  le petit block ",y); 
			 co=jQuery(this).attr("data3");
	jQuery(this).replaceWith('<input type="text"  id="12"  value="'+c+'" class="tst" /> <input type="color" id="color1" value="'+co+'">');
    }); 
	jQuery("#12").blur(function() {
		k=jQuery(this).val(); 
		co=jQuery("#color1").val(); 
	jQuery(this).replaceWith('<span class="tr" data2="'+id1+'">' + k + '</span>');	
		jQuery.post(
            "index.php", 
            { 
                ch3 :k,
				key3 :id1,
				id0:y, 
				color:co,
            },  
           function(data){
                jQuery(".tst").html(data);
           });  window.location.reload();
	}); });
	}
function ajout(){	
jQuery(document).ready(function(){ 
				var name="click her";
				jQuery.post(
				"index.php", 
					{ 
				k1 :name, 
							});
		console.log(name); 			
});			
}
function del(y){
jQuery(document).ready(function(){ 
	jQuery.post(
	"index.php", 
	{ 
		d1 :y, 
					}); });
}
function rm(a,b){
jQuery(document).ready(function(){ 
	jQuery.post(
	"index.php", 
	{ 
		p1:a,
		p2:b,
					}); });
}
function add(a,b){
jQuery(document).ready(function(){ 
	jQuery.post(
	"index.php", 
	{ 
		a1:a,
		b1:b,
					});});
}
			jQuery(document).ready(function(){ 
							jQuery.getJSON("info.json", function(result){ 
										var y=0,x=0,aux1="<input type='submit' value='-' class='w3-button w3-xlarge w3-teal' id='b2' onclick='del("+y+")'>",aux2="<input type='submit' value='+'  class='w3-button w3-xlarge w3-black' id='b1'  onclick='ajout()'>";
					 jQuery.each(result, function(key, val){ 	if(y==0) var ch1=aux2; else ch1=aux1;		 console.log("y",y); 					
					 jQuery("#a1").append("<div onclick='fnct11()' ><h3 class='widget_title'  ><span class='tr' data1='"+y+"' >"+ val.name1 + "</span>"+ch1+"</h3> </div>"); 
							jQuery.each(val.skills, function(key2, value2) {  console.log("x",x);	
							jQuery("#a1").append("<div class='widget_inner style_1' onclick='fnct22("+y+")'><div class='skills_row odd first' ><span class='tr1' data3="+value2.c+"  data2='"+x+"' >"+ value2.n+ " </span><input type='submit' value='+' class='w3-button w3-xlarge w3-black' id='b11' onclick='add("+y+","+x+")'><input type='submit' value='-' class='w3-button w3-xlarge w3-teal' id='b22' onclick='rm("+y+","+x+")'><br><span class='progressbar'><span class='progress' style='background-color: "+value2.c+"; width:'"+value2.p+"';' rel='"+value2.p+"'><span class='value'> "+value2.p+"</span></span></span></div></div><br>");
								x++;	
									}); y++;  x=0 ; aux1="<input type='submit' value='-' class='w3-button w3-xlarge w3-teal' id='b2' onclick='del("+y+")'>";
															}); 
															});  
															});  
			</script>
<aside class="widget widget_skills" id="a1">

</aside>
<aside id="cv2" class="widget widget_skills"><h3 class="widget_title">COMMERCIAL &#038; MANAGEMENT</h3>			
		<div class="widget_inner style_2">
			<div class="skills_row odd first"><span class="legend" style="background-color:#0057A0;"></span><span class="caption">CIEL SAGE</span></div><div class="skills_row even"><span class="legend" style="background-color:#39D5FF;"></span><span class="caption">ZOHO</span></div><div class="skills_row odd"><span class="legend" style="background-color:#5EFAF7;"></span><span class="caption">ODOO</span></div><div class="skills_row even"><span class="legend" style="background-color:#39D5FF;"></span><span class="caption">MANTIS</span></div><div class="skills_row odd"><span class="legend" style="background-color:#009C41;"></span><span class="caption">AGILE SCRUM</span></div><div class="svg"><svg class="piechart" xmlns="http://www.w3.org/2000/svg"><path d="M66,66  L130,66  A64,64 0 0,1 73,130 z" fill="#0057A0"></path><path d="M66,66  L73,130  A64,64 0 0,1 6,89 z" fill="#39D5FF"></path><path d="M66,66  L6,89  A64,64 0 0,1 22,20 z" fill="#5EFAF7"></path><path d="M66,66  L22,20  A64,64 0 0,1 99,11 z" fill="#39D5FF"></path><path d="M66,66  L99,11  A64,64 0 0,1 130,66 z" fill="#009C41"></path><circle cx="66" cy="66" r="40" fill="#ffffff"></circle></svg></div>		</div>
</aside><aside id="cvv" class="widget widget_skills"><h2 class="widget_title">LANGUES
		<input type='submit' value='+'  class='w3-button w3-xlarge w3-black' id='c1' onclick="chang2()">
</h2>	
<div id="ici2" class="widget_inner style_3">
<script>
function chang1(){
jQuery(document).ready(function(){ 
    jQuery(".caption").click(function() {
	   c=jQuery(this).text();  
        id1=jQuery(this).attr("data2");
	jQuery(this).replaceWith('<input type="text"  id="color1"  value="'+c+'" class="tst" /> <input type="color" id="color2" >'); console.log(id1,"the key ");
    }); 
	jQuery("#color1").blur(function() {
		k=jQuery(this).val(); 
		co=jQuery("#color2").val(); 
	jQuery(this).replaceWith('<span class="caption" data2="'+id1+'">' + k + '</span>');	
		jQuery.post(
            "index.php", 
            { 
               co1 :k,
				co2:id1,
				color:co,
            },  
           function(data){
                jQuery(".tst").html(data);
           }); location.reload(); 
	}); });
}
function chang2(){
jQuery(document).ready(function(){ 
	jQuery.post(
	"index.php", 
	{ 
		w1 :"click her", 
					}); });
}
function del2(w){
jQuery(document).ready(function(){ 
	jQuery.post(
	"index.php", 
	{ 
		w2 :w, 
					}); });
}
jQuery(document).ready(function(){
jQuery.getJSON("language.json",function(result){ 
jQuery.each(result,function(k,v){ 
jQuery("#ici2").append('<input type="submit" value="-" class="w3-button w3-xlarge w3-teal" id="c2" onclick="del2('+k+')" > <div class="skills_row odd first" onclick="chang1()"><span data2="'+k+'" class="caption" >'+v.a1+'</span><span class="progressbar"><span class="progress" style="background-color:'+v.c1+';" rel="'+v.p1+'"></span></span></div>');
});
});
});
</script>
</div>

</aside>                    </div>
</form>
                     <div class="wrapper resume_wrapper">
					<script>
function fnct1(n) {
    jQuery(".tr").click(function() {
	   c=jQuery(this).text();
	  id1=jQuery(this).attr("id");
	jQuery(this).replaceWith('<input type="text"  id="12"value='+c+' class="tst" />');
    });	
	jQuery("#12").blur(function() {
		k=jQuery(this).val();		
	jQuery(this).replaceWith('<span class="tr" id='+id1+' >' + k + '</span>');	
		jQuery.post(
            "test.php", 
            {
                nom : jQuery(this).val(),
				key:id1,
				name:n,
            },
           function(data){
                jQuery(".tst").html(data);
           });
		   		   window.location.reload();

	       });
	}
	function fnct2(n) {
    jQuery(".tr").click(function()   {
	   c=jQuery(this).text();
	  id1=jQuery(this).attr("id");
	  tab=jQuery(this).attr("data");
	jQuery(this).replaceWith('<input type="text"  id="12" value='+c+' class="tst" />');
    });	

	jQuery("#12").blur(function() {
		k=jQuery(this).val();
		jQuery(this).replaceWith('<span class="tr" id='+id1+'>' + k + '</span>');	
		jQuery.post(
            "test.php", 
            {
                nom1 : jQuery(this).val(),
				key:id1,
				key1:tab,
				name:n,
            },
           function(data){
                jQuery(".tst").html(data);
           });
		  
	
		
	  });

	
	}
	function fnct3(n) {
    jQuery(".tr").click(function()   {
	   c=jQuery(this).text();
	  id1=jQuery(this).attr("id");
	  tab=jQuery(this).attr("data");
	  console.log(tab);
	  tab2=jQuery(this).attr("data2");
	  console.log(tab2);
	 	   

	 
	jQuery(this).replaceWith('<input type="text"  id="12"value='+c+' class="tst" />');
    });	
	jQuery("#12").blur(function() {
		k=jQuery(this).val();
		jQuery(this).replaceWith('<span class="tr" id='+id1+'>' + k + '</span>');	
		 
		jQuery.post(
            "test.php", 
            {
                nom2 : jQuery(this).val(),
				key:id1,
				key1:tab,
				key2:tab2,
				name:n,
            },
           function(data){
                jQuery(".tst").html(data);
           });
		   

	});
	}
	/*function fnct(n) {
    jQuery(".tr").click(function()   {
	   c=jQuery(this).text();
	  id1=jQuery(this).attr("id");
	  tab=jQuery(this).attr("data");
	  console.log(tab);
	  tab2=jQuery(this).attr("data2");
	  console.log(tab2);
	jQuery(this).replaceWith('<input type="text"  id="12" value='+c+' class="tst" />');
    });	
	jQuery("#12").blur(function() {
		k=jQuery(this).val();
		jQuery(this).replaceWith('<span class="tr" id='+id1+'>' + k + '</span>');	
		 
		jQuery.post(
            "test.php", 
            {
                nom2 : jQuery(this).val(),
				key:id1,
				key1:tab,
				key2:tab2,
				name:n,
            },
           function(data){
                jQuery(".tst").html(data);
           });
		   

	});
	}
*/
function fnctli (e,a,b)
{ ch=".p_"+a+"_"+b;


	jQuery(ch).append("<div class='post_body resume_post_body' onclick='fnct3(n3,l+1)' ><li class='tr'id="+e+" data="+b+" data2="+a+" >tapez un autre ligne </li></div>");
	
}

function fnctmoinli (i,j)
{id1=jQuery(".m").attr("id");
console.log(id1);
ch="moins";
jQuery.post(
            "test.php", 
            {
               // nom2 : jQuery(this).val(),
				moin:ch,
				key:id1,
				key1:i,
				key2:j,
				
            },
           function(data){
                jQuery(".tst").html(data);
           });	
}


function fnctmoinbloc1 (key)
{id1=jQuery(".m1").attr("id");
console.log(id1);
ch="moins";
jQuery.post(
            "test.php", 
            {
               // nom2 : jQuery(this).val(),
				moin1:ch,
				key:id1,
				key1:key,
			
				
            },
           function(data){
                jQuery(".tst").html(data);
           });	
}

function fnctmoinbloc2 (key)
{
id1=jQuery(".m2").attr("id");
ch="moins";
jQuery.post(
            "test.php", 
            {
              moin3:ch,
				
				key:id1,
			
			
				
            },
           function(data){
                jQuery(".tst").html(data);
           });	
}



function fnctbloc2 (a,b,c,d,e)
{ch2= ".d_"+a+"_"+b;
ch=".e_"+d ;


a=a+2;
jQuery(ch2).append("<div class='post_header resume_post_header' onclick=fnct2(n2)><div class='resume_period'><input type='button' value='+' id='B1' onclick='fnctbloc2("+b+")' style='background-color: #666666; float:right'><span class='tr'>la date de : </span><span class='tr'>- la date jusqu'a :</span><input type='button' value='-' style='background-color: #808080; float:right'></div><h4 class='post_title'><span class='post_title_icon' style='background-color: #3eb337'></span><span id="+a+" data="+c+" class='tr'>nom du societe</h4><h5 class='post_subtitle'></h5></div>");
 jQuery(ch2).append("<div class='post_body resume_post_body' onclick='fnct2(n4)'><span class='tr' id="+a+" data="+c+">tapez le role </div><p>Ma mission était de :</p>");

jQuery(ch2).append("<div class='post_body resume_post_body' onclick='fnct3(n3)' ><li class='tr'id="+0+" data="+c+" data2="+a+" onclick='fnct3(n3)'   >tapez un ligne </li></div>");
	
}




function fnctbloc1 (lo)
{//ch2= ".d_"+a+"_"+b;
//ch=".e_"+d ;

 jQuery("#ici").append("<div class='category_header resume_category_header' onclick='fnct1(n1)' ><h3 class='category_title' style='background: #373737'><span class='category_title_icon' style='background-color:#3eb337'></span><span class='tr' id="+lo+">tapez le nom de cet article <input type='button' value='+'id='B1' onclick='fnctbloc1()' style='background-color: #666666; float:right'><input type='button' value='-' style='background-color: #808080; float:right'></span></h3></div>");

jQuery("#ici").append("<div class='post_header resume_post_header' onclick='fnct2(n2)'><div class='resume_period'><input type='button' value='+' id='B1' onclick='fnctbloc2()' style='background-color: #666666; float:right'><span class='tr'>la date de : </span><span class='tr'>- la date jusqu'a :</span><input type='button' value='-' style='background-color: #808080; float:right'></div><h4 class='post_title'><span class='post_title_icon' style='background-color: #3eb337'></span><span id="+0+" data="+lo+" class='tr' onclick='fnct2(n2)' >nom du societe</h4><h5 class='post_subtitle'></h5></div>");
 jQuery("#ici").append("<div class='post_body resume_post_body' onclick='fnct2(n4)'><span class='tr' id="+0+" data="+lo+">tapez le role </div><p>Ma mission était de :</p>");

jQuery("#ici").append("<div class='post_body resume_post_body' onclick='fnct3(n3)' ><li class='tr'id="+0+" data="+lo+" data2="+0+" onclick='fnct3(n3)'   >tapez un ligne </li></div>");
	
}




	
	jQuery(document).ready(function(){
       
          jQuery.getJSON("inforjson.json", function(result){
			i=-1;
			
	             jQuery.each(result, function(key, value) {
					 lo=jQuery(result).size();
					 console.log(lo);
					 var className3 = ".e_"+key ;
								 if(t!=0)
								jQuery(className3).append("</div>");
							  jQuery("#ici").append("<div  class='e_"+key+"'>");

						   n1="name1";
						   var c = key;
	                       jQuery(className3).append("<div class='category_header resume_category_header' onclick='fnct1(n1)' ><h3 class='category_title' style='background: #373737'><span class='category_title_icon' style='background-color:#3eb337'></span><span class='tr' id="+key+">"+ value.name1+"<input type='button' value='+'id='B1' onclick='fnctbloc1(lo)' style='background-color: #666666; float:right'><div class='m2' id="+key+" ><input type='button' value='-' onclick='fnctmoinbloc2()'style='background-color: #808080; float:right'></div></span></h3></div>");
	                       i=i+1;
						   j=-1;
						   var t=0;
						   	
   
	             jQuery.each(value.valeure, function(key2, value2) {
					 var className2 = ".d_"+key2+"_"+c;
								 if(t!=0)
								jQuery(className2).append("</div>");

											n2="name";
											 n4="role";
											 n6="date1";
											j=j+1;	

											 var className = ".p_"+key2+"_"+c;
											 
											 if(t!=0)
										jQuery(className).append("</ul>");
									     jQuery(className3).append("<div  class='d_"+key2+"_"+c+"'>");

                                           jQuery(className2).append("<div class='post_header resume_post_header' ><div class='resume_period'><span class='tr' onclick=fnct2(n6)>"+value2.date1+"</span><span class='tr'>-"+value2.date2+"</span></div><h4 class='post_title'><span class='post_title_icon' style='background-color: #3eb337'></span><div onclick='fnct2(n2)'><span id="+key2+" data="+i+" class='tr'>"+ value2.name+"</span></div></h4><h5 class='post_subtitle'></h5></div>");
											 jQuery(className2).append("<div class='post_body resume_post_body' onclick='fnct2(n4)'><span class='tr' id="+key2+" data="+i+">"+ value2.role+"</div><p>Ma mission était de :</p>");

											jQuery(className2).append("<ul  class='p_"+key2+"_"+c+"'>");
                                            taille=jQuery(value2.article).size();
											
	   	            jQuery.each(value2.article, function(key3, value3) {
						t++;
						                                            console.log( taille=jQuery(value2.article).size());

						                     n3="article";
                                                                                       jQuery(className).append("<div class='post_body resume_post_body' onclick='fnct3(n3,l)'><li class='tr' id="+key3+" data="+i+" data2="+j+">"+ value3+"</div>");

										   // jQuery(className).append("<div class='l' onclick='fnct3(n3)' ><li  onclick='fnct3(n3)' class= 'l' id="+key3+" data="+i+" data2="+j+">"+ value3+" </div>");
                                            jQuery(className).append("<div class='m' id="+key3+"><input type='button' value='-' style='background-color: #808080;  float:right'  onclick='fnctmoinli("+i+","+j+")'></div>");

														l=key3;
                                                       //  console.log(l);
														 
			            	 });
							 
							
							              jQuery(className).before("<div ><input type='button' value='+' id='B1'   onclick='fnctli("+taille+","+key2+","+c+")' style='background-color: #666666; float:right'></div>");
									   		jQuery(className2).before("<input type='button' value='+' id='B2' onclick='fnctbloc2("+key2+","+c+","+i+","+key+","+key2+")' style='background-color: #666666; float:right'><div class='m1' id="+key2+" ><input type='button' value='-'  onclick='fnctmoinbloc1("+key+")' style='background-color: #808080; float:right'></div>");

			                                                           	 //jQuery("#ici").append("<br>");
		                               });

	});
	});
   
	
   
   	
	})											 </script>	
					
			<a class="tr">
	<input type='button' value='+' id='B1' style='background-color: #666666; float:right'></a>		                          
 <div id="ici" ></div>
	
	</script><!-- *******************************************************************************************************************************************************************************  -->	


<!-- .section_body  //****************************************************************************************************************************************************** -->
            </section> <!-- #resume -->

			<section id="contact" class="section contact_section even">
				<div class="section_header contact_section_header">
					<h2 class="section_title contact_section_title"><a href="#"><span class="icon icon-envelope-alt"></span><span class="section_name">Contacts</span></a><span class="section_icon"></span></h2>
				</div>
				<div class="section_body contact_section_body">
										                	<div class="sidebar contact_sidebar">
						                                                                    </div>
					<div class="contact_form">
                    	<div class="contact_form_data">
							
			<div class="sc_contact_form">
				<h3 class="title">RESTONS EN CONTACT</h3>
				<form method="post" action="http://saklyayoub.tn/wp-admin/admin-ajax.php">
					<div class="field">
						<label for="sc_contact_form_username" class="required">Nom</label>
						<input type="text" id="sc_contact_form_username" name="username">
                    </div>
					<div class="field">
						<label for="sc_contact_form_email" class="required">Email</label>
						<input type="text" id="sc_contact_form_email" name="email">
                    </div>
					<div class="field message">
						<label for="sc_contact_form_message" class="required">Votre message</label>
						<textarea id="sc_contact_form_message" name="message"></textarea>
                    </div>
					<div class="button">
						<a href="#" class="enter"><span>Soumettre</span></a>
                    </div>
				</form>
				<div class="result sc_infobox"></div>
				<script type="text/javascript">
					jQuery(document).ready(function() {
						jQuery(".sc_contact_form .enter").click(function(e){
							userSubmitForm();
							e.preventDefault();
							return false;
						});
					});
					function userSubmitForm(){
						
						var error = formValidate(jQuery(".sc_contact_form form"), {
							error_message_show: true,
							error_message_time: 5000,
							error_message_class: "sc_infobox sc_infobox_style_error",
							error_fields_class: "error_fields_class",
							exit_after_first_error: false,
							rules: [
								{
									field: "username",
									min_length: { value: 1,	 message: empt },
									max_length: { value: 160, message: to_lng}
								},
								{
									field: "email",
									min_length: { value: 7,	 message: empt_mail },
									max_length: { value: 60, message: to_lng_mail},
									mask: { value: "^([a-zA-Z0-9_\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-zA-Z0-9_\-]+(\\.[a-zA-Z0-9_\-]+)*\\.[a-zA-Z]{2,6}$", message: incor}
								},
								{
									field: "message",
									min_length: { value: 1,  message: mes_empt },
									max_length: { value: 1600, message: to_lng_mes}
								}
							]
						});
						if (!error) {
							var user_name  = jQuery(".sc_contact_form #sc_contact_form_username").val();
							var user_email = jQuery(".sc_contact_form #sc_contact_form_email").val();
							var user_site  = jQuery(".sc_contact_form #sc_contact_form_site").val();
							var user_msg   = jQuery(".sc_contact_form #sc_contact_form_message").val();
							var data = {
								action: "submit_contact_form",
								nonce: "a7e30ce58f",
								user_name: user_name,
								user_email: user_email,
								user_site: user_site,
								user_msg: user_msg
							};
							jQuery.post("http://saklyayoub.tn/wp-admin/admin-ajax.php", data, userSubmitFormResponse, "text");
						}
					}
					
					function userSubmitFormResponse(response) {
						var rez = JSON.parse(response);
						jQuery(".sc_contact_form .result")
							.toggleClass("sc_infobox_style_error", false)
							.toggleClass("sc_infobox_style_success", false);
						if (rez.error == "") {
							jQuery(".sc_contact_form .result").addClass("sc_infobox_style_success").html("Your message has been sent.");
							setTimeout("jQuery('.sc_contact_form .result').fadeOut(); jQuery('.sc_contact_form form').get(0).reset();", 3000);
						} else {
							jQuery(".sc_contact_form .result").addClass("sc_infobox_style_error").html("Transmit failed! " + rez.error);
						}
						jQuery(".sc_contact_form .result").fadeIn();
					}
				</script>
			</div>
	                        </div>
                    </div>
									</div> <!-- .section_body -->
			</section> <!-- #contact -->
</div> <!-- #mainpage_accordion_area -->

		</div><!-- #content -->
	</div><!-- #primary -->

    </div><!-- #main -->
	
	<footer id="footer" class="site_footer" role="contentinfo">
		<div class="footer_copyright">
					</div>
	</footer>

</div><!-- #page -->

<link rel='stylesheet' id='widget-skills-css'  href='http://saklyayoub.tn/wp-content/themes/cv/widgets/skills/widget-skills.css?ver=4.9.9' type='text/css' media='all' />
<script type='text/javascript' src='http://saklyayoub.tn/wp-content/themes/cv/js/jquery.tools.custom.js?ver=1.2.6'></script>
<script type='text/javascript' src='http://saklyayoub.tn/wp-content/themes/cv/js/jquerycookie.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://saklyayoub.tn/wp-content/themes/cv/js/skip-link-focus-fix.js?ver=20130115'></script>
<script type='text/javascript' src='http://saklyayoub.tn/wp-content/themes/cv/js/jquery.flexslider.min.js?ver=2.1'></script>
<script type='text/javascript' src='http://saklyayoub.tn/wp-content/themes/cv/js/prettyphoto/jquery.prettyPhoto.js?ver=3.1.5'></script>
<script type='text/javascript' src='http://saklyayoub.tn/wp-content/themes/cv/js/mediaplayer/mediaelement-and-player.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://saklyayoub.tn/wp-content/themes/cv/js/jreject/jquery.reject.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://saklyayoub.tn/wp-content/themes/cv/js/jquery.mobilemenu.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://saklyayoub.tn/wp-content/themes/cv/js/jquery.easing.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://saklyayoub.tn/wp-content/themes/cv/js/_utils.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://saklyayoub.tn/wp-content/themes/cv/js/_front.js?ver=1.0.0'></script>
<script type='text/javascript' src='http://saklyayoub.tn/wp-includes/js/wp-embed.min.js?ver=4.9.9'></script>
<a href="#" id="toTop"></a>
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery.reject({
			reject : {
				all: false, // Nothing blocked
				msie5: true, msie6: true, msie7: true // Covers MSIE 5-7
				/*
				 * Possibilities are endless...
				 *
				 * // MSIE Flags (Global, 5-8)
				 * msie, msie5, msie6, msie7, msie8,
				 * // Firefox Flags (Global, 1-3)
				 * firefox, firefox1, firefox2, firefox3,
				 * // Konqueror Flags (Global, 1-3)
				 * konqueror, konqueror1, konqueror2, konqueror3,
				 * // Chrome Flags (Global, 1-4)
				 * chrome, chrome1, chrome2, chrome3, chrome4,
				 * // Safari Flags (Global, 1-4)
				 * safari, safari2, safari3, safari4,
				 * // Opera Flags (Global, 7-10)
				 * opera, opera7, opera8, opera9, opera10,
				 * // Rendering Engines (Gecko, Webkit, Trident, KHTML, Presto)
				 * gecko, webkit, trident, khtml, presto,
				 * // Operating Systems (Win, Mac, Linux, Solaris, iPhone)
				 * win, mac, linux, solaris, iphone,
				 * unknown // Unknown covers everything else
				 */
			},
            imagePath: 'http://saklyayoub.tn/wp-content/themes/cv/js/jreject/images/',
            header: 'Your browser is out of date', // Header Text
            paragraph1: 'You are currently using an unsupported browser', // Paragraph 1
            paragraph2: 'Please install one of the many optional browsers below to proceed',
            closeMessage: 'Close this window at your own demise!' // Message below close window link
        });
    });
        empt = 'Name field can not be empty';
        to_lng = 'Too long name field';
        to_lng = 'Too long name field';
        empt_mail = 'Too short (or empty) email address';
        to_lng_mail = 'Too long email address';
        incor = 'Incorrect email address';
        mes_empt = 'message can not be empty';
        to_lng_mes = 'Too long message';
                init_ind = 0        </script>
</body>
</html>