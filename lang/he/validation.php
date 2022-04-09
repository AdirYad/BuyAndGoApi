<?php

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

return [
    'accepted'             => 'השדה :attribute חייב להיות מסומן.',
    'accepted_if'          => 'The :attribute must be accepted when :other is :value.',
    'active_url'           => 'השדה :attribute הוא לא כתובת אתר תקנית.',
    'after'                => 'השדה :attribute חייב להיות תאריך אחרי :date.',
    'after_or_equal'       => 'השדה :attribute חייב להיות תאריך מאוחר או שווה ל :date.',
    'alpha'                => 'השדה :attribute יכול להכיל אותיות בלבד.',
    'alpha_dash'           => 'השדה :attribute יכול להכיל אותיות, מספרים ומקפים בלבד.',
    'alpha_num'            => 'השדה :attribute יכול להכיל אותיות ומספרים בלבד.',
    'array'                => 'השדה :attribute חייב להיות מערך.',
    'before'               => 'השדה :attribute חייב להיות תאריך לפני :date.',
    'before_or_equal'      => 'השדה :attribute חייב להיות תאריך מוקדם או שווה ל :date.',
    'between'              => [
        'array'   => 'השדה :attribute חייב להיות בין :min ל-:max פריטים.',
        'file'    => 'השדה :attribute חייב להיות בין :min ל-:max קילובייטים.',
        'numeric' => 'השדה :attribute חייב להיות בין :min ל-:max.',
        'string'  => 'השדה :attribute חייב להיות בין :min ל-:max תווים.',
    ],
    'boolean'              => 'השדה :attribute חייב להיות אמת או שקר.',
    'confirmed'            => 'השדה האישור של :attribute לא תואם.',
    'current_password'     => 'The password is incorrect.',
    'date'                 => 'השדה :attribute אינו תאריך תקני.',
    'date_equals'          => 'על ה :attribute להיות תאריך שווה ל- :date.',
    'date_format'          => 'השדה :attribute לא תואם את הפורמט :format.',
    'declined'             => 'The :attribute must be declined.',
    'declined_if'          => 'The :attribute must be declined when :other is :value.',
    'different'            => 'השדה :attribute והשדה :other חייבים להיות שונים.',
    'digits'               => 'השדה :attribute חייב להיות בעל :digits ספרות.',
    'digits_between'       => 'השדה :attribute חייב להיות בין :min ו-:max ספרות.',
    'dimensions'           => 'השדה :attribute מימדי התמונה לא תקינים',
    'distinct'             => 'השדה :attribute קיים ערך כפול.',
    'email'                => 'השדה :attribute חייב להיות כתובת אימייל תקנית.',
    'ends_with'            => 'השדה :attribute חייב להסתיים באחד מהבאים: :values',
    'enum'                 => 'The selected :attribute is invalid.',
    'exists'               => 'בחירת ה:attribute אינה תקפה.',
    'file'                 => 'השדה :attribute חייב להיות קובץ.',
    'filled'               => 'השדה :attribute הוא חובה.',
    'gt'                   => [
        'array'   => 'על ה :attribute לכלול יותר מ- :value פריטים.',
        'file'    => 'על ה :attribute להיות גדול יותר מ- :value קילו-בתים.',
        'numeric' => 'על ה :attribute להיות גדול יותר מ- :value.',
        'string'  => 'על ה :attribute להיות גדול יותר מ- :value תווים.',
    ],
    'gte'                  => [
        'array'   => 'ה :attribute חייב לכלול :value פריטים או יותר.',
        'file'    => 'על ה :attribute להיות גדול יותר או שווה ל- :value קילו-בתים.',
        'numeric' => 'על ה :attribute להיות גדול יותר או שווה ל- :value.',
        'string'  => 'על ה :attribute להיות גדול יותר או שווה ל- :value תווים.',
    ],
    'image'                => 'השדה :attribute חייב להיות תמונה.',
    'in'                   => 'בחירת ה:attribute אינה תקפה.',
    'in_array'             => 'השדה :attribute לא קיים ב:other.',
    'integer'              => 'השדה :attribute חייב להיות מספר שלם.',
    'ip'                   => 'השדה :attribute חייב להיות כתובת IP תקנית.',
    'ipv4'                 => 'השדה :attribute חייב להיות כתובת IPv4 תקנית.',
    'ipv6'                 => 'השדה :attribute חייב להיות כתובת IPv6 תקנית.',
    'json'                 => 'השדה :attribute חייב להיות מחרוזת JSON תקנית.',
    'lt'                   => [
        'array'   => 'על ה :attribute לכלול פחות מ- :value פריטים.',
        'file'    => 'על ה :attribute להיות קטן יותר מ- :value קילו-בתים.',
        'numeric' => 'על ה :attribute להיות נמוך יותר מ- :value.',
        'string'  => 'על ה :attribute להכיל פחות מ- :value תווים.',
    ],
    'lte'                  => [
        'array'   => 'ה :attribute לא יכול לכלול יותר מאשר :value פריטים.',
        'file'    => 'על ה :attribute להיות קטן יותר או שווה ל- :value קילו-בתים.',
        'numeric' => 'על ה :attribute להיות נמוך או שווה ל- :value.',
        'string'  => 'על ה :attribute להכיל :value תווים או פחות.',
    ],
    'mac_address'          => 'The :attribute must be a valid MAC address.',
    'max'                  => [
        'array'   => 'השדה :attribute לא יכול להכיל יותר מ-:max פריטים.',
        'file'    => 'השדה :attribute לא יכול להיות גדול מ-:max קילובייטים.',
        'numeric' => 'השדה :attribute אינו יכול להיות גדול מ-:max.',
        'string'  => 'השדה :attribute לא יכול להיות גדול מ-:max תווים.',
    ],
    'mimes'                => 'השדה :attribute צריך להיות קובץ מסוג: :values.',
    'mimetypes'            => 'השדה :attribute צריך להיות קובץ מסוג: :values.',
    'min'                  => [
        'array'   => 'השדה :attribute חייב להיות לפחות :min פריטים.',
        'file'    => 'השדה :attribute חייב להיות לפחות :min קילובייטים.',
        'numeric' => 'השדה :attribute חייב להיות לפחות :min.',
        'string'  => 'השדה :attribute חייב להיות לפחות :min תווים.',
    ],
    'multiple_of'          => ':attribute חייב להיות מרובה של :value',
    'not_in'               => 'בחירת ה:attribute אינה תקפה.',
    'not_regex'            => 'הפורמט של :attribute איננו חוקי.',
    'numeric'              => 'השדה :attribute חייב להיות מספר.',
    'password'             => 'הסיסמה שגויה.',
    'present'              => 'השדה :attribute חייב להיות קיים.',
    'prohibited'           => 'השדה :attribute אסור.',
    'prohibited_if'        => 'השדה :attribute אסור כאשר :other הוא :value.',
    'prohibited_unless'    => 'השדה :attribute אסור אלא אם כן :other הוא :values.',
    'prohibits'            => 'The :attribute field prohibits :other from being present.',
    'regex'                => 'השדה :attribute בעל פורמט שאינו תקין.',
    'required'             => 'השדה :attribute הוא חובה.',
    'required_array_keys'  => 'The :attribute field must contain entries for: :values.',
    'required_if'          => 'השדה :attribute נחוץ כאשר :other הוא :value.',
    'required_unless'      => 'השדה :attribute נחוץ אלא אם כן :other הוא בין :values.',
    'required_with'        => 'השדה :attribute נחוץ כאשר :values נמצא.',
    'required_with_all'    => 'השדה :attribute נחוץ כאשר :values נמצא.',
    'required_without'     => 'השדה :attribute נחוץ כאשר :values לא בנמצא.',
    'required_without_all' => 'השדה :attribute נחוץ כאשר אף אחד מ-:values נמצאים.',
    'same'                 => 'השדה :attribute ו-:other חייבים להיות זהים.',
    'size'                 => [
        'array'   => 'השדה :attribute חייב להכיל :size פריטים.',
        'file'    => 'השדה :attribute חייב להיות :size קילובייטים.',
        'numeric' => 'השדה :attribute חייב להיות :size.',
        'string'  => 'השדה :attribute חייב להיות :size תווים.',
    ],
    'starts_with'          => 'ה :attribute חייב להתחיל עם אחד מהבאים: :values',
    'string'               => 'השדה :attribute חייב להיות מחרוזת.',
    'timezone'             => 'השדה :attribute חייב להיות איזור תקני.',
    'unique'               => 'השדה :attribute כבר תפוס.',
    'uploaded'             => 'השדה :attribute ארעה שגיאה בעת ההעלאה.',
    'url'                  => 'השדה :attribute בעל פורמט שאינו תקין.',
    'uuid'                 => 'ה :attribute חייב להיות מזהה ייחודי אוניברסלי (UUID) חוקי.',
    'custom'               => [
        'attribute-name' => [
            'rule-name' => 'הודעה מותאמת',
        ],
    ],
];