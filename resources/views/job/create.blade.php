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
                
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form method="post" class="row g-3 needs-validation">
                    @csrf
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>

                    <div class="col-md-8">
                        <label for="validationCustom01" class="form-label">Competência</label>
                        <input type="text" class="form-control" name="competence[]">
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Height</label>
                        <input type="text" class="form-control" name="heights[]">
                    </div>

                    <div class="col-md-8">
                        <label for="validationCustom01" class="form-label">Competência</label>
                        <input type="text" class="form-control" name="competence[]">
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Height</label>
                        <input type="text" class="form-control" name="heights[]">
                    </div>

                    <div class="col-md-8">
                        <label for="validationCustom01" class="form-label">Competência</label>
                        <input type="text" class="form-control" name="competence[]">
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Height</label>
                        <input type="text" class="form-control" name="heights[]">
                    </div>

                    <div class="col-md-8">
                        <label for="validationCustom01" class="form-label">Competência</label>
                        <input type="text" class="form-control" name="competence[]">
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Height</label>
                        <input type="text" class="form-control" name="heights[]">
                    </div>

                    <div class="col-md-8">
                        <label for="validationCustom01" class="form-label">Competência</label>
                        <input type="text" class="form-control" name="competence[]">
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Height</label>
                        <input type="text" class="form-control" name="heights[]">
                    </div>

                    <div class="col-md-8">
                        <label for="validationCustom01" class="form-label">Competência</label>
                        <input type="text" class="form-control" name="competence[]">
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Height</label>
                        <input type="text" class="form-control" name="heights[]">
                    </div>

                    <div class="col-md-8">
                        <label for="validationCustom01" class="form-label">Competência</label>
                        <input type="text" class="form-control" name="competence[]">
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Height</label>
                        <input type="text" class="form-control" name="heights[]">
                    </div>

                    <div class="col-md-8">
                        <label for="validationCustom01" class="form-label">Competência</label>
                        <input type="text" class="form-control" name="competence[]">
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Height</label>
                        <input type="text" class="form-control" name="heights[]">
                    </div>

                    <div class="col-md-8">
                        <label for="validationCustom01" class="form-label">Competência</label>
                        <input type="text" class="form-control" name="competence[]">
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Height</label>
                        <input type="text" class="form-control" name="heights[]">
                    </div>

                    <div class="col-md-8">
                        <label for="validationCustom01" class="form-label">Competência</label>
                        <input type="text" class="form-control" name="competence[]">
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Height</label>
                        <input type="text" class="form-control" name="heights[]">
                    </div>

                    <div class="col-md-8">
                        <label for="validationCustom01" class="form-label">Competência</label>
                        <input type="text" class="form-control" name="competence[]">
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Height</label>
                        <input type="text" class="form-control" name="heights[]">
                    </div>

                    <div class="col-md-8">
                        <label for="validationCustom01" class="form-label">Competência</label>
                        <input type="text" class="form-control" name="competence[]">
                    </div>
                    <div class="col-md-4">
                        <label for="validationCustom01" class="form-label">Height</label>
                        <input type="text" class="form-control" name="heights[]">
                    </div>
                    
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</head>

<body>


    @vite(["resources/js/bootstrap.bundle.min.js"])
</body>

</html>