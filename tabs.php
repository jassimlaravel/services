<!DOCTYPE html>
<html>
    <head>
        <title>Tabs</title>
        <style>
            body, html {
                height: 100%;
                margin: 0;
                -webkit-font-smoothing: antialiased;
                font-weight: 100;
                background: #aadfeb;
                text-align: center;
                font-family: helvetica;
            }

            .tabs input[type=radio] {
                position: absolute;
                top: -9999px;
                left: -9999px;
            }
            .tabs {
                width: 650px;
                float: none;
                list-style: none;
                position: relative;
                padding: 0;
                margin: 75px auto;
            }
            .tabs li{
                float: left;
            }
            .tabs label {
                display: block;
                padding: 10px 20px;
                border-radius: 2px 2px 0 0;
                color: #08C;
                font-size: 24px;
                font-weight: normal;
                font-family: 'Lily Script One', helveti;
                background: rgba(255,255,255,0.2);
                cursor: pointer;
                position: relative;
                top: 3px;
                -webkit-transition: all 0.2s ease-in-out;
                -moz-transition: all 0.2s ease-in-out;
                -o-transition: all 0.2s ease-in-out;
                transition: all 0.2s ease-in-out;
            }
            .tabs label:hover {
                background: rgba(255,255,255,0.5);
                top: 0;
            }

            [id^=tab]:checked + label {
                background: #08C;
                color: white;
                top: 0;
            }

            [id^=tab]:checked ~ [id^=tab-content] {
                display: block;
            }
            .tab-content{
                z-index: 2;
                display: none;
                text-align: left;
                width: 100%;
                font-size: 20px;
                line-height: 140%;
                padding-top: 10px;
                background: #08C;
                padding: 15px;
                color: white;
                position: absolute;
                top: 53px;
                left: 0;
                box-sizing: border-box;
                -webkit-animation-duration: 0.5s;
                -o-animation-duration: 0.5s;
                -moz-animation-duration: 0.5s;
                animation-duration: 0.5s;
            }
        </style>
    </head>
    <body>
        <ul class="tabs">
            <li>
                <input type="radio" checked name="tabs" id="tab1">
                <label for="tab1">tab 1</label>
                <div id="tab-content1" class="tab-content animated fadeIn">
                    ...
                </div>
            </li>
            <li>
                <input type="radio" name="tabs" id="tab2">
                <label for="tab2">tab 2</label>
                <div id="tab-content2" class="tab-content animated fadeIn">
                    ...
                </div>
            </li>
            <li>
                <input type="radio" name="tabs" id="tab3">
                <label for="tab3">tab 3</label>
                <div id="tab-content3" class="tab-content animated fadeIn">
                    ...
                </div>
            </li>
        </ul>
    </body>
</html>