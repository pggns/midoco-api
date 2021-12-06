<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBillingReportSumType StructType
 * @subpackage Structs
 */
class MidocoBillingReportSumType extends AbstractStructBase
{
    /**
     * The userId
     * @var int|null
     */
    protected ?int $userId = null;
    /**
     * The creationUser
     * @var string|null
     */
    protected ?string $creationUser = null;
    /**
     * The totalAmount
     * @var float|null
     */
    protected ?float $totalAmount = null;
    /**
     * The cashAmount
     * @var float|null
     */
    protected ?float $cashAmount = null;
    /**
     * The ccCardAmount
     * @var float|null
     */
    protected ?float $ccCardAmount = null;
    /**
     * The ecCardAmount
     * @var float|null
     */
    protected ?float $ecCardAmount = null;
    /**
     * The invoiceAmount
     * @var float|null
     */
    protected ?float $invoiceAmount = null;
    /**
     * The voucherAmount
     * @var float|null
     */
    protected ?float $voucherAmount = null;
    /**
     * The othersAmount
     * @var float|null
     */
    protected ?float $othersAmount = null;
    /**
     * Constructor method for MidocoBillingReportSumType
     * @uses MidocoBillingReportSumType::setUserId()
     * @uses MidocoBillingReportSumType::setCreationUser()
     * @uses MidocoBillingReportSumType::setTotalAmount()
     * @uses MidocoBillingReportSumType::setCashAmount()
     * @uses MidocoBillingReportSumType::setCcCardAmount()
     * @uses MidocoBillingReportSumType::setEcCardAmount()
     * @uses MidocoBillingReportSumType::setInvoiceAmount()
     * @uses MidocoBillingReportSumType::setVoucherAmount()
     * @uses MidocoBillingReportSumType::setOthersAmount()
     * @param int $userId
     * @param string $creationUser
     * @param float $totalAmount
     * @param float $cashAmount
     * @param float $ccCardAmount
     * @param float $ecCardAmount
     * @param float $invoiceAmount
     * @param float $voucherAmount
     * @param float $othersAmount
     */
    public function __construct(?int $userId = null, ?string $creationUser = null, ?float $totalAmount = null, ?float $cashAmount = null, ?float $ccCardAmount = null, ?float $ecCardAmount = null, ?float $invoiceAmount = null, ?float $voucherAmount = null, ?float $othersAmount = null)
    {
        $this
            ->setUserId($userId)
            ->setCreationUser($creationUser)
            ->setTotalAmount($totalAmount)
            ->setCashAmount($cashAmount)
            ->setCcCardAmount($ccCardAmount)
            ->setEcCardAmount($ecCardAmount)
            ->setInvoiceAmount($invoiceAmount)
            ->setVoucherAmount($voucherAmount)
            ->setOthersAmount($othersAmount);
    }
    /**
     * Get userId value
     * @return int|null
     */
    public function getUserId(): ?int
    {
        return $this->userId;
    }
    /**
     * Set userId value
     * @param int $userId
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingReportSumType
     */
    public function setUserId(?int $userId = null): self
    {
        // validation for constraint: int
        if (!is_null($userId) && !(is_int($userId) || ctype_digit($userId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($userId, true), gettype($userId)), __LINE__);
        }
        $this->userId = $userId;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return string|null
     */
    public function getCreationUser(): ?string
    {
        return $this->creationUser;
    }
    /**
     * Set creationUser value
     * @param string $creationUser
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingReportSumType
     */
    public function setCreationUser(?string $creationUser = null): self
    {
        // validation for constraint: string
        if (!is_null($creationUser) && !is_string($creationUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationUser, true), gettype($creationUser)), __LINE__);
        }
        $this->creationUser = $creationUser;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingReportSumType
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
    /**
     * Get cashAmount value
     * @return float|null
     */
    public function getCashAmount(): ?float
    {
        return $this->cashAmount;
    }
    /**
     * Set cashAmount value
     * @param float $cashAmount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingReportSumType
     */
    public function setCashAmount(?float $cashAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($cashAmount) && !(is_float($cashAmount) || is_numeric($cashAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($cashAmount, true), gettype($cashAmount)), __LINE__);
        }
        $this->cashAmount = $cashAmount;
        
        return $this;
    }
    /**
     * Get ccCardAmount value
     * @return float|null
     */
    public function getCcCardAmount(): ?float
    {
        return $this->ccCardAmount;
    }
    /**
     * Set ccCardAmount value
     * @param float $ccCardAmount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingReportSumType
     */
    public function setCcCardAmount(?float $ccCardAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($ccCardAmount) && !(is_float($ccCardAmount) || is_numeric($ccCardAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ccCardAmount, true), gettype($ccCardAmount)), __LINE__);
        }
        $this->ccCardAmount = $ccCardAmount;
        
        return $this;
    }
    /**
     * Get ecCardAmount value
     * @return float|null
     */
    public function getEcCardAmount(): ?float
    {
        return $this->ecCardAmount;
    }
    /**
     * Set ecCardAmount value
     * @param float $ecCardAmount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingReportSumType
     */
    public function setEcCardAmount(?float $ecCardAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($ecCardAmount) && !(is_float($ecCardAmount) || is_numeric($ecCardAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($ecCardAmount, true), gettype($ecCardAmount)), __LINE__);
        }
        $this->ecCardAmount = $ecCardAmount;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingReportSumType
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
     * Get voucherAmount value
     * @return float|null
     */
    public function getVoucherAmount(): ?float
    {
        return $this->voucherAmount;
    }
    /**
     * Set voucherAmount value
     * @param float $voucherAmount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingReportSumType
     */
    public function setVoucherAmount(?float $voucherAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($voucherAmount) && !(is_float($voucherAmount) || is_numeric($voucherAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($voucherAmount, true), gettype($voucherAmount)), __LINE__);
        }
        $this->voucherAmount = $voucherAmount;
        
        return $this;
    }
    /**
     * Get othersAmount value
     * @return float|null
     */
    public function getOthersAmount(): ?float
    {
        return $this->othersAmount;
    }
    /**
     * Set othersAmount value
     * @param float $othersAmount
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingReportSumType
     */
    public function setOthersAmount(?float $othersAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($othersAmount) && !(is_float($othersAmount) || is_numeric($othersAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($othersAmount, true), gettype($othersAmount)), __LINE__);
        }
        $this->othersAmount = $othersAmount;
        
        return $this;
    }
}
