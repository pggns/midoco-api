<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\CrmSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateNamePrefixResponse StructType
 * @subpackage Structs
 */
class CreateNamePrefixResponse extends AbstractStructBase
{
    /**
     * The MidocoNamePrefix
     * Meta information extracted from the WSDL
     * - ref: MidocoNamePrefix
     * @var \Pggns\MidocoApi\CrmSD\StructType\NamePrefixDTO|null
     */
    protected ?\Pggns\MidocoApi\CrmSD\StructType\NamePrefixDTO $MidocoNamePrefix = null;
    /**
     * Constructor method for CreateNamePrefixResponse
     * @uses CreateNamePrefixResponse::setMidocoNamePrefix()
     * @param \Pggns\MidocoApi\CrmSD\StructType\NamePrefixDTO $midocoNamePrefix
     */
    public function __construct(?\Pggns\MidocoApi\CrmSD\StructType\NamePrefixDTO $midocoNamePrefix = null)
    {
        $this
            ->setMidocoNamePrefix($midocoNamePrefix);
    }
    /**
     * Get MidocoNamePrefix value
     * @return \Pggns\MidocoApi\CrmSD\StructType\NamePrefixDTO|null
     */
    public function getMidocoNamePrefix(): ?\Pggns\MidocoApi\CrmSD\StructType\NamePrefixDTO
    {
        return $this->MidocoNamePrefix;
    }
    /**
     * Set MidocoNamePrefix value
     * @param \Pggns\MidocoApi\CrmSD\StructType\NamePrefixDTO $midocoNamePrefix
     * @return \Pggns\MidocoApi\CrmSD\StructType\CreateNamePrefixResponse
     */
    public function setMidocoNamePrefix(?\Pggns\MidocoApi\CrmSD\StructType\NamePrefixDTO $midocoNamePrefix = null): self
    {
        $this->MidocoNamePrefix = $midocoNamePrefix;
        
        return $this;
    }
}
