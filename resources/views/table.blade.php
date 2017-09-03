<b-table class="section"
    :data="tableDataSimple"
    bordered="true"
    striped="true"
    narrowed="true"
    {{--  loading="false"  --}}
    mobile-cards="true">

    <template scope="props">
        <b-table-column label="ID" width="40" numeric>
            @{{ props.row.id }}
        </b-table-column>

        <b-table-column label="First Name">
            @{{ props.row.first_name }}
        </b-table-column>

        <b-table-column label="Last Name">
            @{{ props.row.last_name }}
        </b-table-column>

        <b-table-column label="Date" centered>
            @{{ new Date(props.row.date).toLocaleDateString() }}
        </b-table-column>

        <b-table-column label="Gender">
            @{{ props.row.gender }}
        </b-table-column>
    </template>

    <template slot="empty">
        <section class="section">
            <div class="content has-text-grey has-text-centered">
                <p>
                    <b-icon
                        icon="sentiment_very_dissatisfied"
                        size="is-large">
                    </b-icon>
                </p>
                <p>Nothing here.</p>
            </div>
        </section>
    </template>
</b-table>

@push('vue.data')
'tableDataSimple': [
    { 'id': 1, 'first_name': 'Jesse', 'last_name': 'Simmons', 'date': '2016-10-15 13:43:27', 'gender': 'Male' },
    { 'id': 2, 'first_name': 'John', 'last_name': 'Jacobs', 'date': '2016-12-15 06:00:53', 'gender': 'Male' },
    { 'id': 3, 'first_name': 'Tina', 'last_name': 'Gilbert', 'date': '2016-04-26 06:26:28', 'gender': 'Female' },
    { 'id': 4, 'first_name': 'Clarence', 'last_name': 'Flores', 'date': '2016-04-10 10:28:46', 'gender': 'Male' },
    { 'id': 5, 'first_name': 'Anne', 'last_name': 'Lee', 'date': '2016-12-06 14:38:38', 'gender': 'Female' }
],
@endpush