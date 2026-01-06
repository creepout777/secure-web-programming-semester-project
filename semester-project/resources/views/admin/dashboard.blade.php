@extends('admin.layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mt-4">

    <h1 class="mb-4">Admin Dashboard</h1>

    {{-- Metrics Cards --}}
    <div class="row row-deck row-cards mb-4">
        <div class="col-md-4">
            <div class="card card-sm">
                <div class="card-body d-flex align-items-center">
                    <span class="bg-primary text-white avatar me-3"><i class="bi bi-people"></i></span>
                    <div>
                        <div class="text-muted">Étudiants</div>
                        <div class="fw-bold">120</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-sm">
                <div class="card-body d-flex align-items-center">
                    <span class="bg-success text-white avatar me-3"><i class="bi bi-person"></i></span>
                    <div>
                        <div class="text-muted">Professeurs</div>
                        <div class="fw-bold">15</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-sm">
                <div class="card-body d-flex align-items-center">
                    <span class="bg-warning text-white avatar me-3"><i class="bi bi-journal"></i></span>
                    <div>
                        <div class="text-muted">Cours</div>
                        <div class="fw-bold">35</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Users Table --}}
    <div class="card mb-4">
        <div class="card-header">Liste des utilisateurs</div>
        <div class="card-body table-responsive">
            <table class="table table-vcenter table-nowrap table-striped">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Alice</td>
                        <td>alice@example.com</td>
                        <td>Admin</td>
                        <td>
                            <button class="btn btn-sm btn-primary">Éditer</button>
                            <button class="btn btn-sm btn-danger">Supprimer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Bob</td>
                        <td>bob@example.com</td>
                        <td>Professeur</td>
                        <td>
                            <button class="btn btn-sm btn-primary">Éditer</button>
                            <button class="btn btn-sm btn-danger">Supprimer</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Charlie</td>
                        <td>charlie@example.com</td>
                        <td>Étudiant</td>
                        <td>
                            <button class="btn btn-sm btn-primary">Éditer</button>
                            <button class="btn btn-sm btn-danger">Supprimer</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Example Chart --}}
    <div class="card">
        <div class="card-header">Statistiques Étudiants / Professeurs</div>
        <div class="card-body">
            <canvas id="adminChart" height="100"></canvas>
        </div>
    </div>

</div>

<script>
const ctx = document.getElementById('adminChart').getContext('2d');
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Étudiants','Professeurs','Cours'],
        datasets: [{
            label: 'Total',
            data: [120, 15, 35],
            backgroundColor: ['#206bc4','#4dabf7','#f783ac']
        }]
    }
});
</script>
@endsection
