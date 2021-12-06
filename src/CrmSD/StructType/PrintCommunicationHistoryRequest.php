<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrintCommunicationHistoryRequest StructType
 * @subpackage Structs
 */
class PrintCommunicationHistoryRequest extends AbstractStructBase
{
    /**
     * The MidocoCommunicationHistory
     * Meta information extracted from the WSDL
     * - ref: MidocoCommunicationHistory
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCommunicationHistory|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCommunicationHistory $MidocoCommunicationHistory = null;
    /**
     * Constructor method for PrintCommunicationHistoryRequest
     * @uses PrintCommunicationHistoryRequest::setMidocoCommunicationHistory()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCommunicationHistory $midocoCommunicationHistory
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCommunicationHistory $midocoCommunicationHistory = null)
    {
        $this
            ->setMidocoCommunicationHistory($midocoCommunicationHistory);
    }
    /**
     * Get MidocoCommunicationHistory value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCommunicationHistory|null
     */
    public function getMidocoCommunicationHistory(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCommunicationHistory
    {
        return $this->MidocoCommunicationHistory;
    }
    /**
     * Set MidocoCommunicationHistory value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCommunicationHistory $midocoCommunicationHistory
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\PrintCommunicationHistoryRequest
     */
    public function setMidocoCommunicationHistory(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCommunicationHistory $midocoCommunicationHistory = null): self
    {
        $this->MidocoCommunicationHistory = $midocoCommunicationHistory;
        
        return $this;
    }
}
