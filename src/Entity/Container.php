<?php
namespace Docker\Entity;

/**
 * Class Container
 * @package Docker\Entity
 */
class Container
{

    /**
     * @var string
     */
    private $id;

    /**
     * @var Image
     */
    private $image;

    /**
     * @var string
     */
    private $command;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var string
     */
    private $status;

    /**
     * @var Port[]
     */
    private $ports;

    /**
     * @var int
     */
    private $size;

    /**
     * @var string
     */
    private $path;

    /**
     * @var array
     */
    private $arguments;

    /**
     * @var ContainerConfiguration
     */
    private $configuration;

    /**
     * @var State
     */
    private $state;

    /**
     * @var NetworkSettings
     */
    private $networkSettings;

    /**
     * @var string
     */
    private $sysInitPath;

    /**
     * @var string
     */
    private $resolvConfPath;

    /**
     * @var array
     */
    private $volumes;

    /**
     * @var HostConfiguration
     */
    private $hostConfiguration;

    /**
     * @param array $arguments
     */
    public function setArguments($arguments)
    {
        $this->arguments = $arguments;
    }

    /**
     * @return array
     */
    public function getArguments()
    {
        return $this->arguments;
    }

    /**
     * @param string $command
     */
    public function setCommand($command)
    {
        $this->command = $command;
    }

    /**
     * @return string
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * @param \Docker\Entity\ContainerConfiguration $configuration
     */
    public function setConfiguration($configuration)
    {
        $this->configuration = $configuration;
    }

    /**
     * @return \Docker\Entity\ContainerConfiguration
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * @param \DateTime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \Docker\Entity\HostConfiguration $hostConfiguration
     */
    public function setHostConfiguration($hostConfiguration)
    {
        $this->hostConfiguration = $hostConfiguration;
    }

    /**
     * @return \Docker\Entity\HostConfiguration
     */
    public function getHostConfiguration()
    {
        return $this->hostConfiguration;
    }

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
     * @param \Docker\Entity\Image $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return \Docker\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param \Docker\Entity\NetworkSettings $networkSettings
     */
    public function setNetworkSettings($networkSettings)
    {
        $this->networkSettings = $networkSettings;
    }

    /**
     * @return \Docker\Entity\NetworkSettings
     */
    public function getNetworkSettings()
    {
        return $this->networkSettings;
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

    /**
     * @param \Docker\Entity\Port[] $ports
     */
    public function setPorts($ports)
    {
        $this->ports = $ports;
    }

    /**
     * @return \Docker\Entity\Port[]
     */
    public function getPorts()
    {
        return $this->ports;
    }

    /**
     * @param string $resolvConfPath
     */
    public function setResolvConfPath($resolvConfPath)
    {
        $this->resolvConfPath = $resolvConfPath;
    }

    /**
     * @return string
     */
    public function getResolvConfPath()
    {
        return $this->resolvConfPath;
    }

    /**
     * @param int $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param \Docker\Entity\State $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @return \Docker\Entity\State
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $sysInitPath
     */
    public function setSysInitPath($sysInitPath)
    {
        $this->sysInitPath = $sysInitPath;
    }

    /**
     * @return string
     */
    public function getSysInitPath()
    {
        return $this->sysInitPath;
    }

    /**
     * @param array $volumes
     */
    public function setVolumes($volumes)
    {
        $this->volumes = $volumes;
    }

    /**
     * @return array
     */
    public function getVolumes()
    {
        return $this->volumes;
    }
}