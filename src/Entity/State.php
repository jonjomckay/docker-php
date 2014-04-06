<?php
namespace Docker\Entity;

/**
 * Class State
 * @package Docker\Entity
 */
class State
{

    /**
     * @var boolean
     */
    private $running;

    /**
     * @var int
     */
    private $pid;

    /**
     * @var int
     */
    private $exitCode;

    /**
     * @var \DateTime
     */
    private $startedAt;

    /**
     * @var boolean
     */
    private $ghost;

    /**
     * @param int $exitCode
     */
    public function setExitCode($exitCode)
    {
        $this->exitCode = $exitCode;
    }

    /**
     * @return int
     */
    public function getExitCode()
    {
        return $this->exitCode;
    }

    /**
     * @param boolean $ghost
     */
    public function setGhost($ghost)
    {
        $this->ghost = $ghost;
    }

    /**
     * @return boolean
     */
    public function getGhost()
    {
        return $this->ghost;
    }

    /**
     * @param int $pid
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    /**
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * @param boolean $running
     */
    public function setRunning($running)
    {
        $this->running = $running;
    }

    /**
     * @return boolean
     */
    public function getRunning()
    {
        return $this->running;
    }

    /**
     * @param \DateTime $startedAt
     */
    public function setStartedAt($startedAt)
    {
        $this->startedAt = $startedAt;
    }

    /**
     * @return \DateTime
     */
    public function getStartedAt()
    {
        return $this->startedAt;
    }
}
 