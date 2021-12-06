<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteProcessAssignRequest StructType
 * @subpackage Structs
 */
class DeleteProcessAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoProcessAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoProcessAssign
     * @var \Pggns\MidocoApi\System\StructType\ProcessAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\ProcessAssignDTO $MidocoProcessAssign = null;
    /**
     * Constructor method for DeleteProcessAssignRequest
     * @uses DeleteProcessAssignRequest::setMidocoProcessAssign()
     * @param \Pggns\MidocoApi\System\StructType\ProcessAssignDTO $midocoProcessAssign
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\ProcessAssignDTO $midocoProcessAssign = null)
    {
        $this
            ->setMidocoProcessAssign($midocoProcessAssign);
    }
    /**
     * Get MidocoProcessAssign value
     * @return \Pggns\MidocoApi\System\StructType\ProcessAssignDTO|null
     */
    public function getMidocoProcessAssign(): ?\Pggns\MidocoApi\System\StructType\ProcessAssignDTO
    {
        return $this->MidocoProcessAssign;
    }
    /**
     * Set MidocoProcessAssign value
     * @param \Pggns\MidocoApi\System\StructType\ProcessAssignDTO $midocoProcessAssign
     * @return \Pggns\MidocoApi\System\StructType\DeleteProcessAssignRequest
     */
    public function setMidocoProcessAssign(?\Pggns\MidocoApi\System\StructType\ProcessAssignDTO $midocoProcessAssign = null): self
    {
        $this->MidocoProcessAssign = $midocoProcessAssign;
        
        return $this;
    }
}
