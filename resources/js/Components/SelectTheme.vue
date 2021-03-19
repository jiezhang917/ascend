<template>
    <div class="px-7 mb-7">
        <h2 class="text-dark-slate-blue font-bold text-xl mb-4 text-center">
            Choose a color scheme for your profile. 
        </h2>
        
        <p class="text-dark-slate-blue text-sm mb-3.5 text-center">
            Choose one that reflects your business.
        </p>

        <div class="grid grid-cols-3 gap-4 justify-items-center">
            <div v-for="color in colors" :key="color">
                <button :class="['w-20', 'h-20', 'rounded-full', 'border-4', 'border-black', theme === color ? 'bg-gray-200' : '']" 
                    @click="setTheme(color)" />
                <p class="text-center text-sm text-dark-slate-blue mt-4">{{ color }}</p>
            </div>
        </div>

        <!-- actions -->
        <div class="flex justify-between mt-9">
            <jet-button class="block uppercase text-white text-sm text-center font-bold bg-button py-3 rounded-xl mb-7" 
                @click="$emit('go-prev')">
                Prev
            </jet-button>
            <jet-button class="block uppercase text-white text-sm text-center font-bold bg-button py-3 rounded-xl mb-7 disabled:opacity-50" 
                @click="submit" :disabled="!theme">
                Next
            </jet-button>
        </div>
    </div>
</template>

<script>
    import JetButton from '@/Jetstream/Button';

    export default {
        props: ['initialTheme'],
        data() {
            return {
                colors: ['Modern', 'Traditional', 'Rustic', 'Industrial', 'Bohemian', 'Zen'],
                theme: this.initialTheme,
            }
        },
        emits: ['go-prev', 'update:theme'],
        components: {
            JetButton,
        },
        methods: {
            setTheme(color) {
                this.theme = color;
            },
            submit() {
                this.$emit('update:theme', this.theme);
            }
        }
    }
</script>