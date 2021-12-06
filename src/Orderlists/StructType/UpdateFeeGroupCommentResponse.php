<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoFeeGroup|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoFeeGroup $MidocoFeeGroup = null;
    /**
     * Constructor method for UpdateFeeGroupCommentResponse
     * @uses UpdateFeeGroupCommentResponse::setMidocoFeeGroup()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoFeeGroup $midocoFeeGroup
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoFeeGroup $midocoFeeGroup = null)
    {
        $this
            ->setMidocoFeeGroup($midocoFeeGroup);
    }
    /**
     * Get MidocoFeeGroup value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoFeeGroup|null
     */
    public function getMidocoFeeGroup(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoFeeGroup
    {
        return $this->MidocoFeeGroup;
    }
    /**
     * Set MidocoFeeGroup value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoFeeGroup $midocoFeeGroup
     * @return \Pggns\MidocoApi\Orderlists\StructType\UpdateFeeGroupCommentResponse
     */
    public function setMidocoFeeGroup(?\Pggns\MidocoApi\Orderlists\StructType\MidocoFeeGroup $midocoFeeGroup = null): self
    {
        $this->MidocoFeeGroup = $midocoFeeGroup;
        
        return $this;
    }
}
