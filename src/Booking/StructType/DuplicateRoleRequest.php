<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Booking\StructType;

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
     * @var \Pggns\MidocoApi\Booking\StructType\MidocoDuplicateRoleInfo|null
     */
    protected ?\Pggns\MidocoApi\Booking\StructType\MidocoDuplicateRoleInfo $MidocoDuplicateRoleInfo = null;
    /**
     * Constructor method for DuplicateRoleRequest
     * @uses DuplicateRoleRequest::setMidocoDuplicateRoleInfo()
     * @param \Pggns\MidocoApi\Booking\StructType\MidocoDuplicateRoleInfo $midocoDuplicateRoleInfo
     */
    public function __construct(?\Pggns\MidocoApi\Booking\StructType\MidocoDuplicateRoleInfo $midocoDuplicateRoleInfo = null)
    {
        $this
            ->setMidocoDuplicateRoleInfo($midocoDuplicateRoleInfo);
    }
    /**
     * Get MidocoDuplicateRoleInfo value
     * @return \Pggns\MidocoApi\Booking\StructType\MidocoDuplicateRoleInfo|null
     */
    public function getMidocoDuplicateRoleInfo(): ?\Pggns\MidocoApi\Booking\StructType\MidocoDuplicateRoleInfo
    {
        return $this->MidocoDuplicateRoleInfo;
    }
    /**
     * Set MidocoDuplicateRoleInfo value
     * @param \Pggns\MidocoApi\Booking\StructType\MidocoDuplicateRoleInfo $midocoDuplicateRoleInfo
     * @return \Pggns\MidocoApi\Booking\StructType\DuplicateRoleRequest
     */
    public function setMidocoDuplicateRoleInfo(?\Pggns\MidocoApi\Booking\StructType\MidocoDuplicateRoleInfo $midocoDuplicateRoleInfo = null): self
    {
        $this->MidocoDuplicateRoleInfo = $midocoDuplicateRoleInfo;
        
        return $this;
    }
}
