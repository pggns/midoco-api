<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDunningTemplatesRequest StructType
 * @subpackage Structs
 */
class GetDunningTemplatesRequest extends AbstractStructBase
{
    /**
     * The MidocoDunningTemplate
     * Meta information extracted from the WSDL
     * - ref: MidocoDunningTemplate
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoDunningTemplate|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoDunningTemplate $MidocoDunningTemplate = null;
    /**
     * Constructor method for GetDunningTemplatesRequest
     * @uses GetDunningTemplatesRequest::setMidocoDunningTemplate()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoDunningTemplate $midocoDunningTemplate
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoDunningTemplate $midocoDunningTemplate = null)
    {
        $this
            ->setMidocoDunningTemplate($midocoDunningTemplate);
    }
    /**
     * Get MidocoDunningTemplate value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoDunningTemplate|null
     */
    public function getMidocoDunningTemplate(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoDunningTemplate
    {
        return $this->MidocoDunningTemplate;
    }
    /**
     * Set MidocoDunningTemplate value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoDunningTemplate $midocoDunningTemplate
     * @return \Pggns\MidocoApi\Api\Order\StructType\GetDunningTemplatesRequest
     */
    public function setMidocoDunningTemplate(?\Pggns\MidocoApi\Api\Order\StructType\MidocoDunningTemplate $midocoDunningTemplate = null): self
    {
        $this->MidocoDunningTemplate = $midocoDunningTemplate;
        
        return $this;
    }
}
