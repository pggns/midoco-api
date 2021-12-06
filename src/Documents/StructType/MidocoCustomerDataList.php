<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

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
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoCustomerData|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoCustomerData $MidocoCustomerData = null;
    /**
     * Constructor method for MidocoCustomerDataList
     * @uses MidocoCustomerDataList::setMidocoCustomerData()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCustomerData $midocoCustomerData
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoCustomerData $midocoCustomerData = null)
    {
        $this
            ->setMidocoCustomerData($midocoCustomerData);
    }
    /**
     * Get MidocoCustomerData value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCustomerData|null
     */
    public function getMidocoCustomerData(): ?\Pggns\MidocoApi\Documents\StructType\MidocoCustomerData
    {
        return $this->MidocoCustomerData;
    }
    /**
     * Set MidocoCustomerData value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoCustomerData $midocoCustomerData
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoCustomerDataList
     */
    public function setMidocoCustomerData(?\Pggns\MidocoApi\Documents\StructType\MidocoCustomerData $midocoCustomerData = null): self
    {
        $this->MidocoCustomerData = $midocoCustomerData;
        
        return $this;
    }
}
