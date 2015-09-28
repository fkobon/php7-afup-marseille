<?php

$users = ['Pierre', 'Paul', 'Afup Marseille'];
usort($users, function ($a, $b) {

});

echo current($users);
