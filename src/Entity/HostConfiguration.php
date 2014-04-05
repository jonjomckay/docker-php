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
}
 