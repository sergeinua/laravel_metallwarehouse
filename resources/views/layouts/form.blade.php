{{ Form::open(['url' => 'message', 'method' => 'POST', 'id' => 'order', 'class' => 'order clearfix']) }}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <p class="title">Сделайте заказ</p>
    <label>
        {{ Form::text('name', null, ['placeholder'=>'Ваше имя', 'id' => 'name']) }}
    </label>
    <label>
        {{ Form::text('email', null, ['placeholder'=>'email']) }}
    </label>
    <label>
        {{ Form::text('tel', null, ['placeholder'=>'Ваш телефон', 'id' => 'tel']) }}
    </label>
    <label>
        {{ Form::textarea('msg', null, ['placeholder' => 'Сообщение']) }}
    </label>
    <label>
        {{ Form::button('Отправить', ['id' => 'sub_form', 'type' => 'submit']) }}
    </label>
{{ Form::close() }}

<script>
    $(document).ready(function () {
        $('#tel').attr('maxlength', '14');
        $(function () {
            $("#tel").mask("(999) 999-9999");
            $("#tel").on("blur", function () {
                var last = $(this).val().substr($(this).val().indexOf("-") + 1);
                if (last.length == 5) {
                    var move = $(this).val().substr($(this).val().indexOf("-") + 1, 1);
                    var lastfour = last.substr(1, 4);
                    var first = $(this).val().substr(0, 9);
                    $(this).val(first + move + '-' + lastfour);
                }
            });
        });
    });
</script>
