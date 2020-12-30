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
        /**
         * @return string
         */
        public function getId(): string
        {
            return $this->id;
        }

        use SmartObject;
    }