<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMergedServiceStatiResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMergedServiceStatiResponse extends AbstractStructBase
{
    /**
     * The status
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $status = null;
    /**
     * Constructor method for GetMergedServiceStatiResponse
     * @uses GetMergedServiceStatiResponse::setStatus()
     * @param string[] $status
     */
    public function __construct(?array $status = null)
    {
        $this
            ->setStatus($status);
    }
    /**
     * Get status value
     * @return string[]
     */
    public function getStatus(): ?array
    {
        return $this->status;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setStatus method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStatus method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStatusForArrayConstraintFromSetStatus(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMergedServiceStatiResponseStatusItem) {
            // validation for constraint: itemType
            if (!is_string($getMergedServiceStatiResponseStatusItem)) {
                $invalidValues[] = is_object($getMergedServiceStatiResponseStatusItem) ? get_class($getMergedServiceStatiResponseStatusItem) : sprintf('%s(%s)', gettype($getMergedServiceStatiResponseStatusItem), var_export($getMergedServiceStatiResponseStatusItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The status property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set status value
     * @throws InvalidArgumentException
     * @param string[] $status
     * @return \Pggns\MidocoApi\Documents\StructType\GetMergedServiceStatiResponse
     */
    public function setStatus(?array $status = null): self
    {
        // validation for constraint: array
        if ('' !== ($statusArrayErrorMessage = self::validateStatusForArrayConstraintFromSetStatus($status))) {
            throw new InvalidArgumentException($statusArrayErrorMessage, __LINE__);
        }
        $this->status = $status;
        
        return $this;
    }
    /**
     * Add item to status value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetMergedServiceStatiResponse
     */
    public function addToStatus(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The status property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->status[] = $item;
        
        return $this;
    }
}
