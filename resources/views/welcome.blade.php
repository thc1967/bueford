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
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        
        <section id="app" class="section">

            <h1 class="title">Buefy Test</h1>

            <b-tabs>

                <b-tab-item label="Basic Form">
                    @include('basicform')
                </b-tab-item>

                <b-tab-item label="Buttons">
                    @include('buttons')
                </b-tab-item>
                
            </b-tabs>

        </section>
        
        <script src="{{ mix('/js/app.js') }}"></script>
        <script>
        var v = new Vue({
            el: '#app',

            props: {
                @stack('vue.props')
            },

            data: function () {
                return {
                    @stack('vue.data')
                }
            },

            computed: {
                @stack('vue.computed')
            },

            methods: {
                @stack('vue.methods')
            },

            created: function () {
                console.log('vue created');
                @stack('vue.created')
            },

            mounted: function () {
                console.log('vue mounted');
                @stack('vue.mounted')
            }
        });
        </script>
        @stack('scripts')

    </body>
</html>
