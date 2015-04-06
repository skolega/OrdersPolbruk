<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Orders
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=30)
     */
    private $number;

    /**
     * @var boolean
     *
     * @ORM\Column(name="delivery", type="boolean")
     */
    private $delivery;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_adress", type="string", length=50)
     */
    private $deliveryAdress;

    /**
     * @var string
     *
     * @ORM\Column(name="delivery_client", type="string", length=30)
     */
    private $deliveryClient;

    /**
     * @var string
     *
     * @ORM\Column(name="client_telephone", type="string", length=12)
     */
    private $clientTelephone;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="delivery_date", type="datetime")
     */
    private $deliveryDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="send_status", type="boolean")
     */
    private $sendStatus;


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
     * Set date
     *
     * @param \DateTime $date
     * @return Orders
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set number
     *
     * @param string $number
     * @return Orders
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string 
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set delivery
     *
     * @param boolean $delivery
     * @return Orders
     */
    public function setDelivery($delivery)
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * Get delivery
     *
     * @return boolean 
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Set deliveryAdress
     *
     * @param string $deliveryAdress
     * @return Orders
     */
    public function setDeliveryAdress($deliveryAdress)
    {
        $this->deliveryAdress = $deliveryAdress;

        return $this;
    }

    /**
     * Get deliveryAdress
     *
     * @return string 
     */
    public function getDeliveryAdress()
    {
        return $this->deliveryAdress;
    }

    /**
     * Set deliveryClient
     *
     * @param string $deliveryClient
     * @return Orders
     */
    public function setDeliveryClient($deliveryClient)
    {
        $this->deliveryClient = $deliveryClient;

        return $this;
    }

    /**
     * Get deliveryClient
     *
     * @return string 
     */
    public function getDeliveryClient()
    {
        return $this->deliveryClient;
    }

    /**
     * Set clientTelephone
     *
     * @param string $clientTelephone
     * @return Orders
     */
    public function setClientTelephone($clientTelephone)
    {
        $this->clientTelephone = $clientTelephone;

        return $this;
    }

    /**
     * Get clientTelephone
     *
     * @return string 
     */
    public function getClientTelephone()
    {
        return $this->clientTelephone;
    }

    /**
     * Set deliveryDate
     *
     * @param \DateTime $deliveryDate
     * @return Orders
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * Get deliveryDate
     *
     * @return \DateTime 
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * Set sendStatus
     *
     * @param boolean $sendStatus
     * @return Orders
     */
    public function setSendStatus($sendStatus)
    {
        $this->sendStatus = $sendStatus;

        return $this;
    }

    /**
     * Get sendStatus
     *
     * @return boolean 
     */
    public function getSendStatus()
    {
        return $this->sendStatus;
    }
}
