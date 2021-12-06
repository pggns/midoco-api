<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindCustomerForEmailResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: A list of customers. An exception is thrown if the customer is not found
 * @subpackage Structs
 */
class FindCustomerForEmailResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoCustomerInfo
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCustomerInfo[]
     */
    protected ?array $MidocoCustomerInfo = null;
    /**
     * Constructor method for FindCustomerForEmailResponse
     * @uses FindCustomerForEmailResponse::setMidocoCustomerInfo()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerInfo[] $midocoCustomerInfo
     */
    public function __construct(?array $midocoCustomerInfo = null)
    {
        $this
            ->setMidocoCustomerInfo($midocoCustomerInfo);
    }
    /**
     * Get MidocoCustomerInfo value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerInfo[]
     */
    public function getMidocoCustomerInfo(): ?array
    {
        return $this->MidocoCustomerInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoCustomerInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoCustomerInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoCustomerInfoForArrayConstraintsFromSetMidocoCustomerInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $findCustomerForEmailResponseMidocoCustomerInfoItem) {
            // validation for constraint: itemType
            if (!$findCustomerForEmailResponseMidocoCustomerInfoItem instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCustomerInfo) {
                $invalidValues[] = is_object($findCustomerForEmailResponseMidocoCustomerInfoItem) ? get_class($findCustomerForEmailResponseMidocoCustomerInfoItem) : sprintf('%s(%s)', gettype($findCustomerForEmailResponseMidocoCustomerInfoItem), var_export($findCustomerForEmailResponseMidocoCustomerInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoCustomerInfo property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCustomerInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoCustomerInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerInfo[] $midocoCustomerInfo
     * @return \Pggns\MidocoApi\Crm\StructType\FindCustomerForEmailResponse
     */
    public function setMidocoCustomerInfo(?array $midocoCustomerInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoCustomerInfoArrayErrorMessage = self::validateMidocoCustomerInfoForArrayConstraintsFromSetMidocoCustomerInfo($midocoCustomerInfo))) {
            throw new InvalidArgumentException($midocoCustomerInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoCustomerInfo = $midocoCustomerInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoCustomerInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerInfo $item
     * @return \Pggns\MidocoApi\Crm\StructType\FindCustomerForEmailResponse
     */
    public function addToMidocoCustomerInfo(\Pggns\MidocoApi\Crm\StructType\MidocoCustomerInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Crm\StructType\MidocoCustomerInfo) {
            throw new InvalidArgumentException(sprintf('The MidocoCustomerInfo property can only contain items of type \Pggns\MidocoApi\Crm\StructType\MidocoCustomerInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoCustomerInfo[] = $item;
        
        return $this;
    }
}
