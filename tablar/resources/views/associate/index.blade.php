@extends('tablar::page')

{{-- @section('title_prefix', '(Asociados pre)') --}}
@section('title', 'Asociados')
{{-- @section('title_postfix', 'Asociados post') --}}

@section('content')
    <!-- Page header -->
    <div class="page-header d-print-none">
        <div class="container-xl">
            <div class="row g-2 align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Resumen
                    </div>
                    <h2 class="page-title">
                        Asociados
                    </h2>
                </div>
                <!-- Page title actions -->
                <div class="col-12 col-md-auto ms-auto d-print-none">
                    <div class="btn-list">
                  {{-- <span class="d-none d-sm-inline">
                    <a href="#" class="btn btn-white">
                      New view
                    </a>
                  </span> --}}
                        <a href="#" class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal" data-bs-target="#modal-associate-create">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                            Crear Nuevo Asociado
                        </a>
                        <a href="#" class="btn btn-primary d-sm-none btn-icon" data-bs-toggle="modal"
                           data-bs-target="#modal-create-repot" aria-label="Crear Nuevo Asociado">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                 viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                 stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <line x1="12" y1="5" x2="12" y2="19"/>
                                <line x1="5" y1="12" x2="19" y2="12"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page body -->
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Listado</h3>
                        </div>
                        <div class="card-body border-bottom py-3">
                            <div class="d-flex">
                                <div class="text-muted">
                                    Por página 
                                    <div class="mx-2 d-inline-block">
                                        <input type="text" class="form-control form-control-sm" value="10" size="3"
                                               aria-label="Invoices count">
                                    </div>
                                    asociados
                                </div>
                                <div class="ms-auto text-muted">
                                    Buscar:
                                    <div class="ms-2 d-inline-block">
                                        <input type="text" class="form-control form-control-sm"
                                               aria-label="Search invoice">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap datatable">
                                <thead>
                                <tr>
                                    <th class="w-1">Seleccionar
                                    {{-- <input class="form-check-input m-0 align-middle" type="checkbox"
                                                           aria-label="Select all invoices"> --}}
                                    </th>
                                    {{-- <th class="w-1">
                                        <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                             class="icon icon-sm text-dark icon-thick" width="24" height="24"
                                             viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                             stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                            <polyline points="6 15 12 9 18 15"/>
                                        </svg>
                                    </th> --}}
                                    <th>Identificación</th>
                                    <th>Nombre Completo</th>
                                    <th>Género</th>
                                    <th>Estado</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($associates as $associate)   
                                    {{-- <tr>{{$associate}}<br></tr> --}}
                                        <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                                        <td><span class="text-muted">{{$associate->id}}-{{$associate->id_number}}</span></td>
                                        {{-- <td><a data-bs-toggle="modal" data-bs-target="#modal-report" href="invoice.html" class="text-reset" tabindex="-1">{{$associate->first_name}}</a></td> --}}
                                        <td><a data-bs-toggle="modal" data-bs-target="#modal-associate-edit" class="text-reset" tabindex="-1">{{$associate->first_name.' '.$associate->first_lastname}}</a></td>
                                        <td>{{$associate->gender}}</td>
                                        <td> <span class="badge me-1 {{$associate->status == 'Activo' ? 'bg-success' : 'bg-danger'}} "></span> {{$associate->status}} </td>
                                        <td class="text-end">
                                            <span class="dropdown">
                                            <button class="btn dropdown-toggle align-text-top" data-bs-boundary="viewport"
                                                    data-bs-toggle="dropdown">Acciones</button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="margin-right:5px" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                                      </svg> <span>Activar</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="margin-right:5px" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-circle-off">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M20.042 16.045a9 9 0 0 0 -12.087 -12.087m-2.318 1.677a9 9 0 1 0 12.725 12.73" />
                                                        <path d="M3 3l18 18" />
                                                      </svg> <span>Desactivar</span>
                                                </a>
                                                <a class="dropdown-item" href="{{route('asociados.edit', $associate)}}">
                                                    {{-- <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modal-associate-edit"> --}}
                                                    <svg xmlns="http://www.w3.org/2000/svg" margin-right="5" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-edit">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M7 7h-1a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-1" />
                                                        <path d="M20.385 6.585a2.1 2.1 0 0 0 -2.97 -2.97l-8.415 8.385v3h3l8.385 -8.415z" />
                                                        <path d="M16 5l3 3" />
                                                      </svg> <span>Editar</span>
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" margin-right="5" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-eraser">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                        <path d="M19 20h-10.5l-4.21 -4.3a1 1 0 0 1 0 -1.41l10 -10a1 1 0 0 1 1.41 0l5 5a1 1 0 0 1 0 1.41l-9.2 9.3" />
                                                        <path d="M18 13.3l-6.3 -6.3" />
                                                      </svg> <span>Eliminar</span>
                                                </a>
                                            </div>
                                            </span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex align-items-center">
                             {!! $associates->links('tablar::pagination') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('associate.modal-create')
    @include('associate.modal-edit')
@endsection
