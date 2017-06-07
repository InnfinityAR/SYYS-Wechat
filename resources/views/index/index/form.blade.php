<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <title>苏燕云商</title>
        <link rel="stylesheet" href="/resources/static/bootstrap/bootstrap.css"/>
        <link rel="stylesheet" href="/resources/static/bootcomplete/dist/bootcomplete.css"/>
        <link rel="stylesheet" href="/resources/style/index/css/index.css"/>
        <link href="/resources/static/mobile_scroll/css/mobiscroll.2.13.2.css" rel="stylesheet" />
        <script src="/resources/static/js/app.js"></script>
        <script src="/resources/static/bootstrap/bootstrap.min.js"></script>
        <script src="/resources/static/layer_mobile/layer.js"></script>
        <script src="/resources/static/bootcomplete/dist/jquery.bootcomplete.js"></script>
        <script src="/resources/static/mobile_scroll/js/mobiscroll.2.13.2.js"></script>
    </head>
    <body>
        <div class="wrap">
            <div class="logo" >
                <img style="width: 25%" src="/resources/style/index/images/logo.png">
                <span style="font-size: 20px;position: relative;margin-left: 5%;margin-top: 10px;">南京房产抵押平台</span>
            </div>
            <!--            <div class="step">
                            <img style="width: 80%" src="/resources/style/index/images/step1.png">
                        </div>-->
            <div class="form">
                <form class="form-horizontal">
                    <div class="formGroup">
                        <label class="labelTitle">姓名</label>
                        <div class="formControl">
                            <input type="text" name="name" placeholder="请填写你的姓名" class="form-control">
                        </div>
                    </div>
                    <div class="formGroup">
                        <label class="labelTitle">性别</label>
                        <div class="formControl">
                            <label><input type="radio" name="sex" checked="checked" value="1">先生</label>
                            <label><input type="radio" name="sex" value="2">女士</label>
                        </div>
                    </div>
                    <div class="formGroup">
                        <label class="labelTitle">手机号</label>
                        <div class="formControl">
                            <input type="tel" name="tel" placeholder="请填写您的手机号" maxlength="11" class="form-control">
                        </div>
                    </div>
                    <hr >

                    <div class="formGroup residentialAreaDiv">
                        <label class="labelTitle">房屋地址</label>
                        <div class="formControl">
                            <input type="text" name="house_addr" placeholder="请填写房屋所在小区名称" class="form-control complete">
                        </div>
                    </div>
                    <div class="formGroup">
                        <label class="labelTitle">房屋面积</label>
                        <div class="formControl">
                            <input type="number" name="house_area" placeholder="请填写房屋面积/㎡" class="form-control">
                        </div>
                    </div>
                    <div class="formGroup">
                        <label class="labelTitle">所在楼层</label>
                        <div class="formControl">
                            <span>所在</span>
                            <input type="number" name="floor" max="2" style="width:50px"  class="form-control floor-input" >
                            <span>层</span>
                            <span class="total-floor-span">共</span>
                            <input type="number" name="total_floor" max="2" style="width:50px"  class="form-control floor-input" >
                            <span >层</span>
                        </div>
                    </div>
                    <hr >
                    <div class="formGroup">
                        <label class="labelTitle">申请额度</label>
                        <div class="formControl">
                            <input type="member" name="loan_price" placeholder="请填写贷款额度(单位:万元)"  class="form-control">
                        </div>
                    </div>
                    <div class="formGroup">
                        <label class="labelTitle">贷款类型</label>
                        <div class="formControl demo-select add-input" data-role="fieldcontain">
                            <select name="loan_type" class="loan_type" data-role="none">
                                <option value="0">请选择贷款类型</option>
                                <option value="1">一抵(月息0.65%-0.98%)</option>
                                <option value="2">二抵(月息0.65%-0.98%)</option>
                            </select>
                        </div>
                    </div>
                    <div class="formGroup">
                        <label class="labelTitle">申请年限</label>
                        <div class="formControl demo-select add-input" data-role="fieldcontain">
                            <select name="loan_time" class="loan_time" data-role="none">
                                <option value="0">请选择申请年限</option>
                                @for($i=6;$i<=60;$i++)
                                <option value="{{$i}}">{{$i}}个月</option>
                                @endfor
                            </select>
                        </div>

                    </div>
                    <hr >
                    <div class="formGroup" style="margin-bottom: 0px;">
                        <label class="labelTitle" style="vertical-align: top">相关提示</label>
                        <p class="formP">住宅的抵押值为80%;公寓的抵押值为60%;办公楼和别墅的抵押值为50%</p>
                    </div>
                    <div class="formGroup" style="margin-bottom: 30px;">
                        <label class="labelTitle"  style="vertical-align: top">公司地址</label>
                        <p class="formP">南京市鼓楼区新街口华新大厦6楼</p>
                    </div>
                    <div class="formGroup assessDiv">
                        <a class="assess">马上评估</a>
                    </div>
                </form>
            </div>
        </div>
        <script>
