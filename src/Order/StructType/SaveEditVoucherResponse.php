<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveEditVoucherResponse StructType
 * @subpackage Structs
 */
class SaveEditVoucherResponse extends AbstractStructBase
{
    /**
     * The MidocoVoucher
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoVoucher
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoVoucher[]
     */
    protected ?array $MidocoVoucher = null;
    /**
     * Constructor method for SaveEditVoucherResponse
     * @uses SaveEditVoucherResponse::setMidocoVoucher()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoVoucher[] $midocoVoucher
     */
    public function __construct(?array $midocoVoucher = null)
    {
        $this
            ->setMidocoVoucher($midocoVoucher);
    }
    /**
     * Get MidocoVoucher value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoVoucher[]
     */
    public function getMidocoVoucher(): ?array
    {
        return $this->MidocoVoucher;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoVoucher method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoVoucher method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoVoucherForArrayConstraintsFromSetMidocoVoucher(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveEditVoucherResponseMidocoVoucherItem) {
            // validation for constraint: itemType
            if (!$saveEditVoucherResponseMidocoVoucherItem instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoVoucher) {
                $invalidValues[] = is_object($saveEditVoucherResponseMidocoVoucherItem) ? get_class($saveEditVoucherResponseMidocoVoucherItem) : sprintf('%s(%s)', gettype($saveEditVoucherResponseMidocoVoucherItem), var_export($saveEditVoucherResponseMidocoVoucherItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoVoucher property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoVoucher, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoVoucher value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoVoucher[] $midocoVoucher
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveEditVoucherResponse
     */
    public function setMidocoVoucher(?array $midocoVoucher = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoVoucherArrayErrorMessage = self::validateMidocoVoucherForArrayConstraintsFromSetMidocoVoucher($midocoVoucher))) {
            throw new InvalidArgumentException($midocoVoucherArrayErrorMessage, __LINE__);
        }
        $this->MidocoVoucher = $midocoVoucher;
        
        return $this;
    }
    /**
     * Add item to MidocoVoucher value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoVoucher $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveEditVoucherResponse
     */
    public function addToMidocoVoucher(\Pggns\MidocoApi\Api\Order\StructType\MidocoVoucher $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\MidocoVoucher) {
            throw new InvalidArgumentException(sprintf('The MidocoVoucher property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\MidocoVoucher, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoVoucher[] = $item;
        
        return $this;
    }
}
