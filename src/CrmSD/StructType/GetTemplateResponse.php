<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CrmTemplateDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmTemplateDTO $MidocoCrmTemplate = null;
    /**
     * Constructor method for GetTemplateResponse
     * @uses GetTemplateResponse::setMidocoCrmTemplate()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CrmTemplateDTO $midocoCrmTemplate
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmTemplateDTO $midocoCrmTemplate = null)
    {
        $this
            ->setMidocoCrmTemplate($midocoCrmTemplate);
    }
    /**
     * Get MidocoCrmTemplate value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CrmTemplateDTO|null
     */
    public function getMidocoCrmTemplate(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmTemplateDTO
    {
        return $this->MidocoCrmTemplate;
    }
    /**
     * Set MidocoCrmTemplate value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CrmTemplateDTO $midocoCrmTemplate
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetTemplateResponse
     */
    public function setMidocoCrmTemplate(?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmTemplateDTO $midocoCrmTemplate = null): self
    {
        $this->MidocoCrmTemplate = $midocoCrmTemplate;
        
        return $this;
    }
}
