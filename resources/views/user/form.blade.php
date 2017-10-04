<fieldset>
    <div class="form-group">
        {{Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email'])}}
    </div>
    <div class="form-group">
        {{Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre Completo'])}}
    </div>
    <div class="form-group">
        @if($referido)
            {{Form::email('referido', $referido , ['class' => 'form-control', 'placeholder' => 'Email de la persona que refiere','readonly'] )}}
        @else
            {{Form::email('referido', null , ['class' => 'form-control', 'placeholder' => 'Email de la persona que refiere'] )}}
        @endif
    </div>
    <div class="form-group">
        {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'Contraseña'])}}
    </div>
    <div class="form-group">
        {{Form::password('password_confirmation',['class' => 'form-control', 'placeholder' => 'Repita Contraseña'])}}
    </div>
    {{Form::submit('Registrar',['class' => 'btn btn-lg btn-success btn-block'])}}
</fieldset>