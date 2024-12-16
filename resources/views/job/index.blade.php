<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Job Indicator</title>

    <!-- Bootstrap core CSS -->
    @vite(["resources/css/bootstrap.min.css"])

    <div class="container">
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
                <span class="fs-4">Job Indicator</span>
            </a>
        </header>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="accordion" id="accordionExample">

                    <!-- Serve para pegar qualquer tipo de erro e mostra-lo para o usuário, todos os erros coletados -->
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    
                    @foreach ($jobs as $job )
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $job->id }}" aria-expanded="false" aria-controls="collapse{{$job->id}}">
                                {{ $job->job }}
                            </button>
                        </h2>
                        <div id="collapse{{$job->id}}" class="accordion-collapse collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form class="row g-3 needs-validation" method="post">
                                    @csrf
                                    <input type="hidden" name="job" value="{{$job->id}}" id="form-{{$job->id}}">
                                    <div class="col-md-8">
                                        <label for="validationCustom01" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" name="email" value="{{ isset($candidate) ? $candidate->email : ''}}" required>
                                    </div>
                                    <div class="col-md-4">
                                        <button type="button" class="btn btn-primary" name="search" value="search">Search</button>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label">Nome</label>
                                        <input type="text" name="name" class="form-control" value="{{ isset($candidate) ? $candidate->name : ''}}">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="validationCustom01" class="form-label">Telefone</label>
                                        <input type="text" name="phone" class="form-control" value="{{ isset($candidate) ? $candidate->phone : ''}}">
                                    </div>

                                    @foreach ($job->competences as $competence )
                                    <div class="col-md-4">
                                        <select name="competences[{{$competence->id}}]" class="form-select">
                                            <option value="" selected>Select</option>
                                            @foreach ($levels as $level )
                                            <option value="{{$level->id}}">{{$level->level}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-8">
                                        {{$competence->competence}}
                                    </div>
                                    @endforeach
                                    <div class="col-md-4">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</head>

<body>


    @vite(["resources/js/bootstrap.bundle.min.js"])
</body>

</html>