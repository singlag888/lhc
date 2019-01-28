<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:60:"D:\www\PHPTutorial\WWW\lhc/app/users\view\kakithe\index.html";i:1547707823;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>开奖结果</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="stylesheet" href="/file/admin/layuis/layui/css/layui.css" media="all">
    <link rel="stylesheet" href="/file/admin/layuis/style/admin.css" media="all">
    <script src="/file/admin/layui/jquery.min.js"></script>
    <script src="/file/admin/layui/base.js"></script>
</head>
<body>
<div class="layui-fluid">
    <div class="layui-row layui-col-space15">
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-header">开奖结果
                    <div class="layui-btn-group" style="float:right;">
                        <!--<a class="layui-btn layui-btn-primary layui-btn-sm" href="javascript:Add();" >增加</a>-->
                        <a class="layui-btn layui-btn-primary layui-btn-sm" href="javascript:pageReload();">刷新</a>
                    </div>

                </div>
                <div class="layui-card-body" pad15>
                    <table class="layui-hide layui-tab" id="tableShow" lay-filter="tableShow" style="overflow:scroll;!important;">


                    </table>
                    <div id="pages"></div>

                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/html" id="barDemo">
    <a class="layui-btn layui-btn-xs" lay-event="edit">编辑</a>
    <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del">删除</a>
</script>
</body>
</html>
<script src="/file/admin/layui/layui.js"></script>
<link rel="stylesheet" href="/file/admin/layui/base.css">
<style>
    .layui-table-body{
        overflow: auto;!important;
    }
</style>
<script>
    var table = null,
        queryData = {act:'ajax'};
    LoadPage();
    function LoadPage(){
        layui.use(['table','laypage'], function(){
            table = layui.table;
            var	laypage = layui.laypage;
            var tableOption = {
                elem : '#tableShow',
                url : '<?php echo url("getData"); ?>',
                where: queryData,
                page : false,
                // id:'idResize',
                cols : [[
                    {field:'nn', title: '期数',minWidth:90},
                    {field:'nd', title: '开奖时间',minWidth:152},
                    {field:'n1', minWidth:60,title: '平1'},
                    {field:'n2', minWidth:60,title: '平2'},
                    {field:'n3', minWidth:60,title: '平3'},
                    {field:'n4', minWidth:60,title: '平4'},
                    {field:'n5', minWidth:60,title: '平5'},
                    {field:'n6', minWidth:60,title: '平6'},
                    {field:'na', minWidth:60,title: '特码'},
                    {field:'sx', title: '生肖',minWidth:145},
                    {field:'nall', title: '总和',minWidth:61},
                    {field:'ds', title: '单双',minWidth:61},
                    {field:'bs', title: '大小',minWidth:61},
                    {field:'hds', title: '合数单双',minWidth:64},
                    {field:'ads', title: '总分单双',minWidth:64},
                    {field:'abs', title: '总分大小',minWidth:64},
                    {field:'color', title: '波色',minWidth:80}
                    // {title:'操作', align:'center', minWidth: 150,toolbar : '#barDemo'}
                ]],
                done : function(res, curr, count){
                    if(count > 0){
                        laypage.render({
                            elem: 'pages',
                            layout : ['count', 'prev', 'page', 'next','limit'],
                            count: count,
                            curr : res.page,
                            limit : res.limit,
                            jump: function(obj,first){
                                if(!first){
                                    var currPage = obj.curr;
                                    queryData['limit'] = obj.limit
                                    queryData['page'] = currPage;
                                    table.reload('tableShow', {
                                        where : queryData,
                                        page: false
                                    });
                                }
                            }
                        });
                    }
                    else{
                        $("#pages").html('');
                    }
                }
            };
            table.render(tableOption);

            table.on('tool(tableShow)', function(obj){
                var data = obj.data;
                id = data.id;
                if(obj.event === 'edit'){
                    Edit(id);
                }
                else if(obj.event == 'del'){
                    DelParter(id);
                }
            });
        });
    }

    function DelParter(id){
        var index = layer.confirm(
            '确定要删除?',
            {
                btn : ['确定','取消']
            },
            function(){
                $.post(
                    "<?php echo url(''); ?>",
                    {
                        id : id
                    },
                    function(data){
                        if(data.code == 0){
                            layer.msg(data.msg,{icon : 1,time : 2000},function(){
                                pageReload();
                            });
                        }
                        else{
                            layer.msg(data.msg,{icon : 2});
                        }
                    },
                    "json"
                );
            }
        );
    }

    function Edit(id){
        layer.open({
            type: 2,
            title: '编辑合作伙伴',
            shadeClose: true,
            shade: false,
            maxmin: true,
            area: ['600px', '500px'],
            content: '<?php echo url(''); ?>?id='+id
        });
    }

    function Add(){
        layer.open({
            type: 2,
            title: '新增合作伙伴',
            shadeClose: true,
            shade: false,
            maxmin: true,
            area: ['600px', '500px'],
            closeBtn: 1,
            content: '<?php echo url(''); ?>'
            /*
            end: function (){
                location.reload();
            }
            */
        });
    }

    function pageReload(){
        table.reload('tableShow', {
            where : queryData
        });
    }
</script>