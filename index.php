<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <script type="text/JavaScript" src="script/script.js"></script>
        <link rel="stylesheet" href="estilo/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <?php
    $page = "home.php";
    if(isset($_GET['btnMenu'])){
        $page = $_GET['btnMenu'].".php";
    }
    ?>
    <body>
        <div class="grid-container" id="container">
            <div class="item1" id="topo">
                Vinicius Cunha
            </div>
            <div id="menu" class="item2" >
                <?php
                    include "./menu.php";
                ?>
            </div>
            <div id="conteudo" class="item3">
                <?php
                    include $page;
                ?>
            </div>
            <div id="rodape" class="item4">
                Hello From Sao Paulo
            </div>
        </div>
    </body>
</html>