<?php
add_theme_support('post-thumbnails');
add_theme_support('custom-header');

add_filter('post_thumbnail_html', 'remove_width_attribute', 10);
add_filter('image_send_to_editor', 'remove_width_attribute', 10);


function true_customizer_init($wp_customize)
{

    $true_transport = 'postMessage'; // описание этой переменной чуть ниже

    // Добавляем собственную секцию настроек
    $wp_customize->add_section(
        'true_display_options', // id секции, должен прописываться во всех настройках, которые в неё попадают
        array(
            'title' => 'Контакты',
            'priority' => 200, // приоритет расположения относительно других секций
            'description' => 'Настройка контактов' // описание не обязательное
        )
    );

    // Текст копирайта в футере
    $wp_customize->add_setting(
        'true_footer_copyright_address', // id
        array(
            'default' => '', // текст по умолчанию
            'sanitize_callback' => 'true_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
            'transport' => $true_transport
        )
    );
    $wp_customize->add_control(
        'true_footer_copyright_address', // id
        array(
            'section' => 'true_display_options', // id секции
            'label' => 'Адрес',
            'type' => 'text' // текстовое поле
        )
    );
    // Текст копирайта в футере
    $wp_customize->add_setting(
        'true_footer_copyright_tel', // id
        array(
            'default' => '', // текст по умолчанию
            'sanitize_callback' => 'true_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
            'transport' => $true_transport
        )
    );
    $wp_customize->add_control(
        'true_footer_copyright_tel', // id
        array(
            'section' => 'true_display_options', // id секции
            'label' => 'Телефон',
            'type' => 'text' // текстовое поле
        )
    );

    $wp_customize->add_setting(
        'true_footer_copyright_tel_mob', // id
        array(
            'default' => '', // текст по умолчанию
            'sanitize_callback' => 'true_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
            'transport' => $true_transport
        )
    );
    $wp_customize->add_control(
        'true_footer_copyright_tel_mob', // id
        array(
            'section' => 'true_display_options', // id секции
            'label' => 'Мобильный',
            'type' => 'text' // текстовое поле
        )
    );

    // Текст копирайта в футере
    $wp_customize->add_setting(
        'true_footer_copyright_email', // id
        array(
            'default' => '', // текст по умолчанию
            'sanitize_callback' => 'true_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
            'transport' => $true_transport
        )
    );
    $wp_customize->add_control(
        'true_footer_copyright_email', // id
        array(
            'section' => 'true_display_options', // id секции
            'label' => 'Email',
            'type' => 'text' // текстовое поле
        )
    );
    $wp_customize->add_setting(
        'true_footer_copyright_fb', // id
        array(
            'default' => '', // текст по умолчанию
            'sanitize_callback' => 'true_sanitize_copyright', // функция, обрабатывающая значение поля при сохранении
            'transport' => $true_transport
        )
    );
    $wp_customize->add_control(
        'true_footer_copyright_fb', // id
        array(
            'section' => 'true_display_options', // id секции
            'label' => 'Facebook',
            'type' => 'text' // текстовое поле
        )
    );
}

add_action('customize_register', 'true_customizer_init');

function remove_width_attribute($html)
{
    $html = preg_replace('/(width|height)="\d*"\s/', "", $html);
    return $html;
}


register_post_type('slider',
    array(
        'label' => __('Слайдер', CURRENT_THEME),
        'public' => true,
        'show_ui' => true,
        'show_in_nav_menus' => false,
        'menu_position' => 6,
        'menu_icon' => 'dashicons-admin-home',
        'description' => 'Слайдер(рус)',
        'exclude_from_search' => true,

        'rewrite' => array(
            'with_front' => FALSE

        ),
        'supports' => array(
            'title',
            'thumbnail'
        )
    )
);


