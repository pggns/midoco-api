<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoOrderQmRequest StructType
 * @subpackage Structs
 */
class SaveMidocoOrderQmRequest extends AbstractStructBase
{
    /**
     * The MidocoOrderQm
     * Meta information extracted from the WSDL
     * - ref: MidocoOrderQm
     * @var \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderQm|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderQm $MidocoOrderQm = null;
    /**
     * Constructor method for SaveMidocoOrderQmRequest
     * @uses SaveMidocoOrderQmRequest::setMidocoOrderQm()
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderQm $midocoOrderQm
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderQm $midocoOrderQm = null)
    {
        $this
            ->setMidocoOrderQm($midocoOrderQm);
    }
    /**
     * Get MidocoOrderQm value
     * @return \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderQm|null
     */
    public function getMidocoOrderQm(): ?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderQm
    {
        return $this->MidocoOrderQm;
    }
    /**
     * Set MidocoOrderQm value
     * @param \Pggns\MidocoApi\Api\Order\StructType\MidocoOrderQm $midocoOrderQm
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveMidocoOrderQmRequest
     */
    public function setMidocoOrderQm(?\Pggns\MidocoApi\Api\Order\StructType\MidocoOrderQm $midocoOrderQm = null): self
    {
        $this->MidocoOrderQm = $midocoOrderQm;
        
        return $this;
    }
}
