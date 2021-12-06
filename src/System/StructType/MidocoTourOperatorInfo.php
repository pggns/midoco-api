<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\System\StructType;

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
     * @var \Pggns\MidocoApi\System\StructType\MidocoTourOperator|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\MidocoTourOperator $MidocoTourOperator = null;
    /**
     * The MidocoTourOperatorAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoTourOperatorAddress
     * @var \Pggns\MidocoApi\System\StructType\MidocoTourOperatorAddress|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\MidocoTourOperatorAddress $MidocoTourOperatorAddress = null;
    /**
     * The MidocoInsurerInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoInsurerInfo
     * @var \Pggns\MidocoApi\System\StructType\MidocoInsurerInfo|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\MidocoInsurerInfo $MidocoInsurerInfo = null;
    /**
     * The MidocoAssessorInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoAssessorInfo
     * @var \Pggns\MidocoApi\System\StructType\MidocoAssessorInfo|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\MidocoAssessorInfo $MidocoAssessorInfo = null;
    /**
     * The MidocoTourOperatorInsurer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoTourOperatorInsurer
     * @var \Pggns\MidocoApi\System\StructType\MidocoTourOperatorInsurer|null
     */
    protected ?\Pggns\MidocoApi\System\StructType\MidocoTourOperatorInsurer $MidocoTourOperatorInsurer = null;
    /**
     * Constructor method for MidocoTourOperatorInfo
     * @uses MidocoTourOperatorInfo::setMidocoTourOperator()
     * @uses MidocoTourOperatorInfo::setMidocoTourOperatorAddress()
     * @uses MidocoTourOperatorInfo::setMidocoInsurerInfo()
     * @uses MidocoTourOperatorInfo::setMidocoAssessorInfo()
     * @uses MidocoTourOperatorInfo::setMidocoTourOperatorInsurer()
     * @param \Pggns\MidocoApi\System\StructType\MidocoTourOperator $midocoTourOperator
     * @param \Pggns\MidocoApi\System\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress
     * @param \Pggns\MidocoApi\System\StructType\MidocoInsurerInfo $midocoInsurerInfo
     * @param \Pggns\MidocoApi\System\StructType\MidocoAssessorInfo $midocoAssessorInfo
     * @param \Pggns\MidocoApi\System\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer
     */
    public function __construct(?\Pggns\MidocoApi\System\StructType\MidocoTourOperator $midocoTourOperator = null, ?\Pggns\MidocoApi\System\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress = null, ?\Pggns\MidocoApi\System\StructType\MidocoInsurerInfo $midocoInsurerInfo = null, ?\Pggns\MidocoApi\System\StructType\MidocoAssessorInfo $midocoAssessorInfo = null, ?\Pggns\MidocoApi\System\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer = null)
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
     * @return \Pggns\MidocoApi\System\StructType\MidocoTourOperator|null
     */
    public function getMidocoTourOperator(): ?\Pggns\MidocoApi\System\StructType\MidocoTourOperator
    {
        return $this->MidocoTourOperator;
    }
    /**
     * Set MidocoTourOperator value
     * @param \Pggns\MidocoApi\System\StructType\MidocoTourOperator $midocoTourOperator
     * @return \Pggns\MidocoApi\System\StructType\MidocoTourOperatorInfo
     */
    public function setMidocoTourOperator(?\Pggns\MidocoApi\System\StructType\MidocoTourOperator $midocoTourOperator = null): self
    {
        $this->MidocoTourOperator = $midocoTourOperator;
        
        return $this;
    }
    /**
     * Get MidocoTourOperatorAddress value
     * @return \Pggns\MidocoApi\System\StructType\MidocoTourOperatorAddress|null
     */
    public function getMidocoTourOperatorAddress(): ?\Pggns\MidocoApi\System\StructType\MidocoTourOperatorAddress
    {
        return $this->MidocoTourOperatorAddress;
    }
    /**
     * Set MidocoTourOperatorAddress value
     * @param \Pggns\MidocoApi\System\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress
     * @return \Pggns\MidocoApi\System\StructType\MidocoTourOperatorInfo
     */
    public function setMidocoTourOperatorAddress(?\Pggns\MidocoApi\System\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress = null): self
    {
        $this->MidocoTourOperatorAddress = $midocoTourOperatorAddress;
        
        return $this;
    }
    /**
     * Get MidocoInsurerInfo value
     * @return \Pggns\MidocoApi\System\StructType\MidocoInsurerInfo|null
     */
    public function getMidocoInsurerInfo(): ?\Pggns\MidocoApi\System\StructType\MidocoInsurerInfo
    {
        return $this->MidocoInsurerInfo;
    }
    /**
     * Set MidocoInsurerInfo value
     * @param \Pggns\MidocoApi\System\StructType\MidocoInsurerInfo $midocoInsurerInfo
     * @return \Pggns\MidocoApi\System\StructType\MidocoTourOperatorInfo
     */
    public function setMidocoInsurerInfo(?\Pggns\MidocoApi\System\StructType\MidocoInsurerInfo $midocoInsurerInfo = null): self
    {
        $this->MidocoInsurerInfo = $midocoInsurerInfo;
        
        return $this;
    }
    /**
     * Get MidocoAssessorInfo value
     * @return \Pggns\MidocoApi\System\StructType\MidocoAssessorInfo|null
     */
    public function getMidocoAssessorInfo(): ?\Pggns\MidocoApi\System\StructType\MidocoAssessorInfo
    {
        return $this->MidocoAssessorInfo;
    }
    /**
     * Set MidocoAssessorInfo value
     * @param \Pggns\MidocoApi\System\StructType\MidocoAssessorInfo $midocoAssessorInfo
     * @return \Pggns\MidocoApi\System\StructType\MidocoTourOperatorInfo
     */
    public function setMidocoAssessorInfo(?\Pggns\MidocoApi\System\StructType\MidocoAssessorInfo $midocoAssessorInfo = null): self
    {
        $this->MidocoAssessorInfo = $midocoAssessorInfo;
        
        return $this;
    }
    /**
     * Get MidocoTourOperatorInsurer value
     * @return \Pggns\MidocoApi\System\StructType\MidocoTourOperatorInsurer|null
     */
    public function getMidocoTourOperatorInsurer(): ?\Pggns\MidocoApi\System\StructType\MidocoTourOperatorInsurer
    {
        return $this->MidocoTourOperatorInsurer;
    }
    /**
     * Set MidocoTourOperatorInsurer value
     * @param \Pggns\MidocoApi\System\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer
     * @return \Pggns\MidocoApi\System\StructType\MidocoTourOperatorInfo
     */
    public function setMidocoTourOperatorInsurer(?\Pggns\MidocoApi\System\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer = null): self
    {
        $this->MidocoTourOperatorInsurer = $midocoTourOperatorInsurer;
        
        return $this;
    }
}
