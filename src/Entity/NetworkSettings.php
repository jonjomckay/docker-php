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

    /**
     * @param string $bridge
     */
    public function setBridge($bridge)
    {
        $this->bridge = $bridge;
    }

    /**
     * @return string
     */
    public function getBridge()
    {
        return $this->bridge;
    }

    /**
     * @param string $gateway
     */
    public function setGateway($gateway)
    {
        $this->gateway = $gateway;
    }

    /**
     * @return string
     */
    public function getGateway()
    {
        return $this->gateway;
    }

    /**
     * @param string $ipAddress
     */
    public function setIpAddress($ipAddress)
    {
        $this->ipAddress = $ipAddress;
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ipAddress;
    }

    /**
     * @param int $ipPrefixLength
     */
    public function setIpPrefixLength($ipPrefixLength)
    {
        $this->ipPrefixLength = $ipPrefixLength;
    }

    /**
     * @return int
     */
    public function getIpPrefixLength()
    {
        return $this->ipPrefixLength;
    }

    /**
     * @param null $portMapping
     */
    public function setPortMapping($portMapping)
    {
        $this->portMapping = $portMapping;
    }

    /**
     * @return null
     */
    public function getPortMapping()
    {
        return $this->portMapping;
    }
}
 