<?php

/*
 * This file is part of Clivern Memcached Bundle
 * (c) Clivern <hello@clivern.com>
 */

namespace Clivern\Memcached;

interface MemcachedClientInterface
{
    /**
     * Class Constructor.
     *
     * @param string $server
     * @param int    $port
     */
    public function __construct($server, $port);

    /**
     * Add a value.
     *
     * @param string $key
     * @param mixed  $value
     * @param int    $expiration
     */
    public function add($key, $value, $expiration);

    /**
     * Set a value.
     *
     * @param string $key
     * @param mixed  $value
     * @param int    $expiration
     */
    public function set($key, $value, $expiration);

    /**
     * Replace a value.
     *
     * @param string $key
     * @param mixed  $value
     * @param int    $expiration
     */
    public function replace($key, $value, $expiration);

    /**
     * Get a value by key.
     *
     * @param string $key
     *
     * @return mixed
     */
    public function get($key);

    /**
     * Increment a key.
     *
     * @param string $key
     * @param int    $offset
     * @param int    $initialValue
     * @param int    $expiry
     *
     * @return int
     */
    public function increment($key, $offset = 1, $initialValue = 0, $expiry = 0);

    /**
     * Quit all connections.
     *
     * @return bool
     */
    public function quit();
}
