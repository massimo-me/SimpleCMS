<?php

namespace CMS\CoreBundle\Document;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @MongoDB\Document()
 */
class Page
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
    protected $content;

    /**
     * @Gedmo\Timestampable(on="create")
     * @MongoDB\Date()
     */
    protected $created;

    /**
     *
     * @Gedmo\Timestampable(on="update")
     * @MongoDB\Date()
     */
    protected $updated;

    /**
     * @MongoDB\String @MongoDB\Index(unique=true)
     * @Gedmo\Slug(fields={"title"}, updatable=false)
     */
    protected $slug;

    /**
     * @MongoDB\ReferenceOne(targetDocument="SeoMetaData", cascade="all", nullable=true)
     */
    protected $seoMetaData;

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
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
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param mixed $updated
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSeoMetaData()
    {
        return $this->seoMetaData;
    }

    /**
     * @param mixed $seoMetaData
     * @return $this
     */
    public function setSeoMetaData($seoMetaData)
    {
        $this->seoMetaData = $seoMetaData;
        return $this;
    }

    public function __toString()
    {
        if ($this->title) {
            return $this->title;
        }

        return 'New page';
    }

    public function getFirstImage()
    {
        preg_match("/\<img src=\"(.*?)\"(.*)\>/i", $this->getContent(), $matches);

        if (array_key_exists(1, $matches)) {
            return $matches[1];
        }

        return null;
    }
}
