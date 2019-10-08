<?php echo "Hello World!"."<br>";?>

<?php 
    $numInt = 9;
    echo "Um numero inteiro. Exemplo: ".$numInt."<br>";
?>

<?php
    $numDec = 2.69;
    echo "Um numero decimal. Exemplo: ".$numDec."<br>";
?>

<?php 
    $var1crct = "P";
    echo "Uma variável de um caractere usando aspas duplas: ".$var1crct."<br>";
?>

<?php 
    $var1crct2 = 'A';
    echo "Uma variável de um caractere usando aspas simples: ".$var1crct2."<br>";
?>

<?php 
    $var1strg = 'Eu acho que isso é uma string';
    echo $var1strg."<br>";
?>

<?php 
    $var1strg = "Eu acho que isso é uma string";
    echo $var1strg."<br>";
?>

<?php 
    $um = "Três";
    $dois = "pratos";
    $tres = "de";
    $quatro = "trigo";
    $cinco = "para";
    $seis = "tres";
    $sete = "tigres";
    $oito = "tristes";

    echo $um." ".$dois." ".$tres." ".$quatro." ".$cinco." ".$seis." ".$sete." ".$oito."<br>";
?>

<?php 
    echo $um." ".$oito." ".$sete." ".$tres." ".$quatro."<br>";
?>

<?php 
    $var01 = true;
    $var02 = false;
    $var03 = 0;
    $var04 = 1;
    $var05 = 6;
    $var06 = '';
    $var07 = "3";
    $var08 = "true";
    $var09 = "false";
    $var10 = null;

    function tipoDado($varN){
        if ($varN == true){
            echo 'o valor '.$varN.' é verdadeiro.'."<br>";
        } else {
            echo 'o valor '. $varN .' é falso.'."<br>";
        }
    }
    tipoDado($var01);
    tipoDado($var02);
    tipoDado($var03);
    tipoDado($var04);
    tipoDado($var05);
    tipoDado($var06);
    tipoDado($var07);
    tipoDado($var08);
    tipoDado($var09);
    tipoDado($var10);

    ?>

<?php 
    $animais = ["Leão", "Cavalo", "Cachorro", "Canário", "Camelo"];
    var_dump ($animais);
    array_push($animais,"Canária","Camela");
    print_r($animais);

    echo "<br>"."Animais que eu gosto são: ".$animais[0]." ".$animais[1]." ".$animais[2]." ".$animais[3]." ".$animais[4]." ".$animais[5]." ".$animais[6]."."."<br>";

    $animais[0] = "Lambari";
    var_dump($animais);

    $animais[100] = "Macaco";
    var_dump($animais);

    $animais[16] = "Girafo";
    var_dump($animais);

?>

<?php 
    $carro = [
        "Marca" => "Alpha Romeo",
        "Modelo" => "Spark 156 2.0",
        "Cor" => "preto",
        "Ano" => "1998",
        "Placa" => "BAB-8500"
    ];
    var_dump($carro);

    $nomeDono = ["Nome do dono do carro" => "Felipe Siqueira"];
    array_splice( $carro, 0, 0, $nomeDono ); 
    var_dump($carro);
    $carro[14] = ('Nome da seguradora" => "Este veículo não possui seguro.');
    var_dump($carro);
?>