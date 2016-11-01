<?php

$result = $mysqli->query("SELECT * FROM audio");
$result = convertResultToArray($result);
