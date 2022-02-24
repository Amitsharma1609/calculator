<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$convertedTemperature    = 0;

/* The condition is entered when the request is of POST type. */
if($_SERVER['REQUEST_METHOD'] == 'POST'){
   $temperature            = $_POST['temperature'];
   $fromConvertionUnit     = $_POST['fromConvertionUnit'];
   $toConvertionUnit       = $_POST['toConvertionUnit'];

/* if the temperature conversion are of same unit then no need for conversion */

   if($fromConvertionUnit == $toConvertionUnit){
       $convertedTemperature = $temperature;
   }else if($fromConvertionUnit == 'fahrenheit' && $toConvertionUnit == 'celcius') {

/* formula to convert Fahrenheit to Celcius */
       $convertedTemperature = ($temperature - 32) * 0.5556;
   }else if($fromConvertionUnit == 'celcius' && $toConvertionUnit == 'fahrenheit') {

/* formula to convert Celcius to Fahrenheit */
       $convertedTemperature = ($temperature * 1.8) + 32;
   }
}
?>
<!doctype html>
<html lang="en">
   <head>
       <meta charset="UTF-8">
       <title>Temperature Converter</title>
   </head>
   <body>
       <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
           <div>
<!-- If the temperature value has be submitted and has data then it will prefilled -->
               <label for="temperature">Temperature</label> <br/>
               <input type="number" name="temperature" id="temperature" value="<?php echo (!empty($temperature)) ? $temperature : '' ?>">
           </div>
           <div>
               <label for="fromConvertionUnit">Select From Convertion Unit</label><br/>
               <select name="fromConvertionUnit" id="fromConvertionUnit">
                   <option value="fahrenheit">Fahrenheit</option>
                   <option value="celcius">Celcius</option>
               </select>
       </div>
       <div>
               <label for="toConvertionUnit">Select To Convertion Unit</label><br/>
               <select name="toConvertionUnit" id="toConvertionUnit">
                   <option value="fahrenheit">Fahrenheit</option>
                   <option value="celcius">Celcius</option>
               </select>
       </div>
<!-- Once the page is submitted and conversion is done the respective values will be added in the following section -->
           <div>
       Converted Temperature <b> <?php  echo (!empty($temperature)) ? $temperature : '--' ?></b> Value From   <b><?php echo  (!empty($fromConvertionUnit)) ? $fromConvertionUnit : '--' ?></b> TO  <b><?php echo  (!empty($toConvertionUnit)) ? $toConvertionUnit : '--' ?></b> is <b><?php echo  (!empty($convertedTemperature)) ? $convertedTemperature : '--' ?><b/>
               <label for="converted_value">Converted Value</label><br/>
<input type="number" value="<?php echo (!empty($convertedTemperature)) ? $convertedTemperature : '0' ?>">
           </div>
           <div>
<input type="submit" value="Convert">
           </div>
       </form>
   </body>
</html>