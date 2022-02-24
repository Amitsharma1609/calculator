<?php

$ConvertWeight = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Weight = $_POST['Weight'];
    $fromConvertionUnit = $_POST['fromConvertionUnit'];
    $toConvertionUnit = $_POST['toConvertionUnit'];

    if ($fromConvertionUnit == $toConvertionUnit) {
        $ConvertWeight = $Weight;
    } else if ($fromConvertionUnit == 'Kilogram' && $toConvertionUnit == 'Gram') {
        $ConvertWeight = $Weight * 1000;
    } else if ($fromConvertionUnit == 'Gram' && $toConvertionUnit == 'Kilogram') {

        $ConvertWeight = $Weight / 1000;
    } else if ($fromConvertionUnit == 'Kilogram' && $toConvertionUnit == 'Milligram') {

        $ConvertWeight = $Weight * 1000000;
    } else if ($fromConvertionUnit == 'Kilogram' && $toConvertionUnit == 'Pound') {

        $ConvertWeight = $Weight * 2.2046244202;
    } else if ($fromConvertionUnit == 'Kilogram' && $toConvertionUnit == 'Metric Ton') {

        $ConvertWeight = $Weight * 0.001;
    } else if ($fromConvertionUnit == 'Kilogram' && $toConvertionUnit == 'Carrat') {

        $ConvertWeight = $Weight * 5000;
    } else if ($fromConvertionUnit == 'Gram' && $toConvertionUnit == 'Milligram') {

        $ConvertWeight = $Weight * 1000;
    } else if ($fromConvertionUnit == 'Gram' && $toConvertionUnit == 'Pound') {

        $ConvertWeight = $Weight * 0.0022046244;
    } else if ($fromConvertionUnit == 'Gram' && $toConvertionUnit == 'Square Yard') {

        $ConvertWeight = $Weight * 1093.61;
    } else if ($fromConvertionUnit == 'Gram' && $toConvertionUnit == 'Metric Ton') {

        $ConvertWeight = $Weight * 0.000001;
    } else if ($fromConvertionUnit == 'Gram' && $toConvertionUnit == 'Carrat') {

        $ConvertWeight = $Weight * 5;
    } else if ($fromConvertionUnit == 'Milligram' && $toConvertionUnit == 'Gram') {

        $ConvertWeight = $Weight * 0.001;
    } else if ($fromConvertionUnit == 'Milligram' && $toConvertionUnit == 'Pound') {

        $ConvertWeight = $Weight / 0.000002204;
    } else if ($fromConvertionUnit == 'Milligram' && $toConvertionUnit == 'Kilogram') {

        $ConvertWeight = $Weight * 0.000001;
    } else if ($fromConvertionUnit == 'Milligram' && $toConvertionUnit == 'Metric Ton') {

        $ConvertWeight = $Weight * 0.003280;
    } else if ($fromConvertionUnit == 'Milligram' && $toConvertionUnit == 'Carrat') {

        $ConvertWeight = $Weight * 0.005;
    } else if ($fromConvertionUnit == 'Milligram' && $toConvertionUnit == 'Kilogram') {

        $ConvertWeight = $Weight * 0.000001;
    } else if ($fromConvertionUnit == 'Metric Ton' && $toConvertionUnit == 'Carrat') {

        $ConvertWeight = $Weight * 5000000;
    } else if ($fromConvertionUnit == 'Metric Ton' && $toConvertionUnit == 'Kilogram') {

        $ConvertWeight = $Weight * 1000;
    } else if ($fromConvertionUnit == 'Metric Ton' && $toConvertionUnit == 'Gram') {

        $ConvertWeight = $Weight * 1000000;
    } else if ($fromConvertionUnit == 'Metric Ton' && $toConvertionUnit == 'Pound') {

        $ConvertWeight = $Weight * 2204.6244;
    } else if ($fromConvertionUnit == 'Metric Ton' && $toConvertionUnit == 'Milligram') {

        $ConvertWeight = $Weight * 0.3333;
    } else if ($fromConvertionUnit == 'Metric Ton' && $toConvertionUnit == 'Carrat') {

        $ConvertWeight = $Weight * 12;
    } else if ($fromConvertionUnit == 'Carrat' && $toConvertionUnit == 'Kilogram') {

        $ConvertWeight = $Weight * 0.0002;
    } else if ($fromConvertionUnit == 'Carrat' && $toConvertionUnit == 'Gram') {

        $ConvertWeight = $Weight * 0.2;
    } else if ($fromConvertionUnit == 'Carrat' && $toConvertionUnit == 'Metric Ton') {

        $ConvertWeight = $Weight * 0.0;
    } else if ($fromConvertionUnit == 'Carrat' && $toConvertionUnit == 'Pound') {

        $ConvertWeight = $Weight * 0.0004409249;
    } else if ($fromConvertionUnit == 'Carrat' && $toConvertionUnit == 'Metric Ton') {

        $ConvertWeight = $Weight * 0.0833;
    } else if ($fromConvertionUnit == 'Pound' && $toConvertionUnit == 'Kilogram') {

        $ConvertWeight = $Weight * 0.453592;
    } else if ($fromConvertionUnit == 'Pound' && $toConvertionUnit == 'Gram') {

        $ConvertWeight = $Weight * 453.592;
    } else if ($fromConvertionUnit == 'Pound' && $toConvertionUnit == 'Milligram') {

        $ConvertWeight = $Weight * 453592;
    } else if ($fromConvertionUnit == 'Pound' && $toConvertionUnit == 'Carrat') {

        $ConvertWeight = $Weight * 2267.96;
    } else if ($fromConvertionUnit == 'Pound' && $toConvertionUnit == 'Metric Ton') {

        $ConvertWeight = $Weight * 0.000453595;
    } else if ($fromConvertionUnit == 'Pound' && $toConvertionUnit == 'Carrat') {

        $ConvertWeight = $Weight * 0.3937007;
    } else if ($fromConvertionUnit == 'Kilogram' && $toConvertionUnit == 'Pound') {

        $ConvertWeight = $Weight * 100;
    } else if ($fromConvertionUnit == 'Milligram' && $toConvertionUnit == 'Kilogram') {

        $ConvertWeight = $Weight * 100000;
    } else if ($fromConvertionUnit == 'Milligram' && $toConvertionUnit == 'Gram') {

        $ConvertWeight = $Weight * 1.609;
    } else if ($fromConvertionUnit == 'Milligram' && $toConvertionUnit == 'Pound') {

        $ConvertWeight = $Weight * 91.44;
    } else if ($fromConvertionUnit == 'Milligram' && $toConvertionUnit == 'Carrat') {

        $ConvertWeight = $Weight * 30.48;
    } else if ($fromConvertionUnit == 'Milligram' && $toConvertionUnit == 'Metric Ton') {

        $ConvertWeight = $Weight * 2.54;
    } else if ($fromConvertionUnit == 'Milligram' && $toConvertionUnit == 'Pound') {

        $ConvertWeight = $Weight * 0.1;
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
    <h1>Convertion Of Weight</h1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

        <div class="set">
            <label for="fromConvertionUnit">From:</label>
            <input type="number" name="Weight" id="Weight" value="<?php echo (!empty($Weight)) ? $Weight : '' ?>">
            <select name="fromConvertionUnit" id="fromConvertionUnit">
                <option value="Kilogram"
                    <?php if (isset($Weight) && $fromConvertionUnit == "Kilogram") {echo "selected";}?>>Kilogram
                </option>
                <option value="Gram" <?php if (isset($Weight) && $fromConvertionUnit == "Gram") {echo "selected";}?>>
                    Gram</option>
                <option value="Pound" <?php if (isset($Weight) && $fromConvertionUnit == "Pound") {echo "selected";}?>>
                    Pound</option>
                <option value="Milligram"
                    <?php if (isset($Weight) && $fromConvertionUnit == "milliometer") {echo "selected";}?>>millimeter
                </option>
                <option value="Metric Ton"
                    <?php if (isset($Weight) && $fromConvertionUnit == "Metric Ton") {echo "selected";}?>>Metric Ton
                </option>
                <option value="Carrat"
                    <?php if (isset($Weight) && $fromConvertionUnit == "Carrat") {echo "selected";}?>> Carrat</option>
            </select>
        </div>
        <div class="toset">
            <label for="toConvertionUnit">To:</label>
            <input type="number" class="myname" value="<?php echo (!empty($ConvertWeight)) ? $ConvertWeight : '0' ?>">
            <select name="toConvertionUnit" id="toConvertionUnit">
                <option value="Kilogram"
                    <?php if (isset($Weight) && $toConvertionUnit == "Kilogram") {echo "selected";}?>> Kilogram</option>
                <option value="Gram" <?php if (isset($Weight) && $toConvertionUnit == "Gram") {echo "selected";}?>>Gram
                </option>
                <option value="Pound" <?php if (isset($Weight) && $toConvertionUnit == "Pound") {echo "selected";}?>>
                    Pound</option>
                <option value="Milligram"
                    <?php if (isset($Weight) && $toConvertionUnit == "Milligram") {echo "selected";}?>>Milligram
                </option>
                <option value="Metric Ton"
                    <?php if (isset($Weight) && $toConvertionUnit == "Metric Ton") {echo "selected";}?>>Metric Ton
                </option>
                <option value="Carrat" <?php if (isset($Weight) && $toConvertionUnit == "Carrat") {echo "selected";}?>>
                    Carrat</option>
            </select>
        </div>
        <div>
            <input type="submit" id="sub" value="Convert">
        </div>
    </form>
</body>

</html>