@extends('layouts/admin-layout')

@section('title')
    Admin | Create
@endsection

@section('content')
<div class="content-header">
    <div class="container-fluid">
        <h1 class="m-0">Добавить товар</h1>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="icon fa fa-check"></i>{{ session('success') }}
                <button type="button" class="btn close" data-dismiss="alert" aria-label="Close"><i class="far fa-window-close"></i></button>
            </div>
        @endif
      <div class="row mb-2 justify-content-md-center">
        <div class="col-lg-6">
          <div class="add-form-container" style="padding: 5%;">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Добавление товара:</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Название товара</label>
                      <input name="title" type="text" class="form-control" id="exampleInputEmail1" placeholder="Введите название товара" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Код товара</label>
                      <input name="article" type="text" class="form-control" id="exampleInputPassword1" placeholder="Артикул" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Описание товара</label>
                        <textarea name="description" class="form-control" id="exampleInputPassword1" placeholder="Описание товара" value=""></textarea>
                      </div>
                    <div class="form-group">
                      <label for="exampleInputFile">Изображение товара</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input name="image" type="file" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Выберете файл</label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                        <label class="form-select-label" for="exampleSelect1">Рекомендованый товар</label>
                        <select name="reccomend" id="exampleSelect1" class="form-control">
                            <option value="1">Да</option>
                            <option value="0">Нет</option>
                        </select>
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary" style="position: relative; left: 50%; transform: translate(-50%, 0);">
                        Добавить товар
                    </button>
                  </div>
                </form>
              </div>
          </div>
        </div>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
@endsection
