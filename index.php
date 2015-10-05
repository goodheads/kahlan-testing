<?php

require 'vendor/autoload.php';

use Busayo\StateAndCapital;

$state = new StateAndCapital();
echo $state->getCity('Lagos');