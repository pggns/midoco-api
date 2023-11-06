<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoAttributeChoiceValueRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoAttributeChoiceValueRequest extends AbstractStructBase
{
    /**
     * The MidocoSystemAttributeChoiceValue
     * Meta information extracted from the WSDL
     * - ref: MidocoSystemAttributeChoiceValue
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\AttributeChoiceValueDTO|null
     */
    protected ?\Pggns\MidocoApi\MidocoSystem\StructType\AttributeChoiceValueDTO $MidocoSystemAttributeChoiceValue = null;
    /**
     * The isNew
     * @var bool|null
     */
    protected ?bool $isNew = null;
    /**
     * Constructor method for SaveMidocoAttributeChoiceValueRequest
     * @uses SaveMidocoAttributeChoiceValueRequest::setMidocoSystemAttributeChoiceValue()
     * @uses SaveMidocoAttributeChoiceValueRequest::setIsNew()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\AttributeChoiceValueDTO $midocoSystemAttributeChoiceValue
     * @param bool $isNew
     */
    public function __construct(?\Pggns\MidocoApi\MidocoSystem\StructType\AttributeChoiceValueDTO $midocoSystemAttributeChoiceValue = null, ?bool $isNew = null)
    {
        $this
            ->setMidocoSystemAttributeChoiceValue($midocoSystemAttributeChoiceValue)
            ->setIsNew($isNew);
    }
    /**
     * Get MidocoSystemAttributeChoiceValue value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\AttributeChoiceValueDTO|null
     */
    public function getMidocoSystemAttributeChoiceValue(): ?\Pggns\MidocoApi\MidocoSystem\StructType\AttributeChoiceValueDTO
    {
        return $this->MidocoSystemAttributeChoiceValue;
    }
    /**
     * Set MidocoSystemAttributeChoiceValue value
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\AttributeChoiceValueDTO $midocoSystemAttributeChoiceValue
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SaveMidocoAttributeChoiceValueRequest
     */
    public function setMidocoSystemAttributeChoiceValue(?\Pggns\MidocoApi\MidocoSystem\StructType\AttributeChoiceValueDTO $midocoSystemAttributeChoiceValue = null): self
    {
        $this->MidocoSystemAttributeChoiceValue = $midocoSystemAttributeChoiceValue;
        
        return $this;
    }
    /**
     * Get isNew value
     * @return bool|null
     */
    public function getIsNew(): ?bool
    {
        return $this->isNew;
    }
    /**
     * Set isNew value
     * @param bool $isNew
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SaveMidocoAttributeChoiceValueRequest
     */
    public function setIsNew(?bool $isNew = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isNew) && !is_bool($isNew)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isNew, true), gettype($isNew)), __LINE__);
        }
        $this->isNew = $isNew;
        
        return $this;
    }
}
