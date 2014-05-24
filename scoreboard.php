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

foreach( $scores as $idx => $b ) {
  if( $b[0] == "Zeta Minor" )
  {
    print '* ';
  }

  print "{$b[0]} - {$b[1]}\n";
}
