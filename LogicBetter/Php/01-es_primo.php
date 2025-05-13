<?php

$list = [
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9,
    10,
    11,
    12,
    13,
    14,
    15,
    16,
    17,
    18,
    19,
    20
];

foreach ($list as $unit => $ke) {
    # code...
    if ($unit % 2 == 0) {
?>
        <ul key="<?php echo $ke; ?>">
            <li><?php echo"El numero: '{$unit}' es primo. \n"; ?></li>
        </ul>
<?php
    } else {
        ?>
        <ul key="<?php echo $ke; ?>">
            <li><?php echo"El numero: '{$unit}' no es primo. \n"; ?></li>
        </ul>
<?php
    }
}

echo "=================================================================================";

for ($i=0; $i < 20; $i++) { 
    # code...
    if ($i % 2 == 0) {
?>
        <ul key="<?php echo $i; ?>">
            <li><?php echo"El numero: '{$i}' es primo. \n"; ?></li>
        </ul>
<?php
    } else {
    ?>
    <ul key="<?php echo $i; ?>">
        <li><?php echo"El numero: '{$i}' no es primo. \n"; ?></li>
    </ul>
<?php
    }
}

?>

