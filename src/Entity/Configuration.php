<?php
namespace Docker\Entity;

class Configuration
{

    /**
     * @var string
     */
    private $hostname;

    /**
     * @var string
     */
    private $user;

    /**
     * @var int
     */
    private $memory;

    /**
     * @var int
     */
    private $memorySwap;

    /**
     * @var boolean
     */
    private $attachStdin;

    /**
     * @var boolean
     */
    private $attachStdout;

    /**
     * @var boolean
     */
    private $attachStderr;

    /**
     * @var null
     */
    private $portSpecs;

    /**
     * @var boolean
     */
    private $tty;

    /**
     * @var boolean
     */
    private $openStdin;

    /**
     * @var boolean
     */
    private $stdinOnce;

    /**
     * @var null
     */
    private $env;

    /**
     * @var array
     */
    private $cmd;

    /**
     * @var null
     */
    private $dns;

    /**
     * @var string
     */
    private $image;

    /**
     * @var array
     */
    private $volumes;

    /**
     * @var string
     */
    private $volumesFrom;

    /**
     * @var string
     */
    private $workingDirectory;

    /**
     * @param boolean $attachStderr
     */
    public function setAttachStderr($attachStderr)
    {
        $this->attachStderr = $attachStderr;
    }

    /**
     * @return boolean
     */
    public function getAttachStderr()
    {
        return $this->attachStderr;
    }

    /**
     * @param boolean $attachStdin
     */
    public function setAttachStdin($attachStdin)
    {
        $this->attachStdin = $attachStdin;
    }

    /**
     * @return boolean
     */
    public function getAttachStdin()
    {
        return $this->attachStdin;
    }

    /**
     * @param boolean $attachStdout
     */
    public function setAttachStdout($attachStdout)
    {
        $this->attachStdout = $attachStdout;
    }

    /**
     * @return boolean
     */
    public function getAttachStdout()
    {
        return $this->attachStdout;
    }

    /**
     * @param array $cmd
     */
    public function setCmd($cmd)
    {
        $this->cmd = $cmd;
    }

    /**
     * @return array
     */
    public function getCmd()
    {
        return $this->cmd;
    }

    /**
     * @param null $dns
     */
    public function setDns($dns)
    {
        $this->dns = $dns;
    }

    /**
     * @return null
     */
    public function getDns()
    {
        return $this->dns;
    }

    /**
     * @param null $env
     */
    public function setEnv($env)
    {
        $this->env = $env;
    }

    /**
     * @return null
     */
    public function getEnv()
    {
        return $this->env;
    }

    /**
     * @param string $hostname
     */
    public function setHostname($hostname)
    {
        $this->hostname = $hostname;
    }

    /**
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param int $memory
     */
    public function setMemory($memory)
    {
        $this->memory = $memory;
    }

    /**
     * @return int
     */
    public function getMemory()
    {
        return $this->memory;
    }

    /**
     * @param int $memorySwap
     */
    public function setMemorySwap($memorySwap)
    {
        $this->memorySwap = $memorySwap;
    }

    /**
     * @return int
     */
    public function getMemorySwap()
    {
        return $this->memorySwap;
    }

    /**
     * @param boolean $openStdin
     */
    public function setOpenStdin($openStdin)
    {
        $this->openStdin = $openStdin;
    }

    /**
     * @return boolean
     */
    public function getOpenStdin()
    {
        return $this->openStdin;
    }

    /**
     * @param null $portSpecs
     */
    public function setPortSpecs($portSpecs)
    {
        $this->portSpecs = $portSpecs;
    }

    /**
     * @return null
     */
    public function getPortSpecs()
    {
        return $this->portSpecs;
    }

    /**
     * @param boolean $stdinOnce
     */
    public function setStdinOnce($stdinOnce)
    {
        $this->stdinOnce = $stdinOnce;
    }

    /**
     * @return boolean
     */
    public function getStdinOnce()
    {
        return $this->stdinOnce;
    }

    /**
     * @param boolean $tty
     */
    public function setTty($tty)
    {
        $this->tty = $tty;
    }

    /**
     * @return boolean
     */
    public function getTty()
    {
        return $this->tty;
    }

    /**
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getUser()
    {
        return $this->user;
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

    /**
     * @param string $volumesFrom
     */
    public function setVolumesFrom($volumesFrom)
    {
        $this->volumesFrom = $volumesFrom;
    }

    /**
     * @return string
     */
    public function getVolumesFrom()
    {
        return $this->volumesFrom;
    }

    /**
     * @param string $workingDirectory
     */
    public function setWorkingDirectory($workingDirectory)
    {
        $this->workingDirectory = $workingDirectory;
    }

    /**
     * @return string
     */
    public function getWorkingDirectory()
    {
        return $this->workingDirectory;
    }
}
 