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

    'accepted' => ':attribute qabul qilinishi shart.',
    'active_url' => ':attribute haqiqiy URL emas.',
    'after' => ':attribute :date dan keyingi sana boʻlishi kerak.',
    'after_or_equal' => ':attribute :date dan keyin yoki unga teng sana boʻlishi kerak.',
    'alpha' => ':attribute faqat harflarni oʻz ichiga olishi mumkin.',
    'alpha_dash' => ':attribute faqat harflar, raqamlar, chiziq va pastki chiziq belgilari oʻz ichiga olishi mumkin.',
    'alpha_num' => ':attribute faqat harflar va raqamlarni oʻz ichiga olishi mumkin.',
    'array' => ':attribute massiv boʻlishi kerak.',
    'before' => ':attribute :date dan oldin boʻlishi kerak.',
    'before_or_equal' => ':attribute :date dan oldin yoki unga teng sana boʻlishi kerak.',
    'between' => [
        'numeric' => ':attribute :min va :max oraligʻida boʻlishi kerak.',
        'file' => ':attribute :min va :max kilobayt oraligʻida boʻlishi kerak.',
        'string' => ':attribute :min va :max belgi oraligʻida boʻlishi kerak.',
        'array' => ':attribute :min va :max elementlar oraligʻida boʻlishi kerak.',
    ],
    'boolean' => ':attribute maydoni true yoki false boʻlishi kerak.',
    'confirmed' => ':attribute tasdiqlash mos kelmadi.',
    'date' => ':attribute haqiqiy sana emas.',
    'date_equals' => ':attribute :date ga teng sana boʻlishi kerak.',
    'date_format' => ':attribute :format formatiga mos kelmaydi.',
    'different' => ':attribute va :other farqli boʻlishi kerak.',
    'digits' => ':attribute :digits raqamdan iborat boʻlishi kerak.',
    'digits_between' => ':attribute :min va :max raqamlar oraligʻida boʻlishi kerak.',
    'dimensions' => ':attribute haqiqiy tasvirlar oʻlchamiga ega emas.',
    'distinct' => ':attribute maydoni takrorlanuvchi qiymatga ega.',
    'email' => ':attribute haqiqiy elektron pochta manzili boʻlishi kerak.',
    'ends_with' => ':attribute quyidagi elementlarning biri bilan tugashi kerak: :values.',
    'exists' => "Tanlangan :attribute haqiqiy emas.",
    'file' => ":attribute fayl boʻlishi kerak.",
    'filled' => ':attribute maydoni qiymati boʻlishi kerak.',
    'gt' => [
        'numeric' => ':attribute :value dan katta boʻlishi kerak.',
        'file' => ':attribute :value kilobaytdan katta boʻlishi kerak.',
        'string' => ':attribute :value belgidan katta boʻlishi kerak.',
        'array' => ':attribute :value elementdan oshiq boʻlishi kerak.',
    ],
    'gte' => [
        'numeric' => ':attribute :value dan katta yoki teng boʻlishi kerak.',
        'file' => ':attribute :value kilobaytdan katta yoki teng boʻlishi kerak.',
        'string' => ':attribute :value belgidan katta yoki teng boʻlishi kerak.',
        'array' => ':attribute :value elementdan oshiq yoki teng boʻlishi kerak.',
    ],
    'image' => ':attribute tasvir boʻlishi kerak.',
    'in' => 'Tanlangan :attribute haqiqiy emas.',
    'in_array' => ':attribute maydoni :other ichida mavjud emas.',
    'integer' => ':attribute butun son boʻlishi kerak.',
    'ip' => ':attribute haqiqiy IP manzil boʻlishi kerak.',
    'ipv4' => ':attribute haqiqiy IPv4 manzil boʻlishi kerak.',
    'ipv6' => ':attribute haqiqiy IPv6 manzil boʻlishi kerak.',
    'json' => ':attribute haqiqiy JSON qator boʻlishi kerak.',
    'lt' => [
        'numeric' => ':attribute :value dan kichik boʻlishi kerak.',
        'file' => ':attribute :value kilobaytdan kichik boʻlishi kerak.',
        'string' => ':attribute :value belgidan kichik boʻlishi kerak.',
        'array' => ':attribute :value elementdan kam boʻlishi kerak.',
    ],
    'lte' => [
        'numeric' => ':attribute :value dan kichik yoki teng boʻlishi kerak.',
        'file' => ':attribute :value kilobaytdan kichik yoki teng boʻlishi kerak.',
        'string' => ':attribute :value belgidan kichik yoki teng boʻlishi kerak.',
        'array' => ':attribute :value elementdan kam yoki teng boʻlishi kerak.',
    ],
    'max' => [
        'numeric' => ':attribute :max dan katta boʻlmasligi kerak.',
        'file' => ':attribute :max kilobaytdan katta boʻlmasligi kerak.',
        'string' => ':attribute :max belgidan katta boʻlmasligi kerak.',
        'array' => ':attribute :max elementdan oshmasligi kerak.',
    ],
    'mimes' => ':attribute quyidagi turlardagi fayllardan biri boʻlishi kerak: :values.',
    'mimetypes' => ':attribute quyidagi turlardagi fayllardan biri boʻlishi kerak: :values.',
    'min' => [
        'numeric' => ':attribute kamida :min boʻlishi kerak.',
        'file' => ':attribute kamida :min kilobayt boʻlishi kerak.',
        'string' => ':attribute kamida :min belgi boʻlishi kerak.',
        'array' => ':attribute kamida :min element boʻlishi kerak.',
    ],
    'multiple_of' => ':attribute :value ga koʻra koʻpaytma boʻlishi kerak',
    'not_in' => 'Tanlangan :attribute haqiqiy emas.',
    'not_regex' => ':attribute formati haqiqiy emas.',
    'numeric' => ':attribute raqam boʻlishi kerak.',
    'password' => 'Parol notoʻgʻri.',
    'present' => ':attribute maydoni mavjud boʻlishi kerak.',
    'regex' => ':attribute formati haqiqiy emas.',
    'required' => ':attribute maydoni toʻldirilishi shart.',
    'required_if' => ':other :value boʻlganida :attribute maydoni toʻldirilishi shart.',
    'required_unless' => ':values dagi bitta ham qiymat :other ga teng boʻlmaganida :attribute maydoni toʻldirilishi shart.',
    'required_with' => ':values mavjud boʻlganida :attribute maydoni toʻldirilishi shart.',
    'required_with_all' => ':values mavjud boʻlganida :attribute maydoni toʻldirilishi shart.',
    'required_without' => ':values mavjud boʻlmasa :attribute maydoni toʻldirilishi shart.',
    'required_without_all' => ':values mavjud boʻlmaganida :attribute maydoni toʻldirilishi shart.',
    'same' => ':attribute va :other mos kelishi kerak.',
    'size' => [
        'numeric' => ':attribute :size boʻlishi kerak.',
        'file' => ':attribute :size kilobayt boʻlishi kerak.',
        'string' => ':attribute :size belgi boʻlishi kerak.',
        'array' => ':attribute :size element boʻlishi kerak.',
    ],
    'starts_with' => ':attribute quyidagi elementlardan biri bilan boshlanishi kerak: :values.',
    'string' => ':attribute qator boʻlishi kerak.',
    'timezone' => ':attribute haqiqiy mintaqani koʻrsatishi kerak.',
    'unique' => ':attribute allaqachon olingan.',
    'uploaded' => ':attribute yuklab boʻlmadi.',
    'url' => ':attribute formati haqiqiy emas.',
    'uuid' => ':attribute haqiqiy UUID boʻlishi kerak.',

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'maxsus xabar',
        ],
    ],

    'attributes' => [],

];
