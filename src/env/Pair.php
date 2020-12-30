<?php
    declare(strict_types=1);

    namespace Stolfam\Env;

    use Stolfam\Interfaces\IPair;


    /**
     * Class Pair
     * @package Ataccama\Common\Env
     */
    class Pair implements IPair
    {
        public $key, $value;

        /**
         * Pair constructor.
         * @param $key
         * @param $value
         */
        public function __construct($key, $value)
        {
            $this->key = $key;
            $this->value = $value;
        }

        public function getKey()
        {
            return $this->key;
        }

        public function getValue()
        {
            return $this->value;
        }
    }