<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ListSignatureDocsRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ListSignatureDocsRequest extends AbstractStructBase
{
    /**
     * The showSigned
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    protected bool $showSigned;
    /**
     * The dispatchType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $dispatchType = null;
    /**
     * The documentNature
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $documentNature = null;
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $unitName = null;
    /**
     * The crtUser
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected ?array $crtUser = null;
    /**
     * The custName
     * @var string|null
     */
    protected ?string $custName = null;
    /**
     * The showDispatched
     * @var bool|null
     */
    protected ?bool $showDispatched = null;
    /**
     * The onlyForCurrentUser
     * @var bool|null
     */
    protected ?bool $onlyForCurrentUser = null;
    /**
     * The onlyForCurrentUnitName
     * @var bool|null
     */
    protected ?bool $onlyForCurrentUnitName = null;
    /**
     * The creationDateFrom
     * @var string|null
     */
    protected ?string $creationDateFrom = null;
    /**
     * The creationDateTo
     * @var string|null
     */
    protected ?string $creationDateTo = null;
    /**
     * The dispatchDateFrom
     * @var string|null
     */
    protected ?string $dispatchDateFrom = null;
    /**
     * The dispatchDateTo
     * @var string|null
     */
    protected ?string $dispatchDateTo = null;
    /**
     * Constructor method for ListSignatureDocsRequest
     * @uses ListSignatureDocsRequest::setShowSigned()
     * @uses ListSignatureDocsRequest::setDispatchType()
     * @uses ListSignatureDocsRequest::setDocumentNature()
     * @uses ListSignatureDocsRequest::setUnitName()
     * @uses ListSignatureDocsRequest::setCrtUser()
     * @uses ListSignatureDocsRequest::setCustName()
     * @uses ListSignatureDocsRequest::setShowDispatched()
     * @uses ListSignatureDocsRequest::setOnlyForCurrentUser()
     * @uses ListSignatureDocsRequest::setOnlyForCurrentUnitName()
     * @uses ListSignatureDocsRequest::setCreationDateFrom()
     * @uses ListSignatureDocsRequest::setCreationDateTo()
     * @uses ListSignatureDocsRequest::setDispatchDateFrom()
     * @uses ListSignatureDocsRequest::setDispatchDateTo()
     * @param bool $showSigned
     * @param string[] $dispatchType
     * @param string[] $documentNature
     * @param string[] $unitName
     * @param int[] $crtUser
     * @param string $custName
     * @param bool $showDispatched
     * @param bool $onlyForCurrentUser
     * @param bool $onlyForCurrentUnitName
     * @param string $creationDateFrom
     * @param string $creationDateTo
     * @param string $dispatchDateFrom
     * @param string $dispatchDateTo
     */
    public function __construct(bool $showSigned, ?array $dispatchType = null, ?array $documentNature = null, ?array $unitName = null, ?array $crtUser = null, ?string $custName = null, ?bool $showDispatched = null, ?bool $onlyForCurrentUser = null, ?bool $onlyForCurrentUnitName = null, ?string $creationDateFrom = null, ?string $creationDateTo = null, ?string $dispatchDateFrom = null, ?string $dispatchDateTo = null)
    {
        $this
            ->setShowSigned($showSigned)
            ->setDispatchType($dispatchType)
            ->setDocumentNature($documentNature)
            ->setUnitName($unitName)
            ->setCrtUser($crtUser)
            ->setCustName($custName)
            ->setShowDispatched($showDispatched)
            ->setOnlyForCurrentUser($onlyForCurrentUser)
            ->setOnlyForCurrentUnitName($onlyForCurrentUnitName)
            ->setCreationDateFrom($creationDateFrom)
            ->setCreationDateTo($creationDateTo)
            ->setDispatchDateFrom($dispatchDateFrom)
            ->setDispatchDateTo($dispatchDateTo);
    }
    /**
     * Get showSigned value
     * @return bool
     */
    public function getShowSigned(): bool
    {
        return $this->showSigned;
    }
    /**
     * Set showSigned value
     * @param bool $showSigned
     * @return \Pggns\MidocoApi\Documents\StructType\ListSignatureDocsRequest
     */
    public function setShowSigned(bool $showSigned): self
    {
        // validation for constraint: boolean
        if (!is_null($showSigned) && !is_bool($showSigned)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showSigned, true), gettype($showSigned)), __LINE__);
        }
        $this->showSigned = $showSigned;
        
        return $this;
    }
    /**
     * Get dispatchType value
     * @return string[]
     */
    public function getDispatchType(): ?array
    {
        return $this->dispatchType;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDispatchType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDispatchType method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDispatchTypeForArrayConstraintFromSetDispatchType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listSignatureDocsRequestDispatchTypeItem) {
            // validation for constraint: itemType
            if (!is_string($listSignatureDocsRequestDispatchTypeItem)) {
                $invalidValues[] = is_object($listSignatureDocsRequestDispatchTypeItem) ? get_class($listSignatureDocsRequestDispatchTypeItem) : sprintf('%s(%s)', gettype($listSignatureDocsRequestDispatchTypeItem), var_export($listSignatureDocsRequestDispatchTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The dispatchType property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set dispatchType value
     * @throws InvalidArgumentException
     * @param string[] $dispatchType
     * @return \Pggns\MidocoApi\Documents\StructType\ListSignatureDocsRequest
     */
    public function setDispatchType(?array $dispatchType = null): self
    {
        // validation for constraint: array
        if ('' !== ($dispatchTypeArrayErrorMessage = self::validateDispatchTypeForArrayConstraintFromSetDispatchType($dispatchType))) {
            throw new InvalidArgumentException($dispatchTypeArrayErrorMessage, __LINE__);
        }
        $this->dispatchType = $dispatchType;
        
        return $this;
    }
    /**
     * Add item to dispatchType value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Documents\StructType\ListSignatureDocsRequest
     */
    public function addToDispatchType(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The dispatchType property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->dispatchType[] = $item;
        
        return $this;
    }
    /**
     * Get documentNature value
     * @return string[]
     */
    public function getDocumentNature(): ?array
    {
        return $this->documentNature;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setDocumentNature method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentNature method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentNatureForArrayConstraintFromSetDocumentNature(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listSignatureDocsRequestDocumentNatureItem) {
            // validation for constraint: itemType
            if (!is_string($listSignatureDocsRequestDocumentNatureItem)) {
                $invalidValues[] = is_object($listSignatureDocsRequestDocumentNatureItem) ? get_class($listSignatureDocsRequestDocumentNatureItem) : sprintf('%s(%s)', gettype($listSignatureDocsRequestDocumentNatureItem), var_export($listSignatureDocsRequestDocumentNatureItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The documentNature property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set documentNature value
     * @throws InvalidArgumentException
     * @param string[] $documentNature
     * @return \Pggns\MidocoApi\Documents\StructType\ListSignatureDocsRequest
     */
    public function setDocumentNature(?array $documentNature = null): self
    {
        // validation for constraint: array
        if ('' !== ($documentNatureArrayErrorMessage = self::validateDocumentNatureForArrayConstraintFromSetDocumentNature($documentNature))) {
            throw new InvalidArgumentException($documentNatureArrayErrorMessage, __LINE__);
        }
        $this->documentNature = $documentNature;
        
        return $this;
    }
    /**
     * Add item to documentNature value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Documents\StructType\ListSignatureDocsRequest
     */
    public function addToDocumentNature(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The documentNature property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->documentNature[] = $item;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string[]
     */
    public function getUnitName(): ?array
    {
        return $this->unitName;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUnitName method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitName method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitNameForArrayConstraintFromSetUnitName(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listSignatureDocsRequestUnitNameItem) {
            // validation for constraint: itemType
            if (!is_string($listSignatureDocsRequestUnitNameItem)) {
                $invalidValues[] = is_object($listSignatureDocsRequestUnitNameItem) ? get_class($listSignatureDocsRequestUnitNameItem) : sprintf('%s(%s)', gettype($listSignatureDocsRequestUnitNameItem), var_export($listSignatureDocsRequestUnitNameItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The unitName property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set unitName value
     * @throws InvalidArgumentException
     * @param string[] $unitName
     * @return \Pggns\MidocoApi\Documents\StructType\ListSignatureDocsRequest
     */
    public function setUnitName(?array $unitName = null): self
    {
        // validation for constraint: array
        if ('' !== ($unitNameArrayErrorMessage = self::validateUnitNameForArrayConstraintFromSetUnitName($unitName))) {
            throw new InvalidArgumentException($unitNameArrayErrorMessage, __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Add item to unitName value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\Documents\StructType\ListSignatureDocsRequest
     */
    public function addToUnitName(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The unitName property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->unitName[] = $item;
        
        return $this;
    }
    /**
     * Get crtUser value
     * @return int[]
     */
    public function getCrtUser(): ?array
    {
        return $this->crtUser;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCrtUser method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCrtUser method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCrtUserForArrayConstraintFromSetCrtUser(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $listSignatureDocsRequestCrtUserItem) {
            // validation for constraint: itemType
            if (!(is_int($listSignatureDocsRequestCrtUserItem) || ctype_digit($listSignatureDocsRequestCrtUserItem))) {
                $invalidValues[] = is_object($listSignatureDocsRequestCrtUserItem) ? get_class($listSignatureDocsRequestCrtUserItem) : sprintf('%s(%s)', gettype($listSignatureDocsRequestCrtUserItem), var_export($listSignatureDocsRequestCrtUserItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The crtUser property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set crtUser value
     * @throws InvalidArgumentException
     * @param int[] $crtUser
     * @return \Pggns\MidocoApi\Documents\StructType\ListSignatureDocsRequest
     */
    public function setCrtUser(?array $crtUser = null): self
    {
        // validation for constraint: array
        if ('' !== ($crtUserArrayErrorMessage = self::validateCrtUserForArrayConstraintFromSetCrtUser($crtUser))) {
            throw new InvalidArgumentException($crtUserArrayErrorMessage, __LINE__);
        }
        $this->crtUser = $crtUser;
        
        return $this;
    }
    /**
     * Add item to crtUser value
     * @throws InvalidArgumentException
     * @param int $item
     * @return \Pggns\MidocoApi\Documents\StructType\ListSignatureDocsRequest
     */
    public function addToCrtUser(int $item): self
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new InvalidArgumentException(sprintf('The crtUser property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->crtUser[] = $item;
        
        return $this;
    }
    /**
     * Get custName value
     * @return string|null
     */
    public function getCustName(): ?string
    {
        return $this->custName;
    }
    /**
     * Set custName value
     * @param string $custName
     * @return \Pggns\MidocoApi\Documents\StructType\ListSignatureDocsRequest
     */
    public function setCustName(?string $custName = null): self
    {
        // validation for constraint: string
        if (!is_null($custName) && !is_string($custName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custName, true), gettype($custName)), __LINE__);
        }
        $this->custName = $custName;
        
        return $this;
    }
    /**
     * Get showDispatched value
     * @return bool|null
     */
    public function getShowDispatched(): ?bool
    {
        return $this->showDispatched;
    }
    /**
     * Set showDispatched value
     * @param bool $showDispatched
     * @return \Pggns\MidocoApi\Documents\StructType\ListSignatureDocsRequest
     */
    public function setShowDispatched(?bool $showDispatched = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showDispatched) && !is_bool($showDispatched)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showDispatched, true), gettype($showDispatched)), __LINE__);
        }
        $this->showDispatched = $showDispatched;
        
        return $this;
    }
    /**
     * Get onlyForCurrentUser value
     * @return bool|null
     */
    public function getOnlyForCurrentUser(): ?bool
    {
        return $this->onlyForCurrentUser;
    }
    /**
     * Set onlyForCurrentUser value
     * @param bool $onlyForCurrentUser
     * @return \Pggns\MidocoApi\Documents\StructType\ListSignatureDocsRequest
     */
    public function setOnlyForCurrentUser(?bool $onlyForCurrentUser = null): self
    {
        // validation for constraint: boolean
        if (!is_null($onlyForCurrentUser) && !is_bool($onlyForCurrentUser)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyForCurrentUser, true), gettype($onlyForCurrentUser)), __LINE__);
        }
        $this->onlyForCurrentUser = $onlyForCurrentUser;
        
        return $this;
    }
    /**
     * Get onlyForCurrentUnitName value
     * @return bool|null
     */
    public function getOnlyForCurrentUnitName(): ?bool
    {
        return $this->onlyForCurrentUnitName;
    }
    /**
     * Set onlyForCurrentUnitName value
     * @param bool $onlyForCurrentUnitName
     * @return \Pggns\MidocoApi\Documents\StructType\ListSignatureDocsRequest
     */
    public function setOnlyForCurrentUnitName(?bool $onlyForCurrentUnitName = null): self
    {
        // validation for constraint: boolean
        if (!is_null($onlyForCurrentUnitName) && !is_bool($onlyForCurrentUnitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyForCurrentUnitName, true), gettype($onlyForCurrentUnitName)), __LINE__);
        }
        $this->onlyForCurrentUnitName = $onlyForCurrentUnitName;
        
        return $this;
    }
    /**
     * Get creationDateFrom value
     * @return string|null
     */
    public function getCreationDateFrom(): ?string
    {
        return $this->creationDateFrom;
    }
    /**
     * Set creationDateFrom value
     * @param string $creationDateFrom
     * @return \Pggns\MidocoApi\Documents\StructType\ListSignatureDocsRequest
     */
    public function setCreationDateFrom(?string $creationDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateFrom) && !is_string($creationDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateFrom, true), gettype($creationDateFrom)), __LINE__);
        }
        $this->creationDateFrom = $creationDateFrom;
        
        return $this;
    }
    /**
     * Get creationDateTo value
     * @return string|null
     */
    public function getCreationDateTo(): ?string
    {
        return $this->creationDateTo;
    }
    /**
     * Set creationDateTo value
     * @param string $creationDateTo
     * @return \Pggns\MidocoApi\Documents\StructType\ListSignatureDocsRequest
     */
    public function setCreationDateTo(?string $creationDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($creationDateTo) && !is_string($creationDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationDateTo, true), gettype($creationDateTo)), __LINE__);
        }
        $this->creationDateTo = $creationDateTo;
        
        return $this;
    }
    /**
     * Get dispatchDateFrom value
     * @return string|null
     */
    public function getDispatchDateFrom(): ?string
    {
        return $this->dispatchDateFrom;
    }
    /**
     * Set dispatchDateFrom value
     * @param string $dispatchDateFrom
     * @return \Pggns\MidocoApi\Documents\StructType\ListSignatureDocsRequest
     */
    public function setDispatchDateFrom(?string $dispatchDateFrom = null): self
    {
        // validation for constraint: string
        if (!is_null($dispatchDateFrom) && !is_string($dispatchDateFrom)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dispatchDateFrom, true), gettype($dispatchDateFrom)), __LINE__);
        }
        $this->dispatchDateFrom = $dispatchDateFrom;
        
        return $this;
    }
    /**
     * Get dispatchDateTo value
     * @return string|null
     */
    public function getDispatchDateTo(): ?string
    {
        return $this->dispatchDateTo;
    }
    /**
     * Set dispatchDateTo value
     * @param string $dispatchDateTo
     * @return \Pggns\MidocoApi\Documents\StructType\ListSignatureDocsRequest
     */
    public function setDispatchDateTo(?string $dispatchDateTo = null): self
    {
        // validation for constraint: string
        if (!is_null($dispatchDateTo) && !is_string($dispatchDateTo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dispatchDateTo, true), gettype($dispatchDateTo)), __LINE__);
        }
        $this->dispatchDateTo = $dispatchDateTo;
        
        return $this;
    }
}
