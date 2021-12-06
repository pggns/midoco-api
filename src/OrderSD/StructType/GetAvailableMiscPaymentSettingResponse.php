<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableMiscPaymentSettingResponse StructType
 * @subpackage Structs
 */
class GetAvailableMiscPaymentSettingResponse extends AbstractStructBase
{
    /**
     * The MidocoMiscPaymentSetting
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMiscPaymentSetting
     * @var \Pggns\MidocoApi\OrderSD\StructType\CashPaymentSettingDTO[]
     */
    protected ?array $MidocoMiscPaymentSetting = null;
    /**
     * Constructor method for GetAvailableMiscPaymentSettingResponse
     * @uses GetAvailableMiscPaymentSettingResponse::setMidocoMiscPaymentSetting()
     * @param \Pggns\MidocoApi\OrderSD\StructType\CashPaymentSettingDTO[] $midocoMiscPaymentSetting
     */
    public function __construct(?array $midocoMiscPaymentSetting = null)
    {
        $this
            ->setMidocoMiscPaymentSetting($midocoMiscPaymentSetting);
    }
    /**
     * Get MidocoMiscPaymentSetting value
     * @return \Pggns\MidocoApi\OrderSD\StructType\CashPaymentSettingDTO[]
     */
    public function getMidocoMiscPaymentSetting(): ?array
    {
        return $this->MidocoMiscPaymentSetting;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMiscPaymentSetting method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMiscPaymentSetting method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMiscPaymentSettingForArrayConstraintsFromSetMidocoMiscPaymentSetting(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableMiscPaymentSettingResponseMidocoMiscPaymentSettingItem) {
            // validation for constraint: itemType
            if (!$getAvailableMiscPaymentSettingResponseMidocoMiscPaymentSettingItem instanceof \Pggns\MidocoApi\OrderSD\StructType\CashPaymentSettingDTO) {
                $invalidValues[] = is_object($getAvailableMiscPaymentSettingResponseMidocoMiscPaymentSettingItem) ? get_class($getAvailableMiscPaymentSettingResponseMidocoMiscPaymentSettingItem) : sprintf('%s(%s)', gettype($getAvailableMiscPaymentSettingResponseMidocoMiscPaymentSettingItem), var_export($getAvailableMiscPaymentSettingResponseMidocoMiscPaymentSettingItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMiscPaymentSetting property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\CashPaymentSettingDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMiscPaymentSetting value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderSD\StructType\CashPaymentSettingDTO[] $midocoMiscPaymentSetting
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAvailableMiscPaymentSettingResponse
     */
    public function setMidocoMiscPaymentSetting(?array $midocoMiscPaymentSetting = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMiscPaymentSettingArrayErrorMessage = self::validateMidocoMiscPaymentSettingForArrayConstraintsFromSetMidocoMiscPaymentSetting($midocoMiscPaymentSetting))) {
            throw new InvalidArgumentException($midocoMiscPaymentSettingArrayErrorMessage, __LINE__);
        }
        $this->MidocoMiscPaymentSetting = $midocoMiscPaymentSetting;
        
        return $this;
    }
    /**
     * Add item to MidocoMiscPaymentSetting value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\OrderSD\StructType\CashPaymentSettingDTO $item
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetAvailableMiscPaymentSettingResponse
     */
    public function addToMidocoMiscPaymentSetting(\Pggns\MidocoApi\OrderSD\StructType\CashPaymentSettingDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\OrderSD\StructType\CashPaymentSettingDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoMiscPaymentSetting property can only contain items of type \Pggns\MidocoApi\OrderSD\StructType\CashPaymentSettingDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMiscPaymentSetting[] = $item;
        
        return $this;
    }
}
