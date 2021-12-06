<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\ProcessAssignDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\ProcessAssignDTO $MidocoProcessAssign = null;
    /**
     * Constructor method for SaveProcessAssignRequest
     * @uses SaveProcessAssignRequest::setMidocoProcessAssign()
     * @param \Pggns\MidocoApi\CrmSD\StructType\ProcessAssignDTO $midocoProcessAssign
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\ProcessAssignDTO $midocoProcessAssign = null)
    {
        $this
            ->setMidocoProcessAssign($midocoProcessAssign);
    }
    /**
     * Get MidocoProcessAssign value
     * @return \Pggns\MidocoApi\CrmSD\StructType\ProcessAssignDTO|null
     */
    public function getMidocoProcessAssign(): ?\Pggns\MidocoApi\CrmSD\StructType\ProcessAssignDTO
    {
        return $this->MidocoProcessAssign;
    }
    /**
     * Set MidocoProcessAssign value
     * @param \Pggns\MidocoApi\CrmSD\StructType\ProcessAssignDTO $midocoProcessAssign
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveProcessAssignRequest
     */
    public function setMidocoProcessAssign(?\Pggns\MidocoApi\CrmSD\StructType\ProcessAssignDTO $midocoProcessAssign = null): self
    {
        $this->MidocoProcessAssign = $midocoProcessAssign;
        
        return $this;
    }
}
