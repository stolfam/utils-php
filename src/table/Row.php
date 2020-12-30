<?php
    declare(strict_types=1);

    namespace Stolfam\Table;

    use Stolfam\Interfaces\IArray;
    use Stolfam\Interfaces\IColumn;


    /**
     * Class Row
     * @package Ataccama\Common\Env
     */
    class Row implements IArray
    {
        /** @var IColumn[] */
        private array $columns;

        /**
         * TableRow constructor.
         * @param IColumn[] $columns
         * @param bool      $strict
         */
        public function __construct(array $columns = [], bool $strict = true)
        {
            foreach ($columns as $column) {
                if ($column instanceof Row || !$strict) {
                    $this->add($column);
                } else {
                    throw new \InvalidArgumentException("Column is not of type Row.");
                }
            }
        }

        /**
         * @param IColumn $column
         * @return Row
         */
        public function add(IColumn $column): Row
        {
            $this->columns[$column->getName()] = $column;

            return $this;
        }

        /**
         * @return mixed[]
         */
        public function toArray(): array
        {
            $array = [];
            foreach ($this->columns as $column) {
                $array[$column->getName()] = $column->getValue();
            }

            return $array;
        }
    }