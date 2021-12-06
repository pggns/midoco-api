<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDeleteReasons4CustomerResponse StructType
 * @subpackage Structs
 */
class GetDeleteReasons4CustomerResponse extends AbstractStructBase
{
    /**
     * The MidocoCustDeleteReasonDescr
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoCustDeleteReasonDescr
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CustDeleteReasonDescrDTO[]
     */
    protected ?array $MidocoCustDeleteReasonDescr = null;
    /**
     * Constructor method for GetDeleteReasons4CustomerResponse
     * @uses GetDeleteReasons4CustomerResponse::setMidocoCustDeleteReasonDescr()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CustDeleteReasonDescrDTO[] $midocoCustDeleteReasonDescr
     */
    public function __construct(?array $midocoCustDeleteReasonDescr = null)
    {
        $this
            ->setMidocoCustDeleteReasonDescr($midocoCustDeleteReasonDescr);
    }
    /**
     * Get MidocoCustDeleteReasonDescr value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CustDeleteReasonDescrDTO[]
     */
    public function getMidocoCustDeleteReasonDescr(): ?array
    {
        return $this->MidocoCustDeleteReasonDescr;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCustDeleteReasonDescr method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustDeleteReasonDescr method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustDeleteReasonDescrForArrayConstraintsFromSetMidocoCustDeleteReasonDescr(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getDeleteReasons4CustomerResponseMidocoCustDeleteReasonDescrItem) {
            // validation for constraint: itemType
            if (!$getDeleteReasons4CustomerResponseMidocoCustDeleteReasonDescrItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\CustDeleteReasonDescrDTO) {
                $invalidValues[] = is_object($getDeleteReasons4CustomerResponseMidocoCustDeleteReasonDescrItem) ? get_class($getDeleteReasons4CustomerResponseMidocoCustDeleteReasonDescrItem) : sprintf('%s(%s)', gettype($getDeleteReasons4CustomerResponseMidocoCustDeleteReasonDescrItem), var_export($getDeleteReasons4CustomerResponseMidocoCustDeleteReasonDescrItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustDeleteReasonDescr property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\CustDeleteReasonDescrDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustDeleteReasonDescr value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CustDeleteReasonDescrDTO[] $midocoCustDeleteReasonDescr
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetDeleteReasons4CustomerResponse
     */
    public function setMidocoCustDeleteReasonDescr(?array $midocoCustDeleteReasonDescr = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustDeleteReasonDescrArrayErrorMessage = self::validateMidocoCustDeleteReasonDescrForArrayConstraintsFromSetMidocoCustDeleteReasonDescr($midocoCustDeleteReasonDescr))) {
            throw new InvalidArgumentException($midocoCustDeleteReasonDescrArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustDeleteReasonDescr = $midocoCustDeleteReasonDescr;
        
        return $this;
    }
    /**
     * Add item to MidocoCustDeleteReasonDescr value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CustDeleteReasonDescrDTO $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetDeleteReasons4CustomerResponse
     */
    public function addToMidocoCustDeleteReasonDescr(\Pggns\MidocoApi\Api\CrmSD\StructType\CustDeleteReasonDescrDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\CustDeleteReasonDescrDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoCustDeleteReasonDescr property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\CustDeleteReasonDescrDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustDeleteReasonDescr[] = $item;
        
        return $this;
    }
}
