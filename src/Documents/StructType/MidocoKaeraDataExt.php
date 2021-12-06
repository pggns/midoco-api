<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Api\Documents\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoKaeraDataExt StructType
 * @subpackage Structs
 */
class MidocoKaeraDataExt extends AbstractStructBase
{
    /**
     * The MidocoKaeraTravelData
     * Meta information extracted from the WSDL
     * - ref: MidocoKaeraTravelData
     * @var \Pggns\MidocoApi\Api\Documents\StructType\MidocoKaeraTravelData|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoKaeraTravelData $MidocoKaeraTravelData = null;
    /**
     * The MidocoPackageInfo
     * Meta information extracted from the WSDL
     * - ref: MidocoPackageInfo
     * @var \Pggns\MidocoApi\Api\Documents\StructType\PackageitemDTO|null
     */
    protected ?\Pggns\MidocoApi\Api\Documents\StructType\PackageitemDTO $MidocoPackageInfo = null;
    /**
     * Constructor method for MidocoKaeraDataExt
     * @uses MidocoKaeraDataExt::setMidocoKaeraTravelData()
     * @uses MidocoKaeraDataExt::setMidocoPackageInfo()
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoKaeraTravelData $midocoKaeraTravelData
     * @param \Pggns\MidocoApi\Api\Documents\StructType\PackageitemDTO $midocoPackageInfo
     */
    public function __construct(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoKaeraTravelData $midocoKaeraTravelData = null, ?\Pggns\MidocoApi\Api\Documents\StructType\PackageitemDTO $midocoPackageInfo = null)
    {
        $this
            ->setMidocoKaeraTravelData($midocoKaeraTravelData)
            ->setMidocoPackageInfo($midocoPackageInfo);
    }
    /**
     * Get MidocoKaeraTravelData value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoKaeraTravelData|null
     */
    public function getMidocoKaeraTravelData(): ?\Pggns\MidocoApi\Api\Documents\StructType\MidocoKaeraTravelData
    {
        return $this->MidocoKaeraTravelData;
    }
    /**
     * Set MidocoKaeraTravelData value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\MidocoKaeraTravelData $midocoKaeraTravelData
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoKaeraDataExt
     */
    public function setMidocoKaeraTravelData(?\Pggns\MidocoApi\Api\Documents\StructType\MidocoKaeraTravelData $midocoKaeraTravelData = null): self
    {
        $this->MidocoKaeraTravelData = $midocoKaeraTravelData;
        
        return $this;
    }
    /**
     * Get MidocoPackageInfo value
     * @return \Pggns\MidocoApi\Api\Documents\StructType\PackageitemDTO|null
     */
    public function getMidocoPackageInfo(): ?\Pggns\MidocoApi\Api\Documents\StructType\PackageitemDTO
    {
        return $this->MidocoPackageInfo;
    }
    /**
     * Set MidocoPackageInfo value
     * @param \Pggns\MidocoApi\Api\Documents\StructType\PackageitemDTO $midocoPackageInfo
     * @return \Pggns\MidocoApi\Api\Documents\StructType\MidocoKaeraDataExt
     */
    public function setMidocoPackageInfo(?\Pggns\MidocoApi\Api\Documents\StructType\PackageitemDTO $midocoPackageInfo = null): self
    {
        $this->MidocoPackageInfo = $midocoPackageInfo;
        
        return $this;
    }
}
