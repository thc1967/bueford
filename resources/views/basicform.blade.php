<form action="/formdump" method="POST" class="section">

    {{ csrf_field() }}

    <div class="field">
        <b-checkbox name="basic_checkbox"
            value="1"
            true-value="1"
            false-value="0"
            native-value="1">Basic Checkbox</b-checkbox>
    </div>

    <div class="field">
        <b-switch name="checkbox_switch">
            Checkbox as Switch
        </b-switch>
    </div>

    <hr />

    <button class="button is-success" type="Submit">
        <span class="icon">
            <i class="fa fa-check-circle" aria-hidden="true"></i>
        </span>
        <span>Submit</span>
    </button>

</form>

@push('vue.data')
'checkbox_vue': 1
@endpush