/*
 * "Хлебные крошки" для WordPress
 * автор: Dimox
 * версия: 2015.09.14
 * лицензия: MIT
*/
function dimox_breadcrumbs()
{
    $text['home'] = 'Главная';
    /* === ОПЦИИ === */
    $text['category'] = '%s'; // текст для страницы рубрики
    $text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
    $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
    $text['author'] = 'Статьи автора %s'; // текст для страницы автора
    $text['404'] = 'Ошибка 404'; // текст для страницы 404
    $text['page'] = 'Страница %s'; // текст 'Страница N'
    $text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'

//    $wrap_before = '<div>'; // открывающий тег обертки
//    $wrap_after = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
    $sep = '/'; // разделитель между "крошками"
    // $sep_before = '<li class="sep">'; // тег перед разделителем
    // $sep_after = '</li>'; // тег после разделителя
    $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
    $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
    $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
    $before = ''; // тег перед текущей "крошкой"
    $after = ''; // тег после текущей "крошки"
    /* === КОНЕЦ ОПЦИЙ === */

    global $post;
    $home_link = home_url('/');
    $link_before = '<a itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="breadcrumbs_item">';
    $link_after = '</a>';
    $link_attr = ' itemprop="url"';
//    $link_in_before = '<span itemprop="title">';
//    $link_in_after = '</span>';
    $link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
    $frontpage_id = get_option('page_on_front');
    $parent_id = $post->post_parent;
    $sep = ' ' . $sep_before . $sep . $sep_after . ' ';

    if (is_home() || is_front_page()) {

        if ($show_on_home) echo $wrap_before . '<a href="' . $home_link . '">' . $text['home'] . '</a>' . $wrap_after;

    } else {

        echo $wrap_before;
        if ($show_home_link) echo sprintf($link, $home_link, $text['home']);

        if (is_category()) {
            $cat = get_category(get_query_var('cat'), false);
            if ($cat->parent != 0) {
                $cats = get_category_parents($cat->parent, TRUE, $sep);
                $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr . '>' . $link_in_before . '$2' . $link_in_after . '</a>' . $link_after, $cats);
                if ($show_home_link) echo $sep;
                echo $cats;
            }
            if (get_query_var('paged')) {
                $cat = $cat->cat_ID;
                echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
            }

        } elseif (is_search()) {
            if (have_posts()) {
                if ($show_home_link && $show_current) echo $sep;
                if ($show_current) echo $before . sprintf($text['search'], get_search_query()) . $after;
            } else {
                if ($show_home_link) echo $sep;
                echo $before . sprintf($text['search'], get_search_query()) . $after;
            }

        } elseif (is_day()) {
            if ($show_home_link) echo $sep;
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
            echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
            if ($show_current) echo $sep . $before . get_the_time('d') . $after;

        } elseif (is_month()) {
            if ($show_home_link) echo $sep;
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
            if ($show_current) echo $sep . $before . get_the_time('F') . $after;

        } elseif (is_year()) {
            if ($show_home_link && $show_current) echo $sep;
            if ($show_current) echo $before . get_the_time('Y') . $after;

        } elseif (is_single() && !is_attachment()) {
            if ($show_home_link) echo $sep;
            if (get_post_type() != 'post') {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                printf($link, $home_link . '/' . $slug['slug'] . '/', $post_type->labels->singular_name);
                if ($show_current) echo $sep . $before . get_the_title() . $after;
            } else {
                $cat = get_the_category();
                $cat = $cat[0];
                $cats = get_category_parents($cat, TRUE, $sep);
                if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr . '>' . $link_in_before . '$2' . $link_in_after . '</a>' . $link_after, $cats);
                echo $cats;
                if (get_query_var('cpage')) {
                    echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
                } else {
                    if ($show_current) echo $before . get_the_title() . $after;
                }
            }

            // custom post type
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $post_type = get_post_type_object(get_post_type());
            if (get_query_var('paged')) {
                echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . $post_type->label . $after;
            }

        } elseif (is_attachment()) {
            if ($show_home_link) echo $sep;
            $parent = get_post($parent_id);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            if ($cat) {
                $cats = get_category_parents($cat, TRUE, $sep);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr . '>' . $link_in_before . '$2' . $link_in_after . '</a>' . $link_after, $cats);
                echo $cats;
            }
            printf($link, get_permalink($parent), $parent->post_title);
            if ($show_current) echo $sep . $before . get_the_title() . $after;

        } elseif (is_page() && !$parent_id) {
            if ($show_current) echo $sep . $before . get_the_title() . $after;

        } elseif (is_page() && $parent_id) {
            if ($show_home_link) echo $sep;
            if ($parent_id != $frontpage_id) {
                $breadcrumbs = array();
                while ($parent_id) {
                    $page = get_page($parent_id);
                    if ($parent_id != $frontpage_id) {
                        $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
                    }
                    $parent_id = $page->post_parent;
                }
                $breadcrumbs = array_reverse($breadcrumbs);
                for ($i = 0; $i < count($breadcrumbs); $i++) {
                    echo $breadcrumbs[$i];
                    if ($i != count($breadcrumbs) - 1) echo $sep;
                }
            }
            if ($show_current) echo $sep . $before . get_the_title() . $after;

        } elseif (is_tag()) {
            if (get_query_var('paged')) {
                $tag_id = get_queried_object_id();
                $tag = get_tag($tag_id);
                echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
            }

        } elseif (is_author()) {
            global $author;
            $author = get_userdata($author);
            if (get_query_var('paged')) {
                if ($show_home_link) echo $sep;
                echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_home_link && $show_current) echo $sep;
                if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
            }

        } elseif (is_404()) {
            if ($show_home_link && $show_current) echo $sep;
            if ($show_current) echo $before . $text['404'] . $after;

        } elseif (has_post_format() && !is_singular()) {
            if ($show_home_link) echo $sep;
            echo get_post_format_string(get_post_format());
        }

        echo $wrap_after;

    }
} // end of dimox_breadcrumbs()


