<?php
$id=$_GET['id'];
$valid=$_GET['valid'];
$account="N/A";
$passwd="N/A";
$db_host="mysql.qistchan.com";
$db_user="office";
$db_passwd="88855333Yu";
$db_name="office365";
if ($id=="") {
  header("Location: https://qistchan.com/office365/reg.php"); 
  exit();
}
$id="2015".$id;
$valid=substr($valid, 9);
$text_valid=md5(md5($id));

if ($valid==$text_valid) {
  $db_link=mysql_connect($db_host,$db_user,$db_passwd);
  mysql_select_db($db_name,$db_link);
  mysql_query("SET names utf8");
  $db_sql="SELECT * FROM `office` WHERE `id` = ".$id;
  $db_result=mysql_query($db_sql,$db_link);

  $num=mysql_num_rows($db_result);
  if ($num!=0) {
    $row=mysql_fetch_row($db_result);
    $account=$row[1];
    $passwd=$row[2];
  }
  mysql_free_result($db_result);
  mysql_close($db_link);
}


?>


<html>
<head>
  <meta charset="UTF-8">
  <meta name="baidu_union_verify" content="56127d6dc6b67511bc57c2290addb470">
  
  <title>Office365教育版授权账号提取 - 浮风</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/favicon.ico" />
  
    <link rel="alternative" href="/atom.xml" title="浮风" type="application/atom+xml">
  
  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://qistchan.com/js/html5.js"></script>
    <script type="text/javascript" src="https://qistchan.com/js/css3-mediaqueries.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="https://qistchan.com/css/style.css">
  <link rel="stylesheet" href="https://qistchan.com/css/highlight.css">
  <link rel="stylesheet" href="https://qistchan.com/css/links.css">
  <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?53c020181e3fdecad7414e11b9ba5453";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</head>
<body>
    <header id="header">
    <div class="nav-warp">
      <nav id="nav" class="w">
        
          <a class="main-nav-link" href="/">Home</a>
        
          <a class="main-nav-link" href="/tsukkomi">Tsukkomi</a>
        
          <a class="main-nav-link" href="/archives">Archives</a>
        
          <a class="main-nav-link" href="/about">About</a>
        
          <a class="main-nav-link" href="/categories/Episodes">Episodes</a>
        
          <a class="main-nav-link" href="/categories/Annals">Annals</a>
        
          <a class="main-nav-link" href="/categories/Lab">Labs</a>
        
          <a class="main-nav-link" href="/#footer">Links</a>
        
        <a id="nav-search" class="icon-search fr" onclick="show_search()" title="搜索"></a>
        <div id="nav-search-input" class="hide">
          <form class="search-form" onsubmit="return dispatch()">
            <input type="hidden" id="site" value="site:http://qistchan.com">
            <input type="text" id="q" class="input-text" name="q" placeholder="搜索">
            <input type="submit" value="" class="input-submit">
          </form>
        </div>
      </nav>
    </div>
    <div id="logo">
      <div class="hg">
      
        <h2 id="site-title">
		  <img src="https://dn-qistchan.qbox.me/logo.png" width="192" height="96" />
		  <br/>
		  <img src="https://dn-qistchan.qbox.me/text.png" width="256" height="35" />
        </h2>
        
          
        
      
      </div>
    </div>
  </header>
  <section id="main"><article class="post">
  <header class="post-head">
    
  
    
      <h1 class="post-title">Office365教育版账号</h1>
    
  

    
<time datetime="2015-05-05T16:08:33.000Z" class="post-time"><?php echo date("Y-m-d"); ?></time>

  </header>
  
      <section class="post-images">
        <a href="/2015/05/06/Office365-account/">
          <img src="https://dn-qistchan.qbox.me/image/20150328-office365/office365-1000.jpg" alt="featured-image">
        </a>
      </section>
  
  <section class="post-content typo">
    <h2 id="Office365教育版授权账号提取页面">Office365教育版授权账号提取页面</h2><p>在本页面，你将获取你的Office365账号，请仔细阅读以下说明！</p>
<h3 id="使用前必读">使用前必读</h3><h4 id="登录页面">登录页面</h4><p>Office 365 国际版登录界面：<a href="https://portal.office.com/Home" target="_blank" rel="external">跳转链接</a></p>
<h4 id="密码说明">密码说明</h4><p>本站所提供的初始密码为随机密码，首次登录强制修改！</p>
<h4 id="Office365_下载方法">Office365 下载方法</h4><p>登录进入后，首页即可看见安装链接！(太明显了，就不截图了)</p>
<h4 id="授权说明">授权说明</h4><h5 id="有效时间">有效时间</h5><p>理论上是永久的，不过只要微软想取消了那就没了！</p>
<h5 id="授权个数">授权个数</h5><p>PC+平板 5台</p>
<h3 id="特别说明">特别说明</h3><ul>
<li>微软有权中止这类的教育版授权，所以切记不要在公开场合说出账号，不要分享账号，不然被微软抓住了就没得用了！谢谢配合~~</li>
<li>最近貌似开始撤销违规的教育版了。。。能用多久用多久吧~~~</li>
</ul>
<h3 id="账号密码">账号密码</h3><h4 id="账号：">账号：</h4><p><?php echo $account; ?></p>
<h4 id="初始密码：">初始密码：</h4><p><?php echo $passwd; ?></p>
<h3 id="账号问题">账号问题</h3><p>如遇到账号问题，如重置密码等请发送邮件至 <a href="mailto:mail@chenyuqi.cn" target="_blank" rel="external">mail@chenyuqi.cn</a></p>

  </section>
  
