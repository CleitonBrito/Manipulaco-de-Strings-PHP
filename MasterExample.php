<html lang="pt-br">
<head>
    <title>Manipulando Strings</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta carset="utf-8">
    <style>
        #resultado {
                width: 15em;
                min-height: 5em;
                background-color: #e5e5e5;
                border-radius: .2em;
                box-shadow: 1px 1px 1px #c2c2c2;
                padding: 1em;
            }
    </style>
</head>
<body>
    <div id="resultado">
        <?php $frase = "Hoje eu vou estudar."; ?>
    <h2><?php echo $frase ?></h2>
    <?php
        echo "<pre>";
        
        print_r(substr($frase, -8, 7));
        echo "</pre>";
    ?>
    </div>
</body> 
</html>