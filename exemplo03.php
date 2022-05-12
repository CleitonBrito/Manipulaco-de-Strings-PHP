<?php
    $frase = $_POST['frase'];
    $encontrada = array("array", "\",", "(", ")", "\"", ";");
    $nova = str_replace($encontrada, "", $frase);

    $frase = explode(" ", $nova);
?>



<?php
    $resultado = implode(" ", $frase);
?>

































<h3 id="subtitle"><strong>implode</strong> - Transforma array em String</h3>
<?php
    $resultado;
?>