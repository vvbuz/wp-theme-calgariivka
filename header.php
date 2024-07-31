<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php
                                        wp_enqueue_scripts(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-v4-grid-only@1.0.0/dist/bootstrap-grid.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20,700,0,-25" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,100,0,0" />
    <?php wp_head(); ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <div class="container">
        <div id="container">
            <main id="content" role="main">