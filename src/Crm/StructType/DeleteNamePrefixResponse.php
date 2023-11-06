<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteNamePrefixResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteNamePrefixResponse extends AbstractStructBase
{
    /**
     * The MidocoNamePrefix
     * Meta information extracted from the WSDL
     * - ref: MidocoNamePrefix
     * @var \Pggns\MidocoApi\Crm\StructType\NamePrefixDTO|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\NamePrefixDTO $MidocoNamePrefix = null;
    /**
     * Constructor method for DeleteNamePrefixResponse
     * @uses DeleteNamePrefixResponse::setMidocoNamePrefix()
     * @param \Pggns\MidocoApi\Crm\StructType\NamePrefixDTO $midocoNamePrefix
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\NamePrefixDTO $midocoNamePrefix = null)
    {
        $this
            ->setMidocoNamePrefix($midocoNamePrefix);
    }
    /**
     * Get MidocoNamePrefix value
     * @return \Pggns\MidocoApi\Crm\StructType\NamePrefixDTO|null
     */
    public function getMidocoNamePrefix(): ?\Pggns\MidocoApi\Crm\StructType\NamePrefixDTO
    {
        return $this->MidocoNamePrefix;
    }
    /**
     * Set MidocoNamePrefix value
     * @param \Pggns\MidocoApi\Crm\StructType\NamePrefixDTO $midocoNamePrefix
     * @return \Pggns\MidocoApi\Crm\StructType\DeleteNamePrefixResponse
     */
    public function setMidocoNamePrefix(?\Pggns\MidocoApi\Crm\StructType\NamePrefixDTO $midocoNamePrefix = null): self
    {
        $this->MidocoNamePrefix = $midocoNamePrefix;
        
        return $this;
    }
}
