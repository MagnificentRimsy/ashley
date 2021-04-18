<?php

app()->booted(function () {
    add_shortcode('google-map', __('Google map'), __('Custom map'), function ($shortCode) {
        return Theme::partial('short-codes.google-map', ['address' => $shortCode->content]);
    });

    shortcode()->setAdminConfig('google-map', Theme::partial('short-codes.google-map-admin-config'));

    add_shortcode('youtube-video', __('Youtube video'), __('Add youtube video'), function ($shortCode) {
        $url = rtrim($shortCode->content, '/');
        if (str_contains($url, 'watch?v=')) {
            $url = str_replace('watch?v=', 'embed/', $url);
        } else {
            $exploded = explode('/', $url);

            if (count($exploded) > 1) {
                $url = 'https://www.youtube.com/embed/' . Arr::last($exploded);
            }
        }

        return Theme::partial('short-codes.youtube-video', compact('url'));
    });

    shortcode()->setAdminConfig('youtube-video', Theme::partial('short-codes.youtube-video-admin-config'));

    if (is_plugin_active('ecommerce')) {
        add_shortcode('product-categories', __('Product categories'), __('Product categories'), function ($shortCode) {
            return Theme::partial('short-codes.product-categories', [
                'title'       => $shortCode->title,
                'description' => $shortCode->description,
            ]);
        });

        shortcode()->setAdminConfig('product-categories',
            Theme::partial('short-codes.product-categories-admin-config'));

        add_shortcode('featured-products', __('Featured products'), __('Featured products'), function ($shortCode) {

            return Theme::partial('short-codes.featured-products', [
                'title'       => $shortCode->title,
                'description' => $shortCode->description,
                'limit'       => $shortCode->limit ? $shortCode->limit : 8,
            ]);
        });

        shortcode()->setAdminConfig('featured-products', Theme::partial('short-codes.featured-products-admin-config'));

        add_shortcode('featured-product-categories', __('Featured Product Categories'),
            __('Featured Product Categories'),
            function ($shortCode) {

                return Theme::partial('short-codes.featured-product-categories', [
                    'title'       => $shortCode->title,
                    'description' => $shortCode->description,
                ]);
            });

        shortcode()->setAdminConfig('featured-product-categories',
            Theme::partial('short-codes.featured-product-categories-admin-config'));

        add_shortcode('featured-brands', __('Featured Brands'), __('Featured Brands'), function ($shortCode) {
            return Theme::partial('short-codes.featured-brands', [
                'title' => $shortCode->title,
            ]);
        });

        shortcode()->setAdminConfig('featured-brands', Theme::partial('short-codes.featured-brands-admin-config'));

        add_shortcode('product-collections', __('Product collections'), __('Product collections'),
            function ($shortCode) {
                return Theme::partial('short-codes.product-collections', [
                    'title'       => $shortCode->title,
                    'description' => $shortCode->description,
                ]);
            });

        shortcode()->setAdminConfig('product-collections',
            Theme::partial('short-codes.product-collections-admin-config'));

        add_shortcode('trending-products', __('Trending Products'), __('Trending Products'), function ($shortCode) {
            return Theme::partial('short-codes.trending-products', [
                'title'       => $shortCode->title,
                'description' => $shortCode->description,
                'limit'       => $shortCode->limit ?: 4,
            ]);
        });

        shortcode()->setAdminConfig('trending-products', Theme::partial('short-codes.trending-products-admin-config'));

        add_shortcode('all-products', __('All Products'), __('All Products'), function ($shortCode) {
            $products = get_products([
                'paginate' => [
                    'per_page'      => $shortCode->per_page,
                    'current_paged' => (int)request()->input('page'),
                ],
            ]);

            return Theme::partial('short-codes.all-products', [
                'title'    => $shortCode->title,
                'products' => $products,
            ]);
        });

        shortcode()->setAdminConfig('all-products', Theme::partial('short-codes.all-products-admin-config'));

        add_shortcode('all-brands', __('All Brands'), __('All Brands'), function ($shortCode) {
            $brands = get_all_brands();

            return Theme::partial('short-codes.all-brands', [
                'title'  => $shortCode->title,
                'brands' => $brands,
            ]);
        });

        shortcode()->setAdminConfig('all-brands', Theme::partial('short-codes.all-brands-admin-config'));
    }

    if (is_plugin_active('blog')) {
        add_shortcode('news', __('News'), __('News'), function ($shortCode) {
            return Theme::partial('short-codes.news', [
                'title'       => $shortCode->title,
                'description' => $shortCode->description,
            ]);
        });
        shortcode()->setAdminConfig('news', Theme::partial('short-codes.news-admin-config'));
    }

    if (is_plugin_active('contact')) {
        add_shortcode('september-contact-form', __('Contact form (deprecated)'), __('Add contact form'), function () {
            return Theme::partial('short-codes.contact-form');
        });

        add_filter(CONTACT_FORM_TEMPLATE_VIEW, function () {
            return Theme::getThemeNamespace() . '::partials.short-codes.contact-form';
        }, 120);
    }

    if (is_plugin_active('simple-slider')) {
        add_filter(SIMPLE_SLIDER_VIEW_TEMPLATE, function () {
            return Theme::getThemeNamespace() . '::partials.short-codes.sliders';
        }, 120);
    }

    add_shortcode('our-features', __('Our features'), __('Our features'), function ($shortCode) {
        $items = $shortCode->items;
        $items = explode(';', $items);
        $data = [];
        foreach ($items as $item) {
            $data[] = json_decode(trim($item), true);
        }

        return Theme::partial('short-codes.our-features', compact('data'));
    });

    if (is_plugin_active('gallery')) {
        add_shortcode('theme-galleries', __('Galleries (HASA theme)'), __('Galleries images'), function ($shortCode) {
            return Theme::partial('short-codes.galleries', [
                'title'       => $shortCode->title,
                'description' => $shortCode->description,
                'limit'       => $shortCode->limit,
            ]);
        });

        shortcode()->setAdminConfig('theme-galleries', Theme::partial('short-codes.galleries-admin-config'));
    }
});
