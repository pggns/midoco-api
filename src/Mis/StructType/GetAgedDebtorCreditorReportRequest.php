<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAgedDebtorCreditorReportRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetAgedDebtorCreditorReportRequest extends AbstractStructBase
{
    /**
     * The KeyValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: KeyValue
     * @var \Pggns\MidocoApi\Mis\StructType\KeyValue[]
     */
    protected ?array $KeyValue = null;
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The format
     * @var string|null
     */
    protected ?string $format = null;
    /**
     * Constructor method for GetAgedDebtorCreditorReportRequest
     * @uses GetAgedDebtorCreditorReportRequest::setKeyValue()
     * @uses GetAgedDebtorCreditorReportRequest::setCustomerId()
     * @uses GetAgedDebtorCreditorReportRequest::setFormat()
     * @param \Pggns\MidocoApi\Mis\StructType\KeyValue[] $keyValue
     * @param int $customerId
     * @param string $format
     */
    public function __construct(?array $keyValue = null, ?int $customerId = null, ?string $format = null)
    {
        $this
            ->setKeyValue($keyValue)
            ->setCustomerId($customerId)
            ->setFormat($format);
    }
    /**
     * Get KeyValue value
     * @return \Pggns\MidocoApi\Mis\StructType\KeyValue[]
     */
    public function getKeyValue(): ?array
    {
        return $this->KeyValue;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setKeyValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKeyValue method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKeyValueForArrayConstraintFromSetKeyValue(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAgedDebtorCreditorReportRequestKeyValueItem) {
            // validation for constraint: itemType
            if (!$getAgedDebtorCreditorReportRequestKeyValueItem instanceof \Pggns\MidocoApi\Mis\StructType\KeyValue) {
                $invalidValues[] = is_object($getAgedDebtorCreditorReportRequestKeyValueItem) ? get_class($getAgedDebtorCreditorReportRequestKeyValueItem) : sprintf('%s(%s)', gettype($getAgedDebtorCreditorReportRequestKeyValueItem), var_export($getAgedDebtorCreditorReportRequestKeyValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The KeyValue property can only contain items of type \Pggns\MidocoApi\Mis\StructType\KeyValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set KeyValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\KeyValue[] $keyValue
     * @return \Pggns\MidocoApi\Mis\StructType\GetAgedDebtorCreditorReportRequest
     */
    public function setKeyValue(?array $keyValue = null): self
    {
        // validation for constraint: array
        if ('' !== ($keyValueArrayErrorMessage = self::validateKeyValueForArrayConstraintFromSetKeyValue($keyValue))) {
            throw new InvalidArgumentException($keyValueArrayErrorMessage, __LINE__);
        }
        $this->KeyValue = $keyValue;
        
        return $this;
    }
    /**
     * Add item to KeyValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Mis\StructType\KeyValue $item
     * @return \Pggns\MidocoApi\Mis\StructType\GetAgedDebtorCreditorReportRequest
     */
    public function addToKeyValue(\Pggns\MidocoApi\Mis\StructType\KeyValue $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Mis\StructType\KeyValue) {
            throw new InvalidArgumentException(sprintf('The KeyValue property can only contain items of type \Pggns\MidocoApi\Mis\StructType\KeyValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->KeyValue[] = $item;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\GetAgedDebtorCreditorReportRequest
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
     * Get format value
     * @return string|null
     */
    public function getFormat(): ?string
    {
        return $this->format;
    }
    /**
     * Set format value
     * @param string $format
     * @return \Pggns\MidocoApi\Mis\StructType\GetAgedDebtorCreditorReportRequest
     */
    public function setFormat(?string $format = null): self
    {
        // validation for constraint: string
        if (!is_null($format) && !is_string($format)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($format, true), gettype($format)), __LINE__);
        }
        $this->format = $format;
        
        return $this;
    }
}
