@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <h3>Novo Usuário</h3>
        {!!Button::primary!!}
        {!!
        form($form->add('insert', 'submit', [
            'attr' => ['class' => 'btn-primary btn-block'],
            'label' => 'Inserir'
        ]))
        !!}
    </div>
</div>
@endsection