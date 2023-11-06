<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BookDeferredWriteOffRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BookDeferredWriteOffRequest extends AbstractStructBase
{
    /**
     * The revenueIds
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * @var int[]
     */
    protected ?array $revenueIds = null;
    /**
     * Constructor method for BookDeferredWriteOffRequest
     * @uses BookDeferredWriteOffRequest::setRevenueIds()
     * @param int[] $revenueIds
     */
    public function __construct(?array $revenueIds = null)
    {
        $this
            ->setRevenueIds($revenueIds);
    }
    /**
     * Get revenueIds value
     * @return int[]
     */
    public function getRevenueIds(): ?array
    {
        return $this->revenueIds;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRevenueIds method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRevenueIds method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRevenueIdsForArrayConstraintFromSetRevenueIds(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $bookDeferredWriteOffRequestRevenueIdsItem) {
            // validation for constraint: itemType
            if (!(is_int($bookDeferredWriteOffRequestRevenueIdsItem) || ctype_digit($bookDeferredWriteOffRequestRevenueIdsItem))) {
                $invalidValues[] = is_object($bookDeferredWriteOffRequestRevenueIdsItem) ? get_class($bookDeferredWriteOffRequestRevenueIdsItem) : sprintf('%s(%s)', gettype($bookDeferredWriteOffRequestRevenueIdsItem), var_export($bookDeferredWriteOffRequestRevenueIdsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The revenueIds property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set revenueIds value
     * @throws InvalidArgumentException
     * @param int[] $revenueIds
     * @return \Pggns\MidocoApi\Orderlists\StructType\BookDeferredWriteOffRequest
     */
    public function setRevenueIds(?array $revenueIds = null): self
    {
        // validation for constraint: array
        if ('' !== ($revenueIdsArrayErrorMessage = self::validateRevenueIdsForArrayConstraintFromSetRevenueIds($revenueIds))) {
            throw new InvalidArgumentException($revenueIdsArrayErrorMessage, __LINE__);
        }
        $this->revenueIds = $revenueIds;
        
        return $this;
    }
    /**
     * Add item to revenueIds value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\BookDeferredWriteOffRequest
     */
    public function addToRevenueIds(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The revenueIds property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->revenueIds[] = $item;
        
        return $this;
    }
}
