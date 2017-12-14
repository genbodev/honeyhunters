<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="my-header">

    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center justify-content-sm-center justify-content-md-start justify-content-lg-start justify-content-xl-start">
                <a href="http://honey-hunters.ru"><img src="assets/img/logo.png" height="72" width="353" alt="logo"></a>
            </div>
        </div>
    </div>

    <div class="container my-contact">
        <div class="row">
            <div class="col text-center">
                <img src="assets/img/contact.png" height="320" width="320" alt="contact">
            </div>
        </div>
    </div>

    <div class="container">
        <form id="form">
            <div class="d-flex flex-column flex-xs-column flex-sm-column flex-md-column flex-lg-row flex-xl-row align-items-start justify-content-center">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="form-row">
                        <div class="form-group">
                            <div class="my-label-wrapper">
                                <label for="name" class="control-label">Имя <span class="my-required-symbol">*</span></label>
                                <i class="fa fa-check fa-2x my-icon" aria-hidden="true"></i>
                            </div>
                            <input name="name" type="text" maxlength="8" class="form-control form-control-lg" id="name"/>
                        </div>
                        <div class="form-group">
                            <div class="my-label-wrapper">
                                <label for="email" class="control-label">E-Mail <span class="my-required-symbol">*</span></label>
                                <i class="fa fa-times fa-2x my-icon" aria-hidden="true"></i>
                            </div>
                            <input name="email" type="text" maxlength="14" class="form-control form-control-lg" id="email"/>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="form-row">
                        <div class="form-group">
                            <div class="my-label-wrapper">
                                <label for="comment" class="control-label">Комментарий <span class="my-required-symbol">*</span></label>
                                <i class="fa fa-check fa-2x my-icon" aria-hidden="true"></i>
                            </div>
                            <textarea name="comment" maxlength="50" class="form-control form-control-lg" id="comment"></textarea>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center justify-content-sm-center justify-content-md-end justify-content-lg-end justify-content-xl-end">
                        <button type="submit" class="btn btn-danger btn-lg my-button" id="submit">Записать</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


</div>


<div class="container">
    <div class="row">
        <div class="col text-center comment-title">Выводим комментарии</div>
    </div>
</div>

<div class="container">
    <div class="row my-cards d-flex align-items-center justify-content-start flex-wrap" id="cards"></div>
</div>

<div class="my-footer">

    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="d-flex justify-content-center justify-content-sm-center justify-content-md-start justify-content-lg-start justify-content-xl-start">
                    <a href="http://honey-hunters.ru"><img src="assets/img/logo.png" height="58" width="282" alt="logo-footer"></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6">
                <div class="d-flex justify-content-center justify-content-sm-center justify-content-md-end justify-content-lg-end justify-content-xl-end">
                    <a href="https://vk.com/id368675475" style="margin-right: 40px;">
                        <img src="assets/img/vk.png" height="57" width="57" alt="vk">
                    </a>
                    <a href="https://www.facebook.com/honeyhuntersmanagement">
                        <img src="assets/img/fb.png" height="57" width="57" alt="fb">
                    </a>
                </div>
            </div>
        </div>
    </div>


</div>

<script src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"
        integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"
        integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
<script src="assets/js/common.js"></script>
</body>
</html>