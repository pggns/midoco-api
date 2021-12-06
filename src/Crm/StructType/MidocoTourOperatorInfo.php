<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Crm\StructType;

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
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoTourOperator|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoTourOperator $MidocoTourOperator = null;
    /**
     * The MidocoTourOperatorAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoTourOperatorAddress
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoTourOperatorAddress|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoTourOperatorAddress $MidocoTourOperatorAddress = null;
    /**
     * The MidocoInsurerInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoInsurerInfo
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoInsurerInfo|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoInsurerInfo $MidocoInsurerInfo = null;
    /**
     * The MidocoAssessorInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoAssessorInfo
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoAssessorInfo|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoAssessorInfo $MidocoAssessorInfo = null;
    /**
     * The MidocoTourOperatorInsurer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: MidocoTourOperatorInsurer
     * @var \Pggns\MidocoApi\Crm\StructType\MidocoTourOperatorInsurer|null
     */
    protected ?\Pggns\MidocoApi\Crm\StructType\MidocoTourOperatorInsurer $MidocoTourOperatorInsurer = null;
    /**
     * Constructor method for MidocoTourOperatorInfo
     * @uses MidocoTourOperatorInfo::setMidocoTourOperator()
     * @uses MidocoTourOperatorInfo::setMidocoTourOperatorAddress()
     * @uses MidocoTourOperatorInfo::setMidocoInsurerInfo()
     * @uses MidocoTourOperatorInfo::setMidocoAssessorInfo()
     * @uses MidocoTourOperatorInfo::setMidocoTourOperatorInsurer()
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoTourOperator $midocoTourOperator
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoInsurerInfo $midocoInsurerInfo
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoAssessorInfo $midocoAssessorInfo
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer
     */
    public function __construct(?\Pggns\MidocoApi\Crm\StructType\MidocoTourOperator $midocoTourOperator = null, ?\Pggns\MidocoApi\Crm\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress = null, ?\Pggns\MidocoApi\Crm\StructType\MidocoInsurerInfo $midocoInsurerInfo = null, ?\Pggns\MidocoApi\Crm\StructType\MidocoAssessorInfo $midocoAssessorInfo = null, ?\Pggns\MidocoApi\Crm\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer = null)
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
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoTourOperator|null
     */
    public function getMidocoTourOperator(): ?\Pggns\MidocoApi\Crm\StructType\MidocoTourOperator
    {
        return $this->MidocoTourOperator;
    }
    /**
     * Set MidocoTourOperator value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoTourOperator $midocoTourOperator
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoTourOperatorInfo
     */
    public function setMidocoTourOperator(?\Pggns\MidocoApi\Crm\StructType\MidocoTourOperator $midocoTourOperator = null): self
    {
        $this->MidocoTourOperator = $midocoTourOperator;
        
        return $this;
    }
    /**
     * Get MidocoTourOperatorAddress value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoTourOperatorAddress|null
     */
    public function getMidocoTourOperatorAddress(): ?\Pggns\MidocoApi\Crm\StructType\MidocoTourOperatorAddress
    {
        return $this->MidocoTourOperatorAddress;
    }
    /**
     * Set MidocoTourOperatorAddress value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoTourOperatorInfo
     */
    public function setMidocoTourOperatorAddress(?\Pggns\MidocoApi\Crm\StructType\MidocoTourOperatorAddress $midocoTourOperatorAddress = null): self
    {
        $this->MidocoTourOperatorAddress = $midocoTourOperatorAddress;
        
        return $this;
    }
    /**
     * Get MidocoInsurerInfo value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoInsurerInfo|null
     */
    public function getMidocoInsurerInfo(): ?\Pggns\MidocoApi\Crm\StructType\MidocoInsurerInfo
    {
        return $this->MidocoInsurerInfo;
    }
    /**
     * Set MidocoInsurerInfo value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoInsurerInfo $midocoInsurerInfo
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoTourOperatorInfo
     */
    public function setMidocoInsurerInfo(?\Pggns\MidocoApi\Crm\StructType\MidocoInsurerInfo $midocoInsurerInfo = null): self
    {
        $this->MidocoInsurerInfo = $midocoInsurerInfo;
        
        return $this;
    }
    /**
     * Get MidocoAssessorInfo value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoAssessorInfo|null
     */
    public function getMidocoAssessorInfo(): ?\Pggns\MidocoApi\Crm\StructType\MidocoAssessorInfo
    {
        return $this->MidocoAssessorInfo;
    }
    /**
     * Set MidocoAssessorInfo value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoAssessorInfo $midocoAssessorInfo
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoTourOperatorInfo
     */
    public function setMidocoAssessorInfo(?\Pggns\MidocoApi\Crm\StructType\MidocoAssessorInfo $midocoAssessorInfo = null): self
    {
        $this->MidocoAssessorInfo = $midocoAssessorInfo;
        
        return $this;
    }
    /**
     * Get MidocoTourOperatorInsurer value
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoTourOperatorInsurer|null
     */
    public function getMidocoTourOperatorInsurer(): ?\Pggns\MidocoApi\Crm\StructType\MidocoTourOperatorInsurer
    {
        return $this->MidocoTourOperatorInsurer;
    }
    /**
     * Set MidocoTourOperatorInsurer value
     * @param \Pggns\MidocoApi\Crm\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer
     * @return \Pggns\MidocoApi\Crm\StructType\MidocoTourOperatorInfo
     */
    public function setMidocoTourOperatorInsurer(?\Pggns\MidocoApi\Crm\StructType\MidocoTourOperatorInsurer $midocoTourOperatorInsurer = null): self
    {
        $this->MidocoTourOperatorInsurer = $midocoTourOperatorInsurer;
        
        return $this;
    }
}
