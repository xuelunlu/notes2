<?php include('top.php'); ?>
<div class="row">
	<div class="col-md-6">
		<ul>
			<li><a target="_blank" href="https://vendor-stage.ecpay.com.tw">測試機後台</a></li>
			<li>StageTest / test1234</li>
			<li>4311-9522-2222-2222 / 222</li>
		</ul>
	</div>
	<div class="col-md-12">
		<ul>
			<li>信用卡付款只會回傳付款完成資料.</li>
			<li>receive:{"CustomField1":"","CustomField2":"","CustomField3":"","CustomField4":"","MerchantID":"2000132","MerchantTradeNo":"A1540875281","PaymentDate":"2018\/10\/30 12:56:01","PaymentType":"Credit_CreditCard","PaymentTypeChargeFee":"1","RtnCode":"1","RtnMsg":"\u4ea4\u6613\u6210\u529f","SimulatePaid":"0","StoreID":"","TradeAmt":"2000","TradeDate":"2018\/10\/30 12:54:41","TradeNo":"1810301254410161","CheckMacValue":"BBBD5F9EECF07354921B71DD62F5B54CA572C0A5DCE41159DFAA84EA52C97DD1"}</li>
			<li>網路ATM付款只會回傳付款完成資料.</li>
			<li>receive:{"CustomField1":"","CustomField2":"","CustomField3":"","CustomField4":"","MerchantID":"2000132","MerchantTradeNo":"A1540880703","PaymentDate":"2018\/10\/30 14:25:27","PaymentType":"WebATM_LAND","PaymentTypeChargeFee":"5","RtnCode":"1","RtnMsg":"\u4ea4\u6613\u6210\u529f","SimulatePaid":"0","StoreID":"","TradeAmt":"2000","TradeDate":"2018\/10\/30 14:25:03","TradeNo":"1810301425030508","CheckMacValue":"2E49C50869E794A32A02F4756441DBAD01A75B7B2A0AF3712EB9723044FB7583"}</li>
			<li>一般ATM付款.</li>
			<li>receive:{"PaymentType":"ATM_BOT","RtnMsg":"\u4ed8\u6b3e\u6210\u529f","SimulatePaid":"1","CustomField2":"","PaymentDate":"2018\/10\/30 14:32:03","TradeNo":"1810301425490516","TradeAmt":"2000","MerchantID":"2000132","StoreID":"","CustomField3":"","MerchantTradeNo":"A1540880749","CustomField4":"","CheckMacValue":"E52D6B22A7FEA84E96E6E479B5A82E2CC4436A5419EB4308B233DFF0B62EC02C","TradeDate":"2018\/10\/30 14:25:49","CustomField1":"","RtnCode":"1","PaymentTypeChargeFee":"0"}</li>
			<li>payment_info:{"BankCode":"004","ExpireDate":"2018\/11\/02","MerchantID":"2000132","MerchantTradeNo":"A1540880749","PaymentType":"ATM_BOT","RtnCode":"2","RtnMsg":"Get VirtualAccount Succeeded","TradeAmt":"2000","TradeDate":"2018\/10\/30 14:27:39","TradeNo":"1810301425490516","vAccount":"3833218306347692","StoreID":"","CustomField1":"","CustomField2":"","CustomField3":"","CustomField4":"","CheckMacValue":"19C3FBCA5C5A63D37BAA9B7AB6E50DE260FA8DC941DEE0B2619F7A359DC86C51"}</li>
			<li>超商條碼.</li>
			<li>receive:{"PaymentType":"BARCODE_BARCODE","RtnMsg":"\u4ed8\u6b3e\u6210\u529f","SimulatePaid":"1","CustomField2":"","PaymentDate":"2018\/10\/30 14:42:01","TradeNo":"1810301438080567","TradeAmt":"2000","MerchantID":"2000132","StoreID":"","CustomField3":"","MerchantTradeNo":"A1540881488","CustomField4":"","CheckMacValue":"D06632E8EACDC4A45F91C714346FB79D595B17E1DA50223F46501CFEC3313235","TradeDate":"2018\/10\/30 14:38:08","CustomField1":"","RtnCode":"1","PaymentTypeChargeFee":"15"}</li>
			<li>payment_info:{"Barcode1":"0711066EA","Barcode2":"3453010191918357","Barcode3":"103079000002000","ExpireDate":"2018\/11\/06 14:38:19","MerchantID":"2000132","MerchantTradeNo":"A1540881488","PaymentNo":"","PaymentType":"BARCODE_BARCODE","RtnCode":"10100073","RtnMsg":"Get CVS Code Succeeded.","TradeAmt":"2000","TradeDate":"2018\/10\/30 14:38:19","TradeNo":"1810301438080567","StoreID":"","CustomField1":"","CustomField2":"","CustomField3":"","CustomField4":"","CheckMacValue":"B14890A5A0E84CC934CF1EFF860E98990DE9E02728329256C3778E4E3FD17836"}</li>
			<li>超商代碼.</li>
			<li>receive:{"PaymentType":"CVS_CVS","RtnMsg":"\u4ed8\u6b3e\u6210\u529f","SimulatePaid":"1","CustomField2":"","PaymentDate":"2018\/10\/30 14:46:11","TradeNo":"1810301443040588","TradeAmt":"2000","MerchantID":"2000132","StoreID":"","CustomField3":"","MerchantTradeNo":"A1540881784","CustomField4":"","CheckMacValue":"B60BD08D0F614937361CE2236794B7411B53786470255A8FA002BA20E89FA7D1","TradeDate":"2018\/10\/30 14:43:04","CustomField1":"","RtnCode":"1","PaymentTypeChargeFee":"30"}</li>
			<li>payment_info:{"Barcode1":"","Barcode2":"","Barcode3":"","ExpireDate":"2018\/11\/06 14:43:24","MerchantID":"2000132","MerchantTradeNo":"A1540881784","PaymentNo":"LLL18303622348","PaymentType":"CVS_CVS","RtnCode":"10100073","RtnMsg":"Get CVS Code Succeeded.","TradeAmt":"2000","TradeDate":"2018\/10\/30 14:43:24","TradeNo":"1810301443040588","StoreID":"","CustomField1":"","CustomField2":"","CustomField3":"","CustomField4":"","CheckMacValue":"87D8F947D81497ADE002E10A19D367634ADF102B913DDB956797D879E2C9F600"}</li>
		</ul>
	</div>
</div>
<?php include('bottom.php'); ?>