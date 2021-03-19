<template>
    <div class="relative px-7">
        <h2 class="text-dark-slate-blue font-bold text-xl mb-4 text-center">
            Let your business shine.
        </h2>
        <p class="text-dark-slate-blue text-sm mb-3.5 text-center">
            Let people know your business <br class="inline-block md:hidden"/> why you are great!
        </p>

        <!-- todo: show icon if has input -->
        <jet-input class="h-14 block mb-6 p-2.5 w-full" placeholder="Business name" 
            v-model="name" @change="$emit('update-name', name)"/>

        <!-- todo: show modal with examples -->
        <jet-input class="h-14 block mb-6 p-2.5 w-full" placeholder="Describe your business" 
            v-model="description" @change="$emit('update-desc', description)"/>

        <jet-input class="h-14 block mb-6 p-2.5 w-full" placeholder="Pick a business category" 
            v-model="category" @change="$emit('update-category', category)"/>

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
        data() {
            return {
                name: this.businessName,
                description: this.businessDesc,
                category: this.businessCategory
            }
        }
    }
</script>