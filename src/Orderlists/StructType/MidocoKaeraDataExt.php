<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoKaeraDataExt StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class MidocoKaeraDataExt extends AbstractStructBase
{
    /**
     * The MidocoKaeraTravelData
     * Meta information extracted from the WSDL
     * - ref: MidocoKaeraTravelData
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoKaeraTravelData|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoKaeraTravelData $MidocoKaeraTravelData = null;
    /**
     * The MidocoPackageInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoPackageInfo
     * @var \Pggns\MidocoApi\Orderlists\StructType\PackageitemDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\PackageitemDTO $MidocoPackageInfo = null;
    /**
     * Constructor method for MidocoKaeraDataExt
     * @uses MidocoKaeraDataExt::setMidocoKaeraTravelData()
     * @uses MidocoKaeraDataExt::setMidocoPackageInfo()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoKaeraTravelData $midocoKaeraTravelData
     * @param \Pggns\MidocoApi\Orderlists\StructType\PackageitemDTO $midocoPackageInfo
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoKaeraTravelData $midocoKaeraTravelData = null, ?\Pggns\MidocoApi\Orderlists\StructType\PackageitemDTO $midocoPackageInfo = null)
    {
        $this
            ->setMidocoKaeraTravelData($midocoKaeraTravelData)
            ->setMidocoPackageInfo($midocoPackageInfo);
    }
    /**
     * Get MidocoKaeraTravelData value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoKaeraTravelData|null
     */
    public function getMidocoKaeraTravelData(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoKaeraTravelData
    {
        return $this->MidocoKaeraTravelData;
    }
    /**
     * Set MidocoKaeraTravelData value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoKaeraTravelData $midocoKaeraTravelData
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoKaeraDataExt
     */
    public function setMidocoKaeraTravelData(?\Pggns\MidocoApi\Orderlists\StructType\MidocoKaeraTravelData $midocoKaeraTravelData = null): self
    {
        $this->MidocoKaeraTravelData = $midocoKaeraTravelData;
        
        return $this;
    }
    /**
     * Get MidocoPackageInfo value
     * @return \Pggns\MidocoApi\Orderlists\StructType\PackageitemDTO|null
     */
    public function getMidocoPackageInfo(): ?\Pggns\MidocoApi\Orderlists\StructType\PackageitemDTO
    {
        return $this->MidocoPackageInfo;
    }
    /**
     * Set MidocoPackageInfo value
     * @param \Pggns\MidocoApi\Orderlists\StructType\PackageitemDTO $midocoPackageInfo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoKaeraDataExt
     */
    public function setMidocoPackageInfo(?\Pggns\MidocoApi\Orderlists\StructType\PackageitemDTO $midocoPackageInfo = null): self
    {
        $this->MidocoPackageInfo = $midocoPackageInfo;
        
        return $this;
    }
}
