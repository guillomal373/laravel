{{-- <form action="{{route('associates.update', $associate->id)}}" method="post" enctype="multipart/form-data"> --}}
<form action="" method="post" enctype="multipart/form-data">
    <div class="modal modal-blur fade" id="modal-associate-edit-report" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <h5 class="modal-title">New report</h5> --}}
                    <h5 class="modal-title">Editar Asociado</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Tipo de identificación</label>
                                <select class="form-select">
                                    <option value="1">Cédula De Ciudadanía</option>
                                    <option value="2" selected>Número De Identificación Tributaria</option>
                                    <option value="3">Tarjeta De Identidad</option>
                                    <option value="4">Cédula De Extranjería</option>
                                    <option value="5">Pasaporte</option>
                                    <option value="6">Registro Civil</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Identificación</label>
                                <div class="input-group input-group-flat">
                                <span class="input-group-text"> </span>
                                    <input type="text" class="form-control ps-0" autocomplete="off" placeholder="Digite su identificación" value="324750510">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Primer nombre</label>
                                <input type="text" class="form-control" name="example-text-input" placeholder="Digite su primer nombre" value="Junior Gislason">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Otros nombres</label>
                                <input type="text" class="form-control" name="example-text-input" placeholder="Digite otros nombres" value="Evan Hills">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Primer apellido</label>
                        <input type="text" class="form-control" name="example-text-input" placeholder="Digite su primer apellido" value="Gusikowski">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Otros apellidos</label>
                        <input type="text" class="form-control" name="example-text-input" placeholder="Digite otros apellidos" value="Erdman">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Género</label>
                                <select class="form-select">
                                    <option value="1" selected>Femenino</option>
                                    <option value="2">Masculino</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Fecha de nacimiento</label>
                                <input type="date" class="form-control" placeholder="Digite su fecha de nacimiento" value="2024-05-17">
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Reporting period</label>
                            <input type="date" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div>
                            <label class="form-label">Additional information</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div> --}}
                    {{-- <label class="form-label">Report type</label> --}}
                    {{-- <div class="form-selectgroup-boxes row mb-3">
                        <div class="col-lg-6">
                            <label class="form-selectgroup-item">
                                <input type="radio" name="report-type" value="1" class="form-selectgroup-input" checked>
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                        <span class="me-3">
                        <span class="form-selectgroup-check"></span>
                        </span>
                        <span class="form-selectgroup-label-content">
                        <span class="form-selectgroup-title strong mb-1">Simple</span>
                        <span class="d-block text-muted">Provide only basic data needed for the report</span>
                        </span>
                    </span>
                            </label>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-selectgroup-item">
                                <input type="radio" name="report-type" value="1" class="form-selectgroup-input">
                                <span class="form-selectgroup-label d-flex align-items-center p-3">
                        <span class="me-3">
                        <span class="form-selectgroup-check"></span>
                        </span>
                        <span class="form-selectgroup-label-content">
                        <span class="form-selectgroup-title strong mb-1">Advanced</span>
                        <span class="d-block text-muted">Insert charts and additional advanced analyses to be inserted in the report</span>
                        </span>
                    </span>
                            </label>
                        </div>
                    </div> --}}
                    {{-- <div class="row">
                        <div class="col-lg-8">
                            <div class="mb-3">
                                <label class="form-label">Report url</label>
                                <div class="input-group input-group-flat">
                                <span class="input-group-text"> https://tabler.io/reports/ </span>
                                    <input type="text" class="form-control ps-0" value="report-01" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label class="form-label">Visibility</label>
                                <select class="form-select">
                                    <option value="1" selected>Private</option>
                                    <option value="2">Public</option>
                                    <option value="3">Hidden</option>
                                </select>
                            </div>
                        </div>
                    </div> --}}
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
                {{-- <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Client name</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="mb-3">
                                <label class="form-label">Reporting period</label>
                                <input type="date" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div>
                                <label class="form-label">Additional information</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
                        Cancelar
                    </a>
                    <a href="#" class="btn btn-primary ms-auto" data-bs-dismiss="modal">
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                            <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                            <path d="M14 4l0 4l-6 0l0 -4" />
                          </svg>
                        Actualizar
                    </a>
                </div>
            </div>
        </div>
    </div>
</form>