@extends('admin.layouts.principal')

@section('content-main')

    <section class="section">
        <form action="{{route('adicionar')}}" method="POST" class="">

            {{-- cross-site request forgery csrf --}}
            @csrf

            <div class="input-field">
                <input class="form-control" type="text" id="nome" name="nome" >
                <label for="nome">Nome</label>
            </div>
            <div class="input-field">
                <input class="form-control" type="number" id="carga_horaria" name="carga_horaria" >
                <label for="carga_horaria">Carga Horaria</label>
            </div>
            <div class="input-field">
                <input class="form-control" type="text" id="professor" name="professor" >
                <label for="professor">Professor</label>
            </div>
            <div class="input-field">
                <input class="form-control" type="number" id="preco" name="preco" >
                <label for="preco">Preço</label>
            </div>
            <div class="right-align">
                <button class="btn waves-effect waves-light" type="submit">Salvar</button>
                <a href="{{url()->previous()}}" class="btn-flat waves-effect">
                    {{-- <i class="large material-icons">close</i> --}}
                    Cancelar
                </a>
            </div>
        </form>
    </section>

@endsection
