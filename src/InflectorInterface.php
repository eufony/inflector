<?php

namespace Eufony\Inflector;

/**
 * Common interface for linguistic inflection libraries.
 *
 * Inflection features include changing capitalization of strings, as well as
 * the pluralization and singularization of words.
 */
interface InflectorInterface
{
    /**
     * Converts `snake_case` and `camelCase` to `PascalCase`.
     *
     * @param string $string
     * @return string
     */
    public function toPascalCase(string $string): string;

    /**
     * Converts `PascalCase` and `camelCase` to `snake_case`.
     *
     * @param string $string
     * @return string
     */
    public function toSnakeCase(string $string): string;

    /**
     * Converts `PascalCase` and `snake_case` to `camelCase`.
     *
     * @param string $string
     * @return string
     */
    public function toCamelCase(string $string): string;

    /**
     * Returns a word in pluralized form.
     *
     * @param string $string
     * @return string
     */
    public function pluralize(string $string): string;

    /**
     * Returns a word in singularized form.
     *
     * @param string $string
     * @return string
     */
    public function singularize(string $string): string;
}
