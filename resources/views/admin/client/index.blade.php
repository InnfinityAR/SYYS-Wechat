@extends("admin.layout.base")

@section('content')

<section class="panel">
    <div id="alert" class="alert alert-info fade in hide" style="position: relative">
    <button type="button" class="close close-sm" data-dismiss="alert">
        <i class="fa fa-times"></i>
    </button>
    <strong class="alert-msg"></strong> <span class="alert-tip"></span>
</div>
    <div class="page-heading" style="margin-bottom: 50px;">
        <h3>客户列表</h3>
        <div style="padding-left: 0" class="col-lg-6">
            
            @if(session('user')->name=='admin')<a class="btn btn-primary deleteAll" >批量删除<i class="fa fa-trash-o"></i></a>@endif
            <select onchange="window.location = this.value" class="form-control index_select" >
                <option @if ($status == 0) selected @endif value="/{{$admin_prefix}}/{{$controller}}/">全部</option>
                <option @if ($status == 1) selected @endif value="/{{$admin_prefix}}/{{$controller}}/status/1">未评估</option>
                <option @if ($status == 2) selected @endif value="/{{$admin_prefix}}/{{$controller}}/status/2">已评估</option>
                <option @if ($status == 3) selected @endif value="/{{$admin_prefix}}/{{$controller}}/status/3">已忽略</option>
                
            </select>
        </div>
        <div style="padding-right:0" class="col-lg-6">
            <label class="searchLabel">Search: <input type="text" aria-controls="editable-sample" value="{{$search}}" placeholder="输入客户姓名或手机号查询" class="form-control medium search" id="search-input"></label>
        </div>
    </div>
    <div class="panel-body">
        <table class="table table-bordered table-striped ">
            <thead>
                <tr>
                    <th class="check-input "><input class="checkAll" type="checkbox"></th>
                    <th class="id">Id</th>
                    <th>客户姓名</th>
                    <th>客户性别</th>
                    <th>联系方式</th>
                    <th>房屋地址</th>
                    <th>住房面积(㎡)</th>
                    <th>贷款金额(万元)</th>
                    <th>贷款方式</th>
                    <th>申请年限</th>
                    <th>评估时间</th>
                    <th>状态</th>
                    <th>房屋总估价(万元)</th>
                    <th>评估人</th>
<!--                    <th>备注信息</th>-->
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                <tr>
                    <td class="check-input"><input type="checkbox" id="{{$data->id}}"></td>
                    <td>{{$data->id}}</td>
                    <td>{{$data->name}}</td>
                    <td>@if($data->sex==1)男 @else 女@endif</td>
                    <td>{{$data->tel}}</td>
                    <th>{{$data->house_addr}} @if($data->floor){{$data->floor}}层 @endif 共{{$data->total_floor}}层</th>
                    <td>{{$data->house_area}}</td>
                    <td>{{$data->loan_price or "暂无"}}</td>
                    <td>@if($data->loan_type==1)一抵 @else 二抵 @endif</td>
                    <td>{{$data->loan_time}}个月</td>
                    <td>{{date("Y-m-d H:i",$data->create_time)}}</td>
                    <td>{{getStatus($data->status)}}</td>
                    <td>{{$data->assess_price or "未评估"}}</td>
                    <td>@if($data->user_id){{getField($data->user_id, "user", "nickname")}} @else 暂无@endif</td>
<!--                    <td>{{$data->remark or "暂无备注"}}</td>-->
                    <td>
                        
                        <a href="javascript:;" data-id="{{$data->id}}" class="assess">@if($data->assess_price)修改估价 @else 房屋估价 @endif</a>
                        
                        <a href='/{{$admin_prefix}}/{{$controller}}/{{$data->id}}/changeStatus'>@if($data->status!=3)忽略用户 @else 取消忽略 @endif</a>
                        
<!--                        <a href="javascript:;" data-id="{{$data->id}}" class="remark">@if($data->remark)修改备注 @else 添加备注@endif</a>-->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$datas->links()}}
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">

            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">请指派业务员</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <select name='user_id' class="form-control" style="width: 90%;margin: auto;
                                margin-top: 20px;">
                            @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->nickname or $user->name}}({{$user->tel}})</option>
                            @endforeach
                        </select>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary commit">提交更改</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>
</section>
@endsection

@section("script")
<script>
    $(function () {
        // 添加备注
        $(".remark").click(function () {
            var data = {};
            data['id'] = $(this).attr("data-id");
            layer.prompt({
                "title": "请输入备注信息",
                "formType": 2
            }, function (str) {
                
                // ajax传值

                data['remark'] = str;
                data['_token'] = csrf_token;
                $.ajax({
                    type: "post",
                    url: "/" + admin_prefix + "/" + controller + "/remark",
                    data: data,
                    success: function (res) {
                        if (res.status) {
                            layer.msg("添加备注成功!", {icon: 6});
                            setTimeout(function () {
                                location.reload();
                            }, 3000);
                        } else {
                            layer.msg("添加备注失败!", {icon: 5});
                        }
                    }
                })
            });
        });
        
        $(".assess").click(function () {
            var data = {};
            data['id'] = $(this).attr("data-id");
            layer.prompt({
                "title": "请输入估价",
                "formType": 0
            }, function (pass, index) {
                if (!pass) {
                    layer.close(index);
                }
                // ajax传值

                data['assess_price'] = pass;
                data['_token'] = csrf_token;
                $.ajax({
                    type: "post",
                    url: "/" + admin_prefix + "/" + controller + "/assess",
                    data: data,
                    success: function (res) {
                        if (res.status) {
                            layer.msg("估价成功!", {icon: 6});
                            setTimeout(function () {
                                location.reload();
                            }, 3000);
                        } else {
                            layer.msg("估价失败!", {icon: 5});
                        }
                    }
                })
            });
        });
        
        
        // ajax轮询
        setInterval(function(){
            $.ajax({
                type:"get",
                url:"/admin/client/getNewClients",
                success:function(res){
                    if(res.count>0){
                        $(".alert .alert-msg").html("您有"+res.count+"条未评估请求!");
                        $(".alert .alert-tip").html("<a style='float:right;margin-right:20px;' href='/admin/client/status/1'>点击查看</a>");
                        $(".alert").removeClass("hide");
                    }else{
                        $(".alert").addClass("hide");
                    }
                }
            });
        },3000)
        

        // 批量分配
        $(".assignAll").click(function () {
            var client_ids = [];
            $("tbody .check-input input").each(function (k, v) {
                if ($(this).is(":checked")) {
                    client_ids.push($(this).attr("id"));
                }
            });
            if (!client_ids.length) {
                layer.msg("请选择要分配的客户");

            } else {
                $(this).attr("data-target", "#myModal");
                $(this).removeClass("assignAll");
                $(".btn-info").click();
            }
        });
        
        $(".commit").click(function(){
            var data = {};
            var client_ids = [];
            $("tbody .check-input input").each(function (k, v) {
                if ($(this).is(":checked")) {
                    client_ids.push($(this).attr("id"));
                }
            });
            data["client_ids"] = client_ids;
            data["user_id"] = $("select[name='user_id']").val();
            data["_token"] = csrf_token;
            $.ajax({
                type:"post",
                url:"/"+admin_prefix+"/client/assign",
                data:data,
                success:function(res){
                    if(res.status){
                        layer.msg("分配成功!",{icon:6});
                        setTimeout(function(){
                            location.reload();
                        },2000);
                    }else{
                        layer.msg("分配失败!",{icon:5});
                    }
                }
            })
        });
    });
</script>
@endsection