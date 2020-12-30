<?php
    declare(strict_types=1);

    namespace Stolfam\Interfaces;

    use Stolfam\Table\Row;


    /**
     * Interface IStorable
     * @package Stolfam\Interfaces
     *
     * Provides serialized data in row with column names (represented by array)
     *
     * Example:
     *  [
     *      "column_name" =>            $value,
     *      "another_column_name" =>    $another_value
     *  ]
     */
    interface IStorable
    {
        public function toRow(): Row;
    }