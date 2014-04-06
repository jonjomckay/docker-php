<?php
namespace Docker;
use Docker\Entity\ContainerChange;
use Docker\Entity\HostConfiguration;

/**
 * Class Docker
 * @package Docker
 */
class Docker
{

    /**
     * List containers
     *
     * @param int $all Show all containers. Only running containers are shown by default
     * @param null|int $limit Show x last created containers, including non-running ones
     * @param null|string $since Show only containers created since ID, including non-running ones
     * @param null|string $before Show only containers created before ID, including non-running ones
     * @param boolean $size Show container sizes
     * @return Entity\Container[]
     */
    public function getContainers($all = 0, $limit = null, $since = null, $before = null, $size = true)
    {

    }

    /**
     * Create a container
     *
     * @param string $name Assign the specified name to the container. Must match /?[a-zA-Z0-9_-]+.
     * @param Entity\ContainerConfiguration $containerConfiguration The container's configuration
     * @return Entity\ContainerResponse
     */
    public function createContainer($name, Entity\ContainerConfiguration $containerConfiguration)
    {

    }

    /**
     * Return low-level information on a container
     *
     * @param string $id ID of the container to inspect
     * @return Entity\Container
     */
    public function getContainer($id)
    {

    }

    /**
     * Inspect changes on container's filesystem
     *
     * @param string $id ID of the container to inspect changes for
     * @return ContainerChange[]
     */
    public function getContainerChanges($id)
    {

    }

    /**
     * Export the contents of a container
     *
     * @param string $id ID of the container to export
     * @return mixed
     */
    public function exportContainer($id)
    {

    }

    /**
     * Start a container
     *
     * @param string $id ID of the container to start
     * @param null|HostConfiguration $hostConfiguration The container's host configuration
     * @return boolean
     */
    public function startContainer($id, HostConfiguration $hostConfiguration = null)
    {

    }

    /**
     * Stop a container
     *
     * @param string $id ID of the container to stop
     * @param int $wait Number of seconds to wait before killing the container
     * @return boolean
     */
    public function stopContainer($id, $wait = 0)
    {

    }

    /**
     * Restart a container
     *
     * @param string $id ID of the container to restart
     * @param int $wait Number of seconds to wait before killing the container
     * @return boolean
     */
    public function restartContainer($id, $wait = 0)
    {

    }

    /**
     * Kill a container
     *
     * @param string $id ID of the container to kill
     * @return boolean
     */
    public function killContainer($id)
    {

    }

    /**
     * Block until a container stops, then return the exit code
     *
     * @param string $id ID of the container to wait for
     * @return int
     */
    public function waitContainer($id)
    {

    }

    /**
     * Remove a container from the filesystem
     *
     * @param string $id ID of the container to delete
     * @param bool $removeVolumes Remove the volumes associated with the container
     * @param bool $force Remove the container even if it is running
     * @return boolean
     */
    public function deleteContainer($id, $removeVolumes = false, $force = false)
    {

    }

    /**
     * Copy files or folders from a container
     *
     * @param string $id ID of the container to copy file from
     * @param string $path Path to the file/folder to copy from the container
     * @return mixed
     */
    public function copyContainerFile($id, $path)
    {

    }

    /**
     * Resize the pseudo-TTY of a container
     *
     * @param string $id ID of the container to resize the TTY for
     * @param int $columns Number of columns for the TTY of the container
     * @param int $rows Number of rows for the TTY of the container
     */
    public function resizeContainerTty($id, $columns, $rows)
    {

    }
}
 