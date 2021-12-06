<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoBaggageAllowanceRequest StructType
 * @subpackage Structs
 */
class GetMidocoBaggageAllowanceRequest extends AbstractStructBase
{
    /**
     * The MidocoBaggageAllowance
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: MidocoBaggageAllowance
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoBaggageAllowance|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoBaggageAllowance $MidocoBaggageAllowance = null;
    /**
     * Constructor method for GetMidocoBaggageAllowanceRequest
     * @uses GetMidocoBaggageAllowanceRequest::setMidocoBaggageAllowance()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoBaggageAllowance $midocoBaggageAllowance
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoBaggageAllowance $midocoBaggageAllowance = null)
    {
        $this
            ->setMidocoBaggageAllowance($midocoBaggageAllowance);
    }
    /**
     * Get MidocoBaggageAllowance value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoBaggageAllowance|null
     */
    public function getMidocoBaggageAllowance(): ?\Pggns\MidocoApi\Documents\StructType\MidocoBaggageAllowance
    {
        return $this->MidocoBaggageAllowance;
    }
    /**
     * Set MidocoBaggageAllowance value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoBaggageAllowance $midocoBaggageAllowance
     * @return \Pggns\MidocoApi\Documents\StructType\GetMidocoBaggageAllowanceRequest
     */
    public function setMidocoBaggageAllowance(?\Pggns\MidocoApi\Documents\StructType\MidocoBaggageAllowance $midocoBaggageAllowance = null): self
    {
        $this->MidocoBaggageAllowance = $midocoBaggageAllowance;
        
        return $this;
    }
}
