<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\OrderSD\StructType;

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
     * @var \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoBaggageAllowance|null
     */
    protected ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoBaggageAllowance $MidocoBaggageAllowance = null;
    /**
     * Constructor method for GetMidocoBaggageAllowanceRequest
     * @uses GetMidocoBaggageAllowanceRequest::setMidocoBaggageAllowance()
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoBaggageAllowance $midocoBaggageAllowance
     */
    public function __construct(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoBaggageAllowance $midocoBaggageAllowance = null)
    {
        $this
            ->setMidocoBaggageAllowance($midocoBaggageAllowance);
    }
    /**
     * Get MidocoBaggageAllowance value
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoBaggageAllowance|null
     */
    public function getMidocoBaggageAllowance(): ?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoBaggageAllowance
    {
        return $this->MidocoBaggageAllowance;
    }
    /**
     * Set MidocoBaggageAllowance value
     * @param \Pggns\MidocoApi\Api\OrderSD\StructType\MidocoBaggageAllowance $midocoBaggageAllowance
     * @return \Pggns\MidocoApi\Api\OrderSD\StructType\GetMidocoBaggageAllowanceRequest
     */
    public function setMidocoBaggageAllowance(?\Pggns\MidocoApi\Api\OrderSD\StructType\MidocoBaggageAllowance $midocoBaggageAllowance = null): self
    {
        $this->MidocoBaggageAllowance = $midocoBaggageAllowance;
        
        return $this;
    }
}