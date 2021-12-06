<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveUserHistoryRequest StructType
 * @subpackage Structs
 */
class SaveUserHistoryRequest extends AbstractStructBase
{
    /**
     * The MidocoUserHistory
     * Meta information extracted from the WSDL
     * - ref: MidocoUserHistory
     * @var \Pggns\MidocoApi\OrderSD\StructType\UserHistoryDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\UserHistoryDTO $MidocoUserHistory = null;
    /**
     * Constructor method for SaveUserHistoryRequest
     * @uses SaveUserHistoryRequest::setMidocoUserHistory()
     * @param \Pggns\MidocoApi\OrderSD\StructType\UserHistoryDTO $midocoUserHistory
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\UserHistoryDTO $midocoUserHistory = null)
    {
        $this
            ->setMidocoUserHistory($midocoUserHistory);
    }
    /**
     * Get MidocoUserHistory value
     * @return \Pggns\MidocoApi\OrderSD\StructType\UserHistoryDTO|null
     */
    public function getMidocoUserHistory(): ?\Pggns\MidocoApi\OrderSD\StructType\UserHistoryDTO
    {
        return $this->MidocoUserHistory;
    }
    /**
     * Set MidocoUserHistory value
     * @param \Pggns\MidocoApi\OrderSD\StructType\UserHistoryDTO $midocoUserHistory
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveUserHistoryRequest
     */
    public function setMidocoUserHistory(?\Pggns\MidocoApi\OrderSD\StructType\UserHistoryDTO $midocoUserHistory = null): self
    {
        $this->MidocoUserHistory = $midocoUserHistory;
        
        return $this;
    }
}
