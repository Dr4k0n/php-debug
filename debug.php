<?php

error_reporting (-1);
ini_set ('display_errors', 1);
ini_set ('display_startup_errors', 1);
set_error_handler (function ($level, $message, $file, $line = 0, $context) { die ("[ERROR] Error: $level, $message, $file:$line\n"); });
register_shutdown_function (function () { if ($error = error_get_last()) die ("[SHUTDOWN] Fatal error: {$error['message']}, {$error['file']}:{$error['line']}\n"); });
set_exception_handler (function ($e) { die ("[EXCEPTION] " . get_class($e) . " {$e->getMessage()}, {$e->getFile()}:{$e->getLine()}\n"); } );

