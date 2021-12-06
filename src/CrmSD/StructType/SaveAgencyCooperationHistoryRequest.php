<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveAgencyCooperationHistoryRequest StructType
 * @subpackage Structs
 */
class SaveAgencyCooperationHistoryRequest extends AbstractStructBase
{
    /**
     * The MidocoAgencyCooperationHistory
     * Meta information extracted from the WSDL
     * - ref: MidocoAgencyCooperationHistory
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoAgencyCooperationHistory|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoAgencyCooperationHistory $MidocoAgencyCooperationHistory = null;
    /**
     * Constructor method for SaveAgencyCooperationHistoryRequest
     * @uses SaveAgencyCooperationHistoryRequest::setMidocoAgencyCooperationHistory()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoAgencyCooperationHistory $midocoAgencyCooperationHistory
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoAgencyCooperationHistory $midocoAgencyCooperationHistory = null)
    {
        $this
            ->setMidocoAgencyCooperationHistory($midocoAgencyCooperationHistory);
    }
    /**
     * Get MidocoAgencyCooperationHistory value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoAgencyCooperationHistory|null
     */
    public function getMidocoAgencyCooperationHistory(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoAgencyCooperationHistory
    {
        return $this->MidocoAgencyCooperationHistory;
    }
    /**
     * Set MidocoAgencyCooperationHistory value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoAgencyCooperationHistory $midocoAgencyCooperationHistory
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveAgencyCooperationHistoryRequest
     */
    public function setMidocoAgencyCooperationHistory(?\Pggns\MidocoApi\CrmSD\StructType\MidocoAgencyCooperationHistory $midocoAgencyCooperationHistory = null): self
    {
        $this->MidocoAgencyCooperationHistory = $midocoAgencyCooperationHistory;
        
        return $this;
    }
}
