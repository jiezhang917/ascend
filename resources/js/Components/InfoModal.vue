<template>
    <modal class="text-modal">
        <template v-slot:header>
            <div class="text-center mb-9">
                <hr class="w-12 bg-dark-blue h-1 mx-auto mb-9">
                <h2 class="text-base font-bold">More great examples</h2>
            </div>
        </template>

        <template v-slot:body>
            <div class="text-xs">
                <h3 class="h-7"><b>Company name:</b> Starbucks</h3>

                <p class="mb-8">
                    <b>Business description:</b> We are more than just great coffee. Explore the menu, sign up for Starbucks® Rewards, manage your gift card and more. Our mission is to inspire and nurture the human spirit – one person, one cup and one neighborhood at a time.
                </p>

                <h3 class="h-7"><b>Company name:</b> Dunkin’</h3>

                <p class="mb-10">
                    <b>Mission:</b> Dunkin', also known as Dunkin' Donuts, is an American multinational coffee and doughnut company. It was founded by William Rosenberg in Quincy, Massachusetts, in 1950. We strive to keep you at your best, and we remain loyal to you, your tastes and your time. That's what America runs on. Dunkin' is the world's leading baked goods and coffee chain, serving more than 3 million customers each and every day. 
                </p>
            </div>
        </template>
    </modal>
</template>

<style>
    .modal-wrapper {
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        background-color: rgba(196, 196, 196, 0.4);
    }
    .modal-container {
        margin-top: 5rem !important;
        border-radius: 10px !important;
    }
</style>

<script>
    import Modal from './Modal';

    export default {
        components: {
            Modal
        },
    }
</script>