<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:55:"D:\www\PHPTutorial\WWW\lhc/app/index\view\zt\index.html";i:1548643461;s:57:"D:\www\PHPTutorial\WWW\lhc\app\index\view\public\top.html";i:1547431222;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $class1; ?></title>
    <script src="/file/lhc_images/jquery.min.js"></script>
    <link rel="stylesheet" href="/file/admin/layui/css/layui.css">
    <script src="/file/admin/layui/layui.js"></script>
    <style>
        .layui-table td{
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<body>
<div class="layui-fluid">
    <div class="layui-row" style="background-color: #fff;">
        <div class="layui-col-xs12">
            <form method="post" action="<?php echo url('bets/kbbSubmit'); ?>">
                <input type="hidden" name="class2" class="<?php echo $ids; ?>">
                <div class="layui-crad">
                    <div class="top" style="cursor: pointer;border-bottom: 1px solid #f6f6f6;height: 42px;line-height: 42px;padding: 0 15px;"><marquee behavior="scroll" onmouseover="this.stop()" onmouseout="this.start()"><?php echo getConfigField('affice'); ?></marquee></div>
                    <div class="layui-card-header">
                        <?php echo $ids; ?>下注
                        <div class="layui-inline" style="padding: 0 0 0 15px;">当前期数：  <span style="color: red;"><?php echo getKitheNum(); ?>期</span></div>
                        <span style="padding-left: 40px;">距离封盘时间：<b class="time" style="color: red;font-weight: normal;"></b></span>
                        <div class="layui-inline" style="padding: 0 0 0 15px;">下注金额：  <span id="allgold">0</span></div>
                        <div style="float: right;" class="layui-btn-group">
                            <button onclick="javascript:location.href='<?php echo url('index'); ?>?ids=正2特';return false;" class="layui-btn layui-btn-sm"><span>正2特</span></button>&nbsp;
                            <button onclick="javascript:location.href='<?php echo url('index'); ?>?ids=正3特';return false;" class="layui-btn layui-btn-sm"><span>正3特</span></button>&nbsp;
                            <button onclick="javascript:location.href='<?php echo url('index'); ?>?ids=正4特';return false;" class="layui-btn layui-btn-sm"><span>正4特</span></button>&nbsp;
                            <button onclick="javascript:location.href='<?php echo url('index'); ?>?ids=正5特';return false;" class="layui-btn layui-btn-sm"><span>正5特</span></button>&nbsp;
                            <button onclick="javascript:location.href='<?php echo url('index'); ?>?ids=正6特';return false;" class="layui-btn layui-btn-sm"><span>正6特</span></button>
                        </div>
                    </div>
                    <div class="layui-card-body">
                        <table class="layui-table">
                            <thead>
                            <tr>
                                <th>序号</th>
                                <th>赔率</th>
                                <th>金额</th>

                                <th>序号</th>
                                <th>赔率</th>
                                <th>金额</th>

                                <th>序号</th>
                                <th>赔率</th>
                                <th>金额</th>

                                <th>序号</th>
                                <th>赔率</th>
                                <th>金额</th>

                                <th>序号</th>
                                <th>赔率</th>
                                <th>金额</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__FOR_START_15903__=1;$__FOR_END_15903__=11;for($i=$__FOR_START_15903__;$i < $__FOR_END_15903__;$i+=1){ ?>
                            <tr>
                                <?php if($i == 10): ?>
                                <td class="td<?php echo $i; ?>"><img src="/file/lhc_images/num<?php echo $i; ?>.gif" alt=""></td>
                                <?php else: ?>
                                <td class="td<?php echo $i; ?>"><img src="/file/lhc_images/num0<?php echo $i; ?>.gif" alt=""></td>
                                <?php endif; ?>
                                <td class="td<?php echo $i; ?>"><span id="bl<?php echo $i-1; ?>" style="color:red;font-weight: bold;"> 0 </span></td>
                                <td class="td<?php echo $i; ?>">
                                    <input name="Num_<?php echo $i; ?>" type="text" class="input1 layui-input" placeholder="￥" style="width: 75px;" sum="<?php echo getTanKitheSum($class1,$ids,$i); ?>">
                                    <input name="class3_<?php echo $i; ?>" value="<?php echo $i; ?>" type="hidden" >
                                    <input name="gb<?php echo $i; ?>" type="hidden"  value="0">
                                    <input name="xr_<?php echo $i-1; ?>" type="hidden" id="xr_<?php echo $i-1; ?>" value="0" >
                                    <input name="xrr_<?php echo $i; ?>" type="hidden"  value="0" >
                                </td>

                                <td class="td<?php echo $i+10; ?>"><img src="/file/lhc_images/num<?php echo $i+10; ?>.gif" alt=""></td>
                                <td class="td<?php echo $i+10; ?>"><span id="bl<?php echo $i+9; ?>" style="color:red;font-weight: bold;"> 0 </span></td>
                                <td class="td<?php echo $i+10; ?>">
                                    <input name="Num_<?php echo $i+10; ?>" type="text" class="input1 layui-input" placeholder="￥" style="width: 75px;" sum="<?php echo getTanKitheSum($class1,$ids,$i+10); ?>">
                                    <input name="class3_<?php echo $i+10; ?>" value="<?php echo $i+10; ?>" type="hidden" > <!--号码数-->
                                    <input name="gb<?php echo $i+10; ?>" type="hidden"  value="0">
                                    <input name="xr_<?php echo $i+9; ?>" type="hidden" id="xr_<?php echo $i+9; ?>" value="0" >
                                    <input name="xrr_<?php echo $i+10; ?>" type="hidden"  value="0" >
                                </td>

                                <td class="td<?php echo $i+20; ?>"><img src="/file/lhc_images/num<?php echo $i+20; ?>.gif" alt=""></td>
                                <td class="td<?php echo $i+20; ?>"><span id="bl<?php echo $i+19; ?>" style="color:red;font-weight: bold;"> 0 </span></td>
                                <td class="td<?php echo $i+20; ?>">
                                    <input name="Num_<?php echo $i+20; ?>" type="text" class="input1 layui-input" placeholder="￥" style="width: 75px;" sum="<?php echo getTanKitheSum($class1,$ids,$i+20); ?>">
                                    <input name="class3_<?php echo $i+20; ?>" value="<?php echo $i+20; ?>" type="hidden" >
                                    <input name="gb<?php echo $i+20; ?>" type="hidden"  value="0">
                                    <input name="xr_<?php echo $i+19; ?>" type="hidden" id="xr_<?php echo $i+19; ?>" value="0" >
                                    <input name="xrr_<?php echo $i+20; ?>" type="hidden"  value="0" >
                                </td>

                                <td class="td<?php echo $i+30; ?>"><img src="/file/lhc_images/num<?php echo $i+30; ?>.gif" alt=""></td>
                                <td class="td<?php echo $i+30; ?>"><span id="bl<?php echo $i+29; ?>" style="color:red;font-weight: bold;"> 0 </span></td>
                                <td class="td<?php echo $i+30; ?>">
                                    <input name="Num_<?php echo $i+30; ?>" type="text" class="input1 layui-input" placeholder="￥" style="width: 75px;" sum="<?php echo getTanKitheSum($class1,$ids,$i+30); ?>">
                                    <input name="class3_<?php echo $i+30; ?>" value="<?php echo $i+30; ?>" type="hidden" >
                                    <input name="gb<?php echo $i+30; ?>" type="hidden"  value="0">
                                    <input name="xr_<?php echo $i+29; ?>" type="hidden" id="xr_<?php echo $i+29; ?>" value="0" >
                                    <input name="xrr_<?php echo $i+30; ?>" type="hidden"  value="0" >
                                </td>

                                <?php if($i != 10): ?>
                                <td class="td<?php echo $i+40; ?>"><img src="/file/lhc_images/num<?php echo $i+40; ?>.gif" alt=""></td>
                                <td class="td<?php echo $i+40; ?>"><span id="bl<?php echo $i+39; ?>" style="color:red;font-weight: bold;"> 0 </span></td>
                                <td class="td<?php echo $i+40; ?>">
                                    <input name="Num_<?php echo $i+40; ?>" type="text" class="input1 layui-input" placeholder="￥" style="width: 75px;" sum="<?php echo getTanKitheSum($class1,$ids,$i+40); ?>">
                                    <input name="class3_<?php echo $i+40; ?>" value="<?php echo $i+40; ?>" type="hidden" >
                                    <input name="gb<?php echo $i+40; ?>" type="hidden"  value="0">
                                    <input name="xr_<?php echo $i+39; ?>" type="hidden" id="xr_<?php echo $i+39; ?>" value="0" >
                                    <input name="xrr_<?php echo $i+40; ?>" type="hidden"  value="0" >
                                </td>
                                <?php endif; ?>
                            </tr>
                            <?php } ?>
                            <tr>
                                <td class="td50">单</td>
                                <td class="td50"><span id="bl49" style="color:red;font-weight: bold;">0</span></td>
                                <td class="td50">
                                    <input name="Num_50" type="text" class="input1 layui-input" placeholder="￥" style="width: 75px;" sum="<?php echo getTanKitheSum($class1,$ids,50); ?>">
                                    <input name="gb50" value="0" type="hidden">
                                    <input name="class3_50" value="单" type="hidden" >
                                </td>

                                <td class="td52">大</td>
                                <td class="td52"><span id="bl51" style="color:red;font-weight: bold;">0</span></td>
                                <td class="td52">
                                    <input name="Num_52" type="text" class="input1 layui-input" placeholder="￥" style="width: 75px;" sum="<?php echo getTanKitheSum($class1,$ids,52); ?>">
                                    <input name="gb52" value="0" type="hidden">
                                    <input name="class3_52" value="大" type="hidden" >
                                </td>

                                <td class="td54">合单</td>
                                <td class="td54"><span id="bl53" style="color:red;font-weight: bold;">0</span></td>
                                <td class="td54">
                                    <input name="Num_54" type="text" class="input1 layui-input" placeholder="￥" style="width: 75px;" sum="<?php echo getTanKitheSum($class1,$ids,54); ?>">
                                    <input name="gb54" value="0" type="hidden">
                                    <input name="class3_54" value="合单" type="hidden" >
                                </td>
                                <td class="td56">红波</td>
                                <td class="td56"><span id="bl55" style="color:red;font-weight: bold;">0</span></td>
                                <td class="td56">
                                    <input name="Num_56" type="text" class="input1 layui-input" placeholder="￥" style="width: 75px;" sum="<?php echo getTanKitheSum($class1,$ids,56); ?>">
                                    <input name="gb56" value="0" type="hidden">
                                    <input name="class3_56" value="红波" type="hidden" >
                                </td>
                                <td class="td58">蓝波</td>
                                <td class="td58"><span id="bl57" style="color:red;font-weight: bold;">0</span></td>
                                <td class="td58">
                                    <input name="Num_58" type="text" class="input1 layui-input" placeholder="￥" style="width: 75px;" sum="<?php echo getTanKitheSum($class1,$ids,58); ?>">
                                    <input name="gb58" value="0" type="hidden">
                                    <input name="class3_58" value="蓝波" type="hidden" >
                                </td>
                            </tr>
                            <tr>
                                <td class="td51">双</td>
                                <td class="td51"><span id="bl50" style="color:red;font-weight: bold;">0</span></td>
                                <td class="td51">
                                    <input name="Num_51" type="text" class="input1 layui-input" placeholder="￥" style="width: 75px;" sum="<?php echo getTanKitheSum($class1,$ids,51); ?>">
                                    <input name="gb51" value="0" type="hidden">
                                    <input name="class3_51" value="双" type="hidden" >
                                </td>
                                <td class="td53">小</td>
                                <td class="td53"><span id="bl52" style="color:red;font-weight: bold;">0</span></td>
                                <td class="td53">
                                    <input name="Num_53" type="text" class="input1 layui-input" placeholder="￥" style="width: 75px;" sum="<?php echo getTanKitheSum($class1,$ids,53); ?>">
                                    <input name="gb53" value="0" type="hidden">
                                    <input name="class3_53" value="小" type="hidden" >
                                </td>
                                <td class="td55">合双</td>
                                <td class="td55"><span id="bl54" style="color:red;font-weight: bold;">0</span></td>
                                <td class="td55">
                                    <input name="Num_55" type="text" class="input1 layui-input" placeholder="￥" style="width: 75px;" sum="<?php echo getTanKitheSum($class1,$ids,55); ?>">
                                    <input name="gb55" value="0" type="hidden">
                                    <input name="class3_55" value="合双" type="hidden" >
                                </td>
                                <td class="td57">绿波</td>
                                <td class="td57"><span id="bl56" style="color:red;font-weight: bold;">0</span></td>
                                <td class="td57">
                                    <input name="Num_57" type="text" class="input1 layui-input" placeholder="￥" style="width: 75px;" sum="<?php echo getTanKitheSum($class1,$ids,57); ?>">
                                    <input name="gb57" value="0" type="hidden">
                                    <input name="class3_57" value="绿波" type="hidden" >
                                </td>
                            </tr>

                            <tr>
                                <td colspan="15" align="center">
                                    <input type="hidden" name="xc" value="<?php echo $xc; ?>">
                                    <input type="hidden" name="from_url" value="<?php echo url('index'); ?>?ids=<?php echo $ids; ?>">
                                    <input type=hidden value=0 name="gold_all" id="total_gold">
                                    <input type="submit" class="layui-btn layui-btn-sm" value="提交">
                                    <input type="reset" class="layui-btn layui-btn-sm" value="重设">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(function(){
        //远程定时获取指定数据
        function loc(){
            $.ajax({
                url:'<?php echo url('bets/server'); ?>',
                type:'post',
                returnType:'json',
                data:{
                'class1':'<?php echo $class1; ?>',
                    'class2':'<?php echo $ids; ?>'
            },
            success:function(response,status,xhr){
                for (var i=0;i<60;i++){
                    var sbbn=i+1;
                    if(response[i].locked==1){
                        $('#bl'+i).html('停');
                        $('#bl'+i).parent().parent().next().find('input').attr({disabled:true}).css('background','#F1F1F1');
                    }else{
                        switch('<?php echo $abcd; ?>'){
                            case 'A':
                                if(response[i]['rate']!=response[i]['blrate']){
                                    $('#bl'+i).html('<SPAN STYLE=\'background-color:ffff00;WIDTH: 100%;height:25px;vertical-align:middle;\' ><span style=\'display:inline-block;height:100%;vertical-align:middle;\'></span><font color=ff0000><b>'+response[i]['rate']+'</b></font></span>');
                                }else{
                                    $('#bl'+i).html(response[i]['rate']);
                                }
                                break;
                            case 'B':
                                if(response[i]['rate']!=response[i]['blrate']){
                                    var bs=eval(Math.round(response[i]['rate']*100)+"-<?php echo getConfigField('bbb')*100; ?>")/100;
                                    $('#bl'+i).html("<span style='background-color:ffff00;WIDTH: 100%;height:25px;vertical-align:middle;' ><span style='display:inline-block;height:100%;vertical-align:middle;'></span><font color=ff0000><b>"+bs+"</b></font></span>");
                                }else{
                                    var bs=eval(Math.round(response[i]['rate']*100)+"-<?php echo getConfigField('bbb')*100; ?>")/100;
                                    $('#bl'+i).html(bs);
                                }
                                break;
                            case 'C':
                                if(response[i]['rate']!=response[i]['blrate']){
                                    var bs=eval(Math.round(response[i]['rate']*100)+"-<?php echo getConfigField('cbb')*100; ?>")/100;
                                    $('#bl'+i).html("<span style='background-color:ffff00;WIDTH: 100%;height:25px;vertical-align:middle;' ><span style='display:inline-block;height:100%;vertical-align:middle;'></span><font color=ff0000><b>"+bs+"</b></font></span>");
                                }else{
                                    var bs=eval(Math.round(response[i]['rate']*100)+"-<?php echo getConfigField('cbb')*100; ?>")/100;
                                    $('#bl'+i).html(bs);
                                }
                                break;
                            case 'D':
                                if(response[i]['rate']!=response[i]['blrate']){
                                    var bs=eval(Math.round(response[i]['rate']*100)+"-<?php echo getConfigField('dbb')*100; ?>")/100;
                                    $('#bl'+i).html("<span style='background-color:ffff00;WIDTH: 100%;height:25px;vertical-align:middle;' ><span style='display:inline-block;height:100%;vertical-align:middle;'></span><font color=ff0000><b>"+bs+"</b></font></span>");
                                }else{
                                    var bs=eval(Math.round(response[i]['rate']*100)+"-<?php echo getConfigField('dbb')*100; ?>")/100;
                                    $('#bl'+i).html(bs);
                                }
                                break;
                            default:
                                if(response[i]['rate']!=response[i]['blrate']){
                                    $('#bl'+i).html('<SPAN STYLE=\'background-color:ffff00;WIDTH: 100%;height:25px;vertical-align:middle;\' ><span style=\'display:inline-block;height:100%;vertical-align:middle;\'></span><font color=ff0000><b>'+response[i]['rate']+'</b></font></span>');
                                }else{
                                    $('#bl'+i).html(response[i]['rate']);
                                }
                                break;
                        }
                    }
                }
            }
        });
            //定时操作
            setTimeout(loc,<?php echo \think\Config::get('ftime'); ?>);
        }
        loc();      //执行

        //表格点击
        $('.layui-table td').hover(function () {
            var className=$(this).attr('class');
            $('.'+className).css({'background-color':'#f2f2f2'});
        },function () {
            var className=$(this).attr('class');
            $('.'+className).removeAttr('style');
        });

        $('.layui-table td').click(function () {
            var className=$(this).attr('class');
            $('.'+className).find('input').focus();
        })

        layui.use(['layer'],function(){
            var layer=layui.layer;
            //表单焦点判断
            $('.input1').on('blur',function(){
                var re = /^[0-9]+\.?[0-9]*$/;
                var value=parseFloat($(this).val());
                var sum=parseFloat($(this).attr('sum'));
                if(!re.test($(this).val()) && $(this).val()!=''){
                    layer.msg('下注金额仅能输入数字');
                    $(this).val('0');
                    value=0;
                }
                if($(this).val()==''){
                    value=0;
                }
                if ( (value < <?php echo getMemField('xy'); ?>) && (value!='')) {$(this).val('0');$(this).focus(); layer.msg("下注金额不可小於最低限度:<?php echo getMemField('xy'); ?>!!"); return false;}
                if (parseFloat(sum+value) > <?php echo getQuotaField($xc,'xxx'); ?>) {$(this).val('0'); $(this).focus(); layer.msg("对不起,号止本期下注金额最高限制 : <?php echo getQuotaField($xc,'xxx'); ?>!!"); return false;}
                if (value > <?php echo getQuotaField($xc,'xx'); ?>) {$(this).val('0');$(this).focus(); layer.msg("对不起,下注金额已超过单注限额 : <?php echo getQuotaField($xc,'xx'); ?>!!"); return false;}

                //下注金额的值
                var money = getAllInput();
                if (money > <?php echo getMemField('ts'); ?>){$(this).val('0');$(this).focus(); layer.msg("下注金额不可大於可用信用额度!!");    return false;}

                $('#allgold').html(money);
                $('[name=gold_all]').val( $('#allgold').html());
            });
            //计算所有的input表单的值
            function getAllInput(){
                $nums=0;
                for (var i=1;i<=$('.input1').length;i++){
                    if($('[name=Num_'+i+']').val()!=''){
                        $nums+=parseFloat($('[name=Num_'+i+']').val());
                    }
                }
                return $nums;
            }

            //表单提交
            $('form').submit(function(){
                var sum=parseFloat($('#allgold').html());
                var re = /^[0-9]+\.?[0-9]*$/;
                if(!re.test(sum) && sum!=''){
                    layer.msg('下注金额仅能输入数字');
                    return false;
                }
                if(sum<=0){
                    layer.msg('请输入下注金额!!');
                    return false;
                }
                if (sum > <?php echo getMemField('ts'); ?>)   {
                    layer.msg("下注金额不可大於可用信用额度!!");
                    return false;
                }
                if (sum < <?php echo getMemField('xy'); ?>)   {
                    layer.msg("下注最低限额:<?php echo getMemField('xy'); ?>!!");
                    return false;
                }
                if (sum > <?php echo getQuotaField($xc,'xx'); ?>) {
                    layer.msg("对不起,下注金额已超过单注限额 : <?php echo getQuotaField($xc,'xx'); ?>!!");
                    return false;
                }
                // $('#btnSubmit').attr('disabled','disabled');

                $.ajax({
                    type:"post",
                    data:$('form').serialize(),
                    url:"<?php echo url('bets/saveKbb'); ?>",
                    success:function(response,status,xhr){
                        layer.open({
                            type: 1, //2
                            title: '确认注单',
                            shadeClose: false,
                            shade: 0.3,
                            maxmin: true,
                            area: ['700px', '500px'],
                            content:response
                        })
                    }
                })
                return false;
            });
        })

        //计算倒计时
        var time=parseInt(<?php echo strtotime(getKithe(14))-time(); ?>);
        countDown(time);
        //带天数的倒计时
        function countDown(times){
            var timer=null;
            timer=setInterval(function(){
                var day=0,
                    hour=0,
                    minute=0,
                    second=0;//时间默认值
                if(times > 0){
                    day = Math.floor(times / (60 * 60 * 24));
                    hour = Math.floor(times / (60 * 60)) - (day * 24);
                    minute = Math.floor(times / 60) - (day * 24 * 60) - (hour * 60);
                    second = Math.floor(times) - (day * 24 * 60 * 60) - (hour * 60 * 60) - (minute * 60);
                }
                if (day <= 9) day = '0' + day;
                if (hour <= 9) hour = '0' + hour;
                if (minute <= 9) minute = '0' + minute;
                if (second <= 9) second = '0' + second;
                //console.log();
                $('.time').html(day+"天"+hour+"小时"+minute+"分钟&nbsp;&nbsp;"+second+"秒");
                times--;
            },1000);
            if(times<=0){
                clearInterval(timer);
            }
        }
    })

</script>
</body>
</html>