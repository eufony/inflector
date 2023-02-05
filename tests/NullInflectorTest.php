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

namespace Eufony\Inflector\Tests;

use Eufony\Inflector\InflectorInterface;
use Eufony\Inflector\NullInflector;

/**
 * Unit tests for `\Eufony\Inflector\NullInflector`.
 */
class NullInflectorTest extends AbstractInflectorTest
{
    /**
     * @inheritDoc
     */
    public function getInflector(): InflectorInterface
    {
        return new NullInflector();
    }

    /**
     * @dataProvider cases
     */
    public function testToPascalCase(string $pascal, string $snake, string $camel)
    {
        $this->assertEquals($snake, $this->inflector->toPascalCase($snake));
        $this->assertEquals($camel, $this->inflector->toPascalCase($camel));
    }

    /**
     * @dataProvider cases
     */
    public function testToSnakeCase(string $pascal, string $snake, string $camel)
    {
        $this->assertEquals($pascal, $this->inflector->toSnakeCase($pascal));
        $this->assertEquals($camel, $this->inflector->toSnakeCase($camel));
    }

    /**
     * @dataProvider cases
     */
    public function testToCamelCase(string $pascal, string $snake, string $camel)
    {
        $this->assertEquals($pascal, $this->inflector->toCamelCase($pascal));
        $this->assertEquals($snake, $this->inflector->toCamelCase($snake));
    }

    /**
     * @dataProvider words
     */
    public function testPluralize(string $singular, string $plural)
    {
        $this->assertEquals($singular, $this->inflector->pluralize($singular));
    }

    /**
     * @dataProvider words
     */
    public function testSingularize(string $singular, string $plural)
    {
        $this->assertEquals($plural, $this->inflector->singularize($plural));
    }
}
