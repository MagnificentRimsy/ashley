<div class="form-group">
    <label class="control-label">Title</label>
    <input type="text" name="title" data-shortcode-attribute="title" class="form-control" placeholder="Title">
</div>

<div class="form-group">
    <label class="control-label">Description</label>
    <input type="text" name="description" data-shortcode-attribute="description" class="form-control" placeholder="Description">
</div>

<div class="form-group">
    <label class="control-label">{{ trans('plugins/gallery::gallery.shortcode_name') }}</label>
    <input type="number" name="limit" class="form-control" data-shortcode-attribute="attribute" placeholder="{{ trans('plugins/gallery::gallery.limit_display') }}">
</div>
