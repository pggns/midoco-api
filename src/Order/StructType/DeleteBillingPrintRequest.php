<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteBillingPrintRequest StructType
 * @subpackage Structs
 */
class DeleteBillingPrintRequest extends AbstractStructBase
{
    /**
     * The MidocoBillingPrint
     * Meta information extracted from the WSDL
     * - ref: MidocoBillingPrint
     * @var \Pggns\MidocoApi\Api\Order\StructType\BillingPrintDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\BillingPrintDTO $MidocoBillingPrint = null;
    /**
     * Constructor method for DeleteBillingPrintRequest
     * @uses DeleteBillingPrintRequest::setMidocoBillingPrint()
     * @param \Pggns\MidocoApi\Api\Order\StructType\BillingPrintDTO $midocoBillingPrint
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\BillingPrintDTO $midocoBillingPrint = null)
    {
        $this
            ->setMidocoBillingPrint($midocoBillingPrint);
    }
    /**
     * Get MidocoBillingPrint value
     * @return \Pggns\MidocoApi\Api\Order\StructType\BillingPrintDTO|null
     */
    public function getMidocoBillingPrint(): ?\Pggns\MidocoApi\Api\Order\StructType\BillingPrintDTO
    {
        return $this->MidocoBillingPrint;
    }
    /**
     * Set MidocoBillingPrint value
     * @param \Pggns\MidocoApi\Api\Order\StructType\BillingPrintDTO $midocoBillingPrint
     * @return \Pggns\MidocoApi\Api\Order\StructType\DeleteBillingPrintRequest
     */
    public function setMidocoBillingPrint(?\Pggns\MidocoApi\Api\Order\StructType\BillingPrintDTO $midocoBillingPrint = null): self
    {
        $this->MidocoBillingPrint = $midocoBillingPrint;
        
        return $this;
    }
}
