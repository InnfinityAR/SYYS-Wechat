<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <title>苏燕云商房产抵押平台</title>
        <link rel="stylesheet" href="/resources/static/bootstrap/bootstrap.css"/>
        <link rel="stylesheet" href="/resources/static/bootcomplete/dist/bootcomplete.css"/>
        <link href="/resources/static/Metro/build/css/metro.css" rel="stylesheet">
        <link href="/resources/static/Metro/build/css/metro-icons.css" rel="stylesheet">
        <link href="/resources/static/Metro/build/css/metro-responsive.css" rel="stylesheet">
        <link href="/resources/static/Metro/build/css/metro-schemes.css" rel="stylesheet">
        <link rel="stylesheet" href="/resources/style/index/css/index.css"/>
        <link href="/resources/static/mobile_scroll/css/mobiscroll.2.13.2.css" rel="stylesheet" />
        <script src="/resources/static/js/app.js"></script>
        <script src="/resources/static/bootstrap/bootstrap.min.js"></script>
        <script src="/resources/static/layer_mobile/layer.js"></script>
        <script src="/resources/static/Metro/build/js/metro.js"></script>
        <script src="/resources/static/bootcomplete/dist/jquery.bootcomplete.js"></script>

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
                    <div class="formGroup">
                        <label class="labelTitle">申请额度</label>
                        <div class="formControl">
                            <input type="member" name="loan_price" placeholder="请填写贷款额度(单位:万元)"  class="form-control">
                        </div>
                    </div>
                    <div class="formGroup">
                        <label class="labelTitle">抵押类型</label>
                        <div class="formControl demo-select add-input" data-role="fieldcontain">
                            <select name="loan_type" class="loan_type" data-role="none">
                                <option value="0">请选择抵押类型</option>
                                <option value="1">一抵</option>
                                <option value="2">二抵</option>
                            </select>
                        </div>
                    </div>
                    <div class="formGroup">
                        <label class="labelTitle">还款方式</label>
                        <div class="formControl demo-select add-input" data-role="fieldcontain">
                            <select name="repayment" class="repayment" data-role="none">
                                <option value="0">请选择抵押类型</option>
                                <option value="1">先息后本</option>
                                <option value="2">等额本息</option>
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
                    <div class="houseDiv">

                        <div class="houseSection">
                            <div class="formGroup">
                                <label class="labelTitle">房屋地址</label>
                                <div class="formControl">
                                    <input type="text" name="addr[]" placeholder="请填写房屋地址" class="form-control">
                                </div>
                            </div>
                            <div class="formGroup residentialAreaDiv">
                                <label class="labelTitle">小区名称</label>
                                <div class="formControl">
                                    <input type="text" name="plot[]" placeholder="请填写房屋所在小区名称" class="form-control complete">
                                </div>
                            </div>
                            <div class="formGroup">
                                <label class="labelTitle">房屋面积</label>
                                <div class="formControl">
                                    <input type="number" name="house_area[]" placeholder="请填写房屋面积/㎡" class="form-control">
                                </div>
                            </div>
                            <div class="formGroup">
                                <label class="labelTitle">所在楼层</label>
                                <div class="formControl">

                                    <input type="number" name="floor[]" max="2" placeholder="请填写房屋所在楼层" class="form-control" >

                                </div>
                            </div>
                            <div class="formGroup">
                                <label class="labelTitle">房屋室号</label>
                                <div class="formControl">
                                    <input type="number" name="building_num[]" max="2" style="width:50px"  class="form-control floor-input" >
                                    <span>栋</span>
                                    <input type="number" name="unit[]" max="2" style="width:50px"  class="form-control floor-input" >
                                    <span >单元</span>
                                    <input type="number" name="room_num[]" max="2" style="width:50px"  class="form-control floor-input" >
                                    <span >室</span>
                                </div>
                            </div>
                            <div class="formGroup">
                                <label class="labelTitle">房屋类型</label>
                                <div class="formControl demo-select add-input" data-role="fieldcontain">
                                    <select name="type[]" class="type" data-role="none">
                                        <option value="0">请选择房屋类型</option>
                                        <option value="1">住宅</option>
                                        <option value="2">别墅</option>
                                        <option value="3">公寓</option>
                                        <option value="4">商业</option>
                                        <option value="5">办公</option>
                                    </select>
                                </div>
                            </div>
                            <div class="formGroup">
                                <label class="labelTitle">详细类型</label>
                                <div class="formControl demo-select add-input" data-role="fieldcontain">
                                    <select name="detail_type[]" class="detail_type" data-role="none">
                                        <option value="">请选择详细类型</option>
                                        <option value="出让">出让</option>
                                        <option value="划拨">划拨</option>
                                        <option value="房改房">房改房</option>
                                        <option value="成本价房">成本价房</option>
                                        <option value="经济适用房满5年">经济适用房满5年</option>
                                        <option value="拆迁安置房满5年">拆迁安置房满5年</option>
                                    </select>
                                </div>
                            </div>
                            <div class="formGroup">
                                <label class="labelTitle">产权来源</label>
                                <div class="formControl demo-select add-input" data-role="fieldcontain">
                                    <select name="source[]" class="source" data-role="none">
                                        <option value="0">请选择产权来源</option>
                                        <option value="1">买受</option>
                                        <option value="2">赠予</option>
                                        <option value="3">法拍</option>
                                        <option value="4">转让</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!--                        <div class="houseSection">
                                                    <div class="formGroup">
                                                        <label class="labelTitle">房屋地址</label>
                                                        <div class="formControl">
                                                            <input type="number" name="addr" placeholder="请填写房屋地址" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="formGroup residentialAreaDiv">
                                                        <label class="labelTitle">小区名称</label>
                                                        <div class="formControl">
                                                            <input type="text" name="plot" placeholder="请填写房屋所在小区名称" class="form-control complete">
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
                        
                                                            <input type="number" name="floor" max="2" placeholder="请填写房屋所在楼层" class="form-control" >
                        
                                                        </div>
                                                    </div>
                                                    <div class="formGroup">
                                                        <label class="labelTitle">房屋室号</label>
                                                        <div class="formControl">
                                                            <input type="number" name="building_num" max="2" style="width:50px"  class="form-control floor-input" >
                                                            <span>栋</span>
                                                            <input type="number" name="unit" max="2" style="width:50px"  class="form-control floor-input" >
                                                            <span >单元</span>
                                                            <input type="number" name="room_num" max="2" style="width:50px"  class="form-control floor-input" >
                                                            <span >室</span>
                                                        </div>
                                                    </div>
                                                    <div class="formGroup">
                                                        <label class="labelTitle">房屋类型</label>
                                                        <div class="formControl demo-select add-input" data-role="fieldcontain">
                                                            <select name="type" class="type" data-role="none">
                                                                <option value="0">请选择房屋类型</option>
                                                                <option value="1">住宅</option>
                                                                <option value="2">别墅</option>
                                                                <option value="3">公寓</option>
                                                                <option value="4">商业</option>
                                                                <option value="5">办公</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="formGroup">
                                                        <label class="labelTitle">详细类型</label>
                                                        <div class="formControl demo-select add-input" data-role="fieldcontain">
                                                            <select name="detail_type" class="detail_type" data-role="none">
                                                                <option value="">请选择详细类型</option>
                                                                <option value="出让">出让</option>
                                                                <option value="划拨">划拨</option>
                                                                <option value="房改房">房改房</option>
                                                                <option value="成本价房">成本价房</option>
                                                                <option value="经济适用房满5年">经济适用房满5年</option>
                                                                <option value="拆迁安置房满5年">拆迁安置房满5年</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="formGroup">
                                                        <label class="labelTitle">产权来源</label>
                                                        <div class="formControl demo-select add-input" data-role="fieldcontain">
                                                            <select name="source" class="source" data-role="none">
                                                                <option value="0">请选择产权来源</option>
                                                                <option value="1">买受</option>
                                                                <option value="2">赠予</option>
                                                                <option value="3">法拍</option>
                                                                <option value="4">转让</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>-->
                    </div>
                    <div class="moreBtn" >其他房产</div>


                    <!--                    <div class="formGroup" style="margin-bottom: 0px;">
                                            <label class="labelTitle" style="vertical-align: top">相关提示</label>
                                            <p class="formP">住宅的抵押值为80%;公寓的抵押值为60%;办公楼和别墅的抵押值为50%</p>
                                        </div>
                                        <div class="formGroup" style="margin-bottom: 30px;">
                                            <label class="labelTitle"  style="vertical-align: top">公司地址</label>
                                            <p class="formP">南京市鼓楼区新街口华新大厦6楼</p>
                                        </div>-->
                    <div class="formGroup assessDiv">
                        <a class="assess">马上评估</a>
                    </div>
                </form>
            </div>
        </div>
        <script>