function style_script_load()
{
    wp_enqueue_script('js.js', get_template_directory_uri() . '/js/js.js', array(), false, true);
    wp_enqueue_script('owl.carousel.js', get_template_directory_uri() . '/owl-carousel/owl.carousel.js', array(), false, true);
    wp_enqueue_script('angular.js', get_template_directory_uri() . '/node_modules/angular/angular.js', array(), false, true);
    wp_enqueue_script('app.js', get_template_directory_uri() . '/js/app/app.js', array('angular.js'), false, true);


    wp_enqueue_style('owl.carousel.css', get_template_directory_uri() . '/owl-carousel/owl.carousel.css');
    wp_enqueue_style('owl.theme.css', get_template_directory_uri() . '/owl-carousel/owl.theme.css');
    wp_enqueue_style('style.css', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style('angular-csp.css', get_template_directory_uri() . '/node_modules/angular/angular-csp.css');
}

add_action('wp_enqueue_scripts', 'style_script_load');

function true_customizer_live()
{
    wp_enqueue_script(
        'true-theme-customizer', // название скрипта, указываем что угодно
        get_stylesheet_directory_uri() . '/js/theme-customizer.js', // URL
        array('jquery', 'customize-preview'), // зависимости от других скриптов
        null, // версия, ну её
        true // подключить в футере
    );
}

add_action('customize_preview_init', 'true_customizer_live');

register_nav_menu('menu', 'Меню');

function my_extra_fields_content($page)
{
    // URL-ы загруженных изображений будем сохранять в мета-полях
    $background = get_post_meta($page->ID, 'post_background', 1);
    $preview = get_post_meta($page->ID, 'post_preview', 1);
    $icon = get_post_meta($page->ID, 'post_icon', 1);

    ?>
    <label for="post_background">
        <h4>Фон записи</h4>
        <input id="post_background" type="text" size="45" name="post_background" value="<?php echo $background; ?>"/>
        <input id="post_background_button" type="button" class="button" value="Загрузить"/>
        <br/>
        <small>Вставьте URL изображения для фона записи или загрузите его</small>
    </label>
    <label for="post_preview">
        <h4>Превью записи</h4>
        <input id="post_preview" type="text" size="45" name="post_preview" value="<?php echo $preview; ?>"/>
        <input id="post_preview_button" type="button" class="button" value="Загрузить"/>
        <br/>
        <small>Вставьте URL изображения для превью записи или загрузите его</small>
    </label>
    <label for="post_icon">
        <h4>Иконка для меню</h4>
        <input id="post_icon" type="text" size="45" name="post_icon" value="<?php echo $icon; ?>"/>
        <input id="post_icon_button" type="button" class="button" value="Загрузить"/>
        <br/>
        <small>Вставьте URL изображения иконки меню или загрузите его</small>
    </label>
    <!-- Создаем проверочное поле для проверки того, что данные пришли с нашей формы -->
    <input type="hidden" name="extra_field_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>"/>
    <?php
}

// Добавляем мета-блок с нашей формой на странице редактирования записи
function my_add_extra_fields()
{
    add_meta_box('extra_fields', 'Характерные изображения', 'my_extra_fields_content', 'page', 'normal', 'high');
}

// Запускаем вышенаписанный код в действие
if (is_admin())
    add_action('admin_init', 'my_add_extra_fields', 1);

function my_add_upload_scripts()
{
    wp_enqueue_script('media-upload');
    wp_enqueue_script('thickbox');
    wp_register_script(
        'my-upload-script'
        /* Подключаем JS-код задающий поведение
         * загрузчика и указывающий, куда вставлять
         * ссылку после загрузки изображения
         * Его код будет приведен ниже.
         */
        , get_bloginfo('template_url') . '/js/upload.js'
        /* Указываем скрипты, от которых
         * зависит наш JS-код
         */
        , array('jquery', 'media-upload', 'thickbox')
    );
    wp_enqueue_script('my-upload-script');
}

// Запускаем функцию подключения загрузчика
if (is_admin())
    add_action('admin_print_scripts', 'my_add_upload_scripts');

function my_extra_fields_content_update($post_id)
{

    // Если данные пришли не из нашей формы, ничего не делаем
    if (!wp_verify_nonce($_POST['extra_field_nonce'], __FILE__))
        return false;
    // Если это автосохранение, то ничего не делаем
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
        return false;
    // Проверяем права пользователя
    if (!current_user_can('edit_post', $post_id))
        return false;

    $extra_fields = array(
        'post_background' => $_POST['post_background'],
        'post_preview' => $_POST['post_preview'],
        'post_icon' => $_POST['post_icon']
    );

    $extra_fields = array_map('trim', $extra_fields);

    foreach ($extra_fields as $key => $value) {
        // Очищаем, если пришли пустые значения полей
        if (empty($value))
            delete_post_meta($post_id, $key);
        // Обновляем, (или создаем) в случае не пустых значений
        if ($value)
            update_post_meta($post_id, $key, $value);
    }

    return $post_id;
}

// Запускаем обработчик формы во время сохранения записи
if (is_admin())
    add_action('save_post', 'my_extra_fields_content_update', 0);

function strip_shortcode_gallery($content)
{
    preg_match_all('/' . get_shortcode_regex() . '/s', $content, $matches, PREG_SET_ORDER);

    if (!empty($matches)) {
        foreach ($matches as $shortcode) {
            if ('gallery' === $shortcode[2]) {
                $pos = strpos($content, $shortcode[0]);
                if (false !== $pos) {
                    return substr_replace($content, '', $pos, strlen($shortcode[0]));
                }
            }
        }
    }

    return $content;
}


//root
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];

