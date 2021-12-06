<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAllDimsResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getAllDimsForRole --- returns all the dimensions for a role id and org unit
 * @subpackage Structs
 */
class GetAllDimsResponse extends AbstractStructBase
{
    /**
     * The MidocoMisDimension
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMisDimension
     * @var \Pggns\MidocoApi\Api\Mis\StructType\MisDimensionDTO[]
     */
    protected ?array $MidocoMisDimension = null;
    /**
     * Constructor method for GetAllDimsResponse
     * @uses GetAllDimsResponse::setMidocoMisDimension()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisDimensionDTO[] $midocoMisDimension
     */
    public function __construct(?array $midocoMisDimension = null)
    {
        $this
            ->setMidocoMisDimension($midocoMisDimension);
    }
    /**
     * Get MidocoMisDimension value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\MisDimensionDTO[]
     */
    public function getMidocoMisDimension(): ?array
    {
        return $this->MidocoMisDimension;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMisDimension method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMisDimension method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMisDimensionForArrayConstraintsFromSetMidocoMisDimension(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAllDimsResponseMidocoMisDimensionItem) {
            // validation for constraint: itemType
            if (!$getAllDimsResponseMidocoMisDimensionItem instanceof \Pggns\MidocoApi\Api\Mis\StructType\MisDimensionDTO) {
                $invalidValues[] = is_object($getAllDimsResponseMidocoMisDimensionItem) ? get_class($getAllDimsResponseMidocoMisDimensionItem) : sprintf('%s(%s)', gettype($getAllDimsResponseMidocoMisDimensionItem), var_export($getAllDimsResponseMidocoMisDimensionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMisDimension property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\MisDimensionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMisDimension value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisDimensionDTO[] $midocoMisDimension
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetAllDimsResponse
     */
    public function setMidocoMisDimension(?array $midocoMisDimension = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMisDimensionArrayErrorMessage = self::validateMidocoMisDimensionForArrayConstraintsFromSetMidocoMisDimension($midocoMisDimension))) {
            throw new InvalidArgumentException($midocoMisDimensionArrayErrorMessage, __LINE__);
        }
        $this->MidocoMisDimension = $midocoMisDimension;
        
        return $this;
    }
    /**
     * Add item to MidocoMisDimension value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Mis\StructType\MisDimensionDTO $item
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetAllDimsResponse
     */
    public function addToMidocoMisDimension(\Pggns\MidocoApi\Api\Mis\StructType\MisDimensionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Mis\StructType\MisDimensionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMisDimension property can only contain items of type \Pggns\MidocoApi\Api\Mis\StructType\MisDimensionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMisDimension[] = $item;
        
        return $this;
    }
}
