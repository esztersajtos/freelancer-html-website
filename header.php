<?php
/**
 * Default theme header
 *
 * Displays the <head> section as well as the opening tag for the body
 * 
 * @package una
 * @since una 1.0.0
 * @license GPL 2.0
 * 
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Standard Meta -->
    <meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
	<!-- Responsive stylesheet -->
	<meta name="viewport" content="width=device-width,initial-scale=1 maximum-scale=1.0" />

    <!-- Site Properties -->
    <title>Homepage - Semantic</title>
    <link rel="stylesheet" type="text/css" href="semantic/dist/components/reset.css">
    <link rel="stylesheet" type="text/css" href="semantic/dist/components/site.css">

    <link rel="stylesheet" type="text/css" href="semantic/dist/components/container.css">
    <link rel="stylesheet" type="text/css" href="semantic/dist/components/grid.css">
    <link rel="stylesheet" type="text/css" href="semantic/dist/components/header.css">
    <link rel="stylesheet" type="text/css" href="semantic/dist/components/image.css">
    <link rel="stylesheet" type="text/css" href="semantic/dist/components/menu.css">

    <link rel="stylesheet" type="text/css" href="semantic/dist/components/divider.css">
    <link rel="stylesheet" type="text/css" href="semantic/dist/components/dropdown.css">
    <link rel="stylesheet" type="text/css" href="semantic/dist/components/segment.css">
    <link rel="stylesheet" type="text/css" href="semantic/dist/components/button.css">
    <link rel="stylesheet" type="text/css" href="semantic/dist/components/list.css">
    <link rel="stylesheet" type="text/css" href="semantic/dist/components/icon.css">
    <link rel="stylesheet" type="text/css" href="semantic/dist/components/sidebar.css">
    <link rel="stylesheet" type="text/css" href="semantic/dist/components/transition.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="semantic/dist/components/visibility.js"></script>
    <script src="semantic/dist/components/sidebar.js"></script>
    <script src="semantic/dist/components/transition.js"></script>
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
    <?php indented_wp_head(); ?>
</head>

<body <?php body_class(); ?> >
