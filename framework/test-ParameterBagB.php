<?php

// $> php framework/test-ParameterBagB.php

require 'ParameterBagB.php';

$obj = new ParameterBagB(['AZ', 'ER', 'TY', 313 ]);

echo $obj->count();     // Prints 4
echo "\n";
echo count($obj);       // Prints 4
