<head>
	<title>Simple invoice in PHP</title>
		<style type="text/css">
		body {
			font-family: Verdana;
		}

		div.invoice {
		border:1px solid #ccc;
		padding:10px;
		height:740pt;
		width:570pt;
		}

		div.company-address {
			border:1px solid #ccc;
			float:left;
			width:200pt;
		}

		div.invoice-details {
			border:1px solid #ccc;
			float:right;
			width:200pt;
		}

		div.customer-address {
			border:1px solid #ccc;
			float:right;
			margin-bottom:50px;
			margin-top:100px;
			width:200pt;
		}

		div.clear-fix {
			clear:both;
			float:none;
		}

		table {
			width:100%;
		}

		th {
			text-align: left;
		}

		td {
		}

		.text-left {
			text-align:left;
		}

		.text-center {
			text-align:center;
		}

		.text-right {
			text-align:right;
		}

		</style>
	</head>

	<body>
	<div class="invoice">
		<div class="company-address">
			ACME ltd
			<br />
			489 Road Street
			<br />
			London, AF3Z 7BP
			<br />
		</div>

		<div class="invoice-details">
			Invoice N°: 564
			<br />
			Date: 24/01/2012
		</div>

		<div class="customer-address">
			To:
			<br />

			<br />
			123 Long Street
			<br />
			London, DC3P F3Z
			<br />
		</div>

		<div class="clear-fix"></div>
			<table border='1' cellspacing='0'>
				<thead>
                    <tr>
                        <th>ชื่อวัตถุดิบ</th>
                        <th>จำนวน</th>
                        <th>หน่วย</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($purchaspdf as $Pur)
                <tr>
                    <td>{{App\Materials::find($Pur->Material_Id)->Material_Name}}</td>
                    <td>{{App\PurchaseOrderDetail::find($Pur->Pdetail_Id)->Pdetail_Amount}}</td>
                    <td>{{App\Materials::find($Pur->Material_Id)->unitmaterial}}</td>

                </tr>
                @endforeach
            </tbody>
                {{-- <tr>
                    <td>{{$Pur->Purchase_Id}}</td>
                    <td>{{$Pur->Purchase_Date}}</td>
                    <td>{{App\Employee::find($Pur->Emp_Id)->Fname}}</td>
                    <td>{{App\Partner::find($Pur->Partner_Id)->Partner_Name}}</td>
                    <td>{{$Pur->Purchase_Status}}</td>

                </tr> --}}
			</table>
		</div>
	</body>

</html>

