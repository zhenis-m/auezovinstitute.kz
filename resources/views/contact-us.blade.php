<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>


<!------ Include the above in your HEAD tag ---------->

<style>
    .wrap__contact {
        width: 1200px;
        display: flex;
    }

    .form__contacts {
        display: flex;
        flex-direction: column;
        width: 550px;
        padding: 20px;
        background-color: #fff;
    }

    .form__button {
        display: flex;
        justify-content: flex-end;
        border: none !important;
    }

    .form__button input {
        background-color: #00435d !important;
        color: #fff;
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

    .form__message {
        padding: 0;
        border: none;
        position: relative;
    }

    .form__message i {
        position: absolute;
        margin: -46px 0 0 20px;
    }

    .form__message textarea {
        width: 100%;
        padding: 20px 10px 10px 35px;
        border: solid 1px #9ec1d2;
    }
</style>

<div class="container contact-form wrap__contact">
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
        <div class="text__contacts col-md-3">
            <p>{{ trans('main.write_to_us_text') }}</p>
            <p>{{ trans('main.write_to_us_text2') }}</p>
        </div>
    <form method="post" action="{{ route('contactus.store') }}">
        {{ csrf_field() }}
        <div class="row form__contacts">
            <div class="col-md-12">
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                    <i class="far fa-user"></i>
                    <input type="text" name="name" class="form-control" placeholder="Your Name *"  required />
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <i class="far fa-user"></i>
                    <input type="email" name="email" class="form-control" placeholder="Your Email *"  required />
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('subject') ? ' has-error' : '' }}">
                    <i class="far fa-user"></i>
                    <input type="text" name="subject" class="form-control" placeholder="Subject *"  />
                    @if ($errors->has('subject'))
                        <span class="help-block">
                            <strong>{{ $errors->first('subject') }}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group form__message {{ $errors->has('message') ? ' has-error' : '' }}">
                    <i class="far fa-user"></i>
                    <textarea name="message" class="form-control" placeholder="Your Message *" style="width: 100%; height: 150px;" required></textarea>
                    @if ($errors->has('message'))
                        <span class="help-block">
                            <strong>{{ $errors->first('message') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group form__button">
                    <input type="submit" name="btnSubmit" class="btn btn-primary btn-round btn-sm" value="Send Message" />
                </div>
            </div>
        </div>
    </form>
</div>
</body>
</html>
