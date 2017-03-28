<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Expose;

/**
* @ORM\Entity(repositoryClass="AppBundle\EntityRepository\ArticlesRepository")
* @ORM\Cache(usage="NONSTRICT_READ_WRITE", region="articles_region")
* @ORM\Table(
*    name="articles"
* )
* @ExclusionPolicy("all")
*/

class Articles
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    * @Type("integer")
    * @Expose
    */
    protected $id;
    /**
    * @ORM\Column(type="string")
    * @Type("string")
    * @Expose
    */
    protected $title;
    /**
    * @ORM\Column(type="text")
    * @Expose
    */
    protected $content;
    /**
    * @ORM\Column(type="integer")
    * @Type("integer")
    * @Expose
    */
    protected $imageversion = 1;
    /**
    * @ORM\Column(type="datetime")
    * @Type("DateTime")
    * @Expose
    */
    protected $created;
    /**
    * @ORM\Column(type="datetime")
    * @Type("DateTime")
    * @Expose
    */
    protected $updated;
    /**
    * @ORM\Column(type="integer")
    * @Expose
    */
    protected $activcomments = 0;
    /**
    * @ORM\Column(type="integer")
    * @Expose
    */
    protected $totalcomments = 0;
    /**
    * @ORM\Column(type="integer")
    * @Expose
    */
    protected $articlestatus = 0;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Articles
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Articles
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set imageversion
     *
     * @param integer $imageversion
     *
     * @return Articles
     */
    public function setImageversion($imageversion)
    {
        $this->imageversion = $imageversion;

        return $this;
    }

    /**
     * Get imageversion
     *
     * @return integer
     */
    public function getImageversion()
    {
        return $this->imageversion;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Articles
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     *
     * @return Articles
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set activcomments
     *
     * @param integer $activcomments
     *
     * @return Articles
     */
    public function setActivcomments($activcomments)
    {
        $this->activcomments = $activcomments;

        return $this;
    }

    /**
     * Get activcomments
     *
     * @return integer
     */
    public function getActivcomments()
    {
        return $this->activcomments;
    }

    /**
     * Set totalcomments
     *
     * @param integer $totalcomments
     *
     * @return Articles
     */
    public function setTotalcomments($totalcomments)
    {
        $this->totalcomments = $totalcomments;

        return $this;
    }

    /**
     * Get totalcomments
     *
     * @return integer
     */
    public function getTotalcomments()
    {
        return $this->totalcomments;
    }

    /**
     * Set articlestatus
     *
     * @param integer $articlestatus
     *
     * @return Articles
     */
    public function setArticlestatus($articlestatus)
    {
        $this->articlestatus = $articlestatus;

        return $this;
    }

    /**
     * Get articlestatus
     *
     * @return integer
     */
    public function getArticlestatus()
    {
        return $this->articlestatus;
    }
}
