<?php

namespace Eufony\Inflector;

/**
 * Provides an Inflector implementation based on the Null Object Pattern.
 *
 * Each inflection method returns the given string directly without any
 * modifications.
 */
class NullInflector implements InflectorInterface
{
    /**
     * @inheritDoc
     */
    public function toPascalCase(string $string): string
    {
        return $string;
    }

    /**
     * @inheritDoc
     */
    public function toSnakeCase(string $string): string
    {
        return $string;
    }

    /**
     * @inheritDoc
     */
    public function toCamelCase(string $string): string
    {
        return $string;
    }

    /**
     * @inheritDoc
     */
    public function pluralize(string $string): string
    {
        return $string;
    }

    /**
     * @inheritDoc
     */
    public function singularize(string $string): string
    {
        return $string;
    }
}
