<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExecuteMidocoSettlementRequest StructType
 * @subpackage Structs
 */
class ExecuteMidocoSettlementRequest extends AbstractStructBase
{
    /**
     * The month
     * Meta information extracted from the WSDL
     * - use: required
     * @var string
     */
    protected string $month;
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The accountIdNoVat
     * @var string|null
     */
    protected ?string $accountIdNoVat = null;
    /**
     * The accountIdRC
     * @var string|null
     */
    protected ?string $accountIdRC = null;
    /**
     * The mdocAccountId
     * @var string|null
     */
    protected ?string $mdocAccountId = null;
    /**
     * The mdocAccountIdNoVat
     * @var string|null
     */
    protected ?string $mdocAccountIdNoVat = null;
    /**
     * The mdocAccountIdRC
     * @var string|null
     */
    protected ?string $mdocAccountIdRC = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The useEmailForBilling
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $useEmailForBilling = null;
    /**
     * The isPreview
     * Meta information extracted from the WSDL
     * - default: true
     * @var bool|null
     */
    protected ?bool $isPreview = null;
    /**
     * The allowDuplicatedSettlements
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $allowDuplicatedSettlements = null;
    /**
     * The isPreviewPDF
     * Meta information extracted from the WSDL
     * - default: false
     * @var bool|null
     */
    protected ?bool $isPreviewPDF = null;
    /**
     * The orgUnitForPDFPreview
     * @var string|null
     */
    protected ?string $orgUnitForPDFPreview = null;
    /**
     * Constructor method for ExecuteMidocoSettlementRequest
     * @uses ExecuteMidocoSettlementRequest::setMonth()
     * @uses ExecuteMidocoSettlementRequest::setAccountId()
     * @uses ExecuteMidocoSettlementRequest::setAccountIdNoVat()
     * @uses ExecuteMidocoSettlementRequest::setAccountIdRC()
     * @uses ExecuteMidocoSettlementRequest::setMdocAccountId()
     * @uses ExecuteMidocoSettlementRequest::setMdocAccountIdNoVat()
     * @uses ExecuteMidocoSettlementRequest::setMdocAccountIdRC()
     * @uses ExecuteMidocoSettlementRequest::setDescription()
     * @uses ExecuteMidocoSettlementRequest::setCustomerId()
     * @uses ExecuteMidocoSettlementRequest::setUseEmailForBilling()
     * @uses ExecuteMidocoSettlementRequest::setIsPreview()
     * @uses ExecuteMidocoSettlementRequest::setAllowDuplicatedSettlements()
     * @uses ExecuteMidocoSettlementRequest::setIsPreviewPDF()
     * @uses ExecuteMidocoSettlementRequest::setOrgUnitForPDFPreview()
     * @param string $month
     * @param string $accountId
     * @param string $accountIdNoVat
     * @param string $accountIdRC
     * @param string $mdocAccountId
     * @param string $mdocAccountIdNoVat
     * @param string $mdocAccountIdRC
     * @param string $description
     * @param int $customerId
     * @param bool $useEmailForBilling
     * @param bool $isPreview
     * @param bool $allowDuplicatedSettlements
     * @param bool $isPreviewPDF
     * @param string $orgUnitForPDFPreview
     */
    public function __construct(string $month, ?string $accountId = null, ?string $accountIdNoVat = null, ?string $accountIdRC = null, ?string $mdocAccountId = null, ?string $mdocAccountIdNoVat = null, ?string $mdocAccountIdRC = null, ?string $description = null, ?int $customerId = null, ?bool $useEmailForBilling = false, ?bool $isPreview = true, ?bool $allowDuplicatedSettlements = false, ?bool $isPreviewPDF = false, ?string $orgUnitForPDFPreview = null)
    {
        $this
            ->setMonth($month)
            ->setAccountId($accountId)
            ->setAccountIdNoVat($accountIdNoVat)
            ->setAccountIdRC($accountIdRC)
            ->setMdocAccountId($mdocAccountId)
            ->setMdocAccountIdNoVat($mdocAccountIdNoVat)
            ->setMdocAccountIdRC($mdocAccountIdRC)
            ->setDescription($description)
            ->setCustomerId($customerId)
            ->setUseEmailForBilling($useEmailForBilling)
            ->setIsPreview($isPreview)
            ->setAllowDuplicatedSettlements($allowDuplicatedSettlements)
            ->setIsPreviewPDF($isPreviewPDF)
            ->setOrgUnitForPDFPreview($orgUnitForPDFPreview);
    }
    /**
     * Get month value
     * @return string
     */
    public function getMonth(): string
    {
        return $this->month;
    }
    /**
     * Set month value
     * @uses \Pggns\MidocoApi\Orderlists\EnumType\Month::valueIsValid()
     * @uses \Pggns\MidocoApi\Orderlists\EnumType\Month::getValidValues()
     * @throws InvalidArgumentException
     * @param string $month
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExecuteMidocoSettlementRequest
     */
    public function setMonth(string $month): self
    {
        // validation for constraint: enumeration
        if (!\Pggns\MidocoApi\Orderlists\EnumType\Month::valueIsValid($month)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Pggns\MidocoApi\Orderlists\EnumType\Month', is_array($month) ? implode(', ', $month) : var_export($month, true), implode(', ', \Pggns\MidocoApi\Orderlists\EnumType\Month::getValidValues())), __LINE__);
        }
        $this->month = $month;
        
        return $this;
    }
    /**
     * Get accountId value
     * @return string|null
     */
    public function getAccountId(): ?string
    {
        return $this->accountId;
    }
    /**
     * Set accountId value
     * @param string $accountId
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExecuteMidocoSettlementRequest
     */
    public function setAccountId(?string $accountId = null): self
    {
        // validation for constraint: string
        if (!is_null($accountId) && !is_string($accountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountId, true), gettype($accountId)), __LINE__);
        }
        $this->accountId = $accountId;
        
        return $this;
    }
    /**
     * Get accountIdNoVat value
     * @return string|null
     */
    public function getAccountIdNoVat(): ?string
    {
        return $this->accountIdNoVat;
    }
    /**
     * Set accountIdNoVat value
     * @param string $accountIdNoVat
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExecuteMidocoSettlementRequest
     */
    public function setAccountIdNoVat(?string $accountIdNoVat = null): self
    {
        // validation for constraint: string
        if (!is_null($accountIdNoVat) && !is_string($accountIdNoVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountIdNoVat, true), gettype($accountIdNoVat)), __LINE__);
        }
        $this->accountIdNoVat = $accountIdNoVat;
        
        return $this;
    }
    /**
     * Get accountIdRC value
     * @return string|null
     */
    public function getAccountIdRC(): ?string
    {
        return $this->accountIdRC;
    }
    /**
     * Set accountIdRC value
     * @param string $accountIdRC
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExecuteMidocoSettlementRequest
     */
    public function setAccountIdRC(?string $accountIdRC = null): self
    {
        // validation for constraint: string
        if (!is_null($accountIdRC) && !is_string($accountIdRC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountIdRC, true), gettype($accountIdRC)), __LINE__);
        }
        $this->accountIdRC = $accountIdRC;
        
        return $this;
    }
    /**
     * Get mdocAccountId value
     * @return string|null
     */
    public function getMdocAccountId(): ?string
    {
        return $this->mdocAccountId;
    }
    /**
     * Set mdocAccountId value
     * @param string $mdocAccountId
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExecuteMidocoSettlementRequest
     */
    public function setMdocAccountId(?string $mdocAccountId = null): self
    {
        // validation for constraint: string
        if (!is_null($mdocAccountId) && !is_string($mdocAccountId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mdocAccountId, true), gettype($mdocAccountId)), __LINE__);
        }
        $this->mdocAccountId = $mdocAccountId;
        
        return $this;
    }
    /**
     * Get mdocAccountIdNoVat value
     * @return string|null
     */
    public function getMdocAccountIdNoVat(): ?string
    {
        return $this->mdocAccountIdNoVat;
    }
    /**
     * Set mdocAccountIdNoVat value
     * @param string $mdocAccountIdNoVat
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExecuteMidocoSettlementRequest
     */
    public function setMdocAccountIdNoVat(?string $mdocAccountIdNoVat = null): self
    {
        // validation for constraint: string
        if (!is_null($mdocAccountIdNoVat) && !is_string($mdocAccountIdNoVat)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mdocAccountIdNoVat, true), gettype($mdocAccountIdNoVat)), __LINE__);
        }
        $this->mdocAccountIdNoVat = $mdocAccountIdNoVat;
        
        return $this;
    }
    /**
     * Get mdocAccountIdRC value
     * @return string|null
     */
    public function getMdocAccountIdRC(): ?string
    {
        return $this->mdocAccountIdRC;
    }
    /**
     * Set mdocAccountIdRC value
     * @param string $mdocAccountIdRC
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExecuteMidocoSettlementRequest
     */
    public function setMdocAccountIdRC(?string $mdocAccountIdRC = null): self
    {
        // validation for constraint: string
        if (!is_null($mdocAccountIdRC) && !is_string($mdocAccountIdRC)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mdocAccountIdRC, true), gettype($mdocAccountIdRC)), __LINE__);
        }
        $this->mdocAccountIdRC = $mdocAccountIdRC;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExecuteMidocoSettlementRequest
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExecuteMidocoSettlementRequest
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
     * Get useEmailForBilling value
     * @return bool|null
     */
    public function getUseEmailForBilling(): ?bool
    {
        return $this->useEmailForBilling;
    }
    /**
     * Set useEmailForBilling value
     * @param bool $useEmailForBilling
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExecuteMidocoSettlementRequest
     */
    public function setUseEmailForBilling(?bool $useEmailForBilling = false): self
    {
        // validation for constraint: boolean
        if (!is_null($useEmailForBilling) && !is_bool($useEmailForBilling)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($useEmailForBilling, true), gettype($useEmailForBilling)), __LINE__);
        }
        $this->useEmailForBilling = $useEmailForBilling;
        
        return $this;
    }
    /**
     * Get isPreview value
     * @return bool|null
     */
    public function getIsPreview(): ?bool
    {
        return $this->isPreview;
    }
    /**
     * Set isPreview value
     * @param bool $isPreview
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExecuteMidocoSettlementRequest
     */
    public function setIsPreview(?bool $isPreview = true): self
    {
        // validation for constraint: boolean
        if (!is_null($isPreview) && !is_bool($isPreview)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPreview, true), gettype($isPreview)), __LINE__);
        }
        $this->isPreview = $isPreview;
        
        return $this;
    }
    /**
     * Get allowDuplicatedSettlements value
     * @return bool|null
     */
    public function getAllowDuplicatedSettlements(): ?bool
    {
        return $this->allowDuplicatedSettlements;
    }
    /**
     * Set allowDuplicatedSettlements value
     * @param bool $allowDuplicatedSettlements
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExecuteMidocoSettlementRequest
     */
    public function setAllowDuplicatedSettlements(?bool $allowDuplicatedSettlements = false): self
    {
        // validation for constraint: boolean
        if (!is_null($allowDuplicatedSettlements) && !is_bool($allowDuplicatedSettlements)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($allowDuplicatedSettlements, true), gettype($allowDuplicatedSettlements)), __LINE__);
        }
        $this->allowDuplicatedSettlements = $allowDuplicatedSettlements;
        
        return $this;
    }
    /**
     * Get isPreviewPDF value
     * @return bool|null
     */
    public function getIsPreviewPDF(): ?bool
    {
        return $this->isPreviewPDF;
    }
    /**
     * Set isPreviewPDF value
     * @param bool $isPreviewPDF
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExecuteMidocoSettlementRequest
     */
    public function setIsPreviewPDF(?bool $isPreviewPDF = false): self
    {
        // validation for constraint: boolean
        if (!is_null($isPreviewPDF) && !is_bool($isPreviewPDF)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPreviewPDF, true), gettype($isPreviewPDF)), __LINE__);
        }
        $this->isPreviewPDF = $isPreviewPDF;
        
        return $this;
    }
    /**
     * Get orgUnitForPDFPreview value
     * @return string|null
     */
    public function getOrgUnitForPDFPreview(): ?string
    {
        return $this->orgUnitForPDFPreview;
    }
    /**
     * Set orgUnitForPDFPreview value
     * @param string $orgUnitForPDFPreview
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExecuteMidocoSettlementRequest
     */
    public function setOrgUnitForPDFPreview(?string $orgUnitForPDFPreview = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnitForPDFPreview) && !is_string($orgUnitForPDFPreview)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnitForPDFPreview, true), gettype($orgUnitForPDFPreview)), __LINE__);
        }
        $this->orgUnitForPDFPreview = $orgUnitForPDFPreview;
        
        return $this;
    }
}
