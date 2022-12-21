<template>
    <div>
        <input v-model="form.title" class="shadow appearance-none border rounded w-full p-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline-gray" type="text" placeholder="Post Title">
        <textarea v-model="form.body" class="shadow appearance-none border rounded w-full my-2 p-2 text-gray-700 leading-tight focus:outline-none focus:shadow-outline-gray" rows="5" placeholder="Post Body"></textarea>

        <div class="flex justify-end">
            <button class="p-2 bg-blue-600 hover:bg-blue-700 text-white rounded" @click.prevent="save(form)">Post</button>
        </div>
    </div>
</template>

<script>

export default {
    data(){
        return {
            form: this.$inertia.form({
                user_id: 1,
                title: '',
                body: '',
            }),
        }
    },
    methods: {
        save(data) {
            this.form.post('dashboard', data);
        },
    }
}
</script>