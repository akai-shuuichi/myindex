<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no"/>
	<title><?php e(config('site_name'));?> - 私人云服务</title>
	<link rel="shortcut icon" href="/theme/favicon.ico">
    <link rel="stylesheet" href="/theme/mdui.min.css"/>
	<link rel="stylesheet" href="/theme/style.css">
    <script src="/theme/mdui.min.js"></script>
</head>
<body class="mdui-theme-primary-blue-grey mdui-theme-accent-blue">
	<header class="nav">
		<div class="navSize">
			<a href="/"><img class="avatar" src="//api.gzxtest.xyz/uploads/jpg//ixie9owp7tm4f.jpg"/></a>
			<div class="navRight">
				<ul class="navul">
					<li class="navli"><a href="/login" target="_blank">登陆</a></li>
				</ul>
				<div class="icon"></div>
			</div>
		</div>
	</header>
	<div class="mdui-container">
	    <div class="mdui-container-fluid">
	    <div class="mdui-toolbar nexmoe-item">
			<a href="/"><?php e(config('site_name'));?></a>

			<?php foreach((array)$navs as $n=>$l):?>
			<i class="mdui-icon material-icons mdui-icon-dark" style="margin:0;">chevron_right</i>
			<a href="<?php e($l);?>"><?php e($n);?></a>
			<?php endforeach;?>
			<!--<a href="javascript:;" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">refresh</i></a>-->
		</div>
            <div class="mdui-textfield">
                <input class="mdui-textfield-input" type="text" placeholder="User Name"/>
            </div>
		</div>
    	<?php view::section('content');?>
  	</div>
</body>
</html>