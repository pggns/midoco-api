<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintMidocoMandateRequest StructType
 * @subpackage Structs
 */
class PrintMidocoMandateRequest extends AbstractStructBase
{
    /**
     * The MidocoMandate
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - ref: MidocoMandate
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoMandate
     */
    protected \Pggns\MidocoApi\Api\Crm\StructType\MidocoMandate $MidocoMandate;
    /**
     * Constructor method for PrintMidocoMandateRequest
     * @uses PrintMidocoMandateRequest::setMidocoMandate()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoMandate $midocoMandate
     */
    public function __construct(\Pggns\MidocoApi\Api\Crm\StructType\MidocoMandate $midocoMandate)
    {
        $this
            ->setMidocoMandate($midocoMandate);
    }
    /**
     * Get MidocoMandate value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoMandate
     */
    public function getMidocoMandate(): \Pggns\MidocoApi\Api\Crm\StructType\MidocoMandate
    {
        return $this->MidocoMandate;
    }
    /**
     * Set MidocoMandate value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoMandate $midocoMandate
     * @return \Pggns\MidocoApi\Api\Crm\StructType\PrintMidocoMandateRequest
     */
    public function setMidocoMandate(\Pggns\MidocoApi\Api\Crm\StructType\MidocoMandate $midocoMandate): self
    {
        $this->MidocoMandate = $midocoMandate;
        
        return $this;
    }
}
