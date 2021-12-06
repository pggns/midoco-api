<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

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
     * @var \Pggns\MidocoApi\Documents\StructType\ProdTypesMediatorCondDTO|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\ProdTypesMediatorCondDTO $MidocoProductTypeMediatorCondition = null;
    /**
     * Constructor method for SaveProductTypeMediatorConditionRequest
     * @uses SaveProductTypeMediatorConditionRequest::setMidocoProductTypeMediatorCondition()
     * @param \Pggns\MidocoApi\Documents\StructType\ProdTypesMediatorCondDTO $midocoProductTypeMediatorCondition
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\ProdTypesMediatorCondDTO $midocoProductTypeMediatorCondition = null)
    {
        $this
            ->setMidocoProductTypeMediatorCondition($midocoProductTypeMediatorCondition);
    }
    /**
     * Get MidocoProductTypeMediatorCondition value
     * @return \Pggns\MidocoApi\Documents\StructType\ProdTypesMediatorCondDTO|null
     */
    public function getMidocoProductTypeMediatorCondition(): ?\Pggns\MidocoApi\Documents\StructType\ProdTypesMediatorCondDTO
    {
        return $this->MidocoProductTypeMediatorCondition;
    }
    /**
     * Set MidocoProductTypeMediatorCondition value
     * @param \Pggns\MidocoApi\Documents\StructType\ProdTypesMediatorCondDTO $midocoProductTypeMediatorCondition
     * @return \Pggns\MidocoApi\Documents\StructType\SaveProductTypeMediatorConditionRequest
     */
    public function setMidocoProductTypeMediatorCondition(?\Pggns\MidocoApi\Documents\StructType\ProdTypesMediatorCondDTO $midocoProductTypeMediatorCondition = null): self
    {
        $this->MidocoProductTypeMediatorCondition = $midocoProductTypeMediatorCondition;
        
        return $this;
    }
}
