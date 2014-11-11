<?php
$uri = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

echo '
<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
            <title>404</title>
            <meta name="description" content="">
            <meta name="keywords" content="">
            <meta content="width=1100,maximum-scale=1.0" name="viewport">
            <link href="/js/jcarousel/css/jcarousel.basic.css" rel="stylesheet" />
            <link href="/js/jquery-ui/jquery-ui-1.10.3.custom.min.css" rel="stylesheet" />
            <link href="/js/customSelect/style.css" rel="stylesheet" />
            <link href="/js/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
            <link href="/css/common.css?v=1" rel="stylesheet" />
            <link rel="icon" type="image/ico" href="/favicon.ico" />
        </head>
        <body>
        <div class="bottom-bg">
            <div class="content-wrapper">
                <div class="header">
                    <ul class="left">
                        <li><a href="/o-proekte/">О проекте</a></li>
                        <li><a href="/kontakty/">Контакты</a></li>
                        <li><a href="/spetspredlojeniya/">Спецпредложения</a></li>
                    </ul>
                    <a href="/" class="logo"></a>
                    <ul class="right">
                        <li>Служба бронирования:</li>
                        <li class="phone">+7(495)<span>797-05-84</span></li>
                        <li><a href="javascript:toggleCallbackForm();">Заказать бесплатный звонок</a></li>
                    </ul>
                </div>

        <div class="teaser">
            <div class="callback-form">
        <div class="inner">
            <form method="POST">
                <input name="code" value="3b80fd" type="hidden" />
                <div class="table">
                    <div class="tr">
                        <div class="td"></div>
                        <div class="td">
                            <dl>Оставьте свой номер</dl>
                            <dl>и мы перезвоним</dl>
                        </div>
                    </div>
                    <div class="tr">
                        <div class="td">Имя:</div>
                        <div class="td"><input name="name" type="text" /></div>
                    </div>
                    <div class="tr">
                        <div class="td">Номер:</div>
                        <div class="td"><input name="phone" type="text" /></div>
                    </div>
                </div>
                <div class="table captcha">
                    <div class="tr">
                        <div class="td">Код:</div>
                        <div class="td"><img src="/img/captcha.jpg?rand=4322111" /></div>
                        <div class="td"><input name="entered" type="text" maxlength="4" autocomplete="off" /></div>
                        <div class="td"><button onClick="return submitCallbackForm();" class="buttons">ОК</button></div>
                    </div>
                </div>
                <div class="close">
                    <a href="javascript:toggleCallbackForm();">Закрыть</a> х
                </div>
            </form>
        </div>
        </div>
            <div class="tongue"></div>
        </div>
                <div class="menu">
                    <a href="/ded-moroz-iz-velikogo-ustjuga/" class="f0"><i></i><span>Дед Мороз из Великого Устюга</span></a><a href="/belorusskiy-ded-moroz/" class="f0"><i></i><span>Белорусский Дед Мороз</span></a><a href="/santa-klaus-iz-laplandii/" class="f0"><i></i><span>Санта-Клаус из Лапландии</span></a><a href="/kostromskaya-snegurochka/" class="f0"><i></i><span>Костромская Снегурочка</span></a><a href="/karelskiy-ded-moroz/" class="f0"><i></i><span>Карельский Дед Мороз</span></a>
                </div>
                <div class="twirl"></div>
                <div class="ornament section clearfix">
                    <h1>Главная страница сайта</h1>
                    <a href="/booking/">Заказать тур</a>
                </div>
                <div class="dynamic">
                    <div class="clearfix">
                        <div class="ck-body">
                            <div class="c1" style="height: 200px;">
                            Страница по этому адресу устарела. Добро пожаловать на <a href="/">стартовую страницу</a>.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <div class="wrapper clearfix">
                        <ul class="left">
                            <li>Сделано в <a href="http://rudes.ru" target="_blank">РуДизайн</a></li>
                            <li><img src="/img/li.png" /></li>
                        </ul>
                        <div class="right">
                            <a href="/ded-moroz-iz-velikogo-ustjuga/" class="f0"><i></i><span>Дед Мороз из Великого Устюга</span></a><a href="/belorusskiy-ded-moroz/" class="f0"><i></i><span>Белорусский Дед Мороз</span></a><a href="/santa-klaus-iz-laplandii/" class="f0"><i></i><span>Санта-Клаус из Лапландии</span></a><a href="/kostromskaya-snegurochka/" class="f0"><i></i><span>Костромская Снегурочка</span></a><a href="/karelskiy-ded-moroz/" class="f0"><i></i><span>Карельский Дед Мороз</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="/js/jquery-1.10.2.min.js" language="javascript" type="text/javascript"></script>
        <script src="/js/jquery.form.min.js" language="javascript" type="text/javascript"></script>
        <script src="/js/jcarousel/js/jquery.jcarousel.min.js" language="javascript" type="text/javascript"></script>
        <script src="/js/jquery-ui/jquery-ui-1.10.3.custom.min.js" language="javascript" type="text/javascript"></script>
        <script src="/js/jquery-ui/ui.datepicker-ru.js" language="javascript" type="text/javascript"></script>
        <script src="/js/customSelect/jquery.customSelect.min.js" language="javascript" type="text/javascript"></script>
        <script src="/js/fancybox/source/jquery.fancybox.pack.js" language="javascript" type="text/javascript"></script>
        <script src="/js/common.js?v=1" language="javascript" type="text/javascript"></script>
    </body>
</html>
';

