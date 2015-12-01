<?php

namespace CMS\CoreBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @MongoDB\Document()
 */
class SeoMetaData
{
    /**
     * @MongoDB\Id(strategy="auto")
     */
    protected $id;

    /**
     * @MongoDB\String()
     */
    protected $title;

    /**
     * @MongoDB\String()
     */
    protected $description;

    /**
     * @MongoDB\String()
     */
    protected $keywords;

    /**
     * @MongoDB\String()
     */
    protected $robots;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @return mixed
     */
    public function getRobots()
    {
        return $this->robots;
    }

    /**
     * @param mixed $title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @param mixed $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @param mixed $keywords
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;

        return $this;
    }

    /**
     * @param mixed $robots
     * @return $this
     */
    public function setRobots($robots)
    {
        $this->robots = $robots;

        return $this;
    }

    public function __toString()
    {
        if (!$this->id) {
            return 'New Seo Meta';
        }

        return $this->id;
    }
}
