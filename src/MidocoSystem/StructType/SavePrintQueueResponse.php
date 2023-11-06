<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SavePrintQueueResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SavePrintQueueResponse extends AbstractStructBase
{
    /**
     * The MidocoPrintQueue
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoPrintQueue
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\PrintQueueDTO
     */
    protected \Pggns\MidocoApi\MidocoSystem\StructType\PrintQueueDTO $MidocoPrintQueue;
    /**
     * Constructor method for SavePrintQueueResponse
     * @uses SavePrintQueueResponse::setMidocoPrintQueue()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\PrintQueueDTO $midocoPrintQueue
     */
    public function __construct(\Pggns\MidocoApi\MidocoSystem\StructType\PrintQueueDTO $midocoPrintQueue)
    {
        $this
            ->setMidocoPrintQueue($midocoPrintQueue);
    }
    /**
     * Get MidocoPrintQueue value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\PrintQueueDTO
     */
    public function getMidocoPrintQueue(): \Pggns\MidocoApi\MidocoSystem\StructType\PrintQueueDTO
    {
        return $this->MidocoPrintQueue;
    }
    /**
     * Set MidocoPrintQueue value
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\PrintQueueDTO $midocoPrintQueue
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SavePrintQueueResponse
     */
    public function setMidocoPrintQueue(\Pggns\MidocoApi\MidocoSystem\StructType\PrintQueueDTO $midocoPrintQueue): self
    {
        $this->MidocoPrintQueue = $midocoPrintQueue;
        
        return $this;
    }
}
