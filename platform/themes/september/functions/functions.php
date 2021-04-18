<?php

use Illuminate\Routing\Events\RouteMatched;

register_page_template([
    'homepage'   => __('Homepage'),
    'full-width' => __('Full width'),
]);

register_sidebar([
    'id'          => 'footer_sidebar',
    'name'        => __('Footer sidebar'),
    'description' => __('Footer sidebar'),
]);

app()->booted(function () {
    remove_sidebar('primary_sidebar');
});

Menu::removeMenuLocation('header-menu')
    ->removeMenuLocation('footer-menu');

RvMedia::setUploadPathAndURLToPublic();

RvMedia::addSize('medium', 570, 570)
    ->addSize('small', 570, 268);

Form::component('themeIcon', Theme::getThemeNamespace() . '::partials.icons-field', [
    'name',
    'value'      => null,
    'attributes' => [],
]);

if (is_plugin_active('ecommerce')) {
    Event::listen(RouteMatched::class, function () {
        dashboard_menu()
            ->removeItem('cms-plugins-flash-sale', 'cms-plugins-ecommerce');

        if (in_array(Route::currentRouteName(), ['flash-sale.index', 'flash-sale.create', 'flash-sale.edit'])) {
            abort(403);
        }
    });
}
