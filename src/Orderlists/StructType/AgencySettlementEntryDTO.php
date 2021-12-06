<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AgencySettlementEntryDTO StructType
 * @subpackage Structs
 */
class AgencySettlementEntryDTO extends AbstractStructBase
{
    /**
     * The agencyId
     * @var string|null
     */
    protected ?string $agencyId = null;
    /**
     * The collectiveInvoice
     * @var bool|null
     */
    protected ?bool $collectiveInvoice = null;
    /**
     * The commissionAmount
     * @var float|null
     */
    protected ?float $commissionAmount = null;
    /**
     * The commissionInsuranceAmount
     * @var float|null
     */
    protected ?float $commissionInsuranceAmount = null;
    /**
     * The commissionVatAmount
     * @var float|null
     */
    protected ?float $commissionVatAmount = null;
    /**
     * The containsStorno
     * @var bool|null
     */
    protected ?bool $containsStorno = null;
    /**
     * The documentId
     * @var int|null
     */
    protected ?int $documentId = null;
    /**
     * The invoiceAmount
     * @var float|null
     */
    protected ?float $invoiceAmount = null;
    /**
     * The invoiceId
     * @var int|null
     */
    protected ?int $invoiceId = null;
    /**
     * The settlementId
     * @var int|null
     */
    protected ?int $settlementId = null;
    /**
     * The totalAmount
     * @var float|null
     */
    protected ?float $totalAmount = null;
    /**
     * Constructor method for AgencySettlementEntryDTO
     * @uses AgencySettlementEntryDTO::setAgencyId()
     * @uses AgencySettlementEntryDTO::setCollectiveInvoice()
     * @uses AgencySettlementEntryDTO::setCommissionAmount()
     * @uses AgencySettlementEntryDTO::setCommissionInsuranceAmount()
     * @uses AgencySettlementEntryDTO::setCommissionVatAmount()
     * @uses AgencySettlementEntryDTO::setContainsStorno()
     * @uses AgencySettlementEntryDTO::setDocumentId()
     * @uses AgencySettlementEntryDTO::setInvoiceAmount()
     * @uses AgencySettlementEntryDTO::setInvoiceId()
     * @uses AgencySettlementEntryDTO::setSettlementId()
     * @uses AgencySettlementEntryDTO::setTotalAmount()
     * @param string $agencyId
     * @param bool $collectiveInvoice
     * @param float $commissionAmount
     * @param float $commissionInsuranceAmount
     * @param float $commissionVatAmount
     * @param bool $containsStorno
     * @param int $documentId
     * @param float $invoiceAmount
     * @param int $invoiceId
     * @param int $settlementId
     * @param float $totalAmount
     */
    public function __construct(?string $agencyId = null, ?bool $collectiveInvoice = null, ?float $commissionAmount = null, ?float $commissionInsuranceAmount = null, ?float $commissionVatAmount = null, ?bool $containsStorno = null, ?int $documentId = null, ?float $invoiceAmount = null, ?int $invoiceId = null, ?int $settlementId = null, ?float $totalAmount = null)
    {
        $this
            ->setAgencyId($agencyId)
            ->setCollectiveInvoice($collectiveInvoice)
            ->setCommissionAmount($commissionAmount)
            ->setCommissionInsuranceAmount($commissionInsuranceAmount)
            ->setCommissionVatAmount($commissionVatAmount)
            ->setContainsStorno($containsStorno)
            ->setDocumentId($documentId)
            ->setInvoiceAmount($invoiceAmount)
            ->setInvoiceId($invoiceId)
            ->setSettlementId($settlementId)
            ->setTotalAmount($totalAmount);
    }
    /**
     * Get agencyId value
     * @return string|null
     */
    public function getAgencyId(): ?string
    {
        return $this->agencyId;
    }
    /**
     * Set agencyId value
     * @param string $agencyId
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\AgencySettlementEntryDTO
     */
    public function setAgencyId(?string $agencyId = null): self
    {
        // validation for constraint: string
        if (!is_null($agencyId) && !is_string($agencyId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($agencyId, true), gettype($agencyId)), __LINE__);
        }
        $this->agencyId = $agencyId;
        
