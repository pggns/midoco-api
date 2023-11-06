<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSignatureLocationsResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetSignatureLocationsResponse extends AbstractStructBase
{
    /**
     * The MidocoSignatureDoc
     * Meta information extracted from the WSDL
     * - ref: MidocoSignatureDoc
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc $MidocoSignatureDoc = null;
    /**
     * The SignatureLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: SignatureLocation
     * @var \Pggns\MidocoApi\Documents\StructType\SignatureLocation[]
     */
    protected ?array $SignatureLocation = null;
    /**
     * The AutoFillLocation
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: AutoFillLocation
     * @var \Pggns\MidocoApi\Documents\StructType\AutoFillLocation[]
     */
    protected ?array $AutoFillLocation = null;
    /**
     * Constructor method for GetSignatureLocationsResponse
     * @uses GetSignatureLocationsResponse::setMidocoSignatureDoc()
     * @uses GetSignatureLocationsResponse::setSignatureLocation()
     * @uses GetSignatureLocationsResponse::setAutoFillLocation()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc $midocoSignatureDoc
     * @param \Pggns\MidocoApi\Documents\StructType\SignatureLocation[] $signatureLocation
     * @param \Pggns\MidocoApi\Documents\StructType\AutoFillLocation[] $autoFillLocation
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc $midocoSignatureDoc = null, ?array $signatureLocation = null, ?array $autoFillLocation = null)
    {
        $this
            ->setMidocoSignatureDoc($midocoSignatureDoc)
            ->setSignatureLocation($signatureLocation)
            ->setAutoFillLocation($autoFillLocation);
    }
    /**
     * Get MidocoSignatureDoc value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc|null
     */
    public function getMidocoSignatureDoc(): ?\Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc
    {
        return $this->MidocoSignatureDoc;
    }
    /**
     * Set MidocoSignatureDoc value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc $midocoSignatureDoc
     * @return \Pggns\MidocoApi\Documents\StructType\GetSignatureLocationsResponse
     */
    public function setMidocoSignatureDoc(?\Pggns\MidocoApi\Documents\StructType\MidocoSignatureDoc $midocoSignatureDoc = null): self
    {
        $this->MidocoSignatureDoc = $midocoSignatureDoc;
        
        return $this;
    }
    /**
     * Get SignatureLocation value
     * @return \Pggns\MidocoApi\Documents\StructType\SignatureLocation[]
     */
    public function getSignatureLocation(): ?array
    {
        return $this->SignatureLocation;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setSignatureLocation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSignatureLocation method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSignatureLocationForArrayConstraintFromSetSignatureLocation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSignatureLocationsResponseSignatureLocationItem) {
            // validation for constraint: itemType
            if (!$getSignatureLocationsResponseSignatureLocationItem instanceof \Pggns\MidocoApi\Documents\StructType\SignatureLocation) {
                $invalidValues[] = is_object($getSignatureLocationsResponseSignatureLocationItem) ? get_class($getSignatureLocationsResponseSignatureLocationItem) : sprintf('%s(%s)', gettype($getSignatureLocationsResponseSignatureLocationItem), var_export($getSignatureLocationsResponseSignatureLocationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SignatureLocation property can only contain items of type \Pggns\MidocoApi\Documents\StructType\SignatureLocation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SignatureLocation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\SignatureLocation[] $signatureLocation
     * @return \Pggns\MidocoApi\Documents\StructType\GetSignatureLocationsResponse
     */
    public function setSignatureLocation(?array $signatureLocation = null): self
    {
        // validation for constraint: array
        if ('' !== ($signatureLocationArrayErrorMessage = self::validateSignatureLocationForArrayConstraintFromSetSignatureLocation($signatureLocation))) {
            throw new InvalidArgumentException($signatureLocationArrayErrorMessage, __LINE__);
        }
        $this->SignatureLocation = $signatureLocation;
        
        return $this;
    }
    /**
     * Add item to SignatureLocation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\SignatureLocation $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetSignatureLocationsResponse
     */
    public function addToSignatureLocation(\Pggns\MidocoApi\Documents\StructType\SignatureLocation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\SignatureLocation) {
            throw new InvalidArgumentException(sprintf('The SignatureLocation property can only contain items of type \Pggns\MidocoApi\Documents\StructType\SignatureLocation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->SignatureLocation[] = $item;
        
        return $this;
    }
    /**
     * Get AutoFillLocation value
     * @return \Pggns\MidocoApi\Documents\StructType\AutoFillLocation[]
     */
    public function getAutoFillLocation(): ?array
    {
        return $this->AutoFillLocation;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAutoFillLocation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAutoFillLocation method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAutoFillLocationForArrayConstraintFromSetAutoFillLocation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $getSignatureLocationsResponseAutoFillLocationItem) {
            // validation for constraint: itemType
            if (!$getSignatureLocationsResponseAutoFillLocationItem instanceof \Pggns\MidocoApi\Documents\StructType\AutoFillLocation) {
                $invalidValues[] = is_object($getSignatureLocationsResponseAutoFillLocationItem) ? get_class($getSignatureLocationsResponseAutoFillLocationItem) : sprintf('%s(%s)', gettype($getSignatureLocationsResponseAutoFillLocationItem), var_export($getSignatureLocationsResponseAutoFillLocationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AutoFillLocation property can only contain items of type \Pggns\MidocoApi\Documents\StructType\AutoFillLocation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AutoFillLocation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\AutoFillLocation[] $autoFillLocation
     * @return \Pggns\MidocoApi\Documents\StructType\GetSignatureLocationsResponse
     */
    public function setAutoFillLocation(?array $autoFillLocation = null): self
    {
        // validation for constraint: array
        if ('' !== ($autoFillLocationArrayErrorMessage = self::validateAutoFillLocationForArrayConstraintFromSetAutoFillLocation($autoFillLocation))) {
            throw new InvalidArgumentException($autoFillLocationArrayErrorMessage, __LINE__);
        }
        $this->AutoFillLocation = $autoFillLocation;
        
        return $this;
    }
    /**
     * Add item to AutoFillLocation value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Documents\StructType\AutoFillLocation $item
     * @return \Pggns\MidocoApi\Documents\StructType\GetSignatureLocationsResponse
     */
    public function addToAutoFillLocation(\Pggns\MidocoApi\Documents\StructType\AutoFillLocation $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Documents\StructType\AutoFillLocation) {
            throw new InvalidArgumentException(sprintf('The AutoFillLocation property can only contain items of type \Pggns\MidocoApi\Documents\StructType\AutoFillLocation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->AutoFillLocation[] = $item;
        
        return $this;
    }
}
