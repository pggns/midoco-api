<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateFeeGroupCommentResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class UpdateFeeGroupCommentResponse extends AbstractStructBase
{
    /**
     * The MidocoFeeGroup
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeGroup
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoFeeGroup|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoFeeGroup $MidocoFeeGroup = null;
    /**
     * Constructor method for UpdateFeeGroupCommentResponse
     * @uses UpdateFeeGroupCommentResponse::setMidocoFeeGroup()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoFeeGroup $midocoFeeGroup
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoFeeGroup $midocoFeeGroup = null)
    {
        $this
            ->setMidocoFeeGroup($midocoFeeGroup);
    }
    /**
     * Get MidocoFeeGroup value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoFeeGroup|null
     */
    public function getMidocoFeeGroup(): ?\Pggns\MidocoApi\Documents\StructType\MidocoFeeGroup
    {
        return $this->MidocoFeeGroup;
    }
    /**
     * Set MidocoFeeGroup value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoFeeGroup $midocoFeeGroup
     * @return \Pggns\MidocoApi\Documents\StructType\UpdateFeeGroupCommentResponse
     */
    public function setMidocoFeeGroup(?\Pggns\MidocoApi\Documents\StructType\MidocoFeeGroup $midocoFeeGroup = null): self
    {
        $this->MidocoFeeGroup = $midocoFeeGroup;
        
        return $this;
    }
}
