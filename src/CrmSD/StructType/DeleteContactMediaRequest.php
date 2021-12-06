<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteContactMediaRequest StructType
 * @subpackage Structs
 */
class DeleteContactMediaRequest extends AbstractStructBase
{
    /**
     * The MidocoContactMedia
     * Meta information extracted from the WSDL
     * - ref: MidocoContactMedia
     * @var \Pggns\MidocoApi\CrmSD\StructType\ContactMediaDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\ContactMediaDTO $MidocoContactMedia = null;
    /**
     * Constructor method for DeleteContactMediaRequest
     * @uses DeleteContactMediaRequest::setMidocoContactMedia()
     * @param \Pggns\MidocoApi\CrmSD\StructType\ContactMediaDTO $midocoContactMedia
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\ContactMediaDTO $midocoContactMedia = null)
    {
        $this
            ->setMidocoContactMedia($midocoContactMedia);
    }
    /**
     * Get MidocoContactMedia value
     * @return \Pggns\MidocoApi\CrmSD\StructType\ContactMediaDTO|null
     */
    public function getMidocoContactMedia(): ?\Pggns\MidocoApi\CrmSD\StructType\ContactMediaDTO
    {
        return $this->MidocoContactMedia;
    }
    /**
     * Set MidocoContactMedia value
     * @param \Pggns\MidocoApi\CrmSD\StructType\ContactMediaDTO $midocoContactMedia
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeleteContactMediaRequest
     */
    public function setMidocoContactMedia(?\Pggns\MidocoApi\CrmSD\StructType\ContactMediaDTO $midocoContactMedia = null): self
    {
        $this->MidocoContactMedia = $midocoContactMedia;
        
        return $this;
    }
}
