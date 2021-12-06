<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Mis\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTourOperatorInfo StructType
 * @subpackage Structs
 */
class MidocoTourOperatorInfo extends AbstractStructBase
{
    /**
     * The MidocoTourOperator
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoTourOperator
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoTourOperator|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoTourOperator $MidocoTourOperator = null;
    /**
     * The MidocoTourOperatorAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoTourOperatorAddress
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoTourOperatorAddress|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoTourOperatorAddress $MidocoTourOperatorAddress = null;
    /**
     * The MidocoInsurerInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoInsurerInfo
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoInsurerInfo|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoInsurerInfo $MidocoInsurerInfo = null;
    /**
     * The MidocoAssessorInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoAssessorInfo
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoAssessorInfo|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoAssessorInfo $MidocoAssessorInfo = null;
    /**
     * The MidocoTourOperatorInsurer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoTourOperatorInsurer
     * @var \Pggns\MidocoApi\Mis\StructType\MidocoTourOperatorInsurer|null
     */
    protected ?\Pggns\MidocoApi\Mis\StructType\MidocoTourOperatorInsurer $MidocoTourOperatorInsurer = null;
    /**
     * Constructor method for MidocoTourOperatorInfo
     * @uses MidocoTourOperatorInfo::setMidocoTourOperator()
     * @uses MidocoTourOperatorInfo::setMidocoTourOperatorAddress()
     * @uses MidocoTourOperatorInfo::setMidocoInsurerInfo()
     * @uses MidocoTourOperatorInfo::setMidocoAssessorInfo()
     * @uses MidocoTourOperatorInfo::setMidocoTourOperatorInsurer()
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoTourOperator $midocoTourOperator
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoInsurerInfo $midocoInsurerInfo
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoAssessorInfo $midocoAssessorInfo
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer
     */
    public function __construct(?\Pggns\MidocoApi\Mis\StructType\MidocoTourOperator $midocoTourOperator = null, ?\Pggns\MidocoApi\Mis\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress = null, ?\Pggns\MidocoApi\Mis\StructType\MidocoInsurerInfo $midocoInsurerInfo = null, ?\Pggns\MidocoApi\Mis\StructType\MidocoAssessorInfo $midocoAssessorInfo = null, ?\Pggns\MidocoApi\Mis\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer = null)
    {
        $this
            ->setMidocoTourOperator($midocoTourOperator)
            ->setMidocoTourOperatorAddress($midocoTourOperatorAddress)
            ->setMidocoInsurerInfo($midocoInsurerInfo)
            ->setMidocoAssessorInfo($midocoAssessorInfo)
            ->setMidocoTourOperatorInsurer($midocoTourOperatorInsurer);
    }
    /**
     * Get MidocoTourOperator value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoTourOperator|null
     */
    public function getMidocoTourOperator(): ?\Pggns\MidocoApi\Mis\StructType\MidocoTourOperator
    {
        return $this->MidocoTourOperator;
    }
    /**
     * Set MidocoTourOperator value
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoTourOperator $midocoTourOperator
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoTourOperatorInfo
     */
    public function setMidocoTourOperator(?\Pggns\MidocoApi\Mis\StructType\MidocoTourOperator $midocoTourOperator = null): self
    {
        $this->MidocoTourOperator = $midocoTourOperator;
        
        return $this;
    }
    /**
     * Get MidocoTourOperatorAddress value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoTourOperatorAddress|null
     */
    public function getMidocoTourOperatorAddress(): ?\Pggns\MidocoApi\Mis\StructType\MidocoTourOperatorAddress
    {
        return $this->MidocoTourOperatorAddress;
    }
    /**
     * Set MidocoTourOperatorAddress value
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoTourOperatorInfo
     */
    public function setMidocoTourOperatorAddress(?\Pggns\MidocoApi\Mis\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress = null): self
    {
        $this->MidocoTourOperatorAddress = $midocoTourOperatorAddress;
        
        return $this;
    }
    /**
     * Get MidocoInsurerInfo value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoInsurerInfo|null
     */
    public function getMidocoInsurerInfo(): ?\Pggns\MidocoApi\Mis\StructType\MidocoInsurerInfo
    {
        return $this->MidocoInsurerInfo;
    }
    /**
     * Set MidocoInsurerInfo value
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoInsurerInfo $midocoInsurerInfo
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoTourOperatorInfo
     */
    public function setMidocoInsurerInfo(?\Pggns\MidocoApi\Mis\StructType\MidocoInsurerInfo $midocoInsurerInfo = null): self
    {
        $this->MidocoInsurerInfo = $midocoInsurerInfo;
        
        return $this;
    }
    /**
     * Get MidocoAssessorInfo value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoAssessorInfo|null
     */
    public function getMidocoAssessorInfo(): ?\Pggns\MidocoApi\Mis\StructType\MidocoAssessorInfo
    {
        return $this->MidocoAssessorInfo;
    }
    /**
     * Set MidocoAssessorInfo value
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoAssessorInfo $midocoAssessorInfo
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoTourOperatorInfo
     */
    public function setMidocoAssessorInfo(?\Pggns\MidocoApi\Mis\StructType\MidocoAssessorInfo $midocoAssessorInfo = null): self
    {
        $this->MidocoAssessorInfo = $midocoAssessorInfo;
        
        return $this;
    }
    /**
     * Get MidocoTourOperatorInsurer value
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoTourOperatorInsurer|null
     */
    public function getMidocoTourOperatorInsurer(): ?\Pggns\MidocoApi\Mis\StructType\MidocoTourOperatorInsurer
    {
        return $this->MidocoTourOperatorInsurer;
    }
    /**
     * Set MidocoTourOperatorInsurer value
     * @param \Pggns\MidocoApi\Mis\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer
     * @return \Pggns\MidocoApi\Mis\StructType\MidocoTourOperatorInfo
     */
    public function setMidocoTourOperatorInsurer(?\Pggns\MidocoApi\Mis\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer = null): self
    {
        $this->MidocoTourOperatorInsurer = $midocoTourOperatorInsurer;
        
        return $this;
    }
}
