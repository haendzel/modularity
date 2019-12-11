<!DOCTYPE html>
<html lang="en">
<head>
<?php wp_head(); ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php bloginfo('name'); ?></title>
</head>
<body>

<div class="container">
    
    <header> <!-- HEADER NAV -->
        <a href="#" class="logo"><img src="<?php echo get_field('logo_nav'); ?>"></a>
        <ul data-scroll-header>
            <li><a data-scroll href="#product">Product</a></li>
            <li><a data-scroll href="#partners">Partners</a></li>
            <li><a data-scroll href="#features">Features</a></li>
            <li><a data-scroll href="#team">Team</a></li>
            <li><a data-scroll href="#about">About us</a></li>
            <li><a data-scroll href="#contact">Contact</a></li>
        </ul>
    </header>