<?php
namespace App;

class Command{
    public $command;

    /**
     * Command constructor.
     * Registers the command which have been requested.
     *
     * @param $command
     */
    public function __construct($argv)
    {
        array_shift($argv);
        $this->command = $argv;
        return $this->command;
    }

}