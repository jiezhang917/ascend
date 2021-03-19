<template>
    <div class="relative px-7">
        <h2 class="text-dark-slate-blue font-bold text-xl mb-4 text-center">
            Let your business shine.
        </h2>
        <p class="text-dark-slate-blue text-sm mb-3.5 text-center">
            Let people know your business <br class="inline-block md:hidden"/> why you are great!
        </p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- todo: show icon if has input -->
            <jet-input class="h-14 w-full p-2.5 md:col-span-2" placeholder="Business name" 
                v-model="name"/>

            <!-- todo: show modal with examples -->
            <jet-input class="h-14 w-full p-2.5 md:col-span-2" placeholder="Describe your business" 
                v-model="description"/>

            <jet-input class="h-14 w-full p-2.5 md:col-span-1" placeholder="Pick a business category" 
                v-model="category"/>

            <div class="md:col-span-1 flex items-center">
                <slot></slot>
            </div>

        </div>

        <!-- actions -->
        <div class="flex justify-between mt-7">
            <jet-button class="block uppercase text-white text-sm text-center font-bold bg-orange py-3 rounded-xl mb-7" 
                @click="$emit('go-prev')">
                Prev
            </jet-button>
            <jet-button class="block uppercase text-white text-sm text-center font-bold bg-orange py-3 rounded-xl mb-7 disabled:opacity-50" 
                @click="submit" :disabled="!name || !description || !category">
                Next
            </jet-button>
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
        emits: ['update:info', 'go-prev', 'go-next'],
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
            }
        }
    }
</script>