<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BillingStatType StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class BillingStatType extends BillingStatDTO
{
    /**
     * The cdf01
     * @var string|null
     */
    protected ?string $cdf01 = null;
    /**
     * The cdf02
     * @var string|null
     */
    protected ?string $cdf02 = null;
    /**
     * The cdf03
     * @var string|null
     */
    protected ?string $cdf03 = null;
    /**
     * The cdf04
     * @var string|null
     */
    protected ?string $cdf04 = null;
    /**
     * The cdf05
     * @var string|null
     */
    protected ?string $cdf05 = null;
    /**
     * The cdf06
     * @var string|null
     */
    protected ?string $cdf06 = null;
    /**
     * The cdf07
     * @var string|null
     */
    protected ?string $cdf07 = null;
    /**
     * The cdf08
     * @var string|null
     */
    protected ?string $cdf08 = null;
    /**
     * The cdf09
     * @var string|null
     */
    protected ?string $cdf09 = null;
    /**
     * The cdf10
     * @var string|null
     */
    protected ?string $cdf10 = null;
    /**
     * The cdf11
     * @var string|null
     */
    protected ?string $cdf11 = null;
    /**
     * The cdf12
     * @var string|null
     */
    protected ?string $cdf12 = null;
    /**
     * The cdf13
     * @var string|null
     */
    protected ?string $cdf13 = null;
    /**
     * The cdf14
     * @var string|null
     */
    protected ?string $cdf14 = null;
    /**
     * The cdf15
     * @var string|null
     */
    protected ?string $cdf15 = null;
    /**
     * The cdf16
     * @var string|null
     */
    protected ?string $cdf16 = null;
    /**
     * The cdf17
     * @var string|null
     */
    protected ?string $cdf17 = null;
    /**
     * The cdf18
     * @var string|null
     */
    protected ?string $cdf18 = null;
    /**
     * The cdf19
     * @var string|null
     */
    protected ?string $cdf19 = null;
    /**
     * The cdf20
     * @var string|null
     */
    protected ?string $cdf20 = null;
    /**
     * The cdf21
     * @var string|null
     */
    protected ?string $cdf21 = null;
    /**
     * The cdf22
     * @var string|null
     */
    protected ?string $cdf22 = null;
    /**
     * The cdf23
     * @var string|null
     */
    protected ?string $cdf23 = null;
    /**
     * The cdf24
     * @var string|null
     */
    protected ?string $cdf24 = null;
    /**
     * The cdf25
     * @var string|null
     */
    protected ?string $cdf25 = null;
    /**
     * The cdf26
     * @var string|null
     */
    protected ?string $cdf26 = null;
    /**
     * The cdf27
     * @var string|null
     */
    protected ?string $cdf27 = null;
    /**
     * The cdf28
     * @var string|null
     */
    protected ?string $cdf28 = null;
    /**
     * The cdf29
     * @var string|null
     */
    protected ?string $cdf29 = null;
    /**
     * The cdf30
     * @var string|null
     */
    protected ?string $cdf30 = null;
    /**
     * The bookingChannel
     * @var string|null
     */
    protected ?string $bookingChannel = null;
    /**
     * The totalSalesValue
     * @var float|null
     */
    protected ?float $totalSalesValue = null;
    /**
     * The currentMarkup
     * @var float|null
     */
    protected ?float $currentMarkup = null;
    /**
     * The totalProfit
     * @var float|null
     */
    protected ?float $totalProfit = null;
    /**
     * The expectedCommission
     * @var float|null
     */
    protected ?float $expectedCommission = null;
    /**
     * Constructor method for BillingStatType
     * @uses BillingStatType::setCdf01()
     * @uses BillingStatType::setCdf02()
     * @uses BillingStatType::setCdf03()
     * @uses BillingStatType::setCdf04()
     * @uses BillingStatType::setCdf05()
     * @uses BillingStatType::setCdf06()
     * @uses BillingStatType::setCdf07()
     * @uses BillingStatType::setCdf08()
     * @uses BillingStatType::setCdf09()
     * @uses BillingStatType::setCdf10()
     * @uses BillingStatType::setCdf11()
     * @uses BillingStatType::setCdf12()
     * @uses BillingStatType::setCdf13()
     * @uses BillingStatType::setCdf14()
     * @uses BillingStatType::setCdf15()
     * @uses BillingStatType::setCdf16()
     * @uses BillingStatType::setCdf17()
     * @uses BillingStatType::setCdf18()
     * @uses BillingStatType::setCdf19()
     * @uses BillingStatType::setCdf20()
     * @uses BillingStatType::setCdf21()
     * @uses BillingStatType::setCdf22()
     * @uses BillingStatType::setCdf23()
     * @uses BillingStatType::setCdf24()
     * @uses BillingStatType::setCdf25()
     * @uses BillingStatType::setCdf26()
     * @uses BillingStatType::setCdf27()
     * @uses BillingStatType::setCdf28()
     * @uses BillingStatType::setCdf29()
     * @uses BillingStatType::setCdf30()
     * @uses BillingStatType::setBookingChannel()
     * @uses BillingStatType::setTotalSalesValue()
     * @uses BillingStatType::setCurrentMarkup()
     * @uses BillingStatType::setTotalProfit()
     * @uses BillingStatType::setExpectedCommission()
     * @param string $cdf01
     * @param string $cdf02
     * @param string $cdf03
     * @param string $cdf04
     * @param string $cdf05
     * @param string $cdf06
     * @param string $cdf07
     * @param string $cdf08
     * @param string $cdf09
     * @param string $cdf10
     * @param string $cdf11
     * @param string $cdf12
     * @param string $cdf13
     * @param string $cdf14
     * @param string $cdf15
     * @param string $cdf16
     * @param string $cdf17
     * @param string $cdf18
     * @param string $cdf19
     * @param string $cdf20
     * @param string $cdf21
     * @param string $cdf22
     * @param string $cdf23
     * @param string $cdf24
     * @param string $cdf25
     * @param string $cdf26
     * @param string $cdf27
     * @param string $cdf28
     * @param string $cdf29
     * @param string $cdf30
     * @param string $bookingChannel
     * @param float $totalSalesValue
     * @param float $currentMarkup
     * @param float $totalProfit
     * @param float $expectedCommission
     */
    public function __construct(?string $cdf01 = null, ?string $cdf02 = null, ?string $cdf03 = null, ?string $cdf04 = null, ?string $cdf05 = null, ?string $cdf06 = null, ?string $cdf07 = null, ?string $cdf08 = null, ?string $cdf09 = null, ?string $cdf10 = null, ?string $cdf11 = null, ?string $cdf12 = null, ?string $cdf13 = null, ?string $cdf14 = null, ?string $cdf15 = null, ?string $cdf16 = null, ?string $cdf17 = null, ?string $cdf18 = null, ?string $cdf19 = null, ?string $cdf20 = null, ?string $cdf21 = null, ?string $cdf22 = null, ?string $cdf23 = null, ?string $cdf24 = null, ?string $cdf25 = null, ?string $cdf26 = null, ?string $cdf27 = null, ?string $cdf28 = null, ?string $cdf29 = null, ?string $cdf30 = null, ?string $bookingChannel = null, ?float $totalSalesValue = null, ?float $currentMarkup = null, ?float $totalProfit = null, ?float $expectedCommission = null)
    {
        $this
            ->setCdf01($cdf01)
            ->setCdf02($cdf02)
            ->setCdf03($cdf03)
            ->setCdf04($cdf04)
            ->setCdf05($cdf05)
            ->setCdf06($cdf06)
            ->setCdf07($cdf07)
            ->setCdf08($cdf08)
            ->setCdf09($cdf09)
            ->setCdf10($cdf10)
            ->setCdf11($cdf11)
            ->setCdf12($cdf12)
            ->setCdf13($cdf13)
            ->setCdf14($cdf14)
            ->setCdf15($cdf15)
            ->setCdf16($cdf16)
            ->setCdf17($cdf17)
            ->setCdf18($cdf18)
            ->setCdf19($cdf19)
            ->setCdf20($cdf20)
            ->setCdf21($cdf21)
            ->setCdf22($cdf22)
            ->setCdf23($cdf23)
            ->setCdf24($cdf24)
            ->setCdf25($cdf25)
            ->setCdf26($cdf26)
            ->setCdf27($cdf27)
            ->setCdf28($cdf28)
            ->setCdf29($cdf29)
            ->setCdf30($cdf30)
            ->setBookingChannel($bookingChannel)
            ->setTotalSalesValue($totalSalesValue)
            ->setCurrentMarkup($currentMarkup)
            ->setTotalProfit($totalProfit)
            ->setExpectedCommission($expectedCommission);
    }
    /**
     * Get cdf01 value
     * @return string|null
     */
    public function getCdf01(): ?string
    {
        return $this->cdf01;
    }
    /**
     * Set cdf01 value
     * @param string $cdf01
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf01(?string $cdf01 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf01) && !is_string($cdf01)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf01, true), gettype($cdf01)), __LINE__);
        }
        $this->cdf01 = $cdf01;
        
        return $this;
    }
    /**
     * Get cdf02 value
     * @return string|null
     */
    public function getCdf02(): ?string
    {
        return $this->cdf02;
    }
    /**
     * Set cdf02 value
     * @param string $cdf02
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf02(?string $cdf02 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf02) && !is_string($cdf02)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf02, true), gettype($cdf02)), __LINE__);
        }
        $this->cdf02 = $cdf02;
        
        return $this;
    }
    /**
     * Get cdf03 value
     * @return string|null
     */
    public function getCdf03(): ?string
    {
        return $this->cdf03;
    }
    /**
     * Set cdf03 value
     * @param string $cdf03
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf03(?string $cdf03 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf03) && !is_string($cdf03)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf03, true), gettype($cdf03)), __LINE__);
        }
        $this->cdf03 = $cdf03;
        
        return $this;
    }
    /**
     * Get cdf04 value
     * @return string|null
     */
    public function getCdf04(): ?string
    {
        return $this->cdf04;
    }
    /**
     * Set cdf04 value
     * @param string $cdf04
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf04(?string $cdf04 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf04) && !is_string($cdf04)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf04, true), gettype($cdf04)), __LINE__);
        }
        $this->cdf04 = $cdf04;
        
        return $this;
    }
    /**
     * Get cdf05 value
     * @return string|null
     */
    public function getCdf05(): ?string
    {
        return $this->cdf05;
    }
    /**
     * Set cdf05 value
     * @param string $cdf05
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf05(?string $cdf05 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf05) && !is_string($cdf05)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf05, true), gettype($cdf05)), __LINE__);
        }
        $this->cdf05 = $cdf05;
        
        return $this;
    }
    /**
     * Get cdf06 value
     * @return string|null
     */
    public function getCdf06(): ?string
    {
        return $this->cdf06;
    }
    /**
     * Set cdf06 value
     * @param string $cdf06
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf06(?string $cdf06 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf06) && !is_string($cdf06)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf06, true), gettype($cdf06)), __LINE__);
        }
        $this->cdf06 = $cdf06;
        
        return $this;
    }
    /**
     * Get cdf07 value
     * @return string|null
     */
    public function getCdf07(): ?string
    {
        return $this->cdf07;
    }
    /**
     * Set cdf07 value
     * @param string $cdf07
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf07(?string $cdf07 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf07) && !is_string($cdf07)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf07, true), gettype($cdf07)), __LINE__);
        }
        $this->cdf07 = $cdf07;
        
        return $this;
    }
    /**
     * Get cdf08 value
     * @return string|null
     */
    public function getCdf08(): ?string
    {
        return $this->cdf08;
    }
    /**
     * Set cdf08 value
     * @param string $cdf08
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf08(?string $cdf08 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf08) && !is_string($cdf08)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf08, true), gettype($cdf08)), __LINE__);
        }
        $this->cdf08 = $cdf08;
        
        return $this;
    }
    /**
     * Get cdf09 value
     * @return string|null
     */
    public function getCdf09(): ?string
    {
        return $this->cdf09;
    }
    /**
     * Set cdf09 value
     * @param string $cdf09
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf09(?string $cdf09 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf09) && !is_string($cdf09)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf09, true), gettype($cdf09)), __LINE__);
        }
        $this->cdf09 = $cdf09;
        
        return $this;
    }
    /**
     * Get cdf10 value
     * @return string|null
     */
    public function getCdf10(): ?string
    {
        return $this->cdf10;
    }
    /**
     * Set cdf10 value
     * @param string $cdf10
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf10(?string $cdf10 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf10) && !is_string($cdf10)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf10, true), gettype($cdf10)), __LINE__);
        }
        $this->cdf10 = $cdf10;
        
        return $this;
    }
    /**
     * Get cdf11 value
     * @return string|null
     */
    public function getCdf11(): ?string
    {
        return $this->cdf11;
    }
    /**
     * Set cdf11 value
     * @param string $cdf11
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf11(?string $cdf11 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf11) && !is_string($cdf11)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf11, true), gettype($cdf11)), __LINE__);
        }
        $this->cdf11 = $cdf11;
        
        return $this;
    }
    /**
     * Get cdf12 value
     * @return string|null
     */
    public function getCdf12(): ?string
    {
        return $this->cdf12;
    }
    /**
     * Set cdf12 value
     * @param string $cdf12
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf12(?string $cdf12 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf12) && !is_string($cdf12)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf12, true), gettype($cdf12)), __LINE__);
        }
        $this->cdf12 = $cdf12;
        
        return $this;
    }
    /**
     * Get cdf13 value
     * @return string|null
     */
    public function getCdf13(): ?string
    {
        return $this->cdf13;
    }
    /**
     * Set cdf13 value
     * @param string $cdf13
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf13(?string $cdf13 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf13) && !is_string($cdf13)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf13, true), gettype($cdf13)), __LINE__);
        }
        $this->cdf13 = $cdf13;
        
        return $this;
    }
    /**
     * Get cdf14 value
     * @return string|null
     */
    public function getCdf14(): ?string
    {
        return $this->cdf14;
    }
    /**
     * Set cdf14 value
     * @param string $cdf14
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf14(?string $cdf14 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf14) && !is_string($cdf14)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf14, true), gettype($cdf14)), __LINE__);
        }
        $this->cdf14 = $cdf14;
        
        return $this;
    }
    /**
     * Get cdf15 value
     * @return string|null
     */
    public function getCdf15(): ?string
    {
        return $this->cdf15;
    }
    /**
     * Set cdf15 value
     * @param string $cdf15
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf15(?string $cdf15 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf15) && !is_string($cdf15)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf15, true), gettype($cdf15)), __LINE__);
        }
        $this->cdf15 = $cdf15;
        
        return $this;
    }
    /**
     * Get cdf16 value
     * @return string|null
     */
    public function getCdf16(): ?string
    {
        return $this->cdf16;
    }
    /**
     * Set cdf16 value
     * @param string $cdf16
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf16(?string $cdf16 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf16) && !is_string($cdf16)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf16, true), gettype($cdf16)), __LINE__);
        }
        $this->cdf16 = $cdf16;
        
        return $this;
    }
    /**
     * Get cdf17 value
     * @return string|null
     */
    public function getCdf17(): ?string
    {
        return $this->cdf17;
    }
    /**
     * Set cdf17 value
     * @param string $cdf17
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf17(?string $cdf17 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf17) && !is_string($cdf17)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf17, true), gettype($cdf17)), __LINE__);
        }
        $this->cdf17 = $cdf17;
        
        return $this;
    }
    /**
     * Get cdf18 value
     * @return string|null
     */
    public function getCdf18(): ?string
    {
        return $this->cdf18;
    }
    /**
     * Set cdf18 value
     * @param string $cdf18
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf18(?string $cdf18 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf18) && !is_string($cdf18)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf18, true), gettype($cdf18)), __LINE__);
        }
        $this->cdf18 = $cdf18;
        
        return $this;
    }
    /**
     * Get cdf19 value
     * @return string|null
     */
    public function getCdf19(): ?string
    {
        return $this->cdf19;
    }
    /**
     * Set cdf19 value
     * @param string $cdf19
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf19(?string $cdf19 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf19) && !is_string($cdf19)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf19, true), gettype($cdf19)), __LINE__);
        }
        $this->cdf19 = $cdf19;
        
        return $this;
    }
    /**
     * Get cdf20 value
     * @return string|null
     */
    public function getCdf20(): ?string
    {
        return $this->cdf20;
    }
    /**
     * Set cdf20 value
     * @param string $cdf20
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf20(?string $cdf20 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf20) && !is_string($cdf20)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf20, true), gettype($cdf20)), __LINE__);
        }
        $this->cdf20 = $cdf20;
        
        return $this;
    }
    /**
     * Get cdf21 value
     * @return string|null
     */
    public function getCdf21(): ?string
    {
        return $this->cdf21;
    }
    /**
     * Set cdf21 value
     * @param string $cdf21
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf21(?string $cdf21 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf21) && !is_string($cdf21)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf21, true), gettype($cdf21)), __LINE__);
        }
        $this->cdf21 = $cdf21;
        
        return $this;
    }
    /**
     * Get cdf22 value
     * @return string|null
     */
    public function getCdf22(): ?string
    {
        return $this->cdf22;
    }
    /**
     * Set cdf22 value
     * @param string $cdf22
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf22(?string $cdf22 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf22) && !is_string($cdf22)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf22, true), gettype($cdf22)), __LINE__);
        }
        $this->cdf22 = $cdf22;
        
        return $this;
    }
    /**
     * Get cdf23 value
     * @return string|null
     */
    public function getCdf23(): ?string
    {
        return $this->cdf23;
    }
    /**
     * Set cdf23 value
     * @param string $cdf23
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf23(?string $cdf23 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf23) && !is_string($cdf23)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf23, true), gettype($cdf23)), __LINE__);
        }
        $this->cdf23 = $cdf23;
        
        return $this;
    }
    /**
     * Get cdf24 value
     * @return string|null
     */
    public function getCdf24(): ?string
    {
        return $this->cdf24;
    }
    /**
     * Set cdf24 value
     * @param string $cdf24
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf24(?string $cdf24 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf24) && !is_string($cdf24)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf24, true), gettype($cdf24)), __LINE__);
        }
        $this->cdf24 = $cdf24;
        
        return $this;
    }
    /**
     * Get cdf25 value
     * @return string|null
     */
    public function getCdf25(): ?string
    {
        return $this->cdf25;
    }
    /**
     * Set cdf25 value
     * @param string $cdf25
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf25(?string $cdf25 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf25) && !is_string($cdf25)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf25, true), gettype($cdf25)), __LINE__);
        }
        $this->cdf25 = $cdf25;
        
        return $this;
    }
    /**
     * Get cdf26 value
     * @return string|null
     */
    public function getCdf26(): ?string
    {
        return $this->cdf26;
    }
    /**
     * Set cdf26 value
     * @param string $cdf26
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf26(?string $cdf26 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf26) && !is_string($cdf26)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf26, true), gettype($cdf26)), __LINE__);
        }
        $this->cdf26 = $cdf26;
        
        return $this;
    }
    /**
     * Get cdf27 value
     * @return string|null
     */
    public function getCdf27(): ?string
    {
        return $this->cdf27;
    }
    /**
     * Set cdf27 value
     * @param string $cdf27
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf27(?string $cdf27 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf27) && !is_string($cdf27)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf27, true), gettype($cdf27)), __LINE__);
        }
        $this->cdf27 = $cdf27;
        
        return $this;
    }
    /**
     * Get cdf28 value
     * @return string|null
     */
    public function getCdf28(): ?string
    {
        return $this->cdf28;
    }
    /**
     * Set cdf28 value
     * @param string $cdf28
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf28(?string $cdf28 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf28) && !is_string($cdf28)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf28, true), gettype($cdf28)), __LINE__);
        }
        $this->cdf28 = $cdf28;
        
        return $this;
    }
    /**
     * Get cdf29 value
     * @return string|null
     */
    public function getCdf29(): ?string
    {
        return $this->cdf29;
    }
    /**
     * Set cdf29 value
     * @param string $cdf29
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf29(?string $cdf29 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf29) && !is_string($cdf29)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf29, true), gettype($cdf29)), __LINE__);
        }
        $this->cdf29 = $cdf29;
        
        return $this;
    }
    /**
     * Get cdf30 value
     * @return string|null
     */
    public function getCdf30(): ?string
    {
        return $this->cdf30;
    }
    /**
     * Set cdf30 value
     * @param string $cdf30
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCdf30(?string $cdf30 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdf30) && !is_string($cdf30)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdf30, true), gettype($cdf30)), __LINE__);
        }
        $this->cdf30 = $cdf30;
        
        return $this;
    }
    /**
     * Get bookingChannel value
     * @return string|null
     */
    public function getBookingChannel(): ?string
    {
        return $this->bookingChannel;
    }
    /**
     * Set bookingChannel value
     * @param string $bookingChannel
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setBookingChannel(?string $bookingChannel = null): self
    {
        // validation for constraint: string
        if (!is_null($bookingChannel) && !is_string($bookingChannel)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bookingChannel, true), gettype($bookingChannel)), __LINE__);
        }
        $this->bookingChannel = $bookingChannel;
        
        return $this;
    }
    /**
     * Get totalSalesValue value
     * @return float|null
     */
    public function getTotalSalesValue(): ?float
    {
        return $this->totalSalesValue;
    }
    /**
     * Set totalSalesValue value
     * @param float $totalSalesValue
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setTotalSalesValue(?float $totalSalesValue = null): self
    {
        // validation for constraint: float
        if (!is_null($totalSalesValue) && !(is_float($totalSalesValue) || is_numeric($totalSalesValue))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalSalesValue, true), gettype($totalSalesValue)), __LINE__);
        }
        $this->totalSalesValue = $totalSalesValue;
        
        return $this;
    }
    /**
     * Get currentMarkup value
     * @return float|null
     */
    public function getCurrentMarkup(): ?float
    {
        return $this->currentMarkup;
    }
    /**
     * Set currentMarkup value
     * @param float $currentMarkup
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setCurrentMarkup(?float $currentMarkup = null): self
    {
        // validation for constraint: float
        if (!is_null($currentMarkup) && !(is_float($currentMarkup) || is_numeric($currentMarkup))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($currentMarkup, true), gettype($currentMarkup)), __LINE__);
        }
        $this->currentMarkup = $currentMarkup;
        
        return $this;
    }
    /**
     * Get totalProfit value
     * @return float|null
     */
    public function getTotalProfit(): ?float
    {
        return $this->totalProfit;
    }
    /**
     * Set totalProfit value
     * @param float $totalProfit
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setTotalProfit(?float $totalProfit = null): self
    {
        // validation for constraint: float
        if (!is_null($totalProfit) && !(is_float($totalProfit) || is_numeric($totalProfit))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($totalProfit, true), gettype($totalProfit)), __LINE__);
        }
        $this->totalProfit = $totalProfit;
        
        return $this;
    }
    /**
     * Get expectedCommission value
     * @return float|null
     */
    public function getExpectedCommission(): ?float
    {
        return $this->expectedCommission;
    }
    /**
     * Set expectedCommission value
     * @param float $expectedCommission
     * @return \Pggns\MidocoApi\Orderlists\StructType\BillingStatType
     */
    public function setExpectedCommission(?float $expectedCommission = null): self
    {
        // validation for constraint: float
        if (!is_null($expectedCommission) && !(is_float($expectedCommission) || is_numeric($expectedCommission))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($expectedCommission, true), gettype($expectedCommission)), __LINE__);
        }
        $this->expectedCommission = $expectedCommission;
        
        return $this;
    }
}
