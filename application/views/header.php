<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="ms" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="ms" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="ms" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="text/html;">
        <title>
        <?php if(isset($meta_title) && !empty($meta_title)) echo $meta_title; else echo "Kuala Lumpur PHP Web Application Developer - AiCS Businesses"; ?>
        </title>
        <meta name="keywords" content="web developer, kl web developer, web application developer, web system developer, ecommerce, website developer, kuala lumpur developer">
        <meta name="description" content="<?php if(isset($meta_description) && !empty($meta_description)) echo $meta_description; else echo "We create web application for your business. come!"; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="canonical" href="<?php echo current_url(); ?>">
        <?php echo link_tag('inc/css/bootstrap.min.css'); ?>
    </head>
    <body>