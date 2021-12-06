<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListMidocoFeeTypesLocalResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: return the fee types localizations that match the criteria
 * @subpackage Structs
 */
class ListMidocoFeeTypesLocalResponse extends AbstractStructBase
{
    /**
     * The MidocoFeeTypeLocal
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoFeeTypeLocal
     * @var \Pggns\MidocoApi\Documents\StructType\FeeTypeLocalDTO[]
     */
    protected ?array $MidocoFeeTypeLocal = null;
    /**
     * Constructor method for ListMidocoFeeTypesLocalResponse
     * @uses ListMidocoFeeTypesLocalResponse::setMidocoFeeTypeLocal()
     * @param \Pggns\MidocoApi\Documents\StructType\FeeTypeLocalDTO[] $midocoFeeTypeLocal
     */
    public function __construct(?array $midocoFeeTypeLocal = null)
    {
        $this
            ->setMidocoFeeTypeLocal($midocoFeeTypeLocal);
    }
    /**
     * Get MidocoFeeTypeLocal value
     * @return \Pggns\MidocoApi\Documents\StructType\FeeTypeLocalDTO[]
     */
    public function getMidocoFeeTypeLocal(): ?array
    {
        return $this->MidocoFeeTypeLocal;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoFeeTypeLocal method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoFeeTypeLocal method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoFeeTypeLocalForArrayConstraintsFromSetMidocoFeeTypeLocal(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listMidocoFeeTypesLocalResponseMidocoFeeTypeLocalItem) {
            // validation for constraint: itemType
            if (!$listMidocoFeeTypesLocalResponseMidocoFeeTypeLocalItem instanceof \Pggns\MidocoApi\Documents\StructType\FeeTypeLocalDTO) {
                $invalidValues[] = is_object($listMidocoFeeTypesLocalResponseMidocoFeeTypeLocalItem) ? get_class($listMidocoFeeTypesLocalResponseMidocoFeeTypeLocalItem) : sprintf('%s(%s)', gettype($listMidocoFeeTypesLocalResponseMidocoFeeTypeLocalItem), var_export($listMidocoFeeTypesLocalResponseMidocoFeeTypeLocalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoFeeTypeLocal property can only contain items of type \Pggns\MidocoApi\Documents\StructType\FeeTypeLocalDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoFeeTypeLocal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\FeeTypeLocalDTO[] $midocoFeeTypeLocal
     * @return \Pggns\MidocoApi\Documents\StructType\ListMidocoFeeTypesLocalResponse
     */
    public function setMidocoFeeTypeLocal(?array $midocoFeeTypeLocal = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoFeeTypeLocalArrayErrorMessage = self::validateMidocoFeeTypeLocalForArrayConstraintsFromSetMidocoFeeTypeLocal($midocoFeeTypeLocal))) {
            throw new InvalidArgumentException($midocoFeeTypeLocalArrayErrorMessage, __LINE__);
        }
        $this->MidocoFeeTypeLocal = $midocoFeeTypeLocal;
        
        return $this;
    }
    /**
     * Add item to MidocoFeeTypeLocal value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\FeeTypeLocalDTO $item
     * @return \Pggns\MidocoApi\Documents\StructType\ListMidocoFeeTypesLocalResponse
     */
    public function addToMidocoFeeTypeLocal(\Pggns\MidocoApi\Documents\StructType\FeeTypeLocalDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\FeeTypeLocalDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoFeeTypeLocal property can only contain items of type \Pggns\MidocoApi\Documents\StructType\FeeTypeLocalDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoFeeTypeLocal[] = $item;
        
        return $this;
    }
}
