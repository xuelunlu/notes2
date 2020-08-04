<?php include('top.php'); ?>
<h3>安裝步驟:</h3>
<ul>
	<li>yum install httpd mysql-server php php-mbstring php-gd php-mysql</li>
</ul>
<ul>
	<li>setenforce 0</li>
	<li>yum install centos-release-scl</li>
	<li>yum install httpd24 rh-mysql57-mysql-server rh-php70-php rh-php70-php-xml rh-php70-php-mbstring rh-php70-php-mysqlnd rh-php70-php-gd rh-php70-php-opcache rh-git29</li>
</ul>
<h3>建立軟連結:</h3>
<ul>
	<li>ln -s /opt/rh/rh-mysql57/root/usr/bin/mysql /usr/bin/mysql; ln -s /opt/rh/rh-mysql57/root/usr/bin/mysqladmin /usr/bin/mysqladmin; ln -s /opt/rh/rh-mysql57/root/usr/bin/mysqldump /usr/bin/mysqldump; ln -s /opt/rh/rh-php70/root/usr/bin/php /usr/bin/php; ln -s /opt/rh/httpd24/root/usr/lib64/libcurl-httpd24.so.4 /usr/lib64/libcurl-httpd24.so.4; ln -s /opt/rh/httpd24/root/usr/lib64/libnghttp2-httpd24.so.14 /usr/lib64/libnghttp2-httpd24.so.14; ln -s /opt/rh/rh-git29/root/usr/bin/git /usr/bin/git</li>
</ul>
<h3>啟動指令:</h3>
<ul>
	<li>service httpd24-httpd start</li>
	<li>service rh-mysql57-mysqld start</li>
	<li>systemctl start httpd24-httpd</li>
</ul>
<h3>初始化:</h3>
<ul>
	<li>mysqladmin -u root password 'your.password'</li>
	<li>chown [帳號名稱] /opt/rh/httpd24/root/var/www/html; chgrp [帳號名稱] /opt/rh/httpd24/root/var/www/html</li>
</ul>
<h3>設定檔位置:</h3>
<ul>
	<li>/etc/opt/rh/rh-php70/php.ini</li>
	<li>/opt/rh/httpd24/root/etc/httpd/conf/httpd.conf</li>
	<li>/opt/rh/httpd24/root/etc/httpd/conf.d</li>
	<li>/etc/opt/rh/rh-mysql57/my.cnf</li>
</ul>
<h3>log檔位置:</h3>
<ul>
	<li>/var/log/httpd24</li>
	<li>/var/opt/rh/rh-mysql57/log/mysql/mysqld.log</li>
</ul>
<h3>網站根目錄位置:</h3>
<ul>
	<li>/opt/rh/httpd24/root/var/www/html</li>
</ul>
<h3>建立虛擬主機:</h3>
<ul>
	<li>vi /opt/rh/httpd24/root/etc/httpd/conf.d/virtual.conf</li>
	<li><pre>
#NameVirtualHost *:80
&ltVirtualHost *:80&gt
ServerName tool.ithelper.idv.tw
DocumentRoot /opt/rh/httpd24/root/var/www/html/tool
&lt/VirtualHost&gt</pre></li>
</ul>
<h3>crontab:</h3>
<ul>
	<li>rm /etc/cron.deny</li>
	<li>vi /etc/cron.allow</li>
	<li>/etc/init.d/crond restart</li>
</ul>
<h3>其他:</h3>
<ul>
	<li>git clone https://github.com/amnuts/opcache-gui.git</li>
	<li>0 1 * * * tar -zcvf /opt/rh/httpd24/root/var/www/html/[備份檔檔名].tar.gz /opt/rh/httpd24/root/var/www/html/[要備份的資料夾]</li>
	<li>0 1 * * * mysqldump -u [帳號名稱] -p密碼 [要備份的資料庫名稱] > /opt/rh/httpd24/root/var/www/html/[備份檔檔名].sql</li>
	<li>0 */4 * * * /etc/init.d/httpd24-httpd restart >> /opt/rh/httpd24/root/var/www/html/httpd-logs</li>
	<li>0 */4 * * * /etc/init.d/rh-mysql57-mysqld restart >> /opt/rh/httpd24/root/var/www/html/mysqld-logs</li>
	<li>*/10 * * * * /usr/bin/php -q /var/www/html/index.php >> /var/www/html/logs</li>
	<li>&gt; 代表取代, &gt;&gt; 代表累加.</li>
	<li>-q Quiet-mode. Suppress HTTP Header output.</li>
</ul>
<h3>參考:</h3>
<ul>
	<li><a href="https://wiki.centos.org/zh-tw/AdditionalResources/Repositories/SCL" target="_blank">https://wiki.centos.org/zh-tw/AdditionalResources/Repositories/SCL</a></li>
	<li><a href="https://wiki.centos.org/SpecialInterestGroup/SCLo/CollectionsList" target="_blank">https://wiki.centos.org/SpecialInterestGroup/SCLo/CollectionsList</a></li>
</ul>
<?php include('bottom.php'); ?>