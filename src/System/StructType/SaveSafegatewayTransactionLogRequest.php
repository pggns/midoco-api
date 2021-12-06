<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveSafegatewayTransactionLogRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Must not contain a requestId
 * @subpackage Structs
 */
class SaveSafegatewayTransactionLogRequest extends AbstractStructBase
{
    /**
     * The SafegatewayTransaction
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var \Pggns\MidocoApi\System\StructType\SafegatewayTransactionLogDTO
     */
    protected \Pggns\MidocoApi\System\StructType\SafegatewayTransactionLogDTO $SafegatewayTransaction;
    /**
     * Constructor method for SaveSafegatewayTransactionLogRequest
     * @uses SaveSafegatewayTransactionLogRequest::setSafegatewayTransaction()
     * @param \Pggns\MidocoApi\System\StructType\SafegatewayTransactionLogDTO $safegatewayTransaction
     */
    public function __construct(\Pggns\MidocoApi\System\StructType\SafegatewayTransactionLogDTO $safegatewayTransaction)
    {
        $this
            ->setSafegatewayTransaction($safegatewayTransaction);
    }
    /**
     * Get SafegatewayTransaction value
     * @return \Pggns\MidocoApi\System\StructType\SafegatewayTransactionLogDTO
     */
    public function getSafegatewayTransaction(): \Pggns\MidocoApi\System\StructType\SafegatewayTransactionLogDTO
    {
        return $this->SafegatewayTransaction;
    }
    /**
     * Set SafegatewayTransaction value
     * @param \Pggns\MidocoApi\System\StructType\SafegatewayTransactionLogDTO $safegatewayTransaction
     * @return \Pggns\MidocoApi\System\StructType\SaveSafegatewayTransactionLogRequest
     */
    public function setSafegatewayTransaction(\Pggns\MidocoApi\System\StructType\SafegatewayTransactionLogDTO $safegatewayTransaction): self
    {
        $this->SafegatewayTransaction = $safegatewayTransaction;
        
        return $this;
    }
}
