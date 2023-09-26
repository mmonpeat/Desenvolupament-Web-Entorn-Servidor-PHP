<?php
    trait Loggable {
        public function log($message) {
            $timestamp = date("Y-m-d H:i:s");
            echo "[$timestamp] $message\n";
        }
    }
?>