$(function () {

    var html = "";
    html += "<div class='frame'>";
    html += "<div class='heading'><a href='javascript:;' class='deleteBtn'></div>";
    html += "<div class='content'>";
    html += $(".houseSection").prop("outerHTML");
    html += "</div>";
    html += "</div>";

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
    $('.type').scroller($.extend(opt['select'], opt['default']));
    $('.detail_type').scroller($.extend(opt['select'], opt['default']));
    $('.source').scroller($.extend(opt['select'], opt['default']));
    $('.repayment').scroller($.extend(opt['select'], opt['default']));
    $(".add-input").find("input").addClass("form-control");

    var telReg = /^1[3|4|5|8][0-9]\d{4,8}$/;    // 手机正则
    var nameReg = /^[\u4e00-\u9fa5]{1,2}$/;     // 中文姓名正则
    // 去除提醒框
    $(".form input").focus(function () {
        $(this).removeClass("invalid");
    })
    $(".form select").change(function () {
        $(this).removeClass("invalid");
        if($(this).parent().hasClass("add-input")){
            $(this).prev("input").removeClass("invalid");
        }
    })

    // 其他房产 
    $(".moreBtn").click(function () {
        if ($(".frame").length == 0) {
            $(".houseSection").wrap("<div class='content'></div>");
            $(".content").wrap("<div class='frame'></div>");
            $(".frame").wrap("<div class='accordion' data-role='accordion' data-close-any='true' ></div>");
            $(".frame").prepend("<div class='heading'>房产1</div>");
            $(".frame:first").addClass("active");

        }
        $(".accordion").append(html);
        $(".accordion .frame").each(function (k, v) {
            var index = $(v).index(".frame") + 1;
            if(index!=1){
                $(this).find(".heading").html("房产" + index+"<a href='javascript:;' style='float:right' class='deleteBtn'>×</a>");
            }
            
            
        })
        $('.type:last').scroller($.extend(opt['select'], opt['default']));
        $('.detail_type:last').scroller($.extend(opt['select'], opt['default']));
        $('.source:last').scroller($.extend(opt['select'], opt['default']));
        $(".add-input").find("input").addClass("form-control");
        $(".complete:last").bootcomplete({
            url: "/getAddr",
            method: "get",
            minLength: 2,

        });
        $(".frame:last").addClass("active").siblings(".active").removeClass("active");


    });

    $(document).on("click", ".deleteBtn", function (e) {
        $(this).parents(".frame").remove();
        e = window.event || e;
        if (document.all) {  //只有ie识别
            e.cancelBubble = true;
        } else {
            e.stopPropagation();
        }
    })

    // 点击提交表单
    $(".assess").click(function () {
        var data = {};
        var flag = true;
        data["name"] = $("input[name='name']").val();
        data["sex"] = $("input[name='sex']:checked").val();
        data["tel"] = $("input[name='tel']").val();
        data["loan_price"] = $("input[name='loan_price']").val();
        data["loan_type"] = $(".loan_type").find("option:selected").val();
        data["repayment"] = $(".repayment").find("option:selected").val();
        data["loan_time"] = $(".loan_time").find("option:selected").val();
        
        data["house_addr"] = $("input[name='addr[]']").map(function(){ return $(this).val(); }).get();  
        data["plot"] = $("input[name='plot[]']").map(function(){ return $(this).val(); }).get(); 
        data["house_area"] = $("input[name='house_area[]']").map(function(){ return $(this).val(); }).get();
        data["floor"] = $("input[name='floor[]']").map(function(){ return $(this).val(); }).get();
        data["building_num"] = $("input[name='building_num[]']").map(function(){ return $(this).val(); }).get();
        data["unit"] = $("input[name='unit[]']").map(function(){ return $(this).val(); }).get();
        data["room_num"] = $("input[name='room_num[]']").map(function(){ return $(this).val(); }).get();
        data["house_type"] = $("select[name='type[]']").map(function(){ return $(this).find("option:selected").val();}).get();
        data["house_detail_type"] = $("select[name='detail_type[]']").map(function(){ return $(this).find("option:selected").val(); }).get();
        data["house_source"] = $("select[name='source[]']").map(function(){ return $(this).find("option:selected").val(); }).get();
        console.log(data);

        if(!nameReg.test(data["name"])){
            
            $("input[name='name']").addClass("invalid");
            flag = false;
        }
        if(!telReg.test(data['tel'])){
            
            $("input[name='tel']").addClass("invalid");
            flag = false;
        }
        if(data["loan_price"]==''){
            
            $("input[name='loan_price']").addClass("invalid");
            flag = false;
        }
        if(data["loan_type"]=='0'){
            
            $("select[name='loan_type']").prev("input").addClass("invalid");
            flag = false;
        }
        if(data["repayment"]=='0'){
            
            $("select[name='repayment']").prev("input").addClass("invalid");
            flag = false;
        }
        if(data["loan_time"]=='0'){
            
            $("select[name='loan_time']").prev("input").addClass("invalid");
            flag = false;
        }
//        
        $.each(data["house_addr"],function(k,v){
            if(v==''){
                flag = false;
                if(data['house_addr'].length==1){
                    var msg = "请填写房屋地址";
                    $("input[name='addr[]']").addClass("invalid");
                }else{
                    
                    $(".frame").eq(k).find("input[name='addr[]']").addClass("invalid");
                    var index = k+1;
                    var msg = "房产"+index+"中房屋地址未填写";
                }
                
            }
        })
        $.each(data["plot"],function(k,v){
            if(v==''){
                flag = false;
                if(data['plot'].length==1){
                    var msg = "请填写小区名称";
                    $("input[name='plot[]']").addClass("invalid");
                }else{
                    $(".frame").removeClass("active");
                    $(".frame").eq(k).addClass("active");
                    $(".frame").eq(k).find("input[name='plot[]']").addClass("invalid");
                    var index = k+1;
                    var msg = "房产"+index+"中小区名称未填写";
                }
            }
        })
        $.each(data["house_area"],function(k,v){
            if(v==''){
                flag = false;
                if(data['house_area'].length==1){
                    var msg = "请填写房屋面积";
                    $("input[name='house_area[]']").addClass("invalid");
                }else{
                    $(".frame").removeClass("active");
                    $(".frame").eq(k).addClass("active");
                    $(".frame").eq(k).find("input[name='house_area[]']").addClass("invalid");
                }
            }
        })
        $.each(data["floor"],function(k,v){
            if(v==''){
                flag = false;
                if(data['floor'].length==1){
                    
                    $("input[name='floor[]']").addClass("invalid");
                }else{
                    $(".frame").removeClass("active");
                    $(".frame").eq(k).addClass("active");
                    $(".frame").eq(k).find("input[name='floor[]']").addClass("invalid");
                }
            }
        })
        $.each(data["house_type"],function(k,v){
            if(v==''||v=='0'){
                flag = false;
                if(data['house_type'].length==1){
                    $("select[name='type[]']").prev("input").addClass("invalid");
                }else{
                    $(".frame").removeClass("active");
                    $(".frame").eq(k).addClass("active");
                    $(".frame").eq(k).find("select[name='type[]']").prev("input").addClass("invalid");
                }
            }
        })
        $.each(data["house_detail_type"],function(k,v){
            if(v==''||v=='0'){
                flag = false;
                if(data['house_detail_type'].length==1){
                    $("select[name='detail_type[]']").prev("input").addClass("invalid");
                }else{
                    $(".frame").removeClass("active");
                    $(".frame").eq(k).addClass("active");
                    $(".frame").eq(k).find("select[name='detail_type[]']").prev("input").addClass("invalid");
                }
            }
        })
        $.each(data["house_source"],function(k,v){
            if(v==''||v=='0'){
                flag = false;
                if(data['house_source'].length==1){
                    $("select[name='source[]']").prev("input").addClass("invalid");
                }else{
                    $(".frame").removeClass("active");
                    $(".frame").eq(k).addClass("active");
                    $(".frame").eq(k).find("select[name='source[]']").prev("input").addClass("invalid");
                }
            }
        })
        if(!flag){
            layer.open({
                content:"请填写完整表单信息",
                skin:"msg",
                time:2
            })
            return false;
        }else{
            $.ajax({
                type:"post",
                data:data,
                url:"/storeClientInfo",
                success:function(res){
                    if(res.status){
                        layer.open({
                            content:"提交成功",
                            skin:"msg",
                            time:2
                        })
                        setTimeout(function(){
                            location.href="/success";
                        })
                    }
                }
            });
        }
        

    });
    // 自动补全
    $(".complete").bootcomplete({
        url: "/getAddr",
        method: "get",
        minLength: 2,

    });

})
        </script>
        <script src="/resources/static/mobile_scroll/js/mobiscroll.2.13.2.js"></script>
    </body>
</html>
