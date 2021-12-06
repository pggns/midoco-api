<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetLastImportedCrsRemarksResponse StructType
 * @subpackage Structs
 */
class GetLastImportedCrsRemarksResponse extends AbstractStructBase
{
    /**
     * The MidocoImportedCrsRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoImportedCrsRemark
     * @var \Pggns\MidocoApi\Api\Order\StructType\ImportedCrsRemarkDTO[]
     */
    protected ?array $MidocoImportedCrsRemark = null;
    /**
     * Constructor method for GetLastImportedCrsRemarksResponse
     * @uses GetLastImportedCrsRemarksResponse::setMidocoImportedCrsRemark()
     * @param \Pggns\MidocoApi\Api\Order\StructType\ImportedCrsRemarkDTO[] $midocoImportedCrsRemark
     */
    public function __construct(?array $midocoImportedCrsRemark = null)
    {
        $this
            ->setMidocoImportedCrsRemark($midocoImportedCrsRemark);
    }
    /**
     * Get MidocoImportedCrsRemark value
     * @return \Pggns\MidocoApi\Api\Order\StructType\ImportedCrsRemarkDTO[]
     */
    public function getMidocoImportedCrsRemark(): ?array
    {
        return $this->MidocoImportedCrsRemark;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoImportedCrsRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoImportedCrsRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoImportedCrsRemarkForArrayConstraintsFromSetMidocoImportedCrsRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getLastImportedCrsRemarksResponseMidocoImportedCrsRemarkItem) {
            // validation for constraint: itemType
            if (!$getLastImportedCrsRemarksResponseMidocoImportedCrsRemarkItem instanceof \Pggns\MidocoApi\Api\Order\StructType\ImportedCrsRemarkDTO) {
                $invalidValues[] = is_object($getLastImportedCrsRemarksResponseMidocoImportedCrsRemarkItem) ? get_class($getLastImportedCrsRemarksResponseMidocoImportedCrsRemarkItem) : sprintf('%s(%s)', gettype($getLastImportedCrsRemarksResponseMidocoImportedCrsRemarkItem), var_export($getLastImportedCrsRemarksResponseMidocoImportedCrsRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoImportedCrsRemark property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\ImportedCrsRemarkDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoImportedCrsRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\ImportedCrsRemarkDTO[] $midocoImportedCrsRemark
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetLastImportedCrsRemarksResponse
     */
    public function setMidocoImportedCrsRemark(?array $midocoImportedCrsRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoImportedCrsRemarkArrayErrorMessage = self::validateMidocoImportedCrsRemarkForArrayConstraintsFromSetMidocoImportedCrsRemark($midocoImportedCrsRemark))) {
            throw new InvalidArgumentException($midocoImportedCrsRemarkArrayErrorMessage, __LINE__);
        }
        $this->MidocoImportedCrsRemark = $midocoImportedCrsRemark;
        
        return $this;
    }
    /**
     * Add item to MidocoImportedCrsRemark value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Order\StructType\ImportedCrsRemarkDTO $item
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetLastImportedCrsRemarksResponse
     */
    public function addToMidocoImportedCrsRemark(\Pggns\MidocoApi\Api\Order\StructType\ImportedCrsRemarkDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Order\StructType\ImportedCrsRemarkDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoImportedCrsRemark property can only contain items of type \Pggns\MidocoApi\Api\Order\StructType\ImportedCrsRemarkDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoImportedCrsRemark[] = $item;
        
        return $this;
    }
}
