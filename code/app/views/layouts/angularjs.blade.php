{{-- AngularJS --}}
{{ HTML::script('js/angularjs/angular.min.js') }}
{{ HTML::script('js/angularjs/angular-cookies.min.js') }}
{{ HTML::script('js/angularjs/i18n/angular-locale_es-cl.js') }}

{{ HTML::style('js/ng-grid/ng-grid.css') }}
{{ HTML::script('js/ng-grid/ng-grid-2.0.14.min.js') }}
{{ HTML::script('js/angular-local-storage.js') }}
{{-- Main app --}}
{{ HTML::script('js/app.js') }}
<script>
    {{-- Factory root --}}
    trackingCorreos.factory('rootFactory', function () {
        var servicio = {
            root: "{{ Request::root() }}",
            store: "{{ storage_path('') }}",
            public: "{{ public_path('') }}"
        };
        return servicio;
    });
</script>
{{-- Components --}}
{{ HTML::script('js/factories.js') }}
{{ HTML::script('js/directives.js') }}
{{ HTML::script('js/controllers.js') }}
