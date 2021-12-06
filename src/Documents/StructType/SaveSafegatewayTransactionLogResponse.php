<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSafegatewayTransactionLogResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the requestId
 * @subpackage Structs
 */
class SaveSafegatewayTransactionLogResponse extends AbstractStructBase
{
    /**
     * The SafegatewayTransaction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Pggns\MidocoApi\Documents\StructType\SafegatewayTransactionLogDTO
     */
    protected \Pggns\MidocoApi\Documents\StructType\SafegatewayTransactionLogDTO $SafegatewayTransaction;
    /**
     * Constructor method for SaveSafegatewayTransactionLogResponse
     * @uses SaveSafegatewayTransactionLogResponse::setSafegatewayTransaction()
     * @param \Pggns\MidocoApi\Documents\StructType\SafegatewayTransactionLogDTO $safegatewayTransaction
     */
    public function __construct(\Pggns\MidocoApi\Documents\StructType\SafegatewayTransactionLogDTO $safegatewayTransaction)
    {
        $this
            ->setSafegatewayTransaction($safegatewayTransaction);
    }
    /**
     * Get SafegatewayTransaction value
     * @return \Pggns\MidocoApi\Documents\StructType\SafegatewayTransactionLogDTO
     */
    public function getSafegatewayTransaction(): \Pggns\MidocoApi\Documents\StructType\SafegatewayTransactionLogDTO
    {
        return $this->SafegatewayTransaction;
    }
    /**
     * Set SafegatewayTransaction value
     * @param \Pggns\MidocoApi\Documents\StructType\SafegatewayTransactionLogDTO $safegatewayTransaction
     * @return \Pggns\MidocoApi\Documents\StructType\SaveSafegatewayTransactionLogResponse
     */
    public function setSafegatewayTransaction(\Pggns\MidocoApi\Documents\StructType\SafegatewayTransactionLogDTO $safegatewayTransaction): self
    {
        $this->SafegatewayTransaction = $safegatewayTransaction;
        
        return $this;
    }
}
