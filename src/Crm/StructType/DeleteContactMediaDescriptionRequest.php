<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteContactMediaDescriptionRequest StructType
 * @subpackage Structs
 */
class DeleteContactMediaDescriptionRequest extends AbstractStructBase
{
    /**
     * The MidocoContactMediaDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoContactMediaDescription
     * @var \Pggns\MidocoApi\Crm\StructType\MediaDescriptionDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MediaDescriptionDTO $MidocoContactMediaDescription = null;
    /**
     * Constructor method for DeleteContactMediaDescriptionRequest
     * @uses DeleteContactMediaDescriptionRequest::setMidocoContactMediaDescription()
     * @param \Pggns\MidocoApi\Crm\StructType\MediaDescriptionDTO $midocoContactMediaDescription
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MediaDescriptionDTO $midocoContactMediaDescription = null)
    {
        $this
            ->setMidocoContactMediaDescription($midocoContactMediaDescription);
    }
    /**
     * Get MidocoContactMediaDescription value
     * @return \Pggns\MidocoApi\Crm\StructType\MediaDescriptionDTO|null
     */
    public function getMidocoContactMediaDescription(): ?\Pggns\MidocoApi\Crm\StructType\MediaDescriptionDTO
    {
        return $this->MidocoContactMediaDescription;
    }
    /**
     * Set MidocoContactMediaDescription value
     * @param \Pggns\MidocoApi\Crm\StructType\MediaDescriptionDTO $midocoContactMediaDescription
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteContactMediaDescriptionRequest
     */
    public function setMidocoContactMediaDescription(?\Pggns\MidocoApi\Crm\StructType\MediaDescriptionDTO $midocoContactMediaDescription = null): self
    {
        $this->MidocoContactMediaDescription = $midocoContactMediaDescription;
        
        return $this;
    }
}
