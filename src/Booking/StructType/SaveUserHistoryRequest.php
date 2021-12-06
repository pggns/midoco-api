<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Booking\StructType;

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
     * @var \Pggns\MidocoApi\Booking\StructType\UserHistoryDTO|null
     */
    protected ?\Pggns\MidocoApi\Booking\StructType\UserHistoryDTO $MidocoUserHistory = null;
    /**
     * Constructor method for SaveUserHistoryRequest
     * @uses SaveUserHistoryRequest::setMidocoUserHistory()
     * @param \Pggns\MidocoApi\Booking\StructType\UserHistoryDTO $midocoUserHistory
     */
    public function __construct(?\Pggns\MidocoApi\Booking\StructType\UserHistoryDTO $midocoUserHistory = null)
    {
        $this
            ->setMidocoUserHistory($midocoUserHistory);
    }
    /**
     * Get MidocoUserHistory value
     * @return \Pggns\MidocoApi\Booking\StructType\UserHistoryDTO|null
     */
    public function getMidocoUserHistory(): ?\Pggns\MidocoApi\Booking\StructType\UserHistoryDTO
    {
        return $this->MidocoUserHistory;
    }
    /**
     * Set MidocoUserHistory value
     * @param \Pggns\MidocoApi\Booking\StructType\UserHistoryDTO $midocoUserHistory
     * @return \Pggns\MidocoApi\Booking\StructType\SaveUserHistoryRequest
     */
    public function setMidocoUserHistory(?\Pggns\MidocoApi\Booking\StructType\UserHistoryDTO $midocoUserHistory = null): self
    {
        $this->MidocoUserHistory = $midocoUserHistory;
        
        return $this;
    }
}