</article>

<section id="comments">
  <!-- 多说评论框 start -->
  <div class="ds-thread" data-thread-key="post-Office365-account" data-title="Office365教育版授权账号" data-url="http://qistchan.com/2015/05/06/Office365-account/"></div>
  <!-- 多说评论框 end -->
</section>
</section>
    <footer id="footer">
    <div class="foot-warp">
	<div style="width:100%; margin:0 auto; overflow:auto; _display:inline-block;"> 
    <div style="width:300px; float:right;">
	<img src="https://dn-qistchan.qbox.me/image/2015-icon/link-12.png" width="10" height="10" />&nbsp&nbspLinks：<br/>
	<section class="link-braces">
		<p>
		<a href="http://52wust.cn">&nbsp<img src="https://dn-qistchan.qbox.me/image/2015-icon/link-12.png" width="10" height="10" />&nbsp&nbsp我爱武科大&nbsp</a><br/>
		<a href="http://w1989.com">&nbsp<img src="https://dn-qistchan.qbox.me/image/2015-icon/link-12.png" width="10" height="10" />&nbsp&nbsp隔壁老王&nbsp</a><br/>
		<a href="http://petite-dd.com/">&nbsp<img src="https://dn-qistchan.qbox.me/image/2015-icon/link-12.png" width="10" height="10" />&nbsp&nbsppetite-dd&nbsp</a><br/>
		<a href="http://www.cuolove.com/">&nbsp<img src="https://dn-qistchan.qbox.me/image/2015-icon/link-12.png" width="10" height="10" />&nbsp&nbsp错爱网&nbsp</a><br/>
		<a href="https://www.gehaowu.com">&nbsp<img src="https://dn-qistchan.qbox.me/image/2015-icon/link-12.png" width="10" height="10" />&nbsp&nbsp葛豪武的个人网站&nbsp</a>
		</p>
		</section>
	</div> 
	<div style=" margin-right:210px;">
	  <p><img src="https://dn-qistchan.qbox.me/image/2015-icon/shield-12.png" width="10" height="10" />&nbsp&nbsp蜀ICP备14031543号-1</p>
	  <p>2014-2015 &copy; QistChan.com / Theme by Kunr</p>
	  Steadily Run <span id="aa"></span>
		<SCRIPT language=javascript> 
		<!-- 
		//document.write(""); 
		function show_date_time(){ 
		window.setTimeout("show_date_time()", 1000); 
		timeold=((new Date()).getTime()-(new Date("12/25/2014 00:00:00")).getTime()); 
		sectimeold=timeold/1000 
		secondsold=Math.floor(sectimeold); 
		msPerDay=24*60*60*1000
		e_daysold=timeold/msPerDay 
		daysold=Math.floor(e_daysold); 
		e_hrsold=(e_daysold-daysold)*24; 
		hrsold=Math.floor(e_hrsold); 
		e_minsold=(e_hrsold-hrsold)*60; 
		minsold=Math.floor((e_hrsold-hrsold)*60); 
		seconds=Math.floor((e_minsold-minsold)*60); 
		aa.innerHTML=""+daysold+" Days "+hrsold+" Hours "+minsold+" Mins "+seconds+" Secs "; 
		} 
		show_date_time(); 
		//--> 
		</SCRIPT>
		<br/><br/>
	  <img src="https://dn-qistchan.qbox.me/d-aliyun.png" width="55" height="16" />&nbsp;&nbsp;
	  <img src="https://dn-qistchan.qbox.me/d-qiniu.png" width="55" height="16" />&nbsp;&nbsp;
	  <img src="https://dn-qistchan.qbox.me/qimg.png" width="55" height="16" />&nbsp;&nbsp;
	  <img src="https://dn-qistchan.qbox.me/ssl.png" width="50" height="32" />&nbsp;&nbsp;
    </div>
	<span style="display:none">
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1000531559'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/z_stat.php%3Fid%3D1000531559%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
  </span>
  </footer>
  <script src="https://qistchan.com/js/tools.js"></script>
  
  
  <script type="text/javascript">
    var duoshuoQuery = {short_name:'qistchan'};
      (function() {
        var ds = document.createElement('script');
        ds.type = 'text/javascript';ds.async = true;
        ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
        ds.charset = 'UTF-8';
        (document.getElementsByTagName('head')[0] 
         || document.getElementsByTagName('body')[0]).appendChild(ds);
      })();
  </script>

  </div>
  </div> 
  
  
</body>
</html>