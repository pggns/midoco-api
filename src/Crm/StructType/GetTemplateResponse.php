<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTemplateResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getTemplate --- get a template having a given id
 * @subpackage Structs
 */
class GetTemplateResponse extends AbstractStructBase
{
    /**
     * The MidocoCrmTemplate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoCrmTemplate
     * @var \Pggns\MidocoApi\Crm\StructType\CrmTemplateDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CrmTemplateDTO $MidocoCrmTemplate = null;
    /**
     * Constructor method for GetTemplateResponse
     * @uses GetTemplateResponse::setMidocoCrmTemplate()
     * @param \Pggns\MidocoApi\Crm\StructType\CrmTemplateDTO $midocoCrmTemplate
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CrmTemplateDTO $midocoCrmTemplate = null)
    {
        $this
            ->setMidocoCrmTemplate($midocoCrmTemplate);
    }
    /**
     * Get MidocoCrmTemplate value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmTemplateDTO|null
     */
    public function getMidocoCrmTemplate(): ?\Pggns\MidocoApi\Crm\StructType\CrmTemplateDTO
    {
        return $this->MidocoCrmTemplate;
    }
    /**
     * Set MidocoCrmTemplate value
     * @param \Pggns\MidocoApi\Crm\StructType\CrmTemplateDTO $midocoCrmTemplate
     * @return \Pggns\MidocoApi\Crm\StructType\GetTemplateResponse
     */
    public function setMidocoCrmTemplate(?\Pggns\MidocoApi\Crm\StructType\CrmTemplateDTO $midocoCrmTemplate = null): self
    {
        $this->MidocoCrmTemplate = $midocoCrmTemplate;
        
        return $this;
    }
}
