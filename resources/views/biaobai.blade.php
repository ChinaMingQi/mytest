<!DOCTYPE HTML>
<html>
<head>
    <title>我们的故事</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <style type="text/css">
        @font-face {
            font-family: digit;
            src: url('digital-7_mono.ttf') format("truetype");
        }
        .comments{
            font-size: 18px;
        }
        .space{
            display: block;
            margin-top:15px;
        }
    </style>
    <audio controls="controls" hidden="hidden" autoplay="autoplay" loop="loop">

        <source src="{{asset('resources/style/3.mp3')}}" type="audio/ogg" />
        <source src="{{asset('resources/style/3.mp3')}}" type="audio/mpeg" />
    </audio>
    <link href="{{asset('resources/style/default.css')}}" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="{{asset('resources/style/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('resources/style/garden.js')}}"></script>
    <script type="text/javascript" src="{{asset('resources/style/functions.js')}}"></script>
</head>

<body>
<div id="mainDiv">
    <div id="content">
        <div id="code">
            <span class="space"/><span class="comments">晓花，自从认识你的第一天起开始慢慢关注你，</span><br />
            <span class="space"/><span class="comments">你的坚强、乐观、爱笑的样子深深吸引着我。</span><br />
            <span class="space"/><span class="comments">护士是多么一个纯净神圣的工作，</span><br />
            <span class="space"/><span class="comments">尽管辛苦，你却一直深深爱着这个职业，</span><br />
            <span class="space"/><span class="comments">4天就要熬夜一次，你每次都能坚持下来，</span><br />
            <span class="space"/><span class="comments">作为老乡同样是北漂的我，</span><br />
            <span class="space"/><span class="comments">深知其中的不易，谢谢你让我也学会了坚强！</span><br />
            <span class="space"/><span class="comments">我好喜欢你！</span><br />
        </div>
        <div id="loveHeart">
            <canvas id="garden"></canvas>
            <div id="words">
                <div id="messages">
                    我将用我的一生去爱你，去呵护你！
                    <div id="elapseClock" style="display:none"></div>
                    <a href='#' id="accept">做我女朋友好吗？</a>
                </div>
                <div id="loveu">
                    我将永远爱你！<br/>
                    <div class="signature">张英仁</div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var offsetX = $("#loveHeart").width() / 2;
    var offsetY = $("#loveHeart").height() / 2 - 55;

    if (!document.createElement('canvas').getContext) {
        var msg = document.createElement("div");
        msg.id = "errorMsg";
        msg.innerHTML = "Your browser doesn't support HTML5!<br/>Recommend use Chrome 14+/IE 9+/Firefox 7+/Safari 4+";
        document.body.appendChild(msg);
        $("#code").css("display", "none")
        $("#copyright").css("position", "absolute");
        $("#copyright").css("bottom", "10px");
        document.execCommand("stop");
    } else {
        setTimeout(function () {
            adjustWordsPosition();
            startHeartAnimation();
        }, 12000);

        $("#accept").click(function(){
            $(this).hide();
            $("#elapseClock").show();
            var together = new Date();
            timeElapse(together);
            setInterval(function () {
                timeElapse(together);
            }, 500);
        })
        adjustCodePosition();
        $("#code").typewriter();
    }
</script>
</body>
</html>
