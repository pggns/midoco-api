<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DuplicateRoleRequest StructType
 * @subpackage Structs
 */
class DuplicateRoleRequest extends AbstractStructBase
{
    /**
     * The MidocoDuplicateRoleInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoDuplicateRoleInfo
     * @var \Pggns\MidocoApi\System\StructType\MidocoDuplicateRoleInfo|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\MidocoDuplicateRoleInfo $MidocoDuplicateRoleInfo = null;
    /**
     * Constructor method for DuplicateRoleRequest
     * @uses DuplicateRoleRequest::setMidocoDuplicateRoleInfo()
     * @param \Pggns\MidocoApi\System\StructType\MidocoDuplicateRoleInfo $midocoDuplicateRoleInfo
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\MidocoDuplicateRoleInfo $midocoDuplicateRoleInfo = null)
    {
        $this
            ->setMidocoDuplicateRoleInfo($midocoDuplicateRoleInfo);
    }
    /**
     * Get MidocoDuplicateRoleInfo value
     * @return \Pggns\MidocoApi\System\StructType\MidocoDuplicateRoleInfo|null
     */
    public function getMidocoDuplicateRoleInfo(): ?\Pggns\MidocoApi\System\StructType\MidocoDuplicateRoleInfo
    {
        return $this->MidocoDuplicateRoleInfo;
    }
    /**
     * Set MidocoDuplicateRoleInfo value
     * @param \Pggns\MidocoApi\System\StructType\MidocoDuplicateRoleInfo $midocoDuplicateRoleInfo
     * @return \Pggns\MidocoApi\System\StructType\DuplicateRoleRequest
     */
    public function setMidocoDuplicateRoleInfo(?\Pggns\MidocoApi\System\StructType\MidocoDuplicateRoleInfo $midocoDuplicateRoleInfo = null): self
    {
        $this->MidocoDuplicateRoleInfo = $midocoDuplicateRoleInfo;
        
        return $this;
    }
}
