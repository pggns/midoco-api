<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetExternVoucherTypeResponse StructType
 * @subpackage Structs
 */
class GetExternVoucherTypeResponse extends AbstractStructBase
{
    /**
     * The MidocoExternVoucherType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoExternVoucherType
     * @var \Pggns\MidocoApi\Orderlists\StructType\ExternVoucherTypeDTO[]
     */
    protected ?array $MidocoExternVoucherType = null;
    /**
     * Constructor method for GetExternVoucherTypeResponse
     * @uses GetExternVoucherTypeResponse::setMidocoExternVoucherType()
     * @param \Pggns\MidocoApi\Orderlists\StructType\ExternVoucherTypeDTO[] $midocoExternVoucherType
     */
    public function __construct(?array $midocoExternVoucherType = null)
    {
        $this
            ->setMidocoExternVoucherType($midocoExternVoucherType);
    }
    /**
     * Get MidocoExternVoucherType value
     * @return \Pggns\MidocoApi\Orderlists\StructType\ExternVoucherTypeDTO[]
     */
    public function getMidocoExternVoucherType(): ?array
    {
        return $this->MidocoExternVoucherType;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoExternVoucherType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoExternVoucherType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoExternVoucherTypeForArrayConstraintsFromSetMidocoExternVoucherType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getExternVoucherTypeResponseMidocoExternVoucherTypeItem) {
            // validation for constraint: itemType
            if (!$getExternVoucherTypeResponseMidocoExternVoucherTypeItem instanceof \Pggns\MidocoApi\Orderlists\StructType\ExternVoucherTypeDTO) {
                $invalidValues[] = is_object($getExternVoucherTypeResponseMidocoExternVoucherTypeItem) ? get_class($getExternVoucherTypeResponseMidocoExternVoucherTypeItem) : sprintf('%s(%s)', gettype($getExternVoucherTypeResponseMidocoExternVoucherTypeItem), var_export($getExternVoucherTypeResponseMidocoExternVoucherTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoExternVoucherType property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\ExternVoucherTypeDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoExternVoucherType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\ExternVoucherTypeDTO[] $midocoExternVoucherType
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetExternVoucherTypeResponse
     */
    public function setMidocoExternVoucherType(?array $midocoExternVoucherType = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoExternVoucherTypeArrayErrorMessage = self::validateMidocoExternVoucherTypeForArrayConstraintsFromSetMidocoExternVoucherType($midocoExternVoucherType))) {
            throw new InvalidArgumentException($midocoExternVoucherTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoExternVoucherType = $midocoExternVoucherType;
        
        return $this;
    }
    /**
     * Add item to MidocoExternVoucherType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\ExternVoucherTypeDTO $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetExternVoucherTypeResponse
     */
    public function addToMidocoExternVoucherType(\Pggns\MidocoApi\Orderlists\StructType\ExternVoucherTypeDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\ExternVoucherTypeDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoExternVoucherType property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\ExternVoucherTypeDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoExternVoucherType[] = $item;
        
        return $this;
    }
}
