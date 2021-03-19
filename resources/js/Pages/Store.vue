<template>
    <div>
        <div class="h-32 border flex justify-center items-center">
            <div class="p-1 h-20 border">
                <img :src="store.qr" alt="store.name" class="h-full w-auto">
            </div>
        </div>

        <div class="px-7 text-dark">
            <h1 class="text-lg font-bold mb-4 mt-12">{{store.name}}</h1>

            <p class="text-sm mb-3.5">About the business: Bringing high-quality milk tea, and delicious, fresh boba to all. </p>

            <hr class="border bg-green mb-3">

            <h2 class="text-base font-bold mb-4">Support the business</h2>

            <div class="grid grid-cols-2 gap-2.5">
                <jet-button class="bg-green font-bold text-sm justify-center col-span-2">
                    BUY GIFT CARD
                </jet-button>

                <jet-button class="bg-green font-bold text-sm justify-center">
                    DONATE
                </jet-button>

                <jet-button class="bg-green font-bold text-sm justify-center">
                    SHARE
                </jet-button>
            </div>

            <hr class="border bg-green mt-5 mb-3.5">

            <h2 class="text-base font-bold text-center mb-3.5">Funding progress</h2>

            <div class="mb-3" v-for="funding in fundings" :key="funding.name">
                <div class="grid grid-cols-10">
                    <p class="col-span-7 text-xs">{{funding.name}}</p>
                    <p class="col-span-3 text-right text-xs font-bold">${{funding.amount}} away</p>
                </div>
                <div class="overflow-hidden h-2 text-xs flex rounded bg-green-100 mt-2">
                    <div :style="{width: funding.progress + '%'}" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-300"></div>
                </div>
            </div>

            <hr class="border bg-green mt-2 mb-3">

            <h2 class="text-base font-bold text-center mb-5">More business info</h2>

            <!-- share options -->
            <div class="grid grid-cols-2">
                <div class="text-center">
                    <p>icon</p>
                    <p>Facebook</p>
                </div>
                <div class="text-center">
                    <p>icon</p>
                    <p>Wechat</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import JetButton from '@/Jetstream/Button';

    export default {
        props: ['store'],
        data() {
            return {
                fundings:[
                    {name: 'Purchase a new stove', amount: 150, progress: 20},
                    {name: 'Purchase a new table', amount: 120, progress: 40},
                ]
            }
        },
        components: {
            JetButton
        }
    }
</script>