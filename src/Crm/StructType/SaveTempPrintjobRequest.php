<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoTempPrintjob|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoTempPrintjob $MidocoTempPrintjob = null;
    /**
     * Constructor method for SaveTempPrintjobRequest
     * @uses SaveTempPrintjobRequest::setMidocoTempPrintjob()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoTempPrintjob $midocoTempPrintjob
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoTempPrintjob $midocoTempPrintjob = null)
    {
        $this
            ->setMidocoTempPrintjob($midocoTempPrintjob);
    }
    /**
     * Get MidocoTempPrintjob value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoTempPrintjob|null
     */
    public function getMidocoTempPrintjob(): ?\Pggns\MidocoApi\Crm\StructType\MidocoTempPrintjob
    {
        return $this->MidocoTempPrintjob;
    }
    /**
     * Set MidocoTempPrintjob value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoTempPrintjob $midocoTempPrintjob
     * @return \Pggns\MidocoApi\Crm\StructType\SaveTempPrintjobRequest
     */
    public function setMidocoTempPrintjob(?\Pggns\MidocoApi\Crm\StructType\MidocoTempPrintjob $midocoTempPrintjob = null): self
    {
        $this->MidocoTempPrintjob = $midocoTempPrintjob;
        
        return $this;
    }
}
