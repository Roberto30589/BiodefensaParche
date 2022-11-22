@extends('templates.main')

@section('content')    
  <style>
    #droppzone img{
        max-height: 380px;
        max-width: 100%;
    }

    #droppzone{
        position:relative;
        border:1px solid #ced4da;
        border-radius: 0.25rem;
        padding:0px;
        max-width: 100%;
    }
    
    #droppzone div{
        position:relative;
        border:1px solid #ced4da;
        border-radius: 0.25rem;
        padding:0px;
        margin:0.5rem;
        max-width: 50%;
    }

    #droppzone button{
        position:absolute;
        right:  0.2rem;
        top:  0.2rem;
    }

  </style>
    <div>
        <div class="container pt-3">
            <div class="card">
              <div class="card-header">
                <h2 align="center">
                    @if ($user->id)
                        <i class="material-icons fs-1">description</i>Detalles de Usuario
                    @else
                        <i class="material-icons fs-1">add_box</i>Agregar Usuario
                    @endif
                </h2>
              </div>
              <form method="post" action="{{url('config/user/store')}}" id="userForm">
                <div class="card-body">
                  {{csrf_field()}}
                  <input type="hidden" name="id" value="{{ $user->id }}">
                  <div class="form-group mb-3">
                      <label>Nombre Usuario</label>
                      <input type="text" class="form-control" name="name" value="{{$user->name}}" required>
                  </div>
                  <div class="form-group mb-3">
                      <label>Email</label>
                      <input type="text" class="form-control" name="email"  value="{{$user->email}}" required>
                  </div>
                  @if ($user->id)
                    <div class="form-group mb-3">
                        <div class="form-group form-check mb-1">
                          <input type="checkbox" class="form-check-input" name="newpassword" id="renovar" value="1">
                          <label class="form-check-label" for="renovar">Renovar Password</label>
                        </div>
                        <input type="text" class="form-control" name="password" id="password" length="6" disabled>
                    </div>
                  @else
                    <div class="form-group mb-3">
                        <label>Password</label>
                        <input type="text" class="form-control" name="password" length="6" required>
                    </div>
                  @endif
                  <div class="form-group mb-3">
                      <label>Roles del Usuario:</label>
                      @foreach ($roles as $role)
                          <div class="form-check">
                              @if ($user->hasRole($role->id))
                                  <input class="form-check-input" checked="true" type="checkbox" value="{{ $role->id }}" name="roles[]">
                              @else
                                  <input class="form-check-input" type="checkbox" value="{{ $role->id }}" name="roles[]">
                              @endif
                              <label class="form-check-label">
                                  <b>{{$role->name}}</b> - {{ $role->description }}
                              </label>
                          </div>
                      @endforeach
                  </div>

                  <div class="form-group mb-3">
                    <label>Clientes asociados:</label>
                    <div class="row">
                      @foreach ($clients as $client)
                          <div class="form-check col-4">
                            <label class="form-check-label">
                              @if (in_array($client->id, $user->clients->pluck('id')->toArray()))
                                  <input class="form-check-input" checked="true" type="checkbox" value="{{ $client->id }}" name="clients[]">
                              @else
                                  <input class="form-check-input" type="checkbox" value="{{ $client->id }}" name="clients[]">
                              @endif
                                  <b>{{$client->name}}</b>
                              </label>
                          </div>
                      @endforeach
                    </div>
                </div>
                </div>
                <div class="card-footer d-flex  justify-content-between">
                  <button type="submit" class="btn btn-success ">
                      <i class="material-icons">done</i>
                      Guardar
                  </button>
                  @if ($user->id)
                    <a  href="{{ url('/') }}/users/{{$user->id}}/delete" class="btn btn-danger">
                      <i class="material-icons">clear</i>
                      Eliminar
                    </a>
                  @endif
                </div>
              </form>
            </div>
            <script>
              var renovar = document.getElementById('renovar');
              var password = document.getElementById('password');
              var userForm = document.getElementById('userForm');

              @if ($user->id)
                renovar.onchange = function(){
                  if(this.checked){
                    password.disabled=false;
                    password.required=true;
                  }else{
                    password.disabled=true;
                    password.required=false;
                    password.value='';
                  }
                };
              @endif
            </script>
        </div>
    </div>
@stop
