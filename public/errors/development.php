<?php

/**
 * @var $errno \wfm\ErrorHandler
 * @var $errstr \wfm\ErrorHandler
 * @var $errfile \wfm\ErrorHandler
 * @var $errline \wfm\ErrorHandler
 */

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error</title>
 </head>
 <body>
    <h1>Error is passed</h1>
    <p><b>Code of error:</b><?= $errno ?></p>
    <p><b>Text of error:</b><?= $errstr ?></p>
    <p><b>A file where the error is passed:</b><?= $errfile ?></p>
    <p><b>A line where the error is passed:</b><?= $errline ?></p>
 </body>
 </html>