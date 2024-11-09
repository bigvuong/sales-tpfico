<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}"> 
  <title>Admin</title>
  <link rel="icon" href="{{asset('public/admin/images/favicon.png')}}" sizes="32x32" /> 
  <link href="{{ asset('public/admin/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="https://kit-pro.fontawesome.com/releases/v5.15.3/css/pro.min.css" rel="stylesheet" type="text/css"> 
  <link href="{{ asset('public/admin/css/jquery.dataTables.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/admin/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/admin/css/buttons.dataTables.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/admin/css/select.dataTables.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/admin/css/select2.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/admin/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/admin/css/coreui.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/admin/css/dropzone.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/admin/css/perfect-scrollbar.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('public/admin/css/custom.css') }}" rel="stylesheet" />
  @yield('styles')
</head>

<body class="c-app">
  @include('admin.partials.menu')
  <div class="c-wrapper">
    <header class="c-header c-header-fixed px-3">
      <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
        <i class="fas fa-fw fa-bars"></i>
      </button>

      <a class="c-header-brand d-lg-none" href="#">
        <img src="{{ asset('public/admin/images/logo.png') }}" class="logo-admin" alt="Rugby">
      </a>

      <button class="c-header-toggler mfs-3 d-md-down-none" type="button" responsive="true">
        <i class="fas fa-fw fa-bars"></i>
      </button>

      <ul class="c-header-nav ml-auto">
        @if(count(config('panel.available_languages', [])) > 1)
        <li class="c-header-nav-item dropdown d-md-down-none">
          <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
            {{ strtoupper(app()->getLocale()) }}
          </a>
          <div class="dropdown-menu dropdown-menu-right">
            @foreach(config('panel.available_languages') as $langLocale => $langName)
            <a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a>
            @endforeach
          </div>
        </li>
        @endif


      </ul>
    </header>

    <div class="c-body">
      <main class="c-main">


        <div class="container-fluid">
          @if(session('message'))
          <div class="row mb-2">
            <div class="col-lg-12">
              <div class="alert alert-success" role="alert">{{ session('message') }}</div>
            </div>
          </div>
          @endif
          @if($errors->count() > 0)
          <div class="alert alert-danger">
            <ul class="list-unstyled">
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          @yield('content')

        </div>


      </main>
      <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
    </div>
  </div>
  <script src="{{ asset('public/admin/js/jquery.min.js')}}"></script>
  <script src="{{ asset('public/admin/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('public/admin/js/popper.min.js')}}"></script>
  <script src="{{ asset('public/admin/js/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ asset('public/admin/js/coreui.min.js')}}"></script>
  <script src="{{ asset('public/admin/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('public/admin/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('public/admin/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{ asset('public/admin/js/dataTables.select.min.js')}}"></script>
  <script src="{{ asset('public/admin/js/moment.min.js')}}"></script>
  <script src="{{ asset('public/admin/js/select2.full.min.js')}}"></script>
  <script src="{{ asset('public/admin/js/bootstrap-datetimepicker.min.js')}}"></script>
  <script src="{{ asset('public/admin/js/main.js') }}"></script>
  <script>
    $(function() {
      let selectAllButtonTrans = '{{ trans('global.select_all') }}'
      let selectNoneButtonTrans = '{{ trans('global.deselect_all') }}'

      let languages = {
        'en': '{{url('admin/english-json')}}'
      };

      $.extend(true, $.fn.dataTable.Buttons.defaults.dom.button, { className: 'btn' })
      $.extend(true, $.fn.dataTable.defaults, {
        language: {
          url: languages['{{ app()->getLocale() }}']
        },
        columnDefs: [{
          orderable: false,
          className: 'select-checkbox',
          targets: 0
        }, {
          orderable: false,
          searchable: false,
          targets: -1
        }],
        select: {
          style:    'multi+shift',
          selector: 'td:first-child'
        },
        order: [],
        scrollX: true,
        pageLength: 25,
        dom: 'lBfrtip<"actions">',
        buttons: [
        {
          extend: 'selectAll',
          className: 'btn-primary',
          text: selectAllButtonTrans,
          exportOptions: {
            columns: ':visible'
          },
          action: function(e, dt) {
            e.preventDefault()
            dt.rows().deselect();
            dt.rows({ search: 'applied' }).select();
          }
        },
        {
          extend: 'selectNone',
          className: 'btn-primary',
          text: selectNoneButtonTrans,
          exportOptions: {
            columns: ':visible'
          }
        }
        ]
      });

      $.fn.dataTable.ext.classes.sPageButton = '';

      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    });

  </script>
  @yield('scripts')
</body>

</html>