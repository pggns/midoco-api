<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMediatorTextTemplatesRequest StructType
 * @subpackage Structs
 */
class GetMediatorTextTemplatesRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerTextTemplate
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerTextTemplate
     * @var \Pggns\MidocoApi\CrmSD\StructType\TextTemplateDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\TextTemplateDTO $MidocoCustomerTextTemplate = null;
    /**
     * Constructor method for GetMediatorTextTemplatesRequest
     * @uses GetMediatorTextTemplatesRequest::setMidocoCustomerTextTemplate()
     * @param \Pggns\MidocoApi\CrmSD\StructType\TextTemplateDTO $midocoCustomerTextTemplate
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\TextTemplateDTO $midocoCustomerTextTemplate = null)
    {
        $this
            ->setMidocoCustomerTextTemplate($midocoCustomerTextTemplate);
    }
    /**
     * Get MidocoCustomerTextTemplate value
     * @return \Pggns\MidocoApi\CrmSD\StructType\TextTemplateDTO|null
     */
    public function getMidocoCustomerTextTemplate(): ?\Pggns\MidocoApi\CrmSD\StructType\TextTemplateDTO
    {
        return $this->MidocoCustomerTextTemplate;
    }
    /**
     * Set MidocoCustomerTextTemplate value
     * @param \Pggns\MidocoApi\CrmSD\StructType\TextTemplateDTO $midocoCustomerTextTemplate
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetMediatorTextTemplatesRequest
     */
    public function setMidocoCustomerTextTemplate(?\Pggns\MidocoApi\CrmSD\StructType\TextTemplateDTO $midocoCustomerTextTemplate = null): self
    {
        $this->MidocoCustomerTextTemplate = $midocoCustomerTextTemplate;
        
        return $this;
    }
}
