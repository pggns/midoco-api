<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetFinishedFlagRequest StructType
 * @subpackage Structs
 */
class SetFinishedFlagRequest extends AbstractStructBase
{
    /**
     * The CashBookPrintInfo
     * Meta information extracted from the WSDL
     * - ref: CashBookPrintInfo
     * @var \Pggns\MidocoApi\Api\Order\StructType\CashBookPrintDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\CashBookPrintDTO $CashBookPrintInfo = null;
    /**
     * Constructor method for SetFinishedFlagRequest
     * @uses SetFinishedFlagRequest::setCashBookPrintInfo()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CashBookPrintDTO $cashBookPrintInfo
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\CashBookPrintDTO $cashBookPrintInfo = null)
    {
        $this
            ->setCashBookPrintInfo($cashBookPrintInfo);
    }
    /**
     * Get CashBookPrintInfo value
     * @return \Pggns\MidocoApi\Api\Order\StructType\CashBookPrintDTO|null
     */
    public function getCashBookPrintInfo(): ?\Pggns\MidocoApi\Api\Order\StructType\CashBookPrintDTO
    {
        return $this->CashBookPrintInfo;
    }
    /**
     * Set CashBookPrintInfo value
     * @param \Pggns\MidocoApi\Api\Order\StructType\CashBookPrintDTO $cashBookPrintInfo
     * @return \Pggns\MidocoApi\Api\Order\StructType\SetFinishedFlagRequest
     */
    public function setCashBookPrintInfo(?\Pggns\MidocoApi\Api\Order\StructType\CashBookPrintDTO $cashBookPrintInfo = null): self
    {
        $this->CashBookPrintInfo = $cashBookPrintInfo;
        
        return $this;
    }
}
