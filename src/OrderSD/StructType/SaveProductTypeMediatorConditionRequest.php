<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveProductTypeMediatorConditionRequest StructType
 * @subpackage Structs
 */
class SaveProductTypeMediatorConditionRequest extends AbstractStructBase
{
    /**
     * The MidocoProductTypeMediatorCondition
     * Meta information extracted from the WSDL
     * - ref: MidocoProductTypeMediatorCondition
     * @var \Pggns\MidocoApi\OrderSD\StructType\ProdTypesMediatorCondDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\ProdTypesMediatorCondDTO $MidocoProductTypeMediatorCondition = null;
    /**
     * Constructor method for SaveProductTypeMediatorConditionRequest
     * @uses SaveProductTypeMediatorConditionRequest::setMidocoProductTypeMediatorCondition()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ProdTypesMediatorCondDTO $midocoProductTypeMediatorCondition
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\ProdTypesMediatorCondDTO $midocoProductTypeMediatorCondition = null)
    {
        $this
            ->setMidocoProductTypeMediatorCondition($midocoProductTypeMediatorCondition);
    }
    /**
     * Get MidocoProductTypeMediatorCondition value
     * @return \Pggns\MidocoApi\OrderSD\StructType\ProdTypesMediatorCondDTO|null
     */
    public function getMidocoProductTypeMediatorCondition(): ?\Pggns\MidocoApi\OrderSD\StructType\ProdTypesMediatorCondDTO
    {
        return $this->MidocoProductTypeMediatorCondition;
    }
    /**
     * Set MidocoProductTypeMediatorCondition value
     * @param \Pggns\MidocoApi\OrderSD\StructType\ProdTypesMediatorCondDTO $midocoProductTypeMediatorCondition
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveProductTypeMediatorConditionRequest
     */
    public function setMidocoProductTypeMediatorCondition(?\Pggns\MidocoApi\OrderSD\StructType\ProdTypesMediatorCondDTO $midocoProductTypeMediatorCondition = null): self
    {
        $this->MidocoProductTypeMediatorCondition = $midocoProductTypeMediatorCondition;
        
        return $this;
    }
}
