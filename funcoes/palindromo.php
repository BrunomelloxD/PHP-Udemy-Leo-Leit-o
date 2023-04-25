<div class="titulo">Palindromo</div>

<?php 
    function handleVerifyPalindromo($string) {
        $invertStringIndice = strtolower(strrev($string));
        $stringToLowerCase = strtolower($string);
        $response = ($invertStringIndice === $stringToLowerCase) ? true : false;
        
        return $response;
    }

    $response = handleVerifyPalindromo("Bruno");
    echo "Isso" . ($response ? ' é um palindromo' : ' não é um palindromo') . '<br>';

    echo '<hr>';

    function handleVerifyPalindromoWithFor($string) {
        $arrayString =  str_split(strtolower($string));
        $countString = count($arrayString);

        for($indice = 0; $indice < $countString;){
            if($arrayString[$indice] === $arrayString[$countString]){
                $countString--;
            } else {
                return false;
            }
            return true;
        }
    }

    $responseFor = handleVerifyPalindromo("Osso");
    echo "Isso" . ($responseFor ? ' é um palindromo' : ' não é um palindromo') . '<br>';

    echo '<hr>';
?>