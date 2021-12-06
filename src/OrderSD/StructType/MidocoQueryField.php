<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoQueryField StructType
 * @subpackage Structs
 */
class MidocoQueryField extends AbstractStructBase
{
    /**
     * The fieldName
     * @var string|null
     */
    protected ?string $fieldName = null;
    /**
     * The category
     * @var string|null
     */
    protected ?string $category = null;
    /**
     * The localizedCategory
     * @var string|null
     */
    protected ?string $localizedCategory = null;
    /**
     * The dbFieldName
     * @var string|null
     */
    protected ?string $dbFieldName = null;
    /**
     * The localizedName
     * @var string|null
     */
    protected ?string $localizedName = null;
    /**
     * The type
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The predefinedValues
     * @var bool|null
     */
    protected ?bool $predefinedValues = null;
    /**
     * The visible
     * @var bool|null
     */
    protected ?bool $visible = null;
    /**
     * The function
     * @var bool|null
     */
    protected ?bool $function = null;
    /**
     * Constructor method for MidocoQueryField
     * @uses MidocoQueryField::setFieldName()
     * @uses MidocoQueryField::setCategory()
     * @uses MidocoQueryField::setLocalizedCategory()
     * @uses MidocoQueryField::setDbFieldName()
     * @uses MidocoQueryField::setLocalizedName()
     * @uses MidocoQueryField::setType()
     * @uses MidocoQueryField::setPredefinedValues()
     * @uses MidocoQueryField::setVisible()
     * @uses MidocoQueryField::setFunction()
     * @param string $fieldName
     * @param string $category
     * @param string $localizedCategory
     * @param string $dbFieldName
     * @param string $localizedName
     * @param string $type
     * @param bool $predefinedValues
     * @param bool $visible
     * @param bool $function
     */
    public function __construct(?string $fieldName = null, ?string $category = null, ?string $localizedCategory = null, ?string $dbFieldName = null, ?string $localizedName = null, ?string $type = null, ?bool $predefinedValues = null, ?bool $visible = null, ?bool $function = null)
    {
        $this
            ->setFieldName($fieldName)
            ->setCategory($category)
            ->setLocalizedCategory($localizedCategory)
            ->setDbFieldName($dbFieldName)
            ->setLocalizedName($localizedName)
            ->setType($type)
            ->setPredefinedValues($predefinedValues)
            ->setVisible($visible)
            ->setFunction($function);
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
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoQueryField
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
     * Get category value
     * @return string|null
     */
    public function getCategory(): ?string
    {
        return $this->category;
    }
    /**
     * Set category value
     * @param string $category
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoQueryField
     */
    public function setCategory(?string $category = null): self
    {
        // validation for constraint: string
        if (!is_null($category) && !is_string($category)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category, true), gettype($category)), __LINE__);
        }
        $this->category = $category;
        
        return $this;
    }
    /**
     * Get localizedCategory value
     * @return string|null
     */
    public function getLocalizedCategory(): ?string
    {
        return $this->localizedCategory;
    }
    /**
     * Set localizedCategory value
     * @param string $localizedCategory
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoQueryField
     */
    public function setLocalizedCategory(?string $localizedCategory = null): self
    {
        // validation for constraint: string
        if (!is_null($localizedCategory) && !is_string($localizedCategory)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localizedCategory, true), gettype($localizedCategory)), __LINE__);
        }
        $this->localizedCategory = $localizedCategory;
        
        return $this;
    }
    /**
     * Get dbFieldName value
     * @return string|null
     */
    public function getDbFieldName(): ?string
    {
        return $this->dbFieldName;
    }
    /**
     * Set dbFieldName value
     * @param string $dbFieldName
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoQueryField
     */
    public function setDbFieldName(?string $dbFieldName = null): self
    {
        // validation for constraint: string
        if (!is_null($dbFieldName) && !is_string($dbFieldName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dbFieldName, true), gettype($dbFieldName)), __LINE__);
        }
        $this->dbFieldName = $dbFieldName;
        
        return $this;
    }
    /**
     * Get localizedName value
     * @return string|null
     */
    public function getLocalizedName(): ?string
    {
        return $this->localizedName;
    }
    /**
     * Set localizedName value
     * @param string $localizedName
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoQueryField
     */
    public function setLocalizedName(?string $localizedName = null): self
    {
        // validation for constraint: string
        if (!is_null($localizedName) && !is_string($localizedName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localizedName, true), gettype($localizedName)), __LINE__);
        }
        $this->localizedName = $localizedName;
        
        return $this;
    }
    /**
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param string $type
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoQueryField
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get predefinedValues value
     * @return bool|null
     */
    public function getPredefinedValues(): ?bool
    {
        return $this->predefinedValues;
    }
    /**
     * Set predefinedValues value
     * @param bool $predefinedValues
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoQueryField
     */
    public function setPredefinedValues(?bool $predefinedValues = null): self
    {
        // validation for constraint: boolean
        if (!is_null($predefinedValues) && !is_bool($predefinedValues)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($predefinedValues, true), gettype($predefinedValues)), __LINE__);
        }
        $this->predefinedValues = $predefinedValues;
        
        return $this;
    }
    /**
     * Get visible value
     * @return bool|null
     */
    public function getVisible(): ?bool
    {
        return $this->visible;
    }
    /**
     * Set visible value
     * @param bool $visible
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoQueryField
     */
    public function setVisible(?bool $visible = null): self
    {
        // validation for constraint: boolean
        if (!is_null($visible) && !is_bool($visible)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($visible, true), gettype($visible)), __LINE__);
        }
        $this->visible = $visible;
        
        return $this;
    }
    /**
     * Get function value
     * @return bool|null
     */
    public function getFunction(): ?bool
    {
        return $this->function;
    }
    /**
     * Set function value
     * @param bool $function
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoQueryField
     */
    public function setFunction(?bool $function = null): self
    {
        // validation for constraint: boolean
        if (!is_null($function) && !is_bool($function)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($function, true), gettype($function)), __LINE__);
        }
        $this->function = $function;
        
        return $this;
    }
}
