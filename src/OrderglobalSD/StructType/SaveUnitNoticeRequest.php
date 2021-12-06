<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\OrderglobalSD\StructType;

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
     * @var \Pggns\MidocoApi\OrderglobalSD\StructType\UnitNoticeDTO|null
     */
    protected ?\Pggns\MidocoApi\OrderglobalSD\StructType\UnitNoticeDTO $MidocoOrgunitNotice = null;
    /**
     * Constructor method for SaveUnitNoticeRequest
     * @uses SaveUnitNoticeRequest::setMidocoOrgunitNotice()
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\UnitNoticeDTO $midocoOrgunitNotice
     */
    public function __construct(?\Pggns\MidocoApi\OrderglobalSD\StructType\UnitNoticeDTO $midocoOrgunitNotice = null)
    {
        $this
            ->setMidocoOrgunitNotice($midocoOrgunitNotice);
    }
    /**
     * Get MidocoOrgunitNotice value
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\UnitNoticeDTO|null
     */
    public function getMidocoOrgunitNotice(): ?\Pggns\MidocoApi\OrderglobalSD\StructType\UnitNoticeDTO
    {
        return $this->MidocoOrgunitNotice;
    }
    /**
     * Set MidocoOrgunitNotice value
     * @param \Pggns\MidocoApi\OrderglobalSD\StructType\UnitNoticeDTO $midocoOrgunitNotice
     * @return \Pggns\MidocoApi\OrderglobalSD\StructType\SaveUnitNoticeRequest
     */
    public function setMidocoOrgunitNotice(?\Pggns\MidocoApi\OrderglobalSD\StructType\UnitNoticeDTO $midocoOrgunitNotice = null): self
    {
        $this->MidocoOrgunitNotice = $midocoOrgunitNotice;
        
        return $this;
    }
}
