<template>
    <div class="relative px-7">
        <h2 class="text-dark-slate-blue font-bold text-xl mb-4 text-center">
            Let your business shine.
        </h2>
        <p class="text-dark-slate-blue text-sm mb-3.5 text-center">
            Let people know your business <br class="inline-block md:hidden"/> why you are great!
        </p>

        <div class="relative">
            <!-- todo: show icon if has input -->
            <jet-input type="text" class="h-14 w-full p-2.5 mb-6" placeholder="Business name" 
                v-model="name"/>

            <div class="absolute right-2 top-3" v-if="name">
                <svg class="h-8 w-auto stroke-current text-blue-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>
        </div>

        <div class="relative">
            <!-- todo: show modal with examples -->
            <jet-input type="text" class="h-14 w-full p-2.5 mb-6" placeholder="Describe your business" 
                v-model="description"/>

            <div class="absolute right-2 top-3" v-if="description">
                <svg class="h-8 w-auto stroke-current text-blue-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>
        </div>

        <div class="relative">
            <jet-input type="text" class="h-14 w-full p-2.5 mb-6" placeholder="Pick a business category" 
                v-model="category"/>

            <div class="absolute right-2 top-3" v-if="category">
                <svg class="h-8 w-auto stroke-current text-blue-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>
        </div>

        <div class="flex items-center">
            <slot></slot>
        </div>

        <!-- actions -->
        <div class="fixed w-full bottom-0 left-0 grid grid-cols-12">
            <div class="col-start-2 col-span-10">
                <jet-button class="w-full uppercase text-white text-sm justify-center font-bold bg-orange py-3 mt-7 rounded-xl mb-7 disabled:opacity-50" 
                    @click="submit" :disabled="!name || !description || !category">
                    Next
                </jet-button>
            </div>
        </div>
    </div>
</template>

<script>
    import JetInput from '@/Jetstream/Input'
    import JetButton from '@/Jetstream/Button';

    export default {
        props: ['businessName', 'businessDesc', 'businessCategory'],
        components: {
            JetInput,
            JetButton,
        },
        emits: ['update:info', 'go-next'],
        data() {
            return {
                name: this.businessName,
                description: this.businessDesc,
                category: this.businessCategory,
            }
        },
        methods: {
            submit() {
                this.$emit('update:info', this.$data);
            },
        }
    }
</script>