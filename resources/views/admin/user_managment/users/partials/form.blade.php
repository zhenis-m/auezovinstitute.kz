@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<label for="">Имя</label>
<input type="text" class="form-control" name="name" placeholder="Имя" value="@if(old('name')){{old('name')}}@else{{$user->name ?? ""}}@endif" required><br>

<label for="">Email</label>
<input type="email" class="form-control" name="Email" placeholder="Email" value="@if(old('email')){{old('email')}}@else{{$user->email ?? ""}}@endif" required><br>

<label for="">Пароль</label>
<input type="password" class="form-control" name="password"><br>

<label for="">Подтверждение пароля</label>
<input type="password" class="form-control" name="password_confirmation"><br>

<hr />
<input class="btn btn-primary" type="submit" value="Сохранить">

