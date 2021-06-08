@extends('layout')

@section('title')
    Add Product
@endsection

@section('main_content_block')

<form action="{{ route('add_product_submit') }}" method="POST" enctype="multipart/form-data" style="padding: 10% 2%; text-align:center;">
    @csrf
    <div>
        <input type="text" name="title" placeholder="Название товара" required>
    </div>
    <br>
    <div>
        <input type="text" name="article" placeholder="Артикул" required>
    </div>
    <br>
    <div>
        <label for="image-field">Изображение товара</label>
        <input type="file" name="image" placeholder="Изображение товара" required id="image-field">
    </div>
    <br>
    <div>
        <input type="text" name="description" placeholder="Описание товара">
    </div>
    <br>
    <div>
        <label for="recommend-field">Рекомендованый товар</label>
        <select name="reccomend" id="recommend-field">
            <option value="1">Да</option>
            <option value="0">Нет</option>
        </select>
    </div>
    <br>
    <div>
        <button type="submit">Добавить товар</button>
    </div>
</form>

@endsection
