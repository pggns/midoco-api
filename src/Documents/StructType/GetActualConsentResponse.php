<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetActualConsentResponse StructType
 * @subpackage Structs
 */
class GetActualConsentResponse extends AbstractStructBase
{
    /**
     * The MidocoConsent
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoConsent
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoConsent[]
     */
    protected ?array $MidocoConsent = null;
    /**
     * Constructor method for GetActualConsentResponse
     * @uses GetActualConsentResponse::setMidocoConsent()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoConsent[] $midocoConsent
     */
    public function __construct(?array $midocoConsent = null)
    {
        $this
            ->setMidocoConsent($midocoConsent);
    }
    /**
     * Get MidocoConsent value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoConsent[]
     */
    public function getMidocoConsent(): ?array
    {
        return $this->MidocoConsent;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoConsent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoConsent method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoConsentForArrayConstraintsFromSetMidocoConsent(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getActualConsentResponseMidocoConsentItem) {
            // validation for constraint: itemType
            if (!$getActualConsentResponseMidocoConsentItem instanceof \Pggns\MidocoApi\Documents\StructType\MidocoConsent) {
                $invalidValues[] = is_object($getActualConsentResponseMidocoConsentItem) ? get_class($getActualConsentResponseMidocoConsentItem) : sprintf('%s(%s)', gettype($getActualConsentResponseMidocoConsentItem), var_export($getActualConsentResponseMidocoConsentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoConsent property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoConsent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoConsent value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoConsent[] $midocoConsent
     * @return \Pggns\MidocoApi\Documents\StructType\GetActualConsentResponse
     */
    public function setMidocoConsent(?array $midocoConsent = null): self
    {
        // validation for constraint: array
        if ('' !== ($midocoConsentArrayErrorMessage = self::validateMidocoConsentForArrayConstraintsFromSetMidocoConsent($midocoConsent))) {
            throw new InvalidArgumentException($midocoConsentArrayErrorMessage, __LINE__);
        }
        $this->MidocoConsent = $midocoConsent;
        
        return $this;
    }
    /**
     * Add item to MidocoConsent value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoConsent $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetActualConsentResponse
     */
    public function addToMidocoConsent(\Pggns\MidocoApi\Documents\StructType\MidocoConsent $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\MidocoConsent) {
            throw new InvalidArgumentException(sprintf('The MidocoConsent property can only contain items of type \Pggns\MidocoApi\Documents\StructType\MidocoConsent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoConsent[] = $item;
        
        return $this;
    }
}
