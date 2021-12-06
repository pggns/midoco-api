<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBirthdayListType StructType
 * @subpackage Structs
 */
class MidocoBirthdayListType extends AbstractStructBase
{
    /**
     * The salutation
     * @var string|null
     */
    protected ?string $salutation = null;
    /**
     * The title
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The firstName
     * @var string|null
     */
    protected ?string $firstName = null;
    /**
     * The birthday
     * @var string|null
     */
    protected ?string $birthday = null;
    /**
     * The travelerType
     * @var string|null
     */
    protected ?string $travelerType = null;
    /**
     * The street
     * @var string|null
     */
    protected ?string $street = null;
    /**
     * The streetNo
     * @var string|null
     */
    protected ?string $streetNo = null;
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
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The defaultEmail
     * @var string|null
     */
    protected ?string $defaultEmail = null;
    /**
     * The defaultFax
     * @var string|null
     */
    protected ?string $defaultFax = null;
    /**
     * The defaultMobile
     * @var string|null
     */
    protected ?string $defaultMobile = null;
    /**
     * The defaultPhone
     * @var string|null
     */
    protected ?string $defaultPhone = null;
    /**
     * The defaultPhoneBusiness
     * @var string|null
     */
    protected ?string $defaultPhoneBusiness = null;
    /**
     * The defaultWeb
     * @var string|null
     */
    protected ?string $defaultWeb = null;
    /**
     * Constructor method for MidocoBirthdayListType
     * @uses MidocoBirthdayListType::setSalutation()
     * @uses MidocoBirthdayListType::setTitle()
     * @uses MidocoBirthdayListType::setName()
     * @uses MidocoBirthdayListType::setFirstName()
     * @uses MidocoBirthdayListType::setBirthday()
     * @uses MidocoBirthdayListType::setTravelerType()
     * @uses MidocoBirthdayListType::setStreet()
     * @uses MidocoBirthdayListType::setStreetNo()
     * @uses MidocoBirthdayListType::setPostalCode()
     * @uses MidocoBirthdayListType::setCity()
     * @uses MidocoBirthdayListType::setCountry()
     * @uses MidocoBirthdayListType::setDefaultEmail()
     * @uses MidocoBirthdayListType::setDefaultFax()
     * @uses MidocoBirthdayListType::setDefaultMobile()
     * @uses MidocoBirthdayListType::setDefaultPhone()
     * @uses MidocoBirthdayListType::setDefaultPhoneBusiness()
     * @uses MidocoBirthdayListType::setDefaultWeb()
     * @param string $salutation
     * @param string $title
     * @param string $name
     * @param string $firstName
     * @param string $birthday
     * @param string $travelerType
     * @param string $street
     * @param string $streetNo
     * @param string $postalCode
     * @param string $city
     * @param string $country
     * @param string $defaultEmail
     * @param string $defaultFax
     * @param string $defaultMobile
     * @param string $defaultPhone
     * @param string $defaultPhoneBusiness
     * @param string $defaultWeb
     */
    public function __construct(?string $salutation = null, ?string $title = null, ?string $name = null, ?string $firstName = null, ?string $birthday = null, ?string $travelerType = null, ?string $street = null, ?string $streetNo = null, ?string $postalCode = null, ?string $city = null, ?string $country = null, ?string $defaultEmail = null, ?string $defaultFax = null, ?string $defaultMobile = null, ?string $defaultPhone = null, ?string $defaultPhoneBusiness = null, ?string $defaultWeb = null)
    {
        $this
            ->setSalutation($salutation)
            ->setTitle($title)
            ->setName($name)
            ->setFirstName($firstName)
            ->setBirthday($birthday)
            ->setTravelerType($travelerType)
            ->setStreet($street)
            ->setStreetNo($streetNo)
            ->setPostalCode($postalCode)
            ->setCity($city)
            ->setCountry($country)
            ->setDefaultEmail($defaultEmail)
            ->setDefaultFax($defaultFax)
            ->setDefaultMobile($defaultMobile)
            ->setDefaultPhone($defaultPhone)
            ->setDefaultPhoneBusiness($defaultPhoneBusiness)
            ->setDefaultWeb($defaultWeb);
    }
    /**
     * Get salutation value
     * @return string|null
     */
    public function getSalutation(): ?string
    {
        return $this->salutation;
    }
    /**
     * Set salutation value
     * @param string $salutation
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType
     */
    public function setSalutation(?string $salutation = null): self
    {
        // validation for constraint: string
        if (!is_null($salutation) && !is_string($salutation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salutation, true), gettype($salutation)), __LINE__);
        }
        $this->salutation = $salutation;
        
        return $this;
    }
    /**
     * Get title value
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }
    /**
     * Set title value
     * @param string $title
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType
     */
    public function setTitle(?string $title = null): self
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->title = $title;
        
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get firstName value
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }
    /**
     * Set firstName value
     * @param string $firstName
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType
     */
    public function setFirstName(?string $firstName = null): self
    {
        // validation for constraint: string
        if (!is_null($firstName) && !is_string($firstName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstName, true), gettype($firstName)), __LINE__);
        }
        $this->firstName = $firstName;
        
        return $this;
    }
    /**
     * Get birthday value
     * @return string|null
     */
    public function getBirthday(): ?string
    {
        return $this->birthday;
    }
    /**
     * Set birthday value
     * @param string $birthday
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType
     */
    public function setBirthday(?string $birthday = null): self
    {
        // validation for constraint: string
        if (!is_null($birthday) && !is_string($birthday)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthday, true), gettype($birthday)), __LINE__);
        }
        $this->birthday = $birthday;
        
        return $this;
    }
    /**
     * Get travelerType value
     * @return string|null
     */
    public function getTravelerType(): ?string
    {
        return $this->travelerType;
    }
    /**
     * Set travelerType value
     * @param string $travelerType
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType
     */
    public function setTravelerType(?string $travelerType = null): self
    {
        // validation for constraint: string
        if (!is_null($travelerType) && !is_string($travelerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelerType, true), gettype($travelerType)), __LINE__);
        }
        $this->travelerType = $travelerType;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType
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
     * Get streetNo value
     * @return string|null
     */
    public function getStreetNo(): ?string
    {
        return $this->streetNo;
    }
    /**
     * Set streetNo value
     * @param string $streetNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType
     */
    public function setStreetNo(?string $streetNo = null): self
    {
        // validation for constraint: string
        if (!is_null($streetNo) && !is_string($streetNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($streetNo, true), gettype($streetNo)), __LINE__);
        }
        $this->streetNo = $streetNo;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType
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
     * Get country value
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }
    /**
     * Set country value
     * @param string $country
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType
     */
    public function setCountry(?string $country = null): self
    {
        // validation for constraint: string
        if (!is_null($country) && !is_string($country)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), gettype($country)), __LINE__);
        }
        $this->country = $country;
        
        return $this;
    }
    /**
     * Get defaultEmail value
     * @return string|null
     */
    public function getDefaultEmail(): ?string
    {
        return $this->defaultEmail;
    }
    /**
     * Set defaultEmail value
     * @param string $defaultEmail
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType
     */
    public function setDefaultEmail(?string $defaultEmail = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultEmail) && !is_string($defaultEmail)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultEmail, true), gettype($defaultEmail)), __LINE__);
        }
        $this->defaultEmail = $defaultEmail;
        
        return $this;
    }
    /**
     * Get defaultFax value
     * @return string|null
     */
    public function getDefaultFax(): ?string
    {
        return $this->defaultFax;
    }
    /**
     * Set defaultFax value
     * @param string $defaultFax
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType
     */
    public function setDefaultFax(?string $defaultFax = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultFax) && !is_string($defaultFax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultFax, true), gettype($defaultFax)), __LINE__);
        }
        $this->defaultFax = $defaultFax;
        
        return $this;
    }
    /**
     * Get defaultMobile value
     * @return string|null
     */
    public function getDefaultMobile(): ?string
    {
        return $this->defaultMobile;
    }
    /**
     * Set defaultMobile value
     * @param string $defaultMobile
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType
     */
    public function setDefaultMobile(?string $defaultMobile = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultMobile) && !is_string($defaultMobile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultMobile, true), gettype($defaultMobile)), __LINE__);
        }
        $this->defaultMobile = $defaultMobile;
        
        return $this;
    }
    /**
     * Get defaultPhone value
     * @return string|null
     */
    public function getDefaultPhone(): ?string
    {
        return $this->defaultPhone;
    }
    /**
     * Set defaultPhone value
     * @param string $defaultPhone
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType
     */
    public function setDefaultPhone(?string $defaultPhone = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultPhone) && !is_string($defaultPhone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultPhone, true), gettype($defaultPhone)), __LINE__);
        }
        $this->defaultPhone = $defaultPhone;
        
        return $this;
    }
    /**
     * Get defaultPhoneBusiness value
     * @return string|null
     */
    public function getDefaultPhoneBusiness(): ?string
    {
        return $this->defaultPhoneBusiness;
    }
    /**
     * Set defaultPhoneBusiness value
     * @param string $defaultPhoneBusiness
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType
     */
    public function setDefaultPhoneBusiness(?string $defaultPhoneBusiness = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultPhoneBusiness) && !is_string($defaultPhoneBusiness)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultPhoneBusiness, true), gettype($defaultPhoneBusiness)), __LINE__);
        }
        $this->defaultPhoneBusiness = $defaultPhoneBusiness;
        
        return $this;
    }
    /**
     * Get defaultWeb value
     * @return string|null
     */
    public function getDefaultWeb(): ?string
    {
        return $this->defaultWeb;
    }
    /**
     * Set defaultWeb value
     * @param string $defaultWeb
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBirthdayListType
     */
    public function setDefaultWeb(?string $defaultWeb = null): self
    {
        // validation for constraint: string
        if (!is_null($defaultWeb) && !is_string($defaultWeb)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($defaultWeb, true), gettype($defaultWeb)), __LINE__);
        }
        $this->defaultWeb = $defaultWeb;
        
        return $this;
    }
}
