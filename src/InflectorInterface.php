<?php
/*
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published
 * by the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

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
