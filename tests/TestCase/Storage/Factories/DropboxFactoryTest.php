<?php

/**
 * Copyright (c) Florian Krämer (https://florian-kraemer.net)
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Florian Krämer (https://florian-kraemer.net)
 * @author Florian Krämer
 * @link https://github.com/Phauthentic
 * @license https://opensource.org/licenses/MIT MIT License
 */

declare(strict_types=1);

namespace PhpCollective\Storage\Test\TestCase\Storage\Factories;

use PhpCollective\Infrastructure\Storage\Factories\DropboxFactory;
use PhpCollective\Storage\Test\TestCase\StorageTestCase as TestCase;
use Spatie\FlysystemDropbox\DropboxAdapter;

/**
 * DropboxFactoryTest
 */
class DropboxFactoryTest extends TestCase
{
    /**
     * @return void
     */
    public function testFactory(): void
    {
        $factory = new DropboxFactory();
        $adapter = $factory->build([]);
        $this->assertInstanceOf(DropboxAdapter::class, $adapter);
    }
}
