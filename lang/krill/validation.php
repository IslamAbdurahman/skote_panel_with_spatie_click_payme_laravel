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

    'accepted' => ':attribute қабул қилиниши шарт.',
    'active_url' => ':attribute ҳақиқий URL эмас.',
    'after' => ':attribute :date дан кейинги сана бўлиши керак.',
    'after_or_equal' => ':attribute :date дан кейин ёки унга тенг сана бўлиши керак.',
    'alpha' => ':attribute фақат ҳарфларни ўз ичига олиши мумкин.',
    'alpha_dash' => ':attribute фақат ҳарфлар, рақамлар, чизиқ ва пастки чизиқ белгилари ўз ичига олиши мумкин.',
    'alpha_num' => ':attribute фақат ҳарфлар ва рақамларни ўз ичига олиши мумкин.',
    'array' => ':attribute масив бўлиши керак.',
    'before' => ':attribute :date дан олдин бўлиши керак.',
    'before_or_equal' => ':attribute :date дан олдин ёки унга тенг сана бўлиши керак.',
    'between' => [
        'numeric' => ':attribute :min ва :max оралиғида бўлиши керак.',
        'file' => ':attribute :min ва :max килобайт оралиғида бўлиши керак.',
        'string' => ':attribute :min ва :max белги оралиғида бўлиши керак.',
        'array' => ':attribute :min ва :max элементлар оралиғида бўлиши керак.',
    ],
    'boolean' => ':attribute майдони true ёки false бўлиши керак.',
    'confirmed' => ':attribute тасдиқлаш мос келмади.',
    'date' => ':attribute ҳақиқий сана эмас.',
    'date_equals' => ':attribute :date га тенг сана бўлиши керак.',
    'date_format' => ':attribute :format форматига мос келмайди.',
    'different' => ':attribute ва :other фарқли бўлиши керак.',
    'digits' => ':attribute :digits рақамдан иборат бўлиши керак.',
    'digits_between' => ':attribute :min ва :max рақамлар оралиғида бўлиши керак.',
    'dimensions' => ':attribute ҳақиқий тасвирлар ўлчамига эга эмас.',
    'distinct' => ':attribute майдони тақрорланувчи қийматга эга.',
    'email' => ':attribute ҳақиқий электрон почта манзили бўлиши керак.',
    'ends_with' => ':attribute қуйидаги элементларнинг бири билан тугаши керак: :values.',
    'exists' => "Танланган :attribute ҳақиқий эмас.",
    'file' => ":attribute файл бўлиши керак.",
    'filled' => ':attribute майдони қиймати бўлиши керак.',
    'gt' => [
        'numeric' => ':attribute :value дан катта бўлиши керак.',
        'file' => ':attribute :value килобайтдан катта бўлиши керак.',
        'string' => ':attribute :value белгидан катта бўлиши керак.',
        'array' => ':attribute :value элементдан ошиқ бўлиши керак.',
    ],
    'gte' => [
        'numeric' => ':attribute :value дан катта ёки тенг бўлиши керак.',
        'file' => ':attribute :value килобайтдан катта ёки тенг бўлиши керак.',
        'string' => ':attribute :value белгидан катта ёки тенг бўлиши керак.',
        'array' => ':attribute :value элементдан ошиқ ёки тенг бўлиши керак.',
    ],
    'image' => ':attribute тасвир бўлиши керак.',
    'in' => 'Танланган :attribute ҳақиқий эмас.',
    'in_array' => ':attribute майдони :other ичида мавжуд эмас.',
    'integer' => ':attribute бутун сон бўлиши керак.',
    'ip' => ':attribute ҳақиқий IP манзил бўлиши керак.',
    'ipv4' => ':attribute ҳақиқий IPv4 манзил бўлиши керак.',
    'ipv6' => ':attribute ҳақиқий IPv6 манзил бўлиши керак.',
    'json' => ':attribute ҳақиқий JSON қатор бўлиши керак.',
    'lt' => [
        'numeric' => ':attribute :value дан кичик бўлиши керак.',
        'file' => ':attribute :value килобайтдан кичик бўлиши керак.',
        'string' => ':attribute :value белгидан кичик бўлиши керак.',
        'array' => ':attribute :value элементдан кам бўлиши керак.',
    ],
    'lte' => [
        'numeric' => ':attribute :value дан кичик ёки тенг бўлиши керак.',
        'file' => ':attribute :value килобайтдан кичик ёки тенг бўлиши керак.',
        'string' => ':attribute :value белгидан кичик ёки тенг бўлиши керак.',
        'array' => ':attribute :value элементдан кам ёки тенг бўлиши керак.',
    ],
    'max' => [
        'numeric' => ':attribute :max дан катта бўлмаслиги керак.',
        'file' => ':attribute :max килобайтдан катта бўлмаслиги керак.',
        'string' => ':attribute :max белгидан катта бўлмаслиги керак.',
        'array' => ':attribute :max элементдан ошмаслиги керак.',
    ],
    'mimes' => ':attribute қуйидаги турлардаги файллардан бири бўлиши керак: :values.',
    'mimetypes' => ':attribute қуйидаги турлардаги файллардан бири бўлиши керак: :values.',
    'min' => [
        'numeric' => ':attribute камида :min бўлиши керак.',
        'file' => ':attribute камида :min килобайт бўлиши керак.',
        'string' => ':attribute камида :min белги бўлиши керак.',
        'array' => ':attribute камида :min элемент бўлиши керак.',
    ],
    'multiple_of' => ':attribute :value га қараб кўпайтириши керак',
    'not_in' => 'Танланган :attribute ҳақиқий эмас.',
    'not_regex' => ':attribute формати ҳақиқий эмас.',
    'numeric' => ':attribute рақам бўлиши керак.',
    'password' => 'Парол нотўғри.',
    'present' => ':attribute майдони мавжуд бўлиши керак.',
    'regex' => ':attribute формати ҳақиқий эмас.',
    'required' => ':attribute майдони тўлдирилиши шарт.',
    'required_if' => ':other :value бўлганда :attribute майдони тўлдирилиши шарт.',
    'required_unless' => ':values даги битта ҳам қиймат :other га тенг бўлмаганда :attribute майдони тўлдирилиши шарт.',
    'required_with' => ':values мавжуд бўлганда :attribute майдони тўлдирилиши шарт.',
    'required_with_all' => ':values мавжуд бўлганда :attribute майдони тўлдирилиши шарт.',
    'required_without' => ':values мавжуд бўлмаса :attribute майдони тўлдирилиши шарт.',
    'required_without_all' => ':values мавжуд бўлмаганда :attribute майдони тўлдирилиши шарт.',
    'same' => ':attribute ва :other мос келиши керак.',
    'size' => [
        'numeric' => ':attribute :size бўлиши керак.',
        'file' => ':attribute :size килобайт бўлиши керак.',
        'string' => ':attribute :size белги бўлиши керак.',
        'array' => ':attribute :size элемент бўлиши керак.',
    ],
    'starts_with' => ':attribute қуйидаги элементларнинг бири билан бошланиши керак: :values.',
    'string' => ':attribute қатор бўлиши керак.',
    'timezone' => ':attribute ҳақиқий минтақани кўрсатиши керак.',
    'unique' => ':attribute аллақачон олинган.',
    'uploaded' => ':attribute юклаб бўлмади.',
    'url' => ':attribute формати ҳақиқий эмас.',
    'uuid' => ':attribute ҳақиқий UUID бўлиши керак.',

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'макссус хабар',
        ],
    ],

    'attributes' => [],

];
