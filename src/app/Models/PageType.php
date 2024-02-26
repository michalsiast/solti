<?php

namespace App\Models;

use App\Helpers\Enum;
use ReflectionClass;

abstract class PageType extends Enum
{
    /*
     * examples:
     * #1: controller_moduleCategory.action
     * #2: controller.action
     *
     * action = view
    */

    const INDEX_SHOW = [
        'name' => 'index.show',
        'module' => false,
        'fields' => [
            'rotator' => ['rotator', 'Slider'],
            'services_and_solutions_icon_1' => ['head', '1 Ikonka - Usługi i rozwiązania (klasa ikonki z https://fontawesome.com/v5/search)'],
            'services_and_solutions_heading_1' => ['head', '1 Nagłówek - Usługi i rozwiązania'],
            'services_and_solutions_description_1' => ['text', '1 Opis - Usługi i rozwiązania'],
            'services_and_solutions_link_1' => ['head', '1 Link - Usługi i rozwiązania'],
            'services_and_solutions_icon_2' => ['head', '2 Ikonka - Usługi i rozwiązania (klasa ikonki z https://fontawesome.com/v5/search)'],
            'services_and_solutions_heading_2' => ['head', '2 Nagłówek - Usługi i rozwiązania'],
            'services_and_solutions_description_2' => ['text', '2 Opis - Usługi i rozwiązania'],
            'services_and_solutions_link_2' => ['head', '2 Link - Usługi i rozwiązania'],
            'services_and_solutions_icon_3' => ['head', '3 Ikonka - Usługi i rozwiązania (klasa ikonki z https://fontawesome.com/v5/search)'],
            'services_and_solutions_heading_3' => ['head', '3 Nagłówek - Usługi i rozwiązania'],
            'services_and_solutions_description_3' => ['text', '3 Opis - Usługi i rozwiązania'],
            'services_and_solutions_link_3' => ['head', '3 Link - Usługi i rozwiązania'],

            'about_us_heading' => ['head', 'Nagłówek - O nas'],
            'about_us_description' => ['text', 'Opis - O nas'],
            'about_us_icon_1' => ['head', '1 Ikonka - O nas (klasa ikonki z https://fontawesome.com/v5/search)'],
            'about_us_heading_1' => ['head', '1 Nagłówek - O nas'],
            'about_us_description_1' => ['text', '1 Opis - O nas'],
            'about_us_icon_2' => ['head', '2 Ikonka - O nas (klasa ikonki z https://fontawesome.com/v5/search)'],
            'about_us_heading_2' => ['head', '2 Nagłówek - O nas'],
            'about_us_description_2' => ['text', '2 Opis - O nas'],

            'counter_icon_1' => ['head', '1 Ikonka - Liczniki (klasa ikonki z https://fontawesome.com/v5/search)'],
            'counter_number_1' => ['head', '1 Liczba - Liczniki'],
            'counter_heading_1' => ['head', '1 Nagłówek - Liczniki'],
            'counter_icon_2' => ['head', '2 Ikonka - Liczniki (klasa ikonki z https://fontawesome.com/v5/search)'],
            'counter_number_2' => ['head', '2 Liczba - Liczniki'],
            'counter_heading_2' => ['head', '2 Nagłówek - Liczniki'],
            'counter_icon_3' => ['head', '3 Ikonka - Liczniki (klasa ikonki z https://fontawesome.com/v5/search)'],
            'counter_number_3' => ['head', '3 Liczba - Liczniki'],
            'counter_heading_3' => ['head', '3 Nagłówek - Liczniki'],

            'pillars_our_excellence_icon_1' => ['head', '1 Ikonka - Filary naszej doskonałości'],
            'pillars_our_excellence_heading_1' => ['head', '1 Nagłówek - Filary naszej doskonałości'],
            'pillars_our_excellence_description_1' => ['text', '1 Opis - Filary naszej doskonałości'],
            'pillars_our_excellence_icon_2' => ['head', '2 Ikonka - Filary naszej doskonałości'],
            'pillars_our_excellence_heading_2' => ['head', '2 Nagłówek - Filary naszej doskonałości'],
            'pillars_our_excellence_description_2' => ['text', '2 Opis - Filary naszej doskonałości'],
            'pillars_our_excellence_icon_3' => ['head', '3 Ikonka - Filary naszej doskonałości'],
            'pillars_our_excellence_heading_3' => ['head', '3 Nagłówek - Filary naszej doskonałości'],
            'pillars_our_excellence_description_3' => ['text', '3 Opis - Filary naszej doskonałości'],
            'pillars_our_excellence_icon_4' => ['head', '4 Ikonka - Filary naszej doskonałości'],
            'pillars_our_excellence_heading_4' => ['head', '4 Nagłówek - Filary naszej doskonałości'],
            'pillars_our_excellence_description_4' => ['text', '4 Opis - Filary naszej doskonałości'],

            'cooperate_section_heading' => ['head', 'Nagłówek - Współpraca'],
        ]
    ];
    const PAGE_SHOW = [
        'name' => 'page.show',
        'module' => false,
        'fields' => [
            'text1' => ['text', 'Text na stronie głównej']
        ]
    ];
    const GALLERY_SHOW = [
        'name' => 'gallery.show',
        'module' => false,
        'fields' => [
//            'text1' => ['text', 'Text na stronie głównej']
        ]
    ];
    const ABOUT_US_SHOW = [
        'name' => 'about-us.show',
        'module' => false,
        'fields' => [
            'about_us_heading' => ['text', 'Opis - O nas']
        ]
    ];
    const CONTACT_SHOW = [
        'name' => 'contact.show',
        'module' => false,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const ARTICLE_INDEX = [
        'name' => 'article.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', 'Text na stronie głównej']
        ]
    ];
    const ARTICLE_CATEGORY_INDEX = [
        'name' => 'article_category.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const OFFER_INDEX = [
        'name' => 'offer.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const OFFER_CATEGORY_INDEX = [
        'name' => 'offer_category.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const REALIZATION_INDEX = [
        'name' => 'realization.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const REALIZATION_CATEGORY_INDEX = [
        'name' => 'realization_category.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];


    static function getNames() : array {
        $class = new ReflectionClass(get_called_class());
        $types = array_values($class->getConstants());
        $names = [];
        foreach ($types as $type) {
            $names[] = $type['name'];
        }
        return $names;
    }

    static function getByName($name) : array {
        $class = new ReflectionClass(get_called_class());
        $types = array_values($class->getConstants());
        foreach ($types as $type) {
            if($type['name'] == $name)
                return $type;
        }
//        return $names;
    }
}
