<div class="titulo">Desafio switch</div>

<form action="#" method="post">
    <input type="text" name="param" id="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">Km > Milha</option>
        <option value="milha-km">Milha > Km</option>
        <option value="metro-km">Metro > Km</option>
        <option value="km-metro">Km > Metro</option>
        <option value="celsius-fahrenheit">Celsius > Fahrenheit</option>
        <option value="fahrenheit-celsius">Fahrenheit > Celsius</option>
    </select>
    <button>Calcular</button>
</form>

<style>
form>* {
    font-size: 1rem;
}
</style>

<?php 
    const KM_MILHA = 1.609;
    const MILHA_KM = 1.609;
    const METRO_KM = 1000;
    const KM_METRO = 1000;

    const AUX_CELSIUS_FAHRENHEIT = 1.8;
    const CELSIUS_FAHRENHEIT = 32;

    const FAHRENHEIT_CELSIUS = 1.8;
    const AUX_FAHRENHEIT_CELSIUS = 32;

    if(isset($_POST['param']) && isset($_POST['conversao'])) {
        $number = (float) $_POST['param'];
        $conversion = $_POST['conversao'];
        
        switch($conversion) {
            case 'km-milha':
                $response = $number / KM_MILHA;
                echo $response;
                break;
            case 'milha-km':
                $response = $number * MILHA_KM;
                break;
            case 'metro-km':
                $response = $number / METRO_KM;
                break;
            case 'km-metro':
                $response = $number * KM_METRO;
                break;
            case 'celsius-fahrenheit':
                $response = ($number - AUX_FAHRENHEIT_CELSIUS) / FAHRENHEIT_CELSIUS;
                break;
            case 'fahrenheit-celsius':
                $response = ($number * AUX_CELSIUS_FAHRENHEIT) + CELSIUS_FAHRENHEIT;
                break;
            default:
                $response = 'Nenhum valor calculado!';
        }
        echo $response;
    }
?>