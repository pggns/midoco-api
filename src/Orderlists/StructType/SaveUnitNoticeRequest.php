<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveUnitNoticeRequest StructType
 * @subpackage Structs
 */
class SaveUnitNoticeRequest extends AbstractStructBase
{
    /**
     * The MidocoOrgunitNotice
     * @var \Pggns\MidocoApi\Orderlists\StructType\UnitNoticeDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\UnitNoticeDTO $MidocoOrgunitNotice = null;
    /**
     * Constructor method for SaveUnitNoticeRequest
     * @uses SaveUnitNoticeRequest::setMidocoOrgunitNotice()
     * @param \Pggns\MidocoApi\Orderlists\StructType\UnitNoticeDTO $midocoOrgunitNotice
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\UnitNoticeDTO $midocoOrgunitNotice = null)
    {
        $this
            ->setMidocoOrgunitNotice($midocoOrgunitNotice);
    }
    /**
     * Get MidocoOrgunitNotice value
     * @return \Pggns\MidocoApi\Orderlists\StructType\UnitNoticeDTO|null
     */
    public function getMidocoOrgunitNotice(): ?\Pggns\MidocoApi\Orderlists\StructType\UnitNoticeDTO
    {
        return $this->MidocoOrgunitNotice;
    }
    /**
     * Set MidocoOrgunitNotice value
     * @param \Pggns\MidocoApi\Orderlists\StructType\UnitNoticeDTO $midocoOrgunitNotice
     * @return \Pggns\MidocoApi\Orderlists\StructType\SaveUnitNoticeRequest
     */
    public function setMidocoOrgunitNotice(?\Pggns\MidocoApi\Orderlists\StructType\UnitNoticeDTO $midocoOrgunitNotice = null): self
    {
        $this->MidocoOrgunitNotice = $midocoOrgunitNotice;
        
        return $this;
    }
}
