<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 * @ORM\Table(name="booking")
 *
 * Defines the properties of the User entity to represent the application users.
 * See http://symfony.com/doc/current/book/doctrine.html#creating-an-entity-class
 *
 * Tip: if you have an existing database, you can generate these entity class automatically.
 * See http://symfony.com/doc/current/cookbook/doctrine/reverse_engineering.html
 *
 * @author Fabrice ABBEY <fabriceabbey@gmail.com>
 */
class Booking
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", unique=true)
     */
    private $booking_id;

    /**
     * @ORM\ManyToOne(targetEntity="Room", cascade={"persist"})
     * @ORM\JoinColumn(name="room_id", referencedColumnName="id")
     */
    private $room;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $checkinDate;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $checkoutDate;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $adults;
    
   /**
     * @ORM\ManyToOne(targetEntity="Customer", cascade={"persist"})
     * @ORM\JoinColumn(name="customer_id", referencedColumnName="id")
     */
    private $customer;

    // *
    //  * @ORM\Column(type="string")
     
    // private $password;

    // /**
    //  * @ORM\Column(type="json_array")
    //  */
    // private $roles = [];

    // public function getId()
    // {
    //     return $this->id;
    // }

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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Customer
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Customer
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set adress
     *
     * @param string $adress
     *
     * @return Customer
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
     * Set bookingId
     *
     * @param string $bookingId
     *
     * @return Booking
     */
    public function setBookingId($bookingId)
    {
        $this->booking_id = $bookingId;

        return $this;
    }

    /**
     * Get bookingId
     *
     * @return string
     */
    public function getBookingId()
    {
        return $this->booking_id;
    }

    /**
     * Set checkinDate
     *
     * @param \DateTime $checkinDate
     *
     * @return Booking
     */
    public function setCheckinDate($checkinDate)
    {
        $this->checkinDate = $checkinDate;

        return $this;
    }

    /**
     * Get checkinDate
     *
     * @return \DateTime
     */
    public function getCheckinDate()
    {
        return $this->checkinDate;
    }

    /**
     * Set checkoutDate
     *
     * @param \DateTime $checkoutDate
     *
     * @return Booking
     */
    public function setCheckoutDate($checkoutDate)
    {
        $this->checkoutDate = $checkoutDate;

        return $this;
    }

    /**
     * Get checkoutDate
     *
     * @return \DateTime
     */
    public function getCheckoutDate()
    {
        return $this->checkoutDate;
    }

    /**
     * Set adultsNumber
     *
     * @param integer $adultsNumber
     *
     * @return Booking
     */
    public function setAdultsNumber($adultsNumber)
    {
        $this->adults_number = $adultsNumber;

        return $this;
    }

    /**
     * Get adultsNumber
     *
     * @return integer
     */
    public function getAdultsNumber()
    {
        return $this->adults_number;
    }

    /**
     * Set room
     *
     * @param \AppBundle\Entity\Room $room
     *
     * @return Booking
     */
    public function setRoom(\AppBundle\Entity\Room $room = null)
    {
        $this->room = $room;

        return $this;
    }

    /**
     * Get room
     *
     * @return \AppBundle\Entity\Room
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Set customer
     *
     * @param \AppBundle\Entity\Customer $customer
     *
     * @return Booking
     */
    public function setCustomer(\AppBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \AppBundle\Entity\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set adults
     *
     * @param integer $adults
     *
     * @return Booking
     */
    public function setAdults($adults)
    {
        $this->adults = $adults;

        return $this;
    }

    /**
     * Get adults
     *
     * @return integer
     */
    public function getAdults()
    {
        return $this->adults;
    }
}
