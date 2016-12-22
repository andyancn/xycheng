<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style rel="stylesheet" >
    * {margin:0; padding:0;}
body{
    font-family:helvetica,Arial,sans-serif;
    background: #efefef;
    margin:0;
}
#wrapper{width:980px;margin: 0 auto 20px;}

header{
    position: relative;/*为页面标题和搜索表单提供定位上下文*/
    height: 70px;/*固定高度，包围绝对定位元素*/
    margin:10px 0;
    background: #fff;
    border-radius:20px 0px;/*顺序：左上右上右下左下*/
    box-shadow: 0 12px 8px -9px #555;/*负扩展值把阴影定位到盒子内部*/
    padding:1px;/*防止子元素外边距叠加*/
}
header section#title{
    position: absolute;
    width: 500px;/*宽足以不让文本折行*/
    height:65px;/*高足以容纳两行文本*/
    left:0px;/*左上角定位*/
    top:0;
}
header h1{
    padding: 9px 12px 0;
    font-family: 'Lato',helvetica,sans-serif;
    font-weight:800;/*设定字体的粗细*/
    font-size: 1.8em;
    line-height: 1;
    letter-spacing: -.025em;
    color: #4eb8ea;
}
header h2{
    padding: 0px 12px ;
    font-family: 'Source Sans Pro',helvetica,sans-serif;
    font-weight:300;/*设定字体的粗细*/
    font-size: .7em;
    line-height: 1;
    letter-spacing: -.025em;
    color: #333;
}
form.search{
    position:absolute;
    width: 70px;/*宽到容纳扩展后的搜索框*/
    top:23px;
    right:20px;/*相对于页眉右上角定位*/
}
.search input{
    float:right;
    width:70px;
    padding:2px 0 3px 5px;
    border-radius:10px 0 10px 0;
    font-family: 'Source Sans Pro',helvetica,sans-serif;
    font-weight: 400;
    font-size:1em;
    color:#888;
    outline:none;/*去掉轮廓线*/
    transition: 1.5s width;/*搜索框过渡动画*/
}
.search input:focus{width: 140px;}
.search label{display: none;}
form.search input::-webkit-input-placeholder{color: #ccc;}
nav.menu{
    margin:19px auto;
    padding: 0;
    margin-left:300px;/*在菜单容器居中菜单*/
    font-size:.8em;
}
nav.menu > ul{display: inline-block;}
nav.menu li{
    float:left;/*让菜单项水平*/
    list-style-type: none;/*去掉默认的项目符号*/
    position:relative;/*为子列表提供定位上下文*/
}
nav.menu li a{
    display:block;/*让链接填满列表项*/
    padding:.25em .8em;
    font-family:"Source Sans Pro",helvetica, sans-serif;
    font-style: normal;
    font-weight:600;
    font-size:1.2em;
    text-align: left;
    color:#fff;
    text-decoration: none;/*去掉链接的下划线*/
    font-smooth:antialiased;/*平滑字体*/
}
nav.menu li.choice1 a{background: #f58c21}
nav.menu li.choice2 a{background: #4eb8ea}
nav.menu li.choice3 a{background: #d6e636}
nav.menu li.choice4 a{background: #ee4c98}
nav.menu li.choice5 a{background: #f58c21}
nav.menu li:hover > a{
    color: #555;
    border-color:#fff;
    border:0;
}
nav.menu li:last-child a{border-bottom-right-radius: 10px}
nav.menu li:first-child a{border-top-left-radius: 10px;}
nav.menu li ul{
    opacity: 0;
    visibility: hidden;/*隐藏下拉菜单*/
    position:absolute;/*相对于父菜单定位*/
    width:12em;/*下拉菜单宽度*/
    left:0;
    top:100%;
    transition: 1s all;
}
nav.menu li:hover>ul{
    opacity: 1;
    visibility: visible;
}
nav.menu li li{
    float:none;/*去掉浮动，让菜单上下堆叠*/
}
nav.menu li li:first-child a{border-radius:0}
nav.menu li li:last-child a {border-bottom-left-radius: 10px}
/*
 * 专题区
 */
section#feature_area{
    overflow: hidden;/*包围浮动的子元素*/
    margin:16px 0 0;/*在页眉与专题区之间留出间隙*/
    padding:0 0 10px;
}
section#feature_area article{float: left;width:66%;}
section#feature_area aside{float: left;width:34%}
section#feature_area article .inner{/*带圆角和阴影的容器*/
    overflow: hidden;/*包含图片*/
    padding:12px;
    background: #fff;
    border-radius: 20px 0;
    box-shadow: 0 12px 8px -9px #555;
}
section#feature_area article a{text-decoration: none}/*博文链接*/
section#feature_area article img{/*照片*/
    float:left;
    padding:0 10px 10px 0;
}
section#feature_area article h4{/*日期*/
    font-family:"Source Sans Pro",helvetica,sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size: 1em;
    color:#f58c21;
    letter-space:-.025em;
}
section#feature_area article h3{/*博文标题*/
    font-family: Lato,helvetica,sans-serif;
    font-style: normal;
    font-weight: 700;
    font-size:1.75em;
    color:#555;
    margin:0 0 12px 0;
    letter-spacing: -.05em;
}
section#feature_area article p{/*博文内容*/
    font-family: "Source Sans Pro",helvetica,sans-serif;
    font-style: normal;
    font-weight: 400;
    font-size:1.1em;
    line-height:1.5em;
    color:#616161;
    margin:0;
    text-align: justify;
}
section#feature_area article p::first-letter{/*首字母下沉*/
    font-family: Lato, helvetica, sans-serif;
    font-style: normal;
    font-weight: 700;
    font-size: 4.5em;
    float: left;
    margin:.05em .05em 0 0;
    line-height: 0.6;
    text-shadow: 1px 3px 3px #ccc;
}
section#feature_area article p::first-line{/*首行小型大写字母*/
    font-variant: small-caps;
    font-size: 1.2em;
}
form.signin{
    width: 19em;/*表单的整体宽度*/
    float:right;
    background:#fff;
    border-radius: 10px 0 ;
    box-shadow: 0 12px 8px -9px #555;
}
.signin fieldset{border: 0;margin: 10px 14px;}/*去掉默认的边框*/
.signin legend span{
    font-family: 'Lato', helvetica, sans-serif;
    font-weight: 700;
    font-size: 1.3em;
    line-height: 1.1em;
    color:#4eb8ea;
    letter-spacing: -.05em;
}
.signin section{
    overflow: hidden;/*包围控件和标注*/
    padding: .25em 0;/*表单元素的间距*/
}
.signin section label{
    font-family: "Source Sans Pro",helvetica,sans-serif ;
    font-weight:400;
    float:left;
    width:5em;/*标注栏宽度*/
    margin:.5em .3em 0 0;/*外边距保持文本域空间的间距*/
    line-height: 1.1;
    color:#555;
}
.signin section input{
    float:right;
    width: 10.5em;/*控件栏的宽度*/
    margin:.2em 0 0 .5em;
    padding:3px 10px 2px;/*输入文本与控件的间距*/
    color:#555;
    font-size:.8em;
    outline: none;/*去掉默认的轮廓线*/
    border-radius: 10px 0;
}
input:-webkit-autofill{color: #fff !important;}/*去掉默认黄色背景*/
.signin section input[type=submit]{
    float:right;/*将按钮与控件右边对齐*/
    width:auto;/*重设按钮宽度*/
    margin:0 2px 3px 0;
    padding: 0 8px 3px;
    font-size:1em;
    font-weight:800;
    color: #fff;
    border:none;
    background-color: #d6e636;
    box-shadow: 1px 1px 2px #888;
}
.signin  section p{/*内容为"not signed up?"*/
    float:right;
    clear: both;
    margin:.2em 0 0;
    text-align: right;
    font-size: .8em;
    line-height:1;
    color: #555;
}
.signin section p a{color:#333;}/*到注册表单的链接*/
.signin section p a:hover{
    color: #777;
    text-decoration: none;
}
.signin section p.direction.error
.signin section p.direction{display: none}/*隐藏错误消息*/
section#feature_area nav{
    width:19em;/*容器整体宽度*/
    float:right;/*与区域右边对齐*/
    margin:15px 0 0;/*上方间距*/
    padding:.6em 0 .75em;/*链接上下间距*/
    background: #fff;
    border-radius: 10px 0 ;
    box-shadow: 0 12px 8px -9px #555;
}
#feature_area nav h3{
    padding:0 14px;/*标题左右的空间*/
    font-family:Lato, helvetica, sans-serif;
    font-weight:700;
    font-size:1.3em;
    text-align: left;
    color: #aaa;
    letter-spacing:-.05em;
}
#feature_area nav ul{margin: 0 0 0 20px;}
#feature_area nav li{
    padding: .7em 0 0 2em;
    position:relative;/*项目符号的定位上下文*/
    list-style-type: none;
}
#feature_area nav li:before{/*定制项目符号*/
    content: "";/*用空字符串，因为不需要实际内容*/
    position: absolute;/*相对于列表项定位*/
    height: 10px;/*项目符号大小*/
    width:10px;
    left:12px;/*定位项目符号*/
    top:12px;
    border-radius: 5px 0;/*项目符号形状*/
    background-color: #d6e636;/*项目符号颜色*/
    box-shadow: 1px 1px 2px #888;
}
#feature_area nav li a{
    display: block;/*链接与列表项同宽*/
    text-decoration: none;/*去掉默认的下划线*/
    font-size:.9em;
    color:#616161;
}
#feature_area nav li a:hover{color: #000;}
/*
 * 图书区
 */
