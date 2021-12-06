<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveContactMediaResponse StructType
 * @subpackage Structs
 */
class SaveContactMediaResponse extends AbstractStructBase
{
    /**
     * The MidocoContactMedia
     * Meta information extracted from the WSDL
     * - ref: MidocoContactMedia
     * @var \Pggns\MidocoApi\Api\CrmSD\StructType\ContactMediaDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\CrmSD\StructType\ContactMediaDTO $MidocoContactMedia = null;
    /**
     * Constructor method for SaveContactMediaResponse
     * @uses SaveContactMediaResponse::setMidocoContactMedia()
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\ContactMediaDTO $midocoContactMedia
     */
    public function __construct(?\Pggns\MidocoApi\Api\CrmSD\StructType\ContactMediaDTO $midocoContactMedia = null)
    {
        $this
            ->setMidocoContactMedia($midocoContactMedia);
    }
    /**
     * Get MidocoContactMedia value
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\ContactMediaDTO|null
     */
    public function getMidocoContactMedia(): ?\Pggns\MidocoApi\Api\CrmSD\StructType\ContactMediaDTO
    {
        return $this->MidocoContactMedia;
    }
    /**
     * Set MidocoContactMedia value
     * @param \Pggns\MidocoApi\Api\CrmSD\StructType\ContactMediaDTO $midocoContactMedia
     * @return \Pggns\MidocoApi\Api\CrmSD\StructType\SaveContactMediaResponse
     */
    public function setMidocoContactMedia(?\Pggns\MidocoApi\Api\CrmSD\StructType\ContactMediaDTO $midocoContactMedia = null): self
    {
        $this->MidocoContactMedia = $midocoContactMedia;
        
        return $this;
    }
}
