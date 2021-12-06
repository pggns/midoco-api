<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTemplateRequest StructType
 * @subpackage Structs
 */
class SaveTemplateRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmTemplate
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmTemplate
     * @var \Pggns\MidocoApi\Api\Crm\StructType\CrmTemplateDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\CrmTemplateDTO $MidocoCrmTemplate = null;
    /**
     * Constructor method for SaveTemplateRequest
     * @uses SaveTemplateRequest::setMidocoCrmTemplate()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmTemplateDTO $midocoCrmTemplate
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\CrmTemplateDTO $midocoCrmTemplate = null)
    {
        $this
            ->setMidocoCrmTemplate($midocoCrmTemplate);
    }
    /**
     * Get MidocoCrmTemplate value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\CrmTemplateDTO|null
     */
    public function getMidocoCrmTemplate(): ?\Pggns\MidocoApi\Api\Crm\StructType\CrmTemplateDTO
    {
        return $this->MidocoCrmTemplate;
    }
    /**
     * Set MidocoCrmTemplate value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\CrmTemplateDTO $midocoCrmTemplate
     * @return \Pggns\MidocoApi\Api\Crm\StructType\SaveTemplateRequest
     */
    public function setMidocoCrmTemplate(?\Pggns\MidocoApi\Api\Crm\StructType\CrmTemplateDTO $midocoCrmTemplate = null): self
    {
        $this->MidocoCrmTemplate = $midocoCrmTemplate;
        
        return $this;
    }
}