section#book_area{/*与布局同宽*/
    clear:both;
    border-radius: 20px 0;
    border: 1px solid #f58c21;
    margin:8px 0 16px;/*上下间距*/
    overflow:hidden;
}
#book_area article{/*四本书四栏*/
    float:left;
    width:25%;
    padding:10px 0;
    background: none;
}
#book_area article .inner
#book_area .inner img{width:100px;height: 200px;}
#book_area .inner h3{/*旋转文字*/
    position: absolute;
    width:200px;
    left:112%;
    bottom:5px;/*把文字定位在图书右侧*/
    transform: rotate(-90deg);/*旋转文字需要使用带厂商前缀的属性*/
    transform-origin: left bottom;/*设定旋转中心点，需要带厂商前缀的属性*/
    color: #ccc;
    font-size:1.4em;
    font-family: 'Lato', helvetica, sans-serif;
    font-style: normal;
    font-weight: 900;
    text-align: left;
}
/*较窄的封面需要不同的偏移量*/
#book_area article.right:last-child h3{left:85%;}
#book_area article img{box-shadow: 0 12px 8px -9px #555;}/*封面阴影*/
#book_area article aside{/*弹出层共享样式开始*/
    display: none;/*隐藏弹出层*/
    position: absolute;/*相对于包含图片的内部DIV*/
    z-index: 2;
    width: 200px;/*弹出层宽度*/
    background: #fff;
    padding: 10px 2px 5px;/*弹出层内边距*/
    border:2px solid #f58c21;
    border-radius: 10px 0;
    box-shadow: 4px 4px 16px #555;
    color: #555;
    font-family: "Source Sans Pro", helvetica, sans-serif;
    font-size: .8em;
    line-height:1.5em;
}
#book_area article:hover aside{display: block;}/*鼠标悬停于封面时显示弹出层*/
#book_area article aside li{
    padding:.25em 0 .75em 1em;/*列表项的垂直间距和左间距*/
    list-style-type: none;/*去掉默认的项目符号*/
    line-height: 1.2em;
}
#book_area article aside li a{/*链接文本*/
    text-decoration: none;
    font-size: 1.2em;
    color: #616161;
}
#book_area article aside li a:hover{/*悬停时突显链接*/
    color:#333;
}/*弹出层共享样式结束*/
#book_area article.left aside
#book_area article.right aside{
    right:84%;
    top:14px;
}
#book_area article aside::after
#book_area article.left aside::after{/*左侧弹出三角形定位*/
    right: 100%;
    border-color:transparent #f58c21 transparent transparent ;
}
#book_area article.right aside::after{/*右侧弹出三角形定位*/
    right: 100%;
    border-color:transparent #f58c21 transparent transparent ;
}
#book_area article aside::before{/*白色三角形*/
    content: "";/*需要有内容，这里是一个空字符串*/
    position:absolute;/*相对弹出层定位*/
    top:33px;
    height:0;
    width:0;/*收缩创建三角形*/
    z-index: 100;
    top:37px;
}
#book_area article.left aside:before{/*左侧图书白色三角形的样式、位置和颜色*/
    right:100%;
    border-color: transparent white transparent transparent;
}
#book_area article.right aside:before{/*右侧图书白色三角性的样式、位置和颜色*/
    left: 100%;
    border-color: transparent transparent transparent white;
}
footer{
    padding:.5em 0 .35em 0;/*内容上下的间距*/
    text-align: center;/*居中内容*/
    border-radius: 10px 0;
    background: #fff;
    box-shadow: 0 12px 8px -9px #555555;
}
footer p{/*文本行的样式*/
    font-family:'Source Sans Pro';
    font-size: .85em;
    font-weight:400;
    letter-spacing: -.05em;
    color:#555;
}
footer p a{/*文本行中的链接*/
    font:italic 700 1em 'Source Sans Pro';
    color: #4eb8ea;
    text-decoration: none;
}
footer p a:hover{
    color:#777;
}
footer ul{/*链接列表*/
    display: inline-block;
    margin: 4px 0 0;
}
footer li{
    list-style-type: none;
    float:left;
    font-size:.85em;
    font-weight:400;
    font-family:"Source Sans Pro" ;
}
footer li+li a{
    border-left:1px solid #ccc;/*链接分隔线*/
}
footer li a{
    text-decoration: none;/*去掉链接默认的下划线*/
    color:#aaa;
    padding:0 5px;/*链接间距*/
}
footer a:hover{
    color: #777;
}
    </style>
