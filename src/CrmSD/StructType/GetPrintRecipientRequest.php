<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPrintRecipientRequest StructType
 * @subpackage Structs
 */
class GetPrintRecipientRequest extends AbstractStructBase
{
    /**
     * The MidocoCustomerId
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerId
     * @var \Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO $MidocoCustomerId = null;
    /**
     * Constructor method for GetPrintRecipientRequest
     * @uses GetPrintRecipientRequest::setMidocoCustomerId()
     * @param \Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO $midocoCustomerId
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO $midocoCustomerId = null)
    {
        $this
            ->setMidocoCustomerId($midocoCustomerId);
    }
    /**
     * Get MidocoCustomerId value
     * @return \Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO|null
     */
    public function getMidocoCustomerId(): ?\Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO
    {
        return $this->MidocoCustomerId;
    }
    /**
     * Set MidocoCustomerId value
     * @param \Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO $midocoCustomerId
     * @return \Pggns\MidocoApi\CrmSD\StructType\GetPrintRecipientRequest
     */
    public function setMidocoCustomerId(?\Pggns\MidocoApi\CrmSD\StructType\CustomerIdDTO $midocoCustomerId = null): self
    {
        $this->MidocoCustomerId = $midocoCustomerId;
        
        return $this;
    }
}
