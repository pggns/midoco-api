<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

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
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoFeeGroup|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoFeeGroup $MidocoFeeGroup = null;
    /**
     * Constructor method for UpdateFeeGroupCommentResponse
     * @uses UpdateFeeGroupCommentResponse::setMidocoFeeGroup()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoFeeGroup $midocoFeeGroup
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoFeeGroup $midocoFeeGroup = null)
    {
        $this
            ->setMidocoFeeGroup($midocoFeeGroup);
    }
    /**
     * Get MidocoFeeGroup value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoFeeGroup|null
     */
    public function getMidocoFeeGroup(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoFeeGroup
    {
        return $this->MidocoFeeGroup;
    }
    /**
     * Set MidocoFeeGroup value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoFeeGroup $midocoFeeGroup
     * @return \Pggns\MidocoApi\OrderSD\StructType\UpdateFeeGroupCommentResponse
     */
    public function setMidocoFeeGroup(?\Pggns\MidocoApi\OrderSD\StructType\MidocoFeeGroup $midocoFeeGroup = null): self
    {
        $this->MidocoFeeGroup = $midocoFeeGroup;
        
        return $this;
    }
}
