<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCustomerMfResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: saveCustomerMf --- saves a mf (or more) for a customer
 * @subpackage Structs
 */
class SaveCustomerMfResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerMf
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoCustomerMf
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerMfDTO[]
     */
    protected ?array $MidocoCustomerMf = null;
    /**
     * Constructor method for SaveCustomerMfResponse
     * @uses SaveCustomerMfResponse::setMidocoCustomerMf()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerMfDTO[] $midocoCustomerMf
     */
    public function __construct(?array $midocoCustomerMf = null)
    {
        $this
            ->setMidocoCustomerMf($midocoCustomerMf);
    }
    /**
     * Get MidocoCustomerMf value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerMfDTO[]
     */
    public function getMidocoCustomerMf(): ?array
    {
        return $this->MidocoCustomerMf;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCustomerMf method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerMf method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerMfForArrayConstraintsFromSetMidocoCustomerMf(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveCustomerMfResponseMidocoCustomerMfItem) {
            // validation for constraint: itemType
            if (!$saveCustomerMfResponseMidocoCustomerMfItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerMfDTO) {
                $invalidValues[] = is_object($saveCustomerMfResponseMidocoCustomerMfItem) ? get_class($saveCustomerMfResponseMidocoCustomerMfItem) : sprintf('%s(%s)', gettype($saveCustomerMfResponseMidocoCustomerMfItem), var_export($saveCustomerMfResponseMidocoCustomerMfItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerMf property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerMfDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerMf value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerMfDTO[] $midocoCustomerMf
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveCustomerMfResponse
     */
    public function setMidocoCustomerMf(?array $midocoCustomerMf = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerMfArrayErrorMessage = self::validateMidocoCustomerMfForArrayConstraintsFromSetMidocoCustomerMf($midocoCustomerMf))) {
            throw new InvalidArgumentException($midocoCustomerMfArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerMf = $midocoCustomerMf;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerMf value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerMfDTO $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveCustomerMfResponse
     */
    public function addToMidocoCustomerMf(\Pggns\MidocoApi\Api\CrmSD\StructType\CustomerMfDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerMfDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerMf property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\CustomerMfDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerMf[] = $item;
        
        return $this;
    }
}
