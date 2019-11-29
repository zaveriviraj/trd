<template>
    <div class="mb-2 pb-2">
        <div class="d-flex justify-content-between align-items-center">
            <strong>{{ note.user.name }} said...</strong>
            <p class="text-muted">{{ timeAgo }}</p>
        </div>
        <p v-show="! editing">{{ note.body }}</p>
        <p v-if="! editing"><a href="#" @click.prevent="editing = true" v-show="editable" class="mr-2">Edit</a></p>
        <div v-show="editing" class="mt-2">
            <textarea rows="2" v-model="note.body" class="form-control"></textarea>
            <div class="d-flex mt-3">
                <a href="#" @click.prevent="editing = false" class="btn btn-sm btn-link mr-2">Cancel</a>
                <a href="#" @click.prevent="saveNote" class="btn btn-sm btn-outline-primary">Save</a>
            </div>
        </div>
    </div>
</template>

<script>
    import moment from 'moment'

    export default {
        props: ['data', 'editableFlag'],
        data() {
            return {
                note: this.data,
                editable: this.editableFlag,
                editing: false
            }
        },
        computed: {
            timeAgo() {
                return moment.utc(this.note.updated_at).fromNow();
            }
        },
        mounted() {
            // console.log('Component mounted.');
        },
        methods: {
            saveNote: function() {
                axios.patch(this.note.path, {
                    body: this.note.body
                }).then( (response) => {
                    this.note = response.data;
                    this.editing = false;
                }).catch( (error) => {
                    console.log(error);
                });
            }
        }
    }
</script>
