<div class="input-field">
    <input type="text" name="title" value="{{ isset($register->title) ? $register->title : '' }}">
    <label>Title</label>
</div>

<div class="input-field">
    <input type="text" name="description" value="{{ isset($register->description) ? $register->description : '' }}">
    <label>Description</label>
</div>

<div class="input-field">
    <input type="text" name="price" value="{{ isset($register->price) ? $register->price : '' }}">
    <label>Price</label>
</div>

<div class="file-field input-field">
    <div class=" btn blue-grey">
        <span>Image</span>
        <input type="file" name="image">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>
@if (isset($register->image))
    <div class="input-field">
        <img width="150" src="{{ asset($register->image) }}">
    </div>
@endif
<div class="input-field">
    <p>
        <label>
            <input type="checkbox" id="test5" name="published"
                {{ isset($register->published) == 'Yes' ? 'checked' : '' }} value="true" />
            <span>Publish?</span>
        </label>
    </p>
    <br>
</div>
