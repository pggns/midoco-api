<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Booking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoAttributeLocalizationResponse StructType
 * @subpackage Structs
 */
class SaveMidocoAttributeLocalizationResponse extends AbstractStructBase
{
    /**
     * The MidocoSystemAttributeLocalization
     * Meta information extracted from the WSDL
     * - ref: MidocoSystemAttributeLocalization
     * @var \Pggns\MidocoApi\Booking\StructType\AttributeDefinitionLocalDTO|null
     */
    protected ?\Pggns\MidocoApi\Booking\StructType\AttributeDefinitionLocalDTO $MidocoSystemAttributeLocalization = null;
    /**
     * Constructor method for SaveMidocoAttributeLocalizationResponse
     * @uses SaveMidocoAttributeLocalizationResponse::setMidocoSystemAttributeLocalization()
     * @param \Pggns\MidocoApi\Booking\StructType\AttributeDefinitionLocalDTO $midocoSystemAttributeLocalization
     */
    public function __construct(?\Pggns\MidocoApi\Booking\StructType\AttributeDefinitionLocalDTO $midocoSystemAttributeLocalization = null)
    {
        $this
            ->setMidocoSystemAttributeLocalization($midocoSystemAttributeLocalization);
    }
    /**
     * Get MidocoSystemAttributeLocalization value
     * @return \Pggns\MidocoApi\Booking\StructType\AttributeDefinitionLocalDTO|null
     */
    public function getMidocoSystemAttributeLocalization(): ?\Pggns\MidocoApi\Booking\StructType\AttributeDefinitionLocalDTO
    {
        return $this->MidocoSystemAttributeLocalization;
    }
    /**
     * Set MidocoSystemAttributeLocalization value
     * @param \Pggns\MidocoApi\Booking\StructType\AttributeDefinitionLocalDTO $midocoSystemAttributeLocalization
     * @return \Pggns\MidocoApi\Booking\StructType\SaveMidocoAttributeLocalizationResponse
     */
    public function setMidocoSystemAttributeLocalization(?\Pggns\MidocoApi\Booking\StructType\AttributeDefinitionLocalDTO $midocoSystemAttributeLocalization = null): self
    {
        $this->MidocoSystemAttributeLocalization = $midocoSystemAttributeLocalization;
        
        return $this;
    }
}
