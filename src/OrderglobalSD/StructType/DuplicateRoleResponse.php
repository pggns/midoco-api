<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DuplicateRoleResponse StructType
 * @subpackage Structs
 */
class DuplicateRoleResponse extends AbstractStructBase
{
    /**
     * The MidocoDuplicateRoleInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoDuplicateRoleInfo
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDuplicateRoleInfo|null
     */
    protected ?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDuplicateRoleInfo $MidocoDuplicateRoleInfo = null;
    /**
     * Constructor method for DuplicateRoleResponse
     * @uses DuplicateRoleResponse::setMidocoDuplicateRoleInfo()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDuplicateRoleInfo $midocoDuplicateRoleInfo
     */
    public function __construct(?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDuplicateRoleInfo $midocoDuplicateRoleInfo = null)
    {
        $this
            ->setMidocoDuplicateRoleInfo($midocoDuplicateRoleInfo);
    }
    /**
     * Get MidocoDuplicateRoleInfo value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDuplicateRoleInfo|null
     */
    public function getMidocoDuplicateRoleInfo(): ?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDuplicateRoleInfo
    {
        return $this->MidocoDuplicateRoleInfo;
    }
    /**
     * Set MidocoDuplicateRoleInfo value
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDuplicateRoleInfo $midocoDuplicateRoleInfo
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\DuplicateRoleResponse
     */
    public function setMidocoDuplicateRoleInfo(?\Pggns\MidocoApi\OrderglobalSD\StructType\MidocoDuplicateRoleInfo $midocoDuplicateRoleInfo = null): self
    {
        $this->MidocoDuplicateRoleInfo = $midocoDuplicateRoleInfo;
        
        return $this;
    }
}
