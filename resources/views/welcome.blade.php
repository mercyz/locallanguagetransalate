<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("css/lang.css")}}">
    <title>Language Search</title>
</head>
<body>
    <div class="wrapper">
        <header class="main_header">
            <nav class=""></nav>
        </header>
        <div class="main_container">
            <div class="content_box">
                <div class="title_box">
                    <div class="">
                        <button class="btn">
                            <span>Text</span>
                        </button>
                    </div>
                </div>
                <div class="trans_box">
                    <div class="trans_box_header">
                        <div class="input_container">
                            <ul class="nav nav-custom lang_toggler">
                                <li class="nav-item ">
                                  <a class="nav-link  nav_trans_custom active" id="in-english-tab" data-toggle="tab" href="#inenglish" role="tab" aria-controls="english" aria-selected="false">English</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link  nav_trans_custom" id="in-khana-tab" data-toggle="tab" href="#inkhana" role="tab" aria-controls="khana" aria-selected="false">Khana</a>
                                </li>
                                <li class="nav-item ">
                                  <a class="nav-link  nav_trans_custom" id="in-gokana-tab" data-toggle="tab" href="#ingokana" role="tab" aria-controls="gokana" aria-selected="false">Gokana</a>
                                </li>
                              </ul>
                        </div>
                        <div class="output_container">
                            <ul class="nav nav-custom lang_toggler">
                                <li class="nav-item">
                                  <a class="nav-link active" id="khana-tab" data-toggle="tab" href="#khana" role="tab" aria-controls="khana" aria-selected="false">Khana</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="gokana-tab" data-toggle="tab" href="#gokana" role="tab" aria-controls="gokana" aria-selected="false">Gokana</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="english-tab" data-toggle="tab" href="#english" role="tab" aria-controls="english" aria-selected="false">English</a>
                                </li>
                              </ul>
                        </div>
                    </div>
                    <div class="trans_box_body">
                        <div class="input_container_body">
                            <form>
                                <textarea name="" id="word" class="text-field" cols="30" rows="10"></textarea>
                            </form>
                            <button class="btn btn-primary" id="translate_lang">Translate</button> <button class="btn btn-primary" id="clear_trans">Clear</button>
                        </div>
                        <div class="output_container_body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="khana" role="tabpanel" aria-labelledby="khana-tab">
                                    <p id="khanaText" class="outputText"></p>
                                </div>
                                <div class="tab-pane" id="gokana" role="tabpanel" aria-labelledby="gokana-tab">
                                    <p id="gokanaText" class="outputText"></p>
                                </div>
                                <div class="tab-pane" id="english" role="tabpanel" aria-labelledby="english-tab">
                                    <p id="englishText" class="outputText"></p>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="{{asset("js/lang.js")}}"></script>
</body>
</html>
