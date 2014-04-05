<?php
namespace Docker;

class Docker
{

    /**
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
     * @param Entity\Container $container
     * @return Entity\ContainerResponse
     */
    public function createContainer(Entity\Container $container)
    {

    }

    /**
     * @param string $id
     * @return Entity\Container
     */
    public function getContainer($id)
    {

    }
}
 