<?php

$text = file_get_contents('http://hacker-olympics-london.herokuapp.com/leaderboard.json');

$json = json_decode($text);



