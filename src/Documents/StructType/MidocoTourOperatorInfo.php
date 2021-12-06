<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Documents\StructType;

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
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoTourOperator|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperator $MidocoTourOperator = null;
    /**
     * The MidocoTourOperatorAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoTourOperatorAddress
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorAddress|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorAddress $MidocoTourOperatorAddress = null;
    /**
     * The MidocoInsurerInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoInsurerInfo
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoInsurerInfo|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoInsurerInfo $MidocoInsurerInfo = null;
    /**
     * The MidocoAssessorInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoAssessorInfo
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoAssessorInfo|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoAssessorInfo $MidocoAssessorInfo = null;
    /**
     * The MidocoTourOperatorInsurer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoTourOperatorInsurer
     * @var \Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorInsurer|null
     */
    protected ?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorInsurer $MidocoTourOperatorInsurer = null;
    /**
     * Constructor method for MidocoTourOperatorInfo
     * @uses MidocoTourOperatorInfo::setMidocoTourOperator()
     * @uses MidocoTourOperatorInfo::setMidocoTourOperatorAddress()
     * @uses MidocoTourOperatorInfo::setMidocoInsurerInfo()
     * @uses MidocoTourOperatorInfo::setMidocoAssessorInfo()
     * @uses MidocoTourOperatorInfo::setMidocoTourOperatorInsurer()
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoTourOperator $midocoTourOperator
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoInsurerInfo $midocoInsurerInfo
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAssessorInfo $midocoAssessorInfo
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer
     */
    public function __construct(?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperator $midocoTourOperator = null, ?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress = null, ?\Pggns\MidocoApi\Documents\StructType\MidocoInsurerInfo $midocoInsurerInfo = null, ?\Pggns\MidocoApi\Documents\StructType\MidocoAssessorInfo $midocoAssessorInfo = null, ?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer = null)
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
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoTourOperator|null
     */
    public function getMidocoTourOperator(): ?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperator
    {
        return $this->MidocoTourOperator;
    }
    /**
     * Set MidocoTourOperator value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoTourOperator $midocoTourOperator
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorInfo
     */
    public function setMidocoTourOperator(?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperator $midocoTourOperator = null): self
    {
        $this->MidocoTourOperator = $midocoTourOperator;
        
        return $this;
    }
    /**
     * Get MidocoTourOperatorAddress value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorAddress|null
     */
    public function getMidocoTourOperatorAddress(): ?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorAddress
    {
        return $this->MidocoTourOperatorAddress;
    }
    /**
     * Set MidocoTourOperatorAddress value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorInfo
     */
    public function setMidocoTourOperatorAddress(?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress = null): self
    {
        $this->MidocoTourOperatorAddress = $midocoTourOperatorAddress;
        
        return $this;
    }
    /**
     * Get MidocoInsurerInfo value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoInsurerInfo|null
     */
    public function getMidocoInsurerInfo(): ?\Pggns\MidocoApi\Documents\StructType\MidocoInsurerInfo
    {
        return $this->MidocoInsurerInfo;
    }
    /**
     * Set MidocoInsurerInfo value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoInsurerInfo $midocoInsurerInfo
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorInfo
     */
    public function setMidocoInsurerInfo(?\Pggns\MidocoApi\Documents\StructType\MidocoInsurerInfo $midocoInsurerInfo = null): self
    {
        $this->MidocoInsurerInfo = $midocoInsurerInfo;
        
        return $this;
    }
    /**
     * Get MidocoAssessorInfo value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoAssessorInfo|null
     */
    public function getMidocoAssessorInfo(): ?\Pggns\MidocoApi\Documents\StructType\MidocoAssessorInfo
    {
        return $this->MidocoAssessorInfo;
    }
    /**
     * Set MidocoAssessorInfo value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoAssessorInfo $midocoAssessorInfo
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorInfo
     */
    public function setMidocoAssessorInfo(?\Pggns\MidocoApi\Documents\StructType\MidocoAssessorInfo $midocoAssessorInfo = null): self
    {
        $this->MidocoAssessorInfo = $midocoAssessorInfo;
        
        return $this;
    }
    /**
     * Get MidocoTourOperatorInsurer value
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorInsurer|null
     */
    public function getMidocoTourOperatorInsurer(): ?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorInsurer
    {
        return $this->MidocoTourOperatorInsurer;
    }
    /**
     * Set MidocoTourOperatorInsurer value
     * @param \Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer
     * @return \Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorInfo
     */
    public function setMidocoTourOperatorInsurer(?\Pggns\MidocoApi\Documents\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer = null): self
    {
        $this->MidocoTourOperatorInsurer = $midocoTourOperatorInsurer;
        
        return $this;
    }
}
