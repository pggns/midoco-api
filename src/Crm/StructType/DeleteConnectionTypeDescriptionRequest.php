<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteConnectionTypeDescriptionRequest StructType
 * @subpackage Structs
 */
class DeleteConnectionTypeDescriptionRequest extends AbstractStructBase
{
    /**
     * The MidocoConnectionTypeDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoConnectionTypeDescription
     * @var \Pggns\MidocoApi\Crm\StructType\ConnectionTypeDescDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\ConnectionTypeDescDTO $MidocoConnectionTypeDescription = null;
    /**
     * Constructor method for DeleteConnectionTypeDescriptionRequest
     * @uses DeleteConnectionTypeDescriptionRequest::setMidocoConnectionTypeDescription()
     * @param \Pggns\MidocoApi\Crm\StructType\ConnectionTypeDescDTO $midocoConnectionTypeDescription
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\ConnectionTypeDescDTO $midocoConnectionTypeDescription = null)
    {
        $this
            ->setMidocoConnectionTypeDescription($midocoConnectionTypeDescription);
    }
    /**
     * Get MidocoConnectionTypeDescription value
     * @return \Pggns\MidocoApi\Crm\StructType\ConnectionTypeDescDTO|null
     */
    public function getMidocoConnectionTypeDescription(): ?\Pggns\MidocoApi\Crm\StructType\ConnectionTypeDescDTO
    {
        return $this->MidocoConnectionTypeDescription;
    }
    /**
     * Set MidocoConnectionTypeDescription value
     * @param \Pggns\MidocoApi\Crm\StructType\ConnectionTypeDescDTO $midocoConnectionTypeDescription
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteConnectionTypeDescriptionRequest
     */
    public function setMidocoConnectionTypeDescription(?\Pggns\MidocoApi\Crm\StructType\ConnectionTypeDescDTO $midocoConnectionTypeDescription = null): self
    {
        $this->MidocoConnectionTypeDescription = $midocoConnectionTypeDescription;
        
        return $this;
    }
}
