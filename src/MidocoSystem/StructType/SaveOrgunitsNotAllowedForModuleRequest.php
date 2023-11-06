<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveOrgunitsNotAllowedForModuleRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveOrgunitsNotAllowedForModuleRequest extends AbstractStructBase
{
    /**
     * The UnitNameNotAllowed
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $UnitNameNotAllowed = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * The appId
     * @var string|null
     */
    protected ?string $appId = null;
    /**
     * The modulId
     * @var string|null
     */
    protected ?string $modulId = null;
    /**
     * Constructor method for SaveOrgunitsNotAllowedForModuleRequest
     * @uses SaveOrgunitsNotAllowedForModuleRequest::setUnitNameNotAllowed()
     * @uses SaveOrgunitsNotAllowedForModuleRequest::setUnitName()
     * @uses SaveOrgunitsNotAllowedForModuleRequest::setAppId()
     * @uses SaveOrgunitsNotAllowedForModuleRequest::setModulId()
     * @param string[] $unitNameNotAllowed
     * @param string $unitName
     * @param string $appId
     * @param string $modulId
     */
    public function __construct(?array $unitNameNotAllowed = null, ?string $unitName = null, ?string $appId = null, ?string $modulId = null)
    {
        $this
            ->setUnitNameNotAllowed($unitNameNotAllowed)
            ->setUnitName($unitName)
            ->setAppId($appId)
            ->setModulId($modulId);
    }
    /**
     * Get UnitNameNotAllowed value
     * @return string[]
     */
    public function getUnitNameNotAllowed(): ?array
    {
        return $this->UnitNameNotAllowed;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setUnitNameNotAllowed method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitNameNotAllowed method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitNameNotAllowedForArrayConstraintFromSetUnitNameNotAllowed(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $saveOrgunitsNotAllowedForModuleRequestUnitNameNotAllowedItem) {
            // validation for constraint: itemType
            if (!is_string($saveOrgunitsNotAllowedForModuleRequestUnitNameNotAllowedItem)) {
                $invalidValues[] = is_object($saveOrgunitsNotAllowedForModuleRequestUnitNameNotAllowedItem) ? get_class($saveOrgunitsNotAllowedForModuleRequestUnitNameNotAllowedItem) : sprintf('%s(%s)', gettype($saveOrgunitsNotAllowedForModuleRequestUnitNameNotAllowedItem), var_export($saveOrgunitsNotAllowedForModuleRequestUnitNameNotAllowedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UnitNameNotAllowed property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UnitNameNotAllowed value
     * @throws InvalidArgumentException
     * @param string[] $unitNameNotAllowed
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SaveOrgunitsNotAllowedForModuleRequest
     */
    public function setUnitNameNotAllowed(?array $unitNameNotAllowed = null): self
    {
        // validation for constraint: array
        if ('' !== ($unitNameNotAllowedArrayErrorMessage = self::validateUnitNameNotAllowedForArrayConstraintFromSetUnitNameNotAllowed($unitNameNotAllowed))) {
            throw new InvalidArgumentException($unitNameNotAllowedArrayErrorMessage, __LINE__);
        }
        $this->UnitNameNotAllowed = $unitNameNotAllowed;
        
        return $this;
    }
    /**
     * Add item to UnitNameNotAllowed value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SaveOrgunitsNotAllowedForModuleRequest
     */
    public function addToUnitNameNotAllowed(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The UnitNameNotAllowed property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->UnitNameNotAllowed[] = $item;
        
        return $this;
    }
    /**
     * Get unitName value
     * @return string|null
     */
    public function getUnitName(): ?string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SaveOrgunitsNotAllowedForModuleRequest
     */
    public function setUnitName(?string $unitName = null): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get appId value
     * @return string|null
     */
    public function getAppId(): ?string
    {
        return $this->appId;
    }
    /**
     * Set appId value
     * @param string $appId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SaveOrgunitsNotAllowedForModuleRequest
     */
    public function setAppId(?string $appId = null): self
    {
        // validation for constraint: string
        if (!is_null($appId) && !is_string($appId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($appId, true), gettype($appId)), __LINE__);
        }
        $this->appId = $appId;
        
        return $this;
    }
    /**
     * Get modulId value
     * @return string|null
     */
    public function getModulId(): ?string
    {
        return $this->modulId;
    }
    /**
     * Set modulId value
     * @param string $modulId
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SaveOrgunitsNotAllowedForModuleRequest
     */
    public function setModulId(?string $modulId = null): self
    {
        // validation for constraint: string
        if (!is_null($modulId) && !is_string($modulId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modulId, true), gettype($modulId)), __LINE__);
        }
        $this->modulId = $modulId;
        
        return $this;
    }
}
