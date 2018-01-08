<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link type="text/css" rel="stylesheet" href="{{asset('css')}}/style.css" />
    <!--[if IE 6]>
    <script src="{{asset('js')}}/iepng.js" type="text/javascript"></script>
        <script type="text/javascript">
           EvPNG.fix('div, ul, img, li, input, a');
        </script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="{{asset('css')}}/ShopShow.css" />
    <link rel="stylesheet" type="text/css" href="{{asset('css')}}/MagicZoom.css" />
    <script type="text/javascript" src="{{asset('js')}}/jquery-1.11.1.min_044d0927.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/lrscroll_1.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/jquery.bxslider_e88acd1b.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/MagicZoom.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/menu.js"></script>

    <script type="text/javascript" src="{{asset('js')}}/select.js"></script>

    <script type="text/javascript" src="{{asset('js')}}/lrscroll.js"></script>

    <script type="text/javascript" src="{{asset('js')}}/iban.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/fban.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/f_ban.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/mban.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/bban.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/hban.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/tban.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/n_nav.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/num.js">

        var jq = jQuery.noConflict();
    </script>

    <script type="text/javascript" src="{{asset('js')}}/shade.js"></script>
    <script type="text/javascript" src="{{asset('js')}}/lrscroll_1.js"></script>


<title>尤洪</title>
</head>
<body>
<!--Begin Header Begin-->
<div class="soubg">
    <div class="sou">
        <!--Begin 所在收货地区 Begin-->
        <span class="s_city_b">
            <span class="fl">送货至：</span>
            <span class="s_city">
                <span>四川</span>
                <div class="s_city_bg">
                    <div class="s_city_t"></div>
                    <div class="s_city_c">
                        <h2>请选择所在的收货地区</h2>
                        <table border="0" class="c_tab" style="width:235px; margin-top:10px;" cellspacing="0" cellpadding="0">
                          <tr>
                            <th>A</th>
                            <td class="c_h"><span>安徽</span><span>澳门</span></td>
                          </tr>
                          <tr>
                            <th>B</th>
                            <td class="c_h"><span>北京</span></td>
                          </tr>
                          <tr>
                            <th>C</th>
                            <td class="c_h"><span>重庆</span></td>
                          </tr>
                          <tr>
                            <th>F</th>
                            <td class="c_h"><span>福建</span></td>
                          </tr>
                          <tr>
                            <th>G</th>
                            <td class="c_h"><span>广东</span><span>广西</span><span>贵州</span><span>甘肃</span></td>
                          </tr>
                          <tr>
                            <th>H</th>
                            <td class="c_h"><span>河北</span><span>河南</span><span>黑龙江</span><span>海南</span><span>湖北</span><span>湖南</span></td>
                          </tr>
                          <tr>
                            <th>J</th>
                            <td class="c_h"><span>江苏</span><span>吉林</span><span>江西</span></td>
                          </tr>
                          <tr>
                            <th>L</th>
                            <td class="c_h"><span>辽宁</span></td>
                          </tr>
                          <tr>
                            <th>N</th>
                            <td class="c_h"><span>内蒙古</span><span>宁夏</span></td>
                          </tr>
                          <tr>
                            <th>Q</th>
                            <td class="c_h"><span>青海</span></td>
                          </tr>
                          <tr>
                            <th>S</th>
                            <td class="c_h"><span>上海</span><span>山东</span><span>山西</span><span class="c_check">四川</span><span>陕西</span></td>
                          </tr>
                          <tr>
                            <th>T</th>
                            <td class="c_h"><span>台湾</span><span>天津</span></td>
                          </tr>
                          <tr>
                            <th>X</th>
                            <td class="c_h"><span>西藏</span><span>香港</span><span>新疆</span></td>
                          </tr>
                          <tr>
                            <th>Y</th>
                            <td class="c_h"><span>云南</span></td>
                          </tr>
                          <tr>
                            <th>Z</th>
                            <td class="c_h"><span>浙江</span></td>
                          </tr>
                        </table>
                    </div>
                </div>
            </span>
        </span>
        <!--End 所在收货地区 End-->
        <span class="fr">
            @if(!Auth::user())
                <span class="fl">你好，请<a href="{{URL('login')}}">登录</a>&nbsp; <a href="{{URL('register')}}" style="color:#ff4e00;">免费注册</a>&nbsp;|&nbsp;<a href="{{URL('order')}}">我的订单</a>&nbsp;|</span>
            @else
                <span class="fl">欢迎<span style="color:red">{{ Auth::user()->username}}</span><span id="login">登录</span>&nbsp; <a href="{{URL('register')}}" style="color:#ff4e00;">免费注册</a>&nbsp;|&nbsp;<a href="{{URL('order')}}">我的订单</a>&nbsp;|</span>
                <script src="{{ asset('js') }}/app.js"></script>
                <script>
                    $(function(){
                        $("#login").after('&nbsp;<a href="{{ URL('/logout') }}" style="color:#ff4e00;">退出</a>')
                    })
                </script>
            @endif
                <span class="ss">
                <div class="ss_list">
                    <a href="#">收藏夹</a>
                    <div class="ss_list_bg">
                        <div class="s_city_t"></div>
                        <div class="ss_list_c">
                            <ul>
                                <li><a href="{{URL('user/collect')}}">我的收藏夹</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="ss_list">
                    <a href="#">客户服务</a>
                    <div class="ss_list_bg">
                        <div class="s_city_t"></div>
                        <div class="ss_list_c">
                            <ul>
                                <li><a href="#">客户服务</a></li>
                                <li><a href="#">客户服务</a></li>
                                <li><a href="#">客户服务</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="ss_list">
                    <a href="#">网站导航</a>
                    <div class="ss_list_bg">
                        <div class="s_city_t"></div>
                        <div class="ss_list_c">
                            <ul>
                                <li><a href="#">网站导航</a></li>
                                <li><a href="#">网站导航</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </span>
            <span class="fl">|&nbsp;关注我们：</span>
            <span class="s_sh"><a href="#" class="sh1">新浪</a><a href="#" class="sh2">微信</a></span>
            <span class="fr">|&nbsp;<a href="#">手机版&nbsp;<img src="{{asset('images')}}/s_tel.png" align="absmiddle" /></a></span>
        </span>
    </div>
