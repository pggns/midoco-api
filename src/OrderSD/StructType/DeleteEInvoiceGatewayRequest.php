<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteEInvoiceGatewayRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Delete an e-invoice gateway configuration. The only required fields are orgUnit and gateway. The E-Mail gateway can not be deleted.
 * @subpackage Structs
 */
class DeleteEInvoiceGatewayRequest extends AbstractStructBase
{
    /**
     * The MidocoEInvoiceGateway
     * Meta information extracted from the WSDL
     * - ref: MidocoEInvoiceGateway
     * @var \Pggns\MidocoApi\OrderSD\StructType\EinvoiceGatewayDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\EinvoiceGatewayDTO $MidocoEInvoiceGateway = null;
    /**
     * Constructor method for DeleteEInvoiceGatewayRequest
     * @uses DeleteEInvoiceGatewayRequest::setMidocoEInvoiceGateway()
     * @param \Pggns\MidocoApi\OrderSD\StructType\EinvoiceGatewayDTO $midocoEInvoiceGateway
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\EinvoiceGatewayDTO $midocoEInvoiceGateway = null)
    {
        $this
            ->setMidocoEInvoiceGateway($midocoEInvoiceGateway);
    }
    /**
     * Get MidocoEInvoiceGateway value
     * @return \Pggns\MidocoApi\OrderSD\StructType\EinvoiceGatewayDTO|null
     */
    public function getMidocoEInvoiceGateway(): ?\Pggns\MidocoApi\OrderSD\StructType\EinvoiceGatewayDTO
    {
        return $this->MidocoEInvoiceGateway;
    }
    /**
     * Set MidocoEInvoiceGateway value
     * @param \Pggns\MidocoApi\OrderSD\StructType\EinvoiceGatewayDTO $midocoEInvoiceGateway
     * @return \Pggns\MidocoApi\OrderSD\StructType\DeleteEInvoiceGatewayRequest
     */
    public function setMidocoEInvoiceGateway(?\Pggns\MidocoApi\OrderSD\StructType\EinvoiceGatewayDTO $midocoEInvoiceGateway = null): self
    {
        $this->MidocoEInvoiceGateway = $midocoEInvoiceGateway;
        
        return $this;
    }
}
