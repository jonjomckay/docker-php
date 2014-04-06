<?php
namespace Docker\Entity;

/**
 * Class ContainerChange
 * @package Docker\Entity
 */
class ContainerChange
{

    /**
     * @var string
     */
    private $path;

    /**
     * @var int
     */
    private $kind;

    /**
     * @param int $kind
     */
    public function setKind($kind)
    {
        $this->kind = $kind;
    }

    /**
     * @return int
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param string $path
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }
}
