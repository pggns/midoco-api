<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AttributeDimensionDTO StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class AttributeDimensionDTO extends AbstractStructBase
{
    /**
     * The attrib10Value
     * @var string|null
     */
    protected ?string $attrib10Value = null;
    /**
     * The attrib1Value
     * @var string|null
     */
    protected ?string $attrib1Value = null;
    /**
     * The attrib2Value
     * @var string|null
     */
    protected ?string $attrib2Value = null;
    /**
     * The attrib3Value
     * @var string|null
     */
    protected ?string $attrib3Value = null;
    /**
     * The attrib4Value
     * @var string|null
     */
    protected ?string $attrib4Value = null;
    /**
     * The attrib5Value
     * @var string|null
     */
    protected ?string $attrib5Value = null;
    /**
     * The attrib6Value
     * @var string|null
     */
    protected ?string $attrib6Value = null;
    /**
     * The attrib7Value
     * @var string|null
     */
    protected ?string $attrib7Value = null;
    /**
     * The attrib8Value
     * @var string|null
     */
    protected ?string $attrib8Value = null;
    /**
     * The attrib9Value
     * @var string|null
     */
    protected ?string $attrib9Value = null;
    /**
     * The attributeId
     * @var int|null
     */
    protected ?int $attributeId = null;
    /**
     * Constructor method for AttributeDimensionDTO
     * @uses AttributeDimensionDTO::setAttrib10Value()
     * @uses AttributeDimensionDTO::setAttrib1Value()
     * @uses AttributeDimensionDTO::setAttrib2Value()
     * @uses AttributeDimensionDTO::setAttrib3Value()
     * @uses AttributeDimensionDTO::setAttrib4Value()
     * @uses AttributeDimensionDTO::setAttrib5Value()
     * @uses AttributeDimensionDTO::setAttrib6Value()
     * @uses AttributeDimensionDTO::setAttrib7Value()
     * @uses AttributeDimensionDTO::setAttrib8Value()
     * @uses AttributeDimensionDTO::setAttrib9Value()
     * @uses AttributeDimensionDTO::setAttributeId()
     * @param string $attrib10Value
     * @param string $attrib1Value
     * @param string $attrib2Value
     * @param string $attrib3Value
     * @param string $attrib4Value
     * @param string $attrib5Value
     * @param string $attrib6Value
     * @param string $attrib7Value
     * @param string $attrib8Value
     * @param string $attrib9Value
     * @param int $attributeId
     */
    public function __construct(?string $attrib10Value = null, ?string $attrib1Value = null, ?string $attrib2Value = null, ?string $attrib3Value = null, ?string $attrib4Value = null, ?string $attrib5Value = null, ?string $attrib6Value = null, ?string $attrib7Value = null, ?string $attrib8Value = null, ?string $attrib9Value = null, ?int $attributeId = null)
    {
        $this
            ->setAttrib10Value($attrib10Value)
            ->setAttrib1Value($attrib1Value)
            ->setAttrib2Value($attrib2Value)
            ->setAttrib3Value($attrib3Value)
            ->setAttrib4Value($attrib4Value)
            ->setAttrib5Value($attrib5Value)
            ->setAttrib6Value($attrib6Value)
            ->setAttrib7Value($attrib7Value)
            ->setAttrib8Value($attrib8Value)
            ->setAttrib9Value($attrib9Value)
            ->setAttributeId($attributeId);
    }
    /**
     * Get attrib10Value value
     * @return string|null
     */
    public function getAttrib10Value(): ?string
    {
        return $this->attrib10Value;
    }
    /**
     * Set attrib10Value value
     * @param string $attrib10Value
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDimensionDTO
     */
    public function setAttrib10Value(?string $attrib10Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib10Value) && !is_string($attrib10Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib10Value, true), gettype($attrib10Value)), __LINE__);
        }
        $this->attrib10Value = $attrib10Value;
        
        return $this;
    }
    /**
     * Get attrib1Value value
     * @return string|null
     */
    public function getAttrib1Value(): ?string
    {
        return $this->attrib1Value;
    }
    /**
     * Set attrib1Value value
     * @param string $attrib1Value
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDimensionDTO
     */
    public function setAttrib1Value(?string $attrib1Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib1Value) && !is_string($attrib1Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib1Value, true), gettype($attrib1Value)), __LINE__);
        }
        $this->attrib1Value = $attrib1Value;
        
        return $this;
    }
    /**
     * Get attrib2Value value
     * @return string|null
     */
    public function getAttrib2Value(): ?string
    {
        return $this->attrib2Value;
    }
    /**
     * Set attrib2Value value
     * @param string $attrib2Value
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDimensionDTO
     */
    public function setAttrib2Value(?string $attrib2Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib2Value) && !is_string($attrib2Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib2Value, true), gettype($attrib2Value)), __LINE__);
        }
        $this->attrib2Value = $attrib2Value;
        
        return $this;
    }
    /**
     * Get attrib3Value value
     * @return string|null
     */
    public function getAttrib3Value(): ?string
    {
        return $this->attrib3Value;
    }
    /**
     * Set attrib3Value value
     * @param string $attrib3Value
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDimensionDTO
     */
    public function setAttrib3Value(?string $attrib3Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib3Value) && !is_string($attrib3Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib3Value, true), gettype($attrib3Value)), __LINE__);
        }
        $this->attrib3Value = $attrib3Value;
        
        return $this;
    }
    /**
     * Get attrib4Value value
     * @return string|null
     */
    public function getAttrib4Value(): ?string
    {
        return $this->attrib4Value;
    }
    /**
     * Set attrib4Value value
     * @param string $attrib4Value
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDimensionDTO
     */
    public function setAttrib4Value(?string $attrib4Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib4Value) && !is_string($attrib4Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib4Value, true), gettype($attrib4Value)), __LINE__);
        }
        $this->attrib4Value = $attrib4Value;
        
        return $this;
    }
    /**
     * Get attrib5Value value
     * @return string|null
     */
    public function getAttrib5Value(): ?string
    {
        return $this->attrib5Value;
    }
    /**
     * Set attrib5Value value
     * @param string $attrib5Value
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDimensionDTO
     */
    public function setAttrib5Value(?string $attrib5Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib5Value) && !is_string($attrib5Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib5Value, true), gettype($attrib5Value)), __LINE__);
        }
        $this->attrib5Value = $attrib5Value;
        
        return $this;
    }
    /**
     * Get attrib6Value value
     * @return string|null
     */
    public function getAttrib6Value(): ?string
    {
        return $this->attrib6Value;
    }
    /**
     * Set attrib6Value value
     * @param string $attrib6Value
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDimensionDTO
     */
    public function setAttrib6Value(?string $attrib6Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib6Value) && !is_string($attrib6Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib6Value, true), gettype($attrib6Value)), __LINE__);
        }
        $this->attrib6Value = $attrib6Value;
        
        return $this;
    }
    /**
     * Get attrib7Value value
     * @return string|null
     */
    public function getAttrib7Value(): ?string
    {
        return $this->attrib7Value;
    }
    /**
     * Set attrib7Value value
     * @param string $attrib7Value
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDimensionDTO
     */
    public function setAttrib7Value(?string $attrib7Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib7Value) && !is_string($attrib7Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib7Value, true), gettype($attrib7Value)), __LINE__);
        }
        $this->attrib7Value = $attrib7Value;
        
        return $this;
    }
    /**
     * Get attrib8Value value
     * @return string|null
     */
    public function getAttrib8Value(): ?string
    {
        return $this->attrib8Value;
    }
    /**
     * Set attrib8Value value
     * @param string $attrib8Value
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDimensionDTO
     */
    public function setAttrib8Value(?string $attrib8Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib8Value) && !is_string($attrib8Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib8Value, true), gettype($attrib8Value)), __LINE__);
        }
        $this->attrib8Value = $attrib8Value;
        
        return $this;
    }
    /**
     * Get attrib9Value value
     * @return string|null
     */
    public function getAttrib9Value(): ?string
    {
        return $this->attrib9Value;
    }
    /**
     * Set attrib9Value value
     * @param string $attrib9Value
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDimensionDTO
     */
    public function setAttrib9Value(?string $attrib9Value = null): self
    {
        // validation for constraint: string
        if (!is_null($attrib9Value) && !is_string($attrib9Value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($attrib9Value, true), gettype($attrib9Value)), __LINE__);
        }
        $this->attrib9Value = $attrib9Value;
        
        return $this;
    }
    /**
     * Get attributeId value
     * @return int|null
     */
    public function getAttributeId(): ?int
    {
        return $this->attributeId;
    }
    /**
     * Set attributeId value
     * @param int $attributeId
     * @return \Pggns\MidocoApi\Mis\StructType\AttributeDimensionDTO
     */
    public function setAttributeId(?int $attributeId = null): self
    {
        // validation for constraint: int
        if (!is_null($attributeId) && !(is_int($attributeId) || ctype_digit($attributeId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($attributeId, true), gettype($attributeId)), __LINE__);
        }
        $this->attributeId = $attributeId;
        
        return $this;
    }
}
