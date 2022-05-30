<?php
declare(strict_types=1);

namespace Magic;

class PeopleList
{
    private array $list = [];

    public function __set(string $name, string $value)
    {
        $this->list[] = $value;
    }

    public function getList(): array
    {
        return $this->list;
    }
}