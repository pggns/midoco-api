<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeletePaymentConditionRequest StructType
 * @subpackage Structs
 */
class DeletePaymentConditionRequest extends AbstractStructBase
{
    /**
     * The MidocoPaymentCondition
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPaymentCondition
     * @var \Pggns\MidocoApi\CrmSD\StructType\PaymentConditionDTO[]
     */
    protected ?array $MidocoPaymentCondition = null;
    /**
     * Constructor method for DeletePaymentConditionRequest
     * @uses DeletePaymentConditionRequest::setMidocoPaymentCondition()
     * @param \Pggns\MidocoApi\CrmSD\StructType\PaymentConditionDTO[] $midocoPaymentCondition
     */
    public function __construct(?array $midocoPaymentCondition = null)
    {
        $this
            ->setMidocoPaymentCondition($midocoPaymentCondition);
    }
    /**
     * Get MidocoPaymentCondition value
     * @return \Pggns\MidocoApi\CrmSD\StructType\PaymentConditionDTO[]
     */
    public function getMidocoPaymentCondition(): ?array
    {
        return $this->MidocoPaymentCondition;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoPaymentCondition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPaymentCondition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPaymentConditionForArrayConstraintsFromSetMidocoPaymentCondition(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $deletePaymentConditionRequestMidocoPaymentConditionItem) {
            // validation for constraint: itemType
            if (!$deletePaymentConditionRequestMidocoPaymentConditionItem instanceof \Pggns\MidocoApi\CrmSD\StructType\PaymentConditionDTO) {
                $invalidValues[] = is_object($deletePaymentConditionRequestMidocoPaymentConditionItem) ? get_class($deletePaymentConditionRequestMidocoPaymentConditionItem) : sprintf('%s(%s)', gettype($deletePaymentConditionRequestMidocoPaymentConditionItem), var_export($deletePaymentConditionRequestMidocoPaymentConditionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPaymentCondition property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\PaymentConditionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPaymentCondition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\PaymentConditionDTO[] $midocoPaymentCondition
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeletePaymentConditionRequest
     */
    public function setMidocoPaymentCondition(?array $midocoPaymentCondition = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPaymentConditionArrayErrorMessage = self::validateMidocoPaymentConditionForArrayConstraintsFromSetMidocoPaymentCondition($midocoPaymentCondition))) {
            throw new InvalidArgumentException($midocoPaymentConditionArrayErrorMessage, __LINE__);
        }
        $this->MidocoPaymentCondition = $midocoPaymentCondition;
        
        return $this;
    }
    /**
     * Add item to MidocoPaymentCondition value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\PaymentConditionDTO $item
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeletePaymentConditionRequest
     */
    public function addToMidocoPaymentCondition(\Pggns\MidocoApi\CrmSD\StructType\PaymentConditionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\CrmSD\StructType\PaymentConditionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoPaymentCondition property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\PaymentConditionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPaymentCondition[] = $item;
        
        return $this;
    }
}
