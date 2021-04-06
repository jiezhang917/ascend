<template>
    <div class="store-wrapper">
        <div class="h-32 bg-no-repeat bg-cover bg-scroll relative linear-bg">
            <div class="flex justify-center items-center w-full h-full">
                <div class="p-1 h-20 border">
                    <img :src="store.qr" alt="store.name" class="h-full w-auto">
                </div>
            </div>
            <div class="absolute -bottom-8 left-0">
                <img :src="storeImg" :alt="store.name + ' owner'" class="w-20 h-20 ml-5 rounded-full">
            </div>
        </div>

        <div class="px-7 text-dark">
            <h1 class="text-lg font-bold mb-4 mt-12">{{store.name}}</h1>

            <p class="text-sm mb-3.5">About the business: Bringing high-quality milk tea, and delicious, fresh boba to all. </p>

            <hr class="border bg-light-green mb-3">

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

            <hr class="border bg-light-green mt-5 mb-3.5">

            <h2 class="text-base font-bold text-center mb-3.5">Funding progress</h2>

            <div class="mb-3" v-for="funding in fundings" :key="funding.name">
                <div class="grid grid-cols-10">
                    <p class="col-span-7 text-xs">{{funding.name}}</p>
                    <p class="col-span-3 text-right text-xs font-bold">${{funding.amount}} away</p>
                </div>
                <div class="w-full">
                    <div class="overflow-hidden h-6 text-xs flex rounded progress-bar mt-2 rounded-full">
                        <div :style="{width: funding.progress + '%'}"
                            class="shadow-none flex flex-col whitespace-nowrap text-white justify-center bg-green rounded-full"
                        ></div>
                    </div>
                </div>
            </div>

            <hr class="border bg-green mt-2 mb-3">

            <h2 class="text-base font-bold text-center mb-5">More business info</h2>

            <!-- share options -->
            <div class="grid grid-cols-2">
                <div class="text-center">
                    <div class="fb-share-button" data-href="https://developers.facebook.com/docs/plugins/"
                        data-layout="button_count" data-size="small"
                    >
                        <a target="_blank" :href="'https://www.facebook.com/sharer/sharer.php?u=' + pageUrl"
                            class="fb-xfbml-parse-ignore icon-facebook"
                        >
                            <span class="inline-block w-5"></span>
                        </a>
                    </div>
                    <p>Facebook</p>
                </div>
                <div class="flex flex-col items-center">
                    <p><img src="../../images/wechat.png" alt=""></p>
                    <p>Wechat</p>
                </div>
            </div>
        </div>
    </div>
</template>

<style scoped>
    .store-wrapper {
        background-color: #FEF6E4;
    }
    .linear-bg {
        background-image: linear-gradient(rgb(116, 191, 80) 0%, rgb(158, 59, 16) 100%);
    }
    .icon-facebook {
        background-image: url('../../images/facebook.png');
        background-repeat: no-repeat;
        background-size: 13px 22px;
        display: inline-block;
    }
    .progress-bar {
        background-color: rgba(243, 210, 193, 0.68);
    }
</style>

<script>
    import JetButton from '@/Jetstream/Button';

    export default {
        props: ['store'],
        data() {
            return {
                pageUrl: window.location.href,
                fundings:[
                    {name: 'Purchase a new stove', amount: 150, progress: 8},
                    {name: 'Purchase a new table', amount: 120, progress: 8},
                ],
                image: this.store.images ? '/images/stores/' + this.store.images.replace(/"/g, '') : ''
            }
        },
        computed: {
            storeImg() {
                return this.image ? this.image : '/images/stores/happy.png';
            }
        },
        components: {
            JetButton
        },
        mounted() {
            let fbScript = document.createElement('script');
            fbScript.setAttribute('src', 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v10.0&appId=413915962805201&autoLogAppEvents=1');
            fbScript.setAttribute('nonce', 'l6GsBkVv');
            fbScript.setAttribute('crossorigin', 'anonymous');
            document.head.appendChild(fbScript);
        }
    }
</script>
