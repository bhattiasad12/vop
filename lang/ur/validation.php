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

    'accepted' => ':attribute فیلڈ کو قبول کرنا ضروری ہے۔',
    'accepted_if' => ':attribute فیلڈ کو قبول کرنا ضروری ہے جب :other:value ہو۔',
    'active_url' => ':attribute فیلڈ ایک درست URL ہونا چاہیے۔',
    'after' => ':attribute فیلڈ:date کے بعد کی تاریخ ہونی چاہیے۔',
    'after_or_equal' => ':attribute فیلڈ کو :date کے بعد یا اس کے برابر تاریخ ہونی چاہیے۔',
    'alpha' => ':attribute فیلڈ میں صرف حروف ہونا چاہیے۔',
    'alpha_dash' => ':attribute فیلڈ میں صرف حروف، اعداد، ڈیشز اور انڈر سکور ہونا چاہیے۔',
    'alpha_num' => ':attribute فیلڈ میں صرف حروف اور اعداد ہونے چاہئیں۔',
    'array' => ':attribute فیلڈ ایک صف ہونی چاہیے۔',
    'ascii' => ':attribute فیلڈ میں صرف سنگل بائٹ حروف اور علامتیں ہونی چاہئیں۔',
    'before' => ':attribute فیلڈ:date سے پہلے کی تاریخ ہونی چاہیے۔',
    'before_or_equal' => ':attribute فیلڈ کو :date سے پہلے یا اس کے برابر تاریخ ہونی چاہیے۔',
    'کے درمیان' => [
        'array' => ':attribute فیلڈ میں :min اور :max آئٹمز کے درمیان ہونا چاہیے۔',
        'file' => ':attribute فیلڈ :min اور :max kilobytes کے درمیان ہونی چاہیے۔',
        'numeric' => ':attribute فیلڈ کو :min اور :max کے درمیان ہونا چاہیے۔',
        'string' => ':attribute فیلڈ کو :min اور :max حروف کے درمیان ہونا چاہیے۔',
    ],
    'boolean' => ':attribute فیلڈ صحیح یا غلط ہونا چاہیے۔',
    'can' => ':attribute فیلڈ میں ایک غیر مجاز قدر ہے۔',
    'confirmed' => ':attribute فیلڈ کی تصدیق مماثل نہیں ہے۔',
    'contains' => ':attribute فیلڈ میں مطلوبہ قدر موجود نہیں ہے۔',
    'current_password' => 'پاس ورڈ غلط ہے۔',
    'date' => ':attribute فیلڈ ایک درست تاریخ ہونی چاہیے۔',
    'date_equals' => ':attribute فیلڈ کو تاریخ کے برابر ہونا چاہیے:date۔',
    'date_format' => ':attribute فیلڈ کو فارمیٹ :format سے مماثل ہونا چاہیے۔',
    'decimal' => ':attribute فیلڈ میں: decimal decimal جگہیں ہونی چاہئیں۔',
    'declined' => ':attribute فیلڈ کو مسترد کیا جانا چاہیے۔',
    'declined_if' => ':attribute فیلڈ کو رد کرنا چاہیے جب :other ہے :value۔',
    'different' => ':attribute فیلڈ اور :other مختلف ہونا چاہیے۔',
    'digits' => ':attribute فیلڈ کو :digits digits ہونا چاہیے۔',
    'digits_between' => ':attribute فیلڈ کو :min اور :max ہندسوں کے درمیان ہونا چاہیے۔',
    'dimensions' => ':attribute فیلڈ میں تصویری جہتیں غلط ہیں۔',
    'distinct' => ':attribute فیلڈ میں ڈپلیکیٹ ویلیو ہے۔',
    'doesnt_end_with' => ':attribute فیلڈ کو درج ذیل میں سے کسی ایک کے ساتھ ختم نہیں ہونا چاہیے: :values.',
    'doesnt_start_with' => ':attribute فیلڈ کو درج ذیل میں سے کسی ایک سے شروع نہیں ہونا چاہیے: :values.',
    'email' => ':attribute فیلڈ ایک درست ای میل پتہ ہونا چاہیے۔',
    'ends_with' => ':attribute فیلڈ کو درج ذیل میں سے کسی ایک کے ساتھ ختم ہونا چاہیے: :values۔',
    'enum' => 'منتخب : وصف غلط ہے۔',
    'exists' => 'منتخب : وصف غلط ہے۔',
    'extensions' => ':attribute فیلڈ میں درج ذیل میں سے ایک ایکسٹینشن ہونی چاہیے: :values۔',
    'file' => ':attribute فیلڈ ایک فائل ہونی چاہیے۔',
    'filled' => ':attribute فیلڈ کی ایک قدر ہونی چاہیے۔',
    'gt' => [
        'array' => ':attribute فیلڈ میں :value آئٹمز سے زیادہ ہونا ضروری ہے۔',
        'file' => ':attribute فیلڈ کو :value kilobytes سے بڑا ہونا چاہیے۔',
        'numeric' => ':attribute فیلڈ کو :value سے بڑا ہونا چاہیے۔',
        'string' => ':attribute فیلڈ کو :value حروف سے بڑا ہونا چاہیے۔',
    ],
    'gte' => [
        'array' => ':attribute فیلڈ میں :value آئٹمز یا زیادہ ہونا چاہیے۔',
        'file' => ':attribute فیلڈ کو :value kilobytes سے بڑا یا اس کے برابر ہونا چاہیے۔',
        'numeric' => ':attribute فیلڈ کو :value سے بڑا یا اس کے برابر ہونا چاہیے۔',
        'string' => ':attribute فیلڈ کو :value کریکٹرز سے بڑا یا اس کے برابر ہونا چاہیے۔',
    ],
    'hex_color' => ':attribute فیلڈ ایک درست ہیکساڈیسیمل رنگ ہونا چاہیے۔',
    'image' => ':attribute فیلڈ ایک تصویر ہونی چاہیے۔',
    'in' => 'منتخب : وصف غلط ہے۔',
    'in_array' => ':attribute فیلڈ کو :other میں موجود ہونا چاہیے۔',
    'integer' => ':attribute فیلڈ کو ایک عدد عدد ہونا چاہیے۔',
    'ip' => ':attribute فیلڈ ایک درست IP پتہ ہونا چاہیے۔',
    'ipv4' => ':attribute فیلڈ ایک درست IPv4 پتہ ہونا چاہیے۔',
    'ipv6' => ':attribute فیلڈ ایک درست IPv6 پتہ ہونا چاہیے۔',
    'json' => ':attribute فیلڈ ایک درست JSON سٹرنگ ہونی چاہیے۔',
    'list' => ':attribute فیلڈ ایک فہرست ہونی چاہیے۔',
    'lowercase' => ':attribute فیلڈ کو چھوٹا ہونا چاہیے۔',
    'lt' => [
        'array' => ':attribute فیلڈ میں :value آئٹمز سے کم ہونا ضروری ہے۔',
        'file' => ':attribute فیلڈ کو :value kilobytes سے کم ہونا چاہیے۔',
        'numeric' => ':attribute فیلڈ کو :value سے کم ہونا چاہیے۔',
        'string' => ':attribute فیلڈ کو :value حروف سے کم ہونا چاہیے۔',
    ],
    'lte' => [
        'array' => ':attribute فیلڈ میں :value آئٹمز سے زیادہ نہیں ہونا چاہیے۔',
        'file' => ':attribute فیلڈ کو :value kilobytes سے کم یا اس کے برابر ہونا چاہیے۔',
        'numeric' => ':attribute فیلڈ کو :value سے کم یا اس کے برابر ہونا چاہیے۔',
        'string' => ':attribute فیلڈ کو :value حروف سے کم یا برابر ہونا چاہیے۔',
    ],
    'mac_address' => ':attribute فیلڈ ایک درست MAC ایڈریس ہونا چاہیے۔',
    'max' => [
        'array' => ':attribute فیلڈ میں :max سے زیادہ اشیاء نہیں ہونی چاہئیں۔',
        'file' => ':attribute فیلڈ کو :max kilobytes سے زیادہ نہیں ہونا چاہیے۔',
        'numeric' => ':attribute فیلڈ کو :max سے زیادہ نہیں ہونا چاہیے۔',
        'string' => ':attribute فیلڈ کو :max حروف سے زیادہ نہیں ہونا چاہیے۔',
    ],
    'max_digits' => ':attribute فیلڈ میں :max ہندسوں سے زیادہ نہیں ہونا چاہیے۔',
    'mimes' => ':attribute فیلڈ ٹائپ: :values ​​کی فائل ہونی چاہیے۔',
    'mimetypes' => ':attribute فیلڈ ٹائپ: :values ​​کی فائل ہونی چاہیے۔',
    'منٹ' => [
        'array' => ':attribute فیلڈ میں کم از کم :min اشیاء ضرور ہونی چاہئیں۔',
        'file' => ':attribute فیلڈ کم از کم :min kilobytes کا ہونا چاہیے۔',
        'numeric' => ':attribute فیلڈ کم از کم:min ہونی چاہیے۔',
        'string' => ':attribute فیلڈ کم از کم :min حروف کا ہونا چاہیے۔',
    ],
    'min_digits' => ':attribute فیلڈ میں کم از کم :min ہندسوں کا ہونا ضروری ہے۔',
    'missing' => ':attribute فیلڈ غائب ہونا چاہیے۔',
    'missing_if' => ':attribute فیلڈ غائب ہونا چاہیے جب :other ہے :value',
    'missing_unless' => ':attribute فیلڈ کو غائب ہونا چاہیے جب تک کہ :other:value نہ ہو۔',
    'missing_with' => ':values ​​موجود ہونے پر :attribute فیلڈ غائب ہونا چاہیے۔',
    'missing_with_all' => ':values ​​موجود ہونے پر :attribute فیلڈ غائب ہونا چاہیے۔',
    'multiple_of' => ':attribute فیلڈ کو :value کا ضرب ہونا چاہیے۔',
    'not_in' => 'منتخب : وصف غلط ہے۔',
    'not_regex' => ':attribute فیلڈ فارمیٹ غلط ہے۔',
    'numeric' => ':attribute فیلڈ کا نمبر ہونا چاہیے۔',
    'password' => [
        'letters' => ':attribute فیلڈ میں کم از کم ایک حرف ہونا چاہیے۔',
        'mixed' => ':attribute فیلڈ میں کم از کم ایک بڑے اور ایک چھوٹے حرف کا ہونا ضروری ہے۔',
        'numbers' => ':attribute فیلڈ میں کم از کم ایک نمبر ہونا چاہیے۔',
        'symbols' => ':attribute فیلڈ میں کم از کم ایک علامت ہونی چاہیے۔',
        'uncompromised' => 'دی گئی :attribute ڈیٹا لیک میں ظاہر ہوئی ہے۔ براہ کرم ایک مختلف منتخب کریں :attribute.',
    ],
    'present' => ':attribute فیلڈ کا موجود ہونا ضروری ہے۔',
    'present_if' => ':attribute فیلڈ کا موجود ہونا ضروری ہے جب :other:value ہو۔',
    'present_unless' => ':attribute فیلڈ کو موجود ہونا چاہیے جب تک کہ :other:value نہ ہو۔',
    'present_with' => ':values ​​موجود ہونے پر :attribute فیلڈ کا موجود ہونا چاہیے۔',
    'present_with_all' => ':values ​​موجود ہونے پر :attribute فیلڈ کا موجود ہونا ضروری ہے۔',
    'prohibited' => ':attribute فیلڈ ممنوع ہے۔',
    'prohibited_if' => ':attribute فیلڈ ممنوع ہے جب :other ہے :value۔',
    'prohibited_unless' => ':attribute فیلڈ ممنوع ہے جب تک کہ :other:values ​​میں نہ ہو۔',
    'prohibits' => ':attribute فیلڈ :other کو موجود ہونے سے روکتی ہے۔',
    'regex' => ':attribute فیلڈ فارمیٹ غلط ہے۔',
    'required' => ':attribute فیلڈ درکار ہے۔',
    'required_array_keys' => ':attribute فیلڈ میں :values ​​کے لیے اندراجات شامل ہونا چاہیے۔',
    'required_if' => ':attribute فیلڈ کی ضرورت ہوتی ہے جب :other ہے :value۔',
    'required_if_accepted' => ':attribute فیلڈ کی ضرورت ہے جب :other کو قبول کیا جائے۔',
    'required_if_declined' => ':attribute فیلڈ کی ضرورت ہوتی ہے جب :other کو مسترد کیا جاتا ہے۔',
    'required_unless' => ':attribute فیلڈ کی ضرورت ہے جب تک کہ :other:values ​​میں نہ ہو۔',
    'required_with' => ':attribute فیلڈ کی ضرورت ہے جب :values ​​موجود ہو۔',
    'required_with_all' => ':attribute فیلڈ کی ضرورت ہے جب :values ​​موجود ہوں۔',
    'required_without' => ':attribute فیلڈ کی ضرورت ہوتی ہے جب :values ​​موجود نہ ہو۔',
    'required_without_all' => ':attribute فیلڈ کی ضرورت ہوتی ہے جب :values ​​میں سے کوئی بھی موجود نہ ہو۔',
    'same' => ':attribute فیلڈ کا میچ ہونا چاہیے:other۔',
    'سائز' => [
        'array' => ':attribute فیلڈ میں :size آئٹمز ہونا ضروری ہے۔',
        'file' => ':attribute فیلڈ کو :size kilobytes ہونا چاہیے۔',
        'numeric' => ':attribute فیلڈ کو :size ہونا چاہیے۔',
        'string' => ':attribute فیلڈ کو :size حروف کا ہونا چاہیے۔',
    ],
    'starts_with' => ':attribute فیلڈ کو درج ذیل میں سے کسی ایک سے شروع ہونا چاہیے: :values۔',
    'string' => ':attribute فیلڈ ایک سٹرنگ ہونی چاہیے۔',
    'timezone' => ':attribute فیلڈ ایک درست ٹائم زون ہونا چاہیے۔',
    'unique' => ':attribute پہلے ہی لیا جا چکا ہے۔',
    'uploaded' => ':attribute اپ لوڈ کرنے میں ناکام۔',
    'uppercase' => ':attribute فیلڈ کو بڑا ہونا چاہیے۔',
    'url' => ':attribute فیلڈ ایک درست URL ہونا چاہیے۔',
    'ulid' => ':attribute فیلڈ کو ایک درست ULID ہونا چاہیے۔',
    'uuid' => ':attribute فیلڈ ایک درست UUID ہونا چاہیے۔',

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
            'rule-name' => 'اپنی مرضی کا پیغام',
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
