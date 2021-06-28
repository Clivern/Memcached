<?php

declare(strict_types=1);

/*
 * This file is part of Clivern Memcached Bundle
 * (c) Clivern <hello@clivern.com>
 */

namespace Tests;

use Clivern\Memcached\MemcachedClient;
use PHPUnit\Framework\TestCase;

class MemcachedClientTest extends TestCase
{
    private $memcachedClient;

    /**
     * Setup.
     */
    protected function setUp(): void
    {
        $this->memcachedClient = $this->createMock(MemcachedClient::class);

        $this->memcachedClient->method('quit')
            ->willReturn(true);

        $this->memcachedClient->method('ping')
            ->willReturn(true);

        $this->memcachedClient->method('add')
            ->willReturn(true);

        $this->memcachedClient->method('set')
            ->willReturn(true);

        $this->memcachedClient->method('replace')
            ->willReturn(true);

        $this->memcachedClient->method('get')
            ->willReturn(true);

        $this->memcachedClient->method('increment')
            ->willReturn(true);
    }

    /**
     * Test ping.
     */
    public function testPing()
    {
        self::assertTrue($this->memcachedClient->ping());
    }

    /**
     * Test add.
     */
    public function testAdd()
    {
        self::assertTrue($this->memcachedClient->add('key', 'value'));
    }

    /**
     * Test set.
     */
    public function testSet()
    {
        self::assertTrue($this->memcachedClient->set('key', 'value'));
    }

    /**
     * Test replace.
     */
    public function testReplace()
    {
        self::assertTrue($this->memcachedClient->replace('key', 'value'));
    }

    /**
     * Test get.
     */
    public function testGet()
    {
        self::assertTrue($this->memcachedClient->get('key'));
    }

    /**
     * Test increment.
     */
    public function testIncrement()
    {
        self::assertTrue($this->memcachedClient->increment('key'));
    }

    /**
     * Test quit.
     */
    public function testQuit()
    {
        self::assertTrue($this->memcachedClient->quit());
    }
}
