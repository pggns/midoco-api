<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BirPaymentExportDTO StructType
 * @subpackage Structs
 */
class BirPaymentExportDTO extends AbstractStructBase
{
    /**
     * The agencyNo
     * @var string|null
     */
    protected ?string $agencyNo = null;
    /**
     * The birPaymentId
     * @var int|null
     */
    protected ?int $birPaymentId = null;
    /**
     * The businessUnitNo
     * @var string|null
     */
    protected ?string $businessUnitNo = null;
    /**
     * The ccSlipNo
     * @var string|null
     */
    protected ?string $ccSlipNo = null;
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
     * The documentNo
     * @var int|null
     */
    protected ?int $documentNo = null;
    /**
     * The documentType
     * @var string|null
     */
    protected ?string $documentType = null;
    /**
     * The exportedTimestamp
     * @var string|null
     */
    protected ?string $exportedTimestamp = null;
    /**
     * The isExported
     * @var bool|null
     */
    protected ?bool $isExported = null;
    /**
     * The transactionDate
     * @var string|null
     */
    protected ?string $transactionDate = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The versionNumber
     * @var string|null
     */
    protected ?string $versionNumber = null;
    /**
     * Constructor method for BirPaymentExportDTO
     * @uses BirPaymentExportDTO::setAgencyNo()
     * @uses BirPaymentExportDTO::setBirPaymentId()
     * @uses BirPaymentExportDTO::setBusinessUnitNo()
     * @uses BirPaymentExportDTO::setCcSlipNo()
     * @uses BirPaymentExportDTO::setCreationTimestamp()
     * @uses BirPaymentExportDTO::setDocumentId()
     * @uses BirPaymentExportDTO::setDocumentNo()
     * @uses BirPaymentExportDTO::setDocumentType()
     * @uses BirPaymentExportDTO::setExportedTimestamp()
     * @uses BirPaymentExportDTO::setIsExported()
     * @uses BirPaymentExportDTO::setTransactionDate()
     * @uses BirPaymentExportDTO::setUnitName()
     * @uses BirPaymentExportDTO::setVersionNumber()
     * @param string $agencyNo
     * @param int $birPaymentId
     * @param string $businessUnitNo
     * @param string $ccSlipNo
     * @param string $creationTimestamp
     * @param int $documentId
     * @param int $documentNo
     * @param string $documentType
     * @param string $exportedTimestamp
     * @param bool $isExported
     * @param string $transactionDate
     * @param string $unitName
     * @param string $versionNumber
     */
    public function __construct(?string $agencyNo = null, ?int $birPaymentId = null, ?string $businessUnitNo = null, ?string $ccSlipNo = null, ?string $creationTimestamp = null, ?int $documentId = null, ?int $documentNo = null, ?string $documentType = null, ?string $exportedTimestamp = null, ?bool $isExported = null, ?string $transactionDate = null, ?string $unitName = null, ?string $versionNumber = null)
    {
        $this
            ->setAgencyNo($agencyNo)
            ->setBirPaymentId($birPaymentId)
            ->setBusinessUnitNo($businessUnitNo)
            ->setCcSlipNo($ccSlipNo)
            ->setCreationTimestamp($creationTimestamp)
            ->setDocumentId($documentId)
            ->setDocumentNo($documentNo)
            ->setDocumentType($documentType)
            ->setExportedTimestamp($exportedTimestamp)
            ->setIsExported($isExported)
            ->setTransactionDate($transactionDate)
            ->setUnitName($unitName)
            ->setVersionNumber($versionNumber);
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
     * @return \Pggns\MidocoApi\Documents\StructType\BirPaymentExportDTO
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
     * Get birPaymentId value
     * @return int|null
     */
    public function getBirPaymentId(): ?int
    {
        return $this->birPaymentId;
    }
    /**
     * Set birPaymentId value
     * @param int $birPaymentId
     * @return \Pggns\MidocoApi\Documents\StructType\BirPaymentExportDTO
     */
    public function setBirPaymentId(?int $birPaymentId = null): self
    {
        // validation for constraint: int
        if (!is_null($birPaymentId) && !(is_int($birPaymentId) || ctype_digit($birPaymentId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($birPaymentId, true), gettype($birPaymentId)), __LINE__);
        }
        $this->birPaymentId = $birPaymentId;
        
        return $this;
    }
    /**
     * Get businessUnitNo value
     * @return string|null
     */
    public function getBusinessUnitNo(): ?string
    {
        return $this->businessUnitNo;
    }
    /**
     * Set businessUnitNo value
     * @param string $businessUnitNo
     * @return \Pggns\MidocoApi\Documents\StructType\BirPaymentExportDTO
     */
    public function setBusinessUnitNo(?string $businessUnitNo = null): self
    {
        // validation for constraint: string
        if (!is_null($businessUnitNo) && !is_string($businessUnitNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($businessUnitNo, true), gettype($businessUnitNo)), __LINE__);
        }
        $this->businessUnitNo = $businessUnitNo;
        
        return $this;
    }
    /**
     * Get ccSlipNo value
     * @return string|null
     */
    public function getCcSlipNo(): ?string
    {
        return $this->ccSlipNo;
    }
    /**
     * Set ccSlipNo value
     * @param string $ccSlipNo
     * @return \Pggns\MidocoApi\Documents\StructType\BirPaymentExportDTO
     */
    public function setCcSlipNo(?string $ccSlipNo = null): self
    {
        // validation for constraint: string
        if (!is_null($ccSlipNo) && !is_string($ccSlipNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ccSlipNo, true), gettype($ccSlipNo)), __LINE__);
        }
        $this->ccSlipNo = $ccSlipNo;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\BirPaymentExportDTO
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
     * @return \Pggns\MidocoApi\Documents\StructType\BirPaymentExportDTO
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
     * Get documentNo value
     * @return int|null
     */
    public function getDocumentNo(): ?int
    {
        return $this->documentNo;
    }
    /**
     * Set documentNo value
     * @param int $documentNo
     * @return \Pggns\MidocoApi\Documents\StructType\BirPaymentExportDTO
     */
    public function setDocumentNo(?int $documentNo = null): self
    {
        // validation for constraint: int
        if (!is_null($documentNo) && !(is_int($documentNo) || ctype_digit($documentNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($documentNo, true), gettype($documentNo)), __LINE__);
        }
        $this->documentNo = $documentNo;
        
        return $this;
    }
    /**
     * Get documentType value
     * @return string|null
     */
    public function getDocumentType(): ?string
    {
        return $this->documentType;
    }
    /**
     * Set documentType value
     * @param string $documentType
     * @return \Pggns\MidocoApi\Documents\StructType\BirPaymentExportDTO
     */
    public function setDocumentType(?string $documentType = null): self
    {
        // validation for constraint: string
        if (!is_null($documentType) && !is_string($documentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentType, true), gettype($documentType)), __LINE__);
        }
        $this->documentType = $documentType;
        
        return $this;
    }
    /**
     * Get exportedTimestamp value
     * @return string|null
     */
    public function getExportedTimestamp(): ?string
    {
        return $this->exportedTimestamp;
    }
    /**
     * Set exportedTimestamp value
     * @param string $exportedTimestamp
     * @return \Pggns\MidocoApi\Documents\StructType\BirPaymentExportDTO
     */
    public function setExportedTimestamp(?string $exportedTimestamp = null): self
    {
        // validation for constraint: string
        if (!is_null($exportedTimestamp) && !is_string($exportedTimestamp)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($exportedTimestamp, true), gettype($exportedTimestamp)), __LINE__);
        }
        $this->exportedTimestamp = $exportedTimestamp;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\BirPaymentExportDTO
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
     * Get transactionDate value
     * @return string|null
     */
    public function getTransactionDate(): ?string
    {
        return $this->transactionDate;
    }
    /**
     * Set transactionDate value
     * @param string $transactionDate
     * @return \Pggns\MidocoApi\Documents\StructType\BirPaymentExportDTO
     */
    public function setTransactionDate(?string $transactionDate = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionDate) && !is_string($transactionDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionDate, true), gettype($transactionDate)), __LINE__);
        }
        $this->transactionDate = $transactionDate;
        
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
     * @return \Pggns\MidocoApi\Documents\StructType\BirPaymentExportDTO
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
    /**
     * Get versionNumber value
     * @return string|null
     */
    public function getVersionNumber(): ?string
    {
        return $this->versionNumber;
    }
    /**
     * Set versionNumber value
     * @param string $versionNumber
     * @return \Pggns\MidocoApi\Documents\StructType\BirPaymentExportDTO
     */
    public function setVersionNumber(?string $versionNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($versionNumber) && !is_string($versionNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($versionNumber, true), gettype($versionNumber)), __LINE__);
        }
        $this->versionNumber = $versionNumber;
        
        return $this;
    }
}
