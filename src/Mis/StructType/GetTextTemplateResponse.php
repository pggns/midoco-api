<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTextTemplateResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getTextTemplate --- return a text template having the given template id
 * @subpackage Structs
 */
class GetTextTemplateResponse extends AbstractStructBase
{
    /**
     * The MidocoTextTemplate
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoTextTemplate
     * @var \Pggns\MidocoApi\Api\Mis\StructType\CrmTemplateDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Mis\StructType\CrmTemplateDTO $MidocoTextTemplate = null;
    /**
     * Constructor method for GetTextTemplateResponse
     * @uses GetTextTemplateResponse::setMidocoTextTemplate()
     * @param \Pggns\MidocoApi\Api\Mis\StructType\CrmTemplateDTO $midocoTextTemplate
     */
    public function __construct(?\Pggns\MidocoApi\Api\Mis\StructType\CrmTemplateDTO $midocoTextTemplate = null)
    {
        $this
            ->setMidocoTextTemplate($midocoTextTemplate);
    }
    /**
     * Get MidocoTextTemplate value
     * @return \Pggns\MidocoApi\Api\Mis\StructType\CrmTemplateDTO|null
     */
    public function getMidocoTextTemplate(): ?\Pggns\MidocoApi\Api\Mis\StructType\CrmTemplateDTO
    {
        return $this->MidocoTextTemplate;
    }
    /**
     * Set MidocoTextTemplate value
     * @param \Pggns\MidocoApi\Api\Mis\StructType\CrmTemplateDTO $midocoTextTemplate
     * @return \Pggns\MidocoApi\Api\Mis\StructType\GetTextTemplateResponse
     */
    public function setMidocoTextTemplate(?\Pggns\MidocoApi\Api\Mis\StructType\CrmTemplateDTO $midocoTextTemplate = null): self
    {
        $this->MidocoTextTemplate = $midocoTextTemplate;
        
        return $this;
    }
}
