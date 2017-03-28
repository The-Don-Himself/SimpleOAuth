<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Expose;

/**
* @ORM\Entity(repositoryClass="AppBundle\EntityRepository\AppsRepository")
* @ORM\Cache(usage="NONSTRICT_READ_WRITE", region="apps_region")
* @ORM\Table(
*    name="apps"
* )
* @ExclusionPolicy("all")
*/

class Apps
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\OneToOne(targetEntity="AppsRatings")
    * @ORM\GeneratedValue(strategy="AUTO")
    * @Expose
    */
    protected $id;
    /**
     * @ORM\Column(type="string")
     */
    protected $appsecret;
    /**
    * @ORM\Column(type="string" , nullable=true)
    */
    protected $apphost = null;
    /**
    * @ORM\Column(type="string" , nullable=true)
    */
    protected $endpoint = null;
    /**
     * @ORM\Column(type="string")
     * @Expose
     */
    protected $title;
    /**
     * @ORM\Column(type="integer")
     * @Expose
     */
    protected $imageversion = 1;
    /**
    * @ORM\Column(type="text")
    * @Expose
    */
    protected $description;
    /**
    * @ORM\Column(type="decimal", precision=14, scale=2)
    * @Expose
    */
    protected $appprice = 0.00;
    /**
    * @ORM\Column(type="integer", nullable=true)
    * @Expose
    */
    protected $apppriceperiod = null;
    /**
    * @ORM\Column(type="integer")
    */
    protected $total_credits = 0;
    /**
    * @ORM\Column(type="integer")
    */
    protected $total_debits = 0;
    /**
    * @ORM\Column(type="decimal", precision=14, scale=2)
    * @Expose
    */
    protected $appbalance = 0.00;
    /**
    * @ORM\Column(type="integer")
    * @Expose
    */
    protected $activeinstalls = 0;
    /**
    * @ORM\Column(type="integer")
    * @Expose
    */
    protected $totalinstalls = 0;
    /**
    * @ORM\Column(type="integer")
    * @Expose
    */
    protected $totalcalls = 0;
    /**
    * @ORM\Column(type="integer")
    * @Expose
    */
    protected $totalpermissions = 0;
    /**
    * @ORM\Column(type="datetime")
    * @Expose
    */
    protected $created;
    /**
    * @ORM\Column(type="datetime")
    * @Expose
    */
    protected $updated;
    /**
    * @ORM\Cache(usage="NONSTRICT_READ_WRITE", region="developers_region")
    * @ORM\ManyToOne(targetEntity="Developers", inversedBy="apps")
    * @ORM\JoinColumn(name="developer_id", referencedColumnName="id")
    * @Expose
    */
    protected $developer;
    /**
    * @ORM\Column(type="integer")
    * @Expose
    */
    protected $appstatus = 0;
    /**
    * @ORM\Column(type="integer")
    * @Expose
    */
    protected $appversion = 0;
    public function __construct()
    {
        $this->events = new ArrayCollection();
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
     * Set appsecret
     *
     * @param string $appsecret
     *
     * @return Apps
     */
    public function setAppsecret($appsecret)
    {
        $this->appsecret = $appsecret;

        return $this;
    }

    /**
     * Get appsecret
     *
     * @return string
     */
    public function getAppsecret()
    {
        return $this->appsecret;
    }

    /**
     * Set apphost
     *
     * @param string $apphost
     *
     * @return Apps
     */
    public function setApphost($apphost)
    {
        $this->apphost = $apphost;

        return $this;
    }

    /**
     * Get apphost
     *
     * @return string
     */
    public function getApphost()
    {
        return $this->apphost;
    }

    /**
     * Set endpoint
     *
     * @param string $endpoint
     *
     * @return Apps
     */
    public function setEndpoint($endpoint)
    {
        $this->endpoint = $endpoint;

        return $this;
    }

    /**
     * Get endpoint
     *
     * @return string
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Apps
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
     * Set imageversion
     *
     * @param integer $imageversion
     *
     * @return Apps
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
     * Set description
     *
     * @param string $description
     *
     * @return Apps
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set appprice
     *
     * @param string $appprice
     *
     * @return Apps
     */
    public function setAppprice($appprice)
    {
        $this->appprice = $appprice;

        return $this;
    }

    /**
     * Get appprice
     *
     * @return string
     */
    public function getAppprice()
    {
        return $this->appprice;
    }

    /**
     * Set apppriceperiod
     *
     * @param integer $apppriceperiod
     *
     * @return Apps
     */
    public function setApppriceperiod($apppriceperiod)
    {
        $this->apppriceperiod = $apppriceperiod;

        return $this;
    }

    /**
     * Get apppriceperiod
     *
     * @return integer
     */
    public function getApppriceperiod()
    {
        return $this->apppriceperiod;
    }

    /**
     * Set totalCredits
     *
     * @param integer $totalCredits
     *
     * @return Apps
     */
    public function setTotalCredits($totalCredits)
    {
        $this->total_credits = $totalCredits;

        return $this;
    }

    /**
     * Get totalCredits
     *
     * @return integer
     */
    public function getTotalCredits()
    {
        return $this->total_credits;
    }

    /**
     * Set totalDebits
     *
     * @param integer $totalDebits
     *
     * @return Apps
     */
    public function setTotalDebits($totalDebits)
    {
        $this->total_debits = $totalDebits;

        return $this;
    }

    /**
     * Get totalDebits
     *
     * @return integer
     */
    public function getTotalDebits()
    {
        return $this->total_debits;
    }

    /**
     * Set appbalance
     *
     * @param string $appbalance
     *
     * @return Apps
     */
    public function setAppbalance($appbalance)
    {
        $this->appbalance = $appbalance;

        return $this;
    }

    /**
     * Get appbalance
     *
     * @return string
     */
    public function getAppbalance()
    {
        return $this->appbalance;
    }

    /**
     * Set activeinstalls
     *
     * @param integer $activeinstalls
     *
     * @return Apps
     */
    public function setActiveinstalls($activeinstalls)
    {
        $this->activeinstalls = $activeinstalls;

        return $this;
    }

    /**
     * Get activeinstalls
     *
     * @return integer
     */
    public function getActiveinstalls()
    {
        return $this->activeinstalls;
    }

    /**
     * Set totalinstalls
     *
     * @param integer $totalinstalls
     *
     * @return Apps
     */
    public function setTotalinstalls($totalinstalls)
    {
        $this->totalinstalls = $totalinstalls;

        return $this;
    }

    /**
     * Get totalinstalls
     *
     * @return integer
     */
    public function getTotalinstalls()
    {
        return $this->totalinstalls;
    }

    /**
     * Set totalcalls
     *
     * @param integer $totalcalls
     *
     * @return Apps
     */
    public function setTotalcalls($totalcalls)
    {
        $this->totalcalls = $totalcalls;

        return $this;
    }

    /**
     * Get totalcalls
     *
     * @return integer
     */
    public function getTotalcalls()
    {
        return $this->totalcalls;
    }

    /**
     * Set totalpermissions
     *
     * @param integer $totalpermissions
     *
     * @return Apps
     */
    public function setTotalpermissions($totalpermissions)
    {
        $this->totalpermissions = $totalpermissions;

        return $this;
    }

    /**
     * Get totalpermissions
     *
     * @return integer
     */
    public function getTotalpermissions()
    {
        return $this->totalpermissions;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     *
     * @return Apps
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
     * @return Apps
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
     * Set appstatus
     *
     * @param integer $appstatus
     *
     * @return Apps
     */
    public function setAppstatus($appstatus)
    {
        $this->appstatus = $appstatus;

        return $this;
    }

    /**
     * Get appstatus
     *
     * @return integer
     */
    public function getAppstatus()
    {
        return $this->appstatus;
    }

    /**
     * Set appversion
     *
     * @param integer $appversion
     *
     * @return Apps
     */
    public function setAppversion($appversion)
    {
        $this->appversion = $appversion;

        return $this;
    }

    /**
     * Get appversion
     *
     * @return integer
     */
    public function getAppversion()
    {
        return $this->appversion;
    }

    /**
     * Set developer
     *
     * @param \AppBundle\Entity\Developers $developer
     *
     * @return Apps
     */
    public function setDeveloper(\AppBundle\Entity\Developers $developer = null)
    {
        $this->developer = $developer;

        return $this;
    }

    /**
     * Get developer
     *
     * @return \AppBundle\Entity\Developers
     */
    public function getDeveloper()
    {
        return $this->developer;
    }
}
