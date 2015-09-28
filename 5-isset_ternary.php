<?php

$_GET = ['query' => null, 'query2' => false, 'query3' => 'OK'];

$query = $_GET['query'] ?? $_GET['query2'] ?? $_GET['query3'];

if($query === '??') {
    echo "Bingo !";
}
