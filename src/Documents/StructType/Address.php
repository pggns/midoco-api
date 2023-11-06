<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for address StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class Address extends AbstractStructBase
{
    /**
     * The customerName
     * @var string|null
     */
    protected ?string $customerName = null;
    /**
     * The postOfficeBox
     * @var string|null
     */
    protected ?string $postOfficeBox = null;
    /**
     * The postalCode
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The countryCode
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The street
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The streetNumber
     * @var string|null
     */
    protected ?string $streetNumber = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * Constructor method for address
     * @uses Address::setCustomerName()
     * @uses Address::setPostOfficeBox()
     * @uses Address::setPostalCode()
     * @uses Address::setCity()
     * @uses Address::setCountryCode()
     * @uses Address::setStreet()
     * @uses Address::setStreetNumber()
     * @uses Address::setEmail()
     * @param string $customerName
     * @param string $postOfficeBox
     * @param string $postalCode
     * @param string $city
     * @param string $countryCode
     * @param string $street
     * @param string $streetNumber
     * @param string $email
     */
    public function __construct(?string $customerName = null, ?string $postOfficeBox = null, ?string $postalCode = null, ?string $city = null, ?string $countryCode = null, ?string $street = null, ?string $streetNumber = null, ?string $email = null)
    {
        $this
            ->setCustomerName($customerName)
            ->setPostOfficeBox($postOfficeBox)
            ->setPostalCode($postalCode)
            ->setCity($city)
            ->setCountryCode($countryCode)
            ->setStreet($street)
            ->setStreetNumber($streetNumber)
            ->setEmail($email);
    }
    /**
     * Get customerName value
     * @return string|null
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }
    /**
     * Set customerName value
     * @param string $customerName
     * @return \Pggns\MidocoApi\Documents\StructType\Address
     */
    public function setCustomerName(?string $customerName = null): self
    {
        // validation for constraint: string
        if (!is_null($customerName) && !is_string($customerName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerName, true), gettype($customerName)), __LINE__);
        }
        $this->customerName = $customerName;
        
        return $this;
    }
    /**
     * Get postOfficeBox value
     * @return string|null
     */
    public function getPostOfficeBox(): ?string
    {
        return $this->postOfficeBox;
    }
    /**
     * Set postOfficeBox value
     * @param string $postOfficeBox
     * @return \Pggns\MidocoApi\Documents\StructType\Address
     */
    public function setPostOfficeBox(?string $postOfficeBox = null): self
    {
        // validation for constraint: string
        if (!is_null($postOfficeBox) && !is_string($postOfficeBox)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postOfficeBox, true), gettype($postOfficeBox)), __LINE__);
        }
        $this->postOfficeBox = $postOfficeBox;
        
        return $this;
    }
    /**
     * Get postalCode value
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }
    /**
     * Set postalCode value
     * @param string $postalCode
     * @return \Pggns\MidocoApi\Documents\StructType\Address
     */
    public function setPostalCode(?string $postalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($postalCode) && !is_string($postalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($postalCode, true), gettype($postalCode)), __LINE__);
        }
        $this->postalCode = $postalCode;
        
        return $this;
    }
    /**
     * Get city value
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
    /**
     * Set city value
     * @param string $city
     * @return \Pggns\MidocoApi\Documents\StructType\Address
     */
    public function setCity(?string $city = null): self
    {
        // validation for constraint: string
        if (!is_null($city) && !is_string($city)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), gettype($city)), __LINE__);
        }
        $this->city = $city;
        
        return $this;
    }
    /**
     * Get countryCode value
     * @return string|null
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }
    /**
     * Set countryCode value
     * @param string $countryCode
     * @return \Pggns\MidocoApi\Documents\StructType\Address
     */
    public function setCountryCode(?string $countryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($countryCode) && !is_string($countryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryCode, true), gettype($countryCode)), __LINE__);
        }
        $this->countryCode = $countryCode;
        
        return $this;
    }
    /**
     * Get street value
     * @return string|null
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }
    /**
     * Set street value
     * @param string $street
     * @return \Pggns\MidocoApi\Documents\StructType\Address
     */
    public function setStreet(?string $street = null): self
    {
        // validation for constraint: string
        if (!is_null($street) && !is_string($street)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($street, true), gettype($street)), __LINE__);
        }
        $this->street = $street;
        
        return $this;
    }
    /**
     * Get streetNumber value
     * @return string|null
     */
    public function getStreetNumber(): ?string
    {
        return $this->streetNumber;
    }
    /**
     * Set streetNumber value
     * @param string $streetNumber
     * @return \Pggns\MidocoApi\Documents\StructType\Address
     */
    public function setStreetNumber(?string $streetNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($streetNumber) && !is_string($streetNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetNumber, true), gettype($streetNumber)), __LINE__);
        }
        $this->streetNumber = $streetNumber;
        
        return $this;
    }
    /**
     * Get email value
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }
    /**
     * Set email value
     * @param string $email
     * @return \Pggns\MidocoApi\Documents\StructType\Address
     */
    public function setEmail(?string $email = null): self
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->email = $email;
        
        return $this;
    }
}
