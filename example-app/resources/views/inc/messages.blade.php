@if($errors->any()) {{-- //Проверка на наличие ошибок, обращаюсь к объекту $errors и проверяю функцию any()--}}
<div class="alert alert-danger">{{--// Для вывода ошибок использую блок от бутстрап, стилизированый.--}}
    <ul>{{--// вывожу через список, не нумерованный--}}
        @foreach($errors->all() as $error) {{-- // вывожу ошибки через цикл foreach, можно и через for, while, forelse. Обращаюсь через объект $errors ко всем его сообщениям --}}
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>

@endif
