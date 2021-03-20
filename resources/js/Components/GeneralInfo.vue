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

            <div class="absolute right-2 top-3">
                <svg class="h-8 w-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" 
                    @click="showModal = true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>

            <div class="absolute right-9 top-3" v-if="description">
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
        <jet-button class="w-full uppercase text-white text-sm justify-center font-bold bg-orange py-3 mt-7 rounded-xl mb-7 disabled:opacity-50" 
            @click="submit" :disabled="!name || !description || !category">
            Next
        </jet-button>

        <info-modal v-if="showModal" @close="showModal = false"/>
    </div>
</template>

<script>
    import JetInput from '@/Jetstream/Input'
    import JetButton from '@/Jetstream/Button';
    import InfoModal from './InfoModal';

    export default {
        props: ['businessName', 'businessDesc', 'businessCategory'],
        components: {
            JetInput,
            JetButton,
            InfoModal,
        },
        emits: ['update:info', 'go-next'],
        data() {
            return {
                name: this.businessName,
                description: this.businessDesc,
                category: this.businessCategory,
                showModal: false
            }
        },
        methods: {
            submit() {
                this.$emit('update:info', this.$data);
            },
        }
    }
</script>