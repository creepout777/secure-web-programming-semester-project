@extends('etudiant.layouts.app')

@section('title', 'Étudiant Dashboard')

@section('content')
<div class="container mt-4">

    <h1 class="mb-4">Étudiant Dashboard</h1>

    {{-- Metrics Cards --}}
    <div class="row row-deck row-cards mb-4">
        <div class="col-md-6">
            <div class="card card-sm">
                <div class="card-body d-flex align-items-center">
                    <span class="bg-primary text-white avatar me-3"><i class="bi bi-journal-text"></i></span>
                    <div>
                        <div class="text-muted">Cours inscrits</div>
                        <div class="fw-bold">5</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-sm">
                <div class="card-body d-flex align-items-center">
                    <span class="bg-success text-white avatar me-3"><i class="bi bi-check2-square"></i></span>
                    <div>
                        <div class="text-muted">Assignments à rendre</div>
                        <div class="fw-bold">3</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Courses Table --}}
    <div class="card mb-4">
        <div class="card-header">Mes cours</div>
        <div class="card-body table-responsive">
            <table class="table table-vcenter table-nowrap table-striped">
                <thead>
                    <tr>
                        <th>Cours</th>
                        <th>Professeur</th>
                        <th>Prochain devoir</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Math</td>
                        <td>Sarah</td>
                        <td>2026-01-10</td>
                        <td>
                            <button class="btn btn-sm btn-primary">Voir</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Physics</td>
                        <td>John</td>
                        <td>2026-01-12</td>
                        <td>
                            <button class="btn btn-sm btn-primary">Voir</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection