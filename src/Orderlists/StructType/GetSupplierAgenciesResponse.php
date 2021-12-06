<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSupplierAgenciesResponse StructType
 * @subpackage Structs
 */
class GetSupplierAgenciesResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplierAgency
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplierAgency
     * @var \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAgencyDTO[]
     */
    protected ?array $MidocoSupplierAgency = null;
    /**
     * Constructor method for GetSupplierAgenciesResponse
     * @uses GetSupplierAgenciesResponse::setMidocoSupplierAgency()
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAgencyDTO[] $midocoSupplierAgency
     */
    public function __construct(?array $midocoSupplierAgency = null)
    {
        $this
            ->setMidocoSupplierAgency($midocoSupplierAgency);
    }
    /**
     * Get MidocoSupplierAgency value
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAgencyDTO[]
     */
    public function getMidocoSupplierAgency(): ?array
    {
        return $this->MidocoSupplierAgency;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplierAgency method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplierAgency method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierAgencyForArrayConstraintsFromSetMidocoSupplierAgency(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSupplierAgenciesResponseMidocoSupplierAgencyItem) {
            // validation for constraint: itemType
            if (!$getSupplierAgenciesResponseMidocoSupplierAgencyItem instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAgencyDTO) {
                $invalidValues[] = is_object($getSupplierAgenciesResponseMidocoSupplierAgencyItem) ? get_class($getSupplierAgenciesResponseMidocoSupplierAgencyItem) : sprintf('%s(%s)', gettype($getSupplierAgenciesResponseMidocoSupplierAgencyItem), var_export($getSupplierAgenciesResponseMidocoSupplierAgencyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplierAgency property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAgencyDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplierAgency value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAgencyDTO[] $midocoSupplierAgency
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetSupplierAgenciesResponse
     */
    public function setMidocoSupplierAgency(?array $midocoSupplierAgency = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierAgencyArrayErrorMessage = self::validateMidocoSupplierAgencyForArrayConstraintsFromSetMidocoSupplierAgency($midocoSupplierAgency))) {
            throw new InvalidArgumentException($midocoSupplierAgencyArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplierAgency = $midocoSupplierAgency;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplierAgency value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAgencyDTO $item
     * @return \Pggns\MidocoApi\Api\Orderlists\StructType\GetSupplierAgenciesResponse
     */
    public function addToMidocoSupplierAgency(\Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAgencyDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAgencyDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplierAgency property can only contain items of type \Pggns\MidocoApi\Api\Orderlists\StructType\SupplierAgencyDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplierAgency[] = $item;
        
        return $this;
    }
}
