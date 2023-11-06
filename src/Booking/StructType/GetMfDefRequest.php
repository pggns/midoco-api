<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Booking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMfDefRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMfDefRequest extends AbstractStructBase
{
    /**
     * The MidocoMfDef
     * Meta information extracted from the WSDL
     * - ref: MidocoMfDef
     * @var \Pggns\MidocoApi\Booking\StructType\MidocoMfDef|null
     */
    protected ?\Pggns\MidocoApi\Booking\StructType\MidocoMfDef $MidocoMfDef = null;
    /**
     * Constructor method for GetMfDefRequest
     * @uses GetMfDefRequest::setMidocoMfDef()
     * @param \Pggns\MidocoApi\Booking\StructType\MidocoMfDef $midocoMfDef
     */
    public function __construct(?\Pggns\MidocoApi\Booking\StructType\MidocoMfDef $midocoMfDef = null)
    {
        $this
            ->setMidocoMfDef($midocoMfDef);
    }
    /**
     * Get MidocoMfDef value
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoMfDef|null
     */
    public function getMidocoMfDef(): ?\Pggns\MidocoApi\Booking\StructType\MidocoMfDef
    {
        return $this->MidocoMfDef;
    }
    /**
     * Set MidocoMfDef value
     * @param \Pggns\MidocoApi\Booking\StructType\MidocoMfDef $midocoMfDef
     * @return \Pggns\MidocoApi\Booking\StructType\GetMfDefRequest
     */
    public function setMidocoMfDef(?\Pggns\MidocoApi\Booking\StructType\MidocoMfDef $midocoMfDef = null): self
    {
        $this->MidocoMfDef = $midocoMfDef;
        
        return $this;
    }
}
