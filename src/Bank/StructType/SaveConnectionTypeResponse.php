<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Bank\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveConnectionTypeResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveConnectionTypeResponse extends AbstractStructBase
{
    /**
     * The MidocoConnectionType
     * Meta information extracted from the WSDL
     * - ref: MidocoConnectionType
     * @var \Pggns\MidocoApi\Bank\StructType\ConnectionTypeDTO|null
     */
    protected ?\Pggns\MidocoApi\Bank\StructType\ConnectionTypeDTO $MidocoConnectionType = null;
    /**
     * Constructor method for SaveConnectionTypeResponse
     * @uses SaveConnectionTypeResponse::setMidocoConnectionType()
     * @param \Pggns\MidocoApi\Bank\StructType\ConnectionTypeDTO $midocoConnectionType
     */
    public function __construct(?\Pggns\MidocoApi\Bank\StructType\ConnectionTypeDTO $midocoConnectionType = null)
    {
        $this
            ->setMidocoConnectionType($midocoConnectionType);
    }
    /**
     * Get MidocoConnectionType value
     * @return \Pggns\MidocoApi\Bank\StructType\ConnectionTypeDTO|null
     */
    public function getMidocoConnectionType(): ?\Pggns\MidocoApi\Bank\StructType\ConnectionTypeDTO
    {
        return $this->MidocoConnectionType;
    }
    /**
     * Set MidocoConnectionType value
     * @param \Pggns\MidocoApi\Bank\StructType\ConnectionTypeDTO $midocoConnectionType
     * @return \Pggns\MidocoApi\Bank\StructType\SaveConnectionTypeResponse
     */
    public function setMidocoConnectionType(?\Pggns\MidocoApi\Bank\StructType\ConnectionTypeDTO $midocoConnectionType = null): self
    {
        $this->MidocoConnectionType = $midocoConnectionType;
        
        return $this;
    }
}
