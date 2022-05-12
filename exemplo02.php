<?php
    $frase = $_POST['frase'];
?>



<?php
    $resultado = mb_strlen($frase, "UTF-8");
?>

































<h3 id="subtitle"><strong>mb_strlen</strong> - Tamanho da String e codificação</h3>
<?php
    $resultado = "O tamanho da string é: ".$resultado;
?>