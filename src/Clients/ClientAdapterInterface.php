<?php

namespace Kiba86\LaravelMoodle\Clients;

/**
 * Interface ClientAdapterInterface
 * @package Kiba86\LaravelMoodle\Clients
 */
interface ClientAdapterInterface
{
    /**
     * Send API request
     * @param $function
     * @param array $arguments
     * @return mixed
     */
    public function sendRequest($function, array $arguments = []);
}
