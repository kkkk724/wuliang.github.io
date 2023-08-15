<!DOCTYPE html>
<!--
///////////////////////////////////////////////////////////////////
//                                                               //
//            开源不易，转载还请保留版权信息                           //
//            版权所有：超耐磨水笔工作室                              //
//            官方网站：https://cnm.sb                             //
//                                                               //
///////////////////////////////////////////////////////////////////
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <meta name="format-detection" content="telephone=no,email=yes"/>
    <meta name="language" content="zh-CN">
    <meta name="title" content="CNM.SB">
    <meta name="author" content="CNMSB">
    <meta name="description" content="CNM.SB，也许是一个牛*的站点！">
    <meta name="keywords" content="CNM.SB, CNMSB, CNM, SB, cnm.sb, cnmsb, cnm, sb, 超耐磨水笔">
    <meta name="robots" content="All">
    <title>CNM.SB</title>
    <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon" /> <!--网站ico图标-->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="./iconfont/iconfont.css"> <!--iconfont阿里图标库-->
</head>
<body>
<!--主框架-->
<div class="container">
    <!--左侧栏-->
    <div class="left">
        <div class="left-title">
            <h3>#全开源</h3>
        </div>
        <ul class="cnmsb-rolling">
            <div class="avatar">
                <img src="./img/tx.webp" alt="">
            </div>
            <li onclick="CNMSBshowDetails(this,0)"><i class="iconfont icon-home"><em></em></i></li> <!--首页-->
            <li onclick="CNMSBshowDetails(this,1)"><i class="iconfont icon-sousuo search-color"></i></li>    <!--搜索-->
            <li onclick="CNMSBshowDetails(this,2)"><i class="iconfont icon-lianxiren"></i></li>     <!--联系方式-->
            <p class="h"></p><!--我是分割线-->
            <li onclick="CNMSBshowDetails(this,3)"><i class="iconfont icon-kaifa"><em></em></i></li>
            <!--本站源码-->
            <li onclick="CNMSBshowDetails(this,4)"><i class="iconfont icon-wangzhan"></i></li><!--网站介绍-->
            <li onclick="CNMSBshowDetails(this,5)"><i class="iconfont icon-other"></i></li><!--旗下站点-->
            <li onclick="CNMSBshowDetails(this,6)"><i class="iconfont icon-link"></i></li>   <!--友情链接-->
            <li onclick="CNMSBshowDetails(this,7)"><i class="iconfont icon-Chat"></i></li>   <!--聊天室-->
            <li onclick="CNMSBshowDetails(this,8)"><i class="iconfont icon-liuyan"></i></li>   <!--留言-->
            <p class="h"></p><!--我是分割线-->
            <li onclick="CNMSBshowDetails(this,9)" class="li-bg3"><i class="iconfont icon-kaixin-yuan"><em></em></i>
            </li><!--个人介绍-->
            <li onclick="CNMSBshowDetails(this,10)" class="li-bg4"><i class="iconfont icon-game"></i></li>   <!--游戏生涯-->
            <li onclick="CNMSBshowDetails(this,11)" class="li-bg2"><i class="iconfont icon-aixin--xian"></i></li>
            <!--文案馆-->
            <li onclick="CNMSBshowDetails(this,12)"><i class="iconfont icon-pic"></i></li> <!--图片-->
            <li onclick="CNMSBshowDetails(this,13)"><i class="iconfont icon-shipin"></i></li> <!--视频-->
            <!--<li onclick="CNMSBshowDetails(this,14)"><i class="iconfont icon-meishi"></i></li> &lt;!&ndash;美食&ndash;&gt;-->
            <li onclick="CNMSBshowDetails(this,14)" class="li-bg"><i class="iconfont icon-email"></i></li>  <!--邮箱-->
            <li onclick="CNMSBshowDetails(this,15)"><i class="iconfont icon-dashang2"></i></li>   <!--打赏-->
            <li onclick="CNMSBshowDetails(this,16)" class="li-bg5"><i class="iconfont icon-chushoujiage"></i></li>
            <!--域名等等售卖-->
            <p class="h"></p><!--我是分割线-->
            <li onclick="CNMSBshowDetails(this,17)"><i class="iconfont icon-gengduo"><em></em></i></li>   <!--更多-->
            <li onclick="CNMSBshowDetails(this,18)"><i class="iconfont icon-admin"></i></li>   <!--加号-->
            <li onclick="CNMSBshowDetails(this,19)"><i class="iconfont icon-jia"></i></li>   <!--加号-->
            <li onclick="CNMSBshowDetails(this,20)"><i class="iconfont icon-jia"></i></li>   <!--加号-->
        </ul>
        <i class="iconfont icon-arrow-down"></i>  <!--向下滑动提示箭头-->
    </div>
    <!--右侧栏-->
    <div class="right">
        <!--首页-->
        <div class="items-box">
            <div class="search-box">
                <input type="text" placeholder="一个暂时不能用的搜索框">
                <i class="iconfont icon-sousuo search-color postion-serarch"></i>
                <span class="search-btn">搜索</span>
            </div>
            <!--屏幕宽度大于高度时显示-->
            <div id="cnmsb">
                <p style="font-size: 20px">电脑端样式未适配，请使用手机访问本站，或F12，使用手机模式预览！</p>
            </div>
            <div class="cnmsb-main">
                <!-- 首页大盒子 -->
                <div class="cnmsb-box">
                    <div class="cnmsb-info">
                        <!--头像 -->
                        <div class="cnmsb-head">
                            <img class="cnmsb-picture" src="./img/tx.webp" alt="">
                            <!-- 个性签名 -->
                            <div class="cnmsb-sign">
                                <span>风来自很远的地方...</span>
                            </div>
                        </div>
                        <!-- 欢迎语 -->
                        <div class="cnmsb-name">
                            <h1>你好，超耐磨水笔</h1>
                            <!-- 分割线 -->
                            <div class="hr2"></div>
                        </div>
                        <!-- 我的标签 -->
                        <div class="cnmsb-label">
                            在校颓废大学生 / 前端CV工程师
                        </div>
                    </div>
                    <!-- 首页社交平台 -->
                    <div class="cnmsb-link">
                        <ul>
                            <li>
                                <a href="http://www.xydai,cn" target="_blank" rel="noopener noreferrer">
                                    <i class="iconfont icon-blog1"></i>
                                    <span>博客</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://weibo.com/u/7747323128" target="_blank" rel="noopener noreferrer">
                                    <i class="iconfont icon-weibo"></i>
                                    <span>微博</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://space.bilibili.com/1934171668" target="_blank"
                                   rel="noopener noreferrer">
                                    <i class="iconfont icon-bilibili"></i>
                                    <span>B站</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.zhihu.com/people/cnmsb-59" target="_blank"
                                   rel="noopener noreferrer">
                                    <i class="iconfont icon-zhihu"></i>
                                    <span>知乎</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://gitee.com/cnm-sb" target="_blank" rel="noopener noreferrer">
                                    <i class="iconfont icon-gitee"></i>
                                    <span>Gitee</span>
                                </a>
                            </li>
                            <li>
                                <a href="https://github.com/cnm-sb" target="_blank" rel="noopener noreferrer">
                                    <i class="iconfont icon-github"></i>
                                    <span>GitHub</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="cnmsb-footer">
                    <p>Copyright © 2022 - 2022 <a href="https://cnm.sb" target="_blank"
                                                  rel="noopener noreferrer">CNM.SB</a> .All Rights Reserved.</p>
                    <p><a href="https://beian.miit.gov.cn" target="_blank"
                          rel="noopener noreferrer">傻ICP备20220317号-8</a></p>
                </div>
            </div>
        </div>
        <!--第二页 搜索-->
        <div class="items-box cnmsb">
            <div class="search-box">
                <input type="text" placeholder="一个暂时不能用的搜索框">
                <i class="iconfont icon-sousuo search-color postion-serarch"></i>
                <span class="search-btn">搜索</span>
            </div>
            <div class="items">
                <div class="top" style=" background-image: url('./img/bg.webp');">
                    <h3>Today | 生活博客</h3>
                </div>
                <div class="footer f-bg">
                    <div class="f-top">
                        <a class="a-active" href="#">生活</a>
                        <a href="#">记录</a>
                        <a href="#">心情</a>
                    </div>
                    <div class="f-footer">
                        <div class="avatar-c">
                            <img src="./img/tx.webp" alt="">
                        </div>
                        <span>生活云档</span>
                        <a href="https://cnm.sb" target="_blank" rel="noopener noreferrer">探索</a>
                    </div>
                </div>
            </div>
            <div class="items">
                <div class="top" style=" background-image: url('./img/bg.webp');">
                    <h3>Today | 社交论坛</h3>
                </div>
                <div class="footer f-bg2">
                    <div class="f-top">
                        <a class="a-active" href="#">兴趣</a>
                        <a href="#">攻略</a>
                        <a href="#">每日一笑</a>
                    </div>
                    <div class="f-footer">
                        <div class="avatar-c">
                            <img src="./img/tx.webp" alt="">
                        </div>
                        <span>灵魂交互</span>
                        <a href="https://cnm.sb" target="_blank" rel="noopener noreferrer">加入</a>
                    </div>
                </div>
            </div>
            <div class="items">
                <div class="top" style=" background-image: url('./img/bg.webp');">
                    <h3>Today | 查询网</h3>
                </div>
                <div class="footer f-bg3">
                    <div class="f-top">
                        <a class="a-active" href="#">收录</a>
                        <a href="#">查询</a>
                        <a href="#">无处可藏</a>
                    </div>
                    <div class="f-footer">
                        <div class="avatar-c">
                            <img src="./img/tx.webp" alt="">
                        </div>
                        <span>查询有惊喜</span>
                        <a href="https://cnm.sb" target="_blank" rel="noopener noreferrer">前往</a>
                    </div>
                </div>
            </div>
            <div style="height:2rem;"></div>
        </div>
        <!--第三页 联系方式-->
        <div class="items-box cnmsb">
            <div class="search-box">
                <input type="text" placeholder="一个暂时不能用的搜索框">
                <i class="iconfont icon-sousuo search-color postion-serarch"></i>
                <span class="search-btn">搜索</span>
            </div>
            <div class="items-banner">
                <div class="top" style=" background-image: url('./img/bg.webp');">
                    <p style="font-size: 18px;color:#ffffff;">联系方式</p>
                </div>
            </div>
            <ul class="list-box">
                <li>
                    <div class="top-header">
                        <span>
                            <h3>😁联/系/方/式</h3></span>
                    </div>
                    <div class="cnmsb-link">
                        <ul>
                            <li>
                                <a href="https://cnm.sb" target="_blank" rel="noopener noreferrer">
                                    <i class="iconfont icon-sign_qq"></i>
                                    <span>QQ:22741441</span><br>
                                </a>
                            </li>
                            <li>
                                <a href="https://cnm.sb" target="_blank" rel="noopener noreferrer">
                                    <i class="iconfont icon-weixin"></i>
                                    <span>微信：不给你说</span><br>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:admin@cnm.sb">
                                    <i class="iconfont icon-email"></i>
                                    <span>Email:admin@cnm.sb</span><br>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!--第四页 本站源码-->
        <div class="items-box cnmsb">
            <div class="search-box">
                <input type="text" placeholder="一个暂时不能用的搜索框">
                <i class="iconfont icon-sousuo search-color postion-serarch"></i>
                <span class="search-btn">搜索</span>
            </div>
            <div class="items-banner">
                <div class="top" style=" background-image: url('./img/bg.webp');">
                    <p style="font-size: 18px;color:#ffffff;">本站源码</p>
                </div>
            </div>
            <ul class="list-box">
                <li>
                    <div class="top-header">
                        <span><h3>😁版/权/声/明</h3></span>
                    </div>
                    <ul class="list-item">
                        <li>
                            <p>😁此代码仅供学习，修改，部署使用，禁止售卖</p>
                            <p>😁开源不易，转载还请保留版权信息：超耐磨水笔工作室(www.cnm.sb)</p>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="top-header">
                        <span><h3>😁源/码/下/载</h3></span>
                    </div>
                    <ul class="list-item">
                        <li>
                            <div class="share">
                                <h3>😁开源代码已发布在以下平台</h3><br>
                                <p>gitee:</p>
                                <p><a href="https://gitee.com/cnm-sb/cnm-sb" target="_blank" rel="noopener noreferrer">https://gitee.com/cnm-sb/cnm-sb</a>
                                </p><br>
                                <p>github:</p>
                                <p><a href="https://github.com/cnm-sb/cnm-sb" target="_blank" rel="noopener noreferrer">https://github.com/cnm-sb/cnm-sb</a>
                                </p><br>
                                <h3>😁源码下载地址:</h3><br>
                                <p>网站本地服务器:</p>
                                <p><a href="https://cnm.sb/download/cnm.sb.zip" target="_blank"
                                            rel="noopener noreferrer">https://cnm.sb/download/cnm.sb.zip</a>
                                </p><br>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--第五页 关于本站-->
        <div class="items-box cnmsb">
            <div class="search-box">
                <input type="text" placeholder="一个暂时不能用的搜索框">
                <i class="iconfont icon-sousuo search-color postion-serarch"></i>
                <span class="search-btn">搜索</span>
            </div>
            <div class="items-banner">
                <div class="top" style=" background-image: url('./img/bg.webp');">
                    <p style="font-size: 18px;color:#ffffff;">关于本站</p>
                </div>
            </div>
            <ul class="list-box">
                <li>
                    <div class="top-header">
                        <span>
                            <h3>😁关/于/本/站</h3></span>
                    </div>
                    <ul class="list-item">
                        <li>
                            <p>😂网址:https://cnm.sb</p>
                            <p>😂非常好记，非常的牛*，寓意：超耐磨水笔，不可以想歪，嗯哼</p>
                        </li>
                        <li>
                            <p>😭代码有一些瑕疵</p>
                            <p>😭电脑端ui界面未优化，推荐使用手机访问，或者F12预览</p>
                            <p>😘发现bug请联系站长，非常感谢！</p>
                        </li>
                        <li>
                            <p>🍦网站图片视频文字等素材部分来源于网络</p>
                            <p>🍦如若侵权，请联系站长删除！</p>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="top-header">
                        <span>
                            <h3>😁静/态/资/源</h3></span>
                    </div>
                    <ul class="list-item">
                        <li>
                            <p>😭本站服务器性能较低，部分文件托管在云存储</p>
                            <p>😭源码内有部分链接，若您有更好的选择，，或防止失效，可选择替换</p>
                        </li>
                        <li>
                            <p>图片，视频,托管在Dcloud云存储空间</p>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--第六页 旗下站点-->
        <div class="items-box cnmsb">
            <div class="search-box">
                <input type="text" placeholder="一个暂时不能用的搜索框">
                <i class="iconfont icon-sousuo search-color postion-serarch"></i>
                <span class="search-btn">搜索</span>
            </div>
            <div class="items-banner">
                <div class="top" style=" background-image: url('./img/bg.webp');">
                    <p style="font-size: 18px;color:#ffffff;">旗下站点</p>
                </div>
            </div>
            <ul class="list-box">
                <li>
                    <div class="top-header">
                        <span>
                            <h3>😁旗/下/站/点</h3></span>
                    </div>
                    <ul class="list-item">
                        <li>
                            <div class="items2">
                                <a href="https://cnm.sb" target="_blank" rel="noopener noreferrer">
                                    <div class="top" style=" background-image: url('./img/bg.webp');">
                                        <h3>Beautyful | 网站一</h3>
                                    </div>
                                    <div class="footer2 f2-bg">
                                        <div class="f-footer2">
                                            <span>我是一句话网站介绍</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="items2">
                                <a href="https://cnm.sb" target="_blank" rel="noopener noreferrer">
                                    <div class="top" style=" background-image: url('./img/bg.webp');">
                                        <h3>Wonderful | 网站二</h3>
                                    </div>
                                    <div class="footer2 f2-bg">
                                        <div class="f-footer2">
                                            <span>我是一句话网站介绍</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="items2">
                                <a href="https://cnm.sb" target="_blank" rel="noopener noreferrer">
                                    <div class="top" style=" background-image: url('./img/bg.webp');">
                                        <h3>Amazing | 网站三</h3>
                                    </div>
                                    <div class="footer2 f2-bg">
                                        <div class="f-footer2">
                                            <span>我是一句话网站介绍</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="items2">
                                <a href="https://cnm.sb" target="_blank" rel="noopener noreferrer">
                                    <div class="top" style=" background-image: url('./img/bg.webp');">
                                        <h3>Nice | 网站四</h3>
                                    </div>
                                    <div class="footer2 f2-bg">
                                        <div class="f-footer2">
                                            <span>我是一句话网站介绍</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
            <div style="height:2rem;"></div>
        </div>
        <!--第七页 友情链接-->
        <div class="items-box cnmsb">
            <div class="search-box">
                <input type="text" placeholder="一个暂时不能用的搜索框">
                <i class="iconfont icon-sousuo search-color postion-serarch"></i>
                <span class="search-btn">搜索</span>
            </div>
            <div class="items-banner">
                <div class="top" style=" background-image: url('./img/bg.webp');">
                    <p style="font-size: 18px;color:#ffffff;">友情链接</p>
                </div>
            </div>
            <ul class="list-box">
                <li>
                    <div class="top-header">
                        <span><h3>😁友/情/链/接</h3></span>
                    </div>
                    <ul class="list-item">

                        <div class="cnmsb-link-box">
                            <a href="https://cnm.sb" target="_blank" rel="noopener noreferrer">
                                <div class="cnmsb-link-item"><img class="cnmsb-link-avatar" src="img/tx.webp">
                                    <span class="cnmsb-link-name">超耐磨水笔</span>
                                </div>
                            </a>
                            <a href="https://cnm.sb" target="_blank" rel="noopener noreferrer">
                                <div class="cnmsb-link-item"><img class="cnmsb-link-avatar" src="img/tx.webp"><span
                                        class="cnmsb-link-name">超耐磨水笔</span>
                                </div>
                            </a>
                            <a href="https://cnm.sb" target="_blank" rel="noopener noreferrer">
                                <div class="cnmsb-link-item"><img class="cnmsb-link-avatar" src="img/tx.webp"><span
                                        class="cnmsb-link-name">超耐磨水笔</span>
                                </div>
                            </a>
                            <a href="https://cnm.sb" target="_blank" rel="noopener noreferrer">
                                <div class="cnmsb-link-item"><img class="cnmsb-link-avatar" src="img/tx.webp"><span
                                        class="cnmsb-link-name">超耐磨水笔</span>
                                </div>
                            </a>
                            <a href="https://cnm.sb" target="_blank" rel="noopener noreferrer">
                                <div class="cnmsb-link-item"><img class="cnmsb-link-avatar" src="img/tx.webp"><span
                                        class="cnmsb-link-name">超耐磨水笔</span>
                                </div>
                            </a>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
        <!--第八页 聊天室-->
        <div class="items-box cnmsb">
            <div class="search-box">
                <input type="text" placeholder="一个暂时不能用的搜索框">
                <i class="iconfont icon-sousuo search-color postion-serarch"></i>
                <span class="search-btn">搜索</span>
            </div>
            <div class="items-banner">
                <div class="top" style=" background-image: url('./img/bg.webp');">
                    <p style="font-size: 18px;color:#ffffff;">聊天室</p>
                </div>
            </div>
            <ul class="list-box">
                <li>
                    <div class="top-header">
                        <span>
                            <h3>😁聊/天/室</h3></span>
                    </div>
                    <ul class="list-item">
                        <li>
                            <p>聊天室页面2.0版本推出</p>
                        </li>
                        <li>
                            <p>敬请期待</p>
                        </li>
                        <li>
                            <p>可尝试iframe标签引入网页聊天页面</p>
                        </li>
                    </ul>
                </li>
                <!--iframe标签嵌入网页-->
                <!--<iframe src="https://cnm.sb" frameborder="0"  height="600px"></iframe>-->
            </ul>
        </div>
        <!--第九页 留言-->
        <div class="items-box cnmsb">
            <div class="search-box">
                <input type="text" placeholder="一个暂时不能用的搜索框">
                <i class="iconfont icon-sousuo search-color postion-serarch"></i>
                <span class="search-btn">搜索</span>
            </div>
            <div class="items-banner">
                <div class="top" style="background-image: url('./img/bg.webp');">
                    <p style="font-size: 18px;color:#ffffff;">留言</p>
                </div>
            </div>
            <ul class="list-box">
                <li>
                    <div class="top-header">
                        <span>
                            <h3>😁留/言</h3></span>
                    </div>
                    <ul class="list-item">
                        <li>
                            <p>留言页面2.0版本推出</p>
                        </li>
                        <li>
                            <p>敬请期待</p>
                        </li>
                        <li>
                            <p>可尝试iframe标签引入在线留言页面，或接入其他留言程序</p>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--第十页 个人介绍-->
        <div class="items-box cnmsb">
            <div class="search-box">
                <input type="text" placeholder="一个暂时不能用的搜索框">
                <i class="iconfont icon-sousuo search-color postion-serarch"></i>
                <span class="search-btn">搜索</span>
            </div>
            <div class="items-banner">
                <div class="top" style=" background-image: url('./img/bg.webp');">
                    <p style="font-size: 18px;color:#ffffff;">个人介绍</p>
                </div>
            </div>
            <ul class="list-box">
                <li>
                    <div class="top-header">
                        <span>
                            <h3>😁个/人/介/绍</h3></span>
                    </div>
                    <ul class="list-item">
                        <li>
                            <p>
                                本人学识渊博，经验丰富，代码风骚，效率恐怖。C/C＋＋，java，php无不精通，熟练掌握各种框架。
                            </p>
                            <p>
                                会DDOS一秒钟死一个站，会注入，会上传，会Xss，会破解，会嗅探，会开发，会业务，会运维，会渗透。互联网内，我无处不在。
                            </p>
                            <p>
                                全国漏洞认识深刻，熟练掌握各种操作系统内核。认真学习过《黑客攻防技术宝典》，《逆向工程》，《游戏waigua攻防艺术》等专业书籍。深山苦练十余载，一天只睡2小时。
                            </p>
                            <p>
                                听指挥，执行快，脾气好，不喷人，操作虎，意识强，渗透快，shell多，能过狗，能过盾。
                            </p>
                            <p>
                                千里之外取服务器首级，瞬息之间爆管理员狗头，压安全狗如压草芥。电话通知出Bug后，秒登那个啥，千里之外定位问题，瞬息之间修复上线。
                            </p>
                            <p>
                                只有你想不到的，没有我做不到的。
                            </p>
                            <p>
                                以上都是吹的，我只会划水摸鱼，我是个废物。
                            </p>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--第十一页 游戏生涯-->
        <div class="items-box cnmsb">
            <div class="search-box">
                <input type="text" placeholder="一个暂时不能用的搜索框">
                <i class="iconfont icon-sousuo search-color postion-serarch"></i>
                <span class="search-btn">搜索</span>
            </div>
            <div class="items-banner">
                <div class="top" style=" background-image: url('./img/bg.webp');">
                    <p style="font-size: 18px;color:#ffffff;">游戏</p>
                </div>
            </div>
            <ul class="list-box">
                <li>
                    <div class="top-header">
                        <span>
                            <h3>😁游/戏/生/涯</h3></span>
                    </div>
                    <ul class="list-item">
                        <li>
                            <p>
                                王者荣耀
                            </p>
                            <p>
                                和平精英
                            </p>
                            <p>
                                穿越火线
                            </p>
                            <p>
                                僵尸大战植物
                            </p>
                            <p>
                                等等
                            </p>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>
        <!--第十二页 文案馆-->
        <div class="items-box cnmsb">
            <div class="search-box">
                <input type="text" placeholder="一个暂时不能用的搜索框">
                <i class="iconfont icon-sousuo search-color postion-serarch"></i>
                <span class="search-btn">搜索</span>
            </div>
            <div class="items-banner">
                <div class="top" style=" background-image: url('./img/bg.webp');">
                    <p style="font-size: 18px;color:#ffffff;">句子</p>
                </div>
            </div>
            <ul class="list-box">
                <li>
                    <div class="top-header">
                        <span>
                            <h3>😁可以改成心情微语页面</h3></span>
                    </div>
                </li>
                <li>
                    <div class="top-header">
                        <span>
                            <h3>😁暖/心/情/话</h3></span>
                    </div>
                    <ul class="list-item">
                        <li>
                            <p>
                                1、你是我眼波的温柔，你是我心中的不朽，你是我热爱这个世界近乎全部的理由
                            </p>
                            <p>
                                2、春花，秋月，夏日清风，冬日暮雪，这些都很美，但唯有你的心里，才有我想去的四季
                            </p>
                            <p>
                                3、甜有100种方式，吃糖，蛋糕，还有每天98次的想你
                            </p>
                            <p>
                                4、亲爱的，我爱你，不光是因为你的样子，还因为和你在一起时我的样子
                            </p>
                            <p>
                                5、想和你喝酒是假，想醉你怀里是真
                            </p>
                            <p>
                                6、我不想做你的眼中人，只想做你的心上人
                            </p>
                            <p>
                                7、每天早晨醒来 看到你和阳光都在 这就是我想要的未来
                            </p>
                            <p>
                                8、我一点都不遗憾没有在最好的时光遇见你，因为遇见你之后最好的时光才开始
                            </p>
                            <p>
                                9、我想要的很简单：兜里有糖，肚里有墨，手里有活，卡里有钱，未来有你
                            </p>
                            <p>
                                10、我上不了九天揽不了月，去不到五洋捉不到鳖，但我终其一生，捉到你，暖了你，已经足够
                            </p>
                            <p>
                                11、那些终将过下去的日子，叫做余生。而与你有关的日子，才是未来
                            </p>
                            <p>
                                12、超级超级喜欢你，嘴上三分，心里十分
                            </p>
                            <p>
                                13、如果全世界都对你恶语相加，我就对你说上一世的情话；如果全世界都给你风雨泥泞，我就给你一生的守护
                            </p>
                            <p>
                                14、你能看见山，你能看见海，你能看见这个世界的一切，我就不一样，我目光比较短浅，只能看见你
                            </p>
                            <p>
                                15、一想到能和你共度余生，我就对余生充满期待
                            </p>
                            <p>
                                16、想牵你的手，一起到一个叫永远的地方，看天长地久的风景，尝海枯石烂的味道
                            </p>
                            <p>
                                17、喜欢你，就想把柚子最甜的部分给你，蛋糕上的小樱桃给你，只要是美妙的东西，我都想给你
                            </p>
                            <p>
                                18、嘴角边情话是你，心里所念所想是你，眼中星辰是你，余生所爱也是你
                            </p>
                            <p>
                                19、今生，你不老，我不老，你不离，我不弃
                            </p>
                            <p>
                                20、把你的名字写在手心，摊开时是想念，握紧时是幸福。就想这样，手牵手给你一世的温柔；就想这样，肩并肩给你一生的幸福
                            </p>
                            <p>
                                21、少说一句怕成遗憾，多说一句怕是惊扰。我喜欢你，四个字，刚刚好
                            </p>
                            <p>
                                22、想做你的猫，可以被你喂养，还可以跟你睡觉
                            </p>
                            <p>
                                23、我想和你一起去你的家乡，去你从小长大的地方，去所有你想去的地方，吃你想吃的东西，我想参与你的过去，而你的未来，就交给我
                            </p>
                            <p>
                                24、春风十里，不及相遇有你；晴空万里，不及心中有你
                            </p>
                            <p>
                                25、一生就这么一次，谈一场以结婚为目的的恋爱，然后就那样相守，在来往的流年里，
                            </p>
                            <p>
                                26、这世界就是个巨大的娃娃机，我站在橱窗旁边，只想要你
                            </p>
                            <p>
                                27、你走向我，我觉得一日不见如隔三秋。你朝我笑，我又觉得三秋未见不过一日
                            </p>
                            <p>
                                28、喜欢你的我就好像是个亡命天涯的赌徒，永远不可能翻盘，我把前半辈子写在纸上，余生请多指教
                            </p>
                            <p>
                                29、海上月是天上月，眼前人是心上人
                            </p>
                            <p>
                                30、每想你一次，天上的星星就多一颗，今晚的天空就变成了星海，晚安
                            </p>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--第十三页 图片-->
        <div class="items-box cnmsb">
            <div class="search-box">
                <input type="text" placeholder="一个暂时不能用的搜索框">
                <i class="iconfont icon-sousuo search-color postion-serarch"></i>
                <span class="search-btn">搜索</span>
            </div>
            <ul class="list-box">
                <li>
                    <div class="top-header">
                        <span>
                            <h3>😁图/片/壁/纸</h3></span>
                    </div>
                    <div class="pic">
                        <img src="./img/bg.webp">
                    </div>
                    <div class="pic">
                        <img src="./img/bg.webp">
                    </div>
                    <div class="pic">
                        <img src="./img/bg.webp">
                    </div>
                    <div class="pic">
                        <img src="./img/bg.webp">
                    </div>
                    <div class="pic">
                        <img src="./img/bg.webp">
                    </div>
                    <div class="pic">
                        <img src="./img/bg.webp">
                    </div>
                    <div class="pic">
                        <img src="./img/bg.webp">
                    </div>
                    <p>图片来源于网络，侵权请联系删除</p>
                </li>
            </ul>
            <div style="height:2rem;"></div>
        </div>
        <!--第十四页 视频-->
        <div class="items-box cnmsb">
            <div class="search-box">
                <input type="text" placeholder="一个暂时不能用的搜索框">
                <i class="iconfont icon-sousuo search-color postion-serarch"></i>
                <span class="search-btn">搜索</span>
            </div>
            <ul class="list-box">
                <li>
                    <div class="top-header">
                        <span>
                            <h3>😁视/频</h3></span><!--视频链接云存储-->
                    </div>
                    <div style="margin: 5px">
                        <video src="https://vkceyugu.cdn.bspapp.com/VKCEYUGU-6c71be5d-305d-45a8-8fbe-5256258394cc/61eba51b-6959-4bcf-bb54-552bd0639cb2.mp4"
                               controls="controls" style="width: 100%">
                        </video>
                    </div>
                    <div style="margin: 5px">
                        <video src="https://vkceyugu.cdn.bspapp.com/VKCEYUGU-6c71be5d-305d-45a8-8fbe-5256258394cc/bf0509d4-1229-4633-a4b1-bc0ed05d2a81.mp4"
                               controls="controls" style="width: 100%">
                        </video>
                    </div>
                    <div style="margin: 5px">
                        <video src="https://vkceyugu.cdn.bspapp.com/VKCEYUGU-6c71be5d-305d-45a8-8fbe-5256258394cc/b0f955cf-9948-49ac-92a6-10fe371a2ef4.mp4"
                               controls="controls" style="width: 100%">
                        </video>
                    </div>
                    <p>视频来源于网络，侵权请联系删除</p>
                </li>
            </ul>
        </div>
        <!-- 美食-->
        <!--        <div class="items-box cnmsb">-->
        <!--            <div class="search-box">-->
        <!--                <input type="text" placeholder="一个暂时不能用的搜索框">-->
        <!--                <i class="iconfont icon-sousuo search-color postion-serarch"></i>-->
        <!--                <span class="search-btn">搜索</span>-->
        <!--            </div>-->
        <!--            <h2>记录站长喜欢的美食</h2>-->
        <!--        </div>-->
        <!--第十六页 邮箱-->
        <div class="items-box cnmsb">
            <div class="search-box">
                <input type="text" placeholder="一个暂时不能用的搜索框">
                <i class="iconfont icon-sousuo search-color postion-serarch"></i>
                <span class="search-btn">搜索</span>
            </div>
            <div class="items-banner">
                <div class="top" style=" background-image: url('./img/bg.webp');">
                    <p style="font-size: 18px;color:#ffffff;">超耐磨邮箱</p>
                </div>
            </div>
            <ul class="list-box">
                <li>
                    <div class="top-header">
                        <span>
                            <h3>😁超耐磨邮箱</h3></span>
                    </div>
                    <ul class="list-item">
                        <li>
                            <div>
                                <p>超耐磨邮箱账号申请，极品靓号，先到先得</p>

                                <p>自定义邮箱账号 ________@cnm.sb（例站长的邮箱：admin@cnm.sb）</p>

                                <p>基于腾讯企业邮箱搭建，可使用微信，企业微信，网页，各邮箱app等进行管理，安全，高效，便捷</p>

                                <p>可收发邮件，可绑定支付宝，可注册游戏，等等。和其他邮箱无任何差别</p>

                                <p>不论长短，账号费用30元/年，88元永久使用，3天无理由退款</p>

                                <p>邮箱账号需要绑定您本人手机号，超耐磨承诺保护客户隐私</p>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--第十七页 捐助打赏-->
        <div class="items-box cnmsb">
            <div class="search-box">
                <input type="text" placeholder="一个暂时不能用的搜索框">
                <i class="iconfont icon-sousuo search-color postion-serarch"></i>
                <span class="search-btn">搜索</span>
            </div>
            <div class="items-banner">
                <div class="top" style=" background-image: url('./img/bg.webp');">
                    <p style="font-size: 18px;color:#ffffff;">捐助打款</p>
                </div>
            </div>
            <ul class="list-box">
                <li>
                    <div class="top-header">
                        <span>
                            <h3>😁支/付/宝</h3></span>
                    </div>
                    <ul class="list-item">
                        <li>
                            <p>支付宝号：laosepi</p>
                            <p>支付宝搜索即可转账或添加好友捐助我</p>
                        </li>
                        <li>
                            <p>或者扫描下方二维码</p>
                            <img src="./img/zfb.webp" alt="sha">

                        </li>
                    </ul>
                </li>
                <li>
                    <div class="top-header">
                        <span>
                            <h3>😁微/信</h3></span>
                    </div>
                    <ul class="list-item">
                        <li>
                            <p>微信赞赏码</p>
                            <img src="./img/wx.webp" alt="sha">

                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--第十八页 售卖-->
        <div class="items-box cnmsb">
            <div class="search-box">
                <input type="text" placeholder="一个暂时不能用的搜索框">
                <i class="iconfont icon-sousuo search-color postion-serarch"></i>
                <span class="search-btn">搜索</span>
            </div>
            <div class="items-banner">
                <div class="top" style=" background-image: url('./img/bg.webp');">
                    <p style="font-size: 18px;color:#ffffff;">域名出售</p>
                </div>
            </div>
            <ul class="list-box">
                <li>
                    <div class="top-header">
                        <span>
                            <h3>😁域/名/出/售</h3></span>
                    </div>
                    <ul class="list-item">
                        <li>
                            <p>cnmsb.net(买方报价)</p>
                            <p>若您有域名需要挂在本页展示，请联系站长洽谈</p>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--第十九页 更多-->
        <div class="items-box cnmsb">
            <div class="search-box">
                <input type="text" placeholder="一个暂时不能用的搜索框">
                <i class="iconfont icon-sousuo search-color postion-serarch"></i>
                <span class="search-btn">搜索</span>
            </div>
            <div class="items-banner">
                <div class="top" style=" background-image: url('./img/bg.webp');">
                    <p style="font-size: 18px;color:#ffffff;">拓展</p>
                </div>
            </div>
            <ul class="list-box">
                <li>
                    <div class="top-header">
                        <span>
                            <h3>😁拓/展/页/面</h3></span>
                    </div>
                    <ul class="list-item">
                        <li>
                            <h3>下载源码，自行修改</h3>
                        </li>
                        <li>
                        <li onclick="CNMSBshowDetails(this,3)" class="li-bg2"><i class="iconfont icon-kaifa"><em></em>点我立即前往下载</i>
                            <!--本站源码--></h3>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--第十九页 后台管理-->
        <div class="items-box cnmsb">
            <div class="search-box">
                <input type="text" placeholder="一个暂时不能用的搜索框">
                <i class="iconfont icon-sousuo search-color postion-serarch"></i>
                <span class="search-btn">搜索</span>
            </div>
            <div class="cnmsb-login">
                <h2>CNM.SB后台管理</h2>
                <form action="admin/index.html" method="post">
                    <div class="inputBox">
                        <input type="text" name="" required="" minlength="6" maxlength="16">
                        <label>Username</label>
                    </div>
                    <div class="inputBox">
                        <input type="password" name="" required="" minlength="6" maxlength="16">
                        <label>password</label>
                    </div>
                    <input type="submit" name="" value="login">
                </form>
                <p>就算是主人来也要先验证身份哦~</p>
            </div>
        </div>

        <!--第二十页 加号-->
        <div class="items-box cnmsb">
            <div class="search-box">
                <input type="text" placeholder="一个暂时不能用的搜索框">
                <i class="iconfont icon-sousuo search-color postion-serarch"></i>
                <span class="search-btn">搜索</span>
            </div>
            <div style="margin: 10px">
                <p>自定义开发</p>
            </div>
        </div>
        <!--第二十一页 加号-->
        <div class="items-box cnmsb">
            <div class="search-box">
                <input type="text" placeholder="一个暂时不能用的搜索框">
                <i class="iconfont icon-sousuo search-color postion-serarch"></i>
                <span class="search-btn">搜索</span>
            </div>
            <div style="margin: 10px">
                <p>页面开发中，敬请期待，超耐磨水笔感谢您的支持</p>
            </div>
        </div>
    </div>
    <div style="height:2rem;"></div>
</div>
<script src="js/jquery-3.5.1.min.js"></script><!--本地引入jquery-3.5.1.min.js-->
<script src="js/cnm.sb.js"></script><!--本地引入cnm.sb.js-->
<div style="display: none">
    <!--这里放统计代码-->
</div>
</body>
</html>