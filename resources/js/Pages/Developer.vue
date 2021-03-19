<template>
    <div>
        <template>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Developer Zone
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <h1 class="text-center text-lg mb-4">
                    Hello from HELB!
                </h1>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <inertia-link href="/login" class="text-center underline">Login</inertia-link>
                <inertia-link href="/register" class="text-center underline">Register</inertia-link>
            </div>
        </div>
    </div>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        props: {
            canLogin: Boolean,
            canRegister: Boolean,
        },
        components: {
            AppLayout,
        },
    }
</script>
