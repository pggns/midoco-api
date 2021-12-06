<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

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
     * @var \Pggns\MidocoApi\Documents\StructType\PrintQueueDTO
     */
    protected \Pggns\MidocoApi\Documents\StructType\PrintQueueDTO $MidocoPrintQueue;
    /**
     * Constructor method for SavePrintQueueResponse
     * @uses SavePrintQueueResponse::setMidocoPrintQueue()
     * @param \Pggns\MidocoApi\Documents\StructType\PrintQueueDTO $midocoPrintQueue
     */
    public function __construct(\Pggns\MidocoApi\Documents\StructType\PrintQueueDTO $midocoPrintQueue)
    {
        $this
            ->setMidocoPrintQueue($midocoPrintQueue);
    }
    /**
     * Get MidocoPrintQueue value
     * @return \Pggns\MidocoApi\Documents\StructType\PrintQueueDTO
     */
    public function getMidocoPrintQueue(): \Pggns\MidocoApi\Documents\StructType\PrintQueueDTO
    {
        return $this->MidocoPrintQueue;
    }
    /**
     * Set MidocoPrintQueue value
     * @param \Pggns\MidocoApi\Documents\StructType\PrintQueueDTO $midocoPrintQueue
     * @return \Pggns\MidocoApi\Documents\StructType\SavePrintQueueResponse
     */
    public function setMidocoPrintQueue(\Pggns\MidocoApi\Documents\StructType\PrintQueueDTO $midocoPrintQueue): self
    {
        $this->MidocoPrintQueue = $midocoPrintQueue;
        
        return $this;
    }
}
