<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Expose;

/**
* @ORM\Entity(repositoryClass="AppBundle\EntityRepository\DevelopersRepository")
* @ORM\Cache(usage="NONSTRICT_READ_WRITE", region="developers_region")
* @ORM\Table(
*    name="developers"
* )
* @ExclusionPolicy("all")
*/

class Developers
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
    protected $name;
    /**
    * @ORM\Column(type="text", nullable=true)
    * @Expose
    */
    protected $about = null;
    /**
    * @ORM\Column(type="integer")
    * @Type("integer")
    * @Expose
    */
    protected $logoversion = 1;
    /**
    * @ORM\Column(type="datetime")
    * @Type("DateTime")
    * @Expose
    */
    protected $created;
    /**
    * @ORM\Column(type="integer")
    * @Expose
    */
    protected $activemanagers = 0;
    /**
    * @ORM\Column(type="integer")
    * @Expose
    */
    protected $totalmanagers = 0;
    /**
    * @ORM\Column(type="integer")
    * @Expose
    */
    protected $activeapps = 0;
    /**
    * @ORM\Column(type="integer")
    * @Expose
    */
    protected $totalapps = 0;
    /**
    * @ORM\Column(type="integer")
    * @Expose
    */
    protected $developerstatus = 0;
    /**
    * @ORM\Cache(usage="NONSTRICT_READ_WRITE", region="apps_region")
    * @ORM\OneToMany(targetEntity="Apps", mappedBy="developer")
    */
    protected $apps;

    public function __construct()
    {
        $this->apps = new ArrayCollection();
    }


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
     * Set name
     *
     * @param string $name
     *
     * @return Developers
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set about
     *
     * @param string $about
     *
     * @return Developers
     */
    public function setAbout($about)
    {
        $this->about = $about;

        return $this;
    }

    /**
     * Get about
     *
     * @return string
     */
    public function getAbout()
    {
        return $this->about;
    }

    /**
     * Set logoversion
     *
     * @param integer $logoversion
     *
     * @return Developers
     */
    public function setLogoversion($logoversion)
    {
        $this->logoversion = $logoversion;

        return $this;
    }

    /**
     * Get logoversion
     *
     * @return integer
     */
    public function getLogoversion()
    {
        return $this->logoversion;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Developers
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
     * Set activemanagers
     *
     * @param integer $activemanagers
     *
     * @return Developers
     */
    public function setActivemanagers($activemanagers)
    {
        $this->activemanagers = $activemanagers;

        return $this;
    }

    /**
     * Get activemanagers
     *
     * @return integer
     */
    public function getActivemanagers()
    {
        return $this->activemanagers;
    }

    /**
     * Set totalmanagers
     *
     * @param integer $totalmanagers
     *
     * @return Developers
     */
    public function setTotalmanagers($totalmanagers)
    {
        $this->totalmanagers = $totalmanagers;

        return $this;
    }

    /**
     * Get totalmanagers
     *
     * @return integer
     */
    public function getTotalmanagers()
    {
        return $this->totalmanagers;
    }

    /**
     * Set activeapps
     *
     * @param integer $activeapps
     *
     * @return Developers
     */
    public function setActiveapps($activeapps)
    {
        $this->activeapps = $activeapps;

        return $this;
    }

    /**
     * Get activeapps
     *
     * @return integer
     */
    public function getActiveapps()
    {
        return $this->activeapps;
    }

    /**
     * Set totalapps
     *
     * @param integer $totalapps
     *
     * @return Developers
     */
    public function setTotalapps($totalapps)
    {
        $this->totalapps = $totalapps;

        return $this;
    }

    /**
     * Get totalapps
     *
     * @return integer
     */
    public function getTotalapps()
    {
        return $this->totalapps;
    }

    /**
     * Set developerstatus
     *
     * @param integer $developerstatus
     *
     * @return Developers
     */
    public function setDeveloperstatus($developerstatus)
    {
        $this->developerstatus = $developerstatus;

        return $this;
    }

    /**
     * Get developerstatus
     *
     * @return integer
     */
    public function getDeveloperstatus()
    {
        return $this->developerstatus;
    }

    /**
     * Add app
     *
     * @param \AppBundle\Entity\Apps $app
     *
     * @return Developers
     */
    public function addApp(\AppBundle\Entity\Apps $app)
    {
        $this->apps[] = $app;

        return $this;
    }

    /**
     * Remove app
     *
     * @param \AppBundle\Entity\Apps $app
     */
    public function removeApp(\AppBundle\Entity\Apps $app)
    {
        $this->apps->removeElement($app);
    }

    /**
     * Get apps
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApps()
    {
        return $this->apps;
    }
}
