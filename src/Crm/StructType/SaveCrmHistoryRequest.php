<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Crm\StructType\CrmHistoryDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\CrmHistoryDTO $MidocoCrmHistory = null;
    /**
     * Constructor method for SaveCrmHistoryRequest
     * @uses SaveCrmHistoryRequest::setMidocoCrmHistory()
     * @param \Pggns\MidocoApi\Crm\StructType\CrmHistoryDTO $midocoCrmHistory
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\CrmHistoryDTO $midocoCrmHistory = null)
    {
        $this
            ->setMidocoCrmHistory($midocoCrmHistory);
    }
    /**
     * Get MidocoCrmHistory value
     * @return \Pggns\MidocoApi\Crm\StructType\CrmHistoryDTO|null
     */
    public function getMidocoCrmHistory(): ?\Pggns\MidocoApi\Crm\StructType\CrmHistoryDTO
    {
        return $this->MidocoCrmHistory;
    }
    /**
     * Set MidocoCrmHistory value
     * @param \Pggns\MidocoApi\Crm\StructType\CrmHistoryDTO $midocoCrmHistory
     * @return \Pggns\MidocoApi\Crm\StructType\SaveCrmHistoryRequest
     */
    public function setMidocoCrmHistory(?\Pggns\MidocoApi\Crm\StructType\CrmHistoryDTO $midocoCrmHistory = null): self
    {
        $this->MidocoCrmHistory = $midocoCrmHistory;
        
        return $this;
    }
}
