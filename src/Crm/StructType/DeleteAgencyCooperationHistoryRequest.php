<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAgencyCooperationHistoryRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteAgencyCooperationHistoryRequest extends AbstractStructBase
{
    /**
     * The MidocoAgencyCooperationHistory
     * Meta information extracted from the WSDL
     * - ref: MidocoAgencyCooperationHistory
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoAgencyCooperationHistory|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoAgencyCooperationHistory $MidocoAgencyCooperationHistory = null;
    /**
     * Constructor method for DeleteAgencyCooperationHistoryRequest
     * @uses DeleteAgencyCooperationHistoryRequest::setMidocoAgencyCooperationHistory()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoAgencyCooperationHistory $midocoAgencyCooperationHistory
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoAgencyCooperationHistory $midocoAgencyCooperationHistory = null)
    {
        $this
            ->setMidocoAgencyCooperationHistory($midocoAgencyCooperationHistory);
    }
    /**
     * Get MidocoAgencyCooperationHistory value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoAgencyCooperationHistory|null
     */
    public function getMidocoAgencyCooperationHistory(): ?\Pggns\MidocoApi\Crm\StructType\MidocoAgencyCooperationHistory
    {
        return $this->MidocoAgencyCooperationHistory;
    }
    /**
     * Set MidocoAgencyCooperationHistory value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoAgencyCooperationHistory $midocoAgencyCooperationHistory
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteAgencyCooperationHistoryRequest
     */
    public function setMidocoAgencyCooperationHistory(?\Pggns\MidocoApi\Crm\StructType\MidocoAgencyCooperationHistory $midocoAgencyCooperationHistory = null): self
    {
        $this->MidocoAgencyCooperationHistory = $midocoAgencyCooperationHistory;
        
        return $this;
    }
}