</div>
<div class="top">
    <div class="logo"><a href="Index.html"><img src="{{asset('images')}}/logo.png" /></a></div>
    <div class="search">
        <form>
            <input type="text" value="" class="s_ipt" />
            <input type="submit" value="搜索" class="s_btn" />
        </form>
        <span class="fl"><a href="#">咖啡</a><a href="#">iphone 6S</a><a href="#">新鲜美食</a><a href="#">蛋糕</a><a href="#">日用品</a><a href="#">连衣裙</a></span>
    </div>
    <div class="i_car">
        <div class="car_t">购物车 [ <span>3</span> ]</div>
        <div class="car_bg">
            <!--Begin 购物车未登录 Begin-->
            <div class="un_login">还未登录！<a href="Login.html" style="color:#ff4e00;">马上登录</a> 查看购物车！</div>
            <!--End 购物车未登录 End-->
            <!--Begin 购物车已登录 Begin-->
            <ul class="cars">
                <li>
                    <div class="img"><a href="#"><img src="{{asset('images')}}/car1.jpg" width="58" height="58" /></a></div>
                    <div class="name"><a href="#">法颂浪漫梦境50ML 香水女士持久清新淡香 送2ML小样3只</a></div>
                    <div class="price"><font color="#ff4e00">￥399</font> X1</div>
                </li>
                <li>
                    <div class="img"><a href="#"><img src="{{asset('images')}}/car2.jpg" width="58" height="58" /></a></div>
                    <div class="name"><a href="#">香奈儿（Chanel）邂逅活力淡香水50ml</a></div>
                    <div class="price"><font color="#ff4e00">￥399</font> X1</div>
                </li>
                <li>
                    <div class="img"><a href="#"><img src="{{asset('images')}}/car2.jpg" width="58" height="58" /></a></div>
                    <div class="name"><a href="#">香奈儿（Chanel）邂逅活力淡香水50ml</a></div>
                    <div class="price"><font color="#ff4e00">￥399</font> X1</div>
                </li>
            </ul>
            <div class="price_sum">共计&nbsp; <font color="#ff4e00">￥</font><span>1058</span></div>
            <div class="price_a"><a href="{{URL('cart/show')}}">去购物车结算</a></div>
            <!--End 购物车已登录 End-->
        </div>
    </div>
