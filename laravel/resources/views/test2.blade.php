<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Sortable - Default functionality</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <style>
        #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
        #sortable li span { position: absolute; margin-left: -1.3em; }


         #container {
             width: 800px;
             height: 600px;
             float: left;
         }

        section {
            width: 130px;
            height: 520px;
            float: left;
        }

        section > div {
            width: 100px;
            height: 20px;
            border: 1px solid #000;
            margin: 10px 0;
            background: #73789F;
            color: white;
            padding: 10px 10px 10px 20px;
        }

        section > div:nth-child(2n) {
            margin-bottom: 40px;
        }

        .connecter {
            width: 30px;
            height: 520px;
            float: left;
        }

        .line {
            width: 30px;
            height: 520px;
            float: left;
        }

        .connecter div {
            border: 1px solid #000;
            border-left: none;
            height: 50px;
            width: 100%;
            margin: 80px 0 0 1px;
        }

        .connecter div:first-child {
            margin: 32px 0 0 1px;
        }

        .line div {
            border-top: 1px solid #000;
            margin: 133px 0 0 1px;
        }

        .line div:first-child {
            margin-top: 55px;
        }

        #quarterFinals > div {
            margin-top: 91px;
        }

        #quarterFinals > div:first-child {
            margin-top: 37px;
        }

        #conn2 div {
            margin-top: 133px;
            height: 133px;
        }

        #conn2 div:first-child {
            margin-top: 57px;
        }

        #line2 div {
            margin-top: 270px;
        }

        #line2 div:first-child {
            margin-top: 125px;
        }
        #semiFinals > div {
            margin-top: 230px;
        }
        #semiFinals > div:first-child {
            margin-top: 105px;
        }
        #conn3 div {
            margin-top: 125px;
            height: 270px;
        }

        #line3 div {
            margin-top: 270px;
        }

        #final > div {
            margin-top: 250px;
        }


    </style>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#sortable" ).sortable();
            $( "#sortable" ).disableSelection();
        } );
    </script>
</head>
<body>

<ul id="sortable">
    <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 1</li>
    <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 2</li>
    <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 3</li>
    <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 4</li>
    <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 5</li>
    <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 6</li>
    <li class="ui-state-default"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>Item 7</li>
</ul>

<article id="container">

    <section>
        {{--<div>Player 1</div>
        <div>Player 2</div>
        <div>Player 3</div>
        <div>Player 4</div>
        <div>Player 5</div>
        <div>Player 6</div>
        <div>Player 7</div>
        <div>Player 8</div>--}}
        <ul id="sortable">
            <li class="ui-state-default">Кучко Артем (Дон обл)</li>
            <li class="ui-state-default">Андрущак Андрей (Виниц обл)</li>
            <li class="ui-state-default">Корнеев Антон (Дон обл)</li>
            <li class="ui-state-default">Лацинский Антон (Киев обл)</li>
            <li class="ui-state-default">Чубашвили Роман (Хмел обл)</li>
            <li class="ui-state-default">Подоселев Александр (Дон обл)</li>
            <li class="ui-state-default">Подоселов Антон (Киев обл)</li>
            <li class="ui-state-default">Хмыленко Роман (Хмел обл)</li>
        </ul>
    </section>

    <div class="connecter">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <div class="line">
        <div>
        </div><div>
        </div><div>
        </div><div>
        </div>
    </div>

    <section id="quarterFinals">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </section>

    <div class="connecter" id="conn2">
        <div></div>
        <div></div>
    </div>

    <div class="line" id="line2">
        <div></div>
        <div></div>
    </div>

    <section id="semiFinals">
        <div></div>
        <div></div>
    </section>

    <div class="connecter" id="conn3">
        <div></div>
    </div>

    <div class="line" id="line3">
        <div></div>
    </div>

    <section id="final">
        <div></div>
    </section>

</article>



</body>
</html>