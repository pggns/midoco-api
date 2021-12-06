<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmailsResponse StructType
 * @subpackage Structs
 */
class GetEmailsResponse extends AbstractStructBase
{
    /**
     * The MidocoEmailList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoEmailList
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoEmailList[]
     */
    protected ?array $MidocoEmailList = null;
    /**
     * Constructor method for GetEmailsResponse
     * @uses GetEmailsResponse::setMidocoEmailList()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoEmailList[] $midocoEmailList
     */
    public function __construct(?array $midocoEmailList = null)
    {
        $this
            ->setMidocoEmailList($midocoEmailList);
    }
    /**
     * Get MidocoEmailList value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoEmailList[]
     */
    public function getMidocoEmailList(): ?array
    {
        return $this->MidocoEmailList;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoEmailList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoEmailList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoEmailListForArrayConstraintsFromSetMidocoEmailList(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getEmailsResponseMidocoEmailListItem) {
            // validation for constraint: itemType
            if (!$getEmailsResponseMidocoEmailListItem instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoEmailList) {
                $invalidValues[] = is_object($getEmailsResponseMidocoEmailListItem) ? get_class($getEmailsResponseMidocoEmailListItem) : sprintf('%s(%s)', gettype($getEmailsResponseMidocoEmailListItem), var_export($getEmailsResponseMidocoEmailListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoEmailList property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoEmailList, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoEmailList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoEmailList[] $midocoEmailList
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetEmailsResponse
     */
    public function setMidocoEmailList(?array $midocoEmailList = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoEmailListArrayErrorMessage = self::validateMidocoEmailListForArrayConstraintsFromSetMidocoEmailList($midocoEmailList))) {
            throw new InvalidArgumentException($midocoEmailListArrayErrorMessage, __LINE__);
        }
        $this->MidocoEmailList = $midocoEmailList;
        
        return $this;
    }
    /**
     * Add item to MidocoEmailList value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoEmailList $item
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetEmailsResponse
     */
    public function addToMidocoEmailList(\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoEmailList $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoEmailList) {
            throw new InvalidArgumentException(sprintf('The MidocoEmailList property can only contain items of type \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoEmailList, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoEmailList[] = $item;
        
        return $this;
    }
}
