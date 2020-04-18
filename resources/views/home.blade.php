@extends('layouts.app')

@section('content-header')
<div class="header-body">
    <div class="row align-items-center py-4">
        <div class="col-xl-8 center">
            <h6 class="h2 text-white d-inline-block mb-0">List Name</h6>
        </div>
        <div class="col-lg-6 col-5 text-right">
            <!-- <a href="#" class="btn btn-sm btn-neutral">New</a>
            <a href="#" class="btn btn-sm btn-neutral">Filters</a> -->
        </div>
    </div>
</div>
@endsection

@section('content-body')
<div class="row">
    <div class="col-xl-8 center">        
        <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
                <!-- <h3 class="mb-0">Light table</h3> -->
                <form class="" id="add-item">
                    <div class="mb-0">
                        <div class="input-group input-group-flush">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-plus"></i></span>
                            </div>
                            <input class="form-control" placeholder="Add item" type="text">
                        </div>
                    </div>
                </form>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <tbody class="list">
                        <tr>
                            <td class="budget">
                                Vegetables
                            </td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="budget">
                                Fruits
                            </td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        
    </div>
</div>

<ul class="nav navbar-nav nav-pills fixed-bottom nav-pills-circle add-list-position">
    <li class="nav-item">
        <a class="nav-link active add-list-link" title="Add List" href="javascript:void(0)" data-toggle="modal" data-target="#createListModal">
            <span class="nav-link-icon d-block"><i class="fa fa-plus"></i></span>
        </a>
    </li>
</ul>

<!-- Modal -->
<div class="modal fade" id="createListModal" tabindex="-1" role="dialog" aria-labelledby="createListModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <form role="form" class="add-list-form">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="createListModalLabel">{{ __('Create List') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative">
                        <input class="form-control" type="text" name="listName" placeholder="{{ __('List Name') }}">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('Cancel') }}</button>
                <button type="submit" class="btn btn-primary">{{ __('Create List') }}</button>
            </div>
        </form>
    </div>
  </div>
</div>
@endsection
