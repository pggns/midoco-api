<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Crm\StructType\ProcessAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\ProcessAssignDTO $MidocoProcessAssign = null;
    /**
     * Constructor method for DeleteProcessAssignRequest
     * @uses DeleteProcessAssignRequest::setMidocoProcessAssign()
     * @param \Pggns\MidocoApi\Crm\StructType\ProcessAssignDTO $midocoProcessAssign
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\ProcessAssignDTO $midocoProcessAssign = null)
    {
        $this
            ->setMidocoProcessAssign($midocoProcessAssign);
    }
    /**
     * Get MidocoProcessAssign value
     * @return \Pggns\MidocoApi\Crm\StructType\ProcessAssignDTO|null
     */
    public function getMidocoProcessAssign(): ?\Pggns\MidocoApi\Crm\StructType\ProcessAssignDTO
    {
        return $this->MidocoProcessAssign;
    }
    /**
     * Set MidocoProcessAssign value
     * @param \Pggns\MidocoApi\Crm\StructType\ProcessAssignDTO $midocoProcessAssign
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteProcessAssignRequest
     */
    public function setMidocoProcessAssign(?\Pggns\MidocoApi\Crm\StructType\ProcessAssignDTO $midocoProcessAssign = null): self
    {
        $this->MidocoProcessAssign = $midocoProcessAssign;
        
        return $this;
    }
}
