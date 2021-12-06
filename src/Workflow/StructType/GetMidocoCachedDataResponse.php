<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Workflow\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoCachedDataResponse StructType
 * @subpackage Structs
 */
class GetMidocoCachedDataResponse extends AbstractStructBase
{
    /**
     * The data
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $data = null;
    /**
     * Constructor method for GetMidocoCachedDataResponse
     * @uses GetMidocoCachedDataResponse::setData()
     * @param string[] $data
     */
    public function __construct(?array $data = null)
    {
        $this
            ->setData($data);
    }
    /**
     * Get data value
     * @return string[]
     */
    public function getData(): ?array
    {
        return $this->data;
    }
    /**
     * This method is responsible for validating the values passed to the setData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDataForArrayConstraintsFromSetData(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoCachedDataResponseDataItem) {
            // validation for constraint: itemType
            if (!is_string($getMidocoCachedDataResponseDataItem)) {
                $invalidValues[] = is_object($getMidocoCachedDataResponseDataItem) ? get_class($getMidocoCachedDataResponseDataItem) : sprintf('%s(%s)', gettype($getMidocoCachedDataResponseDataItem), var_export($getMidocoCachedDataResponseDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The data property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set data value
     * @throws InvalidArgumentException
     * @param string[] $data
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\GetMidocoCachedDataResponse
     */
    public function setData(?array $data = null): self
    {
        // validation for constraint: array
        if ('' !== ($dataArrayErrorMessage = self::validateDataForArrayConstraintsFromSetData($data))) {
            throw new InvalidArgumentException($dataArrayErrorMessage, __LINE__);
        }
        $this->data = $data;
        
        return $this;
    }
    /**
     * Add item to data value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Api\Workflow\StructType\GetMidocoCachedDataResponse
     */
    public function addToData(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The data property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->data[] = $item;
        
        return $this;
    }
}
