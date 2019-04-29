<?php declare(strict_types=1);

namespace Shopware\Core\Framework\DataAbstractionLayer;

use Shopware\Core\Framework\DataAbstractionLayer\Exception\MappingEntityClassesException;

abstract class MappingEntityDefinition extends EntityDefinition
{
    public static function getCollectionClass(): string
    {
        throw new MappingEntityClassesException();
    }

    public static function getEntityClass(): string
    {
        throw new MappingEntityClassesException();
    }

    protected static function getBaseFields(): array
    {
        return [];
    }

    protected static function defaultFields(): array
    {
        return [];
    }
}
