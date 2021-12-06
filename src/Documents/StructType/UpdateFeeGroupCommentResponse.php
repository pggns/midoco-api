<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateFeeGroupCommentResponse StructType
 * @subpackage Structs
 */
class UpdateFeeGroupCommentResponse extends AbstractStructBase
{
    /**
     * The MidocoFeeGroup
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeGroup
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoFeeGroup|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoFeeGroup $MidocoFeeGroup = null;
    /**
     * Constructor method for UpdateFeeGroupCommentResponse
     * @uses UpdateFeeGroupCommentResponse::setMidocoFeeGroup()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoFeeGroup $midocoFeeGroup
     */
    public function __construct(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoFeeGroup $midocoFeeGroup = null)
    {
        $this
            ->setMidocoFeeGroup($midocoFeeGroup);
    }
    /**
     * Get MidocoFeeGroup value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoFeeGroup|null
     */
    public function getMidocoFeeGroup(): ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoFeeGroup
    {
        return $this->MidocoFeeGroup;
    }
    /**
     * Set MidocoFeeGroup value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoFeeGroup $midocoFeeGroup
     * @return \Pggns\MidocoApi\Api\Documents\StructType\UpdateFeeGroupCommentResponse
     */
    public function setMidocoFeeGroup(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoFeeGroup $midocoFeeGroup = null): self
    {
        $this->MidocoFeeGroup = $midocoFeeGroup;
        
        return $this;
    }
}