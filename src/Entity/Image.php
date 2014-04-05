<?php
namespace Docker\Entity;

class Image
{

    /**
     * @var string
     */
    private $id;

    /**
     * @var Image
     */
    private $parent;

    /**
     * @var Container
     */
    private $container;

    /**
     * @var array
     */
    private $tags;

    /**
     * @var \DateTime
     */
    private $created;

    /**
     * @var int
     */
    private $size;

    /**
     * @var int
     */
    private $virtualSize;

    /**
     * @param \Docker\Entity\Container $container
     */
    public function setContainer($container)
    {
        $this->container = $container;
    }

    /**
     * @return \Docker\Entity\Container
     */
    public function getContainer()
    {
        return $this->container;
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
     * @param \Docker\Entity\Image $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }

    /**
     * @return \Docker\Entity\Image
     */
    public function getParent()
    {
        return $this->parent;
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
     * @param array $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param int $virtualSize
     */
    public function setVirtualSize($virtualSize)
    {
        $this->virtualSize = $virtualSize;
    }

    /**
     * @return int
     */
    public function getVirtualSize()
    {
        return $this->virtualSize;
    }
}
 