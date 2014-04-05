<?php
namespace Docker\Entity;

class NetworkSettings
{

    /**
     * @var string
     */
    private $ipAddress;

    /**
     * @var int
     */
    private $ipPrefixLength;

    /**
     * @var string
     */
    private $gateway;

    /**
     * @var string
     */
    private $bridge;

    /**
     * @var null
     */
    private $portMapping;
}
 