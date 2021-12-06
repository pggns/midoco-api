<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomerDefinedFieldDTO StructType
 * @subpackage Structs
 */
class CustomerDefinedFieldDTO extends AbstractStructBase
{
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The fieldName
     * @var string|null
     */
    protected ?string $fieldName = null;
    /**
     * The remarkMapping
     * @var string|null
     */
    protected ?string $remarkMapping = null;
    /**
     * The unitName
     * @var string|null
     */
    protected ?string $unitName = null;
    /**
     * Constructor method for CustomerDefinedFieldDTO
     * @uses CustomerDefinedFieldDTO::setDescription()
     * @uses CustomerDefinedFieldDTO::setFieldName()
     * @uses CustomerDefinedFieldDTO::setRemarkMapping()
     * @uses CustomerDefinedFieldDTO::setUnitName()
     * @param string $description
     * @param string $fieldName
     * @param string $remarkMapping
     * @param string $unitName
     */
    public function __construct(?string $description = null, ?string $fieldName = null, ?string $remarkMapping = null, ?string $unitName = null)
    {
        $this
            ->setDescription($description)
            ->setFieldName($fieldName)
            ->setRemarkMapping($remarkMapping)
            ->setUnitName($unitName);
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Mis\StructType\CustomerDefinedFieldDTO
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get fieldName value
     * @return string|null
     */
    public function getFieldName(): ?string
    {
        return $this->fieldName;
    }
    /**
     * Set fieldName value
     * @param string $fieldName
     * @return \Pggns\MidocoApi\Mis\StructType\CustomerDefinedFieldDTO
     */
    public function setFieldName(?string $fieldName = null): self
    {
        // validation for constraint: string
        if (!is_null($fieldName) && !is_string($fieldName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fieldName, true), gettype($fieldName)), __LINE__);
        }
        $this->fieldName = $fieldName;
        
        return $this;
    }
    /**
     * Get remarkMapping value
     * @return string|null
     */
    public function getRemarkMapping(): ?string
    {
        return $this->remarkMapping;
    }
    /**
     * Set remarkMapping value
     * @param string $remarkMapping
     * @return \Pggns\MidocoApi\Mis\StructType\CustomerDefinedFieldDTO
     */
    public function setRemarkMapping(?string $remarkMapping = null): self
    {
        // validation for constraint: string
        if (!is_null($remarkMapping) && !is_string($remarkMapping)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remarkMapping, true), gettype($remarkMapping)), __LINE__);
        }
        $this->remarkMapping = $remarkMapping;
        
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
     * @return \Pggns\MidocoApi\Mis\StructType\CustomerDefinedFieldDTO
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
}
