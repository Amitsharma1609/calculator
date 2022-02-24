<?php
$ConvertLenght = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Lenght = $_POST['Lenght'];
    $fromConvertionUnit = $_POST['fromConvertionUnit'];
    $toConvertionUnit = $_POST['toConvertionUnit'];
    if ($fromConvertionUnit == $toConvertionUnit) {
        $ConvertLenght = $Lenght;
    } else if ($fromConvertionUnit == 'Meter' && $toConvertionUnit == 'Kilometer') {
        $ConvertLenght = $Lenght / 1000;
    } else if ($fromConvertionUnit == 'Kilometer' && $toConvertionUnit == 'Meter') {
       $ConvertLenght = $Lenght * 1000;
    } else if ($fromConvertionUnit == 'Meter' && $toConvertionUnit == 'Millimeter') {
       $ConvertLenght = $Lenght * 1000;
    } else if ($fromConvertionUnit == 'Meter' && $toConvertionUnit == 'Mile') {
        $ConvertLenght = $Lenght * 0.0006213689;
    } else if ($fromConvertionUnit == 'Meter' && $toConvertionUnit == 'Yard') {
        $ConvertLenght = $Lenght * 1.0936132689;
    } else if ($fromConvertionUnit == 'Meter' && $toConvertionUnit == 'Foot') {
        $ConvertLenght = $Lenght * 3.280839895;
    } else if ($fromConvertionUnit == 'Meter' && $toConvertionUnit == 'Inch') {
        $ConvertLenght = $Lenght * 39.37007874;
    } else if ($fromConvertionUnit == 'Kilometer' && $toConvertionUnit == 'Millimeter') {
        $ConvertLenght = $Lenght * 1000000;
    } else if ($fromConvertionUnit == 'Kilometer' && $toConvertionUnit == 'Mile') {
        $ConvertLenght = $Lenght * 0.621;
    } else if ($fromConvertionUnit == 'Kilometer' && $toConvertionUnit == 'Yard') {
        $ConvertLenght = $Lenght * 1093.6132983;
    } else if ($fromConvertionUnit == 'Kilometer' && $toConvertionUnit == 'Foot') {
        $ConvertLenght = $Lenght * 3280.839895;
    } else if ($fromConvertionUnit == 'Kilometer' && $toConvertionUnit == 'Inch') {
        $ConvertLenght = $Lenght * 39370.07;
    } else if ($fromConvertionUnit == 'Millimeter' && $toConvertionUnit == 'Kilometer') {
        $ConvertLenght = $Lenght / 100000;
    } else if ($fromConvertionUnit == 'Millimeter' && $toConvertionUnit == 'Mile') {
        $ConvertLenght = $Lenght * 6.213688756E-7;
    } else if ($fromConvertionUnit == 'Millimeter' && $toConvertionUnit == 'Yard') {
        $ConvertLenght = $Lenght * 0.00109;
    } else if ($fromConvertionUnit == 'Millimeter' && $toConvertionUnit == 'Foot') {
        $ConvertLenght = $Lenght * 0.003280;
    } else if ($fromConvertionUnit == 'Millimeter' && $toConvertionUnit == 'Inch') {
        $ConvertLenght = $Lenght * 0.03937;
    } else if ($fromConvertionUnit == 'Mile' && $toConvertionUnit == 'Meter') {
        $ConvertLenght = $Lenght * 1609.35;
    } else if ($fromConvertionUnit == 'Mile' && $toConvertionUnit == 'Kilometer') {
        $ConvertLenght = $Lenght * 1.609;
    } else if ($fromConvertionUnit == 'Mile' && $toConvertionUnit == 'Millimeter') {
        $ConvertLenght = $Lenght * 160935;
    } else if ($fromConvertionUnit == 'Mile' && $toConvertionUnit == 'Yard') {
        $ConvertLenght = $Lenght * 1760.006;
    } else if ($fromConvertionUnit == 'Mile' && $toConvertionUnit == 'Foot') {
        $ConvertLenght = $Lenght * 5280.019;
    } else if ($fromConvertionUnit == 'Mile' && $toConvertionUnit == 'Inch') {
        $ConvertLenght = $Lenght * 63360.23622;
    } else if ($fromConvertionUnit == 'Yard' && $toConvertionUnit == 'Meter') {
        $ConvertLenght = $Lenght * 0.9144;
    } else if ($fromConvertionUnit == 'Yard' && $toConvertionUnit == 'kilometer') {
        $ConvertLenght = $Lenght * 0.0009144;
    } else if ($fromConvertionUnit == 'Yard' && $toConvertionUnit == 'Millimeter') {
        $ConvertLenght = $Lenght * 914.4;
    } else if ($fromConvertionUnit == 'Yard' && $toConvertionUnit == 'Mile') {
        $ConvertLenght = $Lenght * 0.000568;
    } else if ($fromConvertionUnit == 'Yard' && $toConvertionUnit == 'Foot') {
        $ConvertLenght = $Lenght * 3;
    } else if ($fromConvertionUnit == 'Yard' && $toConvertionUnit == 'Inch') {
        $ConvertLenght = $Lenght * 36;
    } else if ($fromConvertionUnit == 'Foot' && $toConvertionUnit == 'Meter') {
        $ConvertLenght = $Lenght * 0.3048;
    } else if ($fromConvertionUnit == 'Foot' && $toConvertionUnit == 'Kilometer') {
        $ConvertLenght = $Lenght * 0.0003048;
    } else if ($fromConvertionUnit == 'Foot' && $toConvertionUnit == 'Mile') {
        $ConvertLenght = $Lenght * 0.000189;
    } else if ($fromConvertionUnit == 'Foot' && $toConvertionUnit == 'Yard') {
        $ConvertLenght = $Lenght * 0.3333;
    } else if ($fromConvertionUnit == 'Foot' && $toConvertionUnit == 'Inch') {
        $ConvertLenght = $Lenght * 12;
    } else if ($fromConvertionUnit == 'Inch' && $toConvertionUnit == 'Meter') {
        $ConvertLenght = $Lenght * 0.0254;
    } else if ($fromConvertionUnit == 'Inch' && $toConvertionUnit == 'Kilometer') {
        $ConvertLenght = $Lenght * 0.0000254;
    } else if ($fromConvertionUnit == 'Inch' && $toConvertionUnit == 'Mile') {
        $ConvertLenght = $Lenght * 0.0000157;
    } else if ($fromConvertionUnit == 'Inch' && $toConvertionUnit == 'yard') {
        $ConvertLenght = $Lenght * 0.02778;
    } else if ($fromConvertionUnit == 'Inch' && $toConvertionUnit == 'Foot') {
        $ConvertLenght = $Lenght * 0.0833;
    } else if ($fromConvertionUnit == 'Centimeter' && $toConvertionUnit == 'Meter') {
        $ConvertLenght = $Lenght * 0.01;
    } else if ($fromConvertionUnit == 'Centimeter' && $toConvertionUnit == 'Kilometer') {
        $ConvertLenght = $Lenght * 0.00001;
    } else if ($fromConvertionUnit == 'Centimeter' && $toConvertionUnit == 'Mile') {
        $ConvertLenght = $Lenght * 0.0000062137;
    } else if ($fromConvertionUnit == 'Centimeter' && $toConvertionUnit == 'Yard') {
        $ConvertLenght = $Lenght * 0.010936;
    } else if ($fromConvertionUnit == 'Centimeter' && $toConvertionUnit == 'Foot') {
        $ConvertLenght = $Lenght * 0.032808399;
    } else if ($fromConvertionUnit == 'Centimeter' && $toConvertionUnit == 'Inch') {
        $ConvertLenght = $Lenght * 0.3937007;
    } else if ($fromConvertionUnit == 'Meter' && $toConvertionUnit == 'Centimeter') {
        $ConvertLenght = $Lenght * 100;
    } else if ($fromConvertionUnit == 'Kilometer' && $toConvertionUnit == 'Centimeter') {
        $ConvertLenght = $Lenght * 100000;
    } else if ($fromConvertionUnit == 'Mile' && $toConvertionUnit == 'Centimeter') {
        $ConvertLenght = $Lenght * 160935;
    } else if ($fromConvertionUnit == 'Yard' && $toConvertionUnit == 'Centimeter') {
        $ConvertLenght = $Lenght * 91.44;
    } else if ($fromConvertionUnit == 'Foot' && $toConvertionUnit == 'Centimeter') {
        $ConvertLenght = $Lenght * 30.48;
    } else if ($fromConvertionUnit == 'Inch' && $toConvertionUnit == 'Centimeter') {
        $ConvertLenght = $Lenght * 2.54;
    } else if ($fromConvertionUnit == 'Millimeter' && $toConvertionUnit == 'Centimeter') {
        $ConvertLenght = $Lenght * 0.1;
    } else if ($fromConvertionUnit == 'Centimeter' && $toConvertionUnit == 'Millimeter') {
        $ConvertLenght = $Lenght * 10;
    } else if ($fromConvertionUnit == 'Inch' && $toConvertionUnit == 'Millimeter') {
        $ConvertLenght = $Lenght * 0.1;
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
    <h1>Convertion Of Lenght</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <div class="set">
            <label for="fromConvertionUnit">From:</label>
            <input type="number" name="Lenght" id="Lenght" value="<?php echo (!empty($Lenght)) ? $Lenght : '' ?>">

            <select name="fromConvertionUnit" id="fromConvertionUnit">
                <option value="Meter" <?php if (isset($Lenght) && $fromConvertionUnit == "Meter") {echo "selected";}?>>
                    Meter</option>
                <option value="Kilometer"
                    <?php if (isset($Lenght) && $fromConvertionUnit == "Kilometer") {echo "selected";}?>>kilometer
                </option>
                <option value="Centimeter"
                    <?php if (isset($Lenght) && $fromConvertionUnit == "Centimeter") {echo "selected";}?>>Centimeter
                </option>
                <option value="Millimeter"
                    <?php if (isset($Lenght) && $fromConvertionUnit == "milliometer") {echo "selected";}?>>millimeter
                </option>
                <option value="Mile" <?php if (isset($Lenght) && $fromConvertionUnit == "Mile") {echo "selected";}?>>
                    Mile</option>
                <option value="Yard" <?php if (isset($Lenght) && $fromConvertionUnit == "Yard") {echo "selected";}?>>
                    Yard</option>
                <option value="Foot" <?php if (isset($Lenght) && $fromConvertionUnit == "Foot") {echo "selected";}?>>
                    Foot</option>
                <option value="Inch" <?php if (isset($Lenght) && $fromConvertionUnit == "Inch") {echo "selected";}?>>
                    Inch</option>
            </select>
        </div>
        <div class="toset">
            <label for="toConvertionUnit">To:</label>
            <input type="number" class="myname" value="<?php echo (!empty($ConvertLenght)) ? $ConvertLenght : '0' ?>">
            <select name="toConvertionUnit" id="toConvertionUnit">
                <option value="Meter" <?php if (isset($Lenght) && $toConvertionUnit == "Meter") {echo "selected";}?>>
                    Meter</option>
                <option value="Kilometer"
                    <?php if (isset($Lenght) && $toConvertionUnit == "Kilometer") {echo "selected";}?>>Kilometer
                </option>
                <option value="Centimeter"
                    <?php if (isset($Lenght) && $toConvertionUnit == "Centimeter") {echo "selected";}?>>Centimeter
                </option>
                <option value="Millimeter"
                    <?php if (isset($Lenght) && $toConvertionUnit == "Millimeter") {echo "selected";}?>>Millimeter
                </option>
                <option value="Mile" <?php if (isset($Lenght) && $toConvertionUnit == "Mile") {echo "selected";}?>>Mile
                </option>
                <option value="Yard" <?php if (isset($Lenght) && $toConvertionUnit == "Yard") {echo "selected";}?>>Yard
                </option>
                <option value="Foot" <?php if (isset($Lenght) && $toConvertionUnit == "Foot") {echo "selected";}?>>Foot
                </option>
                <option value="Inch" <?php if (isset($Lenght) && $toConvertionUnit == "Inch") {echo "selected";}?>>Inch
                </option>
            </select>
        </div>
        <div>
            <input type="submit" id="sub" value="Convert">
        </div>
    </form>
</body>

</html>