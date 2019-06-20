<!DOCTYPE html>
<html>
<head>
{{--    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">--}}
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>


<!------ Include the above in your HEAD tag ---------->

<style>
    .wrap__contact {
        width: 1200px;
        display: flex;
        margin: 40px 0;
    }

    .wrap__contact form {
        margin-left: 30px;
    }

    .form__contacts {
        display: flex;
        flex-direction: column;
        width: 550px;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px -2px #999;
    }

    .form__button {
        display: flex;
        justify-content: flex-end;
        border: none !important;
    }

    .form__button input {
        background-color: #00435d !important;
        color: #fff;
        width: 25%;
        height: 40px;
        font-size: 1.2em;
    }

    .form-group {
        padding: 15px 20px;
        display: flex;
        align-items: center;
        border: solid 1px #9ec1d2;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
    }

    .form-group input {
        border: none;
        box-shadow: none;
        background: none;
    }

    .form-group input:focus {
        outline: none !important;
        outline-offset: none;
    }

    .form__text {
        position: relative;
    }

    .form__email i {
        color: #57a2be;
        font-size: 1.6em;
        margin: 0 10px 0 0;
    }

    .form__email input {
        width: 90%;
    }

    .form__text i {
        position: absolute;
        margin: 15px 0 0 20px;
        color: #57a2be;
        font-size: 1.6em;
    }

    .form__message {
        padding: 0;
        border: none;
        border: solid 1px #9ec1d2;
        overflow: hidden;
    }

    .form__message textarea {
        width: 100%;
        padding: 15px 10px 10px 50px;
    }

    .text__contacts {
        width: 25%;
    }

    /*.form__email input ::-webkit-input-placeholder {*/
    /*    !* WebKit browsers *!*/
    /*    color: #ccc;*/
    /*    font-family: 'OpenSans-Regular';*/
    /*}*/
    /*.form__email input :-moz-placeholder {*/
    /*    !* Mozilla Firefox 4 to 18 *!*/
    /*    color: #ccc;*/
    /*    font-family: 'OpenSans-Regular';*/
    /*}*/
    /*.form__email input ::-moz-placeholder {*/
    /*    !* Mozilla Firefox 19+ *!*/
    /*    color: #ccc;*/
    /*    font-family: 'OpenSans-Regular';*/
    /*}*/
    /*.form__email input :-ms-input-placeholder {*/
    /*    !* Internet Explorer 10+ *!*/
    /*    color: #ccc;*/
    /*    font-family: 'OpenSans-Regular';*/
    /*}*/
</style>

<div class="wrap__contact">
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @if (session('warning'))
        <div class="alert alert-warning">
            {{ session('warning') }}
        </div>
    @endif
        <div class="text__contacts">
            <p>{{ trans('main.write_to_us_text') }}</p>
            <p>{{ trans('main.write_to_us_text2') }}</p>
        </div>
    <form method="post" action="{{ route('contactus.store') }}">
        {{ csrf_field() }}
        <div class="row form__contacts">
            <div class="col-md-12">
                <div class="form-group form__email {{ $errors->has('name') ? ' has-error' : '' }}">
                    <i class="far fa-user"></i>
                    <input type="text" name="name" class="form__imput" placeholder="{{ trans('main.name') }}"  required />
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group form__email {{ $errors->has('email') ? ' has-error' : '' }}">
                    <i class="far fa-envelope"></i>
                    <input type="email" name="email" class="form__imput" placeholder="Email"  required />
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group form__email {{ $errors->has('subject') ? ' has-error' : '' }}">
                    <i class="far fa-sticky-note"></i>
                    <input type="text" name="subject" class="form__imput" placeholder="{{ trans('main.theme') }}"  />
                    @if ($errors->has('subject'))
                        <span class="help-block">
                            <strong>{{ $errors->first('subject') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-md-12 form__text">
                <i class="far fa-comment-alt textera_icon"></i>
                <div class="form-group form__message {{ $errors->has('message') ? ' has-error' : '' }}">
                    <textarea name="message" class="form__imput" placeholder="{{ trans('main.your_message') }}" style="width: 100%; height: 150px;" required></textarea>
                    @if ($errors->has('message'))
                        <span class="help-block">
                            <strong>{{ $errors->first('message') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="form-group form__button">
                <input type="submit" name="btnSubmit" class="btn btn-primary btn-round btn-sm" value="{{ trans('main.to_send') }}" />
            </div>
        </div>
    </form>
</div>
</body>
</html>
