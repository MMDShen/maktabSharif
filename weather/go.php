
<html>
    <head>

    </head>
    <body>

        <?php

//echo var_dump($weathers);
echo "in " .$_GET['city'] . " in month of ".$_GET['month']." ".$_GET['year'].", forecast was as below:";?>
<ul>
<?php 
if(isset($_GET['weather'])){
    $weathers = $_GET['weather'];
    foreach($weathers as $item){?>
<li> <?php echo $item;?> </li>
<?php }}
else echo "undetected";?>

</ul>
    <table>
        <tr>

        </tr>
    </table>
    </body>
</html>
