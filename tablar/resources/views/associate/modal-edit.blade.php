{{-- <form action="{{route('associates.update', $associate->id)}}" method="post" enctype="multipart/form-data"> --}}
<div>{{$associate}}</div>
<form action="{{route('asociados.update', $associate)}}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('PUT')

    <div class="modal modal-blur fade" id="modal-associate-edit" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Editar Asociado[]</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Tipo de identificación</label>
                                <select class="form-select" name="id_type">
                                    <option value="Cédula De Ciudadanía" selected>Cédula De Ciudadanía</option>
                                    <option value="Número De Identificación Tributaria" >Número De Identificación Tributaria</option>
                                    <option value="Tarjeta De Identidad">Tarjeta De Identidad</option>
                                    <option value="Cédula De Extranjería">Cédula De Extranjería</option>
                                    <option value="Pasaporte">Pasaporte</option>
                                    <option value="Registro Civil">Registro Civil</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Identificación</label>
                                <div class="input-group input-group-flat">
                                <span class="input-group-text"> </span>
                                    <input type="text" name="id_number" class="form-control ps-0" autocomplete="off" placeholder="Digite su identificación" value="{{$associate->id_number}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Id</label>
                                <input type="text" class="form-control" name="id" placeholder="Id" value="{{$associate->id}}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Primer nombre</label>
                                <input type="text" class="form-control" name="first_name" placeholder="Digite su primer nombre" value="{{$associate->first_name}}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Otros nombres</label>
                                <input type="text" class="form-control" name="other_names" placeholder="Digite otros nombres" value="{{$associate->other_names}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Primer apellido</label>
                        <input type="text" class="form-control" name="first_lastname" placeholder="Digite su primer apellido" value="{{$associate->first_lastname}}">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Otros apellidos</label>
                        <input type="text" class="form-control" name="other_lastnames" placeholder="Digite otros apellidos" value="{{$associate->other_lastnames}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Género</label>
                                <select class="form-select" name="gender">
                                    <option value="Femenino">Femenino</option>
                                    <option value="Masculino" selected>Masculino</option>
                                </select>
                            </div>
                        </div>
                        {{-- <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Fecha de nacimiento {{$associate->created_at}}</label>
                                <input type="date" class="form-control" placeholder="Digite su fecha de nacimiento" value="{{$associate->created_at}}">
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Estado</label>
                                <select class="form-select"  name="status">
                                    <option value="Activo" selected>Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        Cancelar
                    </a>
                    {{-- <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                            <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M14 4l0 4l-6 0l0 -4" />
                          </svg>
                        Actualizar
                    </a> --}}
                    <button class="btn btn-primary ms-auto" data-bs-dismiss="modal" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                            <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M14 4l0 4l-6 0l0 -4" />
                          </svg>
                        Actualizar
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
