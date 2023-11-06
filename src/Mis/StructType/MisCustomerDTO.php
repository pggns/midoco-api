<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisCustomerDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MisCustomerDTO extends AbstractStructBase
{
    /**
     * The addressId
     * @var int|null
     */
    protected ?int $addressId = null;
    /**
     * The addresseeLine1
     * @var string|null
     */
    protected ?string $addresseeLine1 = null;
    /**
     * The addresseeLine2
     * @var string|null
     */
    protected ?string $addresseeLine2 = null;
    /**
     * The agencyNo
     * @var string|null
     */
    protected ?string $agencyNo = null;
    /**
     * The birthName
     * @var string|null
     */
    protected ?string $birthName = null;
    /**
     * The birthday
     * @var string|null
     */
    protected ?string $birthday = null;
    /**
     * The birthdayDay
     * @var int|null
     */
    protected ?int $birthdayDay = null;
    /**
     * The birthdayMonth
     * @var int|null
     */
    protected ?int $birthdayMonth = null;
    /**
     * The birthdayYear
     * @var int|null
     */
    protected ?int $birthdayYear = null;
    /**
     * The changingUser
     * @var int|null
     */
    protected ?int $changingUser = null;
    /**
     * The city
     * @var string|null
     */
    protected ?string $city = null;
    /**
     * The contactPerson
     * @var string|null
     */
    protected ?string $contactPerson = null;
    /**
     * The costCentre
     * @var string|null
     */
    protected ?string $costCentre = null;
    /**
     * The countryCode
     * @var string|null
     */
    protected ?string $countryCode = null;
    /**
     * The creatingUser
     * @var int|null
     */
    protected ?int $creatingUser = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The dateChanged
     * @var string|null
     */
    protected ?string $dateChanged = null;
    /**
     * The dateCreated
     * @var string|null
     */
    protected ?string $dateCreated = null;
    /**
     * The debitor
     * @var string|null
     */
    protected ?string $debitor = null;
    /**
     * The department
     * @var string|null
     */
    protected ?string $department = null;
    /**
     * The email
     * @var string|null
     */
    protected ?string $email = null;
    /**
     * The endorsement
     * @var string|null
     */
    protected ?string $endorsement = null;
    /**
     * The fax
     * @var string|null
     */
    protected ?string $fax = null;
    /**
     * The firstTravelDate
     * @var string|null
     */
    protected ?string $firstTravelDate = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The formalAddressing
     * @var bool|null
     */
    protected ?bool $formalAddressing = null;
    /**
     * The hasSpouse
     * @var bool|null
     */
    protected ?bool $hasSpouse = null;
    /**
     * The includeInSearch
     * @var bool|null
     */
    protected ?bool $includeInSearch = null;
    /**
     * The info
     * @var string|null
     */
    protected ?string $info = null;
    /**
     * The isSpecialCustomer
     * @var bool|null
     */
    protected ?bool $isSpecialCustomer = null;
    /**
     * The jobFunction
     * @var string|null
     */
    protected ?string $jobFunction = null;
    /**
     * The language
     * @var string|null
     */
    protected ?string $language = null;
    /**
     * The lastBookingUser
     * @var int|null
     */
    protected ?int $lastBookingUser = null;
    /**
     * The lastEndTravelDate
     * @var string|null
     */
    protected ?string $lastEndTravelDate = null;
    /**
     * The lastTravelDate
     * @var string|null
     */
    protected ?string $lastTravelDate = null;
    /**
     * The lockReasonDescription
     * @var string|null
     */
    protected ?string $lockReasonDescription = null;
    /**
     * The lockReasonId
     * @var string|null
     */
    protected ?string $lockReasonId = null;
    /**
     * The locked
     * @var bool|null
     */
    protected ?bool $locked = null;
    /**
     * The mailSalutation
     * @var string|null
     */
    protected ?string $mailSalutation = null;
    /**
     * The mailingProhibited
     * @var bool|null
     */
    protected ?bool $mailingProhibited = null;
    /**
     * The mediatorId
     * @var string|null
     */
    protected ?string $mediatorId = null;
    /**
     * The mediatorType
     * @var string|null
     */
    protected ?string $mediatorType = null;
    /**
     * The middleName
     * @var string|null
     */
    protected ?string $middleName = null;
    /**
     * The mobile
     * @var string|null
     */
    protected ?string $mobile = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The noOfChildren
     * @var int|null
     */
    protected ?int $noOfChildren = null;
    /**
     * The numBookings
     * @var int|null
     */
    protected ?int $numBookings = null;
    /**
     * The numOrders
     * @var int|null
     */
    protected ?int $numOrders = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The organisationName
     * @var string|null
     */
    protected ?string $organisationName = null;
    /**
     * The personalNo
     * @var string|null
     */
    protected ?string $personalNo = null;
    /**
     * The phone
     * @var string|null
     */
    protected ?string $phone = null;
    /**
     * The phoneBusiness
     * @var string|null
     */
    protected ?string $phoneBusiness = null;
    /**
     * The postProhibited
     * @var bool|null
     */
    protected ?bool $postProhibited = null;
    /**
     * The postalCode
     * @var string|null
     */
    protected ?string $postalCode = null;
    /**
     * The salutation
     * @var string|null
     */
    protected ?string $salutation = null;
    /**
     * The salutationId
     * @var string|null
     */
    protected ?string $salutationId = null;
    /**
     * The salutationLetter
     * @var string|null
     */
    protected ?string $salutationLetter = null;
    /**
     * The state
     * @var string|null
     */
    protected ?string $state = null;
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
     * The title
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * The tradeRegister
     * @var string|null
     */
    protected ?string $tradeRegister = null;
    /**
     * The travelAmount
     * @var float|null
     */
    protected ?float $travelAmount = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The validated
     * @var bool|null
     */
    protected ?bool $validated = null;
    /**
     * The vatId
     * @var string|null
     */
    protected ?string $vatId = null;
    /**
     * The web
     * @var string|null
     */
    protected ?string $web = null;
    /**
     * Constructor method for MisCustomerDTO
     * @uses MisCustomerDTO::setAddressId()
     * @uses MisCustomerDTO::setAddresseeLine1()
     * @uses MisCustomerDTO::setAddresseeLine2()
     * @uses MisCustomerDTO::setAgencyNo()
     * @uses MisCustomerDTO::setBirthName()
     * @uses MisCustomerDTO::setBirthday()
     * @uses MisCustomerDTO::setBirthdayDay()
     * @uses MisCustomerDTO::setBirthdayMonth()
     * @uses MisCustomerDTO::setBirthdayYear()
     * @uses MisCustomerDTO::setChangingUser()
     * @uses MisCustomerDTO::setCity()
     * @uses MisCustomerDTO::setContactPerson()
     * @uses MisCustomerDTO::setCostCentre()
     * @uses MisCustomerDTO::setCountryCode()
     * @uses MisCustomerDTO::setCreatingUser()
     * @uses MisCustomerDTO::setCustomerId()
     * @uses MisCustomerDTO::setDateChanged()
     * @uses MisCustomerDTO::setDateCreated()
     * @uses MisCustomerDTO::setDebitor()
     * @uses MisCustomerDTO::setDepartment()
     * @uses MisCustomerDTO::setEmail()
     * @uses MisCustomerDTO::setEndorsement()
     * @uses MisCustomerDTO::setFax()
     * @uses MisCustomerDTO::setFirstTravelDate()
     * @uses MisCustomerDTO::setForename()
     * @uses MisCustomerDTO::setFormalAddressing()
     * @uses MisCustomerDTO::setHasSpouse()
     * @uses MisCustomerDTO::setIncludeInSearch()
     * @uses MisCustomerDTO::setInfo()
     * @uses MisCustomerDTO::setIsSpecialCustomer()
     * @uses MisCustomerDTO::setJobFunction()
     * @uses MisCustomerDTO::setLanguage()
     * @uses MisCustomerDTO::setLastBookingUser()
     * @uses MisCustomerDTO::setLastEndTravelDate()
     * @uses MisCustomerDTO::setLastTravelDate()
     * @uses MisCustomerDTO::setLockReasonDescription()
     * @uses MisCustomerDTO::setLockReasonId()
     * @uses MisCustomerDTO::setLocked()
     * @uses MisCustomerDTO::setMailSalutation()
     * @uses MisCustomerDTO::setMailingProhibited()
     * @uses MisCustomerDTO::setMediatorId()
     * @uses MisCustomerDTO::setMediatorType()
     * @uses MisCustomerDTO::setMiddleName()
     * @uses MisCustomerDTO::setMobile()
     * @uses MisCustomerDTO::setName()
     * @uses MisCustomerDTO::setNoOfChildren()
     * @uses MisCustomerDTO::setNumBookings()
     * @uses MisCustomerDTO::setNumOrders()
     * @uses MisCustomerDTO::setOrgUnit()
     * @uses MisCustomerDTO::setOrganisationName()
     * @uses MisCustomerDTO::setPersonalNo()
     * @uses MisCustomerDTO::setPhone()
     * @uses MisCustomerDTO::setPhoneBusiness()
     * @uses MisCustomerDTO::setPostProhibited()
     * @uses MisCustomerDTO::setPostalCode()
     * @uses MisCustomerDTO::setSalutation()
     * @uses MisCustomerDTO::setSalutationId()
     * @uses MisCustomerDTO::setSalutationLetter()
     * @uses MisCustomerDTO::setState()
     * @uses MisCustomerDTO::setStreet()
     * @uses MisCustomerDTO::setStreetNo()
     * @uses MisCustomerDTO::setTitle()
     * @uses MisCustomerDTO::setTradeRegister()
     * @uses MisCustomerDTO::setTravelAmount()
     * @uses MisCustomerDTO::setType()
     * @uses MisCustomerDTO::setValidated()
     * @uses MisCustomerDTO::setVatId()
     * @uses MisCustomerDTO::setWeb()
     * @param int $addressId
     * @param string $addresseeLine1
     * @param string $addresseeLine2
     * @param string $agencyNo
     * @param string $birthName
     * @param string $birthday
     * @param int $birthdayDay
     * @param int $birthdayMonth
     * @param int $birthdayYear
     * @param int $changingUser
     * @param string $city
     * @param string $contactPerson
     * @param string $costCentre
     * @param string $countryCode
     * @param int $creatingUser
     * @param int $customerId
     * @param string $dateChanged
     * @param string $dateCreated
     * @param string $debitor
     * @param string $department
     * @param string $email
     * @param string $endorsement
     * @param string $fax
     * @param string $firstTravelDate
     * @param string $forename
     * @param bool $formalAddressing
     * @param bool $hasSpouse
     * @param bool $includeInSearch
     * @param string $info
     * @param bool $isSpecialCustomer
     * @param string $jobFunction
     * @param string $language
     * @param int $lastBookingUser
     * @param string $lastEndTravelDate
     * @param string $lastTravelDate
     * @param string $lockReasonDescription
     * @param string $lockReasonId
     * @param bool $locked
     * @param string $mailSalutation
     * @param bool $mailingProhibited
     * @param string $mediatorId
     * @param string $mediatorType
     * @param string $middleName
     * @param string $mobile
     * @param string $name
     * @param int $noOfChildren
     * @param int $numBookings
     * @param int $numOrders
     * @param string $orgUnit
     * @param string $organisationName
     * @param string $personalNo
     * @param string $phone
     * @param string $phoneBusiness
     * @param bool $postProhibited
     * @param string $postalCode
     * @param string $salutation
     * @param string $salutationId
     * @param string $salutationLetter
     * @param string $state
     * @param string $street
     * @param string $streetNo
     * @param string $title
     * @param string $tradeRegister
     * @param float $travelAmount
     * @param string $type
     * @param bool $validated
     * @param string $vatId
     * @param string $web
     */
    public function __construct(?int $addressId = null, ?string $addresseeLine1 = null, ?string $addresseeLine2 = null, ?string $agencyNo = null, ?string $birthName = null, ?string $birthday = null, ?int $birthdayDay = null, ?int $birthdayMonth = null, ?int $birthdayYear = null, ?int $changingUser = null, ?string $city = null, ?string $contactPerson = null, ?string $costCentre = null, ?string $countryCode = null, ?int $creatingUser = null, ?int $customerId = null, ?string $dateChanged = null, ?string $dateCreated = null, ?string $debitor = null, ?string $department = null, ?string $email = null, ?string $endorsement = null, ?string $fax = null, ?string $firstTravelDate = null, ?string $forename = null, ?bool $formalAddressing = null, ?bool $hasSpouse = null, ?bool $includeInSearch = null, ?string $info = null, ?bool $isSpecialCustomer = null, ?string $jobFunction = null, ?string $language = null, ?int $lastBookingUser = null, ?string $lastEndTravelDate = null, ?string $lastTravelDate = null, ?string $lockReasonDescription = null, ?string $lockReasonId = null, ?bool $locked = null, ?string $mailSalutation = null, ?bool $mailingProhibited = null, ?string $mediatorId = null, ?string $mediatorType = null, ?string $middleName = null, ?string $mobile = null, ?string $name = null, ?int $noOfChildren = null, ?int $numBookings = null, ?int $numOrders = null, ?string $orgUnit = null, ?string $organisationName = null, ?string $personalNo = null, ?string $phone = null, ?string $phoneBusiness = null, ?bool $postProhibited = null, ?string $postalCode = null, ?string $salutation = null, ?string $salutationId = null, ?string $salutationLetter = null, ?string $state = null, ?string $street = null, ?string $streetNo = null, ?string $title = null, ?string $tradeRegister = null, ?float $travelAmount = null, ?string $type = null, ?bool $validated = null, ?string $vatId = null, ?string $web = null)
    {
        $this
            ->setAddressId($addressId)
            ->setAddresseeLine1($addresseeLine1)
            ->setAddresseeLine2($addresseeLine2)
            ->setAgencyNo($agencyNo)
            ->setBirthName($birthName)
            ->setBirthday($birthday)
            ->setBirthdayDay($birthdayDay)
            ->setBirthdayMonth($birthdayMonth)
            ->setBirthdayYear($birthdayYear)
            ->setChangingUser($changingUser)
            ->setCity($city)
            ->setContactPerson($contactPerson)
            ->setCostCentre($costCentre)
            ->setCountryCode($countryCode)
            ->setCreatingUser($creatingUser)
            ->setCustomerId($customerId)
            ->setDateChanged($dateChanged)
            ->setDateCreated($dateCreated)
            ->setDebitor($debitor)
            ->setDepartment($department)
            ->setEmail($email)
            ->setEndorsement($endorsement)
            ->setFax($fax)
            ->setFirstTravelDate($firstTravelDate)
            ->setForename($forename)
            ->setFormalAddressing($formalAddressing)
            ->setHasSpouse($hasSpouse)
            ->setIncludeInSearch($includeInSearch)
            ->setInfo($info)
            ->setIsSpecialCustomer($isSpecialCustomer)
            ->setJobFunction($jobFunction)
            ->setLanguage($language)
            ->setLastBookingUser($lastBookingUser)
            ->setLastEndTravelDate($lastEndTravelDate)
            ->setLastTravelDate($lastTravelDate)
            ->setLockReasonDescription($lockReasonDescription)
            ->setLockReasonId($lockReasonId)
            ->setLocked($locked)
            ->setMailSalutation($mailSalutation)
            ->setMailingProhibited($mailingProhibited)
            ->setMediatorId($mediatorId)
            ->setMediatorType($mediatorType)
            ->setMiddleName($middleName)
            ->setMobile($mobile)
            ->setName($name)
            ->setNoOfChildren($noOfChildren)
            ->setNumBookings($numBookings)
            ->setNumOrders($numOrders)
            ->setOrgUnit($orgUnit)
            ->setOrganisationName($organisationName)
            ->setPersonalNo($personalNo)
            ->setPhone($phone)
            ->setPhoneBusiness($phoneBusiness)
            ->setPostProhibited($postProhibited)
            ->setPostalCode($postalCode)
            ->setSalutation($salutation)
            ->setSalutationId($salutationId)
            ->setSalutationLetter($salutationLetter)
            ->setState($state)
            ->setStreet($street)
            ->setStreetNo($streetNo)
            ->setTitle($title)
            ->setTradeRegister($tradeRegister)
            ->setTravelAmount($travelAmount)
            ->setType($type)
            ->setValidated($validated)
            ->setVatId($vatId)
            ->setWeb($web);
    }
    /**
     * Get addressId value
     * @return int|null
     */
    public function getAddressId(): ?int
    {
        return $this->addressId;
    }
    /**
     * Set addressId value
     * @param int $addressId
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setAddressId(?int $addressId = null): self
    {
        // validation for constraint: int
        if (!is_null($addressId) && !(is_int($addressId) || ctype_digit($addressId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($addressId, true), gettype($addressId)), __LINE__);
        }
        $this->addressId = $addressId;
        
        return $this;
    }
    /**
     * Get addresseeLine1 value
     * @return string|null
     */
    public function getAddresseeLine1(): ?string
    {
        return $this->addresseeLine1;
    }
    /**
     * Set addresseeLine1 value
     * @param string $addresseeLine1
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setAddresseeLine1(?string $addresseeLine1 = null): self
    {
        // validation for constraint: string
        if (!is_null($addresseeLine1) && !is_string($addresseeLine1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addresseeLine1, true), gettype($addresseeLine1)), __LINE__);
        }
        $this->addresseeLine1 = $addresseeLine1;
        
        return $this;
    }
    /**
     * Get addresseeLine2 value
     * @return string|null
     */
    public function getAddresseeLine2(): ?string
    {
        return $this->addresseeLine2;
    }
    /**
     * Set addresseeLine2 value
     * @param string $addresseeLine2
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setAddresseeLine2(?string $addresseeLine2 = null): self
    {
        // validation for constraint: string
        if (!is_null($addresseeLine2) && !is_string($addresseeLine2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($addresseeLine2, true), gettype($addresseeLine2)), __LINE__);
        }
        $this->addresseeLine2 = $addresseeLine2;
        
        return $this;
    }
    /**
     * Get agencyNo value
     * @return string|null
     */
    public function getAgencyNo(): ?string
    {
        return $this->agencyNo;
    }
    /**
     * Set agencyNo value
     * @param string $agencyNo
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setAgencyNo(?string $agencyNo = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyNo) && !is_string($agencyNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyNo, true), gettype($agencyNo)), __LINE__);
        }
        $this->agencyNo = $agencyNo;
        
        return $this;
    }
    /**
     * Get birthName value
     * @return string|null
     */
    public function getBirthName(): ?string
    {
        return $this->birthName;
    }
    /**
     * Set birthName value
     * @param string $birthName
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setBirthName(?string $birthName = null): self
    {
        // validation for constraint: string
        if (!is_null($birthName) && !is_string($birthName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($birthName, true), gettype($birthName)), __LINE__);
        }
        $this->birthName = $birthName;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
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
     * Get birthdayDay value
     * @return int|null
     */
    public function getBirthdayDay(): ?int
    {
        return $this->birthdayDay;
    }
    /**
     * Set birthdayDay value
     * @param int $birthdayDay
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setBirthdayDay(?int $birthdayDay = null): self
    {
        // validation for constraint: int
        if (!is_null($birthdayDay) && !(is_int($birthdayDay) || ctype_digit($birthdayDay))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($birthdayDay, true), gettype($birthdayDay)), __LINE__);
        }
        $this->birthdayDay = $birthdayDay;
        
        return $this;
    }
    /**
     * Get birthdayMonth value
     * @return int|null
     */
    public function getBirthdayMonth(): ?int
    {
        return $this->birthdayMonth;
    }
    /**
     * Set birthdayMonth value
     * @param int $birthdayMonth
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setBirthdayMonth(?int $birthdayMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($birthdayMonth) && !(is_int($birthdayMonth) || ctype_digit($birthdayMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($birthdayMonth, true), gettype($birthdayMonth)), __LINE__);
        }
        $this->birthdayMonth = $birthdayMonth;
        
        return $this;
    }
    /**
     * Get birthdayYear value
     * @return int|null
     */
    public function getBirthdayYear(): ?int
    {
        return $this->birthdayYear;
    }
    /**
     * Set birthdayYear value
     * @param int $birthdayYear
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setBirthdayYear(?int $birthdayYear = null): self
    {
        // validation for constraint: int
        if (!is_null($birthdayYear) && !(is_int($birthdayYear) || ctype_digit($birthdayYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($birthdayYear, true), gettype($birthdayYear)), __LINE__);
        }
        $this->birthdayYear = $birthdayYear;
        
        return $this;
    }
    /**
     * Get changingUser value
     * @return int|null
     */
    public function getChangingUser(): ?int
    {
        return $this->changingUser;
    }
    /**
     * Set changingUser value
     * @param int $changingUser
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setChangingUser(?int $changingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($changingUser) && !(is_int($changingUser) || ctype_digit($changingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($changingUser, true), gettype($changingUser)), __LINE__);
        }
        $this->changingUser = $changingUser;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
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
     * Get contactPerson value
     * @return string|null
     */
    public function getContactPerson(): ?string
    {
        return $this->contactPerson;
    }
    /**
     * Set contactPerson value
     * @param string $contactPerson
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setContactPerson(?string $contactPerson = null): self
    {
        // validation for constraint: string
        if (!is_null($contactPerson) && !is_string($contactPerson)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contactPerson, true), gettype($contactPerson)), __LINE__);
        }
        $this->contactPerson = $contactPerson;
        
        return $this;
    }
    /**
     * Get costCentre value
     * @return string|null
     */
    public function getCostCentre(): ?string
    {
        return $this->costCentre;
    }
    /**
     * Set costCentre value
     * @param string $costCentre
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setCostCentre(?string $costCentre = null): self
    {
        // validation for constraint: string
        if (!is_null($costCentre) && !is_string($costCentre)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($costCentre, true), gettype($costCentre)), __LINE__);
        }
        $this->costCentre = $costCentre;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
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
     * Get creatingUser value
     * @return int|null
     */
    public function getCreatingUser(): ?int
    {
        return $this->creatingUser;
    }
    /**
     * Set creatingUser value
     * @param int $creatingUser
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setCreatingUser(?int $creatingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($creatingUser) && !(is_int($creatingUser) || ctype_digit($creatingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($creatingUser, true), gettype($creatingUser)), __LINE__);
        }
        $this->creatingUser = $creatingUser;
        
        return $this;
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get dateChanged value
     * @return string|null
     */
    public function getDateChanged(): ?string
    {
        return $this->dateChanged;
    }
    /**
     * Set dateChanged value
     * @param string $dateChanged
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setDateChanged(?string $dateChanged = null): self
    {
        // validation for constraint: string
        if (!is_null($dateChanged) && !is_string($dateChanged)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateChanged, true), gettype($dateChanged)), __LINE__);
        }
        $this->dateChanged = $dateChanged;
        
        return $this;
    }
    /**
     * Get dateCreated value
     * @return string|null
     */
    public function getDateCreated(): ?string
    {
        return $this->dateCreated;
    }
    /**
     * Set dateCreated value
     * @param string $dateCreated
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setDateCreated(?string $dateCreated = null): self
    {
        // validation for constraint: string
        if (!is_null($dateCreated) && !is_string($dateCreated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dateCreated, true), gettype($dateCreated)), __LINE__);
        }
        $this->dateCreated = $dateCreated;
        
        return $this;
    }
    /**
     * Get debitor value
     * @return string|null
     */
    public function getDebitor(): ?string
    {
        return $this->debitor;
    }
    /**
     * Set debitor value
     * @param string $debitor
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setDebitor(?string $debitor = null): self
    {
        // validation for constraint: string
        if (!is_null($debitor) && !is_string($debitor)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitor, true), gettype($debitor)), __LINE__);
        }
        $this->debitor = $debitor;
        
        return $this;
    }
    /**
     * Get department value
     * @return string|null
     */
    public function getDepartment(): ?string
    {
        return $this->department;
    }
    /**
     * Set department value
     * @param string $department
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setDepartment(?string $department = null): self
    {
        // validation for constraint: string
        if (!is_null($department) && !is_string($department)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($department, true), gettype($department)), __LINE__);
        }
        $this->department = $department;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
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
    /**
     * Get endorsement value
     * @return string|null
     */
    public function getEndorsement(): ?string
    {
        return $this->endorsement;
    }
    /**
     * Set endorsement value
     * @param string $endorsement
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setEndorsement(?string $endorsement = null): self
    {
        // validation for constraint: string
        if (!is_null($endorsement) && !is_string($endorsement)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endorsement, true), gettype($endorsement)), __LINE__);
        }
        $this->endorsement = $endorsement;
        
        return $this;
    }
    /**
     * Get fax value
     * @return string|null
     */
    public function getFax(): ?string
    {
        return $this->fax;
    }
    /**
     * Set fax value
     * @param string $fax
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setFax(?string $fax = null): self
    {
        // validation for constraint: string
        if (!is_null($fax) && !is_string($fax)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fax, true), gettype($fax)), __LINE__);
        }
        $this->fax = $fax;
        
        return $this;
    }
    /**
     * Get firstTravelDate value
     * @return string|null
     */
    public function getFirstTravelDate(): ?string
    {
        return $this->firstTravelDate;
    }
    /**
     * Set firstTravelDate value
     * @param string $firstTravelDate
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setFirstTravelDate(?string $firstTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($firstTravelDate) && !is_string($firstTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstTravelDate, true), gettype($firstTravelDate)), __LINE__);
        }
        $this->firstTravelDate = $firstTravelDate;
        
        return $this;
    }
    /**
     * Get forename value
     * @return string|null
     */
    public function getForename(): ?string
    {
        return $this->forename;
    }
    /**
     * Set forename value
     * @param string $forename
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setForename(?string $forename = null): self
    {
        // validation for constraint: string
        if (!is_null($forename) && !is_string($forename)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($forename, true), gettype($forename)), __LINE__);
        }
        $this->forename = $forename;
        
        return $this;
    }
    /**
     * Get formalAddressing value
     * @return bool|null
     */
    public function getFormalAddressing(): ?bool
    {
        return $this->formalAddressing;
    }
    /**
     * Set formalAddressing value
     * @param bool $formalAddressing
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setFormalAddressing(?bool $formalAddressing = null): self
    {
        // validation for constraint: boolean
        if (!is_null($formalAddressing) && !is_bool($formalAddressing)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($formalAddressing, true), gettype($formalAddressing)), __LINE__);
        }
        $this->formalAddressing = $formalAddressing;
        
        return $this;
    }
    /**
     * Get hasSpouse value
     * @return bool|null
     */
    public function getHasSpouse(): ?bool
    {
        return $this->hasSpouse;
    }
    /**
     * Set hasSpouse value
     * @param bool $hasSpouse
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setHasSpouse(?bool $hasSpouse = null): self
    {
        // validation for constraint: boolean
        if (!is_null($hasSpouse) && !is_bool($hasSpouse)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasSpouse, true), gettype($hasSpouse)), __LINE__);
        }
        $this->hasSpouse = $hasSpouse;
        
        return $this;
    }
    /**
     * Get includeInSearch value
     * @return bool|null
     */
    public function getIncludeInSearch(): ?bool
    {
        return $this->includeInSearch;
    }
    /**
     * Set includeInSearch value
     * @param bool $includeInSearch
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setIncludeInSearch(?bool $includeInSearch = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeInSearch) && !is_bool($includeInSearch)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeInSearch, true), gettype($includeInSearch)), __LINE__);
        }
        $this->includeInSearch = $includeInSearch;
        
        return $this;
    }
    /**
     * Get info value
     * @return string|null
     */
    public function getInfo(): ?string
    {
        return $this->info;
    }
    /**
     * Set info value
     * @param string $info
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setInfo(?string $info = null): self
    {
        // validation for constraint: string
        if (!is_null($info) && !is_string($info)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($info, true), gettype($info)), __LINE__);
        }
        $this->info = $info;
        
        return $this;
    }
    /**
     * Get isSpecialCustomer value
     * @return bool|null
     */
    public function getIsSpecialCustomer(): ?bool
    {
        return $this->isSpecialCustomer;
    }
    /**
     * Set isSpecialCustomer value
     * @param bool $isSpecialCustomer
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setIsSpecialCustomer(?bool $isSpecialCustomer = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isSpecialCustomer) && !is_bool($isSpecialCustomer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isSpecialCustomer, true), gettype($isSpecialCustomer)), __LINE__);
        }
        $this->isSpecialCustomer = $isSpecialCustomer;
        
        return $this;
    }
    /**
     * Get jobFunction value
     * @return string|null
     */
    public function getJobFunction(): ?string
    {
        return $this->jobFunction;
    }
    /**
     * Set jobFunction value
     * @param string $jobFunction
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setJobFunction(?string $jobFunction = null): self
    {
        // validation for constraint: string
        if (!is_null($jobFunction) && !is_string($jobFunction)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($jobFunction, true), gettype($jobFunction)), __LINE__);
        }
        $this->jobFunction = $jobFunction;
        
        return $this;
    }
    /**
     * Get language value
     * @return string|null
     */
    public function getLanguage(): ?string
    {
        return $this->language;
    }
    /**
     * Set language value
     * @param string $language
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setLanguage(?string $language = null): self
    {
        // validation for constraint: string
        if (!is_null($language) && !is_string($language)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($language, true), gettype($language)), __LINE__);
        }
        $this->language = $language;
        
        return $this;
    }
    /**
     * Get lastBookingUser value
     * @return int|null
     */
    public function getLastBookingUser(): ?int
    {
        return $this->lastBookingUser;
    }
    /**
     * Set lastBookingUser value
     * @param int $lastBookingUser
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setLastBookingUser(?int $lastBookingUser = null): self
    {
        // validation for constraint: int
        if (!is_null($lastBookingUser) && !(is_int($lastBookingUser) || ctype_digit($lastBookingUser))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($lastBookingUser, true), gettype($lastBookingUser)), __LINE__);
        }
        $this->lastBookingUser = $lastBookingUser;
        
        return $this;
    }
    /**
     * Get lastEndTravelDate value
     * @return string|null
     */
    public function getLastEndTravelDate(): ?string
    {
        return $this->lastEndTravelDate;
    }
    /**
     * Set lastEndTravelDate value
     * @param string $lastEndTravelDate
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setLastEndTravelDate(?string $lastEndTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastEndTravelDate) && !is_string($lastEndTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastEndTravelDate, true), gettype($lastEndTravelDate)), __LINE__);
        }
        $this->lastEndTravelDate = $lastEndTravelDate;
        
        return $this;
    }
    /**
     * Get lastTravelDate value
     * @return string|null
     */
    public function getLastTravelDate(): ?string
    {
        return $this->lastTravelDate;
    }
    /**
     * Set lastTravelDate value
     * @param string $lastTravelDate
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setLastTravelDate(?string $lastTravelDate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastTravelDate) && !is_string($lastTravelDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastTravelDate, true), gettype($lastTravelDate)), __LINE__);
        }
        $this->lastTravelDate = $lastTravelDate;
        
        return $this;
    }
    /**
     * Get lockReasonDescription value
     * @return string|null
     */
    public function getLockReasonDescription(): ?string
    {
        return $this->lockReasonDescription;
    }
    /**
     * Set lockReasonDescription value
     * @param string $lockReasonDescription
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setLockReasonDescription(?string $lockReasonDescription = null): self
    {
        // validation for constraint: string
        if (!is_null($lockReasonDescription) && !is_string($lockReasonDescription)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lockReasonDescription, true), gettype($lockReasonDescription)), __LINE__);
        }
        $this->lockReasonDescription = $lockReasonDescription;
        
        return $this;
    }
    /**
     * Get lockReasonId value
     * @return string|null
     */
    public function getLockReasonId(): ?string
    {
        return $this->lockReasonId;
    }
    /**
     * Set lockReasonId value
     * @param string $lockReasonId
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setLockReasonId(?string $lockReasonId = null): self
    {
        // validation for constraint: string
        if (!is_null($lockReasonId) && !is_string($lockReasonId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lockReasonId, true), gettype($lockReasonId)), __LINE__);
        }
        $this->lockReasonId = $lockReasonId;
        
        return $this;
    }
    /**
     * Get locked value
     * @return bool|null
     */
    public function getLocked(): ?bool
    {
        return $this->locked;
    }
    /**
     * Set locked value
     * @param bool $locked
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setLocked(?bool $locked = null): self
    {
        // validation for constraint: boolean
        if (!is_null($locked) && !is_bool($locked)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($locked, true), gettype($locked)), __LINE__);
        }
        $this->locked = $locked;
        
        return $this;
    }
    /**
     * Get mailSalutation value
     * @return string|null
     */
    public function getMailSalutation(): ?string
    {
        return $this->mailSalutation;
    }
    /**
     * Set mailSalutation value
     * @param string $mailSalutation
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setMailSalutation(?string $mailSalutation = null): self
    {
        // validation for constraint: string
        if (!is_null($mailSalutation) && !is_string($mailSalutation)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mailSalutation, true), gettype($mailSalutation)), __LINE__);
        }
        $this->mailSalutation = $mailSalutation;
        
        return $this;
    }
    /**
     * Get mailingProhibited value
     * @return bool|null
     */
    public function getMailingProhibited(): ?bool
    {
        return $this->mailingProhibited;
    }
    /**
     * Set mailingProhibited value
     * @param bool $mailingProhibited
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setMailingProhibited(?bool $mailingProhibited = null): self
    {
        // validation for constraint: boolean
        if (!is_null($mailingProhibited) && !is_bool($mailingProhibited)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($mailingProhibited, true), gettype($mailingProhibited)), __LINE__);
        }
        $this->mailingProhibited = $mailingProhibited;
        
        return $this;
    }
    /**
     * Get mediatorId value
     * @return string|null
     */
    public function getMediatorId(): ?string
    {
        return $this->mediatorId;
    }
    /**
     * Set mediatorId value
     * @param string $mediatorId
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setMediatorId(?string $mediatorId = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorId) && !is_string($mediatorId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorId, true), gettype($mediatorId)), __LINE__);
        }
        $this->mediatorId = $mediatorId;
        
        return $this;
    }
    /**
     * Get mediatorType value
     * @return string|null
     */
    public function getMediatorType(): ?string
    {
        return $this->mediatorType;
    }
    /**
     * Set mediatorType value
     * @param string $mediatorType
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setMediatorType(?string $mediatorType = null): self
    {
        // validation for constraint: string
        if (!is_null($mediatorType) && !is_string($mediatorType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mediatorType, true), gettype($mediatorType)), __LINE__);
        }
        $this->mediatorType = $mediatorType;
        
        return $this;
    }
    /**
     * Get middleName value
     * @return string|null
     */
    public function getMiddleName(): ?string
    {
        return $this->middleName;
    }
    /**
     * Set middleName value
     * @param string $middleName
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setMiddleName(?string $middleName = null): self
    {
        // validation for constraint: string
        if (!is_null($middleName) && !is_string($middleName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($middleName, true), gettype($middleName)), __LINE__);
        }
        $this->middleName = $middleName;
        
        return $this;
    }
    /**
     * Get mobile value
     * @return string|null
     */
    public function getMobile(): ?string
    {
        return $this->mobile;
    }
    /**
     * Set mobile value
     * @param string $mobile
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setMobile(?string $mobile = null): self
    {
        // validation for constraint: string
        if (!is_null($mobile) && !is_string($mobile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mobile, true), gettype($mobile)), __LINE__);
        }
        $this->mobile = $mobile;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
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
     * Get noOfChildren value
     * @return int|null
     */
    public function getNoOfChildren(): ?int
    {
        return $this->noOfChildren;
    }
    /**
     * Set noOfChildren value
     * @param int $noOfChildren
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setNoOfChildren(?int $noOfChildren = null): self
    {
        // validation for constraint: int
        if (!is_null($noOfChildren) && !(is_int($noOfChildren) || ctype_digit($noOfChildren))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($noOfChildren, true), gettype($noOfChildren)), __LINE__);
        }
        $this->noOfChildren = $noOfChildren;
        
        return $this;
    }
    /**
     * Get numBookings value
     * @return int|null
     */
    public function getNumBookings(): ?int
    {
        return $this->numBookings;
    }
    /**
     * Set numBookings value
     * @param int $numBookings
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setNumBookings(?int $numBookings = null): self
    {
        // validation for constraint: int
        if (!is_null($numBookings) && !(is_int($numBookings) || ctype_digit($numBookings))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numBookings, true), gettype($numBookings)), __LINE__);
        }
        $this->numBookings = $numBookings;
        
        return $this;
    }
    /**
     * Get numOrders value
     * @return int|null
     */
    public function getNumOrders(): ?int
    {
        return $this->numOrders;
    }
    /**
     * Set numOrders value
     * @param int $numOrders
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setNumOrders(?int $numOrders = null): self
    {
        // validation for constraint: int
        if (!is_null($numOrders) && !(is_int($numOrders) || ctype_digit($numOrders))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($numOrders, true), gettype($numOrders)), __LINE__);
        }
        $this->numOrders = $numOrders;
        
        return $this;
    }
    /**
     * Get orgUnit value
     * @return string|null
     */
    public function getOrgUnit(): ?string
    {
        return $this->orgUnit;
    }
    /**
     * Set orgUnit value
     * @param string $orgUnit
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setOrgUnit(?string $orgUnit = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnit) && !is_string($orgUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnit, true), gettype($orgUnit)), __LINE__);
        }
        $this->orgUnit = $orgUnit;
        
        return $this;
    }
    /**
     * Get organisationName value
     * @return string|null
     */
    public function getOrganisationName(): ?string
    {
        return $this->organisationName;
    }
    /**
     * Set organisationName value
     * @param string $organisationName
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setOrganisationName(?string $organisationName = null): self
    {
        // validation for constraint: string
        if (!is_null($organisationName) && !is_string($organisationName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($organisationName, true), gettype($organisationName)), __LINE__);
        }
        $this->organisationName = $organisationName;
        
        return $this;
    }
    /**
     * Get personalNo value
     * @return string|null
     */
    public function getPersonalNo(): ?string
    {
        return $this->personalNo;
    }
    /**
     * Set personalNo value
     * @param string $personalNo
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setPersonalNo(?string $personalNo = null): self
    {
        // validation for constraint: string
        if (!is_null($personalNo) && !is_string($personalNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($personalNo, true), gettype($personalNo)), __LINE__);
        }
        $this->personalNo = $personalNo;
        
        return $this;
    }
    /**
     * Get phone value
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }
    /**
     * Set phone value
     * @param string $phone
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setPhone(?string $phone = null): self
    {
        // validation for constraint: string
        if (!is_null($phone) && !is_string($phone)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phone, true), gettype($phone)), __LINE__);
        }
        $this->phone = $phone;
        
        return $this;
    }
    /**
     * Get phoneBusiness value
     * @return string|null
     */
    public function getPhoneBusiness(): ?string
    {
        return $this->phoneBusiness;
    }
    /**
     * Set phoneBusiness value
     * @param string $phoneBusiness
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setPhoneBusiness(?string $phoneBusiness = null): self
    {
        // validation for constraint: string
        if (!is_null($phoneBusiness) && !is_string($phoneBusiness)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($phoneBusiness, true), gettype($phoneBusiness)), __LINE__);
        }
        $this->phoneBusiness = $phoneBusiness;
        
        return $this;
    }
    /**
     * Get postProhibited value
     * @return bool|null
     */
    public function getPostProhibited(): ?bool
    {
        return $this->postProhibited;
    }
    /**
     * Set postProhibited value
     * @param bool $postProhibited
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setPostProhibited(?bool $postProhibited = null): self
    {
        // validation for constraint: boolean
        if (!is_null($postProhibited) && !is_bool($postProhibited)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($postProhibited, true), gettype($postProhibited)), __LINE__);
        }
        $this->postProhibited = $postProhibited;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
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
     * Get salutationId value
     * @return string|null
     */
    public function getSalutationId(): ?string
    {
        return $this->salutationId;
    }
    /**
     * Set salutationId value
     * @param string $salutationId
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setSalutationId(?string $salutationId = null): self
    {
        // validation for constraint: string
        if (!is_null($salutationId) && !is_string($salutationId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salutationId, true), gettype($salutationId)), __LINE__);
        }
        $this->salutationId = $salutationId;
        
        return $this;
    }
    /**
     * Get salutationLetter value
     * @return string|null
     */
    public function getSalutationLetter(): ?string
    {
        return $this->salutationLetter;
    }
    /**
     * Set salutationLetter value
     * @param string $salutationLetter
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setSalutationLetter(?string $salutationLetter = null): self
    {
        // validation for constraint: string
        if (!is_null($salutationLetter) && !is_string($salutationLetter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($salutationLetter, true), gettype($salutationLetter)), __LINE__);
        }
        $this->salutationLetter = $salutationLetter;
        
        return $this;
    }
    /**
     * Get state value
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }
    /**
     * Set state value
     * @param string $state
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setState(?string $state = null): self
    {
        // validation for constraint: string
        if (!is_null($state) && !is_string($state)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($state, true), gettype($state)), __LINE__);
        }
        $this->state = $state;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
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
     * Get tradeRegister value
     * @return string|null
     */
    public function getTradeRegister(): ?string
    {
        return $this->tradeRegister;
    }
    /**
     * Set tradeRegister value
     * @param string $tradeRegister
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setTradeRegister(?string $tradeRegister = null): self
    {
        // validation for constraint: string
        if (!is_null($tradeRegister) && !is_string($tradeRegister)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tradeRegister, true), gettype($tradeRegister)), __LINE__);
        }
        $this->tradeRegister = $tradeRegister;
        
        return $this;
    }
    /**
     * Get travelAmount value
     * @return float|null
     */
    public function getTravelAmount(): ?float
    {
        return $this->travelAmount;
    }
    /**
     * Set travelAmount value
     * @param float $travelAmount
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setTravelAmount(?float $travelAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($travelAmount) && !(is_float($travelAmount) || is_numeric($travelAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($travelAmount, true), gettype($travelAmount)), __LINE__);
        }
        $this->travelAmount = $travelAmount;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get validated value
     * @return bool|null
     */
    public function getValidated(): ?bool
    {
        return $this->validated;
    }
    /**
     * Set validated value
     * @param bool $validated
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setValidated(?bool $validated = null): self
    {
        // validation for constraint: boolean
        if (!is_null($validated) && !is_bool($validated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($validated, true), gettype($validated)), __LINE__);
        }
        $this->validated = $validated;
        
        return $this;
    }
    /**
     * Get vatId value
     * @return string|null
     */
    public function getVatId(): ?string
    {
        return $this->vatId;
    }
    /**
     * Set vatId value
     * @param string $vatId
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setVatId(?string $vatId = null): self
    {
        // validation for constraint: string
        if (!is_null($vatId) && !is_string($vatId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatId, true), gettype($vatId)), __LINE__);
        }
        $this->vatId = $vatId;
        
        return $this;
    }
    /**
     * Get web value
     * @return string|null
     */
    public function getWeb(): ?string
    {
        return $this->web;
    }
    /**
     * Set web value
     * @param string $web
     * @return \Pggns\MidocoApi\Mis\StructType\MisCustomerDTO
     */
    public function setWeb(?string $web = null): self
    {
        // validation for constraint: string
        if (!is_null($web) && !is_string($web)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($web, true), gettype($web)), __LINE__);
        }
        $this->web = $web;
        
        return $this;
    }
}
