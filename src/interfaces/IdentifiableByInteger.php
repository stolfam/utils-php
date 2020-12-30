<?php
    declare(strict_types=1);

    namespace Stolfam\Interfaces;

    /**
     * Interface IdentifiableByInteger
     * @package Stolfam\Interfaces
     */
    interface IdentifiableByInteger
    {
        public function getId(): int;
    }