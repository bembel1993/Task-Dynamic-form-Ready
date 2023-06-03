<!DOCTYPE html>
<html>

<head>
    <title>Application for Participation</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('style4.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   
</head>

<body>
    <p class="nameOfArticle">
        <a href= "{{ route('index') }}" class="btn btn-primary btn-lg text-uppercase" id="choice-btn">
          <i class="glyphicon glyphicon-menu-left" aria-hidden="true"></i> Назад
        </a>
    </p>

    <div class="block1">
        <div class="block2">
            <div class="block3">
                <p class="nameOfArticle">
                    <b>Создание формы</b>
                </p>
            </div>
            <form method="POST" action="{{ route('forms.store') }}">
                {{ csrf_field() }}
                <div class="form-group">
                  <div class="form-lastname">
                    <label for="name">Название формы:</label>
                  </div>
                  <div class="form-input-lastname">
                    <input type="text" class="text3" id="name" name="name" required>
                  </div>
                </div>
              
                <div id="fields">
                  <div class="field">
                    <div class="form-group">
                      <div class="form-lastname">
                        <label for="field-name-0">Название поля:</label>
                      </div>
                      <div class="form-input-lastname">
                        <input type="text" class="text3" id="field-name-0" name="fields[0][name]" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="form-lastname">
                        <label for="field-type-0">Тип поля:</label>
                      </div>
                      <div class="form-input-lastname">
                        <select id="field-type-0" class="form-select form-select-lg mb-3" name="fields[0][type]" required>
                          <option value="text">Text</option>
                          <option value="email">Email</option>
                          <option value="number">Number</option>
                          <option value="select">Select</option>
                        </select>
                      </div>
                    </div>
                      <br>
                      <div class="form-group">
                        <div class="form-lastname">
                          <label for="field-atribut-0">Атрибут поля:</label>
                        </div>
                        <div class="form-input-lastname">
                          <select id="field-atribut-0" class="form-select form-select-lg mb-3" name="fields[0][atribut]" required>
                            <option value="last_name">last_name</option>
                            <option value="first_name">first_name</option>
                            <option value="patronymic">patronymic</option>
                            <option value="company">company</option>
                            <option value="department">department</option>
                          </select>
                        </div>
                      </div>
                    <label for="field-required-0" >Обязательное поле:</label>
                    <input type="checkbox" id="field-required-0" name="fields[0][required]">
                    <hr>
                  </div>
                </div>
              
                <button type="button" class="btn btn-primary btn-xs" id="add-field-btn">
                  <h1 class="glyphicon glyphicon-plus"></h1>
                </button>
                <button type="button" class="btn btn-primary btn-xs" id="remove-field-btn">
                  <h1 class="glyphicon glyphicon-remove"></h1>
                </button>
              
                <button type="submit" class="btn btn-primary btn-xs">
                  <h1 class="glyphicon glyphicon-floppy-disk"></h1>
                </button>
            </form>
                <p class="styletext2"></p>
        </div>
                <div class="block6">
                    <p class="styletext3">
                        
                    </p>
                </div>
        </div>
    </div>

    <script src="{{ asset('jsstyle.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        var fieldCount = 1;
      
        $('#add-field-btn').click(function() {
          var field = 
          '<div class="field">' +
            '<div class="form-group">' + 
              '<div class="form-lastname">' +
                '<label for="field-name-' + fieldCount + '">Название поля:</label>' +
              '</div>' +
              '<div class="form-input-lastname">' +
                '<input type="text" class="text3" id="field-name-' + fieldCount + '" name="fields[' + fieldCount + '][name]" required>' +
              '</div>' +
            '</div>' +
            '<div class="form-group">' +
              '<div class="form-lastname">' +
                '<label for="field-type-' + fieldCount + '">Тип поля:</label>' +
              '</div>' +
              '<div class="form-input-lastname">' +
                '<select id="field-type-' + fieldCount + '" class="form-select form-select-lg mb-3" name="fields[' + fieldCount + '][type]" required>' +
                  '<option value="text">Text</option>' +
                  '<option value="email">Email</option>' +
                  '<option value="number">Number</option>' +
                  '<option value="select">Select</option>' +
                '</select>' +
              '</div>' +
            '</div>' +
             ' <br> ' +
             '<div class="form-group">' +
              '<div class="form-lastname">' +
                '<label for="field-atribut-' + fieldCount + '">Атрибут поля:</label>' +
              '</div>' +
              '<div class="form-input-lastname">' +
                '<select id="field-atribut-' + fieldCount + '" class="form-select form-select-lg mb-3" name="fields[' + fieldCount + '][atribut]" required>' +
                  '<option value="last_name">last_name</option>' +
                  '<option value="first_name">first_name</option>' +
                  '<option value="patronymic">patronymic</option>' +
                  '<option value="company">company</option>' +
                  '<option value="department">department</option>' +
                '</select>' +
              '</div>' +
            '</div>' +
            '<label for="field-required-' + fieldCount + '">Обязательное поле:</label>' +
            '<input type="checkbox" id="field-required-' + fieldCount + '" name="fields[' + fieldCount + '][required]">' +
            '<hr>' +
          '</div>';
      
          $('#fields').append(field);
          fieldCount++;
        });
    </script>
    <script>
      $('#remove-field-btn').click(function() {
        if (fieldCount > 1) {
        $('#fields .field:last-child').remove();
          fieldCount--;
        }
      });
    </script>
</body>

</html>