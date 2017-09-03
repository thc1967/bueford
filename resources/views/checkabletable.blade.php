<b-table
    class="section"
    :data="tableDataSimple"
    :checked-rows.sync="checkedRows"
    checkable>

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

</b-table>

@push('vue.data')
'checkedRows': [],  // Required for check all button to work
@endpush