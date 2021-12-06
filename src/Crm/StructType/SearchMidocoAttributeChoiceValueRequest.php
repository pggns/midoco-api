<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Crm\StructType\AttributeChoiceValueDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\AttributeChoiceValueDTO $MidocoSystemAttributeChoiceValue = null;
    /**
     * Constructor method for SearchMidocoAttributeChoiceValueRequest
     * @uses SearchMidocoAttributeChoiceValueRequest::setMidocoSystemAttributeChoiceValue()
     * @param \Pggns\MidocoApi\Crm\StructType\AttributeChoiceValueDTO $midocoSystemAttributeChoiceValue
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\AttributeChoiceValueDTO $midocoSystemAttributeChoiceValue = null)
    {
        $this
            ->setMidocoSystemAttributeChoiceValue($midocoSystemAttributeChoiceValue);
    }
    /**
     * Get MidocoSystemAttributeChoiceValue value
     * @return \Pggns\MidocoApi\Crm\StructType\AttributeChoiceValueDTO|null
     */
    public function getMidocoSystemAttributeChoiceValue(): ?\Pggns\MidocoApi\Crm\StructType\AttributeChoiceValueDTO
    {
        return $this->MidocoSystemAttributeChoiceValue;
    }
    /**
     * Set MidocoSystemAttributeChoiceValue value
     * @param \Pggns\MidocoApi\Crm\StructType\AttributeChoiceValueDTO $midocoSystemAttributeChoiceValue
     * @return \Pggns\MidocoApi\Crm\StructType\SearchMidocoAttributeChoiceValueRequest
     */
    public function setMidocoSystemAttributeChoiceValue(?\Pggns\MidocoApi\Crm\StructType\AttributeChoiceValueDTO $midocoSystemAttributeChoiceValue = null): self
    {
        $this->MidocoSystemAttributeChoiceValue = $midocoSystemAttributeChoiceValue;
        
        return $this;
    }
}
