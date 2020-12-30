<?php
    declare(strict_types=1);

    namespace Stolfam\Interfaces;

    /**
     * Interface IColumn
     * @package Stolfam\Env
     */
    interface IColumn
    {
        public function getName(): string;

        public function getValue();
    }