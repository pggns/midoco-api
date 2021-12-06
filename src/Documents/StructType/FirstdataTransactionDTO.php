<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FirstdataTransactionDTO StructType
 * @subpackage Structs
 */
class FirstdataTransactionDTO extends AbstractStructBase
{
    /**
     * The amount
     * @var float|null
     */
    protected ?float $amount = null;
    /**
     * The creationTimestamp
     * @var string|null
     */
    protected ?string $creationTimestamp = null;
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
     * The firstDataLine
     * @var string|null
     */
    protected ?string $firstDataLine = null;
    /**
     * The firstDataXmlLine
     * @var string|null
     */
    protected ?string $firstDataXmlLine = null;
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
     * The positionId
     * @var int|null
     */
    protected ?int $positionId = null;
    /**
     * The recordType
     * @var string|null
     */
    protected ?string $recordType = null;
    /**
     * The transactionId
     * @var int|null
     */
    protected ?int $transactionId = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for FirstdataTransactionDTO
     * @uses FirstdataTransactionDTO::setAmount()
     * @uses FirstdataTransactionDTO::setCreationTimestamp()
     * @uses FirstdataTransactionDTO::setDocumentId()
     * @uses FirstdataTransactionDTO::setExportTimestamp()
     * @uses FirstdataTransactionDTO::setFirstDataLine()
     * @uses FirstdataTransactionDTO::setFirstDataXmlLine()
     * @uses FirstdataTransactionDTO::setIsExported()
     * @uses FirstdataTransactionDTO::setPosition()
     * @uses FirstdataTransactionDTO::setPositionId()
     * @uses FirstdataTransactionDTO::setRecordType()
     * @uses FirstdataTransactionDTO::setTransactionId()
     * @uses FirstdataTransactionDTO::setUnitName()
     * @param float $amount
     * @param string $creationTimestamp
     * @param int $documentId
     * @param string $exportTimestamp
     * @param string $firstDataLine
     * @param string $firstDataXmlLine
     * @param bool $isExported
     * @param int $position
     * @param int $positionId
     * @param string $recordType
     * @param int $transactionId
     * @param string $unitName
     */
    public function __construct(?float $amount = null, ?string $creationTimestamp = null, ?int $documentId = null, ?string $exportTimestamp = null, ?string $firstDataLine = null, ?string $firstDataXmlLine = null, ?bool $isExported = null, ?int $position = null, ?int $positionId = null, ?string $recordType = null, ?int $transactionId = null, ?string $unitName = null)
    {
        $this
            ->setAmount($amount)
            ->setCreationTimestamp($creationTimestamp)
            ->setDocumentId($documentId)
            ->setExportTimestamp($exportTimestamp)
            ->setFirstDataLine($firstDataLine)
            ->setFirstDataXmlLine($firstDataXmlLine)
            ->setIsExported($isExported)
            ->setPosition($position)
            ->setPositionId($positionId)
            ->setRecordType($recordType)
            ->setTransactionId($transactionId)
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
     * @return \Pggns\MidocoApi\Documents\StructType\FirstdataTransactionDTO
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
     * @return \Pggns\MidocoApi\Documents\StructType\FirstdataTransactionDTO
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
     * @return \Pggns\MidocoApi\Documents\StructType\FirstdataTransactionDTO
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
     * @return \Pggns\MidocoApi\Documents\StructType\FirstdataTransactionDTO
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
     * Get firstDataLine value
     * @return string|null
     */
    public function getFirstDataLine(): ?string
    {
        return $this->firstDataLine;
    }
    /**
     * Set firstDataLine value
     * @param string $firstDataLine
     * @return \Pggns\MidocoApi\Documents\StructType\FirstdataTransactionDTO
     */
    public function setFirstDataLine(?string $firstDataLine = null): self
    {
        // validation for constraint: string
        if (!is_null($firstDataLine) && !is_string($firstDataLine)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstDataLine, true), gettype($firstDataLine)), __LINE__);
        }
        $this->firstDataLine = $firstDataLine;
        
        return $this;
    }
    /**
     * Get firstDataXmlLine value
     * @return string|null
     */
    public function getFirstDataXmlLine(): ?string
    {
        return $this->firstDataXmlLine;
    }
    /**
     * Set firstDataXmlLine value
     * @param string $firstDataXmlLine
     * @return \Pggns\MidocoApi\Documents\StructType\FirstdataTransactionDTO
     */
    public function setFirstDataXmlLine(?string $firstDataXmlLine = null): self
    {
        // validation for constraint: string
        if (!is_null($firstDataXmlLine) && !is_string($firstDataXmlLine)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($firstDataXmlLine, true), gettype($firstDataXmlLine)), __LINE__);
        }
        $this->firstDataXmlLine = $firstDataXmlLine;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\FirstdataTransactionDTO
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
     * @return \Pggns\MidocoApi\Documents\StructType\FirstdataTransactionDTO
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
     * Get positionId value
     * @return int|null
     */
    public function getPositionId(): ?int
    {
        return $this->positionId;
    }
    /**
     * Set positionId value
     * @param int $positionId
     * @return \Pggns\MidocoApi\Documents\StructType\FirstdataTransactionDTO
     */
    public function setPositionId(?int $positionId = null): self
    {
        // validation for constraint: int
        if (!is_null($positionId) && !(is_int($positionId) || ctype_digit($positionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($positionId, true), gettype($positionId)), __LINE__);
        }
        $this->positionId = $positionId;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\FirstdataTransactionDTO
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
     * Get transactionId value
     * @return int|null
     */
    public function getTransactionId(): ?int
    {
        return $this->transactionId;
    }
    /**
     * Set transactionId value
     * @param int $transactionId
     * @return \Pggns\MidocoApi\Documents\StructType\FirstdataTransactionDTO
     */
    public function setTransactionId(?int $transactionId = null): self
    {
        // validation for constraint: int
        if (!is_null($transactionId) && !(is_int($transactionId) || ctype_digit($transactionId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionId, true), gettype($transactionId)), __LINE__);
        }
        $this->transactionId = $transactionId;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\FirstdataTransactionDTO
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
