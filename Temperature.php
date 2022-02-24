<?php

$convertedTemperature = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $temperature = $_POST['temperature'];
    $fromConvertionUnit = $_POST['fromConvertionUnit'];
    $toConvertionUnit = $_POST['toConvertionUnit'];

    if ($fromConvertionUnit == $toConvertionUnit) {
        $convertedTemperature = $temperature;
    } else if ($fromConvertionUnit == 'fahrenheit' && $toConvertionUnit == 'celcius') {

        $convertedTemperature = ($temperature - 32) * 0.5556;
    } else if ($fromConvertionUnit == 'celcius' && $toConvertionUnit == 'fahrenheit') {

        $convertedTemperature = ($temperature * 1.8) + 32;
    } else if ($fromConvertionUnit == 'Kelvin' && $toConvertionUnit == 'fahrenheit') {

        $convertedTemperature = ($temperature - 273.15) * 1.8 + 32;
    } else if ($fromConvertionUnit == 'Kelvin' && $toConvertionUnit == 'celcius') {

        $convertedTemperature = ($temperature - 273.15);
    } else if ($fromConvertionUnit == 'fahrenheit' && $toConvertionUnit == 'Kelvin') {

        $convertedTemperature = ($temperature - 32) * 0.5556 + 273.15;
    } else if ($fromConvertionUnit == 'celcius' && $toConvertionUnit == 'Kelvin') {

        $convertedTemperature = $temperature + 273.15;
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Temperature Converter</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Add.css">
</head>

<body>
    <h1>Convertion Of Lenght</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="set">
            <label for="fromConvertionUnit">From:</label>
            <input type="number" name="temperature" id="temperature"
                value="<?php echo (!empty($temperature)) ? $temperature : '' ?>">
            <select name="fromConvertionUnit" id="fromConvertionUnit">
                <option value="celcius"
                    <?php if (isset($temperature) && $fromConvertionUnit == "celcius") {echo "selected";}?>>celcius
                </option>
                <option value="fahrenheit"
                    <?php if (isset($temperature) && $fromConvertionUnit == "fahrenheit") {echo "selected";}?>>
                    fahrenheit</option>
                <option value="Kelvin"
                    <?php if (isset($temperature) && $fromConvertionUnit == "Kelvin") {echo "selected";}?>>Kelvin
                </option>
            </select>
        </div>


        <div class="toset">
            <label for="toConvertionUnit">To:</label>
            <input type="number" class="myname"
                value="<?php echo (!empty($convertedTemperature)) ? $convertedTemperature : '0' ?>">
            <select name="toConvertionUnit" id="toConvertionUnit">
                <option value="celcius"
                    <?php if (isset($temperature) && $toConvertionUnit == "celcius") {echo "selected";}?>>celcius
                </option>
                <option value="fahrenheit"
                    <?php if (isset($temperature) && $toConvertionUnit == "fahrenheit") {echo "selected";}?>>fahrenheit
                </option>
                <option value="Kelvin"
                    <?php if (isset($temperature) && $toConvertionUnit == "Kelvin") {echo "selected";}?>>Kelvin</option>
            </select>
        </div>
        <div>
            <input type="submit" id="sub" value="Convert">
        </div>
    </form>
</body>

</html>