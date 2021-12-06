<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerStatisticDataResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCustomerStatisticData
 * @subpackage Structs
 */
class GetCustomerStatisticDataResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerStatisticData
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerStatisticData
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerStatisticData|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerStatisticData $MidocoCustomerStatisticData = null;
    /**
     * Constructor method for GetCustomerStatisticDataResponse
     * @uses GetCustomerStatisticDataResponse::setMidocoCustomerStatisticData()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerStatisticData $midocoCustomerStatisticData
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerStatisticData $midocoCustomerStatisticData = null)
    {
        $this
            ->setMidocoCustomerStatisticData($midocoCustomerStatisticData);
    }
    /**
     * Get MidocoCustomerStatisticData value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerStatisticData|null
     */
    public function getMidocoCustomerStatisticData(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerStatisticData
    {
        return $this->MidocoCustomerStatisticData;
    }
    /**
     * Set MidocoCustomerStatisticData value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerStatisticData $midocoCustomerStatisticData
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\GetCustomerStatisticDataResponse
     */
    public function setMidocoCustomerStatisticData(?\Pggns\MidocoApi\Api\CrmSD\StructType\MidocoCustomerStatisticData $midocoCustomerStatisticData = null): self
    {
        $this->MidocoCustomerStatisticData = $midocoCustomerStatisticData;
        
        return $this;
    }
}
