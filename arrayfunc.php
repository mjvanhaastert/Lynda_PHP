<html>
<head>
    <title>Array Functions</title>
</head>
<body>
<?php $numbers = array(8,22,15,42,16,4);?>

Count :     <?php echo count($numbers)?> <br>
Max value:  <?php echo max($numbers)?> <br>
Min value:  <?php echo min($numbers)?> <br>

<br>
<pre>
Sort:          <?php sort($numbers); print_r($numbers);?> <br>
</pre>
<pre>
    Reverse sort:  <?php rsort($numbers); print_r($numbers);?> <br>
</pre>
<?php ?>

<br>
Implode: <?php echo $num_string = implode(" * ", $numbers);?> <br>
Explode: <?php print_r(explode(" * ",$num_string));?> <br>
<br>

15 in array?: <?php echo in_array(15, $numbers); //return T/F ?> <br>
19 in array?: <?php echo in_array(19, $numbers); //return T/F ?> <br>

</body>
</html>
