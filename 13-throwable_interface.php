<?php

try {
    eval('parse error ?');
} catch(Exception $e) {
    echo $e->getMessage();
}
