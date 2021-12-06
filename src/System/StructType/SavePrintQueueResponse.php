<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavePrintQueueResponse StructType
 * @subpackage Structs
 */
class SavePrintQueueResponse extends AbstractStructBase
{
    /**
     * The MidocoPrintQueue
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoPrintQueue
     * @var \Pggns\MidocoApi\System\StructType\PrintQueueDTO
     */
    protected \Pggns\MidocoApi\System\StructType\PrintQueueDTO $MidocoPrintQueue;
    /**
     * Constructor method for SavePrintQueueResponse
     * @uses SavePrintQueueResponse::setMidocoPrintQueue()
     * @param \Pggns\MidocoApi\System\StructType\PrintQueueDTO $midocoPrintQueue
     */
    public function __construct(\Pggns\MidocoApi\System\StructType\PrintQueueDTO $midocoPrintQueue)
    {
        $this
            ->setMidocoPrintQueue($midocoPrintQueue);
    }
    /**
     * Get MidocoPrintQueue value
     * @return \Pggns\MidocoApi\System\StructType\PrintQueueDTO
     */
    public function getMidocoPrintQueue(): \Pggns\MidocoApi\System\StructType\PrintQueueDTO
    {
        return $this->MidocoPrintQueue;
    }
    /**
     * Set MidocoPrintQueue value
     * @param \Pggns\MidocoApi\System\StructType\PrintQueueDTO $midocoPrintQueue
     * @return \Pggns\MidocoApi\System\StructType\SavePrintQueueResponse
     */
    public function setMidocoPrintQueue(\Pggns\MidocoApi\System\StructType\PrintQueueDTO $midocoPrintQueue): self
    {
        $this->MidocoPrintQueue = $midocoPrintQueue;
        
        return $this;
    }
}
