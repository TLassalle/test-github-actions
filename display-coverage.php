<?php

$xml = simplexml_load_file('coverage.xml');

$coveredStatements = $xml->project->metrics['coveredstatements'];
$totalStatements = $xml->project->metrics['statements'];
$percentage = round(min(1, $coveredStatements / $totalStatements) * 100);
$percentageString = $percentage.'%';
echo 100. === $percentage ? "\033[32m$percentageString" : "\033[31m$percentageString";
unlink('coverage.xml');
