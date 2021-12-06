<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

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
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoCustomerData|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoCustomerData $MidocoCustomerData = null;
    /**
     * Constructor method for MidocoCustomerDataList
     * @uses MidocoCustomerDataList::setMidocoCustomerData()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCustomerData $midocoCustomerData
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoCustomerData $midocoCustomerData = null)
    {
        $this
            ->setMidocoCustomerData($midocoCustomerData);
    }
    /**
     * Get MidocoCustomerData value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCustomerData|null
     */
    public function getMidocoCustomerData(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoCustomerData
    {
        return $this->MidocoCustomerData;
    }
    /**
     * Set MidocoCustomerData value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoCustomerData $midocoCustomerData
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoCustomerDataList
     */
    public function setMidocoCustomerData(?\Pggns\MidocoApi\Orderlists\StructType\MidocoCustomerData $midocoCustomerData = null): self
    {
        $this->MidocoCustomerData = $midocoCustomerData;
        
        return $this;
    }
}
