<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBillingMandateResponse StructType
 * @subpackage Structs
 */
class GetBillingMandateResponse extends AbstractStructBase
{
    /**
     * The MidocoMandate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoMandate
     * @var \Pggns\MidocoApi\Api\Crm\StructType\MidocoMandate|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoMandate $MidocoMandate = null;
    /**
     * Constructor method for GetBillingMandateResponse
     * @uses GetBillingMandateResponse::setMidocoMandate()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoMandate $midocoMandate
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoMandate $midocoMandate = null)
    {
        $this
            ->setMidocoMandate($midocoMandate);
    }
    /**
     * Get MidocoMandate value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\MidocoMandate|null
     */
    public function getMidocoMandate(): ?\Pggns\MidocoApi\Api\Crm\StructType\MidocoMandate
    {
        return $this->MidocoMandate;
    }
    /**
     * Set MidocoMandate value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\MidocoMandate $midocoMandate
     * @return \Pggns\MidocoApi\Api\Crm\StructType\GetBillingMandateResponse
     */
    public function setMidocoMandate(?\Pggns\MidocoApi\Api\Crm\StructType\MidocoMandate $midocoMandate = null): self
    {
        $this->MidocoMandate = $midocoMandate;
        
        return $this;
    }
}
