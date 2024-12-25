<?php

return [

    'invoice_number'        => 'Број на Фактура',
    'invoice_date'          => 'Датум на Фактура',
    'invoice_amount'        => 'Износ на фактура',
    'total_price'           => 'Вкупна цена',
    'due_date'              => 'Доспева на',
    'order_number'          => 'Број на нарачка',
    'bill_to'               => 'Фактурирај на',
    'cancel_date'           => 'Датум на Сторнирање',

    'quantity'              => 'Количина',
    'price'                 => 'Цена',
    'sub_total'             => 'Меѓузбир',
    'discount'              => 'Попуст',
    'item_discount'         => 'Попуст на линија',
    'tax_total'             => 'Вкупно данок',
    'total'                 => 'Вкупно',

    'item_name'             => 'Име на ставка|Име на ставките',
    'recurring_invoices'    => 'Повторувачка фактура|Повторувачки фактури',

    'show_discount'         => ':discount% Попуст',
    'add_discount'          => 'Додади попуст',
    'discount_desc'         => 'од меѓузбир',

    'payment_due'           => 'Доспева за плаќање',
    'paid'                  => 'Платено',
    'histories'             => 'Историја',
    'payments'              => 'Плаќања',
    'add_payment'           => 'Додади плаќање',
    'mark_paid'             => 'Означи платено',
    'mark_sent'             => 'Означи испратено',
    'mark_viewed'           => 'Означи како Видено',
    'mark_cancelled'        => 'Означи како Сторнирано',
    'download_pdf'          => 'Превземи PDF',
    'send_mail'             => 'Прати е-маил',
    'all_invoices'          => 'Најавете се за да ги видите сите фактури',
    'create_invoice'        => 'Нова Фактура',
    'send_invoice'          => 'Прати ја Фактурата',
    'get_paid'              => 'Наплати',
    'accept_payments'       => 'Прифатете плаќање преку Интернет',
    'payment_received'      => 'Примено Плаќње',

    'form_description' => [
        'billing'           => 'Деталите за наплата се појавуваат во вашата фактура. Датумот на фактурата се користи во контролната табла и извештаите. Изберете го датумот на кој очекувате да ви биде платено како датум на доспевање.',
    ],

    'messages' => [
        'email_required'    => 'Не постои адреса на  е-пошта за овој клиент!',
        'draft'             => 'Ова е <b>НАЦРТ</b> фактура и ќе се рефлектира на графиконите откако ќе биде испратена.',

        'status' => [
            'created'       => 'Создадена на :date',
            'viewed'        => 'Прегледано',
            'send' => [
                'draft'     => 'Не е испратена',
                'sent'      => 'Испратена на :date',
            ],
            'paid' => [
                'await'     => 'Чекам на плаќање',
            ],
        ],
    ],

    'slider' => [
        'create'            => ':user ја создаде оваа фактура на :date',
        'create_recurring'  => ':user го создаде овој повторувачки шаблон на :date',
        'schedule'          => 'Повторувај  секој :interval :frequency од :date',
        'children'          => ':count фактури беа создадени автоматски',
    ],

    'share' => [
        'show_link'         => 'Вашиот клиент може да ја види фактурата на овој линк',
        'copy_link'         => 'Копирајте го линкот и споделете го со вашиот клиент.',
        'success_message'   => 'Копиран линк за споделување',
    ],

    'sticky' => [
        'description'       => 'Прегледувате како вашиот клиент ќе ја види веб-верзијата на вашата фактура.',
    ],

];