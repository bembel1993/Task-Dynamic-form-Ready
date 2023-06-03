<!DOCTYPE html>
<html>

<head>
    <title>Application for Participation</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('style3.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>

<p class="nameOfArticle">
  <a href= "{{ route('index') }}" class="btn btn-primary btn-lg text-uppercase" id="choice-btn">
    <i class="glyphicon glyphicon-menu-left" aria-hidden="true"></i> Назад
  </a>
</p>
@foreach ($data as $form)
<div class="col-md-4">
    <div class="block1">
      <a href="{{ route('forms.show', $form['form']->id) }}" class="btn btn-primary btn-xs" id="use-field-btn">
        <h1 class="glyphicon glyphicon-play-circle"></h1>
      </a>
      <div class="block2">
          <div class="block3"></div>
          <h1>Форма №: {{ $form['form']->id }}</h1>
          <form method="post" action="{{ route('form.registration') }}">
            <h2>{{ $form['form']->name }}</h2>
            @csrf             
              <div class="block5">                  
                  @foreach ($form['fields'] as $field)                  
                  <div class="form-group">
                      <div class="form-lastname">
                          <label for="{{ $field->name }}">{{ $field->name }}{{ $field->required ? '*' : '' }}:</label>
                      </div>
                      @if ($field->type == 'text')
                      <div class="form-input-lastname">
                          <input type="text" name="{{ $field->atribut }}" id="{{ $field->name }}" class="text3"{{ $field->required ? ' required' : '' }}>
                      </div>
                      @elseif ($field->type == 'email')
                          <input type="email" name="{{ $field->atribut }}" id="{{ $field->name }}" class="text3"{{ $field->required ? ' required' : '' }}>
                      @elseif ($field->type == 'number')
                          <input type="number" name="{{ $field->atribut }}" id="{{ $field->name }}" class="text3"{{ $field->required ? ' required' : '' }}>
                      @elseif ($field->type == 'select')
                          <hr>
                          @if($field->atribut == 'company')
                              <div class="form-input-lastname2">
                                  <select type="select" name="{{ $field->atribut }}" id="{{ $field->name }}" class="form-select form-select-lg mb-3" aria-label="Default select example">
                                  @foreach($companies as $company)
                                      <option value={{ $company->company_name }} >{{ $company->company_name }}</option>
                                  @endforeach
                                  </select>
                              </div>
                          @elseif($field->atribut == 'department')
                              <div class="form-input-lastname2">
                                  <select type="select" name="{{ $field->atribut }}" id="{{ $field->name }}" class="form-select form-select-lg mb-3" aria-label="Default select example">
                                  @foreach($departments as $dep)
                                      <option value={{ $dep->department_name }} >{{ $dep->department_name }}</option>
                                  @endforeach
                                  </select>
                              </div>
                          @endif  
                      @endif
                      @if ($errors->has($field->name))
                      <span class="text-danger">{{ $errors->first($field->name) }}</span>
                      @endif
                  </div>
                  @endforeach
                  <hr>
              </div>              
              <div class="block7">
                  <button class="btn btn-primary" style="width: 100%;">Отправить</button>
              </div>   
                        
          </form>     
            
      </div>
    </div>
    <br>
</div>
  <br>
@endforeach
    
</body>
</html>