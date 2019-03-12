<?php include 'top.php';?>
<div class="row">
	<div class="col-md-6">
		<h3>備份MySQL資料庫</h3>
		<ul>
			<li>某個資料庫的匯出與匯入.
				<dl>
					<dt>匯出:</dt><dd>mysqldump -u root -p 要備份的資料庫名稱 &gt; 檔名.sql</dd>
					<dt>匯入:</dt><dd>mysql -u root -p 資料庫名稱 &lt; 檔名.sql（要先建立資料庫再執行）</dd>
				</dl>
			</li>
			<li>某個資料表的匯出與匯入.
				<dl>
					<dt>匯出:</dt><dd>mysqldump -u root -p 資料庫名稱 資料表名稱 &gt; 檔名.sql</dd>
					<dt>匯入:</dt><dd>mysql -u root -p 資料庫名稱 &lt; 檔名.sql</dd>
				</dl>
			</li>
		</ul>
	</div>
	<div class="col-md-6">
		<h3>mytop - MySQL效能監測工具的安裝與使用</h3>
		<ul>
			<li>安裝:
				<ul>
					<li>yum install epel-release</li>
					<li>yum install mytop</li>
				</ul>
			</li>
			<li>使用:
				<ul>
					<li>假如要監控 wordpress 這個資料庫, 輸入 mytop --prompt -d wordpress, 然後再輸入 root 密碼, 就可以看到監控畫面了.</li>
					<li>常用的指令就是k, 可以砍掉卡住的 query.</li>
				</ul>
			</li>
		</ul>
	</div>
</div>
<?php include 'bottom.php';?>