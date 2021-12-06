<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoOrgTemplateTextResponse StructType
 * @subpackage Structs
 */
class GetMidocoOrgTemplateTextResponse extends AbstractStructBase
{
    /**
     * The MidocoOrgTemplateText
     * Meta information extracted from the WSDL
     * - ref: MidocoOrgTemplateText
     * @var \Pggns\MidocoApi\System\StructType\MidocoOrgTemplateText|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\MidocoOrgTemplateText $MidocoOrgTemplateText = null;
    /**
     * Constructor method for GetMidocoOrgTemplateTextResponse
     * @uses GetMidocoOrgTemplateTextResponse::setMidocoOrgTemplateText()
     * @param \Pggns\MidocoApi\System\StructType\MidocoOrgTemplateText $midocoOrgTemplateText
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\MidocoOrgTemplateText $midocoOrgTemplateText = null)
    {
        $this
            ->setMidocoOrgTemplateText($midocoOrgTemplateText);
    }
    /**
     * Get MidocoOrgTemplateText value
     * @return \Pggns\MidocoApi\System\StructType\MidocoOrgTemplateText|null
     */
    public function getMidocoOrgTemplateText(): ?\Pggns\MidocoApi\System\StructType\MidocoOrgTemplateText
    {
        return $this->MidocoOrgTemplateText;
    }
    /**
     * Set MidocoOrgTemplateText value
     * @param \Pggns\MidocoApi\System\StructType\MidocoOrgTemplateText $midocoOrgTemplateText
     * @return \Pggns\MidocoApi\System\StructType\GetMidocoOrgTemplateTextResponse
     */
    public function setMidocoOrgTemplateText(?\Pggns\MidocoApi\System\StructType\MidocoOrgTemplateText $midocoOrgTemplateText = null): self
    {
        $this->MidocoOrgTemplateText = $midocoOrgTemplateText;
        
        return $this;
    }
}
