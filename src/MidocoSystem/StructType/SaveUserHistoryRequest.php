<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\MidocoSystem\StructType;

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
     * @var \Pggns\MidocoApi\MidocoSystem\StructType\UserHistoryDTO|null
     */
    protected ?\Pggns\MidocoApi\MidocoSystem\StructType\UserHistoryDTO $MidocoUserHistory = null;
    /**
     * Constructor method for SaveUserHistoryRequest
     * @uses SaveUserHistoryRequest::setMidocoUserHistory()
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\UserHistoryDTO $midocoUserHistory
     */
    public function __construct(?\Pggns\MidocoApi\MidocoSystem\StructType\UserHistoryDTO $midocoUserHistory = null)
    {
        $this
            ->setMidocoUserHistory($midocoUserHistory);
    }
    /**
     * Get MidocoUserHistory value
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\UserHistoryDTO|null
     */
    public function getMidocoUserHistory(): ?\Pggns\MidocoApi\MidocoSystem\StructType\UserHistoryDTO
    {
        return $this->MidocoUserHistory;
    }
    /**
     * Set MidocoUserHistory value
     * @param \Pggns\MidocoApi\MidocoSystem\StructType\UserHistoryDTO $midocoUserHistory
     * @return \Pggns\MidocoApi\MidocoSystem\StructType\SaveUserHistoryRequest
     */
    public function setMidocoUserHistory(?\Pggns\MidocoApi\MidocoSystem\StructType\UserHistoryDTO $midocoUserHistory = null): self
    {
        $this->MidocoUserHistory = $midocoUserHistory;
        
        return $this;
    }
}
