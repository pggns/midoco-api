<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Booking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMergedMfRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMergedMfRequest extends AbstractStructBase
{
    /**
     * The MidocoMf
     * Meta information extracted from the WSDL
     * - ref: MidocoMf
     * @var \Pggns\MidocoApi\Booking\StructType\MidocoMf|null
     */
    protected ?\Pggns\MidocoApi\Booking\StructType\MidocoMf $MidocoMf = null;
    /**
     * Constructor method for DeleteMergedMfRequest
     * @uses DeleteMergedMfRequest::setMidocoMf()
     * @param \Pggns\MidocoApi\Booking\StructType\MidocoMf $midocoMf
     */
    public function __construct(?\Pggns\MidocoApi\Booking\StructType\MidocoMf $midocoMf = null)
    {
        $this
            ->setMidocoMf($midocoMf);
    }
    /**
     * Get MidocoMf value
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoMf|null
     */
    public function getMidocoMf(): ?\Pggns\MidocoApi\Booking\StructType\MidocoMf
    {
        return $this->MidocoMf;
    }
    /**
     * Set MidocoMf value
     * @param \Pggns\MidocoApi\Booking\StructType\MidocoMf $midocoMf
     * @return \Pggns\MidocoApi\Booking\StructType\DeleteMergedMfRequest
     */
    public function setMidocoMf(?\Pggns\MidocoApi\Booking\StructType\MidocoMf $midocoMf = null): self
    {
        $this->MidocoMf = $midocoMf;
        
        return $this;
    }
}
