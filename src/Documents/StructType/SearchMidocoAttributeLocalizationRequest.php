<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SearchMidocoAttributeLocalizationRequest StructType
 * @subpackage Structs
 */
class SearchMidocoAttributeLocalizationRequest extends AbstractStructBase
{
    /**
     * The MidocoSystemAttributeLocalization
     * Meta information extracted from the WSDL
     * - ref: MidocoSystemAttributeLocalization
     * @var \Pggns\MidocoApi\Documents\StructType\AttributeDefinitionLocalDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\AttributeDefinitionLocalDTO $MidocoSystemAttributeLocalization = null;
    /**
     * Constructor method for SearchMidocoAttributeLocalizationRequest
     * @uses SearchMidocoAttributeLocalizationRequest::setMidocoSystemAttributeLocalization()
     * @param \Pggns\MidocoApi\Documents\StructType\AttributeDefinitionLocalDTO $midocoSystemAttributeLocalization
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\AttributeDefinitionLocalDTO $midocoSystemAttributeLocalization = null)
    {
        $this
            ->setMidocoSystemAttributeLocalization($midocoSystemAttributeLocalization);
    }
    /**
     * Get MidocoSystemAttributeLocalization value
     * @return \Pggns\MidocoApi\Documents\StructType\AttributeDefinitionLocalDTO|null
     */
    public function getMidocoSystemAttributeLocalization(): ?\Pggns\MidocoApi\Documents\StructType\AttributeDefinitionLocalDTO
    {
        return $this->MidocoSystemAttributeLocalization;
    }
    /**
     * Set MidocoSystemAttributeLocalization value
     * @param \Pggns\MidocoApi\Documents\StructType\AttributeDefinitionLocalDTO $midocoSystemAttributeLocalization
     * @return \Pggns\MidocoApi\Documents\StructType\SearchMidocoAttributeLocalizationRequest
     */
    public function setMidocoSystemAttributeLocalization(?\Pggns\MidocoApi\Documents\StructType\AttributeDefinitionLocalDTO $midocoSystemAttributeLocalization = null): self
    {
        $this->MidocoSystemAttributeLocalization = $midocoSystemAttributeLocalization;
        
        return $this;
    }
}
