<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\AgencyNumberDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\AgencyNumberDTO $MidocoAgencyNumber = null;
    /**
     * Constructor method for DeleteMidocoAgencyNumberRequest
     * @uses DeleteMidocoAgencyNumberRequest::setMidocoAgencyNumber()
     * @param \Pggns\MidocoApi\CrmSD\StructType\AgencyNumberDTO $midocoAgencyNumber
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\AgencyNumberDTO $midocoAgencyNumber = null)
    {
        $this
            ->setMidocoAgencyNumber($midocoAgencyNumber);
    }
    /**
     * Get MidocoAgencyNumber value
     * @return \Pggns\MidocoApi\CrmSD\StructType\AgencyNumberDTO|null
     */
    public function getMidocoAgencyNumber(): ?\Pggns\MidocoApi\CrmSD\StructType\AgencyNumberDTO
    {
        return $this->MidocoAgencyNumber;
    }
    /**
     * Set MidocoAgencyNumber value
     * @param \Pggns\MidocoApi\CrmSD\StructType\AgencyNumberDTO $midocoAgencyNumber
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeleteMidocoAgencyNumberRequest
     */
    public function setMidocoAgencyNumber(?\Pggns\MidocoApi\CrmSD\StructType\AgencyNumberDTO $midocoAgencyNumber = null): self
    {
        $this->MidocoAgencyNumber = $midocoAgencyNumber;
        
        return $this;
    }
}
