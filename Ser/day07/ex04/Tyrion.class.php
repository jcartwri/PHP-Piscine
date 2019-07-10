<?php


class Tyrion
{
    public function sleepWith($who) {
        if (get_class($who) == "Jaime" or get_class($who) == "Cersei")
            echo "Not even if I'm drunk !", PHP_EOL;
        else
            echo "Let's do this", PHP_EOL;
    }
}