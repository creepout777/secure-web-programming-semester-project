@extends('professeur.layouts.app')

@section('title', 'Professeur Dashboard')

@section('content')
<div class="container mt-4">

    <h1 class="mb-4">Professeur Dashboard</h1>

    {{-- Metrics Cards --}}
    <div class="row row-deck row-cards mb-4">
        <div class="col-md-6">
            <div class="card card-sm">
                <div class="card-body d-flex align-items-center">
                    <span class="bg-primary text-white avatar me-3"><i class="bi bi-journal-text"></i></span>
                    <div>
                        <div class="text-muted">Mes Cours</div>
                        <div class="fw-bold">5</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-sm">
                <div class="card-body d-flex align-items-center">
                    <span class="bg-success text-white avatar me-3"><i class="bi bi-people"></i></span>
                    <div>
                        <div class="text-muted">Étudiants</div>
                        <div class="fw-bold">120</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Students Table --}}
    <div class="card mb-4">
        <div class="card-header">Liste des étudiants</div>
        <div class="card-body table-responsive">
            <table class="table table-vcenter table-nowrap table-striped">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Cours</th>
                        <th>Note Moyenne</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Alice</td>
                        <td>Math</td>
                        <td>15</td>
                        <td>
                            <button class="btn btn-sm btn-primary">Voir</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Bob</td>
                        <td>Physics</td>
                        <td>12</td>
                        <td>
                            <button class="btn btn-sm btn-primary">Voir</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Example Chart --}}
    <div class="card">
        <div class="card-header">Notes des étudiants</div>
        <div class="card-body">
            <canvas id="teacherChart" height="100"></canvas>
        </div>
    </div>

</div>

<script>
const ctx = document.getElementById('teacherChart').getContext('2d');
new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Alice','Bob','Charlie'],
        datasets: [{
            label: 'Notes Moyennes',
            data: [15, 12, 8],
            backgroundColor: '#206bc4',
            borderColor: '#206bc4',
            fill: false
        }]
    }
});
</script>
@endsection
