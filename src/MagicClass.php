<?php
namespace App;

class MagicClass {
    public function __construct() {
        echo "__construct called\n";
    }

    public function __destruct() {
        echo "__destruct called\n";
    }

    public function __call($name, $arguments) {
        echo "__call: $name\n";
    }

    public static function __callStatic($name, $arguments) {
        echo "__callStatic: $name\n";
    }

    public function __get($name) {
        echo "__get: $name\n";
    }

    public function __set($name, $value) {
        echo "__set: $name\n";
    }

    public function __isset($name) {
        echo "__isset: $name\n";
    }

    public function __unset($name) {
        echo "__unset: $name\n";
    }

    public function __toString() {
        return "__toString called\n";
    }

    public function __invoke() {
        echo "__invoke called\n";
    }

    public function __clone() {
        echo "__clone called\n";
    }
}
