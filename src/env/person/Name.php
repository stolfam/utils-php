<?php
declare(strict_types=1);

    namespace Stolfam\Env\Person;

    use Nette\SmartObject;


    /**
     * Class Name
     * @package Stolfam\Env\Person
     * @property string      $full
     * @property-read string $first
     * @property-read string $last
     */
    class Name
    {
        use SmartObject;

        protected string $fullname;

        /** @var string[] */
        private array $exploded = [];

        /**
         * Name constructor.
         * @param string $fullname
         */
        public function __construct(string $fullname)
        {
            $this->fullname = $fullname;
            $this->exploded = explode(" ", trim($fullname));
        }

        /**
         * @return string
         */
        public function getFirst(): string
        {
            return $this->exploded[0];
        }

        /**
         * @return string
         */
        public function getLast(): string
        {
            $lastNames = [];
            for ($i = 1; $i < count($this->exploded); $i++) {
                $lastNames[] = $this->exploded[$i];
            }

            return implode(" ", $lastNames);
        }

        /**
         * @return string
         */
        public function getFull(): string
        {
            return $this->fullname;
        }

        /**
         * @param string $fullname
         */
        public function setFull(string $fullname): void
        {
            $this->fullname = $fullname;
            $this->exploded = explode(" ", trim($fullname));
        }

        /**
         * @return string
         */
        public function __toString()
        {
            return $this->fullname;
        }

        /**
         * @param string $firstname
         * @param string $lastname
         * @return Name
         */
        public static function create(string $firstname, string $lastname): Name
        {
            return new Name($firstname . " " . $lastname);
        }
    }