<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Order\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnfinishedTaskTypeStatisticsResponse StructType
 * @subpackage Structs
 */
class UnfinishedTaskTypeStatisticsResponse extends AbstractStructBase
{
    /**
     * The UnfinishedTaskTypeStatisticsErrorMessage
     * Meta information extracted from the WSDL
     * - ref: UnfinishedTaskTypeStatisticsErrorMessage
     * @var \Pggns\MidocoApi\Api\Order\StructType\UnfinishedTaskTypeStatisticsErrorMessage|null
     */
    protected ?\Pggns\MidocoApi\Api\Order\StructType\UnfinishedTaskTypeStatisticsErrorMessage $UnfinishedTaskTypeStatisticsErrorMessage = null;
    /**
     * Constructor method for UnfinishedTaskTypeStatisticsResponse
     * @uses UnfinishedTaskTypeStatisticsResponse::setUnfinishedTaskTypeStatisticsErrorMessage()
     * @param \Pggns\MidocoApi\Api\Order\StructType\UnfinishedTaskTypeStatisticsErrorMessage $unfinishedTaskTypeStatisticsErrorMessage
     */
    public function __construct(?\Pggns\MidocoApi\Api\Order\StructType\UnfinishedTaskTypeStatisticsErrorMessage $unfinishedTaskTypeStatisticsErrorMessage = null)
    {
        $this
            ->setUnfinishedTaskTypeStatisticsErrorMessage($unfinishedTaskTypeStatisticsErrorMessage);
    }
    /**
     * Get UnfinishedTaskTypeStatisticsErrorMessage value
     * @return \Pggns\MidocoApi\Api\Order\StructType\UnfinishedTaskTypeStatisticsErrorMessage|null
     */
    public function getUnfinishedTaskTypeStatisticsErrorMessage(): ?\Pggns\MidocoApi\Api\Order\StructType\UnfinishedTaskTypeStatisticsErrorMessage
    {
        return $this->UnfinishedTaskTypeStatisticsErrorMessage;
    }
    /**
     * Set UnfinishedTaskTypeStatisticsErrorMessage value
     * @param \Pggns\MidocoApi\Api\Order\StructType\UnfinishedTaskTypeStatisticsErrorMessage $unfinishedTaskTypeStatisticsErrorMessage
     * @return \Pggns\MidocoApi\Api\Order\StructType\UnfinishedTaskTypeStatisticsResponse
     */
    public function setUnfinishedTaskTypeStatisticsErrorMessage(?\Pggns\MidocoApi\Api\Order\StructType\UnfinishedTaskTypeStatisticsErrorMessage $unfinishedTaskTypeStatisticsErrorMessage = null): self
    {
        $this->UnfinishedTaskTypeStatisticsErrorMessage = $unfinishedTaskTypeStatisticsErrorMessage;
        
        return $this;
    }
}
