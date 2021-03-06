<?php

namespace Admin\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 *
 * @ORM\Table(name="orders", indexes={@ORM\Index(name="delivery_id", columns={"delivery_id"}), @ORM\Index(name="payment_id", columns={"payment_id"}), @ORM\Index(name="order_status_id", columns={"order_status_id"}), @ORM\Index(name="city_id", columns={"city_id"})})
 * @ORM\Entity
 */
class Orders
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="order_list", type="text", length=65535, nullable=false)
     */
    private $orderList;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_name", type="string", length=255, nullable=false)
     */
    private $customerName;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_surname", type="string", length=255, nullable=false)
     */
    private $customerSurname;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=255, nullable=false)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_email", type="string", length=255, nullable=false)
     */
    private $customerEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="customer_phone", type="string", length=30, nullable=false)
     */
    private $customerPhone;

    /**
     * @var \Admin\Entity\Payment
     *
     * @ORM\ManyToOne(targetEntity="Admin\Entity\Payment")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="payment_id", referencedColumnName="id")
     * })
     */
    private $payment;

    /**
     * @var \Admin\Entity\Delivery
     *
     * @ORM\ManyToOne(targetEntity="Admin\Entity\Delivery")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="delivery_id", referencedColumnName="id")
     * })
     */
    private $delivery;

    /**
     * @var \Admin\Entity\OrderStatus
     *
     * @ORM\ManyToOne(targetEntity="Admin\Entity\OrderStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_status_id", referencedColumnName="id")
     * })
     */
    private $orderStatus;

    /**
     * @var \Admin\Entity\Cities
     *
     * @ORM\ManyToOne(targetEntity="Admin\Entity\Cities")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="city_id", referencedColumnName="id")
     * })
     */
    private $city;



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
     * Set orderList
     *
     * @param string $orderList
     *
     * @return Orders
     */
    public function setOrderList($orderList)
    {
        $this->orderList = $orderList;

        return $this;
    }

    /**
     * Get orderList
     *
     * @return string
     */
    public function getOrderList()
    {
        return $this->orderList;
    }

    /**
     * Set customerName
     *
     * @param string $customerName
     *
     * @return Orders
     */
    public function setCustomerName($customerName)
    {
        $this->customerName = $customerName;

        return $this;
    }

    /**
     * Get customerName
     *
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * Set customerSurname
     *
     * @param string $customerSurname
     *
     * @return Orders
     */
    public function setCustomerSurname($customerSurname)
    {
        $this->customerSurname = $customerSurname;

        return $this;
    }

    /**
     * Get customerSurname
     *
     * @return string
     */
    public function getCustomerSurname()
    {
        return $this->customerSurname;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return Orders
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set customerEmail
     *
     * @param string $customerEmail
     *
     * @return Orders
     */
    public function setCustomerEmail($customerEmail)
    {
        $this->customerEmail = $customerEmail;

        return $this;
    }

    /**
     * Get customerEmail
     *
     * @return string
     */
    public function getCustomerEmail()
    {
        return $this->customerEmail;
    }

    /**
     * Set customerPhone
     *
     * @param string $customerPhone
     *
     * @return Orders
     */
    public function setCustomerPhone($customerPhone)
    {
        $this->customerPhone = $customerPhone;

        return $this;
    }

    /**
     * Get customerPhone
     *
     * @return string
     */
    public function getCustomerPhone()
    {
        return $this->customerPhone;
    }

    /**
     * Set payment
     *
     * @param \Admin\Entity\Payment $payment
     *
     * @return Orders
     */
    public function setPayment(\Admin\Entity\Payment $payment = null)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get payment
     *
     * @return \Admin\Entity\Payment
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set delivery
     *
     * @param \Admin\Entity\Delivery $delivery
     *
     * @return Orders
     */
    public function setDelivery(\Admin\Entity\Delivery $delivery = null)
    {
        $this->delivery = $delivery;

        return $this;
    }

    /**
     * Get delivery
     *
     * @return \Admin\Entity\Delivery
     */
    public function getDelivery()
    {
        return $this->delivery;
    }

    /**
     * Set orderStatus
     *
     * @param \Admin\Entity\OrderStatus $orderStatus
     *
     * @return Orders
     */
    public function setOrderStatus(\Admin\Entity\OrderStatus $orderStatus = null)
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    /**
     * Get orderStatus
     *
     * @return \Admin\Entity\OrderStatus
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * Set city
     *
     * @param \Admin\Entity\Cities $city
     *
     * @return Orders
     */
    public function setCity(\Admin\Entity\Cities $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \Admin\Entity\Cities
     */
    public function getCity()
    {
        return $this->city;
    }
    
    public function exchangeArray($data)
    {
        foreach ($data as $key => $val){
            if(property_exists($this, $key)){
                $this->$key = ($val) ? $val : null;
            }
        }
    }
	
    public function getArrayCopy()
    {
        return get_object_vars($this);
    }
}
