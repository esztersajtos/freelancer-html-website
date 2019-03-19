<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cegesnyelvtanfolyam
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
<!-- Site Properties -->
    <title>Homepage - Semantic</title>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/semantic/dist/components/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/semantic/dist/components/site.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/semantic/dist/components/form.css">

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/semantic/dist/components/container.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/semantic/dist/components/grid.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/semantic/dist/components/header.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/semantic/dist/components/image.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/semantic/dist/components/menu.css">

    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/semantic/dist/components/divider.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/semantic/dist/components/dropdown.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/semantic/dist/components/segment.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/semantic/dist/components/button.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/semantic/dist/components/list.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/semantic/dist/components/icon.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/semantic/dist/components/sidebar.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/semantic/dist/components/transition.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/semantic/dist/components/visibility.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/semantic/dist/components/sidebar.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/semantic/dist/components/transition.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/assets/semantic/dist/components/form.js"></script>
    <script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
    <script>
        $(document).ready(function () {
            let options = {
                title: {
                    text: "Mire kerül sor a tanfolyamon?"
                },
                animationEnabled: true,
                backgroundColor: "rgb(27, 28, 29)",
                theme: 'dark2',
                colorSet: ['#1FCD6D','#223142','#1E8DED'],
                data: [{
                    type: "pie",
                    startAngle: 40,
                    toolTipContent: "{toolTip}",
                    showInLegend: "true",
                    legendText: "{label}",
                    indexLabelFontSize: 16,
                    indexLabel: "{y}% {label}",
                    dataPoints: [{
                        y: 75,
                        color: '#1FCD6D',
                        label: "Barátságos és ösztönző hangulatú kommunikáció",
                        toolTip: "Barátságos és ösztönző hangulatú kommunikáció: tárgyalás, beszélgetés, <br>vita, idiómák, problémamegoldás, szórakoztató és változatos feladatok megoldása, <br>azért, hogy folyékonyan beszéljenek a résztvevők angolul."
                        }, {
                        y: 15,
                        color: '#223142',
                        label: "Nyelvtani gyakorlás",
                        toolTip: "Nyelvtani gyakorlás, hogy a tanulók nyelvhelyessége megfelelő legyen."
                        }, {
                        y: 10,
                        color: '#1E8DED',
                        label: "Előző órák szókincsének ismétlése",
                        toolTip: "Az előző órák szókincsének ismétlése, hogy a <br>munkatársak választékosan tudják kifejezni magukat, és <br>megragadjon a tudásuk."
                    }]
                }]
            };
            // fix menu when passed
            $('.masthead')
                .visibility({
                    once: false,
                    onBottomPassed: function () {
                        $('.fixed.menu').transition('fade in');
                    },
                    onBottomPassedReverse: function () {
                        $('.fixed.menu').transition('fade out');
                    }
                })
            ;

            // create sidebar and attach to menu open
            $('.ui.sidebar')
                .sidebar('attach events', '.toc.item')
            ;
            $("#chartContainer").CanvasJSChart(options);
        });
    </script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Following Menu -->
<div class="ui large top inverted menu dark-blue">
    <div class="ui container">
        <a class="item" href="#training-slides">Céges tanfolyamok</a>
        <a class="item" href="#private-classes">Magánórák</a>
        <a class="item" href="#about-me">Rólam</a>
        <a class="item" href="#proposal">Ajánlatkérő</a>
        <a class="item" href="#contact">Kapcsolat</a>
    </div>
</div>
<!-- Page Contents -->
<div class="pusher">
