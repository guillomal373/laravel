{{-- <form action="{{route('associates.update', $associate->id)}}" method="post" enctype="multipart/form-data"> --}}
<form action="{{route('asociados.store')}}" method="POST" enctype="multipart/form-data">

    @csrf

    <div class="modal modal-blur fade" id="modal-associate-create" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <h5 class="modal-title">New report</h5> --}}
                    <h5 class="modal-title">Crear Asociado..</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Tipo de identificación</label>
                                <select class="form-select" name="id_type">
                                    <option value="Cédula De Ciudadanía" selected>Cédula De Ciudadanía</option>
                                    <option value="Número De Identificación Tributaria">Número De Identificación Tributaria</option>
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
                                    <input type="number" name="id_number" class="form-control ps-0" autocomplete="off" placeholder="Digite su identificación" >
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Primer nombre</label>
                                <input type="text" class="form-control" name="first_name" placeholder="Digite su primer nombre" >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Otros nombres</label>
                                <input type="text" class="form-control" name="other_names" placeholder="Digite otros nombres" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Primer apellido</label>
                        <input type="text" class="form-control" name="first_lastname" placeholder="Digite su primer apellido" >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Otros apellidos</label>
                        <input type="text" class="form-control" name="other_lastnames" placeholder="Digite otros apellidos">
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
                                <label class="form-label">Fecha de nacimiento</label>
                                <input type="date" class="form-control" placeholder="Digite su fecha de nacimiento" value="1984-03-29">
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mb-3">
                                <label class="form-label">Estado</label>
                                <select class="form-select">
                                    <option value="1" selected>Activo</option>
                                    <option value="2">Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        Cancelar
                    </a>
                    {{-- <a href="{{route('asociados.store')}}" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                        Crear
                    </a> --}}
                    <button class="btn btn-primary ms-auto" data-bs-dismiss="modal" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <line x1="12" y1="5" x2="12" y2="19"/>
                            <line x1="5" y1="12" x2="19" y2="12"/>
                        </svg>
                        crear
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
