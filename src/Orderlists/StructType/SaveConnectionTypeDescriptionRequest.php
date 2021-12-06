<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveConnectionTypeDescriptionRequest StructType
 * @subpackage Structs
 */
class SaveConnectionTypeDescriptionRequest extends AbstractStructBase
{
    /**
     * The MidocoConnectionTypeDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoConnectionTypeDescription
     * @var \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDescDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDescDTO $MidocoConnectionTypeDescription = null;
    /**
     * Constructor method for SaveConnectionTypeDescriptionRequest
     * @uses SaveConnectionTypeDescriptionRequest::setMidocoConnectionTypeDescription()
     * @param \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDescDTO $midocoConnectionTypeDescription
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDescDTO $midocoConnectionTypeDescription = null)
    {
        $this
            ->setMidocoConnectionTypeDescription($midocoConnectionTypeDescription);
    }
    /**
     * Get MidocoConnectionTypeDescription value
     * @return \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDescDTO|null
     */
    public function getMidocoConnectionTypeDescription(): ?\Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDescDTO
    {
        return $this->MidocoConnectionTypeDescription;
    }
    /**
     * Set MidocoConnectionTypeDescription value
     * @param \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDescDTO $midocoConnectionTypeDescription
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveConnectionTypeDescriptionRequest
     */
    public function setMidocoConnectionTypeDescription(?\Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDescDTO $midocoConnectionTypeDescription = null): self
    {
        $this->MidocoConnectionTypeDescription = $midocoConnectionTypeDescription;
        
        return $this;
    }
}
