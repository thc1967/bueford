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
        <b-switch name="checkbox_switch"
            value="1"
            true-value="1"
            false-value="0"
            native-value="1">Checkbox as Switch</b-switch>
    </div>

    <b-field label="Select a date">
        <b-datepicker name="a_date"
            class="column is-4"
            v-model="date_vue"
            :focused-date="default_date"
            icon="today">

            <button class="button is-primary"
                type="button"
                @click="todayClick">
                <b-icon icon="today"></b-icon>
                <span>Today</span>
            </button>
        </b-datepicker>
    </b-field>

    <hr />

    <button class="button is-success" type="Submit">
        <span class="icon">
            <i class="fa fa-check-circle" aria-hidden="true"></i>
        </span>
        <span>Submit</span>
    </button>

</form>

@push('vue.data')
'checkbox_vue': 1,
'date_vue': '9/1/2017',
'default_date': new Date(),
@endpush
@push('vue.methods')
todayClick: function () {
    console.log('todayClick()');
    this.date_vue = new Date();
},
@endpush