<div class="section">
    <a class="button is-primary">Primary</a>
    <a class="button is-info">Info</a>
    <a class="button is-success">Success</a>
    <a class="button is-warning">Warning</a>
    <a class="button is-danger">Danger</a>
    <a class="button is-white">White</a>
    <a class="button is-light">Light</a>
    <a class="button is-dark">Dark</a>
    <a class="button is-black">Black</a>
    <a class="button is-link">Link</a>
</div>

<div class="section">

    <b-dropdown>
        <button class="button is-primary" slot="trigger">
            <span>Click me!</span>
            <b-icon icon="arrow_drop_down"></b-icon>
        </button>
        <b-dropdown-item>Action</b-dropdown-item>
        <b-dropdown-item>Another action</b-dropdown-item>
        <b-dropdown-item>Something else</b-dropdown-item>
    </b-dropdown>

    <button class="button is-primary"
        @click="isImageModalActive = true">
        Launch image modal
    </button>

    <button class="button is-primary"
        @click="isCardModalActive = true">
        Launch card modal
    </button>

    <button class="button is-danger" @click="confirmCustomDelete">
        Launch confirm (custom)
    </button>

    <button class="button is-success" @click="snackbar">
        Launch snackbar (default)
    </button>
</div>

<div class="section">
    <b-icon icon="person" type="is-primary"></b-icon>
    <b-icon icon="home" type="is-info"></b-icon>
    <b-icon icon="dashboard" type="is-success"></b-icon>
    <b-icon pack="fa" icon="user" type="is-warning"></b-icon>
    <b-icon pack="fa" icon="home" type="is-danger"></b-icon>
    <b-icon pack="fa" icon="dashboard" type="is-dark"></b-icon>
</div>

@push('modals')
<b-modal :active.sync="isImageModalActive">
    <p class="image is-4by3">
        <img src="http://via.placeholder.com/1280x960">
    </p>
</b-modal>

<b-modal :active.sync="isCardModalActive" :width="640">
    <div class="card">
        <div class="card-image">
            <figure class="image is-4by3">
                <img src="http://via.placeholder.com/1280x960" alt="Image">
            </figure>
        </div>
        <div class="card-content">
            <div class="media">
                <div class="media-left">
                    <figure class="image is-48x48">
                        <img src="http://via.placeholder.com/1280x960" alt="Image">
                    </figure>
                </div>
                <div class="media-content">
                    <p class="title is-4">John Smith</p>
                    <p class="subtitle is-6">@johnsmith</p>
                </div>
            </div>

            <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                <a>#css</a> <a>#responsive</a>
                <br>
                <small>11:09 PM - 1 Jan 2016</small>
            </div>
        </div>
    </div>
</b-modal>
@endpush

@push('vue.data')
'isImageModalActive': false,
'isCardModalActive': false,
@endpush

@push('vue.methods')
confirmCustomDelete() {
    this.$dialog.confirm({
        title: 'Deleting account',
        message: 'Are you sure you want to <b>delete</b> your account? This action cannot be undone.',
        confirmText: 'Delete Account',
        type: 'is-danger',
        hasIcon: true,
        onConfirm: () => this.$toast.open('Account deleted!')
    })
},
snackbar() {
    this.$snackbar.open({
        message: `Default, positioned bottom-right with a green 'OK' button`,
        type: 'is-success'
    });
},
@endpush