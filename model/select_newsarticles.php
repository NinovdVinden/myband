<?php
$start_item = (($page_nr-1) * ITEMS_PER_PAGE);

$sql = "SELECT * FROM newsarticles LIMIT " . $start_item . ", " . ITEMS_PER_PAGE;
$result = $mysqli->query($sql);
$result = convertResultToArray($result);
