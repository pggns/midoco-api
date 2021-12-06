<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMidocoAttributeChoiceValueRequest StructType
 * @subpackage Structs
 */
class SearchMidocoAttributeChoiceValueRequest extends AbstractStructBase
{
    /**
     * The MidocoSystemAttributeChoiceValue
     * Meta information extracted from the WSDL
     * - ref: MidocoSystemAttributeChoiceValue
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\AttributeChoiceValueDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderglobalSD\StructType\AttributeChoiceValueDTO $MidocoSystemAttributeChoiceValue = null;
    /**
     * Constructor method for SearchMidocoAttributeChoiceValueRequest
     * @uses SearchMidocoAttributeChoiceValueRequest::setMidocoSystemAttributeChoiceValue()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\AttributeChoiceValueDTO $midocoSystemAttributeChoiceValue
     */
    public function __construct(?\Pggns\MidocoApi\OrderglobalSD\StructType\AttributeChoiceValueDTO $midocoSystemAttributeChoiceValue = null)
    {
        $this
            ->setMidocoSystemAttributeChoiceValue($midocoSystemAttributeChoiceValue);
    }
    /**
     * Get MidocoSystemAttributeChoiceValue value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\AttributeChoiceValueDTO|null
     */
    public function getMidocoSystemAttributeChoiceValue(): ?\Pggns\MidocoApi\OrderglobalSD\StructType\AttributeChoiceValueDTO
    {
        return $this->MidocoSystemAttributeChoiceValue;
    }
    /**
     * Set MidocoSystemAttributeChoiceValue value
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\AttributeChoiceValueDTO $midocoSystemAttributeChoiceValue
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\SearchMidocoAttributeChoiceValueRequest
     */
    public function setMidocoSystemAttributeChoiceValue(?\Pggns\MidocoApi\OrderglobalSD\StructType\AttributeChoiceValueDTO $midocoSystemAttributeChoiceValue = null): self
    {
        $this->MidocoSystemAttributeChoiceValue = $midocoSystemAttributeChoiceValue;
        
        return $this;
    }
}
