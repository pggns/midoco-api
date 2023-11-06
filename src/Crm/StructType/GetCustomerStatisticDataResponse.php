<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCustomerStatisticDataResponse StructType
 * Meta information extracted from the WSDL
 * - documentation: getCustomerStatisticData
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetCustomerStatisticDataResponse extends AbstractStructBase
{
    /**
     * The MidocoCustomerStatisticData
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerStatisticData
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCustomerStatisticData|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCustomerStatisticData $MidocoCustomerStatisticData = null;
    /**
     * Constructor method for GetCustomerStatisticDataResponse
     * @uses GetCustomerStatisticDataResponse::setMidocoCustomerStatisticData()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerStatisticData $midocoCustomerStatisticData
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoCustomerStatisticData $midocoCustomerStatisticData = null)
    {
        $this
            ->setMidocoCustomerStatisticData($midocoCustomerStatisticData);
    }
    /**
     * Get MidocoCustomerStatisticData value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerStatisticData|null
     */
    public function getMidocoCustomerStatisticData(): ?\Pggns\MidocoApi\Crm\StructType\MidocoCustomerStatisticData
    {
        return $this->MidocoCustomerStatisticData;
    }
    /**
     * Set MidocoCustomerStatisticData value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerStatisticData $midocoCustomerStatisticData
     * @return \Pggns\MidocoApi\Crm\StructType\GetCustomerStatisticDataResponse
     */
    public function setMidocoCustomerStatisticData(?\Pggns\MidocoApi\Crm\StructType\MidocoCustomerStatisticData $midocoCustomerStatisticData = null): self
    {
        $this->MidocoCustomerStatisticData = $midocoCustomerStatisticData;
        
        return $this;
    }
}
