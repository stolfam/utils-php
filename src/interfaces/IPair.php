<?php
    declare(strict_types=1);

    namespace Stolfam\Interfaces;

    /**
     * Interface IPair
     * @package Stolfam\Interfaces
     */
    interface IPair
    {
        public function getKey();

        public function getValue();
    }