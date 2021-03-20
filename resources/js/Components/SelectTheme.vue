<template>
    <div class="px-8 mb-7">
        <h2 class="text-dark-slate-blue font-bold text-xl mb-4 text-center">
            Personalize your profile.  
        </h2>
        
        <p class="text-dark-slate-blue text-sm mb-3.5 text-center">
            Choose a color scheme that reflects your business!
        </p>

        <div class="grid grid-cols-3 gap-x-4 justify-items-center">
            <div v-for="color in colors" :key="color">
                <div :class="['rounded-full h-28 outline-none focus:outline-none flex flex-wrap', theme === color ? 'bg-gray-200 content-start' : 'content-end']">
                    <button :class="['color-box outline-none focus:outline-none', 'color-' + color.replace(' ', '_').toLowerCase()]" 
                        @click="setTheme(color)" />
                </div>
                <p class="text-center text-sm text-dark-slate-blue mt-4">{{ color }}</p>
            </div>
        </div>

        <!-- actions -->
        <div class="fixed w-full bottom-0 left-0 grid grid-cols-12">
            <div class="col-start-2 col-span-10">
                <jet-button class="w-full uppercase text-white text-sm justify-center font-bold bg-orange py-3 mt-9 rounded-xl mb-7 disabled:opacity-50" 
                    @click="submit" :disabled="!theme">
                    Next
                </jet-button>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .color-box {
        width: 90px;
        height: 94px;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }
    .color-bohemian {
        background-image: url('../../images/Bohemian.png');
    }
    .color-industrial {
        background-image: url('../../images/Industrial.png');
    }
    .color-modern {
        background-image: url('../../images/Modern.png');
    }
    .color-rustic_selected {
        background-image: url('../../images/Rustic_selected.png');
    }
    .color-rustic {
        background-image: url('../../images/Rustic.png');
    }
    .color-traditional {
        background-image: url('../../images/Traditional.png');
    }
    .color-zen {
        background-image: url('../../images/Zen.png');
    }
</style>

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
        emits: ['update:theme'],
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