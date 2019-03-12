<?php include 'top.php';?>
<div class="row">
	<div class="col-md-2">
		<h5 class="text-info">找出最耗費CPU與記憶體資源的程式</h5>
		<ul>
			<li>top</li>
			<li>按q可離開.</li>
		</ul>
	</div>
	<div class="col-md-2">
		<h5 class="text-info">清空檔案的方式</h5>
		<ul>
			<li>cat /dev/null > /var/log/[記錄檔檔名]</li>
		</ul>
	</div>
	<div class="col-md-4">
		<h5 class="text-info">建立軟連結</h5>
		<ul>
			<li>ln -s 源文件 目標文件</li>
			<li>ln -s /opt/rh/rh-php70/root/usr/bin/php /usr/bin/php</li>
		</ul>
	</div>
	<div class="col-md-2">
		<h5 class="text-info">解壓縮</h5>
		<ul>
			<li>壓縮：tar -zcvf xxx.tar.gz 資料夾</li>
			<li>解壓：tar -zxvf xxx.tar.gz</li>
		</ul>
	</div>
	<div class="col-md-2">
		<h5 class="text-info">程序</h5>
		<ul>
			<li>查程序：ps</li>
			<li>查程序：ps -aux</li>
			<li>查程序：ps -aux | grep xxx</li>
			<li>立刻強制刪除程序：kill -9 [pid]</li>
		</ul>
	</div>
	<div class="col-md-2">
		<h5 class="text-info">查資料</h5>
		<ul>
			<li>查核心：uname -a</li>
			<li>查記憶體：free -m</li>
			<li>查環境變數：env</li>
		</ul>
	</div>
	<div class="col-md-2">
		<h5 class="text-info">SELinux的關閉或開啟</h5>
		<ul>
			<li>顯示SELinux狀態：getenforce</li>
			<li>暫時性關閉SELinux：setenforce 0</li>
			<li>暫時性開啟SELinux：setenforce 1</li>
		</ul>
	</div>
	<div class="col-md-4">
		<h5 class="text-info">移動檔案、目錄與更名</h5>
		<ul>
			<li>mv [-fiu] source destination</li>
			<li>-f：如果目標檔案已經存在, 不會詢問而直接覆蓋.</li>
			<li>-i：如果目標檔案已經存在, 會詢問是否覆蓋.</li>
			<li>-u：若目標檔案已經存在且source比較新才會更新.</li>
		</ul>
	</div>
	<div class="col-md-4">
		<h5 class="text-info">排程執行指令</h5>
		<ul>
			<li>*/30 * * * * /etc/init.d/httpd restart &gt;&gt; /var/www/html/logs</li>
			<li>*/30 * * * * free -m &gt;&gt; /var/www/html/logs</li>
		</ul>
	</div>
	<div class="col-md-6">
		<h5 class="text-info">排程執行php</h5>
		<ul>
			<li>執行 crontab -e 輸入: */10 * * * * /usr/bin/php -q /var/www/html/index.php &gt;&gt; /var/www/html/logs</li>
			<li>&gt; 代表取代, &gt;&gt; 代表累加.</li>
			<li>-q Quiet-mode. Suppress HTTP Header output.</li>
			<li>php程式請不要使用相對路徑, dirname(__FILE__)可以取得目前php檔的絕對路徑.</li>
		</ul>
	</div>
</div>
<?php include 'bottom.php';?>