</div>
<div class="menu_bg">
    <div class="menu">
        <!--Begin 商品分类详情 Begin-->
        <div class="nav">
            <div class="nav_t">全部商品分类</div>
            <div class="leftNav">
                <ul>      
                <ul>
                <?php foreach($category as $key => $value){ ?>
<!--  -->           <li>
                        <div class="fj">
                            <span class="n_img"><span></span><img src="{{asset('images')}}/nav1.png" /></span>
                            <span class="fl"><?= $key?></span>
                        </div>
                        <div class="zj">
                            <div class="zj_l">
                            <?php foreach($value as $k => $v){ ?>
                                <div class="zj_l_c">
                                    <h2><?= $v['title']?></h2>
                                    <?php foreach($v['child'] as $kk => $vv){?>
                                    <a href="#"><?= $vv['title']?></a>|
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            </div>
                            <div class="zj_r">
                                <a href="#"><img src="{{asset('images')}}/n_img1.jpg" width="236" height="200" /></a>
                                <a href="#"><img src="{{asset('images')}}/n_img2.jpg" width="236" height="200" /></a>
                            </div>
                        </div>
                    </li>
                    <?php } ?>
                </ul>            
            </div>
        </div>  
        <!--End 商品分类详情 End-->                                                     
        <ul class="menu_r">                                                                                         <li><a href="#">首页</a></li>
            @foreach($visibility as $value)                                                   
            <li><a href="Food.html">{{$value['title']}}</a></li>
            @endforeach
            <li><a href="{{url('groupbuy/buy')}}">团购</a></li>
            <li><a href="{{url('seckill/seckill')}}">秒杀</a></li>                                          
                </ul>
            </div>
        </div>
        <!--End 商品分类详情 End-->
    
        <div class="m_ad">中秋送好礼！</div>
    </div>
</div>
@yield('content')
<div class="b_btm_bg b_btm_c">
        <div class="b_btm">
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="{{asset('images')}}/b1.png" width="62" height="62" /></td>
                <td><h2>正品保障</h2>正品行货  放心购买</td>
              </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="{{asset('images')}}/b2.png" width="62" height="62" /></td>
                <td><h2>满38包邮</h2>满38包邮 免运费</td>
              </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="{{asset('images')}}/b3.png" width="62" height="62" /></td>
                <td><h2>天天低价</h2>天天低价 畅选无忧</td>
              </tr>
            </table>
            <table border="0" style="width:210px; height:62px; float:left; margin-left:75px; margin-top:30px;" cellspacing="0" cellpadding="0">
              <tr>
                <td width="72"><img src="{{asset('images')}}/b4.png" width="62" height="62" /></td>
                <td><h2>准时送达</h2>收货时间由你做主</td>
              </tr>
            </table>
        </div>
    </div>
    <div class="b_nav">
        <dl>
            <dt><a href="#">新手上路</a></dt>
            <dd><a href="#">售后流程</a></dd>
            <dd><a href="#">购物流程</a></dd>
            <dd><a href="#">订购方式</a></dd>
            <dd><a href="#">隐私声明</a></dd>
            <dd><a href="#">推荐分享说明</a></dd>
        </dl>
        <dl>
            <dt><a href="#">配送与支付</a></dt>
            <dd><a href="#">货到付款区域</a></dd>
            <dd><a href="#">配送支付查询</a></dd>
            <dd><a href="#">支付方式说明</a></dd>
        </dl>
        <dl>
            <dt><a href="#">会员中心</a></dt>
            <dd><a href="#">资金管理</a></dd>
            <dd><a href="#">我的收藏</a></dd>
            <dd><a href="#">我的订单</a></dd>
        </dl>
        <dl>
            <dt><a href="#">服务保证</a></dt>
            <dd><a href="#">退换货原则</a></dd>
            <dd><a href="#">售后服务保证</a></dd>
            <dd><a href="#">产品质量保证</a></dd>
        </dl>
        <dl>
            <dt><a href="#">联系我们</a></dt>
            <dd><a href="#">网站故障报告</a></dd>
            <dd><a href="#">购物咨询</a></dd>
            <dd><a href="#">投诉与建议</a></dd>
        </dl>
        <div class="b_tel_bg">
            <a href="#" class="b_sh1">新浪微博</a>
            <a href="#" class="b_sh2">腾讯微博</a>
            <p>
            服务热线：<br />
            <span>400-123-4567</span>
            </p>
        </div>
        <div class="b_er">
            <div class="b_er_c"><img src="{{asset('images')}}/er.gif" width="118" height="118" /></div>
            <img src="{{asset('images')}}/ss.png" />
        </div>
    </div>
    <div class="btmbg">
        <div class="btm">
            备案/许可证编号：蜀ICP备12009302号-1-www.dingguagua.com   Copyright © 2015-2018 尤洪商城网 All Rights Reserved. 复制必究 , Technical Support: Dgg Group <br />
            <img src="{{asset('images')}}/b_1.gif" width="98" height="33" /><img src="{{asset('images')}}/b_2.gif" width="98" height="33" /><img src="{{asset('images')}}/b_3.gif" width="98" height="33" /><img src="{{asset('images')}}/b_4.gif" width="98" height="33" /><img src="{{asset('images')}}/b_5.gif" width="98" height="33" /><img src="{{asset('images')}}/b_6.gif" width="98" height="33" />
        </div>
    </div>
</body>
<!--[if IE 6]>
<script src="//letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<script >
    window.onload = function(){
        $.ajaxSetup({
            headers: {
                'X-XSRF-TOKEN': $.cookie('XSRF-TOKEN')
            }
        });
    }

</script>
<![endif]-->
</html>
<script src="{{asset('js')}}/ShopShow.js"></script>
