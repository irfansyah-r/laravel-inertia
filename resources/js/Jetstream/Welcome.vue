<template>
    <div>
        <div class="p-4 bg-white">
            <createPost/>

            <!-- <div class="mt-8 text-2xl">
                Welcome to your Jetstream application!
            </div>

            <div class="mt-6 text-gray-500">
                Laravel Jetstream provides a beautiful, robust starting point for your next Laravel application. Laravel is designed
                to help you build your application using a development environment that is simple, powerful, and enjoyable. We believe
                you should love expressing your creativity through programming, so we have spent time carefully crafting the Laravel
                ecosystem to be a breath of fresh air. We hope you love it.
            </div> -->
        </div>

        <div class="bg-gray-200 bg-opacity-25" v-for="row in posts" :key="row.id">
            <listPost :title="row.title" :body="row.body" :username="row.user.name" :published_at="row.PublishedAt"/>
        </div>
    </div>
</template>

<script>
    import JetApplicationLogo from './../Jetstream/ApplicationLogo'
    import createPost from './../Components/createPost'
    import listPost from './../Components/listPost'

    export default {
        components: {
            JetApplicationLogo,
            createPost,
            listPost,
        },
        props: ['posts'],
    }
</script>