<?php
    declare(strict_types=1);

    namespace Stolfam\Env;

    use Stolfam\Interfaces\IdentifiableByInteger;


    /**
     * Class IntegerId
     * @package Stolfam\Env
     */
    class IntegerId implements IdentifiableByInteger
    {
        protected int $id;

        /**
         * IntegerId constructor.
         * @param int $id
         */
        public function __construct(int $id)
        {
            $this->id = $id;
        }

        public function getId(): int
        {
            return $this->id;
        }
    }