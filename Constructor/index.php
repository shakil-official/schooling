<?php

require_once 'MultipleConstructorLearning.php';


echo MultipleConstructor::createWithName("John Doe")->getName();

echo (new MultipleConstructor("Jane Doe", 30))->getName();

