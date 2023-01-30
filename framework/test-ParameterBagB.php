<?php

// $> php framework/test-ParameterBagB.php

require 'ParameterBagB.php';

$obj = new ParameterBagB(['AZ', 'ER', 'TY', 313, true ]);

echo $obj->count();     // Prints 5
echo "\n";
echo count($obj);       // Prints 5
