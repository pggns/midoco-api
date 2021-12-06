<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveCrmHistoryRequest StructType
 * @subpackage Structs
 */
class SaveCrmHistoryRequest extends AbstractStructBase
{
    /**
     * The MidocoCrmHistory
     * Meta information extracted from the WSDL
     * - ref: MidocoCrmHistory
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\CrmHistoryDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmHistoryDTO $MidocoCrmHistory = null;
    /**
     * Constructor method for SaveCrmHistoryRequest
     * @uses SaveCrmHistoryRequest::setMidocoCrmHistory()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CrmHistoryDTO $midocoCrmHistory
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmHistoryDTO $midocoCrmHistory = null)
    {
        $this
            ->setMidocoCrmHistory($midocoCrmHistory);
    }
    /**
     * Get MidocoCrmHistory value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\CrmHistoryDTO|null
     */
    public function getMidocoCrmHistory(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmHistoryDTO
    {
        return $this->MidocoCrmHistory;
    }
    /**
     * Set MidocoCrmHistory value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\CrmHistoryDTO $midocoCrmHistory
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveCrmHistoryRequest
     */
    public function setMidocoCrmHistory(?\Pggns\MidocoApi\Api\CrmSD\StructType\CrmHistoryDTO $midocoCrmHistory = null): self
    {
        $this->MidocoCrmHistory = $midocoCrmHistory;
        
        return $this;
    }
}
