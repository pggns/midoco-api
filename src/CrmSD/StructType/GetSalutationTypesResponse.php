<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSalutationTypesResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getSalutationTypes --- returns the list of salutation types
 * @subpackage Structs
 */
class GetSalutationTypesResponse extends AbstractStructBase
{
    /**
     * The MidocoSalutationTypeExt
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSalutationTypeExt
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\SalutationTypeExtDTO[]
     */
    protected ?array $MidocoSalutationTypeExt = null;
    /**
     * Constructor method for GetSalutationTypesResponse
     * @uses GetSalutationTypesResponse::setMidocoSalutationTypeExt()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\SalutationTypeExtDTO[] $midocoSalutationTypeExt
     */
    public function __construct(?array $midocoSalutationTypeExt = null)
    {
        $this
            ->setMidocoSalutationTypeExt($midocoSalutationTypeExt);
    }
    /**
     * Get MidocoSalutationTypeExt value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SalutationTypeExtDTO[]
     */
    public function getMidocoSalutationTypeExt(): ?array
    {
        return $this->MidocoSalutationTypeExt;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSalutationTypeExt method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSalutationTypeExt method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSalutationTypeExtForArrayConstraintsFromSetMidocoSalutationTypeExt(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSalutationTypesResponseMidocoSalutationTypeExtItem) {
            // validation for constraint: itemType
            if (!$getSalutationTypesResponseMidocoSalutationTypeExtItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\SalutationTypeExtDTO) {
                $invalidValues[] = is_object($getSalutationTypesResponseMidocoSalutationTypeExtItem) ? get_class($getSalutationTypesResponseMidocoSalutationTypeExtItem) : sprintf('%s(%s)', gettype($getSalutationTypesResponseMidocoSalutationTypeExtItem), var_export($getSalutationTypesResponseMidocoSalutationTypeExtItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSalutationTypeExt property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\SalutationTypeExtDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSalutationTypeExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\SalutationTypeExtDTO[] $midocoSalutationTypeExt
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetSalutationTypesResponse
     */
    public function setMidocoSalutationTypeExt(?array $midocoSalutationTypeExt = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSalutationTypeExtArrayErrorMessage = self::validateMidocoSalutationTypeExtForArrayConstraintsFromSetMidocoSalutationTypeExt($midocoSalutationTypeExt))) {
            throw new InvalidArgumentException($midocoSalutationTypeExtArrayErrorMessage, __LINE__);
        }
        $this->MidocoSalutationTypeExt = $midocoSalutationTypeExt;
        
        return $this;
    }
    /**
     * Add item to MidocoSalutationTypeExt value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\SalutationTypeExtDTO $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetSalutationTypesResponse
     */
    public function addToMidocoSalutationTypeExt(\Pggns\MidocoApi\Api\CrmSD\StructType\SalutationTypeExtDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\SalutationTypeExtDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSalutationTypeExt property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\SalutationTypeExtDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSalutationTypeExt[] = $item;
        
        return $this;
    }
}
