<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveFeeGroupAssignRequest StructType
 * @subpackage Structs
 */
class SaveFeeGroupAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoFeeGroupAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoFeeGroupAssign
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoFeeGroupAssign|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoFeeGroupAssign $MidocoFeeGroupAssign = null;
    /**
     * Constructor method for SaveFeeGroupAssignRequest
     * @uses SaveFeeGroupAssignRequest::setMidocoFeeGroupAssign()
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
     * @return \Pggns\MidocoApi\Documents\StructType\SaveFeeGroupAssignRequest
     */
    public function setMidocoFeeGroupAssign(?\Pggns\MidocoApi\Documents\StructType\MidocoFeeGroupAssign $midocoFeeGroupAssign = null): self
    {
        $this->MidocoFeeGroupAssign = $midocoFeeGroupAssign;
        
        return $this;
    }
}
