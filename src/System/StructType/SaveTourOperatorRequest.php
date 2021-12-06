<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTourOperatorRequest StructType
 * @subpackage Structs
 */
class SaveTourOperatorRequest extends AbstractStructBase
{
    /**
     * The MidocoTourOperator
     * Meta information extracted from the WSDL
     * - ref: MidocoTourOperator
     * @var \Pggns\MidocoApi\System\StructType\MidocoTourOperator|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\MidocoTourOperator $MidocoTourOperator = null;
    /**
     * Constructor method for SaveTourOperatorRequest
     * @uses SaveTourOperatorRequest::setMidocoTourOperator()
     * @param \Pggns\MidocoApi\System\StructType\MidocoTourOperator $midocoTourOperator
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\MidocoTourOperator $midocoTourOperator = null)
    {
        $this
            ->setMidocoTourOperator($midocoTourOperator);
    }
    /**
     * Get MidocoTourOperator value
     * @return \Pggns\MidocoApi\System\StructType\MidocoTourOperator|null
     */
    public function getMidocoTourOperator(): ?\Pggns\MidocoApi\System\StructType\MidocoTourOperator
    {
        return $this->MidocoTourOperator;
    }
    /**
     * Set MidocoTourOperator value
     * @param \Pggns\MidocoApi\System\StructType\MidocoTourOperator $midocoTourOperator
     * @return \Pggns\MidocoApi\System\StructType\SaveTourOperatorRequest
     */
    public function setMidocoTourOperator(?\Pggns\MidocoApi\System\StructType\MidocoTourOperator $midocoTourOperator = null): self
    {
        $this->MidocoTourOperator = $midocoTourOperator;
        
        return $this;
    }
}
