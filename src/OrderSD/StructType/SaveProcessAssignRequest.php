<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveProcessAssignRequest StructType
 * @subpackage Structs
 */
class SaveProcessAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoProcessAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoProcessAssign
     * @var \Pggns\MidocoApi\OrderSD\StructType\ProcessAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderSD\StructType\ProcessAssignDTO $MidocoProcessAssign = null;
    /**
     * Constructor method for SaveProcessAssignRequest
     * @uses SaveProcessAssignRequest::setMidocoProcessAssign()
     * @param \Pggns\MidocoApi\OrderSD\StructType\ProcessAssignDTO $midocoProcessAssign
     */
    public function __construct(?\Pggns\MidocoApi\OrderSD\StructType\ProcessAssignDTO $midocoProcessAssign = null)
    {
        $this
            ->setMidocoProcessAssign($midocoProcessAssign);
    }
    /**
     * Get MidocoProcessAssign value
     * @return \Pggns\MidocoApi\OrderSD\StructType\ProcessAssignDTO|null
     */
    public function getMidocoProcessAssign(): ?\Pggns\MidocoApi\OrderSD\StructType\ProcessAssignDTO
    {
        return $this->MidocoProcessAssign;
    }
    /**
     * Set MidocoProcessAssign value
     * @param \Pggns\MidocoApi\OrderSD\StructType\ProcessAssignDTO $midocoProcessAssign
     * @return \Pggns\MidocoApi\OrderSD\StructType\SaveProcessAssignRequest
     */
    public function setMidocoProcessAssign(?\Pggns\MidocoApi\OrderSD\StructType\ProcessAssignDTO $midocoProcessAssign = null): self
    {
        $this->MidocoProcessAssign = $midocoProcessAssign;
        
        return $this;
    }
}
