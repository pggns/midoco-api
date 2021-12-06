<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCashBookPrintRequest StructType
 * @subpackage Structs
 */
class SaveCashBookPrintRequest extends AbstractStructBase
{
    /**
     * The CashBookPrintInfo
     * Meta information extracted from the WSDL
     * - ref: CashBookPrintInfo
     * @var \Pggns\MidocoApi\Api\Order\StructType\CashBookPrintDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\CashBookPrintDTO $CashBookPrintInfo = null;
    /**
     * Constructor method for SaveCashBookPrintRequest
     * @uses SaveCashBookPrintRequest::setCashBookPrintInfo()
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
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveCashBookPrintRequest
     */
    public function setCashBookPrintInfo(?\Pggns\MidocoApi\Api\Order\StructType\CashBookPrintDTO $cashBookPrintInfo = null): self
    {
        $this->CashBookPrintInfo = $cashBookPrintInfo;
        
        return $this;
    }
}
