<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavePaxconnectQueueRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SavePaxconnectQueueRequest extends AbstractStructBase
{
    /**
     * The MidocoPaxconnectQueue
     * Meta information extracted from the WSDL
     * - ref: MidocoPaxconnectQueue
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoPaxconnectQueue|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoPaxconnectQueue $MidocoPaxconnectQueue = null;
    /**
     * Constructor method for SavePaxconnectQueueRequest
     * @uses SavePaxconnectQueueRequest::setMidocoPaxconnectQueue()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoPaxconnectQueue $midocoPaxconnectQueue
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoPaxconnectQueue $midocoPaxconnectQueue = null)
    {
        $this
            ->setMidocoPaxconnectQueue($midocoPaxconnectQueue);
    }
    /**
     * Get MidocoPaxconnectQueue value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoPaxconnectQueue|null
     */
    public function getMidocoPaxconnectQueue(): ?\Pggns\MidocoApi\Crm\StructType\MidocoPaxconnectQueue
    {
        return $this->MidocoPaxconnectQueue;
    }
    /**
     * Set MidocoPaxconnectQueue value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoPaxconnectQueue $midocoPaxconnectQueue
     * @return \Pggns\MidocoApi\Crm\StructType\SavePaxconnectQueueRequest
     */
    public function setMidocoPaxconnectQueue(?\Pggns\MidocoApi\Crm\StructType\MidocoPaxconnectQueue $midocoPaxconnectQueue = null): self
    {
        $this->MidocoPaxconnectQueue = $midocoPaxconnectQueue;
        
        return $this;
    }
}
