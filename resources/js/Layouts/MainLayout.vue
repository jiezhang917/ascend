<template>
    <div class="app-wrapper min-h-screen">
        <!-- Page Content -->
        <main class="app">
            <slot></slot>
        </main>
    </div>
</template>

<style scoped>
.app-wrapper {
    background-color: #fef6e4;
}

.app {
    max-width: 1080px;
    margin: auto;
}
</style>

<script>
    export default {

    }
</script>
