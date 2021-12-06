<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoParticipantList StructType
 * @subpackage Structs
 */
class MidocoParticipantList extends MidocoParticipantListType
{
    /**
     * The customerAddressCity
     * @var string|null
     */
    protected ?string $customerAddressCity = null;
    /**
     * The customerAddressCountryCode
     * @var string|null
     */
    protected ?string $customerAddressCountryCode = null;
    /**
     * The customerAddressPostalCode
     * @var string|null
     */
    protected ?string $customerAddressPostalCode = null;
    /**
     * The customerAddressStreet
     * @var string|null
     */
    protected ?string $customerAddressStreet = null;
    /**
     * The customerAddressStreetNo
     * @var string|null
     */
    protected ?string $customerAddressStreetNo = null;
    /**
     * The customerDefaultEmail
     * @var string|null
     */
    protected ?string $customerDefaultEmail = null;
    /**
     * The customerDefaultPhone
     * @var string|null
     */
    protected ?string $customerDefaultPhone = null;
    /**
     * Constructor method for MidocoParticipantList
     * @uses MidocoParticipantList::setCustomerAddressCity()
     * @uses MidocoParticipantList::setCustomerAddressCountryCode()
     * @uses MidocoParticipantList::setCustomerAddressPostalCode()
     * @uses MidocoParticipantList::setCustomerAddressStreet()
     * @uses MidocoParticipantList::setCustomerAddressStreetNo()
     * @uses MidocoParticipantList::setCustomerDefaultEmail()
     * @uses MidocoParticipantList::setCustomerDefaultPhone()
     * @param string $customerAddressCity
     * @param string $customerAddressCountryCode
     * @param string $customerAddressPostalCode
     * @param string $customerAddressStreet
     * @param string $customerAddressStreetNo
     * @param string $customerDefaultEmail
     * @param string $customerDefaultPhone
     */
    public function __construct(?string $customerAddressCity = null, ?string $customerAddressCountryCode = null, ?string $customerAddressPostalCode = null, ?string $customerAddressStreet = null, ?string $customerAddressStreetNo = null, ?string $customerDefaultEmail = null, ?string $customerDefaultPhone = null)
    {
        $this
            ->setCustomerAddressCity($customerAddressCity)
            ->setCustomerAddressCountryCode($customerAddressCountryCode)
            ->setCustomerAddressPostalCode($customerAddressPostalCode)
            ->setCustomerAddressStreet($customerAddressStreet)
            ->setCustomerAddressStreetNo($customerAddressStreetNo)
            ->setCustomerDefaultEmail($customerDefaultEmail)
            ->setCustomerDefaultPhone($customerDefaultPhone);
    }
    /**
     * Get customerAddressCity value
     * @return string|null
     */
    public function getCustomerAddressCity(): ?string
    {
        return $this->customerAddressCity;
    }
    /**
     * Set customerAddressCity value
     * @param string $customerAddressCity
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantList
     */
    public function setCustomerAddressCity(?string $customerAddressCity = null): self
    {
        // validation for constraint: string
        if (!is_null($customerAddressCity) && !is_string($customerAddressCity)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerAddressCity, true), gettype($customerAddressCity)), __LINE__);
        }
        $this->customerAddressCity = $customerAddressCity;
        
        return $this;
    }
    /**
     * Get customerAddressCountryCode value
     * @return string|null
     */
    public function getCustomerAddressCountryCode(): ?string
    {
        return $this->customerAddressCountryCode;
    }
    /**
     * Set customerAddressCountryCode value
     * @param string $customerAddressCountryCode
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantList
     */
    public function setCustomerAddressCountryCode(?string $customerAddressCountryCode = null): self
    {
        // validation for constraint: string
        if (!is_null($customerAddressCountryCode) && !is_string($customerAddressCountryCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerAddressCountryCode, true), gettype($customerAddressCountryCode)), __LINE__);
        }
        $this->customerAddressCountryCode = $customerAddressCountryCode;
        
        return $this;
    }
    /**
     * Get customerAddressPostalCode value
     * @return string|null
     */
    public function getCustomerAddressPostalCode(): ?string
    {
        return $this->customerAddressPostalCode;
    }
    /**
     * Set customerAddressPostalCode value
     * @param string $customerAddressPostalCode
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantList
     */
    public function setCustomerAddressPostalCode(?string $customerAddressPostalCode = null): self
    {
        // validation for constraint: string
        if (!is_null($customerAddressPostalCode) && !is_string($customerAddressPostalCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerAddressPostalCode, true), gettype($customerAddressPostalCode)), __LINE__);
        }
        $this->customerAddressPostalCode = $customerAddressPostalCode;
        
        return $this;
    }
    /**
     * Get customerAddressStreet value
     * @return string|null
     */
    public function getCustomerAddressStreet(): ?string
    {
        return $this->customerAddressStreet;
    }
    /**
     * Set customerAddressStreet value
     * @param string $customerAddressStreet
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantList
     */
    public function setCustomerAddressStreet(?string $customerAddressStreet = null): self
    {
        // validation for constraint: string
        if (!is_null($customerAddressStreet) && !is_string($customerAddressStreet)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerAddressStreet, true), gettype($customerAddressStreet)), __LINE__);
        }
        $this->customerAddressStreet = $customerAddressStreet;
        
        return $this;
    }
    /**
     * Get customerAddressStreetNo value
     * @return string|null
     */
    public function getCustomerAddressStreetNo(): ?string
    {
        return $this->customerAddressStreetNo;
    }
    /**
     * Set customerAddressStreetNo value
     * @param string $customerAddressStreetNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantList
     */
    public function setCustomerAddressStreetNo(?string $customerAddressStreetNo = null): self
    {
        // validation for constraint: string
        if (!is_null($customerAddressStreetNo) && !is_string($customerAddressStreetNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerAddressStreetNo, true), gettype($customerAddressStreetNo)), __LINE__);
        }
        $this->customerAddressStreetNo = $customerAddressStreetNo;
        
        return $this;
    }
    /**
     * Get customerDefaultEmail value
     * @return string|null
     */
    public function getCustomerDefaultEmail(): ?string
    {
        return $this->customerDefaultEmail;
    }
    /**
     * Set customerDefaultEmail value
     * @param string $customerDefaultEmail
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantList
     */
    public function setCustomerDefaultEmail(?string $customerDefaultEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($customerDefaultEmail) && !is_string($customerDefaultEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerDefaultEmail, true), gettype($customerDefaultEmail)), __LINE__);
        }
        $this->customerDefaultEmail = $customerDefaultEmail;
        
        return $this;
    }
    /**
     * Get customerDefaultPhone value
     * @return string|null
     */
    public function getCustomerDefaultPhone(): ?string
    {
        return $this->customerDefaultPhone;
    }
    /**
     * Set customerDefaultPhone value
     * @param string $customerDefaultPhone
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoParticipantList
     */
    public function setCustomerDefaultPhone(?string $customerDefaultPhone = null): self
    {
        // validation for constraint: string
        if (!is_null($customerDefaultPhone) && !is_string($customerDefaultPhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerDefaultPhone, true), gettype($customerDefaultPhone)), __LINE__);
        }
        $this->customerDefaultPhone = $customerDefaultPhone;
        
        return $this;
    }
}
