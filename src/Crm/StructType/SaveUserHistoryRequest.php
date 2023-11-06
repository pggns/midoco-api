<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveUserHistoryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveUserHistoryRequest extends AbstractStructBase
{
    /**
     * The MidocoUserHistory
     * Meta information extracted from the WSDL
     * - ref: MidocoUserHistory
     * @var \Pggns\MidocoApi\Crm\StructType\UserHistoryDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\UserHistoryDTO $MidocoUserHistory = null;
    /**
     * Constructor method for SaveUserHistoryRequest
     * @uses SaveUserHistoryRequest::setMidocoUserHistory()
     * @param \Pggns\MidocoApi\Crm\StructType\UserHistoryDTO $midocoUserHistory
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\UserHistoryDTO $midocoUserHistory = null)
    {
        $this
            ->setMidocoUserHistory($midocoUserHistory);
    }
    /**
     * Get MidocoUserHistory value
     * @return \Pggns\MidocoApi\Crm\StructType\UserHistoryDTO|null
     */
    public function getMidocoUserHistory(): ?\Pggns\MidocoApi\Crm\StructType\UserHistoryDTO
    {
        return $this->MidocoUserHistory;
    }
    /**
     * Set MidocoUserHistory value
     * @param \Pggns\MidocoApi\Crm\StructType\UserHistoryDTO $midocoUserHistory
     * @return \Pggns\MidocoApi\Crm\StructType\SaveUserHistoryRequest
     */
    public function setMidocoUserHistory(?\Pggns\MidocoApi\Crm\StructType\UserHistoryDTO $midocoUserHistory = null): self
    {
        $this->MidocoUserHistory = $midocoUserHistory;
        
        return $this;
    }
}
