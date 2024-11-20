@extends('admin.layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <p class="card-title">Registro de Usuarios</p>
                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="table-responsive">
                        @if ($registros->isNotEmpty())
                        <table id="registro" class="display expandable-table w-100" style="width:100%">
                            <thead>
                                <tr>
                                    <th style="width: 5%;">ID</th>
                                    <th style="width: 10%;">Cédula</th>
                                    <th style="width: 10%;">Nombre</th>
                                    <th style="width: 10%;">Apellido</th>
                                    <th style="width: 5%;">Edad</th>
                                    <th style="width: 10%;">Teléfono</th>
                                    <th style="width: 15%;">Email</th>
                                    <th style="width: 10%;">Municipio</th>
                                    <th style="width: 10%;">Parroquia</th>
                                    <th style="width: 13%;">Acciones</th>
                                    <th style="width: 2%;"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($registros as $registro)
                                <tr>
                                    <td>{{ $registro->id }}</td>
                                    <td>{{ $registro->cedula }}</td>
                                    <td>{{ $registro->nombre }}</td>
                                    <td>{{ $registro->apellido }}</td>
                                    <td>{{ $registro->edad }}</td>
                                    <td>{{ $registro->telefono }}</td>
                                    <td>{{ $registro->email }}</td>
                                    <td>{{ $registro->municipio }}</td>
                                    <td>{{ $registro->parroquia }}</td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-inverse-success btn-icon" onclick="window.location.href='{{ route('registro.edit', $registro->id) }}'">
                                            <i class="ti-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-inverse-dark btn-icon" onclick="window.open('/admin/generar-pdf/{{ $registro->id }}', '_blank')">
                                            <i class="ti-printer btn-icon-append"></i>
                                        </button>
                                    </td>
                                    <td class="details-control text-center"><i class="fas fa-plus-circle"></i></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @else
                        <p class="text-center">No hay datos para mostrar.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script>
    $(document).ready(function() {
        function format(d) {
            return `
            <tr class="expanded-row">
                <td colspan="10" class="row-bg" style="padding: 0;">
                <div class="w-100">
                    <table cellpadding="5" cellspacing="0" border="0" style="width:100%; table-layout: fixed;">
                    <tbody>
                        <tr>
                        <td class="expanded-cell" style="padding: 10px; width: 50%;">
                            <div class="d-flex justify-content-between" style="flex-wrap: wrap;">
                            <div class="cell-hilighted" style="width: 100%;">
                                <div class="d-flex mb-2">
                                <div class="mr-2 min-width-cell">
                                    <p>Ocupación</p>
                                    <h6>${d.ocupacion}</h6>
                                </div>
                                <div class="mr-2 min-width-cell">
                                    <p>Grado</p>
                                    <h6>${d.grado}</h6>
                                </div>
                                <div class="min-width-cell">
                                    <p>Categoría de el Proyecto</p>
                                    <h6>${d.categoria_p}</h6>
                                </div>
                                </div>
                                <div class="d-flex">
                                <div class="min-width-cell">
                                    <p>Descripción de el Proyecto</p>
                                    <h5>${d.descripcion_p}</h5>
                                </div>
                                </div>
                            </div>
                            </div>
                        </td>
                        </tr>
                    </tbody>
                    </table>
                </div>
                </td>
            </tr>
        `;
        }

        var table = $('#registro').DataTable({
            language: {
                search: "Buscar:",
                lengthMenu: "Mostrar _MENU_ registros por página",
                zeroRecords: "No se encontraron coincidencias",
                info: "Mostrando _START_ a _END_ de _TOTAL_ registros",
                infoEmpty: "No hay registros disponibles",
                infoFiltered: "(filtrado de _MAX_ registros en total)",
                paginate: {
                    first: "Primero",
                    last: "Último",
                    next: "Siguiente",
                    previous: "Anterior"
                },
            },
            responsive: true,
            data: @json($registros),
            columns: [{
                    data: "id"
                },
                {
                    data: "cedula"
                },
                {
                    data: "nombre"
                },
                {
                    data: "apellido"
                },
                {
                    data: "edad"
                },
                {
                    data: "telefono"
                },
                {
                    data: "email"
                },
                {
                    data: "municipio"
                },
                {
                    data: "parroquia"
                },
                {
                    data: null,
                    className: "text-center",
                    orderable: false,
                    render: function(data, type, row) {
                        return `
                        <button type="button" class="btn btn-inverse-success btn-icon" onclick="window.location.href='${window.location.origin}/admin/registro/${row.id}/edit'">
                            <i class="ti-pencil"></i>
                        </button>
                        <button type="button" class="btn btn-inverse-dark btn-icon" onclick="window.open('/admin/generar-pdf/${row.id}', '_blank')">
                            <i class="ti-printer btn-icon-append"></i>
                        </button>
                    `;
                    }
                },
                {
                    className: 'details-control text-center',
                    orderable: false,
                    data: null,
                    defaultContent: '<i class="fas fa-plus-circle"></i>'
                }
            ],
            order: [
                [0, 'asc']
            ]
        });

        $('#registro tbody').on('click', 'td.details-control', function() {
            var tr = $(this).closest('tr');
            var row = table.row(tr);

            if (row.child.isShown()) {
                row.child.hide();
                tr.removeClass('shown');
                $(this).html('<i class="fas fa-plus-circle"></i>');
            } else {
                row.child(format(row.data())).show();
                tr.addClass('shown');
                $(this).html('<i class="fas fa-minus-circle"></i>');
            }
        });
    });
</script>


@endsection