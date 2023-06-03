<!DOCTYPE html>
<html>

<head>
    <title>Application for Participation</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <!--<link href="{{ asset('jsstyle.js')}}" rel="stylesheet">-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   
</head>

<body>
    <p class="nameOfArticle">
        <a href= "{{ route('index') }}" class="btn btn-primary btn-lg text-uppercase " id="choice-btn">
            <i class="glyphicon glyphicon-menu-left" aria-hidden="true"></i> Назад
        </a>
    </p>
    
    <div class="block1">
        <div class="block2">
            <div class="block3">
                <p class="nameOfArticle">
                    <b>Форма</b>
                </p>
            </div>
            <form method="post" action="{{ route('form.update', $employees->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                    
                    </div>
                  <div class="block5">
                    <div class="form-group">
                        <div class="form-lastname">
                            <label for="myInput">Фамилия:</label>
                        </div>
                        <div class="form-input-lastname">
                        <input type="text3" name="last_name" id="last_name" value="{{ old('last_name', $employees->lastname) }}" />
                        @if ($errors->has('last_name'))
                                <div class="text-danger">{{ $errors->first('last_name') }}</div>
                            @endif
                    </div>
                    </div>
                    <div class="form-group">
                        <div class="form-lastname">
                            <label for="myInput">Имя:</label>
                        </div>
                        <div class="form-input-lastname">
                        <input type="text3" name="first_name" id="first_name" value="{{ old('first_name', $employees->firstname) }}" />
                        @if ($errors->has('first_name'))
                        <div class="text-danger">{{ $errors->first('first_name') }}</div>
                    @endif    
                    </div>
                    </div>
                    <div class="form-group">
                        <div class="form-lastname">
                            <label for="myInput">Отчество:</label>
                        </div>
                        <div class="form-input-lastname">
                        <input type="text3" name="patronymic" id="patronymic" value="{{ old('patronymic', $employees->patronymic) }}" />
                        @if ($errors->has('patronymic'))
                        <div class="text-danger">{{ $errors->first('patronymic') }}</div>
                    @endif    
                    </div>
                    </div>

                    <hr>

                    <div class="form-group">
                        <div class="form-lastname">
                            <label for="myInput">Компания:</label>
                        </div>
                        <div class="form-input-lastname2">
                        <select name="company" id="company_id" class="form-select form-select-lg mb-3">
                            @foreach ($companies as $company)
                                <option value="{{ $company->company_name }}" @if ($company->company_name == old('company', $employees->company)) selected @endif>{{ $company->company_name }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-lastname">
                            <label for="department">Отдел:</label>
                        </div>
                        <div class="form-input-lastname2">
                        <select name="department" id="department_id" class="form-select form-select-lg mb-3">
                            @foreach ($departments as $department)
                                <option value="{{ $department->department_name }}" @if ($department->department_name == old('department', $employees->department)) selected @endif>{{ $department->department_name }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>
                    <p class="styletext2">
                       
                    </p>
                </div>
                <div class="block6">
                    <p class="styletext3">
                        
                    </p>
                </div>
                <div class="block7">
                    <button type="submit" class="btn btn-primary" style="width: 100%;">Обновить</button>
                </div>
                </form>

        </div>
    </div>
    
    <script src="{{ asset('jsstyle.js') }}"></script>
</body>

</html>