<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingReportRequest StructType
 * @subpackage Structs
 */
class GetBillingReportRequest extends AbstractStructBase
{
    /**
     * The fromReceiptDate
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $fromReceiptDate;
    /**
     * The toReceiptDate
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * @var string
     */
    protected string $toReceiptDate;
    /**
     * The creationUser
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $creationUser = null;
    /**
     * The paymentType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $paymentType = null;
    /**
     * Constructor method for GetBillingReportRequest
     * @uses GetBillingReportRequest::setFromReceiptDate()
     * @uses GetBillingReportRequest::setToReceiptDate()
     * @uses GetBillingReportRequest::setCreationUser()
     * @uses GetBillingReportRequest::setPaymentType()
     * @param string $fromReceiptDate
     * @param string $toReceiptDate
     * @param int[] $creationUser
     * @param string $paymentType
     */
    public function __construct(string $fromReceiptDate, string $toReceiptDate, ?array $creationUser = null, ?string $paymentType = null)
    {
        $this
            ->setFromReceiptDate($fromReceiptDate)
            ->setToReceiptDate($toReceiptDate)
            ->setCreationUser($creationUser)
            ->setPaymentType($paymentType);
    }
    /**
     * Get fromReceiptDate value
     * @return string
     */
    public function getFromReceiptDate(): string
    {
        return $this->fromReceiptDate;
    }
    /**
     * Set fromReceiptDate value
     * @param string $fromReceiptDate
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetBillingReportRequest
     */
    public function setFromReceiptDate(string $fromReceiptDate): self
    {
        // validation for constraint: string
        if (!is_null($fromReceiptDate) && !is_string($fromReceiptDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fromReceiptDate, true), gettype($fromReceiptDate)), __LINE__);
        }
        $this->fromReceiptDate = $fromReceiptDate;
        
        return $this;
    }
    /**
     * Get toReceiptDate value
     * @return string
     */
    public function getToReceiptDate(): string
    {
        return $this->toReceiptDate;
    }
    /**
     * Set toReceiptDate value
     * @param string $toReceiptDate
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetBillingReportRequest
     */
    public function setToReceiptDate(string $toReceiptDate): self
    {
        // validation for constraint: string
        if (!is_null($toReceiptDate) && !is_string($toReceiptDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($toReceiptDate, true), gettype($toReceiptDate)), __LINE__);
        }
        $this->toReceiptDate = $toReceiptDate;
        
        return $this;
    }
    /**
     * Get creationUser value
     * @return int[]
     */
    public function getCreationUser(): ?array
    {
        return $this->creationUser;
    }
    /**
     * This method is responsible for validating the values passed to the setCreationUser method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCreationUser method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCreationUserForArrayConstraintsFromSetCreationUser(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getBillingReportRequestCreationUserItem) {
            // validation for constraint: itemType
            if (!(is_int($getBillingReportRequestCreationUserItem) || ctype_digit($getBillingReportRequestCreationUserItem))) {
                $invalidValues[] = is_object($getBillingReportRequestCreationUserItem) ? get_class($getBillingReportRequestCreationUserItem) : sprintf('%s(%s)', gettype($getBillingReportRequestCreationUserItem), var_export($getBillingReportRequestCreationUserItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The creationUser property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set creationUser value
     * @throws InvalidArgumentException
     * @param int[] $creationUser
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetBillingReportRequest
     */
    public function setCreationUser(?array $creationUser = null): self
    {
        // validation for constraint: array
        if ('' !== ($creationUserArrayErrorMessage = self::validateCreationUserForArrayConstraintsFromSetCreationUser($creationUser))) {
            throw new InvalidArgumentException($creationUserArrayErrorMessage, __LINE__);
        }
        $this->creationUser = $creationUser;
        
        return $this;
    }
    /**
     * Add item to creationUser value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetBillingReportRequest
     */
    public function addToCreationUser(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The creationUser property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->creationUser[] = $item;
        
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
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetBillingReportRequest
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
