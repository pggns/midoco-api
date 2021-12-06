<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoBaggageAllowanceRequest StructType
 * @subpackage Structs
 */
class SaveMidocoBaggageAllowanceRequest extends AbstractStructBase
{
    /**
     * The MidocoBaggageAllowance
     * Meta information extracted from the WSDL
     * - ref: MidocoBaggageAllowance
     * @var \Pggns\MidocoApi\OrderSD\StructType\MidocoBaggageAllowance|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\MidocoBaggageAllowance $MidocoBaggageAllowance = null;
    /**
     * Constructor method for SaveMidocoBaggageAllowanceRequest
     * @uses SaveMidocoBaggageAllowanceRequest::setMidocoBaggageAllowance()
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoBaggageAllowance $midocoBaggageAllowance
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\MidocoBaggageAllowance $midocoBaggageAllowance = null)
    {
        $this
            ->setMidocoBaggageAllowance($midocoBaggageAllowance);
    }
    /**
     * Get MidocoBaggageAllowance value
     * @return \Pggns\MidocoApi\OrderSD\StructType\MidocoBaggageAllowance|null
     */
    public function getMidocoBaggageAllowance(): ?\Pggns\MidocoApi\OrderSD\StructType\MidocoBaggageAllowance
    {
        return $this->MidocoBaggageAllowance;
    }
    /**
     * Set MidocoBaggageAllowance value
     * @param \Pggns\MidocoApi\OrderSD\StructType\MidocoBaggageAllowance $midocoBaggageAllowance
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveMidocoBaggageAllowanceRequest
     */
    public function setMidocoBaggageAllowance(?\Pggns\MidocoApi\OrderSD\StructType\MidocoBaggageAllowance $midocoBaggageAllowance = null): self
    {
        $this->MidocoBaggageAllowance = $midocoBaggageAllowance;
        
        return $this;
    }
}
