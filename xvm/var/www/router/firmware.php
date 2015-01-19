<?php
	include '../common.php';

	$dir_trunk = 'firmware/trunk/';
	$dir_1407 = 'firmware/14.07/';

	$n750_ss = 'openwrt-ar71xx-generic-mynet-n750-squashfs-sysupgrade-shadowsocks.bin';
	$n750_sv = 'openwrt-ar71xx-generic-mynet-n750-squashfs-sysupgrade-shadowvpn.bin';
	$ag300h_ss = 'openwrt-ar71xx-generic-wzr-hp-ag300h-squashfs-sysupgrade-shadowsocks.bin';
	$ag300h_sv = 'openwrt-ar71xx-generic-wzr-hp-ag300h-squashfs-sysupgrade-shadowvpn.bin';

	$dllink_n750_ss = $dir_trunk.$n750_ss;
	$dllink_n750_sv = $dir_trunk.$n750_sv;
	$dllink_ag300h_ss = $dir_trunk.$ag300h_ss;
	$dllink_ag300h_sv = $dir_trunk.$ag300h_sv;

	$updatetime_n750_ss = filemtime($dllink_n750_ss);
	$updatetime_n750_sv = filemtime($dllink_n750_sv);
	$updatetime_ag300h_ss = filemtime($dllink_ag300h_ss);
	$updatetime_ag300h_sv = filemtime($dllink_ag300h_sv);

	$dllink_n750_1407_ss = $dir_1407.$n750_ss;
	$dllink_n750_1407_sv = $dir_1407.$n750_sv;
	$dllink_ag300h_1407_ss = $dir_1407.$ag300h_ss;
	$dllink_ag300h_1407_sv = $dir_1407.$ag300h_sv;

	$updatetime_n750_1407_ss = filemtime($dllink_n750_1407_ss);
	$updatetime_n750_1407_sv = filemtime($dllink_n750_1407_sv);
	$updatetime_ag300h_1407_ss = filemtime($dllink_ag300h_1407_ss);
	$updatetime_ag300h_1407_sv = filemtime($dllink_ag300h_1407_sv);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="../style.css">
		<title>固件下载</title>
		<script src="../js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function() {
				jQuery('.tabs .tab-links a').on('click', function(e)  {
					var currentAttrValue = jQuery(this).attr('href');

					// Show/Hide Tabs
					jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

					// Change/remove current tab to active
					jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

					e.preventDefault();
				});
			});
		</script>
	</head>
	<body>
		<a href="javascript:history.go(-1)">返回</a>
		<h1 class="center">固件下载</h1>
		<?php
			echo '<p class="center gray">更新时间：'.date("Y年m月d日 H:i:s",filemtime("firmware/timetag")).'</p>';
		?>
		<div class="tabs">
			<ul class="tab-links">
				<li class="active gp-1"><a href="#tab1">每夜版</a></li>
				<li class="gp-3"><a href="#tab2">稳定版</a></li>
				<li class="sl"><a href="#tab3">存档</a></li>
			</ul>
			<div class="tab-content">
				<div id="tab1" class="tab active">
					<p class="gray center">每天2点15分左右更新，版本号：r<?php echo `cat /var/www/router/firmware/ver` ?></p>
					<table class="center">
						<tr>
							<td>机型</td>
							<td>ShadowSocks 方案</td>
							<td>ShadowVPN 方案</td>
						</tr>
						<tr>
							<td>N750</td>
							<td><?php
								echo '<a href="'.$dllink_n750_ss.'" class="tip-bottom"><div>文件大小：'.RealSize($dllink_n750_ss).'<br />更新时间：'.date("Y年m月d日 H:i:s",$updatetime_n750_ss).'<br />md5校验和：'.md5($dllink_n750_ss).'</div><p class="hilight">'.date(" Y-m-d",$updatetime_n750_ss).'</p></a>';
							?></td>
							<td><?php
								echo '<a href="'.$dllink_n750_sv.'" class="tip-bottom"><div>文件大小：'.RealSize($dllink_n750_sv).'<br />更新时间：'.date("Y年m月d日 H:i:s",$updatetime_n750_sv).'<br />md5校验和：'.md5($dllink_n750_sv).'</div><p class="hilight">'.date(" Y-m-d",$updatetime_n750_sv).'</p></a>';
							?></td>
						</tr>
						<tr>
							<td>AG300H</td>
							<td><?php
								echo '<a href="'.$dllink_ag300h_ss.'" class="tip-bottom"><div>文件大小：'.RealSize($dllink_ag300h_ss).'<br />更新时间：'.date("Y年m月d日 H:i:s",$updatetime_ag300h_ss).'<br />md5校验和：'.md5($dllink_ag300h_ss).'</div><p class="hilight">'.date(" Y-m-d",$updatetime_ag300h_ss).'</p></a>';
							?></td>
							<td><?php
								echo '<a href="'.$dllink_ag300h_sv.'" class="tip-bottom"><div>文件大小：'.RealSize($dllink_ag300h_sv).'<br />更新时间：'.date("Y年m月d日 H:i:s",$updatetime_ag300h_sv).'<br />md5校验和：'.md5($dllink_ag300h_sv).'</div><p class="hilight">'.date(" Y-m-d",$updatetime_ag300h_sv).'</p></a>';
							?></td>
						</tr>
					</table>
				</div>
				<div id="tab2" class="tab">
					<p class="gray center">每周五更新，版本号：14.07</p>
					<table class="center">
						<tr>
							<td>机型</td>
							<td>ShadowSocks 方案</td>
							<td>ShadowVPN 方案</td>
						</tr>
						<tr>
							<td>N750</td>
							<td><?php
								echo '<a href="'.$dllink_n750_1407_ss.'" class="tip-bottom"><div>文件大小：'.RealSize($dllink_n750_1407_ss).'<br />更新时间：'.date("Y年m月d日 H:i:s",$updatetime_n750_1407_ss).'<br />md5校验和：'.md5($dllink_n750_1407_ss).'</div><p class="safe">'.date(" Y-m-d",$updatetime_n750_1407_ss).'</p></a>';
							?></td>
							<td><?php
								echo '<a href="'.$dllink_n750_1407_sv.'" class="tip-bottom"><div>文件大小：'.RealSize($dllink_n750_1407_sv).'<br />更新时间：'.date("Y年m月d日 H:i:s",$updatetime_n750_1407_sv).'<br />md5校验和：'.md5($dllink_n750_1407_sv).'</div><p class="safe">'.date(" Y-m-d",$updatetime_n750_1407_sv).'</p></a>';
							?></td>
						</tr>
						<tr>
							<td>AG300H</td>
							<td><?php
								echo '<a href="'.$dllink_ag300h_1407_ss.'" class="tip-bottom"><div>文件大小：'.RealSize($dllink_ag300h_1407_ss).'<br />更新时间：'.date("Y年m月d日 H:i:s",$updatetime_ag300h_1407_ss).'<br />md5校验和：'.md5($dllink_ag300h_1407_ss).'</div><p class="safe">'.date(" Y-m-d",$updatetime_ag300h_1407_ss).'</p></a>';
							?></td>
							<td><?php
								echo '<a href="'.$dllink_ag300h_1407_sv.'" class="tip-bottom"><div>文件大小：'.RealSize($dllink_ag300h_1407_sv).'<br />更新时间：'.date("Y年m月d日 H:i:s",$updatetime_ag300h_1407_sv).'<br />md5校验和：'.md5($dllink_ag300h_1407_sv).'</div><p class="safe">'.date(" Y-m-d",$updatetime_ag300h_1407_sv).'</p></a>';
							?></td>
						</tr>
					</table>
				</div>
				<div id="tab3" class="tab">
					<br />
					<table class="center">
						<tr>
							<td>机型</td>
							<td>ShadowSocks 方案</td>
							<td>ShadowVPN 方案</td>
						</tr>
						<tr>
							<td>N750</td>
							<td><a href="firmware/n750/old/openwrt-ar71xx-generic-mynet-n750-squashfs-sysupgrade-141005.bin">2014年10月5日</a></td>
							<td class="null">暂无</td>
						</tr>
						<tr>
							<td>AG300H</td>
							<td class="null">暂无</td>
							<td class="null">暂无</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
		<hr />
		<h2 class="center"><a name="etc">其他</a></h2>
		<ul>
			<li><h3>设置计划任务，定时自动更新固件</h3>
				在浏览器中<a href="http://192.168.1.1/" target="_blank">登录路由器</a>后设置：
				<ol>
					<li>系统 <span class="octicon octicon-arrow-right"></span> 计划任务：将下列命令黏贴进文本框
						<blockquote><code class="tip"><div><b>每天5点</b> 更新固件</div>0 5 * * * curl "<p class="hilight">下载链接</p>" > /tmp/ss && sysupgrade -v /tmp/ss</code></blockquote>
						或者
						<blockquote><code class="tip"><div><b>每周五5点</b> 更新固件</div>0 5 * * 5 curl "<p class="hilight">下载链接</p>" > /tmp/ss && sysupgrade -v /tmp/ss</code></blockquote>
					</li>
					<li>点击<span class="btn">提交</span>按钮。</li>
				</ol>
			</li>
			<br />
			<li><h3>纯净刷写固件 <span class="warn">注意</span> <span class="hilight">会清空所有自定义设置，重启后退回出厂状态，注意备份</span></h3>
				备份自定义设置，使用ssh连接路由器，运行以下命令：
				<blockquote><code>curl "<span class="hilight">下载链接</span>" > /tmp/ss && mtd -r write /tmp/ss firmware</code></blockquote>
				耐心等待。				
			</li>
		</ul>
	</body>
</html>