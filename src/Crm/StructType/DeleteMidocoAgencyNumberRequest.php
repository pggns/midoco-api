<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoAgencyNumberRequest StructType
 * @subpackage Structs
 */
class DeleteMidocoAgencyNumberRequest extends AbstractStructBase
{
    /**
     * The MidocoAgencyNumber
     * Meta information extracted from the WSDL
     * - ref: MidocoAgencyNumber
     * @var \Pggns\MidocoApi\Api\Crm\StructType\AgencyNumberDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Crm\StructType\AgencyNumberDTO $MidocoAgencyNumber = null;
    /**
     * Constructor method for DeleteMidocoAgencyNumberRequest
     * @uses DeleteMidocoAgencyNumberRequest::setMidocoAgencyNumber()
     * @param \Pggns\MidocoApi\Api\Crm\StructType\AgencyNumberDTO $midocoAgencyNumber
     */
    public function __construct(?\Pggns\MidocoApi\Api\Crm\StructType\AgencyNumberDTO $midocoAgencyNumber = null)
    {
        $this
            ->setMidocoAgencyNumber($midocoAgencyNumber);
    }
    /**
     * Get MidocoAgencyNumber value
     * @return \Pggns\MidocoApi\Api\Crm\StructType\AgencyNumberDTO|null
     */
    public function getMidocoAgencyNumber(): ?\Pggns\MidocoApi\Api\Crm\StructType\AgencyNumberDTO
    {
        return $this->MidocoAgencyNumber;
    }
    /**
     * Set MidocoAgencyNumber value
     * @param \Pggns\MidocoApi\Api\Crm\StructType\AgencyNumberDTO $midocoAgencyNumber
     * @return \Pggns\MidocoApi\Api\Crm\StructType\DeleteMidocoAgencyNumberRequest
     */
    public function setMidocoAgencyNumber(?\Pggns\MidocoApi\Api\Crm\StructType\AgencyNumberDTO $midocoAgencyNumber = null): self
    {
        $this->MidocoAgencyNumber = $midocoAgencyNumber;
        
        return $this;
    }
}
