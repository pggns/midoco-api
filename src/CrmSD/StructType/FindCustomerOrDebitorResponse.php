<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindCustomerOrDebitorResponse StructType
 * @subpackage Structs
 */
class FindCustomerOrDebitorResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerSearch
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerSearch
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerSearch[]
     */
    protected ?array $MidocoCustomerSearch = null;
    /**
     * Constructor method for FindCustomerOrDebitorResponse
     * @uses FindCustomerOrDebitorResponse::setMidocoCustomerSearch()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerSearch[] $midocoCustomerSearch
     */
    public function __construct(?array $midocoCustomerSearch = null)
    {
        $this
            ->setMidocoCustomerSearch($midocoCustomerSearch);
    }
    /**
     * Get MidocoCustomerSearch value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerSearch[]
     */
    public function getMidocoCustomerSearch(): ?array
    {
        return $this->MidocoCustomerSearch;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCustomerSearch method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerSearch method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerSearchForArrayConstraintsFromSetMidocoCustomerSearch(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $findCustomerOrDebitorResponseMidocoCustomerSearchItem) {
            // validation for constraint: itemType
            if (!$findCustomerOrDebitorResponseMidocoCustomerSearchItem instanceof \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerSearch) {
                $invalidValues[] = is_object($findCustomerOrDebitorResponseMidocoCustomerSearchItem) ? get_class($findCustomerOrDebitorResponseMidocoCustomerSearchItem) : sprintf('%s(%s)', gettype($findCustomerOrDebitorResponseMidocoCustomerSearchItem), var_export($findCustomerOrDebitorResponseMidocoCustomerSearchItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerSearch property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerSearch, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerSearch value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerSearch[] $midocoCustomerSearch
     * @return \Pggns\MidocoApi\CrmSD\StructType\FindCustomerOrDebitorResponse
     */
    public function setMidocoCustomerSearch(?array $midocoCustomerSearch = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerSearchArrayErrorMessage = self::validateMidocoCustomerSearchForArrayConstraintsFromSetMidocoCustomerSearch($midocoCustomerSearch))) {
            throw new InvalidArgumentException($midocoCustomerSearchArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerSearch = $midocoCustomerSearch;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerSearch value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerSearch $item
     * @return \Pggns\MidocoApi\CrmSD\StructType\FindCustomerOrDebitorResponse
     */
    public function addToMidocoCustomerSearch(\Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerSearch $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerSearch) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerSearch property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\MidocoCustomerSearch, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerSearch[] = $item;
        
        return $this;
    }
}
