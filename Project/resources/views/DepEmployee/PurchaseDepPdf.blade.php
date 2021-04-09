<html>

<head>
    <style>
#invoice{
    padding: 30px;
}

.invoice {
    position: relative;
    background-color: #FFF;
    min-height: 680px;
    padding: 15px
}

.invoice header {
    padding: 10px 0;
    margin-bottom: 20px;
    border-bottom: 1px solid #3989c6
}

.invoice .company-details {
    text-align: right
}

.invoice .company-details .name {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .contacts {
    margin-bottom: 20px
}

.invoice .invoice-to {
    text-align: left
}

.invoice .invoice-to .to {
    margin-top: 0;
    margin-bottom: 0
}

.invoice .invoice-details {
    text-align: right
}

.invoice .invoice-details .invoice-id {
    margin-top: 0;
    color: #3989c6
}

.invoice main {
    padding-bottom: 50px
}

.invoice main .thanks {
    margin-top: -100px;
    font-size: 2em;
    margin-bottom: 50px
}

.invoice main .notices {
    padding-left: 6px;
    border-left: 6px solid #3989c6
}

.invoice main .notices .notice {
    font-size: 1.2em
}

.invoice table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    margin-bottom: 20px
}

.invoice table td,.invoice table th {
    padding: 15px;
    background: #eee;
    border-bottom: 1px solid #fff
}

.invoice table th {
    white-space: nowrap;
    font-weight: 400;
    font-size: 16px
}

.invoice table td h3 {
    margin: 0;
    font-weight: 400;
    color: #3989c6;
    font-size: 1.2em
}

.invoice table .qty,.invoice table .total,.invoice table .unit {
    text-align: right;
    font-size: 1.2em
}

.invoice table .no {
    color: #fff;
    font-size: 1.6em;
    background: #3989c6
}

.invoice table .unit {
    background: #ddd
}

.invoice table .total {
    background: #3989c6;
    color: #fff
}

.invoice table tbody tr:last-child td {
    border: none
}

.invoice table tfoot td {
    background: 0 0;
    border-bottom: none;
    white-space: nowrap;
    text-align: right;
    padding: 10px 20px;
    font-size: 1.2em;
    border-top: 1px solid #aaa
}

.invoice table tfoot tr:first-child td {
    border-top: none
}

.invoice table tfoot tr:last-child td {
    color: #3989c6;
    font-size: 1.4em;
    border-top: 1px solid #3989c6
}

.invoice table tfoot tr td:first-child {
    border: none
}

.invoice footer {
    width: 100%;
    text-align: center;
    color: #777;
    border-top: 1px solid #aaa;
    padding: 8px 0
}

@media print {
    .invoice {
        font-size: 11px!important;
        overflow: hidden!important
    }

    .invoice footer {
        position: absolute;
        bottom: 10px;
        page-break-after: always
    }

    .invoice>div:last-child {
        page-break-before: always
    }
}
    </style>
</head>

<body>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!--Author      : @arboshiki-->
<div id="invoice">

    <div class="toolbar hidden-print">
    </div>
    <div class="invoice overflow-auto">
        <div style="min-width: 600px">
            <header>
                <div class="row">
                    <div class="col">
                        <a target="_blank" href="https://lobianijs.com">
                            <img src="http://lobianijs.com/lobiadmin/version/1.0/ajax/img/logo/lobiadmin-logo-text-64.png" data-holder-rendered="true" />
                            </a>
                    </div>
                    <div class="col company-details">
                        <h2 class="name">
                            <a target="_blank" href="https://lobianijs.com">
                            บริษัท กู๊ดลีฟวิ่ง สไตล์ จำกัด
                            </a>
                        </h2>
                        <div>เลขที่ 18/45 หมู่2 ถนนศีนครินท์ ต.บางแก้ว อ.บางพลี จ.สมุทรปราการ 10540</div>
                        <div>โทร. 061-463-9635 แฟกซ์ 02-383-3860 E-mail ai-gls@hotmail.com </div>
                        <div>เลขประจำตัวผู้เสียภาษีอากร 0115558010281</div>
                    </div>
                </div>
            </header>
            <main>
                <div class="row contacts">
                    <div class="col invoice-to">
                        <div class="text-gray-light">INVOICE TO:</div>
                        <h2 class="to">{{App\Partner::find($purchasss->Partner_Id)->Partner_Name}}</h2>
                        <div class="address">{{App\Partner::find($purchasss->Partner_Id)->Partner_Address}}</div>
                        <div class="tel">{{App\Partner::find($purchasss->Partner_Id)->Partner_Tel}}</div>
                    </div>
                    <div class="col invoice-details">
                        <h1 class="invoice-id">INVOICE : {{$purchasss->idpur}}</h1>
                        <div class="date">Date of Invoice: {{$purchasss->Purchase_Date}}</div>
                    </div>
                </div>
                <table border="0" cellspacing="0" cellpadding="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="text-left">รายละเอียดการสั่งซื้อ</th>
                            <th class="text-right">หน่วย</th>
                            <th class="text-right">จำนวน</th>
                            <th class="text-right">ราคาต่อหน่วย</th>
                            <th class="text-right">ราคารวม</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($purchaspdf as $purchaspdff )
                        <tr>
                            <td class="no">{{$purchaspdff->Purchase_Id}}</td>
                            <td class="text-left"><h3>
                                <?php
                                    $materialss = App\Materials::find($purchaspdff->Material_Id);
                                ?>
                                {{$materialss->idmat}}
                                {{$materialss->Material_Name}}
                                <br>
                                </h3></td>
                            <td class="unit"><?php
                                $materialss = App\Materials::find($purchaspdff->Material_Id);
                            ?>

                            {{$materialss->unitmaterial}}
                            <br></td>
                            <td class="qty">{{$purchaspdff->Pdetail_Amount}}</td>
                            <td class="qty">{{$purchaspdff->Pdetail_Money}}</td>
                            @php
                            $money = $purchaspdff->Pdetail_Amount * $purchaspdff->Pdetail_Money
                        @endphp
                            <td class="total">
                                {{$money}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    @php
                        $Purtotal = 0;
                    @endphp
                    @foreach ( $purchaspdf as $purchaspdff  )
                    <?php $Purtotal +=  $purchaspdff->Pdetail_Money * $purchaspdff->Pdetail_Amount ?>
                    @endforeach
                    <tfoot>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">SUBTOTAL</td>
                            <td>{{$Purtotal}}</td>
                        </tr>
                        <tfoot>
                </table>
            </main>
        </div>
        <div class="text-right">
            <button id="printInvoice" class="btn btn-info"><i class="fa fa-print"></i> พิมพ์ใบสั่งซื้อ</button>
            <a href="{{route('Purshow')}}" class="btn btn-info"><i class="fa fa-file-pdf-o"></i> เสร็จสิ้น </a>
        </div>
    </div>
</div>

</body>
</html>
<script>
    $('#printInvoice').click(function(){
        Popup($('.invoice')[0].outerHTML);
        function Popup(data)
        {
            window.print();
            return true;
        }
    });
</script>
