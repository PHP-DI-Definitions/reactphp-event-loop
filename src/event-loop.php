<?php

use React\EventLoop\Factory;
use React\EventLoop\LoopInterface;

return new class {
    public function __invoke(): LoopInterface
    {
        return Factory::create();
    }
};
