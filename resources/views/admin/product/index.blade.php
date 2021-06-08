@extends('layouts/admin-layout')

@section('title')
    Admin | All Products
@endsection

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <h1 class="m-0">Все товары</h1>
    </div><!-- /.container-fluid -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="icon fa fa-check"></i>{{ session('success') }}
            <button type="button" class="btn close" data-dismiss="alert" aria-label="Close"><i class="far fa-window-close"></i></button>
        </div>
    @endif
</div>

<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body p-0">
              <table class="table table-striped projects" style="width: 100%">
                  <thead>
                      <tr>
                          <th style="width: 1%">
                              ID
                          </th>
                          <th style="width: 20%">
                              Название товара
                          </th>
                          <th style="width: 15%">
                              Изображение
                          </th>
                          <th style="width: 15%">
                              Код товара
                          </th>
                          <th>
                            Описание
                            </th>
                          <th style="width: 7%" class="text-center">
                              Рекомендованый
                          </th>
                          <th style="width: 20%">
                          </th>
                      </tr>
                  </thead>
                  <tbody>
                      @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->title }}</td>
                                <td class="text-center"><img style="width:100%;" src="{{ Storage::url($product->image) }}" alt=""></td>
                                <td class="text-center">{{ $product->article }}</td>
                                <td>{{ $product->description }}</td>
                                <td class="text-center">
                                    @if ($product->reccomend == 1)
                                        <span class="badge badge-success">Да</span>
                                    @else
                                        <span class="badge badge-danger">Нет</span>
                                    @endif
                                </td>
                                <td class="project-actions text-right">
                                    <a class="btn btn-info btn-sm" href="{{ route('product.edit', $product['id']) }}"><i class="fas fa-pencil-alt"></i> Edit</a>
                                    <form action="{{ route('product.destroy', $product['id']) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm delete-btn"><i class="fas fa-trash"></i> Delete</button>
                                    </form>
                                </td>
                            </tr>
                      @endforeach
                  </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
    </div>
</section>

@endsection
