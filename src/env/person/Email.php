<?php
    declare(strict_types=1);

    namespace Stolfam\Env\Person;

    use Nette\SmartObject;


    /**
     * Class Email
     * @package Stolfam\Env\Person
     * @property-read string $domain
     */
    class Email
    {
        use SmartObject;

        public string $definition;

        /**
         * Email constructor.
         * @param string $definition
         */
        public function __construct(string $definition)
        {
            $this->definition = $definition;
        }

        /**
         * @return string|null
         */
        public function getDomain(): ?string
        {
            $exploded = explode("@", $this->definition);

            if (isset($exploded[1])) {
                return $exploded[1];
            }

            return null;
        }

        public function __toString()
        {
            return $this->definition;
        }
    }