</head>
<body>
<!-- 外包装,设定布局宽度，布局在浏览器居中 -->
    <div id="wrapper">
        <header><!-- 一级 -->
            <section id="title"><!-- 二级 -->
                <!-- h1和h2 -->
                <h1>Stylin’ with CSS</h1>
                <h2>The Blog and Books of Charles Wyke-Smith</h2>
            </section>
            <nav class="menu"><!-- 二级 -->
                <!-- 菜单 -->
                <ul>
                    <li class="choice1"><a href="#">Articles</a> </li>
                    <li class="choice2"><a href="#">Books</a>
                        <ul>
                            <li ><a href="#">Resources</a> </li>
                            <li ><a href="#">Bookshelf</a> </li>
                            <li ><a href="#">Contact Me</a> </li>
                            <li ><a href="#">Resources</a> </li>
                            <li ><a href="#">Bookshelf</a> </li>
                            <li ><a href="#">Contact Me</a> </li>
                        </ul>
                    </li>
                    <li class="choice3"><a href="#">Resources</a> </li>
                    <li class="choice4"><a href="#">Bookshelf</a>
                        <ul>
                            <li ><a href="#">Resources</a> </li>
                            <li ><a href="#">Bookshelf</a> </li>
                            <li ><a href="#">Contact Me</a> </li>
                            <li ><a href="#">Resources</a> </li>
                            <li ><a href="#">Bookshelf</a> </li>
                            <li ><a href="#">Contact Me</a> </li>
                        </ul>
                    </li>
                    <li class="choice5"><a href="#">Contact Me</a> </li>
                </ul>
            </nav>
            <form class="search" action="#" method="post"><!-- 二级 -->
                <!-- 搜索框 -->
                <label for="user_name">search</label><!-- 标注的for属性于文本框ID相同 -->
                <input type="text" id="user_name" placeholder="search" />
            </form>
        </header>

        <section id="feature_area"><!-- 一级 -->
            <article id="biog"><!-- 二级 -->
                <!-- 博客内容 -->
                <div class="inner">
                    <h4>September 7,2016</h4>
                    <a href="#"><h3>Managing CSS Classes with jQuery</h3></a>
                    <img src="images/ni.jpg" alt="ni"/>
                    <p>Sintus at neque in magna.Sintus at neque in magna.Sintus at neque in magna.
                        Sintus at neque in magna.Sintus at neque in magna.Sintus at neque in magna.
                        Sintus at neque in magna.Sintus at neque in magna.Sintus at neque in magna.
                        Sintus at neque in magna.Sintus at neque in magna.Sintus at neque in magna.</p>
                </div>
            </article>
            <aside><!-- 二级 -->
                <form autocomplete="off" class="signin" action="process_form.php" method="post"><!-- 三级 -->
                    <!-- 登录表单 -->
                    <fieldset><!--作为表单控件的容器-->
                        <!--控件组的标题-->
                        <legend><span>Sign In for Code and Updates</span></legend>
                        <section><!--用于为控件、标注和说明添加样式的外包装-->
                            <!--与控件ID同名的for属性将标注与控件关联起来-->
                            <label for="email">Email</label>
                            <!--type属性的text值表明这是文本框-->
                            <input type="text" id="email" name="email"/>
                        </section>
                        <section>
                            <label for="password">Password</label>
                            <!--密码框中的字符显示为掩码-->
                            <input type="password" id="password" name="password" maxlength="20"/>
                            <p class="dirction">Wrong user name or password</p>
                        </section>
                        <section><!--提交按钮-->
                            <input type="submit" value="Sign In"/>
                            <p class="signup">Not signed up?<a herf="#">Register now!</a></p>
                        </section>
                    </fieldset>
                </form>
                <nav><!-- 三级 -->
                    <h3>Recent Articles</h3>
                    <!-- 博文链接 -->
                    <ul>
                        <li><a href="#">Z-index&mdash;Layers of Confusion</a></li>
                        <li><a href="#">Box-Image Techniques</a> </li>
                        <li><a href="#">Shadow FX with CSS3</a> </li>
                    </ul>
                </nav>
            </aside>
        </section>

        <section id="book_area"><!-- 一级 -->
            <article class="left"><!-- 二级 -->
                <div class="inner"><!-- 三级 -->
                    <!-- 图书封面及旋转的文字 -->
                    <h3>HTML5 + CSS3</h3><!--要旋转的文字-->
                    <img src="images/ni.jpg" alt="Stylin' with CSS cover"/>
                    <aside><!--弹出层-->
                        <ol>
                            <li><a href="#">Download the Code</a> </li>
                            <li><a href="#">Table of Contents</a> </li>
                            <li><a href="#">Buy this Book</a> </li>
                        </ol>
                    </aside>
                </div>
            </article>
            <!-- article重复4次 -->

            <article class="left"><!-- 二级 -->
                <div class="inner"><!-- 三级 -->
                    <!-- 图书封面及旋转的文字 -->
                    <h3>HTML5 + CSS3</h3><!--要旋转的文字-->
                    <img src="images/ni.jpg" alt="Stylin' with CSS cover"/>
                    <aside><!--弹出层-->
                        <ol>
                            <li><a href="#">Download the Code</a> </li>
                            <li><a href="#">Table of Contents</a> </li>
                            <li><a href="#">Buy this Book</a> </li>
                        </ol>
                    </aside>
                </div>
            </article>

            <article class="right"><!-- 二级 -->
                <div class="inner"><!-- 三级 -->
                    <!-- 图书封面及旋转的文字 -->
                    <h3>HTML5 + CSS3</h3><!--要旋转的文字-->
                    <img src="images/ni.jpg" alt="Stylin' with CSS cover"/>
                    <aside><!--弹出层-->
                        <ol>
                            <li><a href="#">Download the Code</a> </li>
                            <li><a href="#">Table of Contents</a> </li>
                            <li><a href="#">Buy this Book</a> </li>
                        </ol>
                    </aside>
                </div>
            </article>

            <article class="right"><!-- 二级 -->
                <div class="inner"><!-- 三级 -->
                    <!-- 图书封面及旋转的文字 -->
                    <h3>HTML5 + CSS3</h3><!--要旋转的文字-->
                    <img src="images/ni.jpg" alt="Stylin' with CSS cover"/>
                    <aside><!--弹出层-->
                        <ol>
                            <li><a href="#">Download the Code</a> </li>
                            <li><a href="#">Table of Contents</a> </li>
                            <li><a href="#">Buy this Book</a> </li>
                        </ol>
                    </aside>
                </div>
            </article>
        </section>

        <footer><!-- 一级 -->
            <!-- 页脚文本和nav元素 -->
            <p>A CSS,Third </p>
            <nav>
                <ul>
                    <li><a href="#">Privary</a> </li>
                    <li><a href="#">Contact</a> </li>
                </ul>
            </nav>
        </footer>
    </div>
</body>
</html>