        return $this;
    }
    /**
     * Get collectiveInvoice value
     * @return bool|null
     */
    public function getCollectiveInvoice(): ?bool
    {
        return $this->collectiveInvoice;
    }
    /**
     * Set collectiveInvoice value
     * @param bool $collectiveInvoice
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\AgencySettlementEntryDTO
     */
    public function setCollectiveInvoice(?bool $collectiveInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($collectiveInvoice) && !is_bool($collectiveInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($collectiveInvoice, true), gettype($collectiveInvoice)), __LINE__);
        }
        $this->collectiveInvoice = $collectiveInvoice;
        
        return $this;
    }
    /**
     * Get commissionAmount value
     * @return float|null
     */
    public function getCommissionAmount(): ?float
    {
        return $this->commissionAmount;
    }
    /**
     * Set commissionAmount value
     * @param float $commissionAmount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\AgencySettlementEntryDTO
     */
    public function setCommissionAmount(?float $commissionAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionAmount) && !(is_float($commissionAmount) || is_numeric($commissionAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionAmount, true), gettype($commissionAmount)), __LINE__);
        }
        $this->commissionAmount = $commissionAmount;
        
        return $this;
    }
    /**
     * Get commissionInsuranceAmount value
     * @return float|null
     */
    public function getCommissionInsuranceAmount(): ?float
    {
        return $this->commissionInsuranceAmount;
    }
    /**
     * Set commissionInsuranceAmount value
     * @param float $commissionInsuranceAmount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\AgencySettlementEntryDTO
     */
    public function setCommissionInsuranceAmount(?float $commissionInsuranceAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionInsuranceAmount) && !(is_float($commissionInsuranceAmount) || is_numeric($commissionInsuranceAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionInsuranceAmount, true), gettype($commissionInsuranceAmount)), __LINE__);
        }
        $this->commissionInsuranceAmount = $commissionInsuranceAmount;
        
        return $this;
    }
    /**
     * Get commissionVatAmount value
     * @return float|null
     */
    public function getCommissionVatAmount(): ?float
    {
        return $this->commissionVatAmount;
    }
    /**
     * Set commissionVatAmount value
     * @param float $commissionVatAmount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\AgencySettlementEntryDTO
     */
    public function setCommissionVatAmount(?float $commissionVatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($commissionVatAmount) && !(is_float($commissionVatAmount) || is_numeric($commissionVatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($commissionVatAmount, true), gettype($commissionVatAmount)), __LINE__);
        }
        $this->commissionVatAmount = $commissionVatAmount;
        
        return $this;
    }
    /**
     * Get containsStorno value
     * @return bool|null
     */
    public function getContainsStorno(): ?bool
    {
        return $this->containsStorno;
    }
    /**
     * Set containsStorno value
     * @param bool $containsStorno
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\AgencySettlementEntryDTO
     */
    public function setContainsStorno(?bool $containsStorno = null): self
    {
        // validation for constraint: boolean
        if (!is_null($containsStorno) && !is_bool($containsStorno)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($containsStorno, true), gettype($containsStorno)), __LINE__);
        }
        $this->containsStorno = $containsStorno;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\AgencySettlementEntryDTO
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
     * Get invoiceAmount value
     * @return float|null
     */
    public function getInvoiceAmount(): ?float
    {
        return $this->invoiceAmount;
    }
    /**
     * Set invoiceAmount value
     * @param float $invoiceAmount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\AgencySettlementEntryDTO
     */
    public function setInvoiceAmount(?float $invoiceAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($invoiceAmount) && !(is_float($invoiceAmount) || is_numeric($invoiceAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($invoiceAmount, true), gettype($invoiceAmount)), __LINE__);
        }
        $this->invoiceAmount = $invoiceAmount;
        
        return $this;
    }
    /**
     * Get invoiceId value
     * @return int|null
     */
    public function getInvoiceId(): ?int
    {
        return $this->invoiceId;
    }
    /**
     * Set invoiceId value
     * @param int $invoiceId
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\AgencySettlementEntryDTO
     */
    public function setInvoiceId(?int $invoiceId = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceId) && !(is_int($invoiceId) || ctype_digit($invoiceId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceId, true), gettype($invoiceId)), __LINE__);
        }
        $this->invoiceId = $invoiceId;
        
        return $this;
    }
    /**
     * Get settlementId value
     * @return int|null
     */
    public function getSettlementId(): ?int
    {
        return $this->settlementId;
    }
    /**
     * Set settlementId value
     * @param int $settlementId
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\AgencySettlementEntryDTO
     */
    public function setSettlementId(?int $settlementId = null): self
    {
        // validation for constraint: int
        if (!is_null($settlementId) && !(is_int($settlementId) || ctype_digit($settlementId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($settlementId, true), gettype($settlementId)), __LINE__);
        }
        $this->settlementId = $settlementId;
        
        return $this;
    }
    /**
     * Get totalAmount value
     * @return float|null
     */
    public function getTotalAmount(): ?float
    {
        return $this->totalAmount;
    }
    /**
     * Set totalAmount value
     * @param float $totalAmount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\AgencySettlementEntryDTO
     */
    public function setTotalAmount(?float $totalAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($totalAmount) && !(is_float($totalAmount) || is_numeric($totalAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalAmount, true), gettype($totalAmount)), __LINE__);
        }
        $this->totalAmount = $totalAmount;
        
        return $this;
    }
}
