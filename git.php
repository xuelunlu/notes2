<?php include('top.php'); ?>
<h3>安裝步驟:</h3>
<ul>
	<li>setenforce 0</li>
	<li>yum install centos-release-scl</li>
	<li>yum install rh-git29</li>
</ul>
<h3>建立軟連結:</h3>
<ul>
	<li>ln -s /opt/rh/httpd24/root/usr/lib64/libcurl-httpd24.so.4 /usr/lib64/libcurl-httpd24.so.4; ln -s /opt/rh/httpd24/root/usr/lib64/libnghttp2-httpd24.so.14 /usr/lib64/libnghttp2-httpd24.so.14; ln -s /opt/rh/rh-git29/root/usr/bin/git /usr/bin/git</li>
</ul>
<h3>建立軟連結:</h3>
<ul>
	<li>git init</li>
	<li>git add --all</li>
	<li>git config --global user.email "xuelun.lu@gmail.com"</li>
	<li>git config --global user.name "Sean Lu"</li>
	<li>git commit -m "no message"</li>
	<li>git remote add origin remote repository URL</li>
	<li>git push -f origin master</li>
	<li>git push -u origin master</li>
</ul>
<?php include('bottom.php'); ?>