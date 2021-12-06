<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoBillingDataListType StructType
 * @subpackage Structs
 */
class MidocoBillingDataListType extends AbstractStructBase
{
    /**
     * The customerId
     * @var int|null
     */
    protected ?int $customerId = null;
    /**
     * The debitorNo
     * @var string|null
     */
    protected ?string $debitorNo = null;
    /**
     * The invoiceNo
     * @var int|null
     */
    protected ?int $invoiceNo = null;
    /**
     * The orderNo
     * @var int|null
     */
    protected ?int $orderNo = null;
    /**
     * The receiptDate
     * @var string|null
     */
    protected ?string $receiptDate = null;
    /**
     * The passenger
     * @var string|null
     */
    protected ?string $passenger = null;
    /**
     * The destination
     * @var string|null
     */
    protected ?string $destination = null;
    /**
     * The supplierId
     * @var string|null
     */
    protected ?string $supplierId = null;
    /**
     * The routing
     * @var string|null
     */
    protected ?string $routing = null;
    /**
     * The itemType
     * @var string|null
     */
    protected ?string $itemType = null;
    /**
     * The description
     * @var string|null
     */
    protected ?string $description = null;
    /**
     * The referenceNo
     * @var string|null
     */
    protected ?string $referenceNo = null;
    /**
     * The departureDate
     * @var string|null
     */
    protected ?string $departureDate = null;
    /**
     * The returnDate
     * @var string|null
     */
    protected ?string $returnDate = null;
    /**
     * The netAmount
     * @var float|null
     */
    protected ?float $netAmount = null;
    /**
     * The vatAmount
     * @var float|null
     */
    protected ?float $vatAmount = null;
    /**
     * The payableAmount
     * @var float|null
     */
    protected ?float $payableAmount = null;
    /**
     * The cdfField1
     * @var string|null
     */
    protected ?string $cdfField1 = null;
    /**
     * The cdfField2
     * @var string|null
     */
    protected ?string $cdfField2 = null;
    /**
     * The cdfField3
     * @var string|null
     */
    protected ?string $cdfField3 = null;
    /**
     * The cdfField4
     * @var string|null
     */
    protected ?string $cdfField4 = null;
    /**
     * The cdfField5
     * @var string|null
     */
    protected ?string $cdfField5 = null;
    /**
     * The cdfField6
     * @var string|null
     */
    protected ?string $cdfField6 = null;
    /**
     * The cdfField7
     * @var string|null
     */
    protected ?string $cdfField7 = null;
    /**
     * The cdfField8
     * @var string|null
     */
    protected ?string $cdfField8 = null;
    /**
     * The cdfField9
     * @var string|null
     */
    protected ?string $cdfField9 = null;
    /**
     * The cdfField10
     * @var string|null
     */
    protected ?string $cdfField10 = null;
    /**
     * The cdfField11
     * @var string|null
     */
    protected ?string $cdfField11 = null;
    /**
     * The cdfField12
     * @var string|null
     */
    protected ?string $cdfField12 = null;
    /**
     * The cdfField13
     * @var string|null
     */
    protected ?string $cdfField13 = null;
    /**
     * The cdfField14
     * @var string|null
     */
    protected ?string $cdfField14 = null;
    /**
     * The cdfField15
     * @var string|null
     */
    protected ?string $cdfField15 = null;
    /**
     * The cdfField16
     * @var string|null
     */
    protected ?string $cdfField16 = null;
    /**
     * The cdfField17
     * @var string|null
     */
    protected ?string $cdfField17 = null;
    /**
     * The cdfField18
     * @var string|null
     */
    protected ?string $cdfField18 = null;
    /**
     * The cdfField19
     * @var string|null
     */
    protected ?string $cdfField19 = null;
    /**
     * The cdfField20
     * @var string|null
     */
    protected ?string $cdfField20 = null;
    /**
     * The cdfField21
     * @var string|null
     */
    protected ?string $cdfField21 = null;
    /**
     * The cdfField22
     * @var string|null
     */
    protected ?string $cdfField22 = null;
    /**
     * The cdfField23
     * @var string|null
     */
    protected ?string $cdfField23 = null;
    /**
     * The cdfField24
     * @var string|null
     */
    protected ?string $cdfField24 = null;
    /**
     * The cdfField25
     * @var string|null
     */
    protected ?string $cdfField25 = null;
    /**
     * The cdfField26
     * @var string|null
     */
    protected ?string $cdfField26 = null;
    /**
     * The cdfField27
     * @var string|null
     */
    protected ?string $cdfField27 = null;
    /**
     * The cdfField28
     * @var string|null
     */
    protected ?string $cdfField28 = null;
    /**
     * The cdfField29
     * @var string|null
     */
    protected ?string $cdfField29 = null;
    /**
     * The cdfField30
     * @var string|null
     */
    protected ?string $cdfField30 = null;
    /**
     * The cdfField31
     * @var string|null
     */
    protected ?string $cdfField31 = null;
    /**
     * The cdfField32
     * @var string|null
     */
    protected ?string $cdfField32 = null;
    /**
     * The cdfField33
     * @var string|null
     */
    protected ?string $cdfField33 = null;
    /**
     * The cdfField34
     * @var string|null
     */
    protected ?string $cdfField34 = null;
    /**
     * The cdfField35
     * @var string|null
     */
    protected ?string $cdfField35 = null;
    /**
     * The cdfField36
     * @var string|null
     */
    protected ?string $cdfField36 = null;
    /**
     * The cdfField37
     * @var string|null
     */
    protected ?string $cdfField37 = null;
    /**
     * The cdfField38
     * @var string|null
     */
    protected ?string $cdfField38 = null;
    /**
     * The cdfField39
     * @var string|null
     */
    protected ?string $cdfField39 = null;
    /**
     * The cdfField40
     * @var string|null
     */
    protected ?string $cdfField40 = null;
    /**
     * The cdfField41
     * @var string|null
     */
    protected ?string $cdfField41 = null;
    /**
     * The cdfField42
     * @var string|null
     */
    protected ?string $cdfField42 = null;
    /**
     * The cdfField43
     * @var string|null
     */
    protected ?string $cdfField43 = null;
    /**
     * The cdfField44
     * @var string|null
     */
    protected ?string $cdfField44 = null;
    /**
     * The cdfField45
     * @var string|null
     */
    protected ?string $cdfField45 = null;
    /**
     * The cdfField46
     * @var string|null
     */
    protected ?string $cdfField46 = null;
    /**
     * The cdfField47
     * @var string|null
     */
    protected ?string $cdfField47 = null;
    /**
     * The cdfField48
     * @var string|null
     */
    protected ?string $cdfField48 = null;
    /**
     * The cdfField49
     * @var string|null
     */
    protected ?string $cdfField49 = null;
    /**
     * The cdfField50
     * @var string|null
     */
    protected ?string $cdfField50 = null;
    /**
     * The cdfField51
     * @var string|null
     */
    protected ?string $cdfField51 = null;
    /**
     * The cdfField52
     * @var string|null
     */
    protected ?string $cdfField52 = null;
    /**
     * The cdfField53
     * @var string|null
     */
    protected ?string $cdfField53 = null;
    /**
     * The cdfField54
     * @var string|null
     */
    protected ?string $cdfField54 = null;
    /**
     * The cdfField55
     * @var string|null
     */
    protected ?string $cdfField55 = null;
    /**
     * The cdfField56
     * @var string|null
     */
    protected ?string $cdfField56 = null;
    /**
     * The cdfField57
     * @var string|null
     */
    protected ?string $cdfField57 = null;
    /**
     * The cdfField58
     * @var string|null
     */
    protected ?string $cdfField58 = null;
    /**
     * The cdfField59
     * @var string|null
     */
    protected ?string $cdfField59 = null;
    /**
     * The cdfField60
     * @var string|null
     */
    protected ?string $cdfField60 = null;
    /**
     * The cdfField61
     * @var string|null
     */
    protected ?string $cdfField61 = null;
    /**
     * The cdfField62
     * @var string|null
     */
    protected ?string $cdfField62 = null;
    /**
     * The cdfField63
     * @var string|null
     */
    protected ?string $cdfField63 = null;
    /**
     * The cdfField64
     * @var string|null
     */
    protected ?string $cdfField64 = null;
    /**
     * The cdfField65
     * @var string|null
     */
    protected ?string $cdfField65 = null;
    /**
     * The cdfField66
     * @var string|null
     */
    protected ?string $cdfField66 = null;
    /**
     * The cdfField67
     * @var string|null
     */
    protected ?string $cdfField67 = null;
    /**
     * The cdfField68
     * @var string|null
     */
    protected ?string $cdfField68 = null;
    /**
     * The cdfField69
     * @var string|null
     */
    protected ?string $cdfField69 = null;
    /**
     * The cdfField70
     * @var string|null
     */
    protected ?string $cdfField70 = null;
    /**
     * The cdfField71
     * @var string|null
     */
    protected ?string $cdfField71 = null;
    /**
     * The cdfField72
     * @var string|null
     */
    protected ?string $cdfField72 = null;
    /**
     * The cdfField73
     * @var string|null
     */
    protected ?string $cdfField73 = null;
    /**
     * The cdfField74
     * @var string|null
     */
    protected ?string $cdfField74 = null;
    /**
     * The cdfField75
     * @var string|null
     */
    protected ?string $cdfField75 = null;
    /**
     * The cdfField76
     * @var string|null
     */
    protected ?string $cdfField76 = null;
    /**
     * The cdfField77
     * @var string|null
     */
    protected ?string $cdfField77 = null;
    /**
     * The cdfField78
     * @var string|null
     */
    protected ?string $cdfField78 = null;
    /**
     * The cdfField79
     * @var string|null
     */
    protected ?string $cdfField79 = null;
    /**
     * The cdfField80
     * @var string|null
     */
    protected ?string $cdfField80 = null;
    /**
     * The cdfField81
     * @var string|null
     */
    protected ?string $cdfField81 = null;
    /**
     * The cdfField82
     * @var string|null
     */
    protected ?string $cdfField82 = null;
    /**
     * The cdfField83
     * @var string|null
     */
    protected ?string $cdfField83 = null;
    /**
     * The cdfField84
     * @var string|null
     */
    protected ?string $cdfField84 = null;
    /**
     * The cdfField85
     * @var string|null
     */
    protected ?string $cdfField85 = null;
    /**
     * The cdfField86
     * @var string|null
     */
    protected ?string $cdfField86 = null;
    /**
     * The cdfField87
     * @var string|null
     */
    protected ?string $cdfField87 = null;
    /**
     * The cdfField88
     * @var string|null
     */
    protected ?string $cdfField88 = null;
    /**
     * The cdfField89
     * @var string|null
     */
    protected ?string $cdfField89 = null;
    /**
     * The cdfField90
     * @var string|null
     */
    protected ?string $cdfField90 = null;
    /**
     * The cdfField91
     * @var string|null
     */
    protected ?string $cdfField91 = null;
    /**
     * The cdfField92
     * @var string|null
     */
    protected ?string $cdfField92 = null;
    /**
     * The cdfField93
     * @var string|null
     */
    protected ?string $cdfField93 = null;
    /**
     * The cdfField94
     * @var string|null
     */
    protected ?string $cdfField94 = null;
    /**
     * The cdfField95
     * @var string|null
     */
    protected ?string $cdfField95 = null;
    /**
     * The cdfField96
     * @var string|null
     */
    protected ?string $cdfField96 = null;
    /**
     * The cdfField97
     * @var string|null
     */
    protected ?string $cdfField97 = null;
    /**
     * The cdfField98
     * @var string|null
     */
    protected ?string $cdfField98 = null;
    /**
     * The cdfField99
     * @var string|null
     */
    protected ?string $cdfField99 = null;
    /**
     * The cdfField100
     * @var string|null
     */
    protected ?string $cdfField100 = null;
    /**
     * The cdfField101
     * @var string|null
     */
    protected ?string $cdfField101 = null;
    /**
     * The cdfField102
     * @var string|null
     */
    protected ?string $cdfField102 = null;
    /**
     * The cdfField103
     * @var string|null
     */
    protected ?string $cdfField103 = null;
    /**
     * The cdfField104
     * @var string|null
     */
    protected ?string $cdfField104 = null;
    /**
     * The cdfField105
     * @var string|null
     */
    protected ?string $cdfField105 = null;
    /**
     * The cdfField106
     * @var string|null
     */
    protected ?string $cdfField106 = null;
    /**
     * The cdfField107
     * @var string|null
     */
    protected ?string $cdfField107 = null;
    /**
     * The cdfField108
     * @var string|null
     */
    protected ?string $cdfField108 = null;
    /**
     * The cdfField109
     * @var string|null
     */
    protected ?string $cdfField109 = null;
    /**
     * The cdfField110
     * @var string|null
     */
    protected ?string $cdfField110 = null;
    /**
     * The cdfField111
     * @var string|null
     */
    protected ?string $cdfField111 = null;
    /**
     * The cdfField112
     * @var string|null
     */
    protected ?string $cdfField112 = null;
    /**
     * The cdfField113
     * @var string|null
     */
    protected ?string $cdfField113 = null;
    /**
     * The cdfField114
     * @var string|null
     */
    protected ?string $cdfField114 = null;
    /**
     * The cdfField115
     * @var string|null
     */
    protected ?string $cdfField115 = null;
    /**
     * The cdfField116
     * @var string|null
     */
    protected ?string $cdfField116 = null;
    /**
     * The cdfField117
     * @var string|null
     */
    protected ?string $cdfField117 = null;
    /**
     * The cdfField118
     * @var string|null
     */
    protected ?string $cdfField118 = null;
    /**
     * The cdfField119
     * @var string|null
     */
    protected ?string $cdfField119 = null;
    /**
     * The cdfField120
     * @var string|null
     */
    protected ?string $cdfField120 = null;
    /**
     * The cdfField121
     * @var string|null
     */
    protected ?string $cdfField121 = null;
    /**
     * The cdfField122
     * @var string|null
     */
    protected ?string $cdfField122 = null;
    /**
     * The cdfField123
     * @var string|null
     */
    protected ?string $cdfField123 = null;
    /**
     * The cdfField124
     * @var string|null
     */
    protected ?string $cdfField124 = null;
    /**
     * The cdfField125
     * @var string|null
     */
    protected ?string $cdfField125 = null;
    /**
     * The cdfField126
     * @var string|null
     */
    protected ?string $cdfField126 = null;
    /**
     * The cdfField127
     * @var string|null
     */
    protected ?string $cdfField127 = null;
    /**
     * The cdfField128
     * @var string|null
     */
    protected ?string $cdfField128 = null;
    /**
     * The cdfField129
     * @var string|null
     */
    protected ?string $cdfField129 = null;
    /**
     * The cdfField130
     * @var string|null
     */
    protected ?string $cdfField130 = null;
    /**
     * The cdfField131
     * @var string|null
     */
    protected ?string $cdfField131 = null;
    /**
     * The cdfField132
     * @var string|null
     */
    protected ?string $cdfField132 = null;
    /**
     * The cdfField133
     * @var string|null
     */
    protected ?string $cdfField133 = null;
    /**
     * The cdfField134
     * @var string|null
     */
    protected ?string $cdfField134 = null;
    /**
     * The cdfField135
     * @var string|null
     */
    protected ?string $cdfField135 = null;
    /**
     * The cdfField136
     * @var string|null
     */
    protected ?string $cdfField136 = null;
    /**
     * The cdfField137
     * @var string|null
     */
    protected ?string $cdfField137 = null;
    /**
     * The cdfField138
     * @var string|null
     */
    protected ?string $cdfField138 = null;
    /**
     * The cdfField139
     * @var string|null
     */
    protected ?string $cdfField139 = null;
    /**
     * The cdfField140
     * @var string|null
     */
    protected ?string $cdfField140 = null;
    /**
     * The cdfField141
     * @var string|null
     */
    protected ?string $cdfField141 = null;
    /**
     * The cdfField142
     * @var string|null
     */
    protected ?string $cdfField142 = null;
    /**
     * The cdfField143
     * @var string|null
     */
    protected ?string $cdfField143 = null;
    /**
     * The cdfField144
     * @var string|null
     */
    protected ?string $cdfField144 = null;
    /**
     * The cdfField145
     * @var string|null
     */
    protected ?string $cdfField145 = null;
    /**
     * The cdfField146
     * @var string|null
     */
    protected ?string $cdfField146 = null;
    /**
     * The cdfField147
     * @var string|null
     */
    protected ?string $cdfField147 = null;
    /**
     * The cdfField148
     * @var string|null
     */
    protected ?string $cdfField148 = null;
    /**
     * The cdfField149
     * @var string|null
     */
    protected ?string $cdfField149 = null;
    /**
     * The cdfField150
     * @var string|null
     */
    protected ?string $cdfField150 = null;
    /**
     * Constructor method for MidocoBillingDataListType
     * @uses MidocoBillingDataListType::setCustomerId()
     * @uses MidocoBillingDataListType::setDebitorNo()
     * @uses MidocoBillingDataListType::setInvoiceNo()
     * @uses MidocoBillingDataListType::setOrderNo()
     * @uses MidocoBillingDataListType::setReceiptDate()
     * @uses MidocoBillingDataListType::setPassenger()
     * @uses MidocoBillingDataListType::setDestination()
     * @uses MidocoBillingDataListType::setSupplierId()
     * @uses MidocoBillingDataListType::setRouting()
     * @uses MidocoBillingDataListType::setItemType()
     * @uses MidocoBillingDataListType::setDescription()
     * @uses MidocoBillingDataListType::setReferenceNo()
     * @uses MidocoBillingDataListType::setDepartureDate()
     * @uses MidocoBillingDataListType::setReturnDate()
     * @uses MidocoBillingDataListType::setNetAmount()
     * @uses MidocoBillingDataListType::setVatAmount()
     * @uses MidocoBillingDataListType::setPayableAmount()
     * @uses MidocoBillingDataListType::setCdfField1()
     * @uses MidocoBillingDataListType::setCdfField2()
     * @uses MidocoBillingDataListType::setCdfField3()
     * @uses MidocoBillingDataListType::setCdfField4()
     * @uses MidocoBillingDataListType::setCdfField5()
     * @uses MidocoBillingDataListType::setCdfField6()
     * @uses MidocoBillingDataListType::setCdfField7()
     * @uses MidocoBillingDataListType::setCdfField8()
     * @uses MidocoBillingDataListType::setCdfField9()
     * @uses MidocoBillingDataListType::setCdfField10()
     * @uses MidocoBillingDataListType::setCdfField11()
     * @uses MidocoBillingDataListType::setCdfField12()
     * @uses MidocoBillingDataListType::setCdfField13()
     * @uses MidocoBillingDataListType::setCdfField14()
     * @uses MidocoBillingDataListType::setCdfField15()
     * @uses MidocoBillingDataListType::setCdfField16()
     * @uses MidocoBillingDataListType::setCdfField17()
     * @uses MidocoBillingDataListType::setCdfField18()
     * @uses MidocoBillingDataListType::setCdfField19()
     * @uses MidocoBillingDataListType::setCdfField20()
     * @uses MidocoBillingDataListType::setCdfField21()
     * @uses MidocoBillingDataListType::setCdfField22()
     * @uses MidocoBillingDataListType::setCdfField23()
     * @uses MidocoBillingDataListType::setCdfField24()
     * @uses MidocoBillingDataListType::setCdfField25()
     * @uses MidocoBillingDataListType::setCdfField26()
     * @uses MidocoBillingDataListType::setCdfField27()
     * @uses MidocoBillingDataListType::setCdfField28()
     * @uses MidocoBillingDataListType::setCdfField29()
     * @uses MidocoBillingDataListType::setCdfField30()
     * @uses MidocoBillingDataListType::setCdfField31()
     * @uses MidocoBillingDataListType::setCdfField32()
     * @uses MidocoBillingDataListType::setCdfField33()
     * @uses MidocoBillingDataListType::setCdfField34()
     * @uses MidocoBillingDataListType::setCdfField35()
     * @uses MidocoBillingDataListType::setCdfField36()
     * @uses MidocoBillingDataListType::setCdfField37()
     * @uses MidocoBillingDataListType::setCdfField38()
     * @uses MidocoBillingDataListType::setCdfField39()
     * @uses MidocoBillingDataListType::setCdfField40()
     * @uses MidocoBillingDataListType::setCdfField41()
     * @uses MidocoBillingDataListType::setCdfField42()
     * @uses MidocoBillingDataListType::setCdfField43()
     * @uses MidocoBillingDataListType::setCdfField44()
     * @uses MidocoBillingDataListType::setCdfField45()
     * @uses MidocoBillingDataListType::setCdfField46()
     * @uses MidocoBillingDataListType::setCdfField47()
     * @uses MidocoBillingDataListType::setCdfField48()
     * @uses MidocoBillingDataListType::setCdfField49()
     * @uses MidocoBillingDataListType::setCdfField50()
     * @uses MidocoBillingDataListType::setCdfField51()
     * @uses MidocoBillingDataListType::setCdfField52()
     * @uses MidocoBillingDataListType::setCdfField53()
     * @uses MidocoBillingDataListType::setCdfField54()
     * @uses MidocoBillingDataListType::setCdfField55()
     * @uses MidocoBillingDataListType::setCdfField56()
     * @uses MidocoBillingDataListType::setCdfField57()
     * @uses MidocoBillingDataListType::setCdfField58()
     * @uses MidocoBillingDataListType::setCdfField59()
     * @uses MidocoBillingDataListType::setCdfField60()
     * @uses MidocoBillingDataListType::setCdfField61()
     * @uses MidocoBillingDataListType::setCdfField62()
     * @uses MidocoBillingDataListType::setCdfField63()
     * @uses MidocoBillingDataListType::setCdfField64()
     * @uses MidocoBillingDataListType::setCdfField65()
     * @uses MidocoBillingDataListType::setCdfField66()
     * @uses MidocoBillingDataListType::setCdfField67()
     * @uses MidocoBillingDataListType::setCdfField68()
     * @uses MidocoBillingDataListType::setCdfField69()
     * @uses MidocoBillingDataListType::setCdfField70()
     * @uses MidocoBillingDataListType::setCdfField71()
     * @uses MidocoBillingDataListType::setCdfField72()
     * @uses MidocoBillingDataListType::setCdfField73()
     * @uses MidocoBillingDataListType::setCdfField74()
     * @uses MidocoBillingDataListType::setCdfField75()
     * @uses MidocoBillingDataListType::setCdfField76()
     * @uses MidocoBillingDataListType::setCdfField77()
     * @uses MidocoBillingDataListType::setCdfField78()
     * @uses MidocoBillingDataListType::setCdfField79()
     * @uses MidocoBillingDataListType::setCdfField80()
     * @uses MidocoBillingDataListType::setCdfField81()
     * @uses MidocoBillingDataListType::setCdfField82()
     * @uses MidocoBillingDataListType::setCdfField83()
     * @uses MidocoBillingDataListType::setCdfField84()
     * @uses MidocoBillingDataListType::setCdfField85()
     * @uses MidocoBillingDataListType::setCdfField86()
     * @uses MidocoBillingDataListType::setCdfField87()
     * @uses MidocoBillingDataListType::setCdfField88()
     * @uses MidocoBillingDataListType::setCdfField89()
     * @uses MidocoBillingDataListType::setCdfField90()
     * @uses MidocoBillingDataListType::setCdfField91()
     * @uses MidocoBillingDataListType::setCdfField92()
     * @uses MidocoBillingDataListType::setCdfField93()
     * @uses MidocoBillingDataListType::setCdfField94()
     * @uses MidocoBillingDataListType::setCdfField95()
     * @uses MidocoBillingDataListType::setCdfField96()
     * @uses MidocoBillingDataListType::setCdfField97()
     * @uses MidocoBillingDataListType::setCdfField98()
     * @uses MidocoBillingDataListType::setCdfField99()
     * @uses MidocoBillingDataListType::setCdfField100()
     * @uses MidocoBillingDataListType::setCdfField101()
     * @uses MidocoBillingDataListType::setCdfField102()
     * @uses MidocoBillingDataListType::setCdfField103()
     * @uses MidocoBillingDataListType::setCdfField104()
     * @uses MidocoBillingDataListType::setCdfField105()
     * @uses MidocoBillingDataListType::setCdfField106()
     * @uses MidocoBillingDataListType::setCdfField107()
     * @uses MidocoBillingDataListType::setCdfField108()
     * @uses MidocoBillingDataListType::setCdfField109()
     * @uses MidocoBillingDataListType::setCdfField110()
     * @uses MidocoBillingDataListType::setCdfField111()
     * @uses MidocoBillingDataListType::setCdfField112()
     * @uses MidocoBillingDataListType::setCdfField113()
     * @uses MidocoBillingDataListType::setCdfField114()
     * @uses MidocoBillingDataListType::setCdfField115()
     * @uses MidocoBillingDataListType::setCdfField116()
     * @uses MidocoBillingDataListType::setCdfField117()
     * @uses MidocoBillingDataListType::setCdfField118()
     * @uses MidocoBillingDataListType::setCdfField119()
     * @uses MidocoBillingDataListType::setCdfField120()
     * @uses MidocoBillingDataListType::setCdfField121()
     * @uses MidocoBillingDataListType::setCdfField122()
     * @uses MidocoBillingDataListType::setCdfField123()
     * @uses MidocoBillingDataListType::setCdfField124()
     * @uses MidocoBillingDataListType::setCdfField125()
     * @uses MidocoBillingDataListType::setCdfField126()
     * @uses MidocoBillingDataListType::setCdfField127()
     * @uses MidocoBillingDataListType::setCdfField128()
     * @uses MidocoBillingDataListType::setCdfField129()
     * @uses MidocoBillingDataListType::setCdfField130()
     * @uses MidocoBillingDataListType::setCdfField131()
     * @uses MidocoBillingDataListType::setCdfField132()
     * @uses MidocoBillingDataListType::setCdfField133()
     * @uses MidocoBillingDataListType::setCdfField134()
     * @uses MidocoBillingDataListType::setCdfField135()
     * @uses MidocoBillingDataListType::setCdfField136()
     * @uses MidocoBillingDataListType::setCdfField137()
     * @uses MidocoBillingDataListType::setCdfField138()
     * @uses MidocoBillingDataListType::setCdfField139()
     * @uses MidocoBillingDataListType::setCdfField140()
     * @uses MidocoBillingDataListType::setCdfField141()
     * @uses MidocoBillingDataListType::setCdfField142()
     * @uses MidocoBillingDataListType::setCdfField143()
     * @uses MidocoBillingDataListType::setCdfField144()
     * @uses MidocoBillingDataListType::setCdfField145()
     * @uses MidocoBillingDataListType::setCdfField146()
     * @uses MidocoBillingDataListType::setCdfField147()
     * @uses MidocoBillingDataListType::setCdfField148()
     * @uses MidocoBillingDataListType::setCdfField149()
     * @uses MidocoBillingDataListType::setCdfField150()
     * @param int $customerId
     * @param string $debitorNo
     * @param int $invoiceNo
     * @param int $orderNo
     * @param string $receiptDate
     * @param string $passenger
     * @param string $destination
     * @param string $supplierId
     * @param string $routing
     * @param string $itemType
     * @param string $description
     * @param string $referenceNo
     * @param string $departureDate
     * @param string $returnDate
     * @param float $netAmount
     * @param float $vatAmount
     * @param float $payableAmount
     * @param string $cdfField1
     * @param string $cdfField2
     * @param string $cdfField3
     * @param string $cdfField4
     * @param string $cdfField5
     * @param string $cdfField6
     * @param string $cdfField7
     * @param string $cdfField8
     * @param string $cdfField9
     * @param string $cdfField10
     * @param string $cdfField11
     * @param string $cdfField12
     * @param string $cdfField13
     * @param string $cdfField14
     * @param string $cdfField15
     * @param string $cdfField16
     * @param string $cdfField17
     * @param string $cdfField18
     * @param string $cdfField19
     * @param string $cdfField20
     * @param string $cdfField21
     * @param string $cdfField22
     * @param string $cdfField23
     * @param string $cdfField24
     * @param string $cdfField25
     * @param string $cdfField26
     * @param string $cdfField27
     * @param string $cdfField28
     * @param string $cdfField29
     * @param string $cdfField30
     * @param string $cdfField31
     * @param string $cdfField32
     * @param string $cdfField33
     * @param string $cdfField34
     * @param string $cdfField35
     * @param string $cdfField36
     * @param string $cdfField37
     * @param string $cdfField38
     * @param string $cdfField39
     * @param string $cdfField40
     * @param string $cdfField41
     * @param string $cdfField42
     * @param string $cdfField43
     * @param string $cdfField44
     * @param string $cdfField45
     * @param string $cdfField46
     * @param string $cdfField47
     * @param string $cdfField48
     * @param string $cdfField49
     * @param string $cdfField50
     * @param string $cdfField51
     * @param string $cdfField52
     * @param string $cdfField53
     * @param string $cdfField54
     * @param string $cdfField55
     * @param string $cdfField56
     * @param string $cdfField57
     * @param string $cdfField58
     * @param string $cdfField59
     * @param string $cdfField60
     * @param string $cdfField61
     * @param string $cdfField62
     * @param string $cdfField63
     * @param string $cdfField64
     * @param string $cdfField65
     * @param string $cdfField66
     * @param string $cdfField67
     * @param string $cdfField68
     * @param string $cdfField69
     * @param string $cdfField70
     * @param string $cdfField71
     * @param string $cdfField72
     * @param string $cdfField73
     * @param string $cdfField74
     * @param string $cdfField75
     * @param string $cdfField76
     * @param string $cdfField77
     * @param string $cdfField78
     * @param string $cdfField79
     * @param string $cdfField80
     * @param string $cdfField81
     * @param string $cdfField82
     * @param string $cdfField83
     * @param string $cdfField84
     * @param string $cdfField85
     * @param string $cdfField86
     * @param string $cdfField87
     * @param string $cdfField88
     * @param string $cdfField89
     * @param string $cdfField90
     * @param string $cdfField91
     * @param string $cdfField92
     * @param string $cdfField93
     * @param string $cdfField94
     * @param string $cdfField95
     * @param string $cdfField96
     * @param string $cdfField97
     * @param string $cdfField98
     * @param string $cdfField99
     * @param string $cdfField100
     * @param string $cdfField101
     * @param string $cdfField102
     * @param string $cdfField103
     * @param string $cdfField104
     * @param string $cdfField105
     * @param string $cdfField106
     * @param string $cdfField107
     * @param string $cdfField108
     * @param string $cdfField109
     * @param string $cdfField110
     * @param string $cdfField111
     * @param string $cdfField112
     * @param string $cdfField113
     * @param string $cdfField114
     * @param string $cdfField115
     * @param string $cdfField116
     * @param string $cdfField117
     * @param string $cdfField118
     * @param string $cdfField119
     * @param string $cdfField120
     * @param string $cdfField121
     * @param string $cdfField122
     * @param string $cdfField123
     * @param string $cdfField124
     * @param string $cdfField125
     * @param string $cdfField126
     * @param string $cdfField127
     * @param string $cdfField128
     * @param string $cdfField129
     * @param string $cdfField130
     * @param string $cdfField131
     * @param string $cdfField132
     * @param string $cdfField133
     * @param string $cdfField134
     * @param string $cdfField135
     * @param string $cdfField136
     * @param string $cdfField137
     * @param string $cdfField138
     * @param string $cdfField139
     * @param string $cdfField140
     * @param string $cdfField141
     * @param string $cdfField142
     * @param string $cdfField143
     * @param string $cdfField144
     * @param string $cdfField145
     * @param string $cdfField146
     * @param string $cdfField147
     * @param string $cdfField148
     * @param string $cdfField149
     * @param string $cdfField150
     */
    public function __construct(?int $customerId = null, ?string $debitorNo = null, ?int $invoiceNo = null, ?int $orderNo = null, ?string $receiptDate = null, ?string $passenger = null, ?string $destination = null, ?string $supplierId = null, ?string $routing = null, ?string $itemType = null, ?string $description = null, ?string $referenceNo = null, ?string $departureDate = null, ?string $returnDate = null, ?float $netAmount = null, ?float $vatAmount = null, ?float $payableAmount = null, ?string $cdfField1 = null, ?string $cdfField2 = null, ?string $cdfField3 = null, ?string $cdfField4 = null, ?string $cdfField5 = null, ?string $cdfField6 = null, ?string $cdfField7 = null, ?string $cdfField8 = null, ?string $cdfField9 = null, ?string $cdfField10 = null, ?string $cdfField11 = null, ?string $cdfField12 = null, ?string $cdfField13 = null, ?string $cdfField14 = null, ?string $cdfField15 = null, ?string $cdfField16 = null, ?string $cdfField17 = null, ?string $cdfField18 = null, ?string $cdfField19 = null, ?string $cdfField20 = null, ?string $cdfField21 = null, ?string $cdfField22 = null, ?string $cdfField23 = null, ?string $cdfField24 = null, ?string $cdfField25 = null, ?string $cdfField26 = null, ?string $cdfField27 = null, ?string $cdfField28 = null, ?string $cdfField29 = null, ?string $cdfField30 = null, ?string $cdfField31 = null, ?string $cdfField32 = null, ?string $cdfField33 = null, ?string $cdfField34 = null, ?string $cdfField35 = null, ?string $cdfField36 = null, ?string $cdfField37 = null, ?string $cdfField38 = null, ?string $cdfField39 = null, ?string $cdfField40 = null, ?string $cdfField41 = null, ?string $cdfField42 = null, ?string $cdfField43 = null, ?string $cdfField44 = null, ?string $cdfField45 = null, ?string $cdfField46 = null, ?string $cdfField47 = null, ?string $cdfField48 = null, ?string $cdfField49 = null, ?string $cdfField50 = null, ?string $cdfField51 = null, ?string $cdfField52 = null, ?string $cdfField53 = null, ?string $cdfField54 = null, ?string $cdfField55 = null, ?string $cdfField56 = null, ?string $cdfField57 = null, ?string $cdfField58 = null, ?string $cdfField59 = null, ?string $cdfField60 = null, ?string $cdfField61 = null, ?string $cdfField62 = null, ?string $cdfField63 = null, ?string $cdfField64 = null, ?string $cdfField65 = null, ?string $cdfField66 = null, ?string $cdfField67 = null, ?string $cdfField68 = null, ?string $cdfField69 = null, ?string $cdfField70 = null, ?string $cdfField71 = null, ?string $cdfField72 = null, ?string $cdfField73 = null, ?string $cdfField74 = null, ?string $cdfField75 = null, ?string $cdfField76 = null, ?string $cdfField77 = null, ?string $cdfField78 = null, ?string $cdfField79 = null, ?string $cdfField80 = null, ?string $cdfField81 = null, ?string $cdfField82 = null, ?string $cdfField83 = null, ?string $cdfField84 = null, ?string $cdfField85 = null, ?string $cdfField86 = null, ?string $cdfField87 = null, ?string $cdfField88 = null, ?string $cdfField89 = null, ?string $cdfField90 = null, ?string $cdfField91 = null, ?string $cdfField92 = null, ?string $cdfField93 = null, ?string $cdfField94 = null, ?string $cdfField95 = null, ?string $cdfField96 = null, ?string $cdfField97 = null, ?string $cdfField98 = null, ?string $cdfField99 = null, ?string $cdfField100 = null, ?string $cdfField101 = null, ?string $cdfField102 = null, ?string $cdfField103 = null, ?string $cdfField104 = null, ?string $cdfField105 = null, ?string $cdfField106 = null, ?string $cdfField107 = null, ?string $cdfField108 = null, ?string $cdfField109 = null, ?string $cdfField110 = null, ?string $cdfField111 = null, ?string $cdfField112 = null, ?string $cdfField113 = null, ?string $cdfField114 = null, ?string $cdfField115 = null, ?string $cdfField116 = null, ?string $cdfField117 = null, ?string $cdfField118 = null, ?string $cdfField119 = null, ?string $cdfField120 = null, ?string $cdfField121 = null, ?string $cdfField122 = null, ?string $cdfField123 = null, ?string $cdfField124 = null, ?string $cdfField125 = null, ?string $cdfField126 = null, ?string $cdfField127 = null, ?string $cdfField128 = null, ?string $cdfField129 = null, ?string $cdfField130 = null, ?string $cdfField131 = null, ?string $cdfField132 = null, ?string $cdfField133 = null, ?string $cdfField134 = null, ?string $cdfField135 = null, ?string $cdfField136 = null, ?string $cdfField137 = null, ?string $cdfField138 = null, ?string $cdfField139 = null, ?string $cdfField140 = null, ?string $cdfField141 = null, ?string $cdfField142 = null, ?string $cdfField143 = null, ?string $cdfField144 = null, ?string $cdfField145 = null, ?string $cdfField146 = null, ?string $cdfField147 = null, ?string $cdfField148 = null, ?string $cdfField149 = null, ?string $cdfField150 = null)
    {
        $this
            ->setCustomerId($customerId)
            ->setDebitorNo($debitorNo)
            ->setInvoiceNo($invoiceNo)
            ->setOrderNo($orderNo)
            ->setReceiptDate($receiptDate)
            ->setPassenger($passenger)
            ->setDestination($destination)
            ->setSupplierId($supplierId)
            ->setRouting($routing)
            ->setItemType($itemType)
            ->setDescription($description)
            ->setReferenceNo($referenceNo)
            ->setDepartureDate($departureDate)
            ->setReturnDate($returnDate)
            ->setNetAmount($netAmount)
            ->setVatAmount($vatAmount)
            ->setPayableAmount($payableAmount)
            ->setCdfField1($cdfField1)
            ->setCdfField2($cdfField2)
            ->setCdfField3($cdfField3)
            ->setCdfField4($cdfField4)
            ->setCdfField5($cdfField5)
            ->setCdfField6($cdfField6)
            ->setCdfField7($cdfField7)
            ->setCdfField8($cdfField8)
            ->setCdfField9($cdfField9)
            ->setCdfField10($cdfField10)
            ->setCdfField11($cdfField11)
            ->setCdfField12($cdfField12)
            ->setCdfField13($cdfField13)
            ->setCdfField14($cdfField14)
            ->setCdfField15($cdfField15)
            ->setCdfField16($cdfField16)
            ->setCdfField17($cdfField17)
            ->setCdfField18($cdfField18)
            ->setCdfField19($cdfField19)
            ->setCdfField20($cdfField20)
            ->setCdfField21($cdfField21)
            ->setCdfField22($cdfField22)
            ->setCdfField23($cdfField23)
            ->setCdfField24($cdfField24)
            ->setCdfField25($cdfField25)
            ->setCdfField26($cdfField26)
            ->setCdfField27($cdfField27)
            ->setCdfField28($cdfField28)
            ->setCdfField29($cdfField29)
            ->setCdfField30($cdfField30)
            ->setCdfField31($cdfField31)
            ->setCdfField32($cdfField32)
            ->setCdfField33($cdfField33)
            ->setCdfField34($cdfField34)
            ->setCdfField35($cdfField35)
            ->setCdfField36($cdfField36)
            ->setCdfField37($cdfField37)
            ->setCdfField38($cdfField38)
            ->setCdfField39($cdfField39)
            ->setCdfField40($cdfField40)
            ->setCdfField41($cdfField41)
            ->setCdfField42($cdfField42)
            ->setCdfField43($cdfField43)
            ->setCdfField44($cdfField44)
            ->setCdfField45($cdfField45)
            ->setCdfField46($cdfField46)
            ->setCdfField47($cdfField47)
            ->setCdfField48($cdfField48)
            ->setCdfField49($cdfField49)
            ->setCdfField50($cdfField50)
            ->setCdfField51($cdfField51)
            ->setCdfField52($cdfField52)
            ->setCdfField53($cdfField53)
            ->setCdfField54($cdfField54)
            ->setCdfField55($cdfField55)
            ->setCdfField56($cdfField56)
            ->setCdfField57($cdfField57)
            ->setCdfField58($cdfField58)
            ->setCdfField59($cdfField59)
            ->setCdfField60($cdfField60)
            ->setCdfField61($cdfField61)
            ->setCdfField62($cdfField62)
            ->setCdfField63($cdfField63)
            ->setCdfField64($cdfField64)
            ->setCdfField65($cdfField65)
            ->setCdfField66($cdfField66)
            ->setCdfField67($cdfField67)
            ->setCdfField68($cdfField68)
            ->setCdfField69($cdfField69)
            ->setCdfField70($cdfField70)
            ->setCdfField71($cdfField71)
            ->setCdfField72($cdfField72)
            ->setCdfField73($cdfField73)
            ->setCdfField74($cdfField74)
            ->setCdfField75($cdfField75)
            ->setCdfField76($cdfField76)
            ->setCdfField77($cdfField77)
            ->setCdfField78($cdfField78)
            ->setCdfField79($cdfField79)
            ->setCdfField80($cdfField80)
            ->setCdfField81($cdfField81)
            ->setCdfField82($cdfField82)
            ->setCdfField83($cdfField83)
            ->setCdfField84($cdfField84)
            ->setCdfField85($cdfField85)
            ->setCdfField86($cdfField86)
            ->setCdfField87($cdfField87)
            ->setCdfField88($cdfField88)
            ->setCdfField89($cdfField89)
            ->setCdfField90($cdfField90)
            ->setCdfField91($cdfField91)
            ->setCdfField92($cdfField92)
            ->setCdfField93($cdfField93)
            ->setCdfField94($cdfField94)
            ->setCdfField95($cdfField95)
            ->setCdfField96($cdfField96)
            ->setCdfField97($cdfField97)
            ->setCdfField98($cdfField98)
            ->setCdfField99($cdfField99)
            ->setCdfField100($cdfField100)
            ->setCdfField101($cdfField101)
            ->setCdfField102($cdfField102)
            ->setCdfField103($cdfField103)
            ->setCdfField104($cdfField104)
            ->setCdfField105($cdfField105)
            ->setCdfField106($cdfField106)
            ->setCdfField107($cdfField107)
            ->setCdfField108($cdfField108)
            ->setCdfField109($cdfField109)
            ->setCdfField110($cdfField110)
            ->setCdfField111($cdfField111)
            ->setCdfField112($cdfField112)
            ->setCdfField113($cdfField113)
            ->setCdfField114($cdfField114)
            ->setCdfField115($cdfField115)
            ->setCdfField116($cdfField116)
            ->setCdfField117($cdfField117)
            ->setCdfField118($cdfField118)
            ->setCdfField119($cdfField119)
            ->setCdfField120($cdfField120)
            ->setCdfField121($cdfField121)
            ->setCdfField122($cdfField122)
            ->setCdfField123($cdfField123)
            ->setCdfField124($cdfField124)
            ->setCdfField125($cdfField125)
            ->setCdfField126($cdfField126)
            ->setCdfField127($cdfField127)
            ->setCdfField128($cdfField128)
            ->setCdfField129($cdfField129)
            ->setCdfField130($cdfField130)
            ->setCdfField131($cdfField131)
            ->setCdfField132($cdfField132)
            ->setCdfField133($cdfField133)
            ->setCdfField134($cdfField134)
            ->setCdfField135($cdfField135)
            ->setCdfField136($cdfField136)
            ->setCdfField137($cdfField137)
            ->setCdfField138($cdfField138)
            ->setCdfField139($cdfField139)
            ->setCdfField140($cdfField140)
            ->setCdfField141($cdfField141)
            ->setCdfField142($cdfField142)
            ->setCdfField143($cdfField143)
            ->setCdfField144($cdfField144)
            ->setCdfField145($cdfField145)
            ->setCdfField146($cdfField146)
            ->setCdfField147($cdfField147)
            ->setCdfField148($cdfField148)
            ->setCdfField149($cdfField149)
            ->setCdfField150($cdfField150);
    }
    /**
     * Get customerId value
     * @return int|null
     */
    public function getCustomerId(): ?int
    {
        return $this->customerId;
    }
    /**
     * Set customerId value
     * @param int $customerId
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCustomerId(?int $customerId = null): self
    {
        // validation for constraint: int
        if (!is_null($customerId) && !(is_int($customerId) || ctype_digit($customerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($customerId, true), gettype($customerId)), __LINE__);
        }
        $this->customerId = $customerId;
        
        return $this;
    }
    /**
     * Get debitorNo value
     * @return string|null
     */
    public function getDebitorNo(): ?string
    {
        return $this->debitorNo;
    }
    /**
     * Set debitorNo value
     * @param string $debitorNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setDebitorNo(?string $debitorNo = null): self
    {
        // validation for constraint: string
        if (!is_null($debitorNo) && !is_string($debitorNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($debitorNo, true), gettype($debitorNo)), __LINE__);
        }
        $this->debitorNo = $debitorNo;
        
        return $this;
    }
    /**
     * Get invoiceNo value
     * @return int|null
     */
    public function getInvoiceNo(): ?int
    {
        return $this->invoiceNo;
    }
    /**
     * Set invoiceNo value
     * @param int $invoiceNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setInvoiceNo(?int $invoiceNo = null): self
    {
        // validation for constraint: int
        if (!is_null($invoiceNo) && !(is_int($invoiceNo) || ctype_digit($invoiceNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($invoiceNo, true), gettype($invoiceNo)), __LINE__);
        }
        $this->invoiceNo = $invoiceNo;
        
        return $this;
    }
    /**
     * Get orderNo value
     * @return int|null
     */
    public function getOrderNo(): ?int
    {
        return $this->orderNo;
    }
    /**
     * Set orderNo value
     * @param int $orderNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setOrderNo(?int $orderNo = null): self
    {
        // validation for constraint: int
        if (!is_null($orderNo) && !(is_int($orderNo) || ctype_digit($orderNo))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($orderNo, true), gettype($orderNo)), __LINE__);
        }
        $this->orderNo = $orderNo;
        
        return $this;
    }
    /**
     * Get receiptDate value
     * @return string|null
     */
    public function getReceiptDate(): ?string
    {
        return $this->receiptDate;
    }
    /**
     * Set receiptDate value
     * @param string $receiptDate
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setReceiptDate(?string $receiptDate = null): self
    {
        // validation for constraint: string
        if (!is_null($receiptDate) && !is_string($receiptDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($receiptDate, true), gettype($receiptDate)), __LINE__);
        }
        $this->receiptDate = $receiptDate;
        
        return $this;
    }
    /**
     * Get passenger value
     * @return string|null
     */
    public function getPassenger(): ?string
    {
        return $this->passenger;
    }
    /**
     * Set passenger value
     * @param string $passenger
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setPassenger(?string $passenger = null): self
    {
        // validation for constraint: string
        if (!is_null($passenger) && !is_string($passenger)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($passenger, true), gettype($passenger)), __LINE__);
        }
        $this->passenger = $passenger;
        
        return $this;
    }
    /**
     * Get destination value
     * @return string|null
     */
    public function getDestination(): ?string
    {
        return $this->destination;
    }
    /**
     * Set destination value
     * @param string $destination
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setDestination(?string $destination = null): self
    {
        // validation for constraint: string
        if (!is_null($destination) && !is_string($destination)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destination, true), gettype($destination)), __LINE__);
        }
        $this->destination = $destination;
        
        return $this;
    }
    /**
     * Get supplierId value
     * @return string|null
     */
    public function getSupplierId(): ?string
    {
        return $this->supplierId;
    }
    /**
     * Set supplierId value
     * @param string $supplierId
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setSupplierId(?string $supplierId = null): self
    {
        // validation for constraint: string
        if (!is_null($supplierId) && !is_string($supplierId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierId, true), gettype($supplierId)), __LINE__);
        }
        $this->supplierId = $supplierId;
        
        return $this;
    }
    /**
     * Get routing value
     * @return string|null
     */
    public function getRouting(): ?string
    {
        return $this->routing;
    }
    /**
     * Set routing value
     * @param string $routing
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setRouting(?string $routing = null): self
    {
        // validation for constraint: string
        if (!is_null($routing) && !is_string($routing)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($routing, true), gettype($routing)), __LINE__);
        }
        $this->routing = $routing;
        
        return $this;
    }
    /**
     * Get itemType value
     * @return string|null
     */
    public function getItemType(): ?string
    {
        return $this->itemType;
    }
    /**
     * Set itemType value
     * @param string $itemType
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setItemType(?string $itemType = null): self
    {
        // validation for constraint: string
        if (!is_null($itemType) && !is_string($itemType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemType, true), gettype($itemType)), __LINE__);
        }
        $this->itemType = $itemType;
        
        return $this;
    }
    /**
     * Get description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }
    /**
     * Set description value
     * @param string $description
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->description = $description;
        
        return $this;
    }
    /**
     * Get referenceNo value
     * @return string|null
     */
    public function getReferenceNo(): ?string
    {
        return $this->referenceNo;
    }
    /**
     * Set referenceNo value
     * @param string $referenceNo
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setReferenceNo(?string $referenceNo = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceNo) && !is_string($referenceNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceNo, true), gettype($referenceNo)), __LINE__);
        }
        $this->referenceNo = $referenceNo;
        
        return $this;
    }
    /**
     * Get departureDate value
     * @return string|null
     */
    public function getDepartureDate(): ?string
    {
        return $this->departureDate;
    }
    /**
     * Set departureDate value
     * @param string $departureDate
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setDepartureDate(?string $departureDate = null): self
    {
        // validation for constraint: string
        if (!is_null($departureDate) && !is_string($departureDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($departureDate, true), gettype($departureDate)), __LINE__);
        }
        $this->departureDate = $departureDate;
        
        return $this;
    }
    /**
     * Get returnDate value
     * @return string|null
     */
    public function getReturnDate(): ?string
    {
        return $this->returnDate;
    }
    /**
     * Set returnDate value
     * @param string $returnDate
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setReturnDate(?string $returnDate = null): self
    {
        // validation for constraint: string
        if (!is_null($returnDate) && !is_string($returnDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnDate, true), gettype($returnDate)), __LINE__);
        }
        $this->returnDate = $returnDate;
        
        return $this;
    }
    /**
     * Get netAmount value
     * @return float|null
     */
    public function getNetAmount(): ?float
    {
        return $this->netAmount;
    }
    /**
     * Set netAmount value
     * @param float $netAmount
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setNetAmount(?float $netAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($netAmount) && !(is_float($netAmount) || is_numeric($netAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($netAmount, true), gettype($netAmount)), __LINE__);
        }
        $this->netAmount = $netAmount;
        
        return $this;
    }
    /**
     * Get vatAmount value
     * @return float|null
     */
    public function getVatAmount(): ?float
    {
        return $this->vatAmount;
    }
    /**
     * Set vatAmount value
     * @param float $vatAmount
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setVatAmount(?float $vatAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($vatAmount) && !(is_float($vatAmount) || is_numeric($vatAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($vatAmount, true), gettype($vatAmount)), __LINE__);
        }
        $this->vatAmount = $vatAmount;
        
        return $this;
    }
    /**
     * Get payableAmount value
     * @return float|null
     */
    public function getPayableAmount(): ?float
    {
        return $this->payableAmount;
    }
    /**
     * Set payableAmount value
     * @param float $payableAmount
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setPayableAmount(?float $payableAmount = null): self
    {
        // validation for constraint: float
        if (!is_null($payableAmount) && !(is_float($payableAmount) || is_numeric($payableAmount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($payableAmount, true), gettype($payableAmount)), __LINE__);
        }
        $this->payableAmount = $payableAmount;
        
        return $this;
    }
    /**
     * Get cdfField1 value
     * @return string|null
     */
    public function getCdfField1(): ?string
    {
        return $this->cdfField1;
    }
    /**
     * Set cdfField1 value
     * @param string $cdfField1
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField1(?string $cdfField1 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField1) && !is_string($cdfField1)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField1, true), gettype($cdfField1)), __LINE__);
        }
        $this->cdfField1 = $cdfField1;
        
        return $this;
    }
    /**
     * Get cdfField2 value
     * @return string|null
     */
    public function getCdfField2(): ?string
    {
        return $this->cdfField2;
    }
    /**
     * Set cdfField2 value
     * @param string $cdfField2
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField2(?string $cdfField2 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField2) && !is_string($cdfField2)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField2, true), gettype($cdfField2)), __LINE__);
        }
        $this->cdfField2 = $cdfField2;
        
        return $this;
    }
    /**
     * Get cdfField3 value
     * @return string|null
     */
    public function getCdfField3(): ?string
    {
        return $this->cdfField3;
    }
    /**
     * Set cdfField3 value
     * @param string $cdfField3
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField3(?string $cdfField3 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField3) && !is_string($cdfField3)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField3, true), gettype($cdfField3)), __LINE__);
        }
        $this->cdfField3 = $cdfField3;
        
        return $this;
    }
    /**
     * Get cdfField4 value
     * @return string|null
     */
    public function getCdfField4(): ?string
    {
        return $this->cdfField4;
    }
    /**
     * Set cdfField4 value
     * @param string $cdfField4
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField4(?string $cdfField4 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField4) && !is_string($cdfField4)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField4, true), gettype($cdfField4)), __LINE__);
        }
        $this->cdfField4 = $cdfField4;
        
        return $this;
    }
    /**
     * Get cdfField5 value
     * @return string|null
     */
    public function getCdfField5(): ?string
    {
        return $this->cdfField5;
    }
    /**
     * Set cdfField5 value
     * @param string $cdfField5
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField5(?string $cdfField5 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField5) && !is_string($cdfField5)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField5, true), gettype($cdfField5)), __LINE__);
        }
        $this->cdfField5 = $cdfField5;
        
        return $this;
    }
    /**
     * Get cdfField6 value
     * @return string|null
     */
    public function getCdfField6(): ?string
    {
        return $this->cdfField6;
    }
    /**
     * Set cdfField6 value
     * @param string $cdfField6
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField6(?string $cdfField6 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField6) && !is_string($cdfField6)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField6, true), gettype($cdfField6)), __LINE__);
        }
        $this->cdfField6 = $cdfField6;
        
        return $this;
    }
    /**
     * Get cdfField7 value
     * @return string|null
     */
    public function getCdfField7(): ?string
    {
        return $this->cdfField7;
    }
    /**
     * Set cdfField7 value
     * @param string $cdfField7
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField7(?string $cdfField7 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField7) && !is_string($cdfField7)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField7, true), gettype($cdfField7)), __LINE__);
        }
        $this->cdfField7 = $cdfField7;
        
        return $this;
    }
    /**
     * Get cdfField8 value
     * @return string|null
     */
    public function getCdfField8(): ?string
    {
        return $this->cdfField8;
    }
    /**
     * Set cdfField8 value
     * @param string $cdfField8
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField8(?string $cdfField8 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField8) && !is_string($cdfField8)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField8, true), gettype($cdfField8)), __LINE__);
        }
        $this->cdfField8 = $cdfField8;
        
        return $this;
    }
    /**
     * Get cdfField9 value
     * @return string|null
     */
    public function getCdfField9(): ?string
    {
        return $this->cdfField9;
    }
    /**
     * Set cdfField9 value
     * @param string $cdfField9
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField9(?string $cdfField9 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField9) && !is_string($cdfField9)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField9, true), gettype($cdfField9)), __LINE__);
        }
        $this->cdfField9 = $cdfField9;
        
        return $this;
    }
    /**
     * Get cdfField10 value
     * @return string|null
     */
    public function getCdfField10(): ?string
    {
        return $this->cdfField10;
    }
    /**
     * Set cdfField10 value
     * @param string $cdfField10
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField10(?string $cdfField10 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField10) && !is_string($cdfField10)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField10, true), gettype($cdfField10)), __LINE__);
        }
        $this->cdfField10 = $cdfField10;
        
        return $this;
    }
    /**
     * Get cdfField11 value
     * @return string|null
     */
    public function getCdfField11(): ?string
    {
        return $this->cdfField11;
    }
    /**
     * Set cdfField11 value
     * @param string $cdfField11
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField11(?string $cdfField11 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField11) && !is_string($cdfField11)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField11, true), gettype($cdfField11)), __LINE__);
        }
        $this->cdfField11 = $cdfField11;
        
        return $this;
    }
    /**
     * Get cdfField12 value
     * @return string|null
     */
    public function getCdfField12(): ?string
    {
        return $this->cdfField12;
    }
    /**
     * Set cdfField12 value
     * @param string $cdfField12
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField12(?string $cdfField12 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField12) && !is_string($cdfField12)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField12, true), gettype($cdfField12)), __LINE__);
        }
        $this->cdfField12 = $cdfField12;
        
        return $this;
    }
    /**
     * Get cdfField13 value
     * @return string|null
     */
    public function getCdfField13(): ?string
    {
        return $this->cdfField13;
    }
    /**
     * Set cdfField13 value
     * @param string $cdfField13
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField13(?string $cdfField13 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField13) && !is_string($cdfField13)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField13, true), gettype($cdfField13)), __LINE__);
        }
        $this->cdfField13 = $cdfField13;
        
        return $this;
    }
    /**
     * Get cdfField14 value
     * @return string|null
     */
    public function getCdfField14(): ?string
    {
        return $this->cdfField14;
    }
    /**
     * Set cdfField14 value
     * @param string $cdfField14
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField14(?string $cdfField14 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField14) && !is_string($cdfField14)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField14, true), gettype($cdfField14)), __LINE__);
        }
        $this->cdfField14 = $cdfField14;
        
        return $this;
    }
    /**
     * Get cdfField15 value
     * @return string|null
     */
    public function getCdfField15(): ?string
    {
        return $this->cdfField15;
    }
    /**
     * Set cdfField15 value
     * @param string $cdfField15
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField15(?string $cdfField15 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField15) && !is_string($cdfField15)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField15, true), gettype($cdfField15)), __LINE__);
        }
        $this->cdfField15 = $cdfField15;
        
        return $this;
    }
    /**
     * Get cdfField16 value
     * @return string|null
     */
    public function getCdfField16(): ?string
    {
        return $this->cdfField16;
    }
    /**
     * Set cdfField16 value
     * @param string $cdfField16
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField16(?string $cdfField16 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField16) && !is_string($cdfField16)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField16, true), gettype($cdfField16)), __LINE__);
        }
        $this->cdfField16 = $cdfField16;
        
        return $this;
    }
    /**
     * Get cdfField17 value
     * @return string|null
     */
    public function getCdfField17(): ?string
    {
        return $this->cdfField17;
    }
    /**
     * Set cdfField17 value
     * @param string $cdfField17
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField17(?string $cdfField17 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField17) && !is_string($cdfField17)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField17, true), gettype($cdfField17)), __LINE__);
        }
        $this->cdfField17 = $cdfField17;
        
        return $this;
    }
    /**
     * Get cdfField18 value
     * @return string|null
     */
    public function getCdfField18(): ?string
    {
        return $this->cdfField18;
    }
    /**
     * Set cdfField18 value
     * @param string $cdfField18
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField18(?string $cdfField18 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField18) && !is_string($cdfField18)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField18, true), gettype($cdfField18)), __LINE__);
        }
        $this->cdfField18 = $cdfField18;
        
        return $this;
    }
    /**
     * Get cdfField19 value
     * @return string|null
     */
    public function getCdfField19(): ?string
    {
        return $this->cdfField19;
    }
    /**
     * Set cdfField19 value
     * @param string $cdfField19
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField19(?string $cdfField19 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField19) && !is_string($cdfField19)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField19, true), gettype($cdfField19)), __LINE__);
        }
        $this->cdfField19 = $cdfField19;
        
        return $this;
    }
    /**
     * Get cdfField20 value
     * @return string|null
     */
    public function getCdfField20(): ?string
    {
        return $this->cdfField20;
    }
    /**
     * Set cdfField20 value
     * @param string $cdfField20
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField20(?string $cdfField20 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField20) && !is_string($cdfField20)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField20, true), gettype($cdfField20)), __LINE__);
        }
        $this->cdfField20 = $cdfField20;
        
        return $this;
    }
    /**
     * Get cdfField21 value
     * @return string|null
     */
    public function getCdfField21(): ?string
    {
        return $this->cdfField21;
    }
    /**
     * Set cdfField21 value
     * @param string $cdfField21
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField21(?string $cdfField21 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField21) && !is_string($cdfField21)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField21, true), gettype($cdfField21)), __LINE__);
        }
        $this->cdfField21 = $cdfField21;
        
        return $this;
    }
    /**
     * Get cdfField22 value
     * @return string|null
     */
    public function getCdfField22(): ?string
    {
        return $this->cdfField22;
    }
    /**
     * Set cdfField22 value
     * @param string $cdfField22
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField22(?string $cdfField22 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField22) && !is_string($cdfField22)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField22, true), gettype($cdfField22)), __LINE__);
        }
        $this->cdfField22 = $cdfField22;
        
        return $this;
    }
    /**
     * Get cdfField23 value
     * @return string|null
     */
    public function getCdfField23(): ?string
    {
        return $this->cdfField23;
    }
    /**
     * Set cdfField23 value
     * @param string $cdfField23
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField23(?string $cdfField23 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField23) && !is_string($cdfField23)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField23, true), gettype($cdfField23)), __LINE__);
        }
        $this->cdfField23 = $cdfField23;
        
        return $this;
    }
    /**
     * Get cdfField24 value
     * @return string|null
     */
    public function getCdfField24(): ?string
    {
        return $this->cdfField24;
    }
    /**
     * Set cdfField24 value
     * @param string $cdfField24
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField24(?string $cdfField24 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField24) && !is_string($cdfField24)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField24, true), gettype($cdfField24)), __LINE__);
        }
        $this->cdfField24 = $cdfField24;
        
        return $this;
    }
    /**
     * Get cdfField25 value
     * @return string|null
     */
    public function getCdfField25(): ?string
    {
        return $this->cdfField25;
    }
    /**
     * Set cdfField25 value
     * @param string $cdfField25
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField25(?string $cdfField25 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField25) && !is_string($cdfField25)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField25, true), gettype($cdfField25)), __LINE__);
        }
        $this->cdfField25 = $cdfField25;
        
        return $this;
    }
    /**
     * Get cdfField26 value
     * @return string|null
     */
    public function getCdfField26(): ?string
    {
        return $this->cdfField26;
    }
    /**
     * Set cdfField26 value
     * @param string $cdfField26
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField26(?string $cdfField26 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField26) && !is_string($cdfField26)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField26, true), gettype($cdfField26)), __LINE__);
        }
        $this->cdfField26 = $cdfField26;
        
        return $this;
    }
    /**
     * Get cdfField27 value
     * @return string|null
     */
    public function getCdfField27(): ?string
    {
        return $this->cdfField27;
    }
    /**
     * Set cdfField27 value
     * @param string $cdfField27
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField27(?string $cdfField27 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField27) && !is_string($cdfField27)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField27, true), gettype($cdfField27)), __LINE__);
        }
        $this->cdfField27 = $cdfField27;
        
        return $this;
    }
    /**
     * Get cdfField28 value
     * @return string|null
     */
    public function getCdfField28(): ?string
    {
        return $this->cdfField28;
    }
    /**
     * Set cdfField28 value
     * @param string $cdfField28
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField28(?string $cdfField28 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField28) && !is_string($cdfField28)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField28, true), gettype($cdfField28)), __LINE__);
        }
        $this->cdfField28 = $cdfField28;
        
        return $this;
    }
    /**
     * Get cdfField29 value
     * @return string|null
     */
    public function getCdfField29(): ?string
    {
        return $this->cdfField29;
    }
    /**
     * Set cdfField29 value
     * @param string $cdfField29
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField29(?string $cdfField29 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField29) && !is_string($cdfField29)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField29, true), gettype($cdfField29)), __LINE__);
        }
        $this->cdfField29 = $cdfField29;
        
        return $this;
    }
    /**
     * Get cdfField30 value
     * @return string|null
     */
    public function getCdfField30(): ?string
    {
        return $this->cdfField30;
    }
    /**
     * Set cdfField30 value
     * @param string $cdfField30
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField30(?string $cdfField30 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField30) && !is_string($cdfField30)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField30, true), gettype($cdfField30)), __LINE__);
        }
        $this->cdfField30 = $cdfField30;
        
        return $this;
    }
    /**
     * Get cdfField31 value
     * @return string|null
     */
    public function getCdfField31(): ?string
    {
        return $this->cdfField31;
    }
    /**
     * Set cdfField31 value
     * @param string $cdfField31
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField31(?string $cdfField31 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField31) && !is_string($cdfField31)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField31, true), gettype($cdfField31)), __LINE__);
        }
        $this->cdfField31 = $cdfField31;
        
        return $this;
    }
    /**
     * Get cdfField32 value
     * @return string|null
     */
    public function getCdfField32(): ?string
    {
        return $this->cdfField32;
    }
    /**
     * Set cdfField32 value
     * @param string $cdfField32
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField32(?string $cdfField32 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField32) && !is_string($cdfField32)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField32, true), gettype($cdfField32)), __LINE__);
        }
        $this->cdfField32 = $cdfField32;
        
        return $this;
    }
    /**
     * Get cdfField33 value
     * @return string|null
     */
    public function getCdfField33(): ?string
    {
        return $this->cdfField33;
    }
    /**
     * Set cdfField33 value
     * @param string $cdfField33
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField33(?string $cdfField33 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField33) && !is_string($cdfField33)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField33, true), gettype($cdfField33)), __LINE__);
        }
        $this->cdfField33 = $cdfField33;
        
        return $this;
    }
    /**
     * Get cdfField34 value
     * @return string|null
     */
    public function getCdfField34(): ?string
    {
        return $this->cdfField34;
    }
    /**
     * Set cdfField34 value
     * @param string $cdfField34
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField34(?string $cdfField34 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField34) && !is_string($cdfField34)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField34, true), gettype($cdfField34)), __LINE__);
        }
        $this->cdfField34 = $cdfField34;
        
        return $this;
    }
    /**
     * Get cdfField35 value
     * @return string|null
     */
    public function getCdfField35(): ?string
    {
        return $this->cdfField35;
    }
    /**
     * Set cdfField35 value
     * @param string $cdfField35
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField35(?string $cdfField35 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField35) && !is_string($cdfField35)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField35, true), gettype($cdfField35)), __LINE__);
        }
        $this->cdfField35 = $cdfField35;
        
        return $this;
    }
    /**
     * Get cdfField36 value
     * @return string|null
     */
    public function getCdfField36(): ?string
    {
        return $this->cdfField36;
    }
    /**
     * Set cdfField36 value
     * @param string $cdfField36
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField36(?string $cdfField36 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField36) && !is_string($cdfField36)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField36, true), gettype($cdfField36)), __LINE__);
        }
        $this->cdfField36 = $cdfField36;
        
        return $this;
    }
    /**
     * Get cdfField37 value
     * @return string|null
     */
    public function getCdfField37(): ?string
    {
        return $this->cdfField37;
    }
    /**
     * Set cdfField37 value
     * @param string $cdfField37
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField37(?string $cdfField37 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField37) && !is_string($cdfField37)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField37, true), gettype($cdfField37)), __LINE__);
        }
        $this->cdfField37 = $cdfField37;
        
        return $this;
    }
    /**
     * Get cdfField38 value
     * @return string|null
     */
    public function getCdfField38(): ?string
    {
        return $this->cdfField38;
    }
    /**
     * Set cdfField38 value
     * @param string $cdfField38
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField38(?string $cdfField38 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField38) && !is_string($cdfField38)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField38, true), gettype($cdfField38)), __LINE__);
        }
        $this->cdfField38 = $cdfField38;
        
        return $this;
    }
    /**
     * Get cdfField39 value
     * @return string|null
     */
    public function getCdfField39(): ?string
    {
        return $this->cdfField39;
    }
    /**
     * Set cdfField39 value
     * @param string $cdfField39
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField39(?string $cdfField39 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField39) && !is_string($cdfField39)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField39, true), gettype($cdfField39)), __LINE__);
        }
        $this->cdfField39 = $cdfField39;
        
        return $this;
    }
    /**
     * Get cdfField40 value
     * @return string|null
     */
    public function getCdfField40(): ?string
    {
        return $this->cdfField40;
    }
    /**
     * Set cdfField40 value
     * @param string $cdfField40
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField40(?string $cdfField40 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField40) && !is_string($cdfField40)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField40, true), gettype($cdfField40)), __LINE__);
        }
        $this->cdfField40 = $cdfField40;
        
        return $this;
    }
    /**
     * Get cdfField41 value
     * @return string|null
     */
    public function getCdfField41(): ?string
    {
        return $this->cdfField41;
    }
    /**
     * Set cdfField41 value
     * @param string $cdfField41
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField41(?string $cdfField41 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField41) && !is_string($cdfField41)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField41, true), gettype($cdfField41)), __LINE__);
        }
        $this->cdfField41 = $cdfField41;
        
        return $this;
    }
    /**
     * Get cdfField42 value
     * @return string|null
     */
    public function getCdfField42(): ?string
    {
        return $this->cdfField42;
    }
    /**
     * Set cdfField42 value
     * @param string $cdfField42
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField42(?string $cdfField42 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField42) && !is_string($cdfField42)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField42, true), gettype($cdfField42)), __LINE__);
        }
        $this->cdfField42 = $cdfField42;
        
        return $this;
    }
    /**
     * Get cdfField43 value
     * @return string|null
     */
    public function getCdfField43(): ?string
    {
        return $this->cdfField43;
    }
    /**
     * Set cdfField43 value
     * @param string $cdfField43
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField43(?string $cdfField43 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField43) && !is_string($cdfField43)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField43, true), gettype($cdfField43)), __LINE__);
        }
        $this->cdfField43 = $cdfField43;
        
        return $this;
    }
    /**
     * Get cdfField44 value
     * @return string|null
     */
    public function getCdfField44(): ?string
    {
        return $this->cdfField44;
    }
    /**
     * Set cdfField44 value
     * @param string $cdfField44
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField44(?string $cdfField44 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField44) && !is_string($cdfField44)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField44, true), gettype($cdfField44)), __LINE__);
        }
        $this->cdfField44 = $cdfField44;
        
        return $this;
    }
    /**
     * Get cdfField45 value
     * @return string|null
     */
    public function getCdfField45(): ?string
    {
        return $this->cdfField45;
    }
    /**
     * Set cdfField45 value
     * @param string $cdfField45
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField45(?string $cdfField45 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField45) && !is_string($cdfField45)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField45, true), gettype($cdfField45)), __LINE__);
        }
        $this->cdfField45 = $cdfField45;
        
        return $this;
    }
    /**
     * Get cdfField46 value
     * @return string|null
     */
    public function getCdfField46(): ?string
    {
        return $this->cdfField46;
    }
    /**
     * Set cdfField46 value
     * @param string $cdfField46
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField46(?string $cdfField46 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField46) && !is_string($cdfField46)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField46, true), gettype($cdfField46)), __LINE__);
        }
        $this->cdfField46 = $cdfField46;
        
        return $this;
    }
    /**
     * Get cdfField47 value
     * @return string|null
     */
    public function getCdfField47(): ?string
    {
        return $this->cdfField47;
    }
    /**
     * Set cdfField47 value
     * @param string $cdfField47
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField47(?string $cdfField47 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField47) && !is_string($cdfField47)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField47, true), gettype($cdfField47)), __LINE__);
        }
        $this->cdfField47 = $cdfField47;
        
        return $this;
    }
    /**
     * Get cdfField48 value
     * @return string|null
     */
    public function getCdfField48(): ?string
    {
        return $this->cdfField48;
    }
    /**
     * Set cdfField48 value
     * @param string $cdfField48
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField48(?string $cdfField48 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField48) && !is_string($cdfField48)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField48, true), gettype($cdfField48)), __LINE__);
        }
        $this->cdfField48 = $cdfField48;
        
        return $this;
    }
    /**
     * Get cdfField49 value
     * @return string|null
     */
    public function getCdfField49(): ?string
    {
        return $this->cdfField49;
    }
    /**
     * Set cdfField49 value
     * @param string $cdfField49
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField49(?string $cdfField49 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField49) && !is_string($cdfField49)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField49, true), gettype($cdfField49)), __LINE__);
        }
        $this->cdfField49 = $cdfField49;
        
        return $this;
    }
    /**
     * Get cdfField50 value
     * @return string|null
     */
    public function getCdfField50(): ?string
    {
        return $this->cdfField50;
    }
    /**
     * Set cdfField50 value
     * @param string $cdfField50
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField50(?string $cdfField50 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField50) && !is_string($cdfField50)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField50, true), gettype($cdfField50)), __LINE__);
        }
        $this->cdfField50 = $cdfField50;
        
        return $this;
    }
    /**
     * Get cdfField51 value
     * @return string|null
     */
    public function getCdfField51(): ?string
    {
        return $this->cdfField51;
    }
    /**
     * Set cdfField51 value
     * @param string $cdfField51
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField51(?string $cdfField51 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField51) && !is_string($cdfField51)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField51, true), gettype($cdfField51)), __LINE__);
        }
        $this->cdfField51 = $cdfField51;
        
        return $this;
    }
    /**
     * Get cdfField52 value
     * @return string|null
     */
    public function getCdfField52(): ?string
    {
        return $this->cdfField52;
    }
    /**
     * Set cdfField52 value
     * @param string $cdfField52
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField52(?string $cdfField52 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField52) && !is_string($cdfField52)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField52, true), gettype($cdfField52)), __LINE__);
        }
        $this->cdfField52 = $cdfField52;
        
        return $this;
    }
    /**
     * Get cdfField53 value
     * @return string|null
     */
    public function getCdfField53(): ?string
    {
        return $this->cdfField53;
    }
    /**
     * Set cdfField53 value
     * @param string $cdfField53
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField53(?string $cdfField53 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField53) && !is_string($cdfField53)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField53, true), gettype($cdfField53)), __LINE__);
        }
        $this->cdfField53 = $cdfField53;
        
        return $this;
    }
    /**
     * Get cdfField54 value
     * @return string|null
     */
    public function getCdfField54(): ?string
    {
        return $this->cdfField54;
    }
    /**
     * Set cdfField54 value
     * @param string $cdfField54
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField54(?string $cdfField54 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField54) && !is_string($cdfField54)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField54, true), gettype($cdfField54)), __LINE__);
        }
        $this->cdfField54 = $cdfField54;
        
        return $this;
    }
    /**
     * Get cdfField55 value
     * @return string|null
     */
    public function getCdfField55(): ?string
    {
        return $this->cdfField55;
    }
    /**
     * Set cdfField55 value
     * @param string $cdfField55
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField55(?string $cdfField55 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField55) && !is_string($cdfField55)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField55, true), gettype($cdfField55)), __LINE__);
        }
        $this->cdfField55 = $cdfField55;
        
        return $this;
    }
    /**
     * Get cdfField56 value
     * @return string|null
     */
    public function getCdfField56(): ?string
    {
        return $this->cdfField56;
    }
    /**
     * Set cdfField56 value
     * @param string $cdfField56
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField56(?string $cdfField56 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField56) && !is_string($cdfField56)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField56, true), gettype($cdfField56)), __LINE__);
        }
        $this->cdfField56 = $cdfField56;
        
        return $this;
    }
    /**
     * Get cdfField57 value
     * @return string|null
     */
    public function getCdfField57(): ?string
    {
        return $this->cdfField57;
    }
    /**
     * Set cdfField57 value
     * @param string $cdfField57
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField57(?string $cdfField57 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField57) && !is_string($cdfField57)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField57, true), gettype($cdfField57)), __LINE__);
        }
        $this->cdfField57 = $cdfField57;
        
        return $this;
    }
    /**
     * Get cdfField58 value
     * @return string|null
     */
    public function getCdfField58(): ?string
    {
        return $this->cdfField58;
    }
    /**
     * Set cdfField58 value
     * @param string $cdfField58
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField58(?string $cdfField58 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField58) && !is_string($cdfField58)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField58, true), gettype($cdfField58)), __LINE__);
        }
        $this->cdfField58 = $cdfField58;
        
        return $this;
    }
    /**
     * Get cdfField59 value
     * @return string|null
     */
    public function getCdfField59(): ?string
    {
        return $this->cdfField59;
    }
    /**
     * Set cdfField59 value
     * @param string $cdfField59
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField59(?string $cdfField59 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField59) && !is_string($cdfField59)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField59, true), gettype($cdfField59)), __LINE__);
        }
        $this->cdfField59 = $cdfField59;
        
        return $this;
    }
    /**
     * Get cdfField60 value
     * @return string|null
     */
    public function getCdfField60(): ?string
    {
        return $this->cdfField60;
    }
    /**
     * Set cdfField60 value
     * @param string $cdfField60
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField60(?string $cdfField60 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField60) && !is_string($cdfField60)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField60, true), gettype($cdfField60)), __LINE__);
        }
        $this->cdfField60 = $cdfField60;
        
        return $this;
    }
    /**
     * Get cdfField61 value
     * @return string|null
     */
    public function getCdfField61(): ?string
    {
        return $this->cdfField61;
    }
    /**
     * Set cdfField61 value
     * @param string $cdfField61
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField61(?string $cdfField61 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField61) && !is_string($cdfField61)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField61, true), gettype($cdfField61)), __LINE__);
        }
        $this->cdfField61 = $cdfField61;
        
        return $this;
    }
    /**
     * Get cdfField62 value
     * @return string|null
     */
    public function getCdfField62(): ?string
    {
        return $this->cdfField62;
    }
    /**
     * Set cdfField62 value
     * @param string $cdfField62
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField62(?string $cdfField62 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField62) && !is_string($cdfField62)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField62, true), gettype($cdfField62)), __LINE__);
        }
        $this->cdfField62 = $cdfField62;
        
        return $this;
    }
    /**
     * Get cdfField63 value
     * @return string|null
     */
    public function getCdfField63(): ?string
    {
        return $this->cdfField63;
    }
    /**
     * Set cdfField63 value
     * @param string $cdfField63
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField63(?string $cdfField63 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField63) && !is_string($cdfField63)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField63, true), gettype($cdfField63)), __LINE__);
        }
        $this->cdfField63 = $cdfField63;
        
        return $this;
    }
    /**
     * Get cdfField64 value
     * @return string|null
     */
    public function getCdfField64(): ?string
    {
        return $this->cdfField64;
    }
    /**
     * Set cdfField64 value
     * @param string $cdfField64
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField64(?string $cdfField64 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField64) && !is_string($cdfField64)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField64, true), gettype($cdfField64)), __LINE__);
        }
        $this->cdfField64 = $cdfField64;
        
        return $this;
    }
    /**
     * Get cdfField65 value
     * @return string|null
     */
    public function getCdfField65(): ?string
    {
        return $this->cdfField65;
    }
    /**
     * Set cdfField65 value
     * @param string $cdfField65
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField65(?string $cdfField65 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField65) && !is_string($cdfField65)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField65, true), gettype($cdfField65)), __LINE__);
        }
        $this->cdfField65 = $cdfField65;
        
        return $this;
    }
    /**
     * Get cdfField66 value
     * @return string|null
     */
    public function getCdfField66(): ?string
    {
        return $this->cdfField66;
    }
    /**
     * Set cdfField66 value
     * @param string $cdfField66
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField66(?string $cdfField66 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField66) && !is_string($cdfField66)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField66, true), gettype($cdfField66)), __LINE__);
        }
        $this->cdfField66 = $cdfField66;
        
        return $this;
    }
    /**
     * Get cdfField67 value
     * @return string|null
     */
    public function getCdfField67(): ?string
    {
        return $this->cdfField67;
    }
    /**
     * Set cdfField67 value
     * @param string $cdfField67
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField67(?string $cdfField67 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField67) && !is_string($cdfField67)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField67, true), gettype($cdfField67)), __LINE__);
        }
        $this->cdfField67 = $cdfField67;
        
        return $this;
    }
    /**
     * Get cdfField68 value
     * @return string|null
     */
    public function getCdfField68(): ?string
    {
        return $this->cdfField68;
    }
    /**
     * Set cdfField68 value
     * @param string $cdfField68
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField68(?string $cdfField68 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField68) && !is_string($cdfField68)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField68, true), gettype($cdfField68)), __LINE__);
        }
        $this->cdfField68 = $cdfField68;
        
        return $this;
    }
    /**
     * Get cdfField69 value
     * @return string|null
     */
    public function getCdfField69(): ?string
    {
        return $this->cdfField69;
    }
    /**
     * Set cdfField69 value
     * @param string $cdfField69
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField69(?string $cdfField69 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField69) && !is_string($cdfField69)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField69, true), gettype($cdfField69)), __LINE__);
        }
        $this->cdfField69 = $cdfField69;
        
        return $this;
    }
    /**
     * Get cdfField70 value
     * @return string|null
     */
    public function getCdfField70(): ?string
    {
        return $this->cdfField70;
    }
    /**
     * Set cdfField70 value
     * @param string $cdfField70
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField70(?string $cdfField70 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField70) && !is_string($cdfField70)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField70, true), gettype($cdfField70)), __LINE__);
        }
        $this->cdfField70 = $cdfField70;
        
        return $this;
    }
    /**
     * Get cdfField71 value
     * @return string|null
     */
    public function getCdfField71(): ?string
    {
        return $this->cdfField71;
    }
    /**
     * Set cdfField71 value
     * @param string $cdfField71
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField71(?string $cdfField71 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField71) && !is_string($cdfField71)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField71, true), gettype($cdfField71)), __LINE__);
        }
        $this->cdfField71 = $cdfField71;
        
        return $this;
    }
    /**
     * Get cdfField72 value
     * @return string|null
     */
    public function getCdfField72(): ?string
    {
        return $this->cdfField72;
    }
    /**
     * Set cdfField72 value
     * @param string $cdfField72
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField72(?string $cdfField72 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField72) && !is_string($cdfField72)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField72, true), gettype($cdfField72)), __LINE__);
        }
        $this->cdfField72 = $cdfField72;
        
        return $this;
    }
    /**
     * Get cdfField73 value
     * @return string|null
     */
    public function getCdfField73(): ?string
    {
        return $this->cdfField73;
    }
    /**
     * Set cdfField73 value
     * @param string $cdfField73
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField73(?string $cdfField73 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField73) && !is_string($cdfField73)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField73, true), gettype($cdfField73)), __LINE__);
        }
        $this->cdfField73 = $cdfField73;
        
        return $this;
    }
    /**
     * Get cdfField74 value
     * @return string|null
     */
    public function getCdfField74(): ?string
    {
        return $this->cdfField74;
    }
    /**
     * Set cdfField74 value
     * @param string $cdfField74
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField74(?string $cdfField74 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField74) && !is_string($cdfField74)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField74, true), gettype($cdfField74)), __LINE__);
        }
        $this->cdfField74 = $cdfField74;
        
        return $this;
    }
    /**
     * Get cdfField75 value
     * @return string|null
     */
    public function getCdfField75(): ?string
    {
        return $this->cdfField75;
    }
    /**
     * Set cdfField75 value
     * @param string $cdfField75
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField75(?string $cdfField75 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField75) && !is_string($cdfField75)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField75, true), gettype($cdfField75)), __LINE__);
        }
        $this->cdfField75 = $cdfField75;
        
        return $this;
    }
    /**
     * Get cdfField76 value
     * @return string|null
     */
    public function getCdfField76(): ?string
    {
        return $this->cdfField76;
    }
    /**
     * Set cdfField76 value
     * @param string $cdfField76
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField76(?string $cdfField76 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField76) && !is_string($cdfField76)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField76, true), gettype($cdfField76)), __LINE__);
        }
        $this->cdfField76 = $cdfField76;
        
        return $this;
    }
    /**
     * Get cdfField77 value
     * @return string|null
     */
    public function getCdfField77(): ?string
    {
        return $this->cdfField77;
    }
    /**
     * Set cdfField77 value
     * @param string $cdfField77
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField77(?string $cdfField77 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField77) && !is_string($cdfField77)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField77, true), gettype($cdfField77)), __LINE__);
        }
        $this->cdfField77 = $cdfField77;
        
        return $this;
    }
    /**
     * Get cdfField78 value
     * @return string|null
     */
    public function getCdfField78(): ?string
    {
        return $this->cdfField78;
    }
    /**
     * Set cdfField78 value
     * @param string $cdfField78
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField78(?string $cdfField78 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField78) && !is_string($cdfField78)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField78, true), gettype($cdfField78)), __LINE__);
        }
        $this->cdfField78 = $cdfField78;
        
        return $this;
    }
    /**
     * Get cdfField79 value
     * @return string|null
     */
    public function getCdfField79(): ?string
    {
        return $this->cdfField79;
    }
    /**
     * Set cdfField79 value
     * @param string $cdfField79
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField79(?string $cdfField79 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField79) && !is_string($cdfField79)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField79, true), gettype($cdfField79)), __LINE__);
        }
        $this->cdfField79 = $cdfField79;
        
        return $this;
    }
    /**
     * Get cdfField80 value
     * @return string|null
     */
    public function getCdfField80(): ?string
    {
        return $this->cdfField80;
    }
    /**
     * Set cdfField80 value
     * @param string $cdfField80
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField80(?string $cdfField80 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField80) && !is_string($cdfField80)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField80, true), gettype($cdfField80)), __LINE__);
        }
        $this->cdfField80 = $cdfField80;
        
        return $this;
    }
    /**
     * Get cdfField81 value
     * @return string|null
     */
    public function getCdfField81(): ?string
    {
        return $this->cdfField81;
    }
    /**
     * Set cdfField81 value
     * @param string $cdfField81
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField81(?string $cdfField81 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField81) && !is_string($cdfField81)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField81, true), gettype($cdfField81)), __LINE__);
        }
        $this->cdfField81 = $cdfField81;
        
        return $this;
    }
    /**
     * Get cdfField82 value
     * @return string|null
     */
    public function getCdfField82(): ?string
    {
        return $this->cdfField82;
    }
    /**
     * Set cdfField82 value
     * @param string $cdfField82
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField82(?string $cdfField82 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField82) && !is_string($cdfField82)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField82, true), gettype($cdfField82)), __LINE__);
        }
        $this->cdfField82 = $cdfField82;
        
        return $this;
    }
    /**
     * Get cdfField83 value
     * @return string|null
     */
    public function getCdfField83(): ?string
    {
        return $this->cdfField83;
    }
    /**
     * Set cdfField83 value
     * @param string $cdfField83
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField83(?string $cdfField83 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField83) && !is_string($cdfField83)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField83, true), gettype($cdfField83)), __LINE__);
        }
        $this->cdfField83 = $cdfField83;
        
        return $this;
    }
    /**
     * Get cdfField84 value
     * @return string|null
     */
    public function getCdfField84(): ?string
    {
        return $this->cdfField84;
    }
    /**
     * Set cdfField84 value
     * @param string $cdfField84
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField84(?string $cdfField84 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField84) && !is_string($cdfField84)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField84, true), gettype($cdfField84)), __LINE__);
        }
        $this->cdfField84 = $cdfField84;
        
        return $this;
    }
    /**
     * Get cdfField85 value
     * @return string|null
     */
    public function getCdfField85(): ?string
    {
        return $this->cdfField85;
    }
    /**
     * Set cdfField85 value
     * @param string $cdfField85
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField85(?string $cdfField85 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField85) && !is_string($cdfField85)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField85, true), gettype($cdfField85)), __LINE__);
        }
        $this->cdfField85 = $cdfField85;
        
        return $this;
    }
    /**
     * Get cdfField86 value
     * @return string|null
     */
    public function getCdfField86(): ?string
    {
        return $this->cdfField86;
    }
    /**
     * Set cdfField86 value
     * @param string $cdfField86
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField86(?string $cdfField86 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField86) && !is_string($cdfField86)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField86, true), gettype($cdfField86)), __LINE__);
        }
        $this->cdfField86 = $cdfField86;
        
        return $this;
    }
    /**
     * Get cdfField87 value
     * @return string|null
     */
    public function getCdfField87(): ?string
    {
        return $this->cdfField87;
    }
    /**
     * Set cdfField87 value
     * @param string $cdfField87
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField87(?string $cdfField87 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField87) && !is_string($cdfField87)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField87, true), gettype($cdfField87)), __LINE__);
        }
        $this->cdfField87 = $cdfField87;
        
        return $this;
    }
    /**
     * Get cdfField88 value
     * @return string|null
     */
    public function getCdfField88(): ?string
    {
        return $this->cdfField88;
    }
    /**
     * Set cdfField88 value
     * @param string $cdfField88
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField88(?string $cdfField88 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField88) && !is_string($cdfField88)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField88, true), gettype($cdfField88)), __LINE__);
        }
        $this->cdfField88 = $cdfField88;
        
        return $this;
    }
    /**
     * Get cdfField89 value
     * @return string|null
     */
    public function getCdfField89(): ?string
    {
        return $this->cdfField89;
    }
    /**
     * Set cdfField89 value
     * @param string $cdfField89
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField89(?string $cdfField89 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField89) && !is_string($cdfField89)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField89, true), gettype($cdfField89)), __LINE__);
        }
        $this->cdfField89 = $cdfField89;
        
        return $this;
    }
    /**
     * Get cdfField90 value
     * @return string|null
     */
    public function getCdfField90(): ?string
    {
        return $this->cdfField90;
    }
    /**
     * Set cdfField90 value
     * @param string $cdfField90
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField90(?string $cdfField90 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField90) && !is_string($cdfField90)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField90, true), gettype($cdfField90)), __LINE__);
        }
        $this->cdfField90 = $cdfField90;
        
        return $this;
    }
    /**
     * Get cdfField91 value
     * @return string|null
     */
    public function getCdfField91(): ?string
    {
        return $this->cdfField91;
    }
    /**
     * Set cdfField91 value
     * @param string $cdfField91
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField91(?string $cdfField91 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField91) && !is_string($cdfField91)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField91, true), gettype($cdfField91)), __LINE__);
        }
        $this->cdfField91 = $cdfField91;
        
        return $this;
    }
    /**
     * Get cdfField92 value
     * @return string|null
     */
    public function getCdfField92(): ?string
    {
        return $this->cdfField92;
    }
    /**
     * Set cdfField92 value
     * @param string $cdfField92
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField92(?string $cdfField92 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField92) && !is_string($cdfField92)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField92, true), gettype($cdfField92)), __LINE__);
        }
        $this->cdfField92 = $cdfField92;
        
        return $this;
    }
    /**
     * Get cdfField93 value
     * @return string|null
     */
    public function getCdfField93(): ?string
    {
        return $this->cdfField93;
    }
    /**
     * Set cdfField93 value
     * @param string $cdfField93
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField93(?string $cdfField93 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField93) && !is_string($cdfField93)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField93, true), gettype($cdfField93)), __LINE__);
        }
        $this->cdfField93 = $cdfField93;
        
        return $this;
    }
    /**
     * Get cdfField94 value
     * @return string|null
     */
    public function getCdfField94(): ?string
    {
        return $this->cdfField94;
    }
    /**
     * Set cdfField94 value
     * @param string $cdfField94
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField94(?string $cdfField94 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField94) && !is_string($cdfField94)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField94, true), gettype($cdfField94)), __LINE__);
        }
        $this->cdfField94 = $cdfField94;
        
        return $this;
    }
    /**
     * Get cdfField95 value
     * @return string|null
     */
    public function getCdfField95(): ?string
    {
        return $this->cdfField95;
    }
    /**
     * Set cdfField95 value
     * @param string $cdfField95
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField95(?string $cdfField95 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField95) && !is_string($cdfField95)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField95, true), gettype($cdfField95)), __LINE__);
        }
        $this->cdfField95 = $cdfField95;
        
        return $this;
    }
    /**
     * Get cdfField96 value
     * @return string|null
     */
    public function getCdfField96(): ?string
    {
        return $this->cdfField96;
    }
    /**
     * Set cdfField96 value
     * @param string $cdfField96
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField96(?string $cdfField96 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField96) && !is_string($cdfField96)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField96, true), gettype($cdfField96)), __LINE__);
        }
        $this->cdfField96 = $cdfField96;
        
        return $this;
    }
    /**
     * Get cdfField97 value
     * @return string|null
     */
    public function getCdfField97(): ?string
    {
        return $this->cdfField97;
    }
    /**
     * Set cdfField97 value
     * @param string $cdfField97
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField97(?string $cdfField97 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField97) && !is_string($cdfField97)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField97, true), gettype($cdfField97)), __LINE__);
        }
        $this->cdfField97 = $cdfField97;
        
        return $this;
    }
    /**
     * Get cdfField98 value
     * @return string|null
     */
    public function getCdfField98(): ?string
    {
        return $this->cdfField98;
    }
    /**
     * Set cdfField98 value
     * @param string $cdfField98
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField98(?string $cdfField98 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField98) && !is_string($cdfField98)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField98, true), gettype($cdfField98)), __LINE__);
        }
        $this->cdfField98 = $cdfField98;
        
        return $this;
    }
    /**
     * Get cdfField99 value
     * @return string|null
     */
    public function getCdfField99(): ?string
    {
        return $this->cdfField99;
    }
    /**
     * Set cdfField99 value
     * @param string $cdfField99
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField99(?string $cdfField99 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField99) && !is_string($cdfField99)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField99, true), gettype($cdfField99)), __LINE__);
        }
        $this->cdfField99 = $cdfField99;
        
        return $this;
    }
    /**
     * Get cdfField100 value
     * @return string|null
     */
    public function getCdfField100(): ?string
    {
        return $this->cdfField100;
    }
    /**
     * Set cdfField100 value
     * @param string $cdfField100
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField100(?string $cdfField100 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField100) && !is_string($cdfField100)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField100, true), gettype($cdfField100)), __LINE__);
        }
        $this->cdfField100 = $cdfField100;
        
        return $this;
    }
    /**
     * Get cdfField101 value
     * @return string|null
     */
    public function getCdfField101(): ?string
    {
        return $this->cdfField101;
    }
    /**
     * Set cdfField101 value
     * @param string $cdfField101
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField101(?string $cdfField101 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField101) && !is_string($cdfField101)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField101, true), gettype($cdfField101)), __LINE__);
        }
        $this->cdfField101 = $cdfField101;
        
        return $this;
    }
    /**
     * Get cdfField102 value
     * @return string|null
     */
    public function getCdfField102(): ?string
    {
        return $this->cdfField102;
    }
    /**
     * Set cdfField102 value
     * @param string $cdfField102
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField102(?string $cdfField102 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField102) && !is_string($cdfField102)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField102, true), gettype($cdfField102)), __LINE__);
        }
        $this->cdfField102 = $cdfField102;
        
        return $this;
    }
    /**
     * Get cdfField103 value
     * @return string|null
     */
    public function getCdfField103(): ?string
    {
        return $this->cdfField103;
    }
    /**
     * Set cdfField103 value
     * @param string $cdfField103
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField103(?string $cdfField103 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField103) && !is_string($cdfField103)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField103, true), gettype($cdfField103)), __LINE__);
        }
        $this->cdfField103 = $cdfField103;
        
        return $this;
    }
    /**
     * Get cdfField104 value
     * @return string|null
     */
    public function getCdfField104(): ?string
    {
        return $this->cdfField104;
    }
    /**
     * Set cdfField104 value
     * @param string $cdfField104
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField104(?string $cdfField104 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField104) && !is_string($cdfField104)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField104, true), gettype($cdfField104)), __LINE__);
        }
        $this->cdfField104 = $cdfField104;
        
        return $this;
    }
    /**
     * Get cdfField105 value
     * @return string|null
     */
    public function getCdfField105(): ?string
    {
        return $this->cdfField105;
    }
    /**
     * Set cdfField105 value
     * @param string $cdfField105
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField105(?string $cdfField105 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField105) && !is_string($cdfField105)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField105, true), gettype($cdfField105)), __LINE__);
        }
        $this->cdfField105 = $cdfField105;
        
        return $this;
    }
    /**
     * Get cdfField106 value
     * @return string|null
     */
    public function getCdfField106(): ?string
    {
        return $this->cdfField106;
    }
    /**
     * Set cdfField106 value
     * @param string $cdfField106
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField106(?string $cdfField106 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField106) && !is_string($cdfField106)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField106, true), gettype($cdfField106)), __LINE__);
        }
        $this->cdfField106 = $cdfField106;
        
        return $this;
    }
    /**
     * Get cdfField107 value
     * @return string|null
     */
    public function getCdfField107(): ?string
    {
        return $this->cdfField107;
    }
    /**
     * Set cdfField107 value
     * @param string $cdfField107
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField107(?string $cdfField107 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField107) && !is_string($cdfField107)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField107, true), gettype($cdfField107)), __LINE__);
        }
        $this->cdfField107 = $cdfField107;
        
        return $this;
    }
    /**
     * Get cdfField108 value
     * @return string|null
     */
    public function getCdfField108(): ?string
    {
        return $this->cdfField108;
    }
    /**
     * Set cdfField108 value
     * @param string $cdfField108
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField108(?string $cdfField108 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField108) && !is_string($cdfField108)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField108, true), gettype($cdfField108)), __LINE__);
        }
        $this->cdfField108 = $cdfField108;
        
        return $this;
    }
    /**
     * Get cdfField109 value
     * @return string|null
     */
    public function getCdfField109(): ?string
    {
        return $this->cdfField109;
    }
    /**
     * Set cdfField109 value
     * @param string $cdfField109
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField109(?string $cdfField109 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField109) && !is_string($cdfField109)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField109, true), gettype($cdfField109)), __LINE__);
        }
        $this->cdfField109 = $cdfField109;
        
        return $this;
    }
    /**
     * Get cdfField110 value
     * @return string|null
     */
    public function getCdfField110(): ?string
    {
        return $this->cdfField110;
    }
    /**
     * Set cdfField110 value
     * @param string $cdfField110
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField110(?string $cdfField110 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField110) && !is_string($cdfField110)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField110, true), gettype($cdfField110)), __LINE__);
        }
        $this->cdfField110 = $cdfField110;
        
        return $this;
    }
    /**
     * Get cdfField111 value
     * @return string|null
     */
    public function getCdfField111(): ?string
    {
        return $this->cdfField111;
    }
    /**
     * Set cdfField111 value
     * @param string $cdfField111
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField111(?string $cdfField111 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField111) && !is_string($cdfField111)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField111, true), gettype($cdfField111)), __LINE__);
        }
        $this->cdfField111 = $cdfField111;
        
        return $this;
    }
    /**
     * Get cdfField112 value
     * @return string|null
     */
    public function getCdfField112(): ?string
    {
        return $this->cdfField112;
    }
    /**
     * Set cdfField112 value
     * @param string $cdfField112
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField112(?string $cdfField112 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField112) && !is_string($cdfField112)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField112, true), gettype($cdfField112)), __LINE__);
        }
        $this->cdfField112 = $cdfField112;
        
        return $this;
    }
    /**
     * Get cdfField113 value
     * @return string|null
     */
    public function getCdfField113(): ?string
    {
        return $this->cdfField113;
    }
    /**
     * Set cdfField113 value
     * @param string $cdfField113
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField113(?string $cdfField113 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField113) && !is_string($cdfField113)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField113, true), gettype($cdfField113)), __LINE__);
        }
        $this->cdfField113 = $cdfField113;
        
        return $this;
    }
    /**
     * Get cdfField114 value
     * @return string|null
     */
    public function getCdfField114(): ?string
    {
        return $this->cdfField114;
    }
    /**
     * Set cdfField114 value
     * @param string $cdfField114
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField114(?string $cdfField114 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField114) && !is_string($cdfField114)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField114, true), gettype($cdfField114)), __LINE__);
        }
        $this->cdfField114 = $cdfField114;
        
        return $this;
    }
    /**
     * Get cdfField115 value
     * @return string|null
     */
    public function getCdfField115(): ?string
    {
        return $this->cdfField115;
    }
    /**
     * Set cdfField115 value
     * @param string $cdfField115
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField115(?string $cdfField115 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField115) && !is_string($cdfField115)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField115, true), gettype($cdfField115)), __LINE__);
        }
        $this->cdfField115 = $cdfField115;
        
        return $this;
    }
    /**
     * Get cdfField116 value
     * @return string|null
     */
    public function getCdfField116(): ?string
    {
        return $this->cdfField116;
    }
    /**
     * Set cdfField116 value
     * @param string $cdfField116
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField116(?string $cdfField116 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField116) && !is_string($cdfField116)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField116, true), gettype($cdfField116)), __LINE__);
        }
        $this->cdfField116 = $cdfField116;
        
        return $this;
    }
    /**
     * Get cdfField117 value
     * @return string|null
     */
    public function getCdfField117(): ?string
    {
        return $this->cdfField117;
    }
    /**
     * Set cdfField117 value
     * @param string $cdfField117
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField117(?string $cdfField117 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField117) && !is_string($cdfField117)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField117, true), gettype($cdfField117)), __LINE__);
        }
        $this->cdfField117 = $cdfField117;
        
        return $this;
    }
    /**
     * Get cdfField118 value
     * @return string|null
     */
    public function getCdfField118(): ?string
    {
        return $this->cdfField118;
    }
    /**
     * Set cdfField118 value
     * @param string $cdfField118
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField118(?string $cdfField118 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField118) && !is_string($cdfField118)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField118, true), gettype($cdfField118)), __LINE__);
        }
        $this->cdfField118 = $cdfField118;
        
        return $this;
    }
    /**
     * Get cdfField119 value
     * @return string|null
     */
    public function getCdfField119(): ?string
    {
        return $this->cdfField119;
    }
    /**
     * Set cdfField119 value
     * @param string $cdfField119
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField119(?string $cdfField119 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField119) && !is_string($cdfField119)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField119, true), gettype($cdfField119)), __LINE__);
        }
        $this->cdfField119 = $cdfField119;
        
        return $this;
    }
    /**
     * Get cdfField120 value
     * @return string|null
     */
    public function getCdfField120(): ?string
    {
        return $this->cdfField120;
    }
    /**
     * Set cdfField120 value
     * @param string $cdfField120
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField120(?string $cdfField120 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField120) && !is_string($cdfField120)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField120, true), gettype($cdfField120)), __LINE__);
        }
        $this->cdfField120 = $cdfField120;
        
        return $this;
    }
    /**
     * Get cdfField121 value
     * @return string|null
     */
    public function getCdfField121(): ?string
    {
        return $this->cdfField121;
    }
    /**
     * Set cdfField121 value
     * @param string $cdfField121
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField121(?string $cdfField121 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField121) && !is_string($cdfField121)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField121, true), gettype($cdfField121)), __LINE__);
        }
        $this->cdfField121 = $cdfField121;
        
        return $this;
    }
    /**
     * Get cdfField122 value
     * @return string|null
     */
    public function getCdfField122(): ?string
    {
        return $this->cdfField122;
    }
    /**
     * Set cdfField122 value
     * @param string $cdfField122
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField122(?string $cdfField122 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField122) && !is_string($cdfField122)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField122, true), gettype($cdfField122)), __LINE__);
        }
        $this->cdfField122 = $cdfField122;
        
        return $this;
    }
    /**
     * Get cdfField123 value
     * @return string|null
     */
    public function getCdfField123(): ?string
    {
        return $this->cdfField123;
    }
    /**
     * Set cdfField123 value
     * @param string $cdfField123
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField123(?string $cdfField123 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField123) && !is_string($cdfField123)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField123, true), gettype($cdfField123)), __LINE__);
        }
        $this->cdfField123 = $cdfField123;
        
        return $this;
    }
    /**
     * Get cdfField124 value
     * @return string|null
     */
    public function getCdfField124(): ?string
    {
        return $this->cdfField124;
    }
    /**
     * Set cdfField124 value
     * @param string $cdfField124
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField124(?string $cdfField124 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField124) && !is_string($cdfField124)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField124, true), gettype($cdfField124)), __LINE__);
        }
        $this->cdfField124 = $cdfField124;
        
        return $this;
    }
    /**
     * Get cdfField125 value
     * @return string|null
     */
    public function getCdfField125(): ?string
    {
        return $this->cdfField125;
    }
    /**
     * Set cdfField125 value
     * @param string $cdfField125
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField125(?string $cdfField125 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField125) && !is_string($cdfField125)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField125, true), gettype($cdfField125)), __LINE__);
        }
        $this->cdfField125 = $cdfField125;
        
        return $this;
    }
    /**
     * Get cdfField126 value
     * @return string|null
     */
    public function getCdfField126(): ?string
    {
        return $this->cdfField126;
    }
    /**
     * Set cdfField126 value
     * @param string $cdfField126
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField126(?string $cdfField126 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField126) && !is_string($cdfField126)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField126, true), gettype($cdfField126)), __LINE__);
        }
        $this->cdfField126 = $cdfField126;
        
        return $this;
    }
    /**
     * Get cdfField127 value
     * @return string|null
     */
    public function getCdfField127(): ?string
    {
        return $this->cdfField127;
    }
    /**
     * Set cdfField127 value
     * @param string $cdfField127
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField127(?string $cdfField127 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField127) && !is_string($cdfField127)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField127, true), gettype($cdfField127)), __LINE__);
        }
        $this->cdfField127 = $cdfField127;
        
        return $this;
    }
    /**
     * Get cdfField128 value
     * @return string|null
     */
    public function getCdfField128(): ?string
    {
        return $this->cdfField128;
    }
    /**
     * Set cdfField128 value
     * @param string $cdfField128
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField128(?string $cdfField128 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField128) && !is_string($cdfField128)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField128, true), gettype($cdfField128)), __LINE__);
        }
        $this->cdfField128 = $cdfField128;
        
        return $this;
    }
    /**
     * Get cdfField129 value
     * @return string|null
     */
    public function getCdfField129(): ?string
    {
        return $this->cdfField129;
    }
    /**
     * Set cdfField129 value
     * @param string $cdfField129
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField129(?string $cdfField129 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField129) && !is_string($cdfField129)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField129, true), gettype($cdfField129)), __LINE__);
        }
        $this->cdfField129 = $cdfField129;
        
        return $this;
    }
    /**
     * Get cdfField130 value
     * @return string|null
     */
    public function getCdfField130(): ?string
    {
        return $this->cdfField130;
    }
    /**
     * Set cdfField130 value
     * @param string $cdfField130
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField130(?string $cdfField130 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField130) && !is_string($cdfField130)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField130, true), gettype($cdfField130)), __LINE__);
        }
        $this->cdfField130 = $cdfField130;
        
        return $this;
    }
    /**
     * Get cdfField131 value
     * @return string|null
     */
    public function getCdfField131(): ?string
    {
        return $this->cdfField131;
    }
    /**
     * Set cdfField131 value
     * @param string $cdfField131
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField131(?string $cdfField131 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField131) && !is_string($cdfField131)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField131, true), gettype($cdfField131)), __LINE__);
        }
        $this->cdfField131 = $cdfField131;
        
        return $this;
    }
    /**
     * Get cdfField132 value
     * @return string|null
     */
    public function getCdfField132(): ?string
    {
        return $this->cdfField132;
    }
    /**
     * Set cdfField132 value
     * @param string $cdfField132
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField132(?string $cdfField132 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField132) && !is_string($cdfField132)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField132, true), gettype($cdfField132)), __LINE__);
        }
        $this->cdfField132 = $cdfField132;
        
        return $this;
    }
    /**
     * Get cdfField133 value
     * @return string|null
     */
    public function getCdfField133(): ?string
    {
        return $this->cdfField133;
    }
    /**
     * Set cdfField133 value
     * @param string $cdfField133
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField133(?string $cdfField133 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField133) && !is_string($cdfField133)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField133, true), gettype($cdfField133)), __LINE__);
        }
        $this->cdfField133 = $cdfField133;
        
        return $this;
    }
    /**
     * Get cdfField134 value
     * @return string|null
     */
    public function getCdfField134(): ?string
    {
        return $this->cdfField134;
    }
    /**
     * Set cdfField134 value
     * @param string $cdfField134
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField134(?string $cdfField134 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField134) && !is_string($cdfField134)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField134, true), gettype($cdfField134)), __LINE__);
        }
        $this->cdfField134 = $cdfField134;
        
        return $this;
    }
    /**
     * Get cdfField135 value
     * @return string|null
     */
    public function getCdfField135(): ?string
    {
        return $this->cdfField135;
    }
    /**
     * Set cdfField135 value
     * @param string $cdfField135
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField135(?string $cdfField135 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField135) && !is_string($cdfField135)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField135, true), gettype($cdfField135)), __LINE__);
        }
        $this->cdfField135 = $cdfField135;
        
        return $this;
    }
    /**
     * Get cdfField136 value
     * @return string|null
     */
    public function getCdfField136(): ?string
    {
        return $this->cdfField136;
    }
    /**
     * Set cdfField136 value
     * @param string $cdfField136
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField136(?string $cdfField136 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField136) && !is_string($cdfField136)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField136, true), gettype($cdfField136)), __LINE__);
        }
        $this->cdfField136 = $cdfField136;
        
        return $this;
    }
    /**
     * Get cdfField137 value
     * @return string|null
     */
    public function getCdfField137(): ?string
    {
        return $this->cdfField137;
    }
    /**
     * Set cdfField137 value
     * @param string $cdfField137
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField137(?string $cdfField137 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField137) && !is_string($cdfField137)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField137, true), gettype($cdfField137)), __LINE__);
        }
        $this->cdfField137 = $cdfField137;
        
        return $this;
    }
    /**
     * Get cdfField138 value
     * @return string|null
     */
    public function getCdfField138(): ?string
    {
        return $this->cdfField138;
    }
    /**
     * Set cdfField138 value
     * @param string $cdfField138
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField138(?string $cdfField138 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField138) && !is_string($cdfField138)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField138, true), gettype($cdfField138)), __LINE__);
        }
        $this->cdfField138 = $cdfField138;
        
        return $this;
    }
    /**
     * Get cdfField139 value
     * @return string|null
     */
    public function getCdfField139(): ?string
    {
        return $this->cdfField139;
    }
    /**
     * Set cdfField139 value
     * @param string $cdfField139
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField139(?string $cdfField139 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField139) && !is_string($cdfField139)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField139, true), gettype($cdfField139)), __LINE__);
        }
        $this->cdfField139 = $cdfField139;
        
        return $this;
    }
    /**
     * Get cdfField140 value
     * @return string|null
     */
    public function getCdfField140(): ?string
    {
        return $this->cdfField140;
    }
    /**
     * Set cdfField140 value
     * @param string $cdfField140
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField140(?string $cdfField140 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField140) && !is_string($cdfField140)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField140, true), gettype($cdfField140)), __LINE__);
        }
        $this->cdfField140 = $cdfField140;
        
        return $this;
    }
    /**
     * Get cdfField141 value
     * @return string|null
     */
    public function getCdfField141(): ?string
    {
        return $this->cdfField141;
    }
    /**
     * Set cdfField141 value
     * @param string $cdfField141
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField141(?string $cdfField141 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField141) && !is_string($cdfField141)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField141, true), gettype($cdfField141)), __LINE__);
        }
        $this->cdfField141 = $cdfField141;
        
        return $this;
    }
    /**
     * Get cdfField142 value
     * @return string|null
     */
    public function getCdfField142(): ?string
    {
        return $this->cdfField142;
    }
    /**
     * Set cdfField142 value
     * @param string $cdfField142
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField142(?string $cdfField142 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField142) && !is_string($cdfField142)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField142, true), gettype($cdfField142)), __LINE__);
        }
        $this->cdfField142 = $cdfField142;
        
        return $this;
    }
    /**
     * Get cdfField143 value
     * @return string|null
     */
    public function getCdfField143(): ?string
    {
        return $this->cdfField143;
    }
    /**
     * Set cdfField143 value
     * @param string $cdfField143
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField143(?string $cdfField143 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField143) && !is_string($cdfField143)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField143, true), gettype($cdfField143)), __LINE__);
        }
        $this->cdfField143 = $cdfField143;
        
        return $this;
    }
    /**
     * Get cdfField144 value
     * @return string|null
     */
    public function getCdfField144(): ?string
    {
        return $this->cdfField144;
    }
    /**
     * Set cdfField144 value
     * @param string $cdfField144
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField144(?string $cdfField144 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField144) && !is_string($cdfField144)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField144, true), gettype($cdfField144)), __LINE__);
        }
        $this->cdfField144 = $cdfField144;
        
        return $this;
    }
    /**
     * Get cdfField145 value
     * @return string|null
     */
    public function getCdfField145(): ?string
    {
        return $this->cdfField145;
    }
    /**
     * Set cdfField145 value
     * @param string $cdfField145
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField145(?string $cdfField145 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField145) && !is_string($cdfField145)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField145, true), gettype($cdfField145)), __LINE__);
        }
        $this->cdfField145 = $cdfField145;
        
        return $this;
    }
    /**
     * Get cdfField146 value
     * @return string|null
     */
    public function getCdfField146(): ?string
    {
        return $this->cdfField146;
    }
    /**
     * Set cdfField146 value
     * @param string $cdfField146
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField146(?string $cdfField146 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField146) && !is_string($cdfField146)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField146, true), gettype($cdfField146)), __LINE__);
        }
        $this->cdfField146 = $cdfField146;
        
        return $this;
    }
    /**
     * Get cdfField147 value
     * @return string|null
     */
    public function getCdfField147(): ?string
    {
        return $this->cdfField147;
    }
    /**
     * Set cdfField147 value
     * @param string $cdfField147
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField147(?string $cdfField147 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField147) && !is_string($cdfField147)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField147, true), gettype($cdfField147)), __LINE__);
        }
        $this->cdfField147 = $cdfField147;
        
        return $this;
    }
    /**
     * Get cdfField148 value
     * @return string|null
     */
    public function getCdfField148(): ?string
    {
        return $this->cdfField148;
    }
    /**
     * Set cdfField148 value
     * @param string $cdfField148
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField148(?string $cdfField148 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField148) && !is_string($cdfField148)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField148, true), gettype($cdfField148)), __LINE__);
        }
        $this->cdfField148 = $cdfField148;
        
        return $this;
    }
    /**
     * Get cdfField149 value
     * @return string|null
     */
    public function getCdfField149(): ?string
    {
        return $this->cdfField149;
    }
    /**
     * Set cdfField149 value
     * @param string $cdfField149
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField149(?string $cdfField149 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField149) && !is_string($cdfField149)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField149, true), gettype($cdfField149)), __LINE__);
        }
        $this->cdfField149 = $cdfField149;
        
        return $this;
    }
    /**
     * Get cdfField150 value
     * @return string|null
     */
    public function getCdfField150(): ?string
    {
        return $this->cdfField150;
    }
    /**
     * Set cdfField150 value
     * @param string $cdfField150
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoBillingDataListType
     */
    public function setCdfField150(?string $cdfField150 = null): self
    {
        // validation for constraint: string
        if (!is_null($cdfField150) && !is_string($cdfField150)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cdfField150, true), gettype($cdfField150)), __LINE__);
        }
        $this->cdfField150 = $cdfField150;
        
        return $this;
    }
}
