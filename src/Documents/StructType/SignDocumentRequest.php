<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SignDocumentRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SignDocumentRequest extends AbstractStructBase
{
    /**
     * The documentToSign
     * @var string|null
     */
    protected ?string $documentToSign = null;
    /**
     * The signer
     * @var string|null
     */
    protected ?string $signer = null;
    /**
     * The reason
     * @var string|null
     */
    protected ?string $reason = null;
    /**
     * The signatureGraphics
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $signatureGraphics = null;
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
     * Constructor method for SignDocumentRequest
     * @uses SignDocumentRequest::setDocumentToSign()
     * @uses SignDocumentRequest::setSigner()
     * @uses SignDocumentRequest::setReason()
     * @uses SignDocumentRequest::setSignatureGraphics()
     * @uses SignDocumentRequest::setSignatureLocation()
     * @uses SignDocumentRequest::setAutoFillLocation()
     * @param string $documentToSign
     * @param string $signer
     * @param string $reason
     * @param string $signatureGraphics
     * @param \Pggns\MidocoApi\Documents\StructType\SignatureLocation[] $signatureLocation
     * @param \Pggns\MidocoApi\Documents\StructType\AutoFillLocation[] $autoFillLocation
     */
    public function __construct(?string $documentToSign = null, ?string $signer = null, ?string $reason = null, ?string $signatureGraphics = null, ?array $signatureLocation = null, ?array $autoFillLocation = null)
    {
        $this
            ->setDocumentToSign($documentToSign)
            ->setSigner($signer)
            ->setReason($reason)
            ->setSignatureGraphics($signatureGraphics)
            ->setSignatureLocation($signatureLocation)
            ->setAutoFillLocation($autoFillLocation);
    }
    /**
     * Get documentToSign value
     * @return string|null
     */
    public function getDocumentToSign(): ?string
    {
        return $this->documentToSign;
    }
    /**
     * Set documentToSign value
     * @param string $documentToSign
     * @return \Pggns\MidocoApi\Documents\StructType\SignDocumentRequest
     */
    public function setDocumentToSign(?string $documentToSign = null): self
    {
        // validation for constraint: string
        if (!is_null($documentToSign) && !is_string($documentToSign)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($documentToSign, true), gettype($documentToSign)), __LINE__);
        }
        $this->documentToSign = $documentToSign;
        
        return $this;
    }
    /**
     * Get signer value
     * @return string|null
     */
    public function getSigner(): ?string
    {
        return $this->signer;
    }
    /**
     * Set signer value
     * @param string $signer
     * @return \Pggns\MidocoApi\Documents\StructType\SignDocumentRequest
     */
    public function setSigner(?string $signer = null): self
    {
        // validation for constraint: string
        if (!is_null($signer) && !is_string($signer)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signer, true), gettype($signer)), __LINE__);
        }
        $this->signer = $signer;
        
        return $this;
    }
    /**
     * Get reason value
     * @return string|null
     */
    public function getReason(): ?string
    {
        return $this->reason;
    }
    /**
     * Set reason value
     * @param string $reason
     * @return \Pggns\MidocoApi\Documents\StructType\SignDocumentRequest
     */
    public function setReason(?string $reason = null): self
    {
        // validation for constraint: string
        if (!is_null($reason) && !is_string($reason)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reason, true), gettype($reason)), __LINE__);
        }
        $this->reason = $reason;
        
        return $this;
    }
    /**
     * Get signatureGraphics value
     * @return string|null
     */
    public function getSignatureGraphics(): ?string
    {
        return $this->signatureGraphics;
    }
    /**
     * Set signatureGraphics value
     * @param string $signatureGraphics
     * @return \Pggns\MidocoApi\Documents\StructType\SignDocumentRequest
     */
    public function setSignatureGraphics(?string $signatureGraphics = null): self
    {
        // validation for constraint: string
        if (!is_null($signatureGraphics) && !is_string($signatureGraphics)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signatureGraphics, true), gettype($signatureGraphics)), __LINE__);
        }
        $this->signatureGraphics = $signatureGraphics;
        
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
        foreach ($values as $signDocumentRequestSignatureLocationItem) {
            // validation for constraint: itemType
            if (!$signDocumentRequestSignatureLocationItem instanceof \Pggns\MidocoApi\Documents\StructType\SignatureLocation) {
                $invalidValues[] = is_object($signDocumentRequestSignatureLocationItem) ? get_class($signDocumentRequestSignatureLocationItem) : sprintf('%s(%s)', gettype($signDocumentRequestSignatureLocationItem), var_export($signDocumentRequestSignatureLocationItem, true));
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
     * @return \Pggns\MidocoApi\Documents\StructType\SignDocumentRequest
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
     * @return \Pggns\MidocoApi\Documents\StructType\SignDocumentRequest
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
        foreach ($values as $signDocumentRequestAutoFillLocationItem) {
            // validation for constraint: itemType
            if (!$signDocumentRequestAutoFillLocationItem instanceof \Pggns\MidocoApi\Documents\StructType\AutoFillLocation) {
                $invalidValues[] = is_object($signDocumentRequestAutoFillLocationItem) ? get_class($signDocumentRequestAutoFillLocationItem) : sprintf('%s(%s)', gettype($signDocumentRequestAutoFillLocationItem), var_export($signDocumentRequestAutoFillLocationItem, true));
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
     * @return \Pggns\MidocoApi\Documents\StructType\SignDocumentRequest
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
     * @return \Pggns\MidocoApi\Documents\StructType\SignDocumentRequest
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
