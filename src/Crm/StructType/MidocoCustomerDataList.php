<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoCustomerDataList StructType
 * @subpackage Structs
 */
class MidocoCustomerDataList extends AbstractStructBase
{
    /**
     * The MidocoCustomerData
     * Meta information extracted from the WSDL
     * - ref: MidocoCustomerData
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoCustomerData $MidocoCustomerData = null;
    /**
     * Constructor method for MidocoCustomerDataList
     * @uses MidocoCustomerDataList::setMidocoCustomerData()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData $midocoCustomerData
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoCustomerData $midocoCustomerData = null)
    {
        $this
            ->setMidocoCustomerData($midocoCustomerData);
    }
    /**
     * Get MidocoCustomerData value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData|null
     */
    public function getMidocoCustomerData(): ?\Pggns\MidocoApi\Crm\StructType\MidocoCustomerData
    {
        return $this->MidocoCustomerData;
    }
    /**
     * Set MidocoCustomerData value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoCustomerData $midocoCustomerData
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoCustomerDataList
     */
    public function setMidocoCustomerData(?\Pggns\MidocoApi\Crm\StructType\MidocoCustomerData $midocoCustomerData = null): self
    {
        $this->MidocoCustomerData = $midocoCustomerData;
        
        return $this;
    }
}
