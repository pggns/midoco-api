<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveContactMediaDescriptionRequest StructType
 * @subpackage Structs
 */
class SaveContactMediaDescriptionRequest extends AbstractStructBase
{
    /**
     * The MidocoContactMediaDescription
     * Meta information extracted from the WSDL
     * - ref: MidocoContactMediaDescription
     * @var \Pggns\MidocoApi\CrmSD\StructType\MediaDescriptionDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MediaDescriptionDTO $MidocoContactMediaDescription = null;
    /**
     * Constructor method for SaveContactMediaDescriptionRequest
     * @uses SaveContactMediaDescriptionRequest::setMidocoContactMediaDescription()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MediaDescriptionDTO $midocoContactMediaDescription
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MediaDescriptionDTO $midocoContactMediaDescription = null)
    {
        $this
            ->setMidocoContactMediaDescription($midocoContactMediaDescription);
    }
    /**
     * Get MidocoContactMediaDescription value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MediaDescriptionDTO|null
     */
    public function getMidocoContactMediaDescription(): ?\Pggns\MidocoApi\CrmSD\StructType\MediaDescriptionDTO
    {
        return $this->MidocoContactMediaDescription;
    }
    /**
     * Set MidocoContactMediaDescription value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MediaDescriptionDTO $midocoContactMediaDescription
     * @return \Pggns\MidocoApi\CrmSD\StructType\SaveContactMediaDescriptionRequest
     */
    public function setMidocoContactMediaDescription(?\Pggns\MidocoApi\CrmSD\StructType\MediaDescriptionDTO $midocoContactMediaDescription = null): self
    {
        $this->MidocoContactMediaDescription = $midocoContactMediaDescription;
        
        return $this;
    }
}
