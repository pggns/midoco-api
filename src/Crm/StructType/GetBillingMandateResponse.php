<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingMandateResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetBillingMandateResponse extends AbstractStructBase
{
    /**
     * The MidocoMandate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoMandate
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoMandate|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoMandate $MidocoMandate = null;
    /**
     * Constructor method for GetBillingMandateResponse
     * @uses GetBillingMandateResponse::setMidocoMandate()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMandate $midocoMandate
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoMandate $midocoMandate = null)
    {
        $this
            ->setMidocoMandate($midocoMandate);
    }
    /**
     * Get MidocoMandate value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoMandate|null
     */
    public function getMidocoMandate(): ?\Pggns\MidocoApi\Crm\StructType\MidocoMandate
    {
        return $this->MidocoMandate;
    }
    /**
     * Set MidocoMandate value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoMandate $midocoMandate
     * @return \Pggns\MidocoApi\Crm\StructType\GetBillingMandateResponse
     */
    public function setMidocoMandate(?\Pggns\MidocoApi\Crm\StructType\MidocoMandate $midocoMandate = null): self
    {
        $this->MidocoMandate = $midocoMandate;
        
        return $this;
    }
}
