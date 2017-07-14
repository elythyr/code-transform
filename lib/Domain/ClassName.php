<?php

namespace Phpactor\CodeTransform\Domain;

final class ClassName
{
    private $name;

    private function __construct(string $name)
    {
        $this->name = $name;
    }

    public static function fromString(string $name)
    {
        return new self($name);
    }

    public function __toString()
    {
        return $this->name;
    }
}