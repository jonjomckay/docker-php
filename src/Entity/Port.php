<?php
namespace Docker\Entity;

/**
 * Class Port
 * @package Docker\Entity
 */
class Port
{

    /**
     * @var int
     */
    private $privatePort;

    /**
     * @var int
     */
    private $publicPort;

    /**
     * @var string
     */
    private $type;

    /**
     * @param int $privatePort
     */
    public function setPrivatePort($privatePort)
    {
        $this->privatePort = $privatePort;
    }

    /**
     * @return int
     */
    public function getPrivatePort()
    {
        return $this->privatePort;
    }

    /**
     * @param int $publicPort
     */
    public function setPublicPort($publicPort)
    {
        $this->publicPort = $publicPort;
    }

    /**
     * @return int
     */
    public function getPublicPort()
    {
        return $this->publicPort;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
 