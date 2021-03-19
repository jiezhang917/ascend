<template>
    <div class="px-7">
        <h2 class="text-dark-slate-blue font-bold text-xl mb-10 text-center">
            Great! Let’s save your info and have you start to get help.
        </h2>

        <p class="grid grid-cols-6 gap-4 mb-10">
            <span class="col-span-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-auto h-11">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M11 4a2 2 0 114 0v1a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-1a2 2 0 100 4h1a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-1a2 2 0 10-4 0v1a1 1 0 01-1 1H7a1 1 0 01-1-1v-3a1 1 0 00-1-1H4a2 2 0 110-4h1a1 1 0 001-1V7a1 1 0 011-1h3a1 1 0 001-1V4z" />
                </svg>
            </span>
            <span class="col-span-5">Build up the relationship with your customers!</span>
        </p>

        <p class="grid grid-cols-6 gap-4 mb-14">
            <span class="col-span-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-auto h-11">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </span>
            <span class="col-span-5">Increase awareness of your financial needs without asking directly.</span>
        </p>

        <jet-button class="block uppercase text-white text-sm text-center font-bold bg-button w-full py-3 rounded-xl mb-7" @click="$emit('submit')">
            CONTINUE WITH WECHAT
        </jet-button>
        <jet-button class="block uppercase text-white text-sm text-center font-bold bg-button w-full py-3 rounded-xl mb-7" @click="$emit('submit')">
            CONTINUE WITH FACEBOOK
        </jet-button>
    </div>
</template>

<script>
    import JetButton from '@/Jetstream/Button';

    export default {
        components: {
            JetButton,
        },
    }
</script>