<?php
    declare(strict_types=1);

    namespace Stolfam\Env;

    use Stolfam\Interfaces\IdentifiableByString;


    /**
     * Class StringId
     * @package Stolfam\Env
     */
    class StringId implements IdentifiableByString
    {
        protected string $id;

        /**
         * StringId constructor.
         * @param string $id
         */
        public function __construct(string $id)
        {
            $this->id = $id;
        }

        public function getId(): string
        {
            return $this->id;
        }
    }