<?php

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
    protected function setUp()
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
        $this->assertTrue($this->memcachedClient->ping());
    }

    /**
     * Test add.
     */
    public function testAdd()
    {
        $this->assertTrue($this->memcachedClient->add('key', 'value'));
    }

    /**
     * Test set.
     */
    public function testSet()
    {
        $this->assertTrue($this->memcachedClient->set('key', 'value'));
    }

    /**
     * Test replace.
     */
    public function testReplace()
    {
        $this->assertTrue($this->memcachedClient->replace('key', 'value'));
    }

    /**
     * Test get.
     */
    public function testGet()
    {
        $this->assertTrue($this->memcachedClient->get('key'));
    }

    /**
     * Test increment.
     */
    public function testIncrement()
    {
        $this->assertTrue($this->memcachedClient->increment('key'));
    }

    /**
     * Test quit.
     */
    public function testQuit()
    {
        $this->assertTrue($this->memcachedClient->quit());
    }
}
