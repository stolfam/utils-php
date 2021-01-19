<?php
    declare(strict_types=1);

    namespace Stolfam\Traits;

    use Nette\SmartObject;


    /**
     * Trait IdentifiedByString
     * @package Stolfam\Traits
     * @property-read string $id
     */
    trait IdentifiedByString
    {
        use SmartObject;


        protected string $id;

        /**
         * @return string
         */
        public function getId(): string
        {
            return $this->id;
        }
    }