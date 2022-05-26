<?php

include './vendor/eftec/bladeone/lib/BladeOne.php';

use eftec\bladeone\BladeOne;

$views = __DIR__ . '/views';
$cache = __DIR__ . '/cache';
$blade = new BladeOne($views,$cache,BladeOne::MODE_AUTO);

$services = [
    'Manicure' => [
        'manicure', 
        "The best ways to take care of your hand nails. You'll experience the best spa quality using the products in your treatment-of-choice.",
        'Menu' => [
            'Regular Manicure'  => [20, 'Quick soak, cuticle push. Arm massage and polish of choice.'],
            'Deluxe Manicure'   => [30, 'Quick soak, cuticle push, paraffin wax and arm massage. Polish of choice.'],
            'Gel Manicure'      => [35, 'Quick soak, cuticle push, arm massage and polish of choice.'],
            'SNS Dipping Powder'=> [45, 'Calcium treatment for weakened damaged nails, for whom is tired of acrylic and gels not working for them. (Price does not include manicure etc.)']
        ]
    ],

    'Pedicure' => [
        'pedicure', 
        "Treat your feet the relaxation it deserves. Make sure to have your toenails polished and beautified by the services we can offer you.",
        'Menu' => [
            'Classic Pedicure' => [28, '(Around 5 mins) Warm feet soak, nails shaping and cuticle push. Massage with hot stone, towel and lotion.'],
            'Deluxe Pedicure'  => [40, '(Around 10 mins) Warm feet soak, nails shaping and cuticle push. Medium massage with organic pedicure packet. Hot stone and towel.'],
            'Premium Pedicure' => [55, '(Around 15 mins) Warm feet soak, nails shaping, cuticle push and callus removal. Semi-long massage with organic pedicure packet. Paraffin wax, hot stone and towel.'],
            'Luxury Pedicure'  => [70, '(Around 20 mins) Warm feet soak, nails shaping, cuticle push and callus removal. Long massage with 6-step volcano spa pedicure. Paraffin wax, hot stone and towel.']
        ]
    ],

    'Acrylic Nails' => [
        'acrylic-nails', 
        "Let us make your nails more presentable and amazing with these available services. You deserve to be happy and have your nails done.",
        'Menu' => [
            'Gel Polish Change' => ['50+', '40+'],
            'Regular'           => ['40+', '30+'],
            'White/Pearl Tip'   => [45, ''],
            'Pink & White'      => [55, 45],
            'Color Powder'      => [50, '45+'],
            'Pink & White Ombre'=> ['60+', '50+'],
            'Gel Liquid with Gel Polish'    => ['60+', '45+'],
            'Toe Nail'          => ['50+', ''],
            'SNS Dipping Powder'=> ['55+', '45+']
        ]
    ],

    'Waxing' => [
        'waxing', 
        "Give yourself a relaxing removal of unwanted hairs on your body. You have to be flawlessly beautiful at all times and our service will provide it.",
        'Menu' => [
            'Eyebrow'       => [13, ''],
            'Upper Lip'     => [8, ''],
            'Forehead'      => [11, ''],
            'Chin'          => [12, ''],
            'Cheeks'        => [15, ''],
            'Under Arms'    => [22, ''],
            'Full Face'     => ['50+', ''],
            'Half Arms'     => ['40+', ''],
            'Full Arms'     => ['55+', ''],
            'Half Legs'     => ['40+', ''],
            'Chest'         => ['50+', ''],
            'Back'          => ['60+', ''],
            'Bikini'        => ['45+', ''],
            'Brazilian'     => ['65+', '']
        ]
    ],

    'Children Services' => [
        'children-services',
        "As we provide you the best service possible, let us take care of your kids' needs for their nails too.",
        'Menu' => [
            'Manicure'      => [16, ''],
            'Pedicure'      => [25, ''],
            'Polish Only'   => [10, ''],
            'Gel Manicure'  => [25, ''],
            'Gel Pedicure'  => [37, '']
        ]
    ],

    'Permanent Make-up' => [
        'permanent-make-up',
        "Let us help you achieve the permanent beauty you truly deserve! With these services, you won't be needing to retrace those eyebrows again.",
        'Menu' => [
            'Eyebrow Shading'               => [250, ''],
            'Eyebrow Ombre + Microblading'  => [350, ''],
            'Eyebrow Microblading'          => [450, ''],
            'Eyebrow Correction + Shading'  => [550, ''],
            'Eyeliners (Up or Down)'        => [300, ''],
            'Lip'                           => [450, '']
        ]
    ],

    'Eyelash Extensions' => [
        'eyelash-extensions', 
        "We will provide you the extensions needed for your eyelashes. Give those eyes more life than ever!",
        'Menu' => [
            'Classic Eyelashes'             => 110,
            
            'Volume Eyelash'                => [
                'Full Set' => '135+',
                '$135+ Fill In - 2 Weeks' => '57+',
                '$57+ Fill In - 3 Weeks' => '67+',
                '$67+ Fill In - 4 Weeks' => '77+',
                '$77+ Fill In - 5 Weeks' => 'Start Full Set'
            ],
            'Mega Volume Eyelash'           => [
                'Full Set' => '185',
                'Fill In - 2 Weeks' => '85+',
                'Fill In - 3 Weeks' => '95+',
                'Fill In - 4 Weeks' => '105+',
                'Fill In - 5 Weeks' => 'Start Full Set'
            ],

            'Eyelash Cluster (No Refill)'   => '45+'
        ]
    ],

    'Tinting' => [
        'tinting',
        "We provide high-quality services for tinting your eyebrows and eyelashes.",
        'Menu' => [
            'Eyebrow'       => [15, ''],
            'Eyelash'       => [20, '']
        ]
    ],

    'Additional Services' => [
        'additional-services',
        "Other services that will suffice your needs and experience extra care and service.",
        'Menu' => [
            'Polish Change Hand'    => [12, ''],
            'Polish Change Feet'    => [14, ''],
            'Gel Polish Change'     => [27, ''],
            'French Extra'          => [8, ''],
            'Callus Remover'        => [8, ''],
            'Hot Paraffin Hand or Feet'        => [10, ''],
            'Nail Design'                      => ['8+', ''],
            'Chrome Nail Add'                  => [15, ''],
            'Cat Eyes'                         => [12, ''],
            'Acrylic Nail Soak Off Only'       => [15, ''],
            'Gel Soak Off Only'                => [10, ''],
            'Take Off with Redone'             => [7, ''],
            'Nail Repair'                      => ['4+', ''],
            'Long Nails'                       => ['5+', ''],
            'Stiletto or Coffin Shape'         => ['5+', '']
        ]
    ]
];

$gallery_images = glob('resources/img/gallery/'.'*.*');

echo $blade->run('index', ['services' => $services, 'images' => $gallery_images]);

?>