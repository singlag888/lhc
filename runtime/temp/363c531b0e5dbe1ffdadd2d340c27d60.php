<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:54:"D:\www\PHPTutorial\WWW\lhc/app/admin\view\rake\tm.html";i:1548221652;s:58:"D:\www\PHPTutorial\WWW\lhc\app\admin\view\public\base.html";i:1548388375;s:57:"D:\www\PHPTutorial\WWW\lhc\app\admin\view\public\var.html";i:1544147308;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
	<head>
		<meta charset="utf-8">
		<title><?php echo $meta_title; ?></title>
		<meta name="renderer" content="webkit">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
		<link rel="icon" href="/public/static/images/favicon.ico"  type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="/public/static/plugins/layui/css/layui.css">
		<link rel="stylesheet" href="/public/admin/css/admin.css" media="all">
		<style type="text/css">
			.collapse-link{float: right;cursor: pointer;}
		</style>
		
<style type="text/css">
.toolbar{margin-bottom: 10px;}
input,dl{font-size: 14px;}
.layui-input{height: 30px;}
.layui-input{width: 60px;}
.layui-form-checkbox span{padding: 0px !important;}
.layui-quote-nm{
	margin-bottom: 0px;
	padding: 0px;
	border-width:0px
}
.btn-add{
	margin-right: -5px;
}
.btn-minus{
	margin-left: -6px;
}
.btn-add label,.btn-minus label{
	width: 110px;
	padding: 6px 10px;
	height: 38px;
	line-height: 20px;
	border-width: 1px;
	border-style: solid;
	border-radius: 2px 0 0 2px;
	text-align: center;
	background-color: #FBFBFB;
	overflow: hidden;
	box-sizing: border-box;
	border-color: #e6e6e6;
	cursor: pointer;
}
</style>


		<script type="text/javascript" src="/public/static/plugins/layui/layui.js"></script>
	</head>
</head>
<body>
	<!-- 头部 -->
	
	<!-- /头部 -->
	
	<!-- 主体 -->
	
