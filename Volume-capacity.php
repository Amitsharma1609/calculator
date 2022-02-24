<?php

$ConvertVolume = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Volume = $_POST['Volume'];
    $fromConvertionUnit = $_POST['fromConvertionUnit'];
    $toConvertionUnit = $_POST['toConvertionUnit'];

    if ($fromConvertionUnit == $toConvertionUnit) {
        $ConvertVolume = $Volume;
    } else if ($fromConvertionUnit == 'Cubic Meter' && $toConvertionUnit == 'Cubic Kilometer') {

        $ConvertVolume = $Volume * 0.000000001;
    } else if ($fromConvertionUnit == 'Cubic Kilometer' && $toConvertionUnit == 'Cubic Meter') {

        $ConvertVolume = $Volume * 1000;
    } else if ($fromConvertionUnit == 'Cubic Meter' && $toConvertionUnit == 'Cubic Mile') {

        $ConvertVolume = $Volume * 2.399128636E-10;
    } else if ($fromConvertionUnit == 'Cubic Meter' && $toConvertionUnit == 'Cubic Yard') {

        $ConvertVolume = $Volume * 1.3079506193;
    } else if ($fromConvertionUnit == 'Cubic Meter' && $toConvertionUnit == 'Cubic Foot') {

        $ConvertVolume = $Volume * 35.31466675;
    } else if ($fromConvertionUnit == 'Cubic Meter' && $toConvertionUnit == 'Cubic Inch') {

        $ConvertVolume = $Volume * 61023.744095;
    } else if ($fromConvertionUnit == 'Cubic Kilometer' && $toConvertionUnit == 'Cubic Mile') {

        $ConvertVolume = $Volume * 0.2399128;
    } else if ($fromConvertionUnit == 'Cubic Kilometer' && $toConvertionUnit == 'Cubic Yard') {

        $ConvertVolume = $Volume * 1307950619.3;
    } else if ($fromConvertionUnit == 'Cubic Kilometer' && $toConvertionUnit == 'Cubic Foot') {

        $ConvertVolume = $Volume * 35314666721;
    } else if ($fromConvertionUnit == 'Cubic Kilometer' && $toConvertionUnit == 'Cubic Inch') {

        $ConvertVolume = $Volume * 61023744094732;
    } else if ($fromConvertionUnit == 'Cubic Mile' && $toConvertionUnit == 'Cubic Meter') {

        $ConvertVolume = $Volume * 4168180000;
    } else if ($fromConvertionUnit == 'Cubic Mile' && $toConvertionUnit == 'Cubic Kilometer') {

        $ConvertVolume = $Volume * 4.16818;
    } else if ($fromConvertionUnit == 'Cubic Mile' && $toConvertionUnit == 'Cubic Yard') {

        $ConvertVolume = $Volume * 5451773612.4;
    } else if ($fromConvertionUnit == 'Cubic Mile' && $toConvertionUnit == 'Cubic Foot') {

        $ConvertVolume = $Volume * 147197887535;
    } else if ($fromConvertionUnit == 'Cubic Mile' && $toConvertionUnit == 'Cubic Inch') {

        $ConvertVolume = $Volume * 254357949660781;
    } else if ($fromConvertionUnit == 'Cubic Yard' && $toConvertionUnit == 'Cubic Meter') {

        $ConvertVolume = $Volume * 0.764554858;
    } else if ($fromConvertionUnit == 'Cubic Yard' && $toConvertionUnit == 'Cubic Kilometer') {

        $ConvertVolume = $Volume * 7.645548579E-10;
    } else if ($fromConvertionUnit == 'Cubic Yard' && $toConvertionUnit == 'Cubic Mile') {

        $ConvertVolume = $Volume * 1.834265453E-10;
    } else if ($fromConvertionUnit == 'Cubic Yard' && $toConvertionUnit == 'Cubic Foot') {

        $ConvertVolume = $Volume * 27;
    } else if ($fromConvertionUnit == 'Cubic Yard' && $toConvertionUnit == 'Cubic Inch') {

        $ConvertVolume = $Volume * 46656;
    } else if ($fromConvertionUnit == 'Cubic Foot' && $toConvertionUnit == 'Cubic Meter') {

        $ConvertVolume = $Volume * 0.0283168466;
    } else if ($fromConvertionUnit == 'Cubic Foot' && $toConvertionUnit == 'Cubic Kilometer') {

        $ConvertVolume = $Volume * 2.831684659E-11;
    } else if ($fromConvertionUnit == 'Cubic Foot' && $toConvertionUnit == 'Cubic Mile') {

        $ConvertVolume = $Volume * 6.793575755E-12;
    } else if ($fromConvertionUnit == 'Cubic Foot' && $toConvertionUnit == 'Cubic Yard') {

        $ConvertVolume = $Volume * 0.037037037;
    } else if ($fromConvertionUnit == 'Cubic Foot' && $toConvertionUnit == 'Cubic Inch') {

        $ConvertVolume = $Volume * 1728;
    } else if ($fromConvertionUnit == 'Cubic Inch' && $toConvertionUnit == 'Cubic Meter') {

        $ConvertVolume = $Volume * 0.0000163871;
    } else if ($fromConvertionUnit == 'Cubic Inch' && $toConvertionUnit == 'Cubic Kilometer') {

        $ConvertVolume = $Volume * 1.6387064E-14;
    } else if ($fromConvertionUnit == 'Cubic Inch' && $toConvertionUnit == 'Cubic Mile') {

        $ConvertVolume = $Volume * 3.931467451E-15;
    } else if ($fromConvertionUnit == 'Cubic Inch' && $toConvertionUnit == 'cubic yard') {

        $ConvertVolume = $Volume * 0.0000214335;
    } else if ($fromConvertionUnit == 'Cubic Inch' && $toConvertionUnit == 'Cubic Foot') {

        $ConvertVolume = $Volume * 0.0005787037;
    } else if ($fromConvertionUnit == 'Cubic Centimeter' && $toConvertionUnit == 'Cubic Meter') {

        $ConvertVolume = $Volume * 0.000001;
    } else if ($fromConvertionUnit == 'Cubic Centimeter' && $toConvertionUnit == 'Cubic Kilometer') {

        $ConvertVolume = $Volume * 9.999999999E-16;
    } else if ($fromConvertionUnit == 'Cubic Centimeter' && $toConvertionUnit == 'Cubic Mile') {

        $ConvertVolume = $Volume * 2.399128636E-16;
    } else if ($fromConvertionUnit == 'Cubic Centimeter' && $toConvertionUnit == 'Cubic Yard') {

        $ConvertVolume = $Volume * 0.000001308;
    } else if ($fromConvertionUnit == 'Cubic Centimeter' && $toConvertionUnit == 'Cubic Foot') {

        $ConvertVolume = $Volume * 0.0000353147;
    } else if ($fromConvertionUnit == 'Cubic Centimeter' && $toConvertionUnit == 'Cubic Inch') {

        $ConvertVolume = $Volume * 0.0610237441;
    } else if ($fromConvertionUnit == 'Cubic Meter' && $toConvertionUnit == 'Cubic Centimeter') {

        $ConvertVolume = $Volume * 1000000;
    } else if ($fromConvertionUnit == 'Cubic Kilometer' && $toConvertionUnit == 'Cubic Centimeter') {

        $ConvertVolume = $Volume * 1000000000000000;
    } else if ($fromConvertionUnit == 'Cubic Mile' && $toConvertionUnit == 'Cubic Centimeter') {

        $ConvertVolume = $Volume * 4168180000000000;
    } else if ($fromConvertionUnit == 'Cubic Yard' && $toConvertionUnit == 'Cubic Centimeter') {

        $ConvertVolume = $Volume * 764554.85798;
    } else if ($fromConvertionUnit == 'Cubic Foot' && $toConvertionUnit == 'Cubic Centimeter') {

        $ConvertVolume = $Volume * 28316.846592;
    } else if ($fromConvertionUnit == 'Cubic Inch' && $toConvertionUnit == 'Cubic Centimeter') {

        $ConvertVolume = $Volume * 16.387064;
    } else if ($fromConvertionUnit == 'Liter' && $toConvertionUnit == 'Cubic Meter') {

        $ConvertVolume = $Volume * 0.001;
    } else if ($fromConvertionUnit == 'Liter' && $toConvertionUnit == 'Cubic Kilometer') {

        $ConvertVolume = $Volume * 0.000000000001;
    } else if ($fromConvertionUnit == 'Liter' && $toConvertionUnit == 'Cubic Centimeter') {

        $ConvertVolume = $Volume * 1000;
    } else if ($fromConvertionUnit == 'Liter' && $toConvertionUnit == 'Cubic Mile') {

        $ConvertVolume = $Volume * 2.3991286;
    } else if ($fromConvertionUnit == 'Liter' && $toConvertionUnit == 'Cubic Yard') {

        $ConvertVolume = $Volume * 0.0013079506;
    } else if ($fromConvertionUnit == 'Liter' && $toConvertionUnit == 'Cubic Foot') {

        $ConvertVolume = $Volume * 0.0353146667;
    } else if ($fromConvertionUnit == 'Liter' && $toConvertionUnit == 'Cubic Inch') {

        $ConvertVolume = $Volume * 61.023744095;
    } else if ($fromConvertionUnit == 'Cubic Meter' && $toConvertionUnit == 'Liter') {

        $ConvertVolume = $Volume * 1000;
    } else if ($fromConvertionUnit == 'Cubic Kliometer' && $toConvertionUnit == 'Liter') {

        $ConvertVolume = $Volume * 1000000000;
    } else if ($fromConvertionUnit == 'Cubic Mile' && $toConvertionUnit == 'Liter') {

        $ConvertVolume = $Volume * 416210000000;
    } else if ($fromConvertionUnit == 'Cubic Centimeter' && $toConvertionUnit == 'Liter') {

        $ConvertVolume = $Volume * 0.001;
    } else if ($fromConvertionUnit == 'Cubic Yard' && $toConvertionUnit == 'Liter') {

        $ConvertVolume = $Volume * 764.554857;
    } else if ($fromConvertionUnit == 'Cubic' && $toConvertionUnit == 'Liter') {

        $ConvertVolume = $Volume * 28.316846592;
    } else if ($fromConvertionUnit == 'Cubic Inch' && $toConvertionUnit == 'Liter') {

        $ConvertVolume = $Volume * 0.016387064;
    } else {
        echo "Not vaild Input";
    }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Add.css">
    <title>Volume and Distance</title>
