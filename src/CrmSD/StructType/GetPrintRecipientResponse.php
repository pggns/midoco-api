<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintRecipientResponse StructType
 * @subpackage Structs
 */
class GetPrintRecipientResponse extends AbstractStructBase
{
    /**
     * The MidocoPrintRecipient
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoPrintRecipient
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoPrintRecipient[]
     */
    protected ?array $MidocoPrintRecipient = null;
    /**
     * Constructor method for GetPrintRecipientResponse
     * @uses GetPrintRecipientResponse::setMidocoPrintRecipient()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoPrintRecipient[] $midocoPrintRecipient
     */
    public function __construct(?array $midocoPrintRecipient = null)
    {
        $this
            ->setMidocoPrintRecipient($midocoPrintRecipient);
    }
    /**
     * Get MidocoPrintRecipient value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoPrintRecipient[]
     */
    public function getMidocoPrintRecipient(): ?array
    {
        return $this->MidocoPrintRecipient;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoPrintRecipient method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPrintRecipient method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPrintRecipientForArrayConstraintsFromSetMidocoPrintRecipient(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPrintRecipientResponseMidocoPrintRecipientItem) {
            // validation for constraint: itemType
            if (!$getPrintRecipientResponseMidocoPrintRecipientItem instanceof \Pggns\MidocoApi\CrmSD\StructType\MidocoPrintRecipient) {
                $invalidValues[] = is_object($getPrintRecipientResponseMidocoPrintRecipientItem) ? get_class($getPrintRecipientResponseMidocoPrintRecipientItem) : sprintf('%s(%s)', gettype($getPrintRecipientResponseMidocoPrintRecipientItem), var_export($getPrintRecipientResponseMidocoPrintRecipientItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPrintRecipient property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\MidocoPrintRecipient, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPrintRecipient value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoPrintRecipient[] $midocoPrintRecipient
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetPrintRecipientResponse
     */
    public function setMidocoPrintRecipient(?array $midocoPrintRecipient = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPrintRecipientArrayErrorMessage = self::validateMidocoPrintRecipientForArrayConstraintsFromSetMidocoPrintRecipient($midocoPrintRecipient))) {
            throw new InvalidArgumentException($midocoPrintRecipientArrayErrorMessage, __LINE__);
        }
        $this->MidocoPrintRecipient = $midocoPrintRecipient;
        
        return $this;
    }
    /**
     * Add item to MidocoPrintRecipient value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoPrintRecipient $item
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetPrintRecipientResponse
     */
    public function addToMidocoPrintRecipient(\Pggns\MidocoApi\CrmSD\StructType\MidocoPrintRecipient $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\CrmSD\StructType\MidocoPrintRecipient) {
            throw new InvalidArgumentException(sprintf('The MidocoPrintRecipient property can only contain items of type \Pggns\MidocoApi\CrmSD\StructType\MidocoPrintRecipient, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPrintRecipient[] = $item;
        
        return $this;
    }
}
