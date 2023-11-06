<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisPersonTravellerDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MisPersonTravellerDTO extends AbstractStructBase
{
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
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The expiryDate
     * @var string|null
     */
    protected ?string $expiryDate = null;
    /**
     * The forename
     * @var string|null
     */
    protected ?string $forename = null;
    /**
     * The idCardNo
     * @var string|null
     */
    protected ?string $idCardNo = null;
    /**
     * The idCardType
     * @var string|null
     */
    protected ?string $idCardType = null;
    /**
     * The issueDate
     * @var string|null
     */
    protected ?string $issueDate = null;
    /**
     * The issuePlace
     * @var string|null
     */
    protected ?string $issuePlace = null;
    /**
     * The middleName
     * @var string|null
     */
    protected ?string $middleName = null;
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The nationality
     * @var string|null
     */
    protected ?string $nationality = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The placeOfBirth
     * @var string|null
     */
    protected ?string $placeOfBirth = null;
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
     * The title
     * @var string|null
     */
    protected ?string $title = null;
    /**
     * The travellerId
     * @var int|null
     */
    protected ?int $travellerId = null;
    /**
     * The travellerType
     * @var string|null
     */
    protected ?string $travellerType = null;
    /**
     * Constructor method for MisPersonTravellerDTO
     * @uses MisPersonTravellerDTO::setBirthday()
     * @uses MisPersonTravellerDTO::setBirthdayDay()
     * @uses MisPersonTravellerDTO::setBirthdayMonth()
     * @uses MisPersonTravellerDTO::setBirthdayYear()
     * @uses MisPersonTravellerDTO::setCustomerId()
     * @uses MisPersonTravellerDTO::setExpiryDate()
     * @uses MisPersonTravellerDTO::setForename()
     * @uses MisPersonTravellerDTO::setIdCardNo()
     * @uses MisPersonTravellerDTO::setIdCardType()
     * @uses MisPersonTravellerDTO::setIssueDate()
     * @uses MisPersonTravellerDTO::setIssuePlace()
     * @uses MisPersonTravellerDTO::setMiddleName()
     * @uses MisPersonTravellerDTO::setName()
     * @uses MisPersonTravellerDTO::setNationality()
     * @uses MisPersonTravellerDTO::setOrgUnit()
     * @uses MisPersonTravellerDTO::setPlaceOfBirth()
     * @uses MisPersonTravellerDTO::setSalutation()
     * @uses MisPersonTravellerDTO::setSalutationId()
     * @uses MisPersonTravellerDTO::setSalutationLetter()
     * @uses MisPersonTravellerDTO::setTitle()
     * @uses MisPersonTravellerDTO::setTravellerId()
     * @uses MisPersonTravellerDTO::setTravellerType()
     * @param string $birthday
     * @param int $birthdayDay
     * @param int $birthdayMonth
     * @param int $birthdayYear
     * @param int $customerId
     * @param string $expiryDate
     * @param string $forename
     * @param string $idCardNo
     * @param string $idCardType
     * @param string $issueDate
     * @param string $issuePlace
     * @param string $middleName
     * @param string $name
     * @param string $nationality
     * @param string $orgUnit
     * @param string $placeOfBirth
     * @param string $salutation
     * @param string $salutationId
     * @param string $salutationLetter
     * @param string $title
     * @param int $travellerId
     * @param string $travellerType
     */
    public function __construct(?string $birthday = null, ?int $birthdayDay = null, ?int $birthdayMonth = null, ?int $birthdayYear = null, ?int $customerId = null, ?string $expiryDate = null, ?string $forename = null, ?string $idCardNo = null, ?string $idCardType = null, ?string $issueDate = null, ?string $issuePlace = null, ?string $middleName = null, ?string $name = null, ?string $nationality = null, ?string $orgUnit = null, ?string $placeOfBirth = null, ?string $salutation = null, ?string $salutationId = null, ?string $salutationLetter = null, ?string $title = null, ?int $travellerId = null, ?string $travellerType = null)
    {
        $this
            ->setBirthday($birthday)
            ->setBirthdayDay($birthdayDay)
            ->setBirthdayMonth($birthdayMonth)
            ->setBirthdayYear($birthdayYear)
            ->setCustomerId($customerId)
            ->setExpiryDate($expiryDate)
            ->setForename($forename)
            ->setIdCardNo($idCardNo)
            ->setIdCardType($idCardType)
            ->setIssueDate($issueDate)
            ->setIssuePlace($issuePlace)
            ->setMiddleName($middleName)
            ->setName($name)
            ->setNationality($nationality)
            ->setOrgUnit($orgUnit)
            ->setPlaceOfBirth($placeOfBirth)
            ->setSalutation($salutation)
            ->setSalutationId($salutationId)
            ->setSalutationLetter($salutationLetter)
            ->setTitle($title)
            ->setTravellerId($travellerId)
            ->setTravellerType($travellerType);
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisPersonTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisPersonTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisPersonTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisPersonTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisPersonTravellerDTO
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
     * Get expiryDate value
     * @return string|null
     */
    public function getExpiryDate(): ?string
    {
        return $this->expiryDate;
    }
    /**
     * Set expiryDate value
     * @param string $expiryDate
     * @return \Pggns\MidocoApi\Mis\StructType\MisPersonTravellerDTO
     */
    public function setExpiryDate(?string $expiryDate = null): self
    {
        // validation for constraint: string
        if (!is_null($expiryDate) && !is_string($expiryDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expiryDate, true), gettype($expiryDate)), __LINE__);
        }
        $this->expiryDate = $expiryDate;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisPersonTravellerDTO
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
     * Get idCardNo value
     * @return string|null
     */
    public function getIdCardNo(): ?string
    {
        return $this->idCardNo;
    }
    /**
     * Set idCardNo value
     * @param string $idCardNo
     * @return \Pggns\MidocoApi\Mis\StructType\MisPersonTravellerDTO
     */
    public function setIdCardNo(?string $idCardNo = null): self
    {
        // validation for constraint: string
        if (!is_null($idCardNo) && !is_string($idCardNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idCardNo, true), gettype($idCardNo)), __LINE__);
        }
        $this->idCardNo = $idCardNo;
        
        return $this;
    }
    /**
     * Get idCardType value
     * @return string|null
     */
    public function getIdCardType(): ?string
    {
        return $this->idCardType;
    }
    /**
     * Set idCardType value
     * @param string $idCardType
     * @return \Pggns\MidocoApi\Mis\StructType\MisPersonTravellerDTO
     */
    public function setIdCardType(?string $idCardType = null): self
    {
        // validation for constraint: string
        if (!is_null($idCardType) && !is_string($idCardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($idCardType, true), gettype($idCardType)), __LINE__);
        }
        $this->idCardType = $idCardType;
        
        return $this;
    }
    /**
     * Get issueDate value
     * @return string|null
     */
    public function getIssueDate(): ?string
    {
        return $this->issueDate;
    }
    /**
     * Set issueDate value
     * @param string $issueDate
     * @return \Pggns\MidocoApi\Mis\StructType\MisPersonTravellerDTO
     */
    public function setIssueDate(?string $issueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($issueDate) && !is_string($issueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueDate, true), gettype($issueDate)), __LINE__);
        }
        $this->issueDate = $issueDate;
        
        return $this;
    }
    /**
     * Get issuePlace value
     * @return string|null
     */
    public function getIssuePlace(): ?string
    {
        return $this->issuePlace;
    }
    /**
     * Set issuePlace value
     * @param string $issuePlace
     * @return \Pggns\MidocoApi\Mis\StructType\MisPersonTravellerDTO
     */
    public function setIssuePlace(?string $issuePlace = null): self
    {
        // validation for constraint: string
        if (!is_null($issuePlace) && !is_string($issuePlace)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issuePlace, true), gettype($issuePlace)), __LINE__);
        }
        $this->issuePlace = $issuePlace;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisPersonTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisPersonTravellerDTO
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
     * Get nationality value
     * @return string|null
     */
    public function getNationality(): ?string
    {
        return $this->nationality;
    }
    /**
     * Set nationality value
     * @param string $nationality
     * @return \Pggns\MidocoApi\Mis\StructType\MisPersonTravellerDTO
     */
    public function setNationality(?string $nationality = null): self
    {
        // validation for constraint: string
        if (!is_null($nationality) && !is_string($nationality)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nationality, true), gettype($nationality)), __LINE__);
        }
        $this->nationality = $nationality;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisPersonTravellerDTO
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
     * Get placeOfBirth value
     * @return string|null
     */
    public function getPlaceOfBirth(): ?string
    {
        return $this->placeOfBirth;
    }
    /**
     * Set placeOfBirth value
     * @param string $placeOfBirth
     * @return \Pggns\MidocoApi\Mis\StructType\MisPersonTravellerDTO
     */
    public function setPlaceOfBirth(?string $placeOfBirth = null): self
    {
        // validation for constraint: string
        if (!is_null($placeOfBirth) && !is_string($placeOfBirth)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($placeOfBirth, true), gettype($placeOfBirth)), __LINE__);
        }
        $this->placeOfBirth = $placeOfBirth;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisPersonTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisPersonTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisPersonTravellerDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisPersonTravellerDTO
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
     * Get travellerId value
     * @return int|null
     */
    public function getTravellerId(): ?int
    {
        return $this->travellerId;
    }
    /**
     * Set travellerId value
     * @param int $travellerId
     * @return \Pggns\MidocoApi\Mis\StructType\MisPersonTravellerDTO
     */
    public function setTravellerId(?int $travellerId = null): self
    {
        // validation for constraint: int
        if (!is_null($travellerId) && !(is_int($travellerId) || ctype_digit($travellerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($travellerId, true), gettype($travellerId)), __LINE__);
        }
        $this->travellerId = $travellerId;
        
        return $this;
    }
    /**
     * Get travellerType value
     * @return string|null
     */
    public function getTravellerType(): ?string
    {
        return $this->travellerType;
    }
    /**
     * Set travellerType value
     * @param string $travellerType
     * @return \Pggns\MidocoApi\Mis\StructType\MisPersonTravellerDTO
     */
    public function setTravellerType(?string $travellerType = null): self
    {
        // validation for constraint: string
        if (!is_null($travellerType) && !is_string($travellerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travellerType, true), gettype($travellerType)), __LINE__);
        }
        $this->travellerType = $travellerType;
        
        return $this;
    }
}
