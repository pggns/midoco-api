<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Booking\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTempPrintjobRequest StructType
 * @subpackage Structs
 */
class SaveTempPrintjobRequest extends AbstractStructBase
{
    /**
     * The MidocoTempPrintjob
     * Meta information extracted from the WSDL
     * - ref: MidocoTempPrintjob
     * @var \Pggns\MidocoApi\Booking\StructType\MidocoTempPrintjob|null
     */
    protected ?\Pggns\MidocoApi\Booking\StructType\MidocoTempPrintjob $MidocoTempPrintjob = null;
    /**
     * Constructor method for SaveTempPrintjobRequest
     * @uses SaveTempPrintjobRequest::setMidocoTempPrintjob()
     * @param \Pggns\MidocoApi\Booking\StructType\MidocoTempPrintjob $midocoTempPrintjob
     */
    public function __construct(?\Pggns\MidocoApi\Booking\StructType\MidocoTempPrintjob $midocoTempPrintjob = null)
    {
        $this
            ->setMidocoTempPrintjob($midocoTempPrintjob);
    }
    /**
     * Get MidocoTempPrintjob value
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoTempPrintjob|null
     */
    public function getMidocoTempPrintjob(): ?\Pggns\MidocoApi\Booking\StructType\MidocoTempPrintjob
    {
        return $this->MidocoTempPrintjob;
    }
    /**
     * Set MidocoTempPrintjob value
     * @param \Pggns\MidocoApi\Booking\StructType\MidocoTempPrintjob $midocoTempPrintjob
     * @return \Pggns\MidocoApi\Booking\StructType\SaveTempPrintjobRequest
     */
    public function setMidocoTempPrintjob(?\Pggns\MidocoApi\Booking\StructType\MidocoTempPrintjob $midocoTempPrintjob = null): self
    {
        $this->MidocoTempPrintjob = $midocoTempPrintjob;
        
        return $this;
    }
}
