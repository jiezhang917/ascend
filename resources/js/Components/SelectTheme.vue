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
                <div :class="['rounded-full', 'bg-gray-200', 'outline-none', 'focus:outline-none', theme === color ? 'h-28' : 'color-box']">
                    <button :class="['color-box', 'outline-none', 'focus:outline-none',
                        'color-' + color.toLowerCase(), theme === color ? 'border-blue-300' : '']" 
                        @click="setTheme(color)" />
                </div>
                <p class="text-center text-sm text-dark-slate-blue mt-4">{{ color }}</p>
            </div>
        </div>

        <!-- actions -->
        <jet-button class="w-full uppercase text-white text-sm justify-center font-bold bg-orange py-3 mt-9 rounded-xl mb-7 disabled:opacity-50" 
            @click="submit" :disabled="!theme">
            Next
        </jet-button>
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