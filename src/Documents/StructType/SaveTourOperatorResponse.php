<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTourOperatorResponse StructType
 * @subpackage Structs
 */
class SaveTourOperatorResponse extends AbstractStructBase
{
    /**
     * The MidocoTourOperator
     * Meta information extracted from the WSDL
     * - ref: MidocoTourOperator
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoTourOperator|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperator $MidocoTourOperator = null;
    /**
     * Constructor method for SaveTourOperatorResponse
     * @uses SaveTourOperatorResponse::setMidocoTourOperator()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoTourOperator $midocoTourOperator
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperator $midocoTourOperator = null)
    {
        $this
            ->setMidocoTourOperator($midocoTourOperator);
    }
    /**
     * Get MidocoTourOperator value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoTourOperator|null
     */
    public function getMidocoTourOperator(): ?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperator
    {
        return $this->MidocoTourOperator;
    }
    /**
     * Set MidocoTourOperator value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoTourOperator $midocoTourOperator
     * @return \Pggns\MidocoApi\Documents\StructType\SaveTourOperatorResponse
     */
    public function setMidocoTourOperator(?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperator $midocoTourOperator = null): self
    {
        $this->MidocoTourOperator = $midocoTourOperator;
        
        return $this;
    }
}
