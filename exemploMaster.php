<html lang="pt-br">
<head>
    <title>Manipulando Strings</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta carset="utf-8">
    <style>
        #frase {
            font-size: 14pt;
        }

        #resultado {
            width: 80%;
            min-height: 5em;
            background-color: #e5e5e5;
            border-radius: .2em;
            box-shadow: 1px 1px 1px #c2c2c2;
            padding: 1em;
        }

        #subtitle {
            font-weight: 100;
        }

        strong {
            font-weight: 600;
            color: #fff;
            background-color: #06872e;
            border-radius: .2em;
            padding: .2em;

        }
    </style>
</head>
<body>
    <h1>Manipulação de Strings</h1>

    <form action="" method="post">
        <textarea name="frase" id="frase" cols="70" rows="5"><?php if (isset($_POST['frase'])) echo $_POST['frase'] ?></textarea><br>
        <button type="submit">Enviar</button>
    </form>

    <br>

    <?php include_once('exemplo01.php') ?>




















    <div id="resultado">
        <?php if (is_array($resultado)){ ?>
            <p><?php if (isset($_POST['frase'])) echo "<pre>"; print_r($resultado); echo "</pre>" ?></p>
        <?php }else{ ?>
            <p><?php if (isset($_POST['frase'])) echo "<pre>"; echo $resultado; echo "</pre>" ?></p>
        <?php } ?>
    </div>
</body>
</html>