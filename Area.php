<?php

$ConvertArea = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Area = $_POST['Area'];
    $fromConvertionUnit = $_POST['fromConvertionUnit'];
    $toConvertionUnit = $_POST['toConvertionUnit'];

    if ($fromConvertionUnit == $toConvertionUnit) {
        $ConvertArea = $Area;
    } else if ($fromConvertionUnit == 'Square Meter' && $toConvertionUnit == 'Square Kilometer') {

        $ConvertArea = $Area / 1000000;
    } else if ($fromConvertionUnit == 'Square Kilometer' && $toConvertionUnit == 'Square Meter') {

        $ConvertArea = $Area * 1000000;
    } else if ($fromConvertionUnit == 'Square Meter' && $toConvertionUnit == 'Square Mile') {

        $ConvertArea = $Area * 3.861018768E-7;
    } else if ($fromConvertionUnit == 'Square Meter' && $toConvertionUnit == 'Square Yard') {

        $ConvertArea = $Area * 1.195990463;
    } else if ($fromConvertionUnit == 'Square Meter' && $toConvertionUnit == 'Square Foot') {

        $ConvertArea = $Area * 10.763910417;
    } else if ($fromConvertionUnit == 'Square Meter' && $toConvertionUnit == 'Square Inch') {

        $ConvertArea = $Area * 1550.0031;
    } else if ($fromConvertionUnit == 'Square Kilometer' && $toConvertionUnit == 'Square Mile') {

        $ConvertArea = $Area * 0.3861018768;
    } else if ($fromConvertionUnit == 'Square Kilometer' && $toConvertionUnit == 'Square Yard') {

        $ConvertArea = $Area * 1195990.0463;
    } else if ($fromConvertionUnit == 'Square Kilometer' && $toConvertionUnit == 'Square Foot') {

        $ConvertArea = $Area * 10763910.417;
    } else if ($fromConvertionUnit == 'Square Kilometer' && $toConvertionUnit == 'Square Inch') {

        $ConvertArea = $Area * 1550003100;
    } else if ($fromConvertionUnit == 'Square Mile' && $toConvertionUnit == 'Square Meter') {

        $ConvertArea = $Area * 2589990;
    } else if ($fromConvertionUnit == 'Square Mile' && $toConvertionUnit == 'Square Kilometer') {

        $ConvertArea = $Area * 2.58999;
    } else if ($fromConvertionUnit == 'Square Mile' && $toConvertionUnit == 'Square Yard') {

        $ConvertArea = $Area * 3097602.26;
    } else if ($fromConvertionUnit == 'Square Mile' && $toConvertionUnit == 'Square Foot') {

        $ConvertArea = $Area * 27878420.34;
    } else if ($fromConvertionUnit == 'Square Mile' && $toConvertionUnit == 'Square Inch') {

        $ConvertArea = $Area * 4014492529;
    } else if ($fromConvertionUnit == 'Square Yard' && $toConvertionUnit == 'Square Meter') {

        $ConvertArea = $Area * 0.83612736;
    } else if ($fromConvertionUnit == 'Square Yard' && $toConvertionUnit == 'Square Kilometer') {

        $ConvertArea = $Area * 8.3612736E-7;
    } else if ($fromConvertionUnit == 'Square Yard' && $toConvertionUnit == 'Square Mile') {

        $ConvertArea = $Area * 3.228303429E-7;
    } else if ($fromConvertionUnit == 'Square Yard' && $toConvertionUnit == 'Square Foot') {

        $ConvertArea = $Area * 9;
    } else if ($fromConvertionUnit == 'Square Yard' && $toConvertionUnit == 'Square Inch') {

        $ConvertArea = $Area * 1296;
    } else if ($fromConvertionUnit == 'Square Foot' && $toConvertionUnit == 'Square Meter') {

        $ConvertArea = $Area * 0.9290304;
    } else if ($fromConvertionUnit == 'Square Foot' && $toConvertionUnit == 'Square Kilometer') {

        $ConvertArea = $Area * 9.290304E-8;
    } else if ($fromConvertionUnit == 'Square Foot' && $toConvertionUnit == 'Square Mile') {

        $ConvertArea = $Area * 3.58700381E-8;
    } else if ($fromConvertionUnit == 'Square Foot' && $toConvertionUnit == 'Square Yard') {

        $ConvertArea = $Area * 0.111111111;
    } else if ($fromConvertionUnit == 'Square Foot' && $toConvertionUnit == 'Square Inch') {

        $ConvertArea = $Area * 144;
    } else if ($fromConvertionUnit == 'Square Inch' && $toConvertionUnit == 'Square Meter') {

        $ConvertArea = $Area * 0.00064516;
    } else if ($fromConvertionUnit == 'Square Inch' && $toConvertionUnit == 'Square Kilometer') {

        $ConvertArea = $Area * 6.4516E-10;
    } else if ($fromConvertionUnit == 'Square Inch' && $toConvertionUnit == 'Square Mile') {

        $ConvertArea = $Area * 2.490974868E-10;
    } else if ($fromConvertionUnit == 'Square Inch' && $toConvertionUnit == 'Square yard') {

        $ConvertArea = $Area * 0.0007716049;
    } else if ($fromConvertionUnit == 'Square Inch' && $toConvertionUnit == 'Square Foot') {

        $ConvertArea = $Area * 0.0069444444;
    } else if ($fromConvertionUnit == 'Square Centimeter' && $toConvertionUnit == 'Square Meter') {

        $ConvertArea = $Area * 0.0001;
    } else if ($fromConvertionUnit == 'Square Centimeter' && $toConvertionUnit == 'Square Kilometer') {

        $ConvertArea = $Area * 1.E-10;
    } else if ($fromConvertionUnit == 'Square Centimeter' && $toConvertionUnit == 'Square Mile') {

        $ConvertArea = $Area * 3.861018768E-11;
    } else if ($fromConvertionUnit == 'Square Centimeter' && $toConvertionUnit == 'Square Yard') {

        $ConvertArea = $Area * 0.000119599;
    } else if ($fromConvertionUnit == 'Square Centimeter' && $toConvertionUnit == 'Square Foot') {

        $ConvertArea = $Area * 0.001076391;
    } else if ($fromConvertionUnit == 'Square Centimeter' && $toConvertionUnit == 'Square Inch') {

        $ConvertArea = $Area * 0.15500031;
    } else if ($fromConvertionUnit == 'Square Meter' && $toConvertionUnit == 'Square Centimeter') {

        $ConvertArea = $Area * 10000;
    } else if ($fromConvertionUnit == 'Square Kilometer' && $toConvertionUnit == 'Square Centimeter') {

        $ConvertArea = $Area * 10000000000;
    } else if ($fromConvertionUnit == 'Square Mile' && $toConvertionUnit == 'Square Centimeter') {

        $ConvertArea = $Area * 25899900000;
    } else if ($fromConvertionUnit == 'Square Yard' && $toConvertionUnit == 'Square Centimeter') {

        $ConvertArea = $Area * 8361.2736;
    } else if ($fromConvertionUnit == 'Square Foot' && $toConvertionUnit == 'Square Centimeter') {

        $ConvertArea = $Area * 929.0304;
    } else if ($fromConvertionUnit == 'Square Inch' && $toConvertionUnit == 'Square Centimeter') {

        $ConvertArea = $Area * 6.4516;
    } else if ($fromConvertionUnit == 'Acre' && $toConvertionUnit == 'Square Meter') {

        $ConvertArea = $Area * 4046.8564224;
    } else if ($fromConvertionUnit == 'Acre' && $toConvertionUnit == 'Square Kilometer') {

        $ConvertArea = $Area * 0.0040468564;
    } else if ($fromConvertionUnit == 'Acre' && $toConvertionUnit == 'Square Mile') {

        $ConvertArea = $Area * 0.0015624989;
    } else if ($fromConvertionUnit == 'Acre' && $toConvertionUnit == 'Square yard') {

        $ConvertArea = $Area * 4840;
    } else if ($fromConvertionUnit == 'Acre' && $toConvertionUnit == 'Square Foot') {

        $ConvertArea = $Area * 43560;
    } else if ($fromConvertionUnit == 'Acre' && $toConvertionUnit == 'Square Inch') {

        $ConvertArea = $Area * 6272640;
    } else if ($fromConvertionUnit == 'Square Meter' && $toConvertionUnit == 'Acre') {

        $ConvertArea = $Area * 0.0002471054;
    } else if ($fromConvertionUnit == 'Square Kilometer' && $toConvertionUnit == 'Acre') {

        $ConvertArea = $Area * 247.10538147;
    } else if ($fromConvertionUnit == 'Square Mile' && $toConvertionUnit == 'Acre') {

        $ConvertArea = $Area * 640.00046695;
    } else if ($fromConvertionUnit == 'Square Yard' && $toConvertionUnit == 'Acre') {

        $ConvertArea = $Area * 0.0002066116;
    } else if ($fromConvertionUnit == 'Square Foot' && $toConvertionUnit == 'Acre') {

        $ConvertArea = $Area * 0.0000229568;
    } else if ($fromConvertionUnit == 'Square Inch' && $toConvertionUnit == 'Acre') {

        $ConvertArea = $Area * 1.594225079E-7;
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
    <h1>Convertion Of Area</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

        <div class="set">
            <label for="fromConvertionUnit">From:</label>
            <input type="number" name="Area" id="Area" value="<?php echo (!empty($Area)) ? $Area : '' ?>">

            <select name="fromConvertionUnit" id="fromConvertionUnit">
                <option value="Square Meter"
                    <?php if (isset($Area) && $fromConvertionUnit == "Square Meter") {echo "selected";}?>>Square Meter
                </option>
                <option value="Square Kilometer"
                    <?php if (isset($Area) && $fromConvertionUnit == "Square Kilometer") {echo "selected";}?>>kilometer
                </option>
                <option value="Square Centimeter"
                    <?php if (isset($Area) && $fromConvertionUnit == "Square Centimeter") {echo "selected";}?>>Square
                    Centimeter</option>
                <option value="Square Mile"
                    <?php if (isset($Area) && $fromConvertionUnit == "Square Mile") {echo "selected";}?>>Square Mile
                </option>
                <option value="Square Yard"
                    <?php if (isset($Area) && $fromConvertionUnit == "Square Yard") {echo "selected";}?>>Square Yard
                </option>
                <option value="Square Foot"
                    <?php if (isset($Area) && $fromConvertionUnit == "Square Foot") {echo "selected";}?>>Square Foot
                </option>
                <option value="Square Inch"
                    <?php if (isset($Area) && $fromConvertionUnit == "Square Inch") {echo "selected";}?>>Square Inch
                </option>
            </select>
        </div>
        <div class="toset">
            <label for="toConvertionUnit">To:</label>
            <input type="number" class="myname" value="<?php echo (!empty($ConvertArea)) ? $ConvertArea : '0' ?>">
            <select name="toConvertionUnit" id="toConvertionUnit">
                <option value="Square Meter"
                    <?php if (isset($Area) && $toConvertionUnit == "Square Meter") {echo "selected";}?>>Square Meter
                </option>
                <option value="Square Kilometer"
                    <?php if (isset($Area) && $toConvertionUnit == "Square Kilometer") {echo "selected";}?>>Square
                    Kilometer</option>
                <option value="Square Centimeter"
                    <?php if (isset($Area) && $toConvertionUnit == "Square Centimeter") {echo "selected";}?>>Square
                    Centimeter</option>
                <option value="Square Mile"
                    <?php if (isset($Area) && $toConvertionUnit == "Square Mile") {echo "selected";}?>>Square Mile
                </option>
                <option value="Square Yard"
                    <?php if (isset($Area) && $toConvertionUnit == "Square Yard") {echo "selected";}?>>Square Yard
                </option>
                <option value="Square Foot"
                    <?php if (isset($Area) && $toConvertionUnit == "Square Foot") {echo "selected";}?>>Square Foot
                </option>
                <option value="Square Inch"
                    <?php if (isset($Area) && $toConvertionUnit == "Square Inch") {echo "selected";}?>>Square Inch
                </option>
            </select>
        </div>
        <div>
            <input type="submit" id="sub" value="Convert">
        </div>
    </form>
</body>

</html>