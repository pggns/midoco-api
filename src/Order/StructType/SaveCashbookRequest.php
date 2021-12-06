<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCashbookRequest StructType
 * @subpackage Structs
 */
class SaveCashbookRequest extends AbstractStructBase
{
    /**
     * The CashBookInfo
     * Meta information extracted from the WSDL
     * - ref: CashBookInfo
     * @var \Pggns\MidocoApi\Api\Order\StructType\CashBookInfo|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\CashBookInfo $CashBookInfo = null;
    /**
     * Constructor method for SaveCashbookRequest
     * @uses SaveCashbookRequest::setCashBookInfo()
     * @param \Pggns\MidocoApi\Api\Order\StructType\CashBookInfo $cashBookInfo
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\CashBookInfo $cashBookInfo = null)
    {
        $this
            ->setCashBookInfo($cashBookInfo);
    }
    /**
     * Get CashBookInfo value
     * @return \Pggns\MidocoApi\Api\Order\StructType\CashBookInfo|null
     */
    public function getCashBookInfo(): ?\Pggns\MidocoApi\Api\Order\StructType\CashBookInfo
    {
        return $this->CashBookInfo;
    }
    /**
     * Set CashBookInfo value
     * @param \Pggns\MidocoApi\Api\Order\StructType\CashBookInfo $cashBookInfo
     * @return \Pggns\MidocoApi\Api\Order\StructType\SaveCashbookRequest
     */
    public function setCashBookInfo(?\Pggns\MidocoApi\Api\Order\StructType\CashBookInfo $cashBookInfo = null): self
    {
        $this->CashBookInfo = $cashBookInfo;
        
        return $this;
    }
}
