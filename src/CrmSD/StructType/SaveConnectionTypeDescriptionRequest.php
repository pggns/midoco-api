<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

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
     * @var \Pggns\MidocoApi\CrmSD\StructType\ConnectionTypeDescDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\ConnectionTypeDescDTO $MidocoConnectionTypeDescription = null;
    /**
     * Constructor method for SaveConnectionTypeDescriptionRequest
     * @uses SaveConnectionTypeDescriptionRequest::setMidocoConnectionTypeDescription()
     * @param \Pggns\MidocoApi\CrmSD\StructType\ConnectionTypeDescDTO $midocoConnectionTypeDescription
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\ConnectionTypeDescDTO $midocoConnectionTypeDescription = null)
    {
        $this
            ->setMidocoConnectionTypeDescription($midocoConnectionTypeDescription);
    }
    /**
     * Get MidocoConnectionTypeDescription value
     * @return \Pggns\MidocoApi\CrmSD\StructType\ConnectionTypeDescDTO|null
     */
    public function getMidocoConnectionTypeDescription(): ?\Pggns\MidocoApi\CrmSD\StructType\ConnectionTypeDescDTO
    {
        return $this->MidocoConnectionTypeDescription;
    }
    /**
     * Set MidocoConnectionTypeDescription value
     * @param \Pggns\MidocoApi\CrmSD\StructType\ConnectionTypeDescDTO $midocoConnectionTypeDescription
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveConnectionTypeDescriptionRequest
     */
    public function setMidocoConnectionTypeDescription(?\Pggns\MidocoApi\CrmSD\StructType\ConnectionTypeDescDTO $midocoConnectionTypeDescription = null): self
    {
        $this->MidocoConnectionTypeDescription = $midocoConnectionTypeDescription;
        
        return $this;
    }
}
