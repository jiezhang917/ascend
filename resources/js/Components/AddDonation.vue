<template>
    <div class="px-7">
        <h2 class="text-dark-slate-blue font-bold text-xl mb-4 text-center">
            What kind of donation do you need? 
        </h2>

        <p class="text-dark-slate-blue text-sm mb-3.5 text-center">
            Customers are willing to help!
        </p>

        <div class="mb-24">
            <div class="mb-6 grid grid-cols-6 gap-4" v-for="(donation, index) in donations" :key="index">
                <jet-input type="number" class="col-span-2 h-14 p-2.5" v-model="donation.amount" placeholder="Amount"/>

                <jet-input class="col-span-3 h-14 p-2.5" v-model="donation.purpose" placeholder="Donation for"/>

                <div class="col-span-1 flex justify-between items-center">
                    <svg class="w-auto h-6 cursor-pointer" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" 
                        @click="remove(index)">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <svg class="w-auto h-6 cursor-pointer" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" 
                        @click="add">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>

                <jet-input class="col-span-6 h-14 p-2.5" v-model="donation.account" placeholder="Add Venmo Name"/>
            </div>
        </div>

        <div class="text-xs text-center">
            <p>Jack, funded $100 for marketing on March. 14. 2021</p>
            <p class="opacity-70">Tom, funded $400 for design on March. 12. 2021</p>
            <p class="opacity-50">Mary, funded $60 for repairing on March. 10. 2021</p>
        </div>

        <!-- actions -->
        <div class="flex justify-between">
            <jet-button class="block uppercase text-white text-sm text-center font-bold bg-orange py-3 rounded-xl mb-7" 
                @click="$emit('go-prev')">
                Prev
            </jet-button>
            <jet-button class="block uppercase text-white text-sm text-center font-bold bg-orange py-3 rounded-xl mb-7 disabled:opacity-50" 
                @click="submit" :disabled="btnDisabled">
                Next
            </jet-button>
        </div>
    </div>
</template>

<script>
    import JetButton from '@/Jetstream/Button';
    import JetInput from '@/Jetstream/Input'

    export default {
        props: ['initialDonations'],
        data() {
            return {
                donations: this.initialDonations
            }
        },
        emits: ['go-prev', 'update:donation'],
        components: {
            JetButton,
            JetInput,
        },
        computed: {
            btnDisabled() {
                let disabled = false;
                this.donations.forEach(item => {
                    if (!item.amount || !item.purpose || !item.account) {
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
                    account: '',
                });
            },
            remove(index) {
                if (this.donations.length > 1) {
                    this.donations.splice(index, 1);
                }
            },
            submit() {
                this.$emit('update:donation', this.donations);
            }
        }
    }
</script>