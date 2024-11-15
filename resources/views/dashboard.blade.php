@extends('layouts.app') {{-- Extiende una plantilla base de tu aplicación, que puede tener el encabezado, la barra de navegación, etc. --}}

@section('title', 'Dashboard - Institución Educativa San José')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Bienvenido al Dashboard</h1>
                <p class="lead text-center">Desde aquí podrás gestionar los proyectos productivos de la institución educativa.</p>
            </div>
<<<<<<< HEAD
        </div>

        {{-- Sección de acciones para proyectos productivos --}}
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Gestión de Proyectos Productivos</h3>
                    </div>
                    <div class="card-body">
                        {{-- Enlaces de acción --}}
                        <div class="row">
                            <div class="col-md-4">
                                <a href="{{ route('proyectos.create') }}" class="btn btn-primary btn-block">
                                    <i class="fas fa-plus"></i> Crear Proyecto Productivo
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('proyectos.index') }}" class="btn btn-warning btn-block">
                                    <i class="fas fa-edit"></i> Editar Proyecto Productivo
                                </a>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('contenido/publicar') }}" class="btn btn-success btn-block">
                                    <i class="fas fa-paper-plane"></i> Publicar Proyecto Productivo
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
=======
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-green-600">Cursos Disponibles</h2>
                <p class="text-gray-700">Explora nuestros cursos y programas educativos en el área agropecuaria.</p>
                <a href="#" class="btn btn-primary">leeer mas </a>
>>>>>>> 36a157e081a1528c26f44bf92a1a234e0d942c03
            </div>
        </div>

        {{-- Tabla o lista de proyectos existentes (opcional) --}}
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Proyectos Productivos Existentes</h3>
                    </div>
                    <div class="card-body">
                        @if($proyectos->count())
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nombre del Proyecto</th>
                                        <th>Descripción</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($proyectos as $proyecto)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $proyecto->nombre }}</td>
                                            <td>{{ Str::limit($proyecto->descripcion, 50) }}</td>
                                            <td>
                                                @if($proyecto->publicado)
                                                    <span class="badge badge-success">Publicado</span>
                                                @else
                                                    <span class="badge badge-danger">No publicado</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('proyectos.edit', $proyecto->id) }}" class="btn btn-warning btn-sm">
                                                    <i class="fas fa-edit"></i> Editar
                                                </a>
                                                <form action="{{ route('proyectos.destroy', $proyecto->id) }}" method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash-alt"></i> Eliminar
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <p>No hay proyectos productivos registrados.</p>
                        @endif
                    </div>
                </div>
            </div>
<<<<<<< HEAD
        </div>
=======
            <div class="bg-white p-4 rounded-lg shadow-md">
                <h2 class="text-xl font-semibold text-green-600">Proyectos</h2>
                <p class="text-gray-700">Explora los proyectos que afrece nuestra institucion educativa.</p>
                <a href="/proyectos" class="btn btn-primary"> Ver Proyectos </a>
            </div>
        </section>
>>>>>>> 36a157e081a1528c26f44bf92a1a234e0d942c03
    </div>
@endsection

@section('scripts')
    <script>
        // Aquí puedes agregar scripts si es necesario (por ejemplo, para confirmaciones de eliminación)
    </script>
@endsection
