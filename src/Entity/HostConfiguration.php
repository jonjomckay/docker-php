<?php
namespace Docker\Entity;

class HostConfiguration
{

    /**
     * @var null
     */
    private $binds;

    /**
     * @var string
     */
    private $containerIdFile;

    /**
     * @var array
     */
    private $lxcConfiguration;

    /**
     * @var boolean
     */
    private $privileged;

    /**
     * @var array
     */
    private $portBindings;

    /**
     * @var null
     */
    private $links;

    /**
     * @var boolean
     */
    private $publishAllPorts;

    /**
     * @param null $binds
     */
    public function setBinds($binds)
    {
        $this->binds = $binds;
    }

    /**
     * @return null
     */
    public function getBinds()
    {
        return $this->binds;
    }

    /**
     * @param string $containerIdFile
     */
    public function setContainerIdFile($containerIdFile)
    {
        $this->containerIdFile = $containerIdFile;
    }

    /**
     * @return string
     */
    public function getContainerIdFile()
    {
        return $this->containerIdFile;
    }

    /**
     * @param null $links
     */
    public function setLinks($links)
    {
        $this->links = $links;
    }

    /**
     * @return null
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param array $lxcConfiguration
     */
    public function setLxcConfiguration($lxcConfiguration)
    {
        $this->lxcConfiguration = $lxcConfiguration;
    }

    /**
     * @return array
     */
    public function getLxcConfiguration()
    {
        return $this->lxcConfiguration;
    }

    /**
     * @param array $portBindings
     */
    public function setPortBindings($portBindings)
    {
        $this->portBindings = $portBindings;
    }

    /**
     * @return array
     */
    public function getPortBindings()
    {
        return $this->portBindings;
    }

    /**
     * @param boolean $privileged
     */
    public function setPrivileged($privileged)
    {
        $this->privileged = $privileged;
    }

    /**
     * @return boolean
     */
    public function getPrivileged()
    {
        return $this->privileged;
    }

    /**
     * @param boolean $publishAllPorts
     */
    public function setPublishAllPorts($publishAllPorts)
    {
        $this->publishAllPorts = $publishAllPorts;
    }

    /**
     * @return boolean
     */
    public function getPublishAllPorts()
    {
        return $this->publishAllPorts;
    }
}
 