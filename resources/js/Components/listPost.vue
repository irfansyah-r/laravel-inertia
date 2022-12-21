<template>
    <div class="p-6 border-t border-gray-200">
        <div class="ml-4 items-center">
                <h2 class="text-lg text-gray-600 leading-7 font-semibold" v-text="title"></h2>                        
                <span class="text-sm text-gray-400" v-text="'Posted by '+username+' - '+published_at"></span>
        </div>

        <div class="ml-12">
            <div class="mt-2 text-sm text-gray-500" v-text="body">
                Laravel has wonderful documentation covering every aspect of the framework. Whether you're new to the framework or have previous experience, we recommend reading all of the documentation from beginning to end.
            </div>
        </div>
    </div>
</template>

<script>

export default {
    props: ['title', 'body', 'username', 'published_at'],
}

</script>