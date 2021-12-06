<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAutoBillingMatrixResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: returns a list of AutoBillingMatrixDTO
 * @subpackage Structs
 */
class GetAutoBillingMatrixResponse extends AbstractStructBase
{
    /**
     * The MidocoAutoBillingMatrix
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAutoBillingMatrix
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\AutoBillingMatrixDTO[]
     */
    protected ?array $MidocoAutoBillingMatrix = null;
    /**
     * Constructor method for GetAutoBillingMatrixResponse
     * @uses GetAutoBillingMatrixResponse::setMidocoAutoBillingMatrix()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\AutoBillingMatrixDTO[] $midocoAutoBillingMatrix
     */
    public function __construct(?array $midocoAutoBillingMatrix = null)
    {
        $this
            ->setMidocoAutoBillingMatrix($midocoAutoBillingMatrix);
    }
    /**
     * Get MidocoAutoBillingMatrix value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\AutoBillingMatrixDTO[]
     */
    public function getMidocoAutoBillingMatrix(): ?array
    {
        return $this->MidocoAutoBillingMatrix;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAutoBillingMatrix method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAutoBillingMatrix method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAutoBillingMatrixForArrayConstraintsFromSetMidocoAutoBillingMatrix(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAutoBillingMatrixResponseMidocoAutoBillingMatrixItem) {
            // validation for constraint: itemType
            if (!$getAutoBillingMatrixResponseMidocoAutoBillingMatrixItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\AutoBillingMatrixDTO) {
                $invalidValues[] = is_object($getAutoBillingMatrixResponseMidocoAutoBillingMatrixItem) ? get_class($getAutoBillingMatrixResponseMidocoAutoBillingMatrixItem) : sprintf('%s(%s)', gettype($getAutoBillingMatrixResponseMidocoAutoBillingMatrixItem), var_export($getAutoBillingMatrixResponseMidocoAutoBillingMatrixItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAutoBillingMatrix property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\AutoBillingMatrixDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAutoBillingMatrix value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\AutoBillingMatrixDTO[] $midocoAutoBillingMatrix
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetAutoBillingMatrixResponse
     */
    public function setMidocoAutoBillingMatrix(?array $midocoAutoBillingMatrix = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAutoBillingMatrixArrayErrorMessage = self::validateMidocoAutoBillingMatrixForArrayConstraintsFromSetMidocoAutoBillingMatrix($midocoAutoBillingMatrix))) {
            throw new InvalidArgumentException($midocoAutoBillingMatrixArrayErrorMessage, __LINE__);
        }
        $this->MidocoAutoBillingMatrix = $midocoAutoBillingMatrix;
        
        return $this;
    }
    /**
     * Add item to MidocoAutoBillingMatrix value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\AutoBillingMatrixDTO $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetAutoBillingMatrixResponse
     */
    public function addToMidocoAutoBillingMatrix(\Pggns\MidocoApi\Api\CrmSD\StructType\AutoBillingMatrixDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\AutoBillingMatrixDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAutoBillingMatrix property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\AutoBillingMatrixDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAutoBillingMatrix[] = $item;
        
        return $this;
    }
}
