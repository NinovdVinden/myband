<?php

$result = $mysqli->query("SELECT * FROM tourdates");
$result = convertResultToArray($result);
