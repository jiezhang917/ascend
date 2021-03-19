<template>
    <div class="px-7">
        <h2 class="text-dark-slate-blue font-bold text-xl mb-4 text-center">
            What kind of donation do you need? 
        </h2>

        <p class="text-dark-slate-blue text-sm mb-3.5 text-center">
            Customers are willing to help!
        </p>

        <div class="grid grid-cols-6 gap-4 mb-24">
            <jet-input class="col-span-2 h-14 p-2.5" v-model="amount" placeholder="Amount"/>

            <jet-input class="col-span-3 h-14 p-2.5" v-model="purpose" placeholder="Donation for"/>

            <div class="col-span-1">
                <svg class="w-auto h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>

            <jet-input class="col-span-6 h-14 p-2.5" v-model="account" placeholder="Add Venmo Name"/>
        </div>

        <div class="text-xs text-center">
            <p>Jack, funded $100 for marketing on March. 14. 2021</p>
            <p class="opacity-70">Tom, funded $400 for design on March. 12. 2021</p>
            <p class="opacity-50">Mary, funded $60 for repairing on March. 10. 2021</p>
        </div>
    </div>
</template>

<script>
    import JetButton from '@/Jetstream/Button';
    import JetInput from '@/Jetstream/Input'

    export default {
        data() {
            return {
                amount: 0,
                purpose: '',
                account: ''
            }
        },
        components: {
            JetButton,
            JetInput,
        },
    }
</script>