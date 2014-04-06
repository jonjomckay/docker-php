<?php
namespace Docker\Entity;

/**
 * Class ContainerResponse
 * @package Docker\Entity
 */
class ContainerResponse
{

    /**
     * @var string
     */
    private $id;

    /**
     * @var array
     */
    private $warnings;

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param array $warnings
     */
    public function setWarnings($warnings)
    {
        $this->warnings = $warnings;
    }

    /**
     * @return array
     */
    public function getWarnings()
    {
        return $this->warnings;
    }
}
 