<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetSalutationsRequest StructType
 * @subpackage Structs
 */
class GetSalutationsRequest extends AbstractStructBase
{
    /**
     * The MidocoSalutation
     * Meta information extracted from the WSDL
     * - ref: MidocoSalutation
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoSalutation|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoSalutation $MidocoSalutation = null;
    /**
     * Constructor method for GetSalutationsRequest
     * @uses GetSalutationsRequest::setMidocoSalutation()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoSalutation $midocoSalutation
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoSalutation $midocoSalutation = null)
    {
        $this
            ->setMidocoSalutation($midocoSalutation);
    }
    /**
     * Get MidocoSalutation value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoSalutation|null
     */
    public function getMidocoSalutation(): ?\Pggns\MidocoApi\Crm\StructType\MidocoSalutation
    {
        return $this->MidocoSalutation;
    }
    /**
     * Set MidocoSalutation value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoSalutation $midocoSalutation
     * @return \Pggns\MidocoApi\Crm\StructType\GetSalutationsRequest
     */
    public function setMidocoSalutation(?\Pggns\MidocoApi\Crm\StructType\MidocoSalutation $midocoSalutation = null): self
    {
        $this->MidocoSalutation = $midocoSalutation;
        
        return $this;
    }
}
