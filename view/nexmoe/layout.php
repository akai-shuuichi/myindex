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
                <input class="mdui-textfield-input" type="text" onchange="change(this)" placeholder="关键词"/>
            </div>
            <div class="mdui-toolbar nexmoe-item">
                <i id="count" class=" mdui-icon-dark" style="margin:0;">共计</i>
            </div>
		</div>

    	<?php view::section('content');?>
  	</div>
</body>
<script>
    var all;
    var sz=0;
    var nowshow=0;
    all=document.getElementsByClassName("mdui-list-item");
    sz=all.length;
    document.getElementById("count").innerText="共计"+sz;
    function change(text) {
        if(text.value.length>0){
            update(text.value)
        }else{
            if(sz===0){
                all=document.getElementsByClassName("mdui-list-item");
                sz=all.length;
            }
            ;
            for(let i=1;i<sz;i++){
                all[i].hidden = false;
            }
        }
    }
    function update(txt){
        if(sz===0){
            all=document.getElementsByClassName("mdui-list-item");
            sz=all.length;
            nowshow=sz;
        }
        nowshow=0
        for(let i=1;i<sz;i++){
            if(all[i].getAttribute("data-sort-name")!=null)
                if(all[i].getAttribute("data-sort-name").search(txt) === -1){
                    all[i].hidden = true;
                }else{
                    nowshow++;
                }


        }
        document.getElementById("count").innerText="共计"+nowshow;
    }
</script>
</html>