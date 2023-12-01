<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Поле :attribute должно быть принято.',
    'active_url' => 'Поле :attribute не является допустимым URL.',
    'after' => 'Поле :attribute должно быть датой после :date.',
    'after_or_equal' => 'Поле :attribute должно быть датой после или равной :date.',
    'alpha' => 'Поле :attribute может содержать только буквы.',
    'alpha_dash' => 'Поле :attribute может содержать только буквы, цифры, тире и подчеркивания.',
    'alpha_num' => 'Поле :attribute может содержать только буквы и цифры.',
    'array' => 'Поле :attribute должно быть массивом.',
    'before' => 'Поле :attribute должно быть датой до :date.',
    'before_or_equal' => 'Поле :attribute должно быть датой до или равной :date.',
    'between' => [
        'numeric' => 'Поле :attribute должно быть между :min и :max.',
        'file' => 'Поле :attribute должно быть между :min и :max килобайт.',
        'string' => 'Поле :attribute должно быть между :min и :max символов.',
        'array' => 'Поле :attribute должно иметь от :min до :max элементов.',
    ],
    'boolean' => 'Поле :attribute должно быть true или false.',
    'confirmed' => 'Подтверждение поля :attribute не совпадает.',
    'date' => 'Поле :attribute не является допустимой датой.',
    'date_equals' => 'Поле :attribute должно быть датой, равной :date.',
    'date_format' => 'Поле :attribute не соответствует формату :format.',
    'different' => 'Поля :attribute и :other должны различаться.',
    'digits' => 'Поле :attribute должно содержать :digits цифр.',
    'digits_between' => 'Поле :attribute должно содержать от :min до :max цифр.',
    'dimensions' => 'Поле :attribute имеет недопустимые размеры изображения.',
    'distinct' => 'Поле :attribute имеет повторяющееся значение.',
    'email' => 'Поле :attribute должно быть действительным адресом электронной почты.',
    'ends_with' => 'Поле :attribute должно заканчиваться одним из следующих значений: :values.',
    'exists' => 'Выбранное значение :attribute недействительно.',
    'file' => 'Поле :attribute должно быть файлом.',
    'filled' => 'Поле :attribute должно иметь значение.',
    'gt' => [
        'numeric' => 'Поле :attribute должно быть больше :value.',
        'file' => 'Поле :attribute должно быть больше :value килобайт.',
        'string' => 'Поле :attribute должно быть больше :value символов.',
        'array' => 'Поле :attribute должно содержать более :value элементов.',
    ],
    'gte' => [
        'numeric' => 'Поле :attribute должно быть больше или равно :value.',
        'file' => 'Поле :attribute должно быть больше или равно :value килобайт.',
        'string' => 'Поле :attribute должно быть больше или равно :value символов.',
        'array' => 'Поле :attribute должно содержать :value элементов или более.',
    ],
    'image' => 'Поле :attribute должно быть изображением.',
    'in' => 'Выбранное значение :attribute недействительно.',
    'in_array' => 'Поле :attribute не существует в :other.',
    'integer' => 'Поле :attribute должно быть целым числом.',
    'ip' => 'Поле :attribute должно быть действительным IP-адресом.',
    'ipv4' => 'Поле :attribute должно быть действительным IPv4-адресом.',
    'ipv6' => 'Поле :attribute должно быть действительным IPv6-адресом.',
    'json' => 'Поле :attribute должно быть допустимой JSON-строкой.',
    'lt' => [
        'numeric' => 'Поле :attribute должно быть меньше :value.',
        'file' => 'Поле :attribute должно быть меньше :value килобайт.',
        'string' => 'Поле :attribute должно быть меньше :value символов.',
        'array' => 'Поле :attribute должно содержать менее :value элементов.',
    ],
    'lte' => [
        'numeric' => 'Поле :attribute должно быть меньше или равно :value.',
        'file' => 'Поле :attribute должно быть меньше или равно :value килобайт.',
        'string' => 'Поле :attribute должно быть меньше или равно :value символов.',
        'array' => 'Поле :attribute не должно содержать более :value элементов.',
    ],
    'max' => [
        'numeric' => 'Поле :attribute не может быть больше :max.',
        'file' => 'Поле :attribute не может быть больше :max килобайт.',
        'string' => 'Поле :attribute не может быть больше :max символов.',
        'array' => 'Поле :attribute не может содержать более :max элементов.',
    ],
    'mimes' => 'Поле :attribute должно быть файлом типа: :values.',
    'mimetypes' => 'Поле :attribute должно быть файлом типа: :values.',
    'min' => [
        'numeric' => 'Поле :attribute должно быть не менее :min.',
        'file' => 'Поле :attribute должно быть не менее :min килобайт.',
        'string' => 'Поле :attribute должно быть не менее :min символов.',
        'array' => 'Поле :attribute должно содержать не менее :min элементов.',
    ],
    'multiple_of' => 'Поле :attribute должно быть кратным :value',
    'not_in' => 'Выбранное значение :attribute недействительно.',
    'not_regex' => 'Формат :attribute недопустим.',
    'numeric' => 'Поле :attribute должно быть числом.',
    'password' => 'Пароль неверен.',
    'present' => 'Поле :attribute должно присутствовать.',
    'regex' => 'Формат :attribute недопустим.',
    'required' => 'Поле :attribute обязательно для заполнения.',
    'required_if' => 'Поле :attribute обязательно, если :other равно :value.',
    'required_unless' => 'Поле :attribute обязательно, если :other не входит в :values.',
    'required_with' => 'Поле :attribute обязательно, если присутствует :values.',
    'required_with_all' => 'Поле :attribute обязательно, если присутствуют все :values.',
    'required_without' => 'Поле :attribute обязательно, если отсутствует :values.',
    'required_without_all' => 'Поле :attribute обязательно, если отсутствуют все :values.',
    'same' => 'Поля :attribute и :other должны совпадать.',
    'size' => [
        'numeric' => 'Поле :attribute должно быть размером :size.',
        'file' => 'Поле :attribute должно быть размером :size килобайт.',
        'string' => 'Поле :attribute должно быть размером :size символов.',
        'array' => 'Поле :attribute должно содержать :size элементов.',
    ],
    'starts_with' => 'Поле :attribute должно начинаться с одного из следующих значений: :values.',
    'string' => 'Поле :attribute должно быть строкой.',
    'timezone' => 'Поле :attribute должно быть действительным часовым поясом.',
    'unique' => 'Поле :attribute уже занято.',
    'uploaded' => 'Не удалось загрузить файл :attribute.',
    'url' => 'Формат :attribute недопустим.',
    'uuid' => 'Поле :attribute должно быть действительным UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
