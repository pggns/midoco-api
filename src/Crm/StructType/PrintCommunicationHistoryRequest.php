<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintCommunicationHistoryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class PrintCommunicationHistoryRequest extends AbstractStructBase
{
    /**
     * The MidocoCommunicationHistory
     * Meta information extracted from the WSDL
     * - ref: MidocoCommunicationHistory
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCommunicationHistory|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCommunicationHistory $MidocoCommunicationHistory = null;
    /**
     * Constructor method for PrintCommunicationHistoryRequest
     * @uses PrintCommunicationHistoryRequest::setMidocoCommunicationHistory()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCommunicationHistory $midocoCommunicationHistory
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoCommunicationHistory $midocoCommunicationHistory = null)
    {
        $this
            ->setMidocoCommunicationHistory($midocoCommunicationHistory);
    }
    /**
     * Get MidocoCommunicationHistory value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCommunicationHistory|null
     */
    public function getMidocoCommunicationHistory(): ?\Pggns\MidocoApi\Crm\StructType\MidocoCommunicationHistory
    {
        return $this->MidocoCommunicationHistory;
    }
    /**
     * Set MidocoCommunicationHistory value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCommunicationHistory $midocoCommunicationHistory
     * @return \Pggns\MidocoApi\Crm\StructType\PrintCommunicationHistoryRequest
     */
    public function setMidocoCommunicationHistory(?\Pggns\MidocoApi\Crm\StructType\MidocoCommunicationHistory $midocoCommunicationHistory = null): self
    {
        $this->MidocoCommunicationHistory = $midocoCommunicationHistory;
        
        return $this;
    }
}
