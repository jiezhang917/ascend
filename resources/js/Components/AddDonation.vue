<template>
    <div class="px-7">
        <h2 class="text-dark-slate-blue font-bold text-xl mb-4 text-center">
            What’s kinds of donations <br class="md:hidden">do you need? 
        </h2>

        <p class="text-dark-slate-blue text-sm mb-3.5 text-center">
            Customers are willing to help!
        </p>

        <div class="mb-24">
            <div class="mb-6 grid grid-cols-6 gap-4" v-for="(donation, index) in donations" :key="index">
                <div class="col-span-2">
                    <div class="relative">
                        <span class="absolute left-2 top-4">$</span>
                        <input type="number" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm h-14 w-full p-2.5 pl-5" 
                            :value="donation.amount" @change="update($event, index, 'amount')" placeholder="Amount"/>
                    </div>
                </div>

                <div class="col-span-3">
                    <input type="text" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm h-14 w-full p-2.5" 
                        :value="donation.purpose"  @change="update($event, index, 'purpose')" placeholder="Donation for"/>
                </div>

                <div :class="['col-span-1 flex flex-col items-center', index === 0 ? 'justify-center' : 'justify-between']">
                    <svg class="w-auto h-6 cursor-pointer" viewBox="0 0 395 395" fill="none" xmlns="http://www.w3.org/2000/svg"
                        @click="remove(index)" v-if="index !== 0">
                        <g clip-path="url(#clip0)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M197 45C112.5 45 44 113.5 44 198C44 282.5 112.5 351 197 351C281.5 351 350 282.5 350 198C350 113.5 281.5 45 197 45ZM20 198C20 100.246 99.2456 21 197 21C294.754 21 374 100.246 374 198C374 295.754 294.754 375 197 375C99.2456 375 20 295.754 20 198Z" fill="#FF6363"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M275.114 198.082C275.15 204.71 269.806 210.111 263.179 210.146L130.95 210.853C124.322 210.889 118.921 205.545 118.886 198.918C118.85 192.29 124.194 186.889 130.821 186.854L263.05 186.147C269.678 186.111 275.079 191.455 275.114 198.082Z" fill="#FF6363"/>
                        </g>
                        <defs>
                        <clipPath id="clip0">
                        <rect width="395" height="395" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>

                    <svg class="h-6 w-auto cursor-pointer" viewBox="0 0 395 395" fill="none" xmlns="http://www.w3.org/2000/svg"
                        @click="add">
                        <g clip-path="url(#clip0)">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M197 45C112.5 45 44 113.5 44 198C44 282.5 112.5 351 197 351C281.5 351 350 282.5 350 198C350 113.5 281.5 45 197 45ZM20 198C20 100.246 99.2456 21 197 21C294.754 21 374 100.246 374 198C374 295.754 294.754 375 197 375C99.2456 375 20 295.754 20 198Z" fill="#FF6363"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M275.114 198.082C275.15 204.71 269.806 210.111 263.179 210.146L130.95 210.853C124.322 210.889 118.921 205.545 118.886 198.918C118.85 192.29 124.194 186.889 130.821 186.854L263.05 186.147C269.678 186.111 275.079 191.455 275.114 198.082Z" fill="#FF6363"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M196.582 120.386C203.21 120.35 208.611 125.694 208.646 132.321L209.353 264.55C209.389 271.178 204.045 276.579 197.418 276.614C190.79 276.65 185.389 271.306 185.354 264.679L184.647 132.45C184.611 125.822 189.955 120.421 196.582 120.386Z" fill="#FF6363"/>
                        </g>
                        <defs>
                        <clipPath id="clip0">
                        <rect width="395" height="395" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                </div>
            </div>
            
            <div class="mt-7 relative">
                <jet-input type="text" class="h-14 w-full p-2.5 pl-6" v-model="account" placeholder="Add Venmo Name"/>
                <span class="absolute left-2 top-4">&#x00040;</span>
            </div>
        </div>

        <div class="text-xs text-center">
            <p>Jack, funded $100 for marketing on March. 14. 2021</p>
            <p class="opacity-70">Tom, funded $400 for design on March. 12. 2021</p>
            <p class="opacity-50">Mary, funded $60 for repairing on March. 10. 2021</p>
        </div>

        <!-- actions -->
        <jet-button class="w-full uppercase text-white text-sm justify-center font-bold bg-orange py-3 rounded-xl mb-7 disabled:opacity-50" 
            @click="submit" :disabled="btnDisabled">
            Next
        </jet-button>
    </div>
</template>

<script>
    import JetButton from '@/Jetstream/Button';
    import JetInput from '@/Jetstream/Input'

    export default {
        props: ['initialAccount', 'initialDonations'],
        data() {
            return {
                account: this.initialAccount,
                donations: this.initialDonations
            }
        },
        emits: ['update:donation'],
        components: {
            JetButton,
            JetInput,
        },
        computed: {
            btnDisabled() {
                if (!this.account) return true;
                let disabled = false;
                this.donations.forEach(item => {
                    if (!item.purpose) {
                        disabled = true;
                        return;
                    }
                });
                return disabled;
            }
        },
        methods: {
            add() {
                this.donations.push({
                    amount: 0,
                    purpose: '',
                });
            },
            remove(index) {
                if (this.donations.length > 1) {
                    this.donations.splice(index, 1);
                }
            },
            update(e, index, key) {
                this.donations[index][key] = e.target.value;
            },
            submit() {
                this.$emit('update:donation', {
                    account: this.account,
                    donations: this.donations
                });
            }
        }
    }
</script>