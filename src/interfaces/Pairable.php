<?php
    declare(strict_types=1);

    namespace Stolfam\Interfaces;

    /**
     * Class Pairable
     * @package Stolfam\Interfaces
     */
    interface Pairable
    {
        public function toPair(): IPair;
    }