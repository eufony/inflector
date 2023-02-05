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
