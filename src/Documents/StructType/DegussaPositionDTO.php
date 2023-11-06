<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DegussaPositionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DegussaPositionDTO extends AbstractStructBase
{
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The ccType
     * @var string|null
     */
    protected ?string $ccType = null;
    /**
     * The country
     * @var string|null
     */
    protected ?string $country = null;
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
    /**
     * The currency
     * @var string|null
     */
    protected ?string $currency = null;
    /**
     * The degussaLine
     * @var string|null
     */
    protected ?string $degussaLine = null;
    /**
     * The degussaPositionId
     * @var int|null
     */
    protected ?int $degussaPositionId = null;
    /**
     * The degussaTransactionId
     * @var int|null
     */
    protected ?int $degussaTransactionId = null;
    /**
     * The degussaXmlLine
     * @var string|null
     */
    protected ?string $degussaXmlLine = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The exportTimestamp
     * @var string|null
     */
    protected ?string $exportTimestamp = null;
    /**
     * The feeBookingId
     * @var string|null
     */
    protected ?string $feeBookingId = null;
    /**
     * The fileType
     * @var string|null
     */
    protected ?string $fileType = null;
    /**
     * The isExported
     * @var bool|null
     */
    protected ?bool $isExported = null;
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The recordType
     * @var string|null
     */
    protected ?string $recordType = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for DegussaPositionDTO
     * @uses DegussaPositionDTO::setAmount()
     * @uses DegussaPositionDTO::setCcType()
     * @uses DegussaPositionDTO::setCountry()
     * @uses DegussaPositionDTO::setCreationTimestamp()
     * @uses DegussaPositionDTO::setCurrency()
     * @uses DegussaPositionDTO::setDegussaLine()
     * @uses DegussaPositionDTO::setDegussaPositionId()
     * @uses DegussaPositionDTO::setDegussaTransactionId()
     * @uses DegussaPositionDTO::setDegussaXmlLine()
     * @uses DegussaPositionDTO::setDocumentId()
     * @uses DegussaPositionDTO::setExportTimestamp()
     * @uses DegussaPositionDTO::setFeeBookingId()
     * @uses DegussaPositionDTO::setFileType()
     * @uses DegussaPositionDTO::setIsExported()
     * @uses DegussaPositionDTO::setPosition()
     * @uses DegussaPositionDTO::setRecordType()
     * @uses DegussaPositionDTO::setUnitName()
     * @param float $amount
     * @param string $ccType
     * @param string $country
     * @param string $creationTimestamp
     * @param string $currency
     * @param string $degussaLine
     * @param int $degussaPositionId
     * @param int $degussaTransactionId
     * @param string $degussaXmlLine
     * @param int $documentId
     * @param string $exportTimestamp
     * @param string $feeBookingId
     * @param string $fileType
     * @param bool $isExported
     * @param int $position
     * @param string $recordType
     * @param string $unitName
     */
    public function __construct(?float $amount = null, ?string $ccType = null, ?string $country = null, ?string $creationTimestamp = null, ?string $currency = null, ?string $degussaLine = null, ?int $degussaPositionId = null, ?int $degussaTransactionId = null, ?string $degussaXmlLine = null, ?int $documentId = null, ?string $exportTimestamp = null, ?string $feeBookingId = null, ?string $fileType = null, ?bool $isExported = null, ?int $position = null, ?string $recordType = null, ?string $unitName = null)
    {
        $this
            ->setAmount($amount)
            ->setCcType($ccType)
            ->setCountry($country)
            ->setCreationTimestamp($creationTimestamp)
            ->setCurrency($currency)
            ->setDegussaLine($degussaLine)
            ->setDegussaPositionId($degussaPositionId)
            ->setDegussaTransactionId($degussaTransactionId)
            ->setDegussaXmlLine($degussaXmlLine)
            ->setDocumentId($documentId)
            ->setExportTimestamp($exportTimestamp)
            ->setFeeBookingId($feeBookingId)
            ->setFileType($fileType)
            ->setIsExported($isExported)
            ->setPosition($position)
            ->setRecordType($recordType)
            ->setUnitName($unitName);
    }
    /**
     * Get amount value
     * @return float|null
     */
    public function getAmount(): ?float
    {
        return $this->amount;
    }
    /**
     * Set amount value
     * @param float $amount
     * @return \Pggns\MidocoApi\Documents\StructType\DegussaPositionDTO
     */
    public function setAmount(?float $amount = null): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->amount = $amount;
        
        return $this;
    }
    /**
     * Get ccType value
     * @return string|null
     */
    public function getCcType(): ?string
    {
        return $this->ccType;
    }
    /**
     * Set ccType value
     * @param string $ccType
     * @return \Pggns\MidocoApi\Documents\StructType\DegussaPositionDTO
     */
    public function setCcType(?string $ccType = null): self
    {
        // validation for constraint: string
        if (!is_null($ccType) && !is_string($ccType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccType, true), gettype($ccType)), __LINE__);
        }
        $this->ccType = $ccType;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\DegussaPositionDTO
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
     * Get creationTimestamp value
     * @return string|null
     */
    public function getCreationTimestamp(): ?string
    {
        return $this->creationTimestamp;
    }
    /**
     * Set creationTimestamp value
     * @param string $creationTimestamp
     * @return \Pggns\MidocoApi\Documents\StructType\DegussaPositionDTO
     */
    public function setCreationTimestamp(?string $creationTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($creationTimestamp) && !is_string($creationTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTimestamp, true), gettype($creationTimestamp)), __LINE__);
        }
        $this->creationTimestamp = $creationTimestamp;
        
        return $this;
    }
    /**
     * Get currency value
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }
    /**
     * Set currency value
     * @param string $currency
     * @return \Pggns\MidocoApi\Documents\StructType\DegussaPositionDTO
     */
    public function setCurrency(?string $currency = null): self
    {
        // validation for constraint: string
        if (!is_null($currency) && !is_string($currency)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currency, true), gettype($currency)), __LINE__);
        }
        $this->currency = $currency;
        
        return $this;
    }
    /**
     * Get degussaLine value
     * @return string|null
     */
    public function getDegussaLine(): ?string
    {
        return $this->degussaLine;
    }
    /**
     * Set degussaLine value
     * @param string $degussaLine
     * @return \Pggns\MidocoApi\Documents\StructType\DegussaPositionDTO
     */
    public function setDegussaLine(?string $degussaLine = null): self
    {
        // validation for constraint: string
        if (!is_null($degussaLine) && !is_string($degussaLine)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($degussaLine, true), gettype($degussaLine)), __LINE__);
        }
        $this->degussaLine = $degussaLine;
        
        return $this;
    }
    /**
     * Get degussaPositionId value
     * @return int|null
     */
    public function getDegussaPositionId(): ?int
    {
        return $this->degussaPositionId;
    }
    /**
     * Set degussaPositionId value
     * @param int $degussaPositionId
     * @return \Pggns\MidocoApi\Documents\StructType\DegussaPositionDTO
     */
    public function setDegussaPositionId(?int $degussaPositionId = null): self
    {
        // validation for constraint: int
        if (!is_null($degussaPositionId) && !(is_int($degussaPositionId) || ctype_digit($degussaPositionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($degussaPositionId, true), gettype($degussaPositionId)), __LINE__);
        }
        $this->degussaPositionId = $degussaPositionId;
        
        return $this;
    }
    /**
     * Get degussaTransactionId value
     * @return int|null
     */
    public function getDegussaTransactionId(): ?int
    {
        return $this->degussaTransactionId;
    }
    /**
     * Set degussaTransactionId value
     * @param int $degussaTransactionId
     * @return \Pggns\MidocoApi\Documents\StructType\DegussaPositionDTO
     */
    public function setDegussaTransactionId(?int $degussaTransactionId = null): self
    {
        // validation for constraint: int
        if (!is_null($degussaTransactionId) && !(is_int($degussaTransactionId) || ctype_digit($degussaTransactionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($degussaTransactionId, true), gettype($degussaTransactionId)), __LINE__);
        }
        $this->degussaTransactionId = $degussaTransactionId;
        
        return $this;
    }
    /**
     * Get degussaXmlLine value
     * @return string|null
     */
    public function getDegussaXmlLine(): ?string
    {
        return $this->degussaXmlLine;
    }
    /**
     * Set degussaXmlLine value
     * @param string $degussaXmlLine
     * @return \Pggns\MidocoApi\Documents\StructType\DegussaPositionDTO
     */
    public function setDegussaXmlLine(?string $degussaXmlLine = null): self
    {
        // validation for constraint: string
        if (!is_null($degussaXmlLine) && !is_string($degussaXmlLine)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($degussaXmlLine, true), gettype($degussaXmlLine)), __LINE__);
        }
        $this->degussaXmlLine = $degussaXmlLine;
        
        return $this;
    }
    /**
     * Get documentId value
     * @return int|null
     */
    public function getDocumentId(): ?int
    {
        return $this->documentId;
    }
    /**
     * Set documentId value
     * @param int $documentId
     * @return \Pggns\MidocoApi\Documents\StructType\DegussaPositionDTO
     */
    public function setDocumentId(?int $documentId = null): self
    {
        // validation for constraint: int
        if (!is_null($documentId) && !(is_int($documentId) || ctype_digit($documentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentId, true), gettype($documentId)), __LINE__);
        }
        $this->documentId = $documentId;
        
        return $this;
    }
    /**
     * Get exportTimestamp value
     * @return string|null
     */
    public function getExportTimestamp(): ?string
    {
        return $this->exportTimestamp;
    }
    /**
     * Set exportTimestamp value
     * @param string $exportTimestamp
     * @return \Pggns\MidocoApi\Documents\StructType\DegussaPositionDTO
     */
    public function setExportTimestamp(?string $exportTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($exportTimestamp) && !is_string($exportTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportTimestamp, true), gettype($exportTimestamp)), __LINE__);
        }
        $this->exportTimestamp = $exportTimestamp;
        
        return $this;
    }
    /**
     * Get feeBookingId value
     * @return string|null
     */
    public function getFeeBookingId(): ?string
    {
        return $this->feeBookingId;
    }
    /**
     * Set feeBookingId value
     * @param string $feeBookingId
     * @return \Pggns\MidocoApi\Documents\StructType\DegussaPositionDTO
     */
    public function setFeeBookingId(?string $feeBookingId = null): self
    {
        // validation for constraint: string
        if (!is_null($feeBookingId) && !is_string($feeBookingId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($feeBookingId, true), gettype($feeBookingId)), __LINE__);
        }
        $this->feeBookingId = $feeBookingId;
        
        return $this;
    }
    /**
     * Get fileType value
     * @return string|null
     */
    public function getFileType(): ?string
    {
        return $this->fileType;
    }
    /**
     * Set fileType value
     * @param string $fileType
     * @return \Pggns\MidocoApi\Documents\StructType\DegussaPositionDTO
     */
    public function setFileType(?string $fileType = null): self
    {
        // validation for constraint: string
        if (!is_null($fileType) && !is_string($fileType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileType, true), gettype($fileType)), __LINE__);
        }
        $this->fileType = $fileType;
        
        return $this;
    }
    /**
     * Get isExported value
     * @return bool|null
     */
    public function getIsExported(): ?bool
    {
        return $this->isExported;
    }
    /**
     * Set isExported value
     * @param bool $isExported
     * @return \Pggns\MidocoApi\Documents\StructType\DegussaPositionDTO
     */
    public function setIsExported(?bool $isExported = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isExported) && !is_bool($isExported)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isExported, true), gettype($isExported)), __LINE__);
        }
        $this->isExported = $isExported;
        
        return $this;
    }
    /**
     * Get position value
     * @return int|null
     */
    public function getPosition(): ?int
    {
        return $this->position;
    }
    /**
     * Set position value
     * @param int $position
     * @return \Pggns\MidocoApi\Documents\StructType\DegussaPositionDTO
     */
    public function setPosition(?int $position = null): self
    {
        // validation for constraint: int
        if (!is_null($position) && !(is_int($position) || ctype_digit($position))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($position, true), gettype($position)), __LINE__);
        }
        $this->position = $position;
        
        return $this;
    }
    /**
     * Get recordType value
     * @return string|null
     */
    public function getRecordType(): ?string
    {
        return $this->recordType;
    }
    /**
     * Set recordType value
     * @param string $recordType
     * @return \Pggns\MidocoApi\Documents\StructType\DegussaPositionDTO
     */
    public function setRecordType(?string $recordType = null): self
    {
        // validation for constraint: string
        if (!is_null($recordType) && !is_string($recordType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($recordType, true), gettype($recordType)), __LINE__);
        }
        $this->recordType = $recordType;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\Documents\StructType\DegussaPositionDTO
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
}
