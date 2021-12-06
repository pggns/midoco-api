<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoMandate
     */
    protected \Pggns\MidocoApi\CrmSD\StructType\MidocoMandate $MidocoMandate;
    /**
     * Constructor method for PrintMidocoMandateRequest
     * @uses PrintMidocoMandateRequest::setMidocoMandate()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoMandate $midocoMandate
     */
    public function __construct(\Pggns\MidocoApi\CrmSD\StructType\MidocoMandate $midocoMandate)
    {
        $this
            ->setMidocoMandate($midocoMandate);
    }
    /**
     * Get MidocoMandate value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoMandate
     */
    public function getMidocoMandate(): \Pggns\MidocoApi\CrmSD\StructType\MidocoMandate
    {
        return $this->MidocoMandate;
    }
    /**
     * Set MidocoMandate value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoMandate $midocoMandate
     * @return \Pggns\MidocoApi\CrmSD\StructType\PrintMidocoMandateRequest
     */
    public function setMidocoMandate(\Pggns\MidocoApi\CrmSD\StructType\MidocoMandate $midocoMandate): self
    {
        $this->MidocoMandate = $midocoMandate;
        
        return $this;
    }
}
