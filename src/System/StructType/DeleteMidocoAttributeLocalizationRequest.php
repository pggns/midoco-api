<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoAttributeLocalizationRequest StructType
 * @subpackage Structs
 */
class DeleteMidocoAttributeLocalizationRequest extends AbstractStructBase
{
    /**
     * The MidocoSystemAttributeLocalization
     * Meta information extracted from the WSDL
     * - ref: MidocoSystemAttributeLocalization
     * @var \Pggns\MidocoApi\System\StructType\AttributeDefinitionLocalDTO|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\AttributeDefinitionLocalDTO $MidocoSystemAttributeLocalization = null;
    /**
     * Constructor method for DeleteMidocoAttributeLocalizationRequest
     * @uses DeleteMidocoAttributeLocalizationRequest::setMidocoSystemAttributeLocalization()
     * @param \Pggns\MidocoApi\System\StructType\AttributeDefinitionLocalDTO $midocoSystemAttributeLocalization
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\AttributeDefinitionLocalDTO $midocoSystemAttributeLocalization = null)
    {
        $this
            ->setMidocoSystemAttributeLocalization($midocoSystemAttributeLocalization);
    }
    /**
     * Get MidocoSystemAttributeLocalization value
     * @return \Pggns\MidocoApi\System\StructType\AttributeDefinitionLocalDTO|null
     */
    public function getMidocoSystemAttributeLocalization(): ?\Pggns\MidocoApi\System\StructType\AttributeDefinitionLocalDTO
    {
        return $this->MidocoSystemAttributeLocalization;
    }
    /**
     * Set MidocoSystemAttributeLocalization value
     * @param \Pggns\MidocoApi\System\StructType\AttributeDefinitionLocalDTO $midocoSystemAttributeLocalization
     * @return \Pggns\MidocoApi\System\StructType\DeleteMidocoAttributeLocalizationRequest
     */
    public function setMidocoSystemAttributeLocalization(?\Pggns\MidocoApi\System\StructType\AttributeDefinitionLocalDTO $midocoSystemAttributeLocalization = null): self
    {
        $this->MidocoSystemAttributeLocalization = $midocoSystemAttributeLocalization;
        
        return $this;
    }
}
