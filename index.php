<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
   // variable using $
   $name = "Nur Aleina";
   echo "hello $name";
   echo "<br>";

   /*scalartype
   $string = "Aleina";
   $int = 123456;
   $float = 2.333;
   $bool = true;

   arraytype
   $names = ["Aleina", "Sunday", "Monday"];

   scalartype - if contain one type
   $string = "";
   $int = 0;
   $float = 0;
   $bool = false;

   $array = [];
   $object = null

   object type
   $object = new Car();*/

   echo $_SERVER["DOCUMENT_ROOT"];//location website
   echo "<br>";
   echo $_SERVER["PHP_SELF"];//root and file
   echo "<br>";
   echo $_SERVER["SERVER_NAME"];//server name
   echo "<br>";
   echo $_SERVER["REQUEST_METHOD"];//HOW THIS page was access
   echo "<br>";
   $_GET["name"];//get data
   echo $_GET["name"];
   echo "<br>";
   echo $_FILES["name"];
?>
 <p>Hello! My name is <?php echo$name ?> Hello world!</p>

</body>
</html>