<div class="layui-fluid" style="width: 1565px;">
	<div class="layui-card">
		<div class="layui-tab layui-tab-brief layadmin-latestData">
			<ul class="layui-tab-title">
				<li class="layui-this">特码</li>
				<li onclick="location.href='/admin/rake/ztm.html'">正特</li>
				<li onclick="location.href='/admin/rake/zm.html'">正码</li>
				<li onclick="location.href='/admin/rake/zm6.html'">正码1-6</li>
				<li onclick="location.href='/admin/rake/gg.html'">过关</li>
				<li onclick="location.href='/admin/rake/lm.html'">连码</li>
				<li onclick="location.href='/admin/rake/bb.html'">半波</li>
				<li onclick="location.href='/admin/rake/bbb.html'">半半波</li>
				<li onclick="location.href='/admin/rake/zxsb.html'">正肖/七色波</li>
				<li onclick="location.href='/admin/rake/wx.html'">五行</li>
				<li onclick="location.href='/admin/rake/ts.html'">头尾数</li>
				<li onclick="location.href='/admin/rake/ztws.html'">一肖/尾数</li>
				<li onclick="location.href='/admin/rake/sx.html'">特肖合肖</li>
				<li onclick="location.href='/admin/rake/sxt.html'">生肖连</li>
				<li onclick="location.href='/admin/rake/wsl.html'">尾数连</li>
				<li onclick="location.href='/admin/rake/wbz.html'">不中</li>
				<li onclick="location.href='/admin/rake/syz.html'">中一</li>
			</ul>
			<div class="layui-tab-content">
				<div class="layui-tab-item layui-show">
					<div class="layui-row layui-form">
						<form class=" layui-form">
						<blockquote class="layui-elem-quote layui-quote-nm">
							<?php if(is_array($class2attr) || $class2attr instanceof \think\Collection || $class2attr instanceof \think\Paginator): $i = 0; $__LIST__ = $class2attr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
							<a href="/admin/rake/tm.html?class2=<?php echo $item['class2']; ?>" <?php if($item['class2'] == $class2): ?>class="layui-btn layui-btn-danger "<?php else: ?>class="layui-btn layui-btn-primary "<?php endif; ?> ><?php echo $item['class2']; ?></a>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</blockquote>
						<input type="hidden" name="dvalue" value="0.5">
						<input type="hidden" name="class2" value="<?php echo $class2; ?>">
						<div class="layui-col-md3">
							<table class="layui-table">
								<thead>
									<tr>
										<th>号码</th>
										<th>赔率/封号</th>
										<th>赔率</th>
										<th>下注总额</th>
									</tr> 
								</thead>
								<tbody>
									<?php $__FOR_START_27009__=1;$__FOR_END_27009__=13;for($i=$__FOR_START_27009__;$i < $__FOR_END_27009__;$i+=1){ ?>
									<tr>
										<td><img src="/public/static/images/num/num<?php echo $i; ?>.gif"></td>
										<td style="line-height: 26px;">
											<input type="hidden" name="Num[<?php echo $i; ?>][class3]" value="<?php echo $list[$i-1]['class3']; ?>">
											<div class="layui-inline btn-add"><label>+</label></div>
											<div class="layui-inline">
											<input type="text" name="Num[<?php echo $i; ?>][rate]" value="<?php echo $list[$i-1]['rate']; ?>" class="layui-input input" style="float:left;">
											</div>
											<div class="layui-inline btn-minus"><label>-</label></div>
											<input type="checkbox" name="Num[<?php echo $i; ?>][locked]" value="1" lay-skin="primary" style="float: right;" <?php if($list[$i-1]['locked'] == 1): ?>checked<?php endif; ?>>
										</td>
										<td><?php echo $list[$i-1]['rate']; ?></td>
										<td><?php echo $sumData[$i-1]['sum']; ?></td>
									</tr>
									<?php } $__FOR_START_5605__=0;$__FOR_END_5605__=5;for($i=$__FOR_START_5605__;$i < $__FOR_END_5605__;$i+=1){ ?>
									<tr>
										<td><?php echo $list[$i+49]['class3']; ?></td>
										<td style="line-height: 26px;">
											<input type="hidden" name="Num[<?php echo $i+49; ?>][class3]" value="<?php echo $list[$i+49]['class3']; ?>">
											<div class="layui-inline btn-add"><label>+</label></div>
											<div class="layui-inline">
											<input type="text" name="Num[<?php echo $i+49; ?>][rate]" value="<?php echo $list[$i+49]['rate']; ?>" class="layui-input input" style="float:left;">
											</div>
											<div class="layui-inline btn-minus"><label>-</label></div>
											<input type="checkbox" name="Num[<?php echo $i+49; ?>][locked]" value="1" lay-skin="primary" style="float: right;" <?php if($list[$i+49]['locked'] == 1): ?>checked<?php endif; ?>>
										</td>
										<td><?php echo $list[$i+49]['rate']; ?></td>
										<td><?php echo $sumData[$i+49]['sum']; ?></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<div class="layui-col-md3">
							<table class="layui-table">
								<thead>
									<tr>
										<th>号码</th>
										<th>赔率/封号</th>
										<th>赔率</th>
										<th>下注总额</th>
									</tr> 
								</thead>
								<tbody>
									<?php $__FOR_START_23898__=13;$__FOR_END_23898__=25;for($i=$__FOR_START_23898__;$i < $__FOR_END_23898__;$i+=1){ ?>
									<tr>
										<td><img src="/public/static/images/num/num<?php echo $i; ?>.gif"></td>
										<td style="line-height: 26px;">
											<input type="hidden" name="Num[<?php echo $i; ?>][class3]" value="<?php echo $list[$i-1]['class3']; ?>">
											<div class="layui-inline btn-add"><label>+</label></div>
											<div class="layui-inline">
											<input type="text" name="Num[<?php echo $i; ?>][rate]" value="<?php echo $list[$i-1]['rate']; ?>" class="layui-input input" style="float:left;">
											</div>
											<div class="layui-inline btn-minus"><label>-</label></div>
											<input type="checkbox" name="Num[<?php echo $i; ?>][locked]" value="1" lay-skin="primary" style="float: right;" <?php if($list[$i-1]['locked'] == 1): ?>checked<?php endif; ?>>
										</td>
										<td><?php echo $list[$i-1]['rate']; ?></td>
										<td><?php echo $sumData[$i-1]['sum']; ?></td>
									</tr>
									<?php } $__FOR_START_12433__=0;$__FOR_END_12433__=5;for($i=$__FOR_START_12433__;$i < $__FOR_END_12433__;$i+=1){ ?>
									<tr>
										<td><?php echo $list[$i+54]['class3']; ?></td>
										<td style="line-height: 26px;">
											<input type="hidden" name="Num[<?php echo $i+54; ?>][class3]" value="<?php echo $list[$i+54]['class3']; ?>">
											<div class="layui-inline btn-add"><label>+</label></div>
											<div class="layui-inline">
											<input type="text" name="Num[<?php echo $i+54; ?>][rate]" value="<?php echo $list[$i+54]['rate']; ?>" class="layui-input input" style="float:left;">
											</div>
											<div class="layui-inline btn-minus"><label>-</label></div>
											<input type="checkbox" name="Num[<?php echo $i+54; ?>][locked]" value="1" lay-skin="primary" style="float: right;" <?php if($list[$i+54]['locked'] == 1): ?>checked<?php endif; ?>>
										</td>
										<td><?php echo $list[$i+54]['rate']; ?></td>
										<td><?php echo $sumData[$i+54]['sum']; ?></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<div class="layui-col-md3">
							<table class="layui-table">
								<thead>
									<tr>
										<th>号码</th>
										<th>赔率/封号</th>
										<th>赔率</th>
										<th>下注总额</th>
									</tr> 
								</thead>
								<tbody>
									<?php $__FOR_START_9491__=25;$__FOR_END_9491__=37;for($i=$__FOR_START_9491__;$i < $__FOR_END_9491__;$i+=1){ ?>
									<tr>
										<td><img src="/public/static/images/num/num<?php echo $i; ?>.gif"></td>
										<td style="line-height: 26px;">
											<input type="hidden" name="Num[<?php echo $i; ?>][class3]" value="<?php echo $list[$i]['class3']; ?>">
											<div class="layui-inline btn-add"><label>+</label></div>
											<div class="layui-inline">
											<input type="text" name="Num[<?php echo $i; ?>][rate]" value="<?php echo $list[$i-1]['rate']; ?>" class="layui-input input" style="float:left;">
											</div>
											<div class="layui-inline btn-minus"><label>-</label></div>
											<input type="checkbox" name="Num[<?php echo $i; ?>][locked]" value="1" lay-skin="primary" style="float: right;" <?php if($list[$i-1]['locked'] == 1): ?>checked<?php endif; ?>>
										</td>
										<td><?php echo $list[$i-1]['rate']; ?></td>
										<td><?php echo $sumData[$i-1]['sum']; ?></td>
									</tr>
									<?php } $__FOR_START_16184__=0;$__FOR_END_16184__=5;for($i=$__FOR_START_16184__;$i < $__FOR_END_16184__;$i+=1){ ?>
									<tr>
										<td><?php echo $list[$i+59]['class3']; ?></td>
										<td style="line-height: 26px;">
											<input type="hidden" name="Num[<?php echo $i+59; ?>][class3]" value="<?php echo $list[$i+59]['class3']; ?>">
											<div class="layui-inline btn-add"><label>+</label></div>
											<div class="layui-inline">
											<input type="text" name="Num[<?php echo $i+59; ?>][rate]" value="<?php echo $list[$i+59]['rate']; ?>" class="layui-input input" style="float:left;">
											</div>
											<div class="layui-inline btn-minus"><label>-</label></div>
											<input type="checkbox" name="Num[<?php echo $i+59; ?>][locked]" value="1" lay-skin="primary" style="float: right;" <?php if($list[$i+59]['locked'] == 1): ?>checked<?php endif; ?>>
										</td>
										<td><?php echo $list[$i+59]['rate']; ?></td>
										<td><?php echo $sumData[$i+59]['sum']; ?></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<div class="layui-col-md3">
							<table class="layui-table">
								<thead>
									<tr>
										<th>号码</th>
										<th>赔率/封号</th>
										<th>赔率</th>
										<th>下注总额</th>
									</tr> 
								</thead>
								<tbody>
									<?php $__FOR_START_15144__=37;$__FOR_END_15144__=50;for($i=$__FOR_START_15144__;$i < $__FOR_END_15144__;$i+=1){ ?>
									<tr>
										<td><img src="/public/static/images/num/num<?php echo $i; ?>.gif"></td>
										<td style="line-height: 26px;">
											<input type="hidden" name="Num[<?php echo $i; ?>][class3]" value="<?php echo $list[$i-1]['class3']; ?>">
											<div class="layui-inline btn-add"><label>+</label></div>
											<div class="layui-inline">
											<input type="text" name="Num[<?php echo $i; ?>][rate]" value="<?php echo $list[$i-1]['rate']; ?>" class="layui-input input" style="float:left;">
											</div>
											<div class="layui-inline btn-minus"><label>-</label></div>
											<input type="checkbox" name="Num[<?php echo $i; ?>][locked]" value="1" lay-skin="primary" style="float: right;" <?php if($list[$i-1]['locked'] == 1): ?>checked<?php endif; ?>>
										</td>
										<td><?php echo $list[$i-1]['rate']; ?></td>
										<td><?php echo $sumData[$i-1]['sum']; ?></td>
									</tr>
									<?php } $__FOR_START_7387__=0;$__FOR_END_7387__=2;for($i=$__FOR_START_7387__;$i < $__FOR_END_7387__;$i+=1){ ?>
									<tr>
										<td><?php echo $list[$i+64]['class3']; ?></td>
										<td style="line-height: 26px;">
											<input type="hidden" name="Num[<?php echo $i+64; ?>][class3]" value="<?php echo $list[$i+64]['class3']; ?>">
											<div class="layui-inline btn-add"><label>+</label></div>
											<div class="layui-inline">
											<input type="text" name="Num[<?php echo $i+64; ?>][rate]" value="<?php echo $list[$i+64]['rate']; ?>" class="layui-input input" style="float:left;">
											</div>
											<div class="layui-inline btn-minus"><label>-</label></div>
											<input type="checkbox" name="Num[<?php echo $i+64; ?>][locked]" value="1" lay-skin="primary" style="float: right;" <?php if($list[$i+64]['locked'] == 1): ?>checked<?php endif; ?>>
										</td>
										<td><?php echo $list[$i+64]['rate']; ?></td>
										<td><?php echo $sumData[$i+64]['sum']; ?></td>
									</tr>
									<?php } ?>
									<tr rowspan='2' style="height: 98px;text-align: center;">
										<td colspan="4">
											<a href="javascript:;" class="layui-btn layui-btn-radius layui-btn-sm" lay-submit lay-filter="batch-submit">提交</a>
											<button type="reset" class="layui-btn layui-btn-primary layui-btn-radius layui-btn-sm">重置</button>
											<a href="javascript:;" class="layui-btn layui-btn-radius layui-btn-normal layui-btn-sm btn-batch-feng" data-val="1">全部封号</a>
											<a href="javascript:;" class="layui-btn layui-btn-radius layui-btn-normal layui-btn-sm btn-batch-feng" data-val="0">全部开号</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
						</form>
					</div>
					<div class="layui-row">
						<form class=" layui-form">
							<input type="hidden" name="class2" value="<?php echo $class2; ?>">
							<table class="layui-table batch_table">
								<tbody>
									<tr>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(1); ?>" title="鼠" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(7); ?>" title="牛" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(2); ?>" title="虎" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(8); ?>" title="兔" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(3); ?>" title="龙" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(9); ?>" title="蛇" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(4); ?>" title="马" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(10); ?>" title="羊" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(5); ?>" title="猴" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(11); ?>" title="鸡" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(6); ?>" title="狗" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(12); ?>" title="猪" lay-skin="primary"></td>
									</tr>
									<tr>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(13); ?>" title="红单" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(14); ?>" title="红双" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(15); ?>" title="红大" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(16); ?>" title="红小" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(21); ?>" title="蓝单" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(22); ?>" title="蓝双" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(23); ?>" title="蓝大" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(24); ?>" title="蓝小" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(17); ?>" title="绿单" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(18); ?>" title="绿双" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(19); ?>" title="绿大" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(20); ?>" title="绿小" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(16); ?>,<?php echo kasxnumberbyid(15); ?>" title="红波" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(24); ?>,<?php echo kasxnumberbyid(23); ?>" title="蓝波" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="<?php echo kasxnumberbyid(20); ?>,<?php echo kasxnumberbyid(19); ?>" title="绿波" lay-skin="primary"></td>
									</tr>
									<tr>
										<td><input type="checkbox" name="mf[]" value="1,3,5,7,9,11,13,15,17,19,21,23,25,27,29,31,33,35,37,39,41,43,45,47,49" title="单号" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="2,4,6,8,10,12,14,16,18,20,22,24,26,28,30,32,34,36,38,40,42,44,46,48" title="双号" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]"  value="25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49"title="大号" lay-skin="primary"></td>
										<td><input type="checkbox" name="mf[]" value="1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24" title="小号" lay-skin="primary"></td>
										<td><input type="checkbox"  title="合单" lay-skin="primary" name="mf[]" value="1,3,5,7,9,10,12,14,16,18,21,23,25,27,29,30,32,34,36,38,41,43,45,47,49"></td>
										<td><input type="checkbox" name="mf[]" title="合双" lay-skin="primary"  value="2,4,6,8,11,13,15,17,19,20,22,24,26,28,31,33,35,37,39,40,42,44,46,48"></td>
										<td></td>
										<td><input type="checkbox" name="mf[]" title="0头" lay-skin="primary"  value="1,2,3,4,5,6,7,8,9"></td>
										<td><input type="checkbox" name="mf[]" title="1头" lay-skin="primary" value="10,11,12,13,14,15,16,17,18,19"></td>
										<td><input type="checkbox" name="mf[]" title="2头" lay-skin="primary" value="20,21,22,23,24,25,26,27,28,29"></td>
										<td><input type="checkbox" name="mf[]" title="3头" lay-skin="primary"  value="30,31,32,33,34,35,36,37,38,39"></td>
										<td><input type="checkbox" name="mf[]" title="4头" lay-skin="primary" value="40,41,42,43,44,45,46,47,48,49"></td>
									</tr>
									<tr>
										<td><input type="checkbox" name="mf[]" title="0尾" lay-skin="primary" value="10,20,30,40"></td>
										<td><input type="checkbox" name="mf[]" title="1尾" lay-skin="primary" value="1,11,21,31,41"></td>
										<td><input type="checkbox" name="mf[]" title="2尾" lay-skin="primary"  value="2,12,22,32,42"></td>
										<td><input type="checkbox" name="mf[]" title="3尾" lay-skin="primary" value="3,13,23,33,43"></td>
										<td><input type="checkbox" name="mf[]" title="4尾" lay-skin="primary" value="4,14,24,34,44"></td>
										<td><input type="checkbox" name="mf[]" title="5尾" lay-skin="primary" value="5,15,25,35,45"></td>
										<td><input type="checkbox" name="mf[]" title="6尾" lay-skin="primary"  value="6,16,26,36,46"></td>
										<td><input type="checkbox" name="mf[]" title="7尾" lay-skin="primary" value="7,17,27,37,47"></td>
										<td><input type="checkbox" name="mf[]" title="8尾" lay-skin="primary" value="8,18,28,38,48"></td>
										<td><input type="checkbox" name="mf[]" title="9尾" lay-skin="primary" value="9,19,29,39,49"></td>
										<td></td>
										<td colspan="4">
											<div class="layui-inline">
												<input type="radio" name="mv" value="0" title="减" checked>
												<input type="radio" name="mv" value="1" title="加">
											</div>
											<div class="layui-inline">
												<input type="text" name="value" value="0.5" autocomplete="off" class="layui-input">
											</div>
											<a href="javascript:;" class="layui-btn layui-btn-radius layui-btn-normal layui-btn-xs" lay-submit lay-filter="batch-adjust">送出</a>
										</td>
									</tr>
									<tr>
										<td colspan="15">
											<label class="layui-form-label">统一修改</label>
											<input type="radio" name="dx" value="单" title="单" checked="">
											<input type="radio" name="dx" value="双" title="双">
											<input type="radio" name="dx" value="大" title="大">
											<input type="radio" name="dx" value="小" title="小">
											<input type="radio" name="dx" value="红波" title="红波">
											<input type="radio" name="dx" value="绿波" title="绿波">
											<input type="radio" name="dx" value="蓝波" title="蓝波">
											<input type="radio" name="dx" value="全部" title="全部">
											<div class="layui-inline">
												<label class="layui-form-label">赔率</label>
												<input type="text" name="bl" value="0" autocomplete="off" class="layui-input" style="margin-top: 3px;">
											</div>
											<a href="javascript:;" class="layui-btn layui-btn-radius layui-btn-normal layui-btn-xs btn-batch-set" lay-submit lay-filter="batch-set">送出</a>
										</td>
									</tr>
								</tbody>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

	<!-- /主体 -->

	<!-- 底部 -->
	<script type="text/javascript">
(function(){
	var Think = window.Think = {
		"ROOT"   : "<?php echo request()->domain();?>", //当前网站地址
		"MODULE" : "<?php echo request()->module();?>",
		"DEEP"	  :"<?php echo \think\Config::get('pathinfo_depr'); ?>"
	}
})();
</script>
	
<script type="text/javascript">
	layui.config({
    base: '/public/admin/js/' //静态资源所在路径
    ,version: '20181201'
}).extend({
    index: 'lib/index' //主入口模块
}).use(['index', 'rake']);
</script>

	<div class="hidden"><!-- 用于加载统计代码等隐藏元素 -->
		
	</div>
	<!-- /底部 -->
</body>
</html>
