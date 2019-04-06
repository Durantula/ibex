<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="At Help@Hand Aged Care Placements our passion is to help others by 
managing the entire process. With our assistance and experience we can substantially reduce the 
time and work load involved."/>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119196681-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-119196681-1');
</script>

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/icon.png">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/simpletextrotator.css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/app.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,300,500,700,900" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400,600,700,900" rel="stylesheet">

<!-- Owl Carousel -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/owlcarousel/owl.carousel.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/owlcarousel/owl.theme.default.min.css">
<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,700" rel="stylesheet">

<?php wp_head(); ?>
</head>

