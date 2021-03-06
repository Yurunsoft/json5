<?php

/*
 * This file is part of the colinodell/json5 package.
 *
 * (c) Colin O'Dell <colinodell@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace ColinODell\Json5\Test\Functional;

use ColinODell\Json5\Json5Decoder;
use PHPUnit\Framework\TestCase;

class MaximumDepthTest extends TestCase
{
    /**
     * @expectedException \ColinODell\Json5\SyntaxError
     * @expectedExceptionMessage Maximum stack depth exceeded
     */
    public function testMaximumDepthWithArray()
    {
        Json5Decoder::decode('[[1]]', false, 2);
    }

    /**
     * @expectedException \ColinODell\Json5\SyntaxError
     * @expectedExceptionMessage Maximum stack depth exceeded
     */
    public function testMaximumDepthWithObject()
    {
        Json5Decoder::decode('{"foo": {"bar": "baz"}}', false, 2);
    }

    public function testMaximumDepthNotHitWithArray()
    {
        $result = Json5Decoder::decode('[[1]]', false, 3);

        $this->assertSame([[1]], $result);
    }

    public function testMaximumDepthNotHitWithObject()
    {
        $result = Json5Decoder::decode('{"foo": {"bar": "baz"}}', false, 3);

        $this->assertEquals((object)['foo'=>(object)['bar'=>'baz']], $result);
    }
}
