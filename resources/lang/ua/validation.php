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

    'accepted' => 'Поле :attribute повинно бути прийняте.',
    'active_url' => 'Поле :attribute не є допустимою URL-адресою.',
    'after' => 'Поле :attribute повинно бути датою після :date.',
    'after_or_equal' => 'Поле :attribute повинно бути датою після або рівною :date.',
    'alpha' => 'Поле :attribute може містити лише літери.',
    'alpha_dash' => 'Поле :attribute може містити лише літери, цифри, дефіси та символи підкреслення.',
    'alpha_num' => 'Поле :attribute може містити лише літери та цифри.',
    'array' => 'Поле :attribute повинно бути масивом.',
    'before' => 'Поле :attribute повинно бути датою до :date.',
    'before_or_equal' => 'Поле :attribute повинно бути датою до або рівною :date.',
    'between' => [
        'numeric' => 'Поле :attribute повинно бути між :min і :max.',
        'file' => 'Поле :attribute повинно бути між :min і :max кілобайт.',
        'string' => 'Поле :attribute повинно бути між :min і :max символів.',
        'array' => 'Поле :attribute повинно містити від :min до :max елементів.',
    ],
    'boolean' => 'Поле :attribute повинно мати значення true або false.',
    'confirmed' => 'Поле :attribute не співпадає з підтвердженням.',
    'date' => 'Поле :attribute не є датою.',
    'date_equals' => 'Поле :attribute повинно бути датою рівною :date.',
    'date_format' => 'Поле :attribute не відповідає формату :format.',
    'different' => 'Поля :attribute і :other повинні бути різними.',
    'digits' => 'Довжина цифрового поля :attribute повинна бути :digits.',
    'digits_between' => 'Довжина цифрового поля :attribute повинна бути між :min і :max.',
    'dimensions' => 'Поле :attribute має недійсні розміри зображення.',
    'distinct' => 'Поле :attribute має повторюване значення.',
    'email' => 'Поле :attribute повинно бути дійсною електронною адресою.',
    'ends_with' => 'Поле :attribute повинно закінчуватися одним із наступних значень: :values.',
    'exists' => 'Вибране значення для :attribute недійсне.',
    'file' => 'Поле :attribute повинно бути файлом.',
    'filled' => 'Поле :attribute повинно мати значення.',
    'gt' => [
        'numeric' => 'Поле :attribute повинно бути більшим за :value.',
        'file' => 'Поле :attribute повинно бути більшим за :value кілобайт.',
        'string' => 'Поле :attribute повинно містити більше ніж :value символів.',
        'array' => 'Поле :attribute повинно містити більше ніж :value елементів.',
    ],
    'gte' => [
        'numeric' => 'Поле :attribute повинно бути більшим або дорівнювати :value.',
        'file' => 'Поле :attribute повинно бути більшим або дорівнювати :value кілобайт.',
        'string' => 'Поле :attribute повинно містити більше або дорівнювати :value символів.',
        'array' => 'Поле :attribute повинно містити більше або дорівнювати :value елементів.',
    ],
    'image' => 'Поле :attribute повинно бути зображенням.',
    'in' => 'Вибране значення для :attribute недійсне.',
    'in_array' => 'Поле :attribute не існує в :other.',
    'integer' => 'Поле :attribute повинно бути цілим числом.',
    'ip' => 'Поле :attribute повинно бути дійсною IP-адресою.',
    'ipv4' => 'Поле :attribute повинно бути дійсною IPv4-адресою.',
    'ipv6' => 'Поле :attribute повинно бути дійсною IPv6-адресою.',
    'json' => 'Поле :attribute повинно бути рядком JSON.',
    'lt' => [
        'numeric' => 'Поле :attribute повинно бути меншим за :value.',
        'file' => 'Поле :attribute повинно бути меншим за :value кілобайт.',
        'string' => 'Поле :attribute повинно містити менше ніж :value символів.',
        'array' => 'Поле :attribute повинно містити менше ніж :value елементів.',
    ],
    'lte' => [
        'numeric' => 'Поле :attribute повинно бути меншим або дорівнювати :value.',
        'file' => 'Поле :attribute повинно бути меншим або дорівнювати :value кілобайт.',
        'string' => 'Поле :attribute повинно містити менше або дорівнювати :value символів.',
        'array' => 'Поле :attribute повинно містити менше або дорівнювати :value елементів.',
    ],
    'max' => [
        'numeric' => 'Поле :attribute не може бути більше :max.',
        'file' => 'Поле :attribute не може бути більше :max кілобайт.',
        'string' => 'Поле :attribute не може мати більше :max символів.',
        'array' => 'Поле :attribute не може містити більше :max елементів.',
    ],
    'mimes' => 'Поле :attribute повинно бути файлом одного з наступних типів: :values.',
    'mimetypes' => 'Поле :attribute повинно бути файлом одного з наступних типів: :values.',
    'min' => [
        'numeric' => 'Поле :attribute повинно бути не менше :min.',
        'file' => 'Поле :attribute повинно бути не менше :min кілобайт.',
        'string' => 'Поле :attribute повинно містити не менше :min символів.',
        'array' => 'Поле :attribute повинно містити не менше :min елементів.',
    ],
    'not_in' => 'Вибране значення для :attribute недійсне.',
    'not_regex' => 'Поле :attribute має неприпустимий формат.',
    'numeric' => 'Поле :attribute повинно бути числом.',
    'password' => 'Неправильний пароль.',
    'present' => 'Поле :attribute повинно бути присутнім.',
    'regex' => 'Поле :attribute має неприпустимий формат.',
    'required' => 'Поле :attribute є обов\'язковим.',
    'required_if' => 'Поле :attribute є обов\'язковим, коли :other дорівнює :value.',
    'required_unless' => 'Поле :attribute є обов\'язковим, якщо :other не знаходиться в :values.',
    'required_with' => 'Поле :attribute є обов\'язковим, коли присутній :values.',
    'required_with_all' => 'Поле :attribute є обов\'язковим, коли присутні значення :values.',
    'required_without' => 'Поле :attribute є обов\'язковим, коли відсутній :values.',
    'required_without_all' => 'Поле :attribute є обов\'язковим, коли відсутні значення :values.',
    'same' => 'Поля :attribute і :other повинні збігатися.',
    'size' => [
        'numeric' => 'Поле :attribute повинно бути розміру :size.',
        'file' => 'Поле :attribute повинно бути розміру :size кілобайт.',
        'string' => 'Поле :attribute повинно містити :size символів.',
        'array' => 'Поле :attribute повинно містити :size елементів.',
    ],
    'starts_with' => 'Поле :attribute повинно починатися з одного з наступних значень: :values.',
    'string' => 'Поле :attribute повинно бути рядком.',
    'timezone' => 'Поле :attribute повинно бути дійсним часовим поясом.',
    'unique' => 'Таке значення поля :attribute вже існує.',
    'uploaded' => 'Не вдалося завантажити поле :attribute.',
    'url' => 'Формат поля :attribute неправильний.',
    'uuid' => 'Поле :attribute повинно бути дійсним UUID.',

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
