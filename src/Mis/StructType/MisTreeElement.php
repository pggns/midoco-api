<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MisTreeElement StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MisTreeElement extends AbstractStructBase
{
    /**
     * The name
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The uniqueName
     * @var string|null
     */
    protected ?string $uniqueName = null;
    /**
     * The cubeName
     * @var string|null
     */
    protected ?string $cubeName = null;
    /**
     * The dimensionName
     * @var string|null
     */
    protected ?string $dimensionName = null;
    /**
     * The hierarchyName
     * @var string|null
     */
    protected ?string $hierarchyName = null;
    /**
     * The type
     * @var int|null
     */
    protected ?int $type = null;
    /**
     * Constructor method for MisTreeElement
     * @uses MisTreeElement::setName()
     * @uses MisTreeElement::setUniqueName()
     * @uses MisTreeElement::setCubeName()
     * @uses MisTreeElement::setDimensionName()
     * @uses MisTreeElement::setHierarchyName()
     * @uses MisTreeElement::setType()
     * @param string $name
     * @param string $uniqueName
     * @param string $cubeName
     * @param string $dimensionName
     * @param string $hierarchyName
     * @param int $type
     */
    public function __construct(?string $name = null, ?string $uniqueName = null, ?string $cubeName = null, ?string $dimensionName = null, ?string $hierarchyName = null, ?int $type = null)
    {
        $this
            ->setName($name)
            ->setUniqueName($uniqueName)
            ->setCubeName($cubeName)
            ->setDimensionName($dimensionName)
            ->setHierarchyName($hierarchyName)
            ->setType($type);
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \Pggns\MidocoApi\Mis\StructType\MisTreeElement
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        
        return $this;
    }
    /**
     * Get uniqueName value
     * @return string|null
     */
    public function getUniqueName(): ?string
    {
        return $this->uniqueName;
    }
    /**
     * Set uniqueName value
     * @param string $uniqueName
     * @return \Pggns\MidocoApi\Mis\StructType\MisTreeElement
     */
    public function setUniqueName(?string $uniqueName = null): self
    {
        // validation for constraint: string
        if (!is_null($uniqueName) && !is_string($uniqueName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uniqueName, true), gettype($uniqueName)), __LINE__);
        }
        $this->uniqueName = $uniqueName;
        
        return $this;
    }
    /**
     * Get cubeName value
     * @return string|null
     */
    public function getCubeName(): ?string
    {
        return $this->cubeName;
    }
    /**
     * Set cubeName value
     * @param string $cubeName
     * @return \Pggns\MidocoApi\Mis\StructType\MisTreeElement
     */
    public function setCubeName(?string $cubeName = null): self
    {
        // validation for constraint: string
        if (!is_null($cubeName) && !is_string($cubeName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cubeName, true), gettype($cubeName)), __LINE__);
        }
        $this->cubeName = $cubeName;
        
        return $this;
    }
    /**
     * Get dimensionName value
     * @return string|null
     */
    public function getDimensionName(): ?string
    {
        return $this->dimensionName;
    }
    /**
     * Set dimensionName value
     * @param string $dimensionName
     * @return \Pggns\MidocoApi\Mis\StructType\MisTreeElement
     */
    public function setDimensionName(?string $dimensionName = null): self
    {
        // validation for constraint: string
        if (!is_null($dimensionName) && !is_string($dimensionName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dimensionName, true), gettype($dimensionName)), __LINE__);
        }
        $this->dimensionName = $dimensionName;
        
        return $this;
    }
    /**
     * Get hierarchyName value
     * @return string|null
     */
    public function getHierarchyName(): ?string
    {
        return $this->hierarchyName;
    }
    /**
     * Set hierarchyName value
     * @param string $hierarchyName
     * @return \Pggns\MidocoApi\Mis\StructType\MisTreeElement
     */
    public function setHierarchyName(?string $hierarchyName = null): self
    {
        // validation for constraint: string
        if (!is_null($hierarchyName) && !is_string($hierarchyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hierarchyName, true), gettype($hierarchyName)), __LINE__);
        }
        $this->hierarchyName = $hierarchyName;
        
        return $this;
    }
    /**
     * Get type value
     * @return int|null
     */
    public function getType(): ?int
    {
        return $this->type;
    }
    /**
     * Set type value
     * @param int $type
     * @return \Pggns\MidocoApi\Mis\StructType\MisTreeElement
     */
    public function setType(?int $type = null): self
    {
        // validation for constraint: int
        if (!is_null($type) && !(is_int($type) || ctype_digit($type))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
}
