<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteContactSourceRequest StructType
 * @subpackage Structs
 */
class DeleteContactSourceRequest extends AbstractStructBase
{
    /**
     * The MidocoContactSource
     * Meta information extracted from the WSDL
     * - ref: MidocoContactSource
     * @var \Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource $MidocoContactSource = null;
    /**
     * Constructor method for DeleteContactSourceRequest
     * @uses DeleteContactSourceRequest::setMidocoContactSource()
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource $midocoContactSource
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource $midocoContactSource = null)
    {
        $this
            ->setMidocoContactSource($midocoContactSource);
    }
    /**
     * Get MidocoContactSource value
     * @return \Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource|null
     */
    public function getMidocoContactSource(): ?\Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource
    {
        return $this->MidocoContactSource;
    }
    /**
     * Set MidocoContactSource value
     * @param \Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource $midocoContactSource
     * @return \Pggns\MidocoApi\CrmSD\StructType\DeleteContactSourceRequest
     */
    public function setMidocoContactSource(?\Pggns\MidocoApi\CrmSD\StructType\MidocoContactSource $midocoContactSource = null): self
    {
        $this->MidocoContactSource = $midocoContactSource;
        
        return $this;
    }
}
