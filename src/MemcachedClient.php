<?php

/*
 * This file is part of Clivern Memcached Bundle
 * (c) Clivern <hello@clivern.com>
 */

namespace Clivern\Memcached;

class MemcachedClient implements MemcachedClientInterface
{
    private $client;
    private $server;
    private $port;

    /**
     * {@inheritdoc}
     */
    public function __construct($server, $port)
    {
        $this->server = $server;
        $this->port = $port;

        $this->client = new \Memcached();
        $this->client->setOption(\Memcached::OPT_COMPRESSION, false);
        $this->client->addServer($this->server, $this->port);
    }

    /**
     * Check Connection.
     *
     * @throws \Exception
     *
     * @return bool
     */
    public function ping()
    {
        if (false === @fsockopen($this->server, $this->port)) {
            throw new \Exception("Unable to connect to memcached server {$this->server}:{$this->port}");
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function add($key, $value, $expiration = 0)
    {
        return $this->client->add($key, $value, $expiration);
    }

    /**
     * {@inheritdoc}
     */
    public function set($key, $value, $expiration = 0)
    {
        return $this->client->set($key, $value, $expiration);
    }

    /**
     * {@inheritdoc}
     */
    public function replace($key, $value, $expiration = 0)
    {
        return $this->client->replace($key, $value, $expiration);
    }

    /**
     * {@inheritdoc}
     */
    public function get($key)
    {
        return $this->client->get($key);
    }

    /**
     * {@inheritdoc}
     */
    public function increment($key, $offset = 1, $initialValue = 0, $expiry = 0)
    {
        return $this->client->increment($key, $offset, $initialValue, $expiry);
    }

    /**
     * {@inheritdoc}
     */
    public function quit()
    {
        return $this->client->quit();
    }
}
