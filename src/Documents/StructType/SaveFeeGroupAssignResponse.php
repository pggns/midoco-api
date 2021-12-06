<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveFeeGroupAssignResponse StructType
 * @subpackage Structs
 */
class SaveFeeGroupAssignResponse extends AbstractStructBase
{
    /**
     * The MidocoFeeGroupAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeGroupAssign
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoFeeGroupAssign|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoFeeGroupAssign $MidocoFeeGroupAssign = null;
    /**
     * Constructor method for SaveFeeGroupAssignResponse
     * @uses SaveFeeGroupAssignResponse::setMidocoFeeGroupAssign()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoFeeGroupAssign $midocoFeeGroupAssign
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoFeeGroupAssign $midocoFeeGroupAssign = null)
    {
        $this
            ->setMidocoFeeGroupAssign($midocoFeeGroupAssign);
    }
    /**
     * Get MidocoFeeGroupAssign value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoFeeGroupAssign|null
     */
    public function getMidocoFeeGroupAssign(): ?\Pggns\MidocoApi\Documents\StructType\MidocoFeeGroupAssign
    {
        return $this->MidocoFeeGroupAssign;
    }
    /**
     * Set MidocoFeeGroupAssign value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoFeeGroupAssign $midocoFeeGroupAssign
     * @return \Pggns\MidocoApi\Documents\StructType\SaveFeeGroupAssignResponse
     */
    public function setMidocoFeeGroupAssign(?\Pggns\MidocoApi\Documents\StructType\MidocoFeeGroupAssign $midocoFeeGroupAssign = null): self
    {
        $this->MidocoFeeGroupAssign = $midocoFeeGroupAssign;
        
        return $this;
    }
}
