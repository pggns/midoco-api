<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoSupplierTemplatesRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMidocoSupplierTemplatesRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierTemplate
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierTemplate
     * @var \Pggns\MidocoApi\OrderSD\StructType\SupplierTemplateDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\SupplierTemplateDTO $MidocoSupplierTemplate = null;
    /**
     * Constructor method for GetMidocoSupplierTemplatesRequest
     * @uses GetMidocoSupplierTemplatesRequest::setMidocoSupplierTemplate()
     * @param \Pggns\MidocoApi\OrderSD\StructType\SupplierTemplateDTO $midocoSupplierTemplate
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\SupplierTemplateDTO $midocoSupplierTemplate = null)
    {
        $this
            ->setMidocoSupplierTemplate($midocoSupplierTemplate);
    }
    /**
     * Get MidocoSupplierTemplate value
     * @return \Pggns\MidocoApi\OrderSD\StructType\SupplierTemplateDTO|null
     */
    public function getMidocoSupplierTemplate(): ?\Pggns\MidocoApi\OrderSD\StructType\SupplierTemplateDTO
    {
        return $this->MidocoSupplierTemplate;
    }
    /**
     * Set MidocoSupplierTemplate value
     * @param \Pggns\MidocoApi\OrderSD\StructType\SupplierTemplateDTO $midocoSupplierTemplate
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetMidocoSupplierTemplatesRequest
     */
    public function setMidocoSupplierTemplate(?\Pggns\MidocoApi\OrderSD\StructType\SupplierTemplateDTO $midocoSupplierTemplate = null): self
    {
        $this->MidocoSupplierTemplate = $midocoSupplierTemplate;
        
        return $this;
    }
}
