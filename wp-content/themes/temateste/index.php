<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/main.css"/>
    <title>Tema de Teste</title>
</head>
<body>
    <!-- Variaveis -->
    <?php
        // Simple variabels in programining langague PHP
        $titleWebSite = '<h1>Curso de WP como CMS</h1>';
        $productList = array('Produto 1','Produto 2');
    
    ?>
    <h1><?php echo $titleWebSite ?><h1>
    <h3>Lista de Produtos</h3>
    <ul>
        <li><?php echo $productList[0] ?></li>
        <li><?php echo $productList[1] ?></li>
    </ul>


    <!-- Condicional -->
    <?php
        $condition = 'Condicionais em PHP';
        $autorName = 'Pedro Oliveira';
    ?>

    <h2><?php echo $condition ?> </h2>

    <?php if($autorName === 'Pedro Oliveira') { ?> 
        <h3>Sim o nome do autor é <?php echo $autorName ?> </h3> 
    <?php }

    else { ?> 
        <h2>O nome do autor não é <?php echo $autorName ?></h2>
    <?php } ?>

    <?php if(1 === '1') {?> 
        <h2>Sim, é igual!</h2> <?php } 
    else { ?> <h2>Não, não é igual</h2> <?php } ?>


    <!-- Loop -->

    <?php 
        $qtdWebSites = 1;
        $maxWebSites = 10;
        while ($qtdWebSites <= $maxWebSites) :
    ?>
    <li>Site <?php echo $qtdWebSites ?></li>
    <?php 
        $qtdWebSites++;
        endwhile;
    ?>


    
</body>
<script src="<?php bloginfo('template_url') ?>/js/main.js"></script>
</html>