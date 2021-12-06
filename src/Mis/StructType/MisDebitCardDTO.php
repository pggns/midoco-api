<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisDebitCardDTO StructType
 * @subpackage Structs
 */
class MisDebitCardDTO extends AbstractStructBase
{
    /**
     * The bankAccount
     * @var string|null
     */
    protected ?string $bankAccount = null;
    /**
     * The bankName
     * @var string|null
     */
    protected ?string $bankName = null;
    /**
     * The bankNo
     * @var string|null
     */
    protected ?string $bankNo = null;
    /**
     * The cardType
     * @var string|null
     */
    protected ?string $cardType = null;
    /**
     * The countryId
     * @var string|null
     */
    protected ?string $countryId = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The orgUnit
     * @var string|null
     */
    protected ?string $orgUnit = null;
    /**
     * The owner
     * @var string|null
     */
    protected ?string $owner = null;
    /**
     * The useAsDefault
     * @var bool|null
     */
    protected ?bool $useAsDefault = null;
    /**
     * The validMonth
     * @var int|null
     */
    protected ?int $validMonth = null;
    /**
     * The validYear
     * @var int|null
     */
    protected ?int $validYear = null;
    /**
     * Constructor method for MisDebitCardDTO
     * @uses MisDebitCardDTO::setBankAccount()
     * @uses MisDebitCardDTO::setBankName()
     * @uses MisDebitCardDTO::setBankNo()
     * @uses MisDebitCardDTO::setCardType()
     * @uses MisDebitCardDTO::setCountryId()
     * @uses MisDebitCardDTO::setCustomerId()
     * @uses MisDebitCardDTO::setOrgUnit()
     * @uses MisDebitCardDTO::setOwner()
     * @uses MisDebitCardDTO::setUseAsDefault()
     * @uses MisDebitCardDTO::setValidMonth()
     * @uses MisDebitCardDTO::setValidYear()
     * @param string $bankAccount
     * @param string $bankName
     * @param string $bankNo
     * @param string $cardType
     * @param string $countryId
     * @param int $customerId
     * @param string $orgUnit
     * @param string $owner
     * @param bool $useAsDefault
     * @param int $validMonth
     * @param int $validYear
     */
    public function __construct(?string $bankAccount = null, ?string $bankName = null, ?string $bankNo = null, ?string $cardType = null, ?string $countryId = null, ?int $customerId = null, ?string $orgUnit = null, ?string $owner = null, ?bool $useAsDefault = null, ?int $validMonth = null, ?int $validYear = null)
    {
        $this
            ->setBankAccount($bankAccount)
            ->setBankName($bankName)
            ->setBankNo($bankNo)
            ->setCardType($cardType)
            ->setCountryId($countryId)
            ->setCustomerId($customerId)
            ->setOrgUnit($orgUnit)
            ->setOwner($owner)
            ->setUseAsDefault($useAsDefault)
            ->setValidMonth($validMonth)
            ->setValidYear($validYear);
    }
    /**
     * Get bankAccount value
     * @return string|null
     */
    public function getBankAccount(): ?string
    {
        return $this->bankAccount;
    }
    /**
     * Set bankAccount value
     * @param string $bankAccount
     * @return \Pggns\MidocoApi\Mis\StructType\MisDebitCardDTO
     */
    public function setBankAccount(?string $bankAccount = null): self
    {
        // validation for constraint: string
        if (!is_null($bankAccount) && !is_string($bankAccount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankAccount, true), gettype($bankAccount)), __LINE__);
        }
        $this->bankAccount = $bankAccount;
        
        return $this;
    }
    /**
     * Get bankName value
     * @return string|null
     */
    public function getBankName(): ?string
    {
        return $this->bankName;
    }
    /**
     * Set bankName value
     * @param string $bankName
     * @return \Pggns\MidocoApi\Mis\StructType\MisDebitCardDTO
     */
    public function setBankName(?string $bankName = null): self
    {
        // validation for constraint: string
        if (!is_null($bankName) && !is_string($bankName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankName, true), gettype($bankName)), __LINE__);
        }
        $this->bankName = $bankName;
        
        return $this;
    }
    /**
     * Get bankNo value
     * @return string|null
     */
    public function getBankNo(): ?string
    {
        return $this->bankNo;
    }
    /**
     * Set bankNo value
     * @param string $bankNo
     * @return \Pggns\MidocoApi\Mis\StructType\MisDebitCardDTO
     */
    public function setBankNo(?string $bankNo = null): self
    {
        // validation for constraint: string
        if (!is_null($bankNo) && !is_string($bankNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankNo, true), gettype($bankNo)), __LINE__);
        }
        $this->bankNo = $bankNo;
        
        return $this;
    }
    /**
     * Get cardType value
     * @return string|null
     */
    public function getCardType(): ?string
    {
        return $this->cardType;
    }
    /**
     * Set cardType value
     * @param string $cardType
     * @return \Pggns\MidocoApi\Mis\StructType\MisDebitCardDTO
     */
    public function setCardType(?string $cardType = null): self
    {
        // validation for constraint: string
        if (!is_null($cardType) && !is_string($cardType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardType, true), gettype($cardType)), __LINE__);
        }
        $this->cardType = $cardType;
        
        return $this;
    }
    /**
     * Get countryId value
     * @return string|null
     */
    public function getCountryId(): ?string
    {
        return $this->countryId;
    }
    /**
     * Set countryId value
     * @param string $countryId
     * @return \Pggns\MidocoApi\Mis\StructType\MisDebitCardDTO
     */
    public function setCountryId(?string $countryId = null): self
    {
        // validation for constraint: string
        if (!is_null($countryId) && !is_string($countryId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($countryId, true), gettype($countryId)), __LINE__);
        }
        $this->countryId = $countryId;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisDebitCardDTO
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
     * @return \Pggns\MidocoApi\Mis\StructType\MisDebitCardDTO
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
     * Get owner value
     * @return string|null
     */
    public function getOwner(): ?string
    {
        return $this->owner;
    }
    /**
     * Set owner value
     * @param string $owner
     * @return \Pggns\MidocoApi\Mis\StructType\MisDebitCardDTO
     */
    public function setOwner(?string $owner = null): self
    {
        // validation for constraint: string
        if (!is_null($owner) && !is_string($owner)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($owner, true), gettype($owner)), __LINE__);
        }
        $this->owner = $owner;
        
        return $this;
    }
    /**
     * Get useAsDefault value
     * @return bool|null
     */
    public function getUseAsDefault(): ?bool
    {
        return $this->useAsDefault;
    }
    /**
     * Set useAsDefault value
     * @param bool $useAsDefault
     * @return \Pggns\MidocoApi\Mis\StructType\MisDebitCardDTO
     */
    public function setUseAsDefault(?bool $useAsDefault = null): self
    {
        // validation for constraint: boolean
        if (!is_null($useAsDefault) && !is_bool($useAsDefault)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useAsDefault, true), gettype($useAsDefault)), __LINE__);
        }
        $this->useAsDefault = $useAsDefault;
        
        return $this;
    }
    /**
     * Get validMonth value
     * @return int|null
     */
    public function getValidMonth(): ?int
    {
        return $this->validMonth;
    }
    /**
     * Set validMonth value
     * @param int $validMonth
     * @return \Pggns\MidocoApi\Mis\StructType\MisDebitCardDTO
     */
    public function setValidMonth(?int $validMonth = null): self
    {
        // validation for constraint: int
        if (!is_null($validMonth) && !(is_int($validMonth) || ctype_digit($validMonth))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($validMonth, true), gettype($validMonth)), __LINE__);
        }
        $this->validMonth = $validMonth;
        
        return $this;
    }
    /**
     * Get validYear value
     * @return int|null
     */
    public function getValidYear(): ?int
    {
        return $this->validYear;
    }
    /**
     * Set validYear value
     * @param int $validYear
     * @return \Pggns\MidocoApi\Mis\StructType\MisDebitCardDTO
     */
    public function setValidYear(?int $validYear = null): self
    {
        // validation for constraint: int
        if (!is_null($validYear) && !(is_int($validYear) || ctype_digit($validYear))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($validYear, true), gettype($validYear)), __LINE__);
        }
        $this->validYear = $validYear;
        
        return $this;
    }
}
