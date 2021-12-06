<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteDunningTemplateAssignRequest StructType
 * @subpackage Structs
 */
class DeleteDunningTemplateAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoDunningTemplateAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoDunningTemplateAssign
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\DunningTemplateAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\DunningTemplateAssignDTO $MidocoDunningTemplateAssign = null;
    /**
     * Constructor method for DeleteDunningTemplateAssignRequest
     * @uses DeleteDunningTemplateAssignRequest::setMidocoDunningTemplateAssign()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DunningTemplateAssignDTO $midocoDunningTemplateAssign
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\DunningTemplateAssignDTO $midocoDunningTemplateAssign = null)
    {
        $this
            ->setMidocoDunningTemplateAssign($midocoDunningTemplateAssign);
    }
    /**
     * Get MidocoDunningTemplateAssign value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DunningTemplateAssignDTO|null
     */
    public function getMidocoDunningTemplateAssign(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\DunningTemplateAssignDTO
    {
        return $this->MidocoDunningTemplateAssign;
    }
    /**
     * Set MidocoDunningTemplateAssign value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\DunningTemplateAssignDTO $midocoDunningTemplateAssign
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\DeleteDunningTemplateAssignRequest
     */
    public function setMidocoDunningTemplateAssign(?\Pggns\MidocoApi\Api\OrderSD\StructType\DunningTemplateAssignDTO $midocoDunningTemplateAssign = null): self
    {
        $this->MidocoDunningTemplateAssign = $midocoDunningTemplateAssign;
        
        return $this;
    }
}