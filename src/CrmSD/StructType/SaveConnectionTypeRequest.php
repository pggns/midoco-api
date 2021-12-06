<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveConnectionTypeRequest StructType
 * @subpackage Structs
 */
class SaveConnectionTypeRequest extends AbstractStructBase
{
    /**
     * The MidocoConnectionType
     * Meta information extracted from the WSDL
     * - ref: MidocoConnectionType
     * @var \Pggns\MidocoApi\CrmSD\StructType\ConnectionTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\ConnectionTypeDTO $MidocoConnectionType = null;
    /**
     * Constructor method for SaveConnectionTypeRequest
     * @uses SaveConnectionTypeRequest::setMidocoConnectionType()
     * @param \Pggns\MidocoApi\CrmSD\StructType\ConnectionTypeDTO $midocoConnectionType
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\ConnectionTypeDTO $midocoConnectionType = null)
    {
        $this
            ->setMidocoConnectionType($midocoConnectionType);
    }
    /**
     * Get MidocoConnectionType value
     * @return \Pggns\MidocoApi\CrmSD\StructType\ConnectionTypeDTO|null
     */
    public function getMidocoConnectionType(): ?\Pggns\MidocoApi\CrmSD\StructType\ConnectionTypeDTO
    {
        return $this->MidocoConnectionType;
    }
    /**
     * Set MidocoConnectionType value
     * @param \Pggns\MidocoApi\CrmSD\StructType\ConnectionTypeDTO $midocoConnectionType
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveConnectionTypeRequest
     */
    public function setMidocoConnectionType(?\Pggns\MidocoApi\CrmSD\StructType\ConnectionTypeDTO $midocoConnectionType = null): self
    {
        $this->MidocoConnectionType = $midocoConnectionType;
        
        return $this;
    }
}
