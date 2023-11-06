<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoMandateRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoMandateRequest extends AbstractStructBase
{
    /**
     * The MidocoMandate
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - ref: MidocoMandate
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoMandate
     */
    protected \Pggns\MidocoApi\Crm\StructType\MidocoMandate $MidocoMandate;
    /**
     * Constructor method for SaveMidocoMandateRequest
     * @uses SaveMidocoMandateRequest::setMidocoMandate()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMandate $midocoMandate
     */
    public function __construct(\Pggns\MidocoApi\Crm\StructType\MidocoMandate $midocoMandate)
    {
        $this
            ->setMidocoMandate($midocoMandate);
    }
    /**
     * Get MidocoMandate value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMandate
     */
    public function getMidocoMandate(): \Pggns\MidocoApi\Crm\StructType\MidocoMandate
    {
        return $this->MidocoMandate;
    }
    /**
     * Set MidocoMandate value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMandate $midocoMandate
     * @return \Pggns\MidocoApi\Crm\StructType\SaveMidocoMandateRequest
     */
    public function setMidocoMandate(\Pggns\MidocoApi\Crm\StructType\MidocoMandate $midocoMandate): self
    {
        $this->MidocoMandate = $midocoMandate;
        
        return $this;
    }
}
