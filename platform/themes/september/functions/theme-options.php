<?php

theme_option()
    ->setField([
        'id'         => 'hotline',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'text',
        'label'      => __('Hotline'),
        'attributes' => [
            'name'    => 'hotline',
            'value'   => null,
            'options' => [
                'class'        => 'form-control',
                'placeholder'  => __('Hotline'),
                'data-counter' => 30,
            ],
        ],
    ])
    ->setField([
        'id'         => 'email',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'email',
        'label'      => __('Email'),
        'attributes' => [
            'name'    => 'email',
            'value'   => null,
            'options' => [
                'class'        => 'form-control',
                'placeholder'  => __('Email'),
                'data-counter' => 120,
            ],
        ],
    ])
    ->setField([
        'id'         => 'address',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'text',
        'label'      => __('Address'),
        'attributes' => [
            'name'    => 'address',
            'value'   => null,
            'options' => [
                'class'        => 'form-control',
                'placeholder'  => __('Address'),
                'data-counter' => 120,
            ],
        ],
    ])
    ->setSection([
        'title'      => __('Social'),
        'desc'       => __('Social links'),
        'id'         => 'opt-text-subsection-social',
        'subsection' => true,
        'icon'       => 'fa fa-share-alt',
    ])
    ->setField([
        'id'         => 'facebook',
        'section_id' => 'opt-text-subsection-social',
        'type'       => 'text',
        'label'      => 'Facebook',
        'attributes' => [
            'name'    => 'facebook',
            'value'   => null,
            'options' => [
                'class' => 'form-control',
            ],
        ],
    ])
    ->setField([
        'id'         => 'twitter',
        'section_id' => 'opt-text-subsection-social',
        'type'       => 'text',
        'label'      => 'Twitter',
        'attributes' => [
            'name'    => 'twitter',
            'value'   => null,
            'options' => [
                'class' => 'form-control',
            ],
        ],
    ])
    ->setField([
        'id'         => 'linkedin',
        'section_id' => 'opt-text-subsection-social',
        'type'       => 'text',
        'label'      => 'Linkedin',
        'attributes' => [
            'name'    => 'linkedin',
            'value'   => null,
            'options' => [
                'class' => 'form-control',
            ],
        ],
    ])
    ->setField([
        'id'         => 'youtube',
        'section_id' => 'opt-text-subsection-social',
        'type'       => 'text',
        'label'      => 'Youtube',
        'attributes' => [
            'name'    => 'youtube',
            'value'   => null,
            'options' => [
                'class' => 'form-control',
            ],
        ],
    ])
    ->setField([
        'id'         => 'instagram',
        'section_id' => 'opt-text-subsection-social',
        'type'       => 'text',
        'label'      => 'Instagram',
        'attributes' => [
            'name'    => 'instagram',
            'value'   => null,
            'options' => [
                'class' => 'form-control',
            ],
        ],
    ])
    ->setField([
        'id'         => 'pinterest',
        'section_id' => 'opt-text-subsection-social',
        'type'       => 'text',
        'label'      => 'Pinterest',
        'attributes' => [
            'name'    => 'pinterest',
            'value'   => null,
            'options' => [
                'class' => 'form-control',
            ],
        ],
    ])
    ->setField([
        'id'         => 'product_page_banner_title',
        'section_id' => 'opt-text-subsection-ecommerce',
        'type'       => 'text',
        'label'      => __('The description for products page'),
        'attributes' => [
            'name'    => 'product_page_banner_title',
            'value'   => null,
            'options' => [
                'class' => 'form-control',
            ],
        ],
    ])
    ->setField([
        'id'         => 'product_page_banner_image',
        'section_id' => 'opt-text-subsection-ecommerce',
        'type'       => 'mediaImage',
        'label'      => __('Banner image for products page'),
        'attributes' => [
            'name'  => 'product_page_banner_image',
            'value' => null,
        ],
    ])
    ->setField([
        'id'         => 'primary_font',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'googleFonts',
        'label'      => __('Primary font'),
        'attributes' => [
            'name'  => 'primary_font',
            'value' => 'Poppins',
        ],
    ])
    ->setField([
        'id'         => 'primary_color',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'customColor',
        'label'      => __('Primary color'),
        'attributes' => [
            'name'  => 'primary_color',
            'value' => '#026e94',
        ],
    ])
    ->setField([
        'id'         => 'secondary_color',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'customColor',
        'label'      => __('Secondary color'),
        'attributes' => [
            'name'  => 'secondary_color',
            'value' => '#2c1dff',
        ],
    ])
    ->setField([
        'id'         => 'facebook_chat_enabled',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'select',
        'label'      => __('Enable Facebook chat?'),
        'attributes' => [
            'name'    => 'facebook_chat_enabled',
            'list'    => [
                'no'  => trans('core/base::base.no'),
                'yes' => trans('core/base::base.yes'),
            ],
            'value'   => 'yes',
            'options' => [
                'class' => 'form-control',
            ],
        ],
    ])
    ->setField([
        'id'         => 'facebook_page_id',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'text',
        'label'      => __('Facebook page ID'),
        'attributes' => [
            'name'    => 'facebook_page_id',
            'value'   => null,
            'options' => [
                'class' => 'form-control',
            ],
        ],
    ])
    ->setField([
        'id'         => 'facebook_comment_enabled_in_post',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'select',
        'label'      => __('Enable Facebook comment in post detail page?'),
        'attributes' => [
            'name'    => 'facebook_comment_enabled_in_post',
            'list'    => [
                'no'  => trans('core/base::base.no'),
                'yes' => trans('core/base::base.yes'),
            ],
            'value'   => 'yes',
            'options' => [
                'class' => 'form-control',
            ],
        ],
    ])
    ->setField([
        'id'         => 'facebook_comment_enabled_in_product',
        'section_id' => 'opt-text-subsection-general',
        'type'       => 'select',
        'label'      => __('Enable Facebook comment in product detail page?'),
        'attributes' => [
            'name'    => 'facebook_comment_enabled_in_product',
            'list'    => [
                'no'  => trans('core/base::base.no'),
                'yes' => trans('core/base::base.yes'),
            ],
            'value'   => 'yes',
            'options' => [
                'class' => 'form-control',
            ],
        ],
    ]);
