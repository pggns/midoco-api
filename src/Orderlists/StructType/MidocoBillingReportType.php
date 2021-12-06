<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBillingReportType StructType
 * @subpackage Structs
 */
class MidocoBillingReportType extends AbstractStructBase
{
    /**
     * The position
     * @var int|null
     */
    protected ?int $position = null;
    /**
     * The receiptDate
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * The creationUser
     * @var string|null
     */
    protected ?string $creationUser = null;
    /**
     * The accountId
     * @var string|null
     */
    protected ?string $accountId = null;
    /**
     * The documentNo
     * @var int|null
     */
    protected ?int $documentNo = null;
    /**
     * The referenceNo
     * @var string|null
     */
    protected ?string $referenceNo = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The price
     * @var float|null
     */
    protected ?float $price = null;
    /**
     * The nvsOrderNo
     * @var string|null
     */
    protected ?string $nvsOrderNo = null;
    /**
     * The paymentType
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * Constructor method for MidocoBillingReportType
     * @uses MidocoBillingReportType::setPosition()
     * @uses MidocoBillingReportType::setReceiptDate()
     * @uses MidocoBillingReportType::setCreationUser()
     * @uses MidocoBillingReportType::setAccountId()
     * @uses MidocoBillingReportType::setDocumentNo()
     * @uses MidocoBillingReportType::setReferenceNo()
     * @uses MidocoBillingReportType::setDescription()
     * @uses MidocoBillingReportType::setPrice()
     * @uses MidocoBillingReportType::setNvsOrderNo()
     * @uses MidocoBillingReportType::setPaymentType()
     * @param int $position
     * @param string $receiptDate
     * @param string $creationUser
     * @param string $accountId
     * @param int $documentNo
     * @param string $referenceNo
     * @param string $description
     * @param float $price
     * @param string $nvsOrderNo
     * @param string $paymentType
     */
    public function __construct(?int $position = null, ?string $receiptDate = null, ?string $creationUser = null, ?string $accountId = null, ?int $documentNo = null, ?string $referenceNo = null, ?string $description = null, ?float $price = null, ?string $nvsOrderNo = null, ?string $paymentType = null)
    {
        $this
            ->setPosition($position)
            ->setReceiptDate($receiptDate)
            ->setCreationUser($creationUser)
            ->setAccountId($accountId)
            ->setDocumentNo($documentNo)
            ->setReferenceNo($referenceNo)
            ->setDescription($description)
            ->setPrice($price)
            ->setNvsOrderNo($nvsOrderNo)
            ->setPaymentType($paymentType);
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingReportType
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
     * Get receiptDate value
     * @return string|null
     */
    public function getReceiptDate(): ?string
    {
        return $this->receiptDate;
    }
    /**
     * Set receiptDate value
     * @param string $receiptDate
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingReportType
     */
    public function setReceiptDate(?string $receiptDate = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDate) && !is_string($receiptDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDate, true), gettype($receiptDate)), __LINE__);
        }
        $this->receiptDate = $receiptDate;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingReportType
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingReportType
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingReportType
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
     * Get referenceNo value
     * @return string|null
     */
    public function getReferenceNo(): ?string
    {
        return $this->referenceNo;
    }
    /**
     * Set referenceNo value
     * @param string $referenceNo
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingReportType
     */
    public function setReferenceNo(?string $referenceNo = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceNo) && !is_string($referenceNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceNo, true), gettype($referenceNo)), __LINE__);
        }
        $this->referenceNo = $referenceNo;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingReportType
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
     * Get price value
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }
    /**
     * Set price value
     * @param float $price
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingReportType
     */
    public function setPrice(?float $price = null): self
    {
        // validation for constraint: float
        if (!is_null($price) && !(is_float($price) || is_numeric($price))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($price, true), gettype($price)), __LINE__);
        }
        $this->price = $price;
        
        return $this;
    }
    /**
     * Get nvsOrderNo value
     * @return string|null
     */
    public function getNvsOrderNo(): ?string
    {
        return $this->nvsOrderNo;
    }
    /**
     * Set nvsOrderNo value
     * @param string $nvsOrderNo
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingReportType
     */
    public function setNvsOrderNo(?string $nvsOrderNo = null): self
    {
        // validation for constraint: string
        if (!is_null($nvsOrderNo) && !is_string($nvsOrderNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nvsOrderNo, true), gettype($nvsOrderNo)), __LINE__);
        }
        $this->nvsOrderNo = $nvsOrderNo;
        
        return $this;
    }
    /**
     * Get paymentType value
     * @return string|null
     */
    public function getPaymentType(): ?string
    {
        return $this->paymentType;
    }
    /**
     * Set paymentType value
     * @param string $paymentType
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\MidocoBillingReportType
     */
    public function setPaymentType(?string $paymentType = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentType) && !is_string($paymentType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentType, true), gettype($paymentType)), __LINE__);
        }
        $this->paymentType = $paymentType;
        
        return $this;
    }
}
