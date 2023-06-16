<?php

    // je créé la fonction php qui va mettre en queue le css du parent puis le css de l'enfant
    function theme_enqueue_styles() {
        wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    }
    // j'execute la fontion via une fonction d'execution wordpress
    add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );