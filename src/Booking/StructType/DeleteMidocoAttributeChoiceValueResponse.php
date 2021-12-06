<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Booking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoAttributeChoiceValueResponse StructType
 * @subpackage Structs
 */
class DeleteMidocoAttributeChoiceValueResponse extends AbstractStructBase
{
    /**
     * The MidocoSystemAttributeChoiceValue
     * Meta information extracted from the WSDL
     * - ref: MidocoSystemAttributeChoiceValue
     * @var \Pggns\MidocoApi\Booking\StructType\AttributeChoiceValueDTO|null
     */
    protected ?\Pggns\MidocoApi\Booking\StructType\AttributeChoiceValueDTO $MidocoSystemAttributeChoiceValue = null;
    /**
     * Constructor method for DeleteMidocoAttributeChoiceValueResponse
     * @uses DeleteMidocoAttributeChoiceValueResponse::setMidocoSystemAttributeChoiceValue()
     * @param \Pggns\MidocoApi\Booking\StructType\AttributeChoiceValueDTO $midocoSystemAttributeChoiceValue
     */
    public function __construct(?\Pggns\MidocoApi\Booking\StructType\AttributeChoiceValueDTO $midocoSystemAttributeChoiceValue = null)
    {
        $this
            ->setMidocoSystemAttributeChoiceValue($midocoSystemAttributeChoiceValue);
    }
    /**
     * Get MidocoSystemAttributeChoiceValue value
     * @return \Pggns\MidocoApi\Booking\StructType\AttributeChoiceValueDTO|null
     */
    public function getMidocoSystemAttributeChoiceValue(): ?\Pggns\MidocoApi\Booking\StructType\AttributeChoiceValueDTO
    {
        return $this->MidocoSystemAttributeChoiceValue;
    }
    /**
     * Set MidocoSystemAttributeChoiceValue value
     * @param \Pggns\MidocoApi\Booking\StructType\AttributeChoiceValueDTO $midocoSystemAttributeChoiceValue
     * @return \Pggns\MidocoApi\Booking\StructType\DeleteMidocoAttributeChoiceValueResponse
     */
    public function setMidocoSystemAttributeChoiceValue(?\Pggns\MidocoApi\Booking\StructType\AttributeChoiceValueDTO $midocoSystemAttributeChoiceValue = null): self
    {
        $this->MidocoSystemAttributeChoiceValue = $midocoSystemAttributeChoiceValue;
        
        return $this;
    }
}
