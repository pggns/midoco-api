<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoDeferralWriteOffListCriteriaType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoDeferralWriteOffListCriteriaType extends AbstractStructBase
{
    /**
     * The billingDateFrom
     * @var string|null
     */
    protected ?string $billingDateFrom = null;
    /**
     * The billingDateTo
     * @var string|null
     */
    protected ?string $billingDateTo = null;
    /**
     * The startTravelFrom
     * @var string|null
     */
    protected ?string $startTravelFrom = null;
    /**
     * The startTravelTo
     * @var string|null
     */
    protected ?string $startTravelTo = null;
    /**
     * The orgUnits
     * @var string|null
     */
    protected ?string $orgUnits = null;
    /**
     * The expensAccountFrom
     * @var string|null
     */
    protected ?string $expensAccountFrom = null;
    /**
     * The expensAccountTo
     * @var string|null
     */
    protected ?string $expensAccountTo = null;
    /**
     * The debitorCreditorFrom
     * @var string|null
     */
    protected ?string $debitorCreditorFrom = null;
    /**
     * The debitorCreditorTo
     * @var string|null
     */
    protected ?string $debitorCreditorTo = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The listBookingsWithInvoice
     * @var bool|null
     */
    protected ?bool $listBookingsWithInvoice = null;
    /**
     * Constructor method for MidocoDeferralWriteOffListCriteriaType
     * @uses MidocoDeferralWriteOffListCriteriaType::setBillingDateFrom()
     * @uses MidocoDeferralWriteOffListCriteriaType::setBillingDateTo()
     * @uses MidocoDeferralWriteOffListCriteriaType::setStartTravelFrom()
     * @uses MidocoDeferralWriteOffListCriteriaType::setStartTravelTo()
     * @uses MidocoDeferralWriteOffListCriteriaType::setOrgUnits()
     * @uses MidocoDeferralWriteOffListCriteriaType::setExpensAccountFrom()
     * @uses MidocoDeferralWriteOffListCriteriaType::setExpensAccountTo()
     * @uses MidocoDeferralWriteOffListCriteriaType::setDebitorCreditorFrom()
     * @uses MidocoDeferralWriteOffListCriteriaType::setDebitorCreditorTo()
     * @uses MidocoDeferralWriteOffListCriteriaType::setType()
     * @uses MidocoDeferralWriteOffListCriteriaType::setListBookingsWithInvoice()
     * @param string $billingDateFrom
     * @param string $billingDateTo
     * @param string $startTravelFrom
     * @param string $startTravelTo
     * @param string $orgUnits
     * @param string $expensAccountFrom
     * @param string $expensAccountTo
     * @param string $debitorCreditorFrom
     * @param string $debitorCreditorTo
     * @param string $type
     * @param bool $listBookingsWithInvoice
     */
    public function __construct(?string $billingDateFrom = null, ?string $billingDateTo = null, ?string $startTravelFrom = null, ?string $startTravelTo = null, ?string $orgUnits = null, ?string $expensAccountFrom = null, ?string $expensAccountTo = null, ?string $debitorCreditorFrom = null, ?string $debitorCreditorTo = null, ?string $type = null, ?bool $listBookingsWithInvoice = null)
    {
        $this
            ->setBillingDateFrom($billingDateFrom)
            ->setBillingDateTo($billingDateTo)
            ->setStartTravelFrom($startTravelFrom)
            ->setStartTravelTo($startTravelTo)
            ->setOrgUnits($orgUnits)
            ->setExpensAccountFrom($expensAccountFrom)
            ->setExpensAccountTo($expensAccountTo)
            ->setDebitorCreditorFrom($debitorCreditorFrom)
            ->setDebitorCreditorTo($debitorCreditorTo)
            ->setType($type)
            ->setListBookingsWithInvoice($listBookingsWithInvoice);
    }
    /**
     * Get billingDateFrom value
     * @return string|null
     */
    public function getBillingDateFrom(): ?string
    {
        return $this->billingDateFrom;
    }
    /**
     * Set billingDateFrom value
     * @param string $billingDateFrom
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffListCriteriaType
     */
    public function setBillingDateFrom(?string $billingDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($billingDateFrom) && !is_string($billingDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingDateFrom, true), gettype($billingDateFrom)), __LINE__);
        }
        $this->billingDateFrom = $billingDateFrom;
        
        return $this;
    }
    /**
     * Get billingDateTo value
     * @return string|null
     */
    public function getBillingDateTo(): ?string
    {
        return $this->billingDateTo;
    }
    /**
     * Set billingDateTo value
     * @param string $billingDateTo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffListCriteriaType
     */
    public function setBillingDateTo(?string $billingDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($billingDateTo) && !is_string($billingDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($billingDateTo, true), gettype($billingDateTo)), __LINE__);
        }
        $this->billingDateTo = $billingDateTo;
        
        return $this;
    }
    /**
     * Get startTravelFrom value
     * @return string|null
     */
    public function getStartTravelFrom(): ?string
    {
        return $this->startTravelFrom;
    }
    /**
     * Set startTravelFrom value
     * @param string $startTravelFrom
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffListCriteriaType
     */
    public function setStartTravelFrom(?string $startTravelFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravelFrom) && !is_string($startTravelFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravelFrom, true), gettype($startTravelFrom)), __LINE__);
        }
        $this->startTravelFrom = $startTravelFrom;
        
        return $this;
    }
    /**
     * Get startTravelTo value
     * @return string|null
     */
    public function getStartTravelTo(): ?string
    {
        return $this->startTravelTo;
    }
    /**
     * Set startTravelTo value
     * @param string $startTravelTo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffListCriteriaType
     */
    public function setStartTravelTo(?string $startTravelTo = null): self
    {
        // validation for constraint: string
        if (!is_null($startTravelTo) && !is_string($startTravelTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startTravelTo, true), gettype($startTravelTo)), __LINE__);
        }
        $this->startTravelTo = $startTravelTo;
        
        return $this;
    }
    /**
     * Get orgUnits value
     * @return string|null
     */
    public function getOrgUnits(): ?string
    {
        return $this->orgUnits;
    }
    /**
     * Set orgUnits value
     * @param string $orgUnits
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffListCriteriaType
     */
    public function setOrgUnits(?string $orgUnits = null): self
    {
        // validation for constraint: string
        if (!is_null($orgUnits) && !is_string($orgUnits)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orgUnits, true), gettype($orgUnits)), __LINE__);
        }
        $this->orgUnits = $orgUnits;
        
        return $this;
    }
    /**
     * Get expensAccountFrom value
     * @return string|null
     */
    public function getExpensAccountFrom(): ?string
    {
        return $this->expensAccountFrom;
    }
    /**
     * Set expensAccountFrom value
     * @param string $expensAccountFrom
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffListCriteriaType
     */
    public function setExpensAccountFrom(?string $expensAccountFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($expensAccountFrom) && !is_string($expensAccountFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expensAccountFrom, true), gettype($expensAccountFrom)), __LINE__);
        }
        $this->expensAccountFrom = $expensAccountFrom;
        
        return $this;
    }
    /**
     * Get expensAccountTo value
     * @return string|null
     */
    public function getExpensAccountTo(): ?string
    {
        return $this->expensAccountTo;
    }
    /**
     * Set expensAccountTo value
     * @param string $expensAccountTo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffListCriteriaType
     */
    public function setExpensAccountTo(?string $expensAccountTo = null): self
    {
        // validation for constraint: string
        if (!is_null($expensAccountTo) && !is_string($expensAccountTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($expensAccountTo, true), gettype($expensAccountTo)), __LINE__);
        }
        $this->expensAccountTo = $expensAccountTo;
        
        return $this;
    }
    /**
     * Get debitorCreditorFrom value
     * @return string|null
     */
    public function getDebitorCreditorFrom(): ?string
    {
        return $this->debitorCreditorFrom;
    }
    /**
     * Set debitorCreditorFrom value
     * @param string $debitorCreditorFrom
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffListCriteriaType
     */
    public function setDebitorCreditorFrom(?string $debitorCreditorFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorCreditorFrom) && !is_string($debitorCreditorFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorCreditorFrom, true), gettype($debitorCreditorFrom)), __LINE__);
        }
        $this->debitorCreditorFrom = $debitorCreditorFrom;
        
        return $this;
    }
    /**
     * Get debitorCreditorTo value
     * @return string|null
     */
    public function getDebitorCreditorTo(): ?string
    {
        return $this->debitorCreditorTo;
    }
    /**
     * Set debitorCreditorTo value
     * @param string $debitorCreditorTo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffListCriteriaType
     */
    public function setDebitorCreditorTo(?string $debitorCreditorTo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorCreditorTo) && !is_string($debitorCreditorTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorCreditorTo, true), gettype($debitorCreditorTo)), __LINE__);
        }
        $this->debitorCreditorTo = $debitorCreditorTo;
        
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
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffListCriteriaType
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
     * Get listBookingsWithInvoice value
     * @return bool|null
     */
    public function getListBookingsWithInvoice(): ?bool
    {
        return $this->listBookingsWithInvoice;
    }
    /**
     * Set listBookingsWithInvoice value
     * @param bool $listBookingsWithInvoice
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoDeferralWriteOffListCriteriaType
     */
    public function setListBookingsWithInvoice(?bool $listBookingsWithInvoice = null): self
    {
        // validation for constraint: boolean
        if (!is_null($listBookingsWithInvoice) && !is_bool($listBookingsWithInvoice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($listBookingsWithInvoice, true), gettype($listBookingsWithInvoice)), __LINE__);
        }
        $this->listBookingsWithInvoice = $listBookingsWithInvoice;
        
        return $this;
    }
}
