<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSafegatewayTransactionLogResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the requestId
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveSafegatewayTransactionLogResponse extends AbstractStructBase
{
    /**
     * The SafegatewayTransaction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\SafegatewayTransactionLogDTO
     */
    protected \Pggns\MidocoApi\MidocoSystem\StructType\SafegatewayTransactionLogDTO $SafegatewayTransaction;
    /**
     * Constructor method for SaveSafegatewayTransactionLogResponse
     * @uses SaveSafegatewayTransactionLogResponse::setSafegatewayTransaction()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\SafegatewayTransactionLogDTO $safegatewayTransaction
     */
    public function __construct(\Pggns\MidocoApi\MidocoSystem\StructType\SafegatewayTransactionLogDTO $safegatewayTransaction)
    {
        $this
            ->setSafegatewayTransaction($safegatewayTransaction);
    }
    /**
     * Get SafegatewayTransaction value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SafegatewayTransactionLogDTO
     */
    public function getSafegatewayTransaction(): \Pggns\MidocoApi\MidocoSystem\StructType\SafegatewayTransactionLogDTO
    {
        return $this->SafegatewayTransaction;
    }
    /**
     * Set SafegatewayTransaction value
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\SafegatewayTransactionLogDTO $safegatewayTransaction
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SaveSafegatewayTransactionLogResponse
     */
    public function setSafegatewayTransaction(\Pggns\MidocoApi\MidocoSystem\StructType\SafegatewayTransactionLogDTO $safegatewayTransaction): self
    {
        $this->SafegatewayTransaction = $safegatewayTransaction;
        
        return $this;
    }
}
