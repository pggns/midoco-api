<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Booking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoSystemOrgunitClosingResponse StructType
 * @subpackage Structs
 */
class GetMidocoSystemOrgunitClosingResponse extends AbstractStructBase
{
    /**
     * The MidocoSystemOrgunitClosing
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSystemOrgunitClosing
     * @var \Pggns\MidocoApi\Api\Booking\StructType\OrgunitClosingDTO[]
     */
    protected ?array $MidocoSystemOrgunitClosing = null;
    /**
     * Constructor method for GetMidocoSystemOrgunitClosingResponse
     * @uses GetMidocoSystemOrgunitClosingResponse::setMidocoSystemOrgunitClosing()
     * @param \Pggns\MidocoApi\Api\Booking\StructType\OrgunitClosingDTO[] $midocoSystemOrgunitClosing
     */
    public function __construct(?array $midocoSystemOrgunitClosing = null)
    {
        $this
            ->setMidocoSystemOrgunitClosing($midocoSystemOrgunitClosing);
    }
    /**
     * Get MidocoSystemOrgunitClosing value
     * @return \Pggns\MidocoApi\Api\Booking\StructType\OrgunitClosingDTO[]
     */
    public function getMidocoSystemOrgunitClosing(): ?array
    {
        return $this->MidocoSystemOrgunitClosing;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSystemOrgunitClosing method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSystemOrgunitClosing method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSystemOrgunitClosingForArrayConstraintsFromSetMidocoSystemOrgunitClosing(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoSystemOrgunitClosingResponseMidocoSystemOrgunitClosingItem) {
            // validation for constraint: itemType
            if (!$getMidocoSystemOrgunitClosingResponseMidocoSystemOrgunitClosingItem instanceof \Pggns\MidocoApi\Api\Booking\StructType\OrgunitClosingDTO) {
                $invalidValues[] = is_object($getMidocoSystemOrgunitClosingResponseMidocoSystemOrgunitClosingItem) ? get_class($getMidocoSystemOrgunitClosingResponseMidocoSystemOrgunitClosingItem) : sprintf('%s(%s)', gettype($getMidocoSystemOrgunitClosingResponseMidocoSystemOrgunitClosingItem), var_export($getMidocoSystemOrgunitClosingResponseMidocoSystemOrgunitClosingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSystemOrgunitClosing property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\OrgunitClosingDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSystemOrgunitClosing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\OrgunitClosingDTO[] $midocoSystemOrgunitClosing
     * @return \Pggns\MidocoApi\Api\Booking\StructType\GetMidocoSystemOrgunitClosingResponse
     */
    public function setMidocoSystemOrgunitClosing(?array $midocoSystemOrgunitClosing = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSystemOrgunitClosingArrayErrorMessage = self::validateMidocoSystemOrgunitClosingForArrayConstraintsFromSetMidocoSystemOrgunitClosing($midocoSystemOrgunitClosing))) {
            throw new InvalidArgumentException($midocoSystemOrgunitClosingArrayErrorMessage, __LINE__);
        }
        $this->MidocoSystemOrgunitClosing = $midocoSystemOrgunitClosing;
        
        return $this;
    }
    /**
     * Add item to MidocoSystemOrgunitClosing value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\Booking\StructType\OrgunitClosingDTO $item
     * @return \Pggns\MidocoApi\Api\Booking\StructType\GetMidocoSystemOrgunitClosingResponse
     */
    public function addToMidocoSystemOrgunitClosing(\Pggns\MidocoApi\Api\Booking\StructType\OrgunitClosingDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\Booking\StructType\OrgunitClosingDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoSystemOrgunitClosing property can only contain items of type \Pggns\MidocoApi\Api\Booking\StructType\OrgunitClosingDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSystemOrgunitClosing[] = $item;
        
        return $this;
    }
}
