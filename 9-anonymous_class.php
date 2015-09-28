<?php

class Logger
{
    public static function write(Message $message)
    {
        echo $message->getText();
    }
}

interface Message 
{ 
    public function getText();
}

$message = null/* ??? */;

Logger::write($message);
