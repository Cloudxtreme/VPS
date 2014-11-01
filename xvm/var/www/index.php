<?php
	include 'common.php';

	$updatetime_page = filemtime("index.php");

	$path_op = 'router';
	$path_ss = 'router/shadowsocks';
	$ignore = 'router/shadowsocks/ignore.list';
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>OpenWrt LAB</title>
	</head>
	<body>
		<h1 class="center"><i class="fa fa-rss"></i> OpenWrt LAB</h1>
			<?php
				echo '<p class="center gray">更新时间：'.date("Y年m月d日 H:i:s",$updatetime_page).'</p>';
			?>
			<p class="center">
				<a href="javascript:history.go(-1)">返回</a><a href="#op"><i class="fa fa-rss"></i> OpenWrt</a><a href="#ss"><i class="fa fa-paper-plane"></i> ShadowSocks</a><a href="#etc">其他</a>
			</p>
			<hr />
			<h2><a name="op"><i class="fa fa-rss"></i> OpenWrt</a></h2>
				<ul>
					<li>
						使用ssh协议设置OpenWrt
						<?php 
							echo
							'<a href="'.$path_op.'/ssh.php">查看</a>
							<sup>'.date("Y-m-d H:i",filemtime("$path_op/ssh.php")).'</sup>';
						?>
					</li>
					<li>
						管理路由器内部文件
						<?php
							echo 
							'<a href="'.$path_op.'/scp.php">查看</a>
							<sup>'.date("Y-m-d H:i",filemtime("$path_op/scp.php")).'</sup>';
						?>
					</li>
					<li>
						固件下载
						<?php
							echo
							'<a href="'.$path_op.'/firmware.php">查看</a>
							<sup>'.date("Y-m-d H:i",filemtime("$path_op/firmware.php")).'</sup>';
						?>
						<br />
						<span class="octicon octicon-info"></span><a href="<?php echo $path_op; ?>/firmware.php#etc">设置计划任务</a>定时自动更新固件
					</li>
				</ul>
			<hr />
			<h2><a name="ss"><i class="fa fa-paper-plane"></i> ShadowSocks</a></h2>
				<ul>
					<li>
						使用ss-rules透明翻墙的步骤
						<?php
							echo
							'<a href="'.$path_ss.'/ss_rules.php">查看</a>
							<sup>'.date("Y-m-d H:i",filemtime("$path_ss/ss_rules.php")).'</sup>';
						?>
						<br />
						<span class="octicon octicon-info"></span><a href="<?php echo $path_ss; ?>/ss_rules.php#ignore">设置计划任务</a>定时更新 <a class="tip-bottom" href="../../savingfiles.php?filename=<?php echo $ignore ?>">
						<span style="width: 234px;">
							<?php
								echo
									'文件行数：'.CountLines($ignore)
									.'<br />文件大小：'.RealSize($ignore)
									.'<br />更新时间：'.date("Y年m月d日 H:i:s",filemtime($ignore));
							?>
						</span>
						<i class="fa fa-file-text-o"></i> ignore.list</a>
					</li>
					<li>
						防止断流的脚本
						<?php
							echo
							'<a href="'.$path_ss.'/keep_alive.php">查看</a>
							<sup>'.date("Y-m-d H:i",filemtime("$path_ss/keep_alive.php")).'</sup>';
						?>
					</li>
					<li><span class="deleted">开启TCP Fast Open降低延迟</span> 已整合入<a href="<?php echo $path_ss; ?>/gui.php">图形设置界面</a></li>
					<li>添加图形设置界面 <a href="<?php echo $path_ss; ?>/gui.php">查看</a></li>
				</ul>