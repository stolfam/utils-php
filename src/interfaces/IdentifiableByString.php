<?php
    declare(strict_types=1);

    namespace Stolfam\Interfaces;

    /**
     * Interface IdentifiableByString
     * @package Stolfam\Interfaces
     */
    interface IdentifiableByString
    {
        public function getId(): string;
    }