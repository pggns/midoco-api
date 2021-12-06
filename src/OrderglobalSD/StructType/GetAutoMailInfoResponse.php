<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAutoMailInfoResponse StructType
 * @subpackage Structs
 */
class GetAutoMailInfoResponse extends AbstractStructBase
{
    /**
     * The MidocoAutoMailInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoAutoMailInfo
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\AutoMailDTO[]
     */
    protected ?array $MidocoAutoMailInfo = null;
    /**
     * Constructor method for GetAutoMailInfoResponse
     * @uses GetAutoMailInfoResponse::setMidocoAutoMailInfo()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\AutoMailDTO[] $midocoAutoMailInfo
     */
    public function __construct(?array $midocoAutoMailInfo = null)
    {
        $this
            ->setMidocoAutoMailInfo($midocoAutoMailInfo);
    }
    /**
     * Get MidocoAutoMailInfo value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\AutoMailDTO[]
     */
    public function getMidocoAutoMailInfo(): ?array
    {
        return $this->MidocoAutoMailInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoAutoMailInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoAutoMailInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoAutoMailInfoForArrayConstraintsFromSetMidocoAutoMailInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAutoMailInfoResponseMidocoAutoMailInfoItem) {
            // validation for constraint: itemType
            if (!$getAutoMailInfoResponseMidocoAutoMailInfoItem instanceof \Pggns\MidocoApi\OrderglobalSD\StructType\AutoMailDTO) {
                $invalidValues[] = is_object($getAutoMailInfoResponseMidocoAutoMailInfoItem) ? get_class($getAutoMailInfoResponseMidocoAutoMailInfoItem) : sprintf('%s(%s)', gettype($getAutoMailInfoResponseMidocoAutoMailInfoItem), var_export($getAutoMailInfoResponseMidocoAutoMailInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoAutoMailInfo property can only contain items of type \Pggns\MidocoApi\OrderglobalSD\StructType\AutoMailDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoAutoMailInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\AutoMailDTO[] $midocoAutoMailInfo
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\GetAutoMailInfoResponse
     */
    public function setMidocoAutoMailInfo(?array $midocoAutoMailInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoAutoMailInfoArrayErrorMessage = self::validateMidocoAutoMailInfoForArrayConstraintsFromSetMidocoAutoMailInfo($midocoAutoMailInfo))) {
            throw new InvalidArgumentException($midocoAutoMailInfoArrayErrorMessage, __LINE__);
        }
        $this->MidocoAutoMailInfo = $midocoAutoMailInfo;
        
        return $this;
    }
    /**
     * Add item to MidocoAutoMailInfo value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\AutoMailDTO $item
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\GetAutoMailInfoResponse
     */
    public function addToMidocoAutoMailInfo(\Pggns\MidocoApi\OrderglobalSD\StructType\AutoMailDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\OrderglobalSD\StructType\AutoMailDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoAutoMailInfo property can only contain items of type \Pggns\MidocoApi\OrderglobalSD\StructType\AutoMailDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoAutoMailInfo[] = $item;
        
        return $this;
    }
}
