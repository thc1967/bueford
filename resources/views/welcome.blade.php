<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Buefy Test</title>

        <!-- Styles -->
        <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        @stack('scripts.header')
    </head>
    <body>
        
        <section id="app" class="section">

            <h1 class="title">Buefy Test</h1>

            <b-tabs>

                <b-tab-item label="Notifications">
                    @include('notification')
                </b-tab-item>

                <b-tab-item label="Panels">
                    @include('panel')
                </b-tab-item>

                <b-tab-item label="Checkable Table">
                    @include('checkabletable')
                </b-tab-item>

                <b-tab-item label="Table">
                    @include('table')
                </b-tab-item>

                <b-tab-item label="Basic Form" style="height: 1200px">
                    @include('basicform')
                </b-tab-item>

                <b-tab-item label="General">
                    @include('general')
                </b-tab-item>
                
            </b-tabs>

            @stack('modals')

        </section>
        
        <script src="{{ mix('/js/app.js') }}"></script>
        @stack('scripts.before.vue')
        @include('vue')
        @stack('scripts.after.vue')

    </body>
</html>
