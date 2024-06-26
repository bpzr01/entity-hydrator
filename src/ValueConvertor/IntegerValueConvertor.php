<?php

declare(strict_types=1);

namespace Bpzr\EntityAdapter\ValueConvertor;

use Bpzr\EntityAdapter\ValueConvertor\Abstract\ValueConvertorInterface;

class IntegerValueConvertor implements ValueConvertorInterface
{
    /** @inheritDoc */
    public function shouldApply(string $propertyTypeName, string $entityFqn): bool
    {
        return $propertyTypeName === 'int';
    }

    /** @inheritDoc */
    public function apply(string $typeName, mixed $value): int
    {
        return (int) $value;
    }
}