<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListInsurersResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListInsurersResponse extends AbstractStructBase
{
    /**
     * The MidocoInsurer
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoInsurer
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurer[]
     */
    protected ?array $MidocoInsurer = null;
    /**
     * Constructor method for ListInsurersResponse
     * @uses ListInsurersResponse::setMidocoInsurer()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurer[] $midocoInsurer
     */
    public function __construct(?array $midocoInsurer = null)
    {
        $this
            ->setMidocoInsurer($midocoInsurer);
    }
    /**
     * Get MidocoInsurer value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurer[]
     */
    public function getMidocoInsurer(): ?array
    {
        return $this->MidocoInsurer;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setMidocoInsurer method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoInsurer method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoInsurerForArrayConstraintFromSetMidocoInsurer(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listInsurersResponseMidocoInsurerItem) {
            // validation for constraint: itemType
            if (!$listInsurersResponseMidocoInsurerItem instanceof \Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurer) {
                $invalidValues[] = is_object($listInsurersResponseMidocoInsurerItem) ? get_class($listInsurersResponseMidocoInsurerItem) : sprintf('%s(%s)', gettype($listInsurersResponseMidocoInsurerItem), var_export($listInsurersResponseMidocoInsurerItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoInsurer property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurer, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoInsurer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurer[] $midocoInsurer
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ListInsurersResponse
     */
    public function setMidocoInsurer(?array $midocoInsurer = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoInsurerArrayErrorMessage = self::validateMidocoInsurerForArrayConstraintFromSetMidocoInsurer($midocoInsurer))) {
            throw new InvalidArgumentException($midocoInsurerArrayErrorMessage, __LINE__);
        }
        $this->MidocoInsurer = $midocoInsurer;
        
        return $this;
    }
    /**
     * Add item to MidocoInsurer value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurer $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\ListInsurersResponse
     */
    public function addToMidocoInsurer(\Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurer $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurer) {
            throw new InvalidArgumentException(sprintf('The MidocoInsurer property can only contain items of type \Pggns\MidocoApi\MidocoSystem\StructType\MidocoInsurer, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoInsurer[] = $item;
        
        return $this;
    }
}