</head>

<body>
    <h1>Convertion Of Volume</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

        <div class="set">
            <label for="fromConvertionUnit">From:</label>
            <input type="number" name="Volume" id="Volume" value="<?php echo (!empty($Volume)) ? $Volume : '' ?>">

            <select name="fromConvertionUnit" id="fromConvertionUnit">
                <option value="Cubic Meter"
                    <?php if (isset($Volume) && $fromConvertionUnit == "Cubic Meter") {echo "selected";}?>>Cubic Meter
                </option>
                <option value="Cubic Kilometer"
                    <?php if (isset($Volume) && $fromConvertionUnit == "Cubic Kilometer") {echo "selected";}?>>kilometer
                </option>
                <option value="Cubic Centimeter"
                    <?php if (isset($Volume) && $fromConvertionUnit == "Cubic Centimeter") {echo "selected";}?>>Cubic
                    Centimeter</option>
                <option value="Cubic Mile"
                    <?php if (isset($Volume) && $fromConvertionUnit == "Cubic Mile") {echo "selected";}?>>Cubic Mile
                </option>
                <option value="Cubic Yard"
                    <?php if (isset($Volume) && $fromConvertionUnit == "Cubic Yard") {echo "selected";}?>>Cubic Yard
                </option>
                <option value="Cubic Foot"
                    <?php if (isset($Volume) && $fromConvertionUnit == "Cubic Foot") {echo "selected";}?>>Cubic Foot
                </option>
                <option value="Cubic Inch"
                    <?php if (isset($Volume) && $fromConvertionUnit == "Cubic Inch") { echo "selected";}?>>Cubic Inch
                </option>
                <option value="Liter" <?php if (isset($Volume) && $fromConvertionUnit == "Liter") { echo "selected";}?>>
                    Liter</option>
            </select>
        </div>
        <div class="toset">
            <label for="toConvertionUnit">To:</label>
            <input type="number" class="myname" value="<?php echo (!empty($ConvertVolume)) ? $ConvertVolume : '0' ?>">
            <select name="toConvertionUnit" id="toConvertionUnit">
                <option value="Cubic Meter"
                    <?php if (isset($Volume) && $toConvertionUnit == "Cubic Meter") {echo "selected";}?>>Cubic Meter
                </option>
                <option value="Cubic Kilometer"
                    <?php if (isset($Volume) && $toConvertionUnit == "Cubic Kilometer") {echo "selected";}?>>Cubic
                    Kilometer</option>
                <option value="Cubic Centimeter"
                    <?php if (isset($Volume) && $toConvertionUnit == "Cubic Centimeter") {echo "selected";}?>>Cubic
                    Centimeter</option>
                <option value="Cubic Mile"
                    <?php if (isset($Volume) && $toConvertionUnit == "Cubic Mile") {echo "selected";}?>>Cubic Mile
                </option>
                <option value="Cubic Yard"
                    <?php if (isset($Volume) && $toConvertionUnit == "Cubic Yard") {echo "selected";}?>>Cubic Yard
                </option>
                <option value="Cubic Foot"
                    <?php if (isset($Volume) && $toConvertionUnit == "Cubic Foot") {echo "selected";}?>>Cubic Foot
                </option>
                <option value="Cubic Inch"
                    <?php if (isset($Volume) && $toConvertionUnit == "Cubic Inch") {echo "selected";}?>>Cubic Inch
                </option>
                <option value="Liter" <?php if (isset($Volume) && $toConvertionUnit == "Liter") {echo "selected";}?>>
                    Liter</option>
            </select>
        </div>
        <div>
            <input type="submit" id="sub" value="Convert">
        </div>
    </form>
</body>

</html>