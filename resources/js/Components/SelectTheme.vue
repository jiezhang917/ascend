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
                <button :class="['w-20', 'h-20', 'rounded-full', 'border-4', 'border-black', selected === color ? 'bg-gray-200' : '']" 
                    @click="setTheme(color)" />
                <p class="text-center text-sm text-dark-slate-blue mt-4">{{ color }}</p>
            </div>
        </div>
    </div>
</template>

<script>
    import JetButton from '@/Jetstream/Button';

    export default {
        data() {
            return {
                colors: ['Modern', 'Traditional', 'Rustic', 'Industrial', 'Bohemian', 'Zen'],
                selected: ''
            }
        },
        emits: ['update:theme'],
        components: {
            JetButton,
        },
        methods: {
            setTheme(color) {
                this.selected = color;
                this.$emit('update:theme', color);
            }
        }
    }
</script>