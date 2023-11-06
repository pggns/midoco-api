<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteContactSourceRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteContactSourceRequest extends AbstractStructBase
{
    /**
     * The MidocoContactSource
     * Meta information extracted from the WSDL
     * - ref: MidocoContactSource
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoContactSource|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoContactSource $MidocoContactSource = null;
    /**
     * Constructor method for DeleteContactSourceRequest
     * @uses DeleteContactSourceRequest::setMidocoContactSource()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoContactSource $midocoContactSource
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoContactSource $midocoContactSource = null)
    {
        $this
            ->setMidocoContactSource($midocoContactSource);
    }
    /**
     * Get MidocoContactSource value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoContactSource|null
     */
    public function getMidocoContactSource(): ?\Pggns\MidocoApi\Crm\StructType\MidocoContactSource
    {
        return $this->MidocoContactSource;
    }
    /**
     * Set MidocoContactSource value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoContactSource $midocoContactSource
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteContactSourceRequest
     */
    public function setMidocoContactSource(?\Pggns\MidocoApi\Crm\StructType\MidocoContactSource $midocoContactSource = null): self
    {
        $this->MidocoContactSource = $midocoContactSource;
        
        return $this;
    }
}
