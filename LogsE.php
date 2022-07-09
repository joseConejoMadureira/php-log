<?php

//namespace de acordo com projeto
use Exception;

class LogsW
{

    public  static function write($message)
    {
        
            try {
                $file = fopen('../logs/logs.log', 'a+');
                $text = " ";
                $text .=  "### data log ---> " . date('d/m/y H:i:s');
                $text .= "  >>>>> : " . $message . "  >>>>> #";
                $text .= PHP_EOL;
                fwrite($file, $text);
                fclose($file);
            } catch (Exception $e) {
                $exception = '<script>';
                $exception .= 'console.log('. json_encode( $e->getMessage()) .')' ;
                $exception .= '</script>';
                echo $exception;
                
            }
        
    }
}
