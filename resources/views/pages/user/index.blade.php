@extends('layouts.master')

@section('title')
    @lang('translation.users')
@endsection

@section('css')

    <link href="{{ URL::asset('/assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet"
          type="text/css">
    <link href="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.css') }}" rel="stylesheet"
          type="text/css">
    <link href="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet"
          type="text/css">
    <link href="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.css') }}" rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet" href="{{ URL::asset('/assets/libs/datepicker/datepicker.min.css') }}">

@endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1')
            @lang('translation.murojaat')
        @endslot
        @slot('title')
            @lang('translation.murojaat')
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <div class="row">
                        <div class="mb-2">
                            <form action="{{ route('user.index') }}" class="d-flex justify-content-end">
                                <div class="btn-group">
                                    <input value="{{ $_GET['search'] ?? '' }}"
                                           name="search"
                                           type="text" class="form-control fw-bold "
                                           placeholder="@lang('translation.Search')"
                                           aria-describedby="button-addon2">
                                    <button class="btn btn-success" type="submit" id="button-addon2">
                                        <span class="fas fa-search"></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <table class="table align-middle table-nowrap table-hover">
                        <thead class="table-light">

                        <tr>
                            <th scope="col">N</th>
                            <th scope="col">@lang('translation.image')</th>
                            <th scope="col">@lang('translation.name')</th>
                            <th scope="col">@lang('translation.username')</th>
                            <th scope="col">@lang('translation.email')</th>
                            <th scope="col">@lang('translation.phone')</th>
                            <th scope="col">@lang('translation.birthday')</th>
                            <th>
                                <button type="button" class="btn btn-success rounded-3 btn-sm waves-effect waves-light"
                                        data-bs-toggle="modal" data-bs-target="#exampleModalScrollable"><i
                                            class="fas fa-plus-circle"></i></button>

                                <form action="{{ route('user.store') }}" method="post"
                                      class="needs-validation" novalidate
                                      enctype="multipart/form-data">
                                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                                         aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"
                                                        id="exampleModalLabel">@lang('translation.users')</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    @csrf
                                                    <div class="row">
                                                        <div class="row">
                                                            <div class="col-6 mt-2">
                                                                <div>
                                                                    <label
                                                                            class="form-label">@lang('translation.name')</label>
                                                                    <input type="text" name="name"
                                                                           class="form-control fw-bold "
                                                                           placeholder="@lang('translation.name')"
                                                                           required>
                                                                    <div class="valid-feedback">
                                                                        @lang('translation.valid_feedback')
                                                                    </div>
                                                                    <div class="invalid-feedback">
                                                                        @lang('translation.invalid_feedback')
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt-2">
                                                                <label
                                                                        class="form-label">@lang('translation.phone')</label>
                                                                <input type="text" name="phone"
                                                                       class="form-control fw-bold datepicker input-mask"
                                                                       data-inputmask="'mask': '999-99-999-99-99'"
                                                                       value="998"
                                                                       placeholder="@lang('translation.phone')"
                                                                       required>
                                                                <div class="valid-feedback">
                                                                    @lang('translation.valid_feedback')
                                                                </div>
                                                                <div class="invalid-feedback">
                                                                    @lang('translation.invalid_feedback')
                                                                </div>
                                                            </div>

                                                            <div class="col-4 mt-2">
                                                                <label
                                                                        class="form-label">@lang('translation.username')</label>
                                                                <input type="text" name="username"
                                                                       class="form-control fw-bold "
                                                                       placeholder="@lang('translation.username')"
                                                                       required>
                                                                <div class="valid-feedback">
                                                                    @lang('translation.valid_feedback')
                                                                </div>
                                                                <div class="invalid-feedback">
                                                                    @lang('translation.invalid_feedback')
                                                                </div>
                                                            </div>
                                                            <div class="col-4 mt-2">
                                                                <label class="form-label"
                                                                       for="role">@lang('translation.role')</label>
                                                                <select name="role" id="role" class="form-select">
                                                                    @foreach($roles as $role)
                                                                        <option
                                                                                value="{{ $role->name }}">{{ $role->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                                <div class="valid-feedback">
                                                                    @lang('translation.valid_feedback')
                                                                </div>
                                                                <div class="invalid-feedback">
                                                                    @lang('translation.invalid_feedback')
                                                                </div>
                                                            </div>
                                                            <div class="col-4 mt-2">
                                                                <label>@lang('translation.birthday')</label>
                                                                <div class="input-group" id="datepicker2">
                                                                    <input type="text" name="dob"
                                                                           class="datepicker input-mask"
                                                                           data-inputmask="'mask': '99-99-9999'"
                                                                           placeholder="@lang('translation.Y_m_d')"
                                                                           data-date-format="dd-mm-yyyy"
                                                                           data-date-container='#datepicker2'
                                                                           data-provide="datepicker"
                                                                           data-date-autoclose="true"
                                                                           style="width: 100%; border: 1px solid black"
                                                                           required>
                                                                    <div class="valid-feedback">
                                                                        @lang('translation.valid_feedback')
                                                                    </div>
                                                                    <div class="invalid-feedback">
                                                                        @lang('translation.invalid_feedback')
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 mt-2"><label
                                                                        class="form-label">@lang('translation.email')</label>
                                                                <input type="text" name="email"
                                                                       class="form-control fw-bold "
                                                                       placeholder="@lang('translation.email')"></div>
                                                            <div class="col-6 mt-2"><label
                                                                        class="form-label">@lang('translation.password')</label>
                                                                <input type="text" name="password"
                                                                       class="form-control fw-bold "
                                                                       placeholder="@lang('translation.password')"
                                                                       required>
                                                                <div class="valid-feedback">
                                                                    @lang('translation.valid_feedback')
                                                                </div>
                                                                <div class="invalid-feedback">
                                                                    @lang('translation.invalid_feedback')
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div>
                                                                <label
                                                                        class="form-label">@lang('translation.image')</label>
                                                                <input type="file" name="avatar"
                                                                       class="form-control fw-bold ">
                                                            </div>
                                                            <div class=" mt-2">
                                                                <div class="accordion-item">
                                                                    <h2 class="accordion-header" id="flush-headingOne">
                                                                        <button class="accordion-button " type="button"
                                                                                data-bs-toggle="collapse"
                                                                                data-bs-target="#flush-collapseOne"
                                                                                aria-expanded="true"
                                                                                aria-controls="flush-collapseOne">
                                                                            @lang('translation.select_permission')
                                                                        </button>
                                                                    </h2>
                                                                    <div id="flush-collapseOne"
                                                                         class="accordion-collapse collapse show"
                                                                         aria-labelledby="flush-headingOne"
                                                                         data-bs-parent="#accordionFlushExample">
                                                                        <div class="accordion-body text-muted">
                                                                            <div class=" row">
                                                                                @foreach($permissions as $permisson)
                                                                                    <div class="col-4">
                                                                                        <input class="form-check-input"
                                                                                               type="checkbox"
                                                                                               name="permissions[]"
                                                                                               value="{{ $permisson->name }}"
                                                                                               id="permission{{ $permisson->id }}">
                                                                                        <label
                                                                                                class="  form-check-label"
                                                                                                for="permission{{ $permisson->id }}">
                                                                                            {{ $permisson->name }}<p>
                                                                                        </label>
                                                                                    </div>

                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">@lang('translation.close')
                                                    </button>
                                                    <button type="submit"
                                                            class="btn btn-success">@lang('translation.save')</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </th>
                        </tr>
                        </thead>


                        @foreach($users as $user)
                            <tbody>
                            <tr>
                                <td>{{$loop->index+1}}</td>
                                <td>
                                    <div class="avatar-xs">
                                            <span class="avatar-title rounded-circle">
                                                @if(file_exists(public_path('storage/images/'.$user->avatar)))
                                                    <img src="{{ asset('storage/images/'.$user->avatar) }}" width="50px"
                                                         height="50px" class="rounded-circle">
                                                @else
                                                    <i class="bx bx-user fs-2"></i>
                                                @endif
                                            </span>
                                    </div>
                                </td>
                                <td>
                                    <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$user->name}}</a></h5>
                                    <p class="text-muted mb-0">
                                        @foreach($roles as $role)
                                            @if($user->roles->contains('id', $role->id))
                                                {{$role->name}}
                                            @endif
                                        @endforeach
                                    </p>
                                </td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->dob}}</td>

                                <td>
                                    <div class="input-group">
                                        <button class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                                data-bs-target="#update{{$user->id}}">
                                            <i class="fas fa-edit"></i>
                                        </button>

                                        <form action="{{ route('user.update' , $user->id) }}" method="post"
                                              class="needs-validation" novalidate
                                              enctype="multipart/form-data">
                                            @csrf
                                            @method('put')

                                            <div class="modal fade " id="update{{$user->id}}" tabindex="-1"
                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="exampleModalLabel">@lang('translation.users')</h5>
                                                            <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <div class="col-6 mt-2">
                                                                    <label
                                                                            class="form-label">@lang('translation.name')</label>
                                                                    <input type="text" name="name"
                                                                           class="form-control fw-bold " required
                                                                           value={{$user->name}}>
                                                                    <div class="valid-feedback">
                                                                        @lang('translation.valid_feedback')
                                                                    </div>
                                                                    <div class="invalid-feedback">
                                                                        @lang('translation.invalid_feedback')
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 mt-2">
                                                                    <label
                                                                            class="form-label">@lang('translation.phone')</label>
                                                                    <input type="text" name="phone"
                                                                           class="form-control fw-bold " required
                                                                           value={{$user->phone}}>

                                                                    <div class="valid-feedback">
                                                                        @lang('translation.valid_feedback')
                                                                    </div>
                                                                    <div class="invalid-feedback">
                                                                        @lang('translation.invalid_feedback')
                                                                    </div>

                                                                </div>

                                                                <div class="col-4 mt-2">
                                                                    <label
                                                                            class="form-label">@lang('translation.username')</label>
                                                                    <input type="text" name="username"
                                                                           class="form-control fw-bold " required
                                                                           value={{$user->username}}>

                                                                    <div class="valid-feedback">
                                                                        @lang('translation.valid_feedback')
                                                                    </div>
                                                                    <div class="invalid-feedback">
                                                                        @lang('translation.invalid_feedback')
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 mt-2">
                                                                    <label class="form-label"
                                                                           for="role">@lang('translation.role')</label>
                                                                    <select name="role" id="role" class="form-select"
                                                                            required>
                                                                        @foreach($roles as $role)
                                                                            <option
                                                                                    {{ $user->roles->contains('id', $role->id) ? 'selected' : '' }}
                                                                                    value="{{ $role->name }}">{{ $role->name }}</option>
                                                                        @endforeach
                                                                    </select>

                                                                    <div class="valid-feedback">
                                                                        @lang('translation.valid_feedback')
                                                                    </div>
                                                                    <div class="invalid-feedback">
                                                                        @lang('translation.invalid_feedback')
                                                                    </div>
                                                                </div>
                                                                <div class="col-4 mt-2">
                                                                    <label>@lang('translation.birthday')</label>
                                                                    <div class="input-group"
                                                                         id="datepickerUser{{ $user->id }}">
                                                                        <input type="text" name="dob"
                                                                               value="{{$user->dob ?? '' }}"
                                                                               class="datepicker input-mask"
                                                                               data-inputmask="'mask': '99-99-9999'"
                                                                               placeholder="@lang('translation.d_m_Y')"
                                                                               data-date-format="dd-mm-yyyy"
                                                                               data-date-container='#datepickerUser{{ $user->id }}'
                                                                               data-provide="datepicker"
                                                                               data-date-autoclose="true"
                                                                               style="width: 100%; border: 1px solid black"
                                                                               required>
                                                                        <div class="valid-feedback">
                                                                            @lang('translation.valid_feedback')
                                                                        </div>
                                                                        <div class="invalid-feedback">
                                                                            @lang('translation.invalid_feedback')
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6 mt-2">
                                                                    <label
                                                                            class="form-label">@lang('translation.email')</label>
                                                                    <input type="text" name="email"
                                                                           class="form-control fw-bold "
                                                                           value={{$user->email}}>
                                                                </div>
                                                                <div class="col-6 mt-2">
                                                                    <label
                                                                            class="form-label">@lang('translation.password')</label>
                                                                    <input type="text" name="password"
                                                                           class="form-control fw-bold "
                                                                           placeholder="password">

                                                                </div>
                                                                <div>
                                                                    <label
                                                                            class="form-label">@lang('translation.image')</label>
                                                                    <input type="file" name="avatar"
                                                                           class="form-control fw-bold " value="1122">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class=" mt-2">
                                                                    <div class="accordion-item">
                                                                        <h2 class="accordion-header"
                                                                            id="flush-headingOne">
                                                                            <button class="accordion-button "
                                                                                    type="button"
                                                                                    data-bs-toggle="collapse"
                                                                                    data-bs-target="#flush-collapseOne"
                                                                                    aria-expanded="true"
                                                                                    aria-controls="flush-collapseOne">
                                                                                @lang('translation.select_permission')
                                                                            </button>
                                                                        </h2>
                                                                        <div id="flush-collapseOne"
                                                                             class="accordion-collapse collapse show"
                                                                             aria-labelledby="flush-headingOne"
                                                                             data-bs-parent="#accordionFlushExample">
                                                                            <div class="accordion-body text-muted">
                                                                                <div class=" row">
                                                                                    @foreach($permissions as $permission)
                                                                                        <div class="col-4 mt-2">
                                                                                            <input
                                                                                                    class="form-check-input"
                                                                                                    type="checkbox"
                                                                                                    {{ $user->permissions->contains('id', $permission->id) ? 'checked' : '' }}
                                                                                                    name="permissions[]"
                                                                                                    value="{{ $permission->name }}"
                                                                                                    id="permissionUpdate{{ $user->id }}{{ $permission->id }}">
                                                                                            <label
                                                                                                    class="form-check-label"
                                                                                                    for="permissionUpdate{{ $user->id}}{{ $permission->id }}">
                                                                                                {{ $permission->name }}
                                                                                            </label>
                                                                                        </div>
                                                                                    @endforeach
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">@lang('translation.close')
                                                            </button>
                                                            <button type="submit"
                                                                    class="btn btn-primary">@lang('translation.save')</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>


                                        <button type="button" class="btn btn-danger btn-sm"
                                                data-bs-toggle="modal" data-bs-target=".delete-modal{{ $user->id }}">
                                            <i class="fas fa-trash"></i>
                                        </button>

                                        <form action="{{ route('user.destroy',$user->id) }}" method="post"
                                              class="needs-validation" novalidate>
                                            @method('delete')
                                            @csrf
                                            <!--  Extra Large modal example -->
                                            <div id="myModal" class="modal fade delete-modal{{ $user->id }}"
                                                 tabindex="-1" role="dialog"
                                                 aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">

                                                <div class="modal-dialog modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title"
                                                                id="myExtraLargeModalLabel">@lang('translation.users')</h5>
                                                            <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <h4>@lang('translation.delete_message')</h4>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">@lang('translation.close')
                                                            </button>
                                                            <button type="submit"
                                                                    class="btn btn-danger">@lang('translation.delete')</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->


                                            </div>
                                            <!-- /.modal -->
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
@section('script')

    <script src="{{ URL::asset('/assets/libs/select2/select2.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/spectrum-colorpicker/spectrum-colorpicker.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/bootstrap-touchspin/bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/libs/datepicker/datepicker.min.js') }}"></script>

    <!-- form advanced init -->
    <script src="{{ URL::asset('/assets/js/pages/form-advanced.init.js') }}"></script>


    <script src="{{ URL::asset('/assets/libs/parsleyjs/parsleyjs.min.js') }}"></script>

    <script src="{{ URL::asset('/assets/js/pages/form-validation.init.js') }}"></script>

    <!-- form mask -->
    <script src="{{ URL::asset('/assets/libs/inputmask/inputmask.min.js') }}"></script>
    <!-- form mask init -->
    <script src="{{ URL::asset('/assets/js/pages/form-mask.init.js') }}"></script>

@endsection
