<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerErrorsResponse StructType
 * @subpackage Structs
 */
class GetCustomerErrorsResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerError
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustomerError
     * @var \Pggns\MidocoApi\CrmSD\StructType\CustomerErrorDTO[]
     */
    protected ?array $MidocoCustomerError = null;
    /**
     * Constructor method for GetCustomerErrorsResponse
     * @uses GetCustomerErrorsResponse::setMidocoCustomerError()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CustomerErrorDTO[] $midocoCustomerError
     */
    public function __construct(?array $midocoCustomerError = null)
    {
        $this
            ->setMidocoCustomerError($midocoCustomerError);
    }
    /**
     * Get MidocoCustomerError value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CustomerErrorDTO[]
     */
    public function getMidocoCustomerError(): ?array
    {
        return $this->MidocoCustomerError;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCustomerError method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerError method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerErrorForArrayConstraintsFromSetMidocoCustomerError(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getCustomerErrorsResponseMidocoCustomerErrorItem) {
            // validation for constraint: itemType
            if (!$getCustomerErrorsResponseMidocoCustomerErrorItem instanceof \Pggns\MidocoApi\CrmSD\StructType\CustomerErrorDTO) {
                $invalidValues[] = is_object($getCustomerErrorsResponseMidocoCustomerErrorItem) ? get_class($getCustomerErrorsResponseMidocoCustomerErrorItem) : sprintf('%s(%s)', gettype($getCustomerErrorsResponseMidocoCustomerErrorItem), var_export($getCustomerErrorsResponseMidocoCustomerErrorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerError property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\CustomerErrorDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerError value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\CustomerErrorDTO[] $midocoCustomerError
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetCustomerErrorsResponse
     */
    public function setMidocoCustomerError(?array $midocoCustomerError = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerErrorArrayErrorMessage = self::validateMidocoCustomerErrorForArrayConstraintsFromSetMidocoCustomerError($midocoCustomerError))) {
            throw new InvalidArgumentException($midocoCustomerErrorArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerError = $midocoCustomerError;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerError value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\CustomerErrorDTO $item
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetCustomerErrorsResponse
     */
    public function addToMidocoCustomerError(\Pggns\MidocoApi\CrmSD\StructType\CustomerErrorDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\CrmSD\StructType\CustomerErrorDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerError property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\CustomerErrorDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerError[] = $item;
        
        return $this;
    }
}
