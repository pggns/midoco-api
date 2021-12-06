<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DbiUpdateDTO StructType
 * @subpackage Structs
 */
class DbiUpdateDTO extends AbstractStructBase
{
    /**
     * The cardCategory
     * @var string|null
     */
    protected ?string $cardCategory = null;
    /**
     * The cardType
     * @var string|null
     */
    protected ?string $cardType = null;
    /**
     * The ccNo
     * @var string|null
     */
    protected ?string $ccNo = null;
    /**
     * The ccNoReferenceId
     * @var string|null
     */
    protected ?string $ccNoReferenceId = null;
    /**
     * The ccPublisherId
     * @var string|null
     */
    protected ?string $ccPublisherId = null;
    /**
     * The customerRefEffectiveDate
     * @var string|null
     */
    protected ?string $customerRefEffectiveDate = null;
    /**
     * The isTaxVerificationByCc
     * @var bool|null
     */
    protected ?bool $isTaxVerificationByCc = null;
    /**
     * The lastUpdate
     * @var string|null
     */
    protected ?string $lastUpdate = null;
    /**
     * The tokenType
     * @var string|null
     */
    protected ?string $tokenType = null;
    /**
     * The travelAgentCode
     * @var string|null
     */
    protected ?string $travelAgentCode = null;
    /**
     * The vatActivationDate
     * @var string|null
     */
    protected ?string $vatActivationDate = null;
    /**
     * The vatDeactivationDate
     * @var string|null
     */
    protected ?string $vatDeactivationDate = null;
    /**
     * Constructor method for DbiUpdateDTO
     * @uses DbiUpdateDTO::setCardCategory()
     * @uses DbiUpdateDTO::setCardType()
     * @uses DbiUpdateDTO::setCcNo()
     * @uses DbiUpdateDTO::setCcNoReferenceId()
     * @uses DbiUpdateDTO::setCcPublisherId()
     * @uses DbiUpdateDTO::setCustomerRefEffectiveDate()
     * @uses DbiUpdateDTO::setIsTaxVerificationByCc()
     * @uses DbiUpdateDTO::setLastUpdate()
     * @uses DbiUpdateDTO::setTokenType()
     * @uses DbiUpdateDTO::setTravelAgentCode()
     * @uses DbiUpdateDTO::setVatActivationDate()
     * @uses DbiUpdateDTO::setVatDeactivationDate()
     * @param string $cardCategory
     * @param string $cardType
     * @param string $ccNo
     * @param string $ccNoReferenceId
     * @param string $ccPublisherId
     * @param string $customerRefEffectiveDate
     * @param bool $isTaxVerificationByCc
     * @param string $lastUpdate
     * @param string $tokenType
     * @param string $travelAgentCode
     * @param string $vatActivationDate
     * @param string $vatDeactivationDate
     */
    public function __construct(?string $cardCategory = null, ?string $cardType = null, ?string $ccNo = null, ?string $ccNoReferenceId = null, ?string $ccPublisherId = null, ?string $customerRefEffectiveDate = null, ?bool $isTaxVerificationByCc = null, ?string $lastUpdate = null, ?string $tokenType = null, ?string $travelAgentCode = null, ?string $vatActivationDate = null, ?string $vatDeactivationDate = null)
    {
        $this
            ->setCardCategory($cardCategory)
            ->setCardType($cardType)
            ->setCcNo($ccNo)
            ->setCcNoReferenceId($ccNoReferenceId)
            ->setCcPublisherId($ccPublisherId)
            ->setCustomerRefEffectiveDate($customerRefEffectiveDate)
            ->setIsTaxVerificationByCc($isTaxVerificationByCc)
            ->setLastUpdate($lastUpdate)
            ->setTokenType($tokenType)
            ->setTravelAgentCode($travelAgentCode)
            ->setVatActivationDate($vatActivationDate)
            ->setVatDeactivationDate($vatDeactivationDate);
    }
    /**
     * Get cardCategory value
     * @return string|null
     */
    public function getCardCategory(): ?string
    {
        return $this->cardCategory;
    }
    /**
     * Set cardCategory value
     * @param string $cardCategory
     * @return \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO
     */
    public function setCardCategory(?string $cardCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($cardCategory) && !is_string($cardCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cardCategory, true), gettype($cardCategory)), __LINE__);
        }
        $this->cardCategory = $cardCategory;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO
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
     * Get ccNo value
     * @return string|null
     */
    public function getCcNo(): ?string
    {
        return $this->ccNo;
    }
    /**
     * Set ccNo value
     * @param string $ccNo
     * @return \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO
     */
    public function setCcNo(?string $ccNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ccNo) && !is_string($ccNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccNo, true), gettype($ccNo)), __LINE__);
        }
        $this->ccNo = $ccNo;
        
        return $this;
    }
    /**
     * Get ccNoReferenceId value
     * @return string|null
     */
    public function getCcNoReferenceId(): ?string
    {
        return $this->ccNoReferenceId;
    }
    /**
     * Set ccNoReferenceId value
     * @param string $ccNoReferenceId
     * @return \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO
     */
    public function setCcNoReferenceId(?string $ccNoReferenceId = null): self
    {
        // validation for constraint: string
        if (!is_null($ccNoReferenceId) && !is_string($ccNoReferenceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccNoReferenceId, true), gettype($ccNoReferenceId)), __LINE__);
        }
        $this->ccNoReferenceId = $ccNoReferenceId;
        
        return $this;
    }
    /**
     * Get ccPublisherId value
     * @return string|null
     */
    public function getCcPublisherId(): ?string
    {
        return $this->ccPublisherId;
    }
    /**
     * Set ccPublisherId value
     * @param string $ccPublisherId
     * @return \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO
     */
    public function setCcPublisherId(?string $ccPublisherId = null): self
    {
        // validation for constraint: string
        if (!is_null($ccPublisherId) && !is_string($ccPublisherId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccPublisherId, true), gettype($ccPublisherId)), __LINE__);
        }
        $this->ccPublisherId = $ccPublisherId;
        
        return $this;
    }
    /**
     * Get customerRefEffectiveDate value
     * @return string|null
     */
    public function getCustomerRefEffectiveDate(): ?string
    {
        return $this->customerRefEffectiveDate;
    }
    /**
     * Set customerRefEffectiveDate value
     * @param string $customerRefEffectiveDate
     * @return \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO
     */
    public function setCustomerRefEffectiveDate(?string $customerRefEffectiveDate = null): self
    {
        // validation for constraint: string
        if (!is_null($customerRefEffectiveDate) && !is_string($customerRefEffectiveDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerRefEffectiveDate, true), gettype($customerRefEffectiveDate)), __LINE__);
        }
        $this->customerRefEffectiveDate = $customerRefEffectiveDate;
        
        return $this;
    }
    /**
     * Get isTaxVerificationByCc value
     * @return bool|null
     */
    public function getIsTaxVerificationByCc(): ?bool
    {
        return $this->isTaxVerificationByCc;
    }
    /**
     * Set isTaxVerificationByCc value
     * @param bool $isTaxVerificationByCc
     * @return \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO
     */
    public function setIsTaxVerificationByCc(?bool $isTaxVerificationByCc = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isTaxVerificationByCc) && !is_bool($isTaxVerificationByCc)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isTaxVerificationByCc, true), gettype($isTaxVerificationByCc)), __LINE__);
        }
        $this->isTaxVerificationByCc = $isTaxVerificationByCc;
        
        return $this;
    }
    /**
     * Get lastUpdate value
     * @return string|null
     */
    public function getLastUpdate(): ?string
    {
        return $this->lastUpdate;
    }
    /**
     * Set lastUpdate value
     * @param string $lastUpdate
     * @return \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO
     */
    public function setLastUpdate(?string $lastUpdate = null): self
    {
        // validation for constraint: string
        if (!is_null($lastUpdate) && !is_string($lastUpdate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastUpdate, true), gettype($lastUpdate)), __LINE__);
        }
        $this->lastUpdate = $lastUpdate;
        
        return $this;
    }
    /**
     * Get tokenType value
     * @return string|null
     */
    public function getTokenType(): ?string
    {
        return $this->tokenType;
    }
    /**
     * Set tokenType value
     * @param string $tokenType
     * @return \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO
     */
    public function setTokenType(?string $tokenType = null): self
    {
        // validation for constraint: string
        if (!is_null($tokenType) && !is_string($tokenType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tokenType, true), gettype($tokenType)), __LINE__);
        }
        $this->tokenType = $tokenType;
        
        return $this;
    }
    /**
     * Get travelAgentCode value
     * @return string|null
     */
    public function getTravelAgentCode(): ?string
    {
        return $this->travelAgentCode;
    }
    /**
     * Set travelAgentCode value
     * @param string $travelAgentCode
     * @return \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO
     */
    public function setTravelAgentCode(?string $travelAgentCode = null): self
    {
        // validation for constraint: string
        if (!is_null($travelAgentCode) && !is_string($travelAgentCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($travelAgentCode, true), gettype($travelAgentCode)), __LINE__);
        }
        $this->travelAgentCode = $travelAgentCode;
        
        return $this;
    }
    /**
     * Get vatActivationDate value
     * @return string|null
     */
    public function getVatActivationDate(): ?string
    {
        return $this->vatActivationDate;
    }
    /**
     * Set vatActivationDate value
     * @param string $vatActivationDate
     * @return \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO
     */
    public function setVatActivationDate(?string $vatActivationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($vatActivationDate) && !is_string($vatActivationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatActivationDate, true), gettype($vatActivationDate)), __LINE__);
        }
        $this->vatActivationDate = $vatActivationDate;
        
        return $this;
    }
    /**
     * Get vatDeactivationDate value
     * @return string|null
     */
    public function getVatDeactivationDate(): ?string
    {
        return $this->vatDeactivationDate;
    }
    /**
     * Set vatDeactivationDate value
     * @param string $vatDeactivationDate
     * @return \Pggns\MidocoApi\Documents\StructType\DbiUpdateDTO
     */
    public function setVatDeactivationDate(?string $vatDeactivationDate = null): self
    {
        // validation for constraint: string
        if (!is_null($vatDeactivationDate) && !is_string($vatDeactivationDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vatDeactivationDate, true), gettype($vatDeactivationDate)), __LINE__);
        }
        $this->vatDeactivationDate = $vatDeactivationDate;
        
        return $this;
    }
}
