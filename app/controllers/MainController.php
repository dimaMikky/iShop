<?php

namespace app\controllers;

use ishop\Cache;

class MainController extends AppController{

    public function indexAction() {

        /** Устанавливаем мета-данные */
        $this->setMeta('Main Page', 'description...', 'keywords...');

        /**  Получаем желаемые бренды товаров из бд */
        $brands = \R::find('brand', 'LIMIT 3');

        /** Получаем популярные товары из бд */
        $hits = \R::find('product', "hit = '1' AND status = '1' LIMIT 8");
       
        /** Выводим информацию на главную страницу */
        $this->set(compact('brands', 'hits'));

    }

}
