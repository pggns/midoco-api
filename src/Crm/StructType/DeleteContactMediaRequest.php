<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Crm\StructType\ContactMediaDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\ContactMediaDTO $MidocoContactMedia = null;
    /**
     * Constructor method for DeleteContactMediaRequest
     * @uses DeleteContactMediaRequest::setMidocoContactMedia()
     * @param \Pggns\MidocoApi\Crm\StructType\ContactMediaDTO $midocoContactMedia
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\ContactMediaDTO $midocoContactMedia = null)
    {
        $this
            ->setMidocoContactMedia($midocoContactMedia);
    }
    /**
     * Get MidocoContactMedia value
     * @return \Pggns\MidocoApi\Crm\StructType\ContactMediaDTO|null
     */
    public function getMidocoContactMedia(): ?\Pggns\MidocoApi\Crm\StructType\ContactMediaDTO
    {
        return $this->MidocoContactMedia;
    }
    /**
     * Set MidocoContactMedia value
     * @param \Pggns\MidocoApi\Crm\StructType\ContactMediaDTO $midocoContactMedia
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteContactMediaRequest
     */
    public function setMidocoContactMedia(?\Pggns\MidocoApi\Crm\StructType\ContactMediaDTO $midocoContactMedia = null): self
    {
        $this->MidocoContactMedia = $midocoContactMedia;
        
        return $this;
    }
}
