<?php

$result = $mysqli->query("SELECT * FROM newsarticles");

convertResultToArray($result);
print_r($result);
