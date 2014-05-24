<?php

$text = file_get_contents('http://hacker-olympics-london.herokuapp.com/leaderboard.json');

$json = json_decode($text);

$scores = [];
foreach( $json as $row ) {
  $scores[] = array($row->name, $row->points);
}

usort($scores, function($a, $b) {
  return $a[1] < $b[1];
});

