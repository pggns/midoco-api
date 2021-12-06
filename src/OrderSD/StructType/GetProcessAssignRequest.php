<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetProcessAssignRequest StructType
 * @subpackage Structs
 */
class GetProcessAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoProcessAssignCriteria
     * Meta information extracted from the WSDL
     * - ref: MidocoProcessAssignCriteria
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoProcessAssignCriteria|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoProcessAssignCriteria $MidocoProcessAssignCriteria = null;
    /**
     * Constructor method for GetProcessAssignRequest
     * @uses GetProcessAssignRequest::setMidocoProcessAssignCriteria()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoProcessAssignCriteria $midocoProcessAssignCriteria
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoProcessAssignCriteria $midocoProcessAssignCriteria = null)
    {
        $this
            ->setMidocoProcessAssignCriteria($midocoProcessAssignCriteria);
    }
    /**
     * Get MidocoProcessAssignCriteria value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoProcessAssignCriteria|null
     */
    public function getMidocoProcessAssignCriteria(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoProcessAssignCriteria
    {
        return $this->MidocoProcessAssignCriteria;
    }
    /**
     * Set MidocoProcessAssignCriteria value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoProcessAssignCriteria $midocoProcessAssignCriteria
     * @return \Pggns\MidocoApi\OrderSD\StructType\GetProcessAssignRequest
     */
    public function setMidocoProcessAssignCriteria(?\Pggns\MidocoApi\OrderSD\StructType\MidocoProcessAssignCriteria $midocoProcessAssignCriteria = null): self
    {
        $this->MidocoProcessAssignCriteria = $midocoProcessAssignCriteria;
        
        return $this;
    }
}
