<?php


class ClassToSerialize { }

$myClassSerialized = serialize(new ClassToSerialize());
$myClass = unserialize(
    $myClassSerialized,
    ["allowed_classes" => ['']]
);

