<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAutoBillingMatrixRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: returns a list of AutoBillingMatrixDTO
 * @subpackage Structs
 */
class SaveAutoBillingMatrixRequest extends AbstractStructBase
{
    /**
     * The MidocoAutoBillingMatrix
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAutoBillingMatrix
     * @var \Pggns\MidocoApi\Api\Crm\StructType\AutoBillingMatrixDTO[]
     */
    protected ?array $MidocoAutoBillingMatrix = null;
    /**
     * The deleteOthers
     * @var bool|null
     */
    protected ?bool $deleteOthers = null;
    /**
     * Constructor method for SaveAutoBillingMatrixRequest
     * @uses SaveAutoBillingMatrixRequest::setMidocoAutoBillingMatrix()
     * @uses SaveAutoBillingMatrixRequest::setDeleteOthers()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\AutoBillingMatrixDTO[] $midocoAutoBillingMatrix
     * @param bool $deleteOthers
     */
    public function __construct(?array $midocoAutoBillingMatrix = null, ?bool $deleteOthers = null)
    {
        $this
            ->setMidocoAutoBillingMatrix($midocoAutoBillingMatrix)
            ->setDeleteOthers($deleteOthers);
    }
    /**
     * Get MidocoAutoBillingMatrix value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\AutoBillingMatrixDTO[]
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
        foreach ($values as $saveAutoBillingMatrixRequestMidocoAutoBillingMatrixItem) {
            // validation for constraint: itemType
            if (!$saveAutoBillingMatrixRequestMidocoAutoBillingMatrixItem instanceof \Pggns\MidocoApi\Api\Crm\StructType\AutoBillingMatrixDTO) {
                $invalidValues[] = is_object($saveAutoBillingMatrixRequestMidocoAutoBillingMatrixItem) ? get_class($saveAutoBillingMatrixRequestMidocoAutoBillingMatrixItem) : sprintf('%s(%s)', gettype($saveAutoBillingMatrixRequestMidocoAutoBillingMatrixItem), var_export($saveAutoBillingMatrixRequestMidocoAutoBillingMatrixItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAutoBillingMatrix property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\AutoBillingMatrixDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAutoBillingMatrix value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Crm\StructType\AutoBillingMatrixDTO[] $midocoAutoBillingMatrix
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveAutoBillingMatrixRequest
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
     * @param \Pggns\MidocoApi\Api\Crm\StructType\AutoBillingMatrixDTO $item
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveAutoBillingMatrixRequest
     */
    public function addToMidocoAutoBillingMatrix(\Pggns\MidocoApi\Api\Crm\StructType\AutoBillingMatrixDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Crm\StructType\AutoBillingMatrixDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAutoBillingMatrix property can only contain items of type \Pggns\MidocoApi\Api\Crm\StructType\AutoBillingMatrixDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAutoBillingMatrix[] = $item;
        
        return $this;
    }
    /**
     * Get deleteOthers value
     * @return bool|null
     */
    public function getDeleteOthers(): ?bool
    {
        return $this->deleteOthers;
    }
    /**
     * Set deleteOthers value
     * @param bool $deleteOthers
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveAutoBillingMatrixRequest
     */
    public function setDeleteOthers(?bool $deleteOthers = null): self
    {
        // validation for constraint: boolean
        if (!is_null($deleteOthers) && !is_bool($deleteOthers)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deleteOthers, true), gettype($deleteOthers)), __LINE__);
        }
        $this->deleteOthers = $deleteOthers;
        
        return $this;
    }
}
