<!--Вырезаем эту часть кода с contact.blade.php-->
@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!--Эта часть кода для удачного отображения данных-->

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
