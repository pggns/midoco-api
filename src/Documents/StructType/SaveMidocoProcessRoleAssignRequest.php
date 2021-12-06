<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoProcessRoleAssignRequest StructType
 * @subpackage Structs
 */
class SaveMidocoProcessRoleAssignRequest extends AbstractStructBase
{
    /**
     * The MidocoProcessRoleAssign
     * Meta information extracted from the WSDL
     * - ref: MidocoProcessRoleAssign
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoProcessRoleAssign|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoProcessRoleAssign $MidocoProcessRoleAssign = null;
    /**
     * Constructor method for SaveMidocoProcessRoleAssignRequest
     * @uses SaveMidocoProcessRoleAssignRequest::setMidocoProcessRoleAssign()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoProcessRoleAssign $midocoProcessRoleAssign
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoProcessRoleAssign $midocoProcessRoleAssign = null)
    {
        $this
            ->setMidocoProcessRoleAssign($midocoProcessRoleAssign);
    }
    /**
     * Get MidocoProcessRoleAssign value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoProcessRoleAssign|null
     */
    public function getMidocoProcessRoleAssign(): ?\Pggns\MidocoApi\Documents\StructType\MidocoProcessRoleAssign
    {
        return $this->MidocoProcessRoleAssign;
    }
    /**
     * Set MidocoProcessRoleAssign value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoProcessRoleAssign $midocoProcessRoleAssign
     * @return \Pggns\MidocoApi\Documents\StructType\SaveMidocoProcessRoleAssignRequest
     */
    public function setMidocoProcessRoleAssign(?\Pggns\MidocoApi\Documents\StructType\MidocoProcessRoleAssign $midocoProcessRoleAssign = null): self
    {
        $this->MidocoProcessRoleAssign = $midocoProcessRoleAssign;
        
        return $this;
    }
}