$args = array(
    'sort_order' => 'ASC',
    'sort_column' => 'post_date',
    'hierarchical' => 0,
    'exclude' => '',
    'include' => '',
//    'meta_key'     => '_wp_page_template',
//    'meta_value'   => 'page-tpl.php',
    'authors' => '',
    'child_of' => 0,
    'parent' => 36,
    'exclude_tree' => '',
    'number' => '',
    'offset' => 0,
    'post_type' => 'page',
    'post_status' => 'publish',
);

$mypage = get_pages($args);

foreach ($mypage as $pag) {
    $im = get_the_post_thumbnail_url($pag->ID, 'full');
    $link = get_page_link($pag->ID);
    $meta_country = get_post_meta($pag->ID, 'country', true);
//    $meta_country = $meta_country[0];
    $meta_style = get_post_meta($pag->ID, 'style', true);
    $meta_material = get_post_meta($pag->ID, 'material', true);
    $meta_price = get_post_meta($pag->ID, 'price', true);
//            echo var_dump($meta_values);
    $t = [
        'страна' => $meta_country,
        'стиль' => $meta_style,
        'материалы' => $meta_material,
        'цена' => $meta_price,
        'name' => $pag->post_title,
        'src' => $im,
        'link' => $link

    ];

    global $arrayToJSON;
    $arrayToJSON[count($arrayToJSON)] = $t;
}

$arrayToJSON;
$arrayToJSONFilt;

$args1 = array(
    'post_type' => 'Filter',
    'showposts' => -1,
    'order' => 'ASC'
);
$acsessuar = get_posts($args1);
foreach ($acsessuar as $post) {
    setup_postdata($post);

    $meta_country = get_post_meta($post->ID, 'country', false);
    $meta_style = get_post_meta($post->ID, 'style', false);
    $meta_material = get_post_meta($post->ID, 'material', false);
    $meta_price = get_post_meta($post->ID, 'price', false);
//            echo var_dump($pag);
    $meta_values = array('country' => $meta_country, 'style' => $meta_style, 'material' => $meta_material, 'price' => $meta_price);
//            echo var_dump($meta_values);
    global $arrayToJSONFilt;
    $arrayToJSONFilt = ['meta' => $meta_values];

}
//extra fields

$jsonFabrics = json_encode($arrayToJSON, JSON_UNESCAPED_UNICODE);
$jsonFilter = json_encode($arrayToJSONFilt, JSON_UNESCAPED_UNICODE);

@ $fFilter = fopen("$DOCUMENT_ROOT/wp-content/themes/finish/json/filter.json", 'w');
fwrite($fFilter, $jsonFilter);
fclose($fFilter);

@ $fFabricks = fopen("$DOCUMENT_ROOT/wp-content/themes/finish/json/fabrics.json", 'w');
fwrite($fFabricks, $jsonFabrics);
fclose($fFabricks);