$(function () {

    
    // mobile_scroll
    var opt = {
        'default': {
            theme: 'default',
            mode: 'scroller',
            display: 'modal',
            animate: 'fade'
        },

        'select': {
            preset: 'select'
        },

    }

    $('.loan_type').scroller($.extend(opt['select'], opt['default']));
    $('.loan_time').scroller($.extend(opt['select'], opt['default']));
    $(".add-input").find("input").addClass("form-control");

    var telReg = /^1[3|4|5|8][0-9]\d{4,8}$/;    // 手机正则
    var nameReg = /^[\u4e00-\u9fa5]{1,2}$/;     // 中文姓名正则
    // 去除提醒框
    $(".form input").focus(function () {
        $(this).removeClass("invalid");
    })
    $(".form select").change(function () {
        $(this).removeClass("invalid");
    })


    // 点击提交表单
    $(".assess").click(function () {
        var data = {};

        data["name"] = $("input[name='name']").val();
        data["sex"] = $("input[name='sex']:checked").val();
        data["tel"] = $("input[name='tel']").val();
        data["house_addr"] = $("input[name='house_addr']").val();
        data["house_area"] = $("input[name='house_area']").val();
        data["floor"] = $("input[name='floor']").val();
        data["total_floor"] = $("input[name='total_floor']").val();
        data["loan_price"] = $("input[name='loan_price']").val();
        data["loan_type"] = $(".loan_type option:selected").val();
        data["loan_time"] = $(".loan_time option:selected").val();

        if (!nameReg.test(data['name'])) {
            $("input[name='name']").addClass("invalid");
            layer.open({
                "content": "请正确填写姓名",
                "skin": "msg",
                "time": 2
            });
        } else if (!telReg.test(data['tel'])) {
            $("input[name='tel']").addClass("invalid");
            layer.open({
                "content": "请填写合法手机号",
                "skin": "msg",
                "time": 2
            });
        } else if (!data['house_addr']) {
            $("input[name='house_addr']").addClass("invalid");
            layer.open({
                "content": "请填写房屋地址",
                "skin": "msg",
                "time": 2
            });
        } else if (!/^[0-9]{1,}\.?[0-9]{1,}$/.test(data['house_area']||data['house_area']==0)) {
            $("input[name='house_area']").addClass("invalid");
            layer.open({
                "content": "请正确填写房屋面积",
                "skin": "msg",
                "time": 2
            });
        } else if (!data["floor"]||data['floor']==0) {
            $("input[name='floor']").addClass("invalid");
            layer.open({
                "content": "请填写房屋所在楼层",
                "skin": "msg",
                "time": 2
            });
        } else if (!data["total_floor"]||data['total_floor']==0) {
            $("input[name='total_floor']").addClass("invalid");
            layer.open({
                "content": "请填写房屋总楼层",
                "skin": "msg",
                "time": 2
            });
        } else if (!/^[0-9]{1,}\.?[0-9]$/.test(data['loan_price']||data['loan_price']==0)) {
            $("input[name='loan_price']").addClass("invalid");
            layer.open({
                "content": "请正确填写申请额度",
                "skin": "msg",
                "time": 2
            });
        } else if (data['loan_type'] == 0) {
            $(".loan_type").addClass("invalid");
            layer.open({
                "content": "请选择申请贷款类型",
                "skin": "msg",
                "time": 2
            });
        } else if (data["loan_time"] == 0) {
            $(".loan_time").addClass("invalid");
            layer.open({
                "content": "请选择申请年限",
                "skin": "msg",
                "time": 2
            });
        } else {
            $.ajax({
                type: "post",
                data: data,
                url: "/storeClientInfo",
                success: function (res) {
                    if (res.status) {

                        layer.open({
                            content: "提交成功",
                            skin: "msg",
                            time: 2000000
                        })
                        setTimeout(function(){
                            location.href="/success";
                        },1500)
                        
                    } else {
                        layer.open({
                            content: res.msg,
                            skin: "msg",
                            time: 2
                        })
                    }
                }
            });
        }
        console.log(data);

    });
    // 自动补全
    $(".complete").bootcomplete({
        url: "/getAddr",
        method: "get",
        minLength: 2,

    });

})
        </script>

    </body